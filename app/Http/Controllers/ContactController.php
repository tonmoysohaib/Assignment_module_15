<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function submit(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
            'attachment'=>'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('attachment')) {
        $path = $request->file('attachment')->store('attachments', 'public');
        }


        // Process the form data (e.g., send an email, save to database, etc.)
        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'attachment' => $path,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // For demonstration, we'll just return a success message.
        return redirect()
        ->route('contact.confirmation')
        ->with('success', 'Thank you for contacting us! We will get back to you soon.')
        ->with('data', 
            [
                    'name'      => $request->name,
                    'email'     => $request->email,
                    'phone'     => $request->phone,
                    'message'   => $request->message,
                    'attachment'=> $path,
            ])
        ->cookie('file_uploaded', 'true', 3);

    }


    public function confirmation()
    {
        $data = session('data'); // get submitted data from session

        if (!$data) {
            return redirect()->route('contact.index')->with('error', 'No data to show.');
        }

        return view('contact-confirmation', compact('data'));
    }
}

