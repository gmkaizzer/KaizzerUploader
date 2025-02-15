# KaizzerUploader
# File Uploader Application

This is a simple file uploader application built with PHP, HTML, CSS, and JavaScript. It allows users to register, log in, upload files, and manage their uploaded files. The application uses MySQL for database management and Composer for dependency management.

## Features

- User Registration
- User Login
- File Upload
- File Management (View, Download, Delete)
- Secure Database Interaction
- Environment Variable Configuration

## Prerequisites

- Web Server: Apache or Nginx
- PHP (version 7.4 or higher)
- MySQL or MariaDB
- Composer
- Domain pointing to your server (e.g., `sum-bic.com`)
- SSL Certificate (optional but recommended for HTTPS)

**Sample Project Structure**
```sh
/var/www/example.com/uploader
├── composer.json
├── .env
├── load_env.php
├── index.html
├── uploader.php
├── db.php
├── styles.css
├── app.js
├── register.php
├── login.php
├── logout.php
├── profile.php
└── uploads/
```

## Installation

### Step 1: Clone the Repository

```sh
git clone https://github.com/gmkaizzer/KaizzerUploader.git /var/www/example/uploader
cd /var/www/example.com/uploader
```

### Step 2: Install PHP Dependencies

Run Composer to install the required dependencies:

```sh
composer install
```

### Step 3: Set Up Environment Variables

Create a `.env` file in the root directory of your project and add the following content:

````markdown name=.env
DB_SERVERNAME=localhost
DB_USERNAME=uploader_user
DB_PASSWORD=password
DB_DATABASE=uploader_db
