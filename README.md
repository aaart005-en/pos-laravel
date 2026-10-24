# POS System (Laravel)

A simple Point-of-Sale web app built with Laravel, rebuilt from the CodeIgniter version (TFA1). It uses the MVC pattern: routes decide which controller runs, controllers prepare the data, and Blade views render the pages. The Customer and User pages use static PHP arrays as a temporary data source.

## Pages

| URL | Description |
|---|---|
| `/` | Landing page |
| `/about` | About page |
| `/customers` | Customer Accounts (static array) |
| `/users` | User Accounts (static array) |

## Requirements

- PHP 8.2 or higher
- Composer
- Git

## Setup

1. Clone the repository:
```
   git clone https://github.com/aaart005-en/pos-laravel.git
   cd pos-laravel
```
2. Install dependencies:
```
   composer install
```
3. Create the environment file and generate the app key:
```
   copy .env.example .env
   php artisan key:generate
```
4. Create the SQLite database file, run the migrations and seed the sample data:
```
   php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
   php artisan migrate --seed
```
5. Start the development server:
```
   php artisan serve
```
6. Open http://127.0.0.1:8000 in your browser.

## Project structure

- `routes/web.php` – route definitions
- `app/Http/Controllers/` – `PageController`, `CustomerController`, `UserController`
- `resources/views/` – Blade views (`layouts`, `pages`, `customers`, `users`)
- `database/migrations/` and `database/seeders/` – migrations for the customers and users tables, and seeders with sample data

## Live demo

http://pos-laravel-art.22web.org