@extends('layout.layout')

@section('content')
<section class="py-5">
    <div class="container px-5">

        {{-- ✅ Show success message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- ✅ Show cookie message --}}
        @if (Cookie::get('file_uploaded'))
            <div class="alert alert-info">Your file was uploaded successfully.</div>
        @endif

        <h2 class="fw-bold mb-4">Submitted Data</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>Name:</strong> {{ $data['name'] }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $data['email'] }}</li>
            <li class="list-group-item"><strong>Phone:</strong> {{ $data['phone'] }}</li>
            <li class="list-group-item"><strong>Message:</strong> {{ $data['message'] }}</li>
            @if (!empty($data['attachment']))
                <li class="list-group-item">
                    <strong>Attachment:</strong>
                    <a href="{{ asset('storage/' . $data['attachment']) }}" target="_blank">View File</a>
                </li>
            @endif
        </ul>
    </div>
</section>
@endsection
