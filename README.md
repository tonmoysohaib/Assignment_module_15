# 📌 Laravel Portfolio Project  

This is a Laravel-based portfolio website containing:  

- ✅ **Resume Page**  
- ✅ **Contact Page with File Upload**  
- ✅ **File Upload Handling (with cookies & success message)**  
- ✅ **Bootstrap 5 UI**  

---

## 📹 Project Video
You can watch the full walkthrough of the project here:  
[Watch Video](https://drive.google.com/file/d/1QYPFnvpczsvLanLZ7wmPjP7nWk6tDFAf/view?usp=sharing)

---

## 🚀 Features  

- **Contact Form**:  
  - Name, Email, Phone, Message fields  
  - Attachment upload (PDF, DOC, Images)  
  - Validation with error messages  
  - Success message & cookie (`file_uploaded=true`) after upload  

- **Resume Page**:  
  - Show skills, education, and experience  

- **File Upload**:  
  - Stored in `storage/app/public/attachments`  
  - Max size: `2MB`  
  - Allowed types: `.pdf, .doc, .docx, .png, .jpg, .jpeg`  

---

## 🛠️ Installation  

### 1. Clone the repo
```bash
git clone https://github.com/your-username/laravel-portfolio.git
cd laravel-portfolio

2. Install dependencies
composer install
npm install && npm run dev

3. Set environment
cp .env.example .env
php artisan key:generate

4. Run migrations
php artisan migrate


5. Create storage link
php artisan storage:link


6. Start the server
php artisan serve

📝 Usage

Go to Resume Page → /resume

Go to Contact Page → /contact

Fill the form and attach a file

On success:

File saved in /storage/app/public/attachments

Cookie file_uploaded=true set

Success message displayed

📧 Contact

If you want to collaborate or suggest improvements, feel free to reach out.
