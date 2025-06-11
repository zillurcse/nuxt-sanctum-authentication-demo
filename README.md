# Nuxt Sanctum Authentication Demo

This repository contains the source code for both a **Laravel** application and a **Nuxt 3** application demonstrating authentication with **Laravel Sanctum**.

This demo walks through setting up Sanctum authentication, including both cookie-based and token-based authentication methods.

## Features

- Laravel backend with Sanctum authentication.
- Nuxt 3 frontend configured with [`@qirolab/nuxt-sanctum-authentication`](https://github.com/qirolab/nuxt-sanctum-authentication "`@qirolab/nuxt-sanctum-authentication`") module.
- SPA cookie-based authentication (default) and token-based authentication.
- API route protection using Sanctum.

## Branches

This repository contains two different branches depending on the type of authentication you want to implement:

- **Cookie-Based SPA Authentication**: The default authentication mode using Laravel Sanctum cookies. You can check out the master branch for this implementation.

  - Branch: `master`

- **API Token-Based Authentication**: If you prefer to use token-based authentication for your API, switch to the `api-token-authentication` branch.
  - Branch: `api-token-authentication`

Make sure to check out the correct branch depending on your use case.

## Installation

### 1. Clone the repository

```bash
git clone git@github.com:zillurcse/nuxt-sanctum-authentication-demo.git
```

### 2. Setup Laravel

Navigate to the Laravel folder and install dependencies:

```bash
cd laravel-api
composer install
```

Copy the `.env.example` to `.env`:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Set up your database in the `.env` file and run migrations:

```bash
php artisan migrate
```

Run the Laravel server:

```bash
php artisan serve
```

### 3. Setup Nuxt 3

Navigate to the Nuxt app folder and install dependencies:

```bash
cd nuxt3-app
npm install
```

Copy the `.env.example` to `.env`:

```bash
cp .env.example .env
```

Make sure to set the `NUXT_SANCTUM_API_URL` in your `.env` file to point to your Laravel app URL.

Run the Nuxt development server:

```bash
npm run dev
```

## Usage

- Open the Laravel app in your browser (default: `http://localhost:8000`).
- Open the Nuxt app in your browser (default: `http://localhost:3000`).
- Try logging in using the credentials you've set up in your Laravel app.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
