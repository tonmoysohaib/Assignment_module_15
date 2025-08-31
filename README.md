# 📌 Laravel Portfolio Project  

A **Laravel-based portfolio website** with a professional **Resume Page**, **Contact Form with File Upload**, and a modern **Bootstrap 5 UI**.  

---

## 📹 Project Demo  
🎥 Watch the walkthrough video here:  
👉 [Project Video](https://drive.google.com/file/d/1QYPFnvpczsvLanLZ7wmPjP7nWk6tDFAf/view?usp=sharing)  

---

## 🚀 Features  

### ✅ Contact Form  
- Fields: Name, Email, Phone, Message  
- File Upload (PDF, DOC, Images)  
- Validation with error messages  
- Success message after upload  
- Cookie set (`file_uploaded=true`)  

### ✅ Resume Page  
- Display skills, education, and experience  

### ✅ File Upload Handling  
- Files stored in `storage/app/public/attachments`  
- Max size: `2MB`  
- Allowed types: `.pdf, .doc, .docx, .png, .jpg, .jpeg`  

---

## 🛠️ Installation  

1. **Clone the repository**  
   ```bash
   git clone https://github.com/your-username/laravel-portfolio.git
   cd laravel-portfolio
   ```

2. **Install dependencies**  
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Set environment variables**  
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run database migrations**  
   ```bash
   php artisan migrate
   ```

5. **Create storage link**  
   ```bash
   php artisan storage:link
   ```

6. **Start the development server**  
   ```bash
   php artisan serve
   ```

---

## 💻 Usage  

- Visit **Resume Page** → `/resume`  
- Visit **Contact Page** → `/contact`  
- Fill the form & attach a file  

On successful submission:  
- File is stored in `/storage/app/public/attachments`  
- Cookie `file_uploaded=true` is set  
- Success message is displayed  

---

## 📧 Contact  

💡 If you’d like to collaborate or suggest improvements, feel free to reach out!  
