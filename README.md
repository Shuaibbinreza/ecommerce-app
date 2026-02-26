# Ecommerce App

This is an Ecommerce application built with Laravel.

## Prerequisites

- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL (for development)

## Installation

1. Clone the repository
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Install JavaScript dependencies:
   ```bash
   npm install
   ```
4. Copy the environment file:
   ```bash
   copy .env.example .env
   ```
5. Generate application key:
   ```bash
   php artisan key:generate
   ```
6. Run migrations:
   ```bash
   php artisan migrate
   ```
7. Build assets:
   ```bash
   npm run build
   ```

## Running the Application

This application is configured to run on **port 8000** by default.

```bash
php artisan serve
```

The application will be available at: http://127.0.0.1:8000

## Important: Running the Foodpanda App

**After starting this application, you must run the foodpanda-app application.**

The foodpanda-app is a separate project that works in conjunction with this ecommerce application. Please follow these steps:

1. First, ensure this ecommerce app is running on port 8000
2. Then clone and set up the foodpanda-app from: https://github.com/Shuaibbinreza/foodpanda-app
3. Follow the foodpanda-app README instructions to run it on its designated port

## Features

- User authentication (Register/Login)
- Static UI for visibility

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
