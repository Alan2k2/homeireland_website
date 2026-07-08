# HomeIreland Website

This repository contains the HomeIreland website and admin panel project.

## Features
- Property listing and search
- Automobile listings
- Admin dashboard
- Enquiries and payments
- Responsive website frontend

## Tech Stack
- PHP / Laravel
- MySQL
- JavaScript / Vite
- Bootstrap

## Setup
1. Clone the repository
   ```bash
   git clone https://github.com/Alan2k2/homeireland_website.git
   ```
2. Install PHP dependencies
   ```bash
   composer install
   ```
3. Install frontend dependencies
   ```bash
   npm install
   ```
4. Copy environment file and configure database settings
   ```bash
   cp .env.example .env
   ```
5. Run the application
   ```bash
   php artisan serve
   ```

## Notes
- This project uses Laravel and includes both website and admin functionality.
- Large upload directories are intentionally ignored by Git to keep the repository size manageable.
