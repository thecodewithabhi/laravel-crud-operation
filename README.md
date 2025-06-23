# Laravel CRUD Operation

A professional Laravel 12 project demonstrating full CRUD (Create, Read, Update, Delete) functionality using resource controllers, Eloquent ORM, Blade templating, and authentication.

## 🚀 Features

- Laravel 12 (PHP 8+)
- Full CRUD for posts (create, list, update, delete)
- Resource controllers with route model binding
- Blade templates and layout inheritance
- Tailwind CSS integration (via Breeze or Jetstream)
- Form validation with user-friendly error messages
- Authentication (login/register/logout)
- Flash messaging on create/update/delete
- RESTful routing with `Route::resource()`

## 📂 Project Structure

├── app/

│ ├── Http/

│ │ ├── Controllers/

│ │ │ └── PostController.php

├── resources/

│ └── views/

│ └── posts/

│ ├── index.blade.php

│ ├── create.blade.php

│ ├── edit.blade.php

├── routes/

│ └── web.php

## 🛠️ Tech Stack

- **Backend:** Laravel 12, PHP 8.2+
- **Frontend:** Blade / Tailwind CSS (or Vue + Inertia if Jetstream)
- **Database:** MySQL / SQLite
- **Auth:** Laravel Breeze / Jetstream

## ✅ Requirements

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL or SQLite

## 📦 Installation

```bash
git clone https://github.com/thecodewithabhi/laravel-crud-operation.git
cd laravel-crud-operation
composer install
cp .env.example .env
php artisan key:generate
npm install && npm run dev
php artisan migrate
php artisan serve
```

Visit http://localhost:8000 in your browser.

🔐 Authentication Setup
This project uses Laravel Breeze or Jetstream. If not installed:

```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate
```
Or for Jetstream:

```bash
composer require laravel/jetstream
php artisan jetstream:install inertia
npm install && npm run dev
php artisan migrate
```

📄 License
This project is open-sourced under the MIT license.
Built with ❤️ by Abhishek Shakya
https://github.com/thecodewithabhi/laravel-crud-operation

📸 Screenshots
![git_post_4](https://github.com/user-attachments/assets/c21d0973-7994-4323-997f-fdfd1c491afb)
![git_post_3](https://github.com/user-attachments/assets/eaa5d8e6-7715-4231-9db8-ff4d4f46578f)
![git_post_2](https://github.com/user-attachments/assets/0f07cbbd-75e5-476c-ae6f-7fea6c8ac6bb)
![git_post_1](https://github.com/user-attachments/assets/c9cff707-359f-4976-b019-22e08692c73d)



