# ITBuddy - IT Asset Management System

Open source IT asset management system built on [Laravel 12](http://laravel.com).

## Features

- Asset tracking and lifecycle management
- License and software management
- Accessory and consumable inventory
- Checkout/checkin workflows
- Barcode and QR code label printing
- Role-based access control
- REST API for integration

## Quick Start

```bash
# Install dependencies
composer install
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Build frontend
npm run dev

# Start dev server (via Laravel Herd or)
php artisan serve
```

## Docker

```bash
docker compose up -d
```

### Table of Contents
* [Installation](#installation)
* [Usage](#usage)
* [API](#api)
* [License](#license)

-----

### Installation

Requirements: PHP 8.2+, MySQL/PostgreSQL/SQLite, Node.js

```bash
composer install
cp .env.example .env
# Edit .env with your database credentials
php artisan key:generate
php artisan migrate
php artisan db:seed
npm install && npm run dev
```

### Usage

Access the web interface at `http://localhost` and log in. See the in-app help for detailed usage instructions.

### API

REST API endpoints at `/api/v1/`. Authenticate via Laravel Passport (Personal Access Tokens).

### License

This project is licensed under the AGPL-3.0 license. See [LICENSE](LICENSE) for details.
