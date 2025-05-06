---
title: Instalasi Program
excerpt: Panduan langkah demi langkah untuk menginstal dan menjalankan MIP Stack di lingkungan pengembangan Anda.
date: 2024-05-06
category: Getting Started
image: /img/setup-guide.png
---

Sebelum memulai, pastikan sistem Anda telah memenuhi persyaratan berikut:

- **PHP 8.3 atau lebih baru**
- **Composer**
- **MySQL / MariaDB / SQlite**
- **Node.js + NPM**
- **Git**
- **Ekstensi PHP yang wajib:**  
  - `pdo`
  - `openssl`
  - `mbstring`
  - `tokenizer`
  - `xml`
  - `ctype`
  - `json`
  - `fileinfo`

## Langkah Instalasi

**1. Clone Repository**

```bash
git clone https://github.com/username/mip-stack.git
cd mip-stack
```

**2. Install Dependency Backend (PHP)**

```bash
composer install
```

**3. Copy dan Konfigurasi File .env**

```bash
cp .env.example .env
```
Kemudian edit konfigurasi .env sesuai dengan database lokal Anda:

```env
APP_NAME="MIP Stack"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mipstack
DB_USERNAME=root
DB_PASSWORD=
```

**4. Generate Key & Migrate Database**

```bash
php artisan key:generate
php artisan migrate --seed
```

**5. Install Dependency Frontend (JS/CSS)**

```bash
npm install && npm run dev
```

**6. Jalankan Aplikasi**

```bash
php artisan serve
```

Buka di browser: http://127.0.0.1:8000
