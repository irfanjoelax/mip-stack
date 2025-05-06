---
title: Teknologi yang Digunakan
excerpt: Jelajahi teknologi utama yang digunakan dalam MIP Stack, mulai dari Laravel 12, Filament 3, hingga berbagai plugin dan tools pendukung.
date: 2024-05-06
category: Getting Started
image: /mipstack/img/ogimages/stack.png
---

MIP Stack dibangun di atas fondasi teknologi modern dan efisien yang telah terbukti stabil serta fleksibel dalam pengembangan aplikasi web. Berikut adalah teknologi inti dan pendukung yang digunakan dalam MIP Stack.

## Framework

**Laravel 12** adalah framework PHP modern yang dikenal karena sintaksnya yang ekspresif, struktur yang elegan, dan kemudahan dalam pengembangan. Versi 12 membawa banyak penyempurnaan performa dan kestabilan.

**Fitur unggulan Laravel:**
- Routing deklaratif
- ORM Eloquent
- Queue & Job System
- Middleware
- Artisan CLI
- Testing yang terintegrasi


## Admin Panel

**Filament 3**
Filament adalah admin panel berbasis Tailwind CSS yang menawarkan antarmuka yang modern dan intuitif untuk membangun panel backend Laravel.

**Fitur utama Filament:**
- CRUD Generator
- Tabel Dinamis & Reaktif
- Formulir yang Fleksibel
- Halaman Kustom
- Integrasi Permission
- Mudah diperluas dengan plugin


## Styling Frontend

**Tailwind CSS** Digunakan oleh Filament untuk styling, Tailwind CSS adalah utility-first CSS framework yang cepat dan sangat fleksibel.

**Alpine.js** Digunakan di beberapa komponen Filament untuk memberikan interaktivitas ringan tanpa framework JavaScript besar seperti Vue atau React.


## Authentication/Authorization

**Spatie Laravel Permission + Filament Shield** Untuk manajemen role dan permission, MIP Stack menggunakan package **spatie/laravel-permission** yang diperluas dengan plugin **Filament Shield**, memungkinkan pengelolaan akses dari antarmuka admin secara langsung.


## Tools Pendukung

**Composer** Digunakan untuk mengelola dependency PHP.

**Node.js + npm/yarn** Diperlukan untuk membangun asset frontend (jika menggunakan Breeze dengan Inertia atau Livewire stack).

**Vite** Digunakan sebagai bundler modern yang menggantikan Laravel Mix, memberikan kecepatan yang lebih tinggi dalam development.


## Database

**MySQL / MariaDB / SQLite**: MIP Stack mendukung berbagai jenis database SQL populer. Secara default dikonfigurasi untuk MySQL/MariaDB, tetapi mudah untuk diubah.


## Plugin Tambahan (Third Party)

- **Filament Shield** — Role & Permission manager
- **Filament Easy Footer** — Menambahkan footer custom ke layout admin
- **Quick Create Component** — Untuk membuat entri data tanpa pindah halaman


## Sistem Minimum

- PHP 8.2 atau lebih baru  
- MySQL 5.* / Sqlite 3.*  
- Node.js v16+  
- Composer v2  
- Server Apache/Nginx, atau Laravel Valet untuk lokal  


MIP Stack mengombinasikan teknologi yang telah terbukti handal dengan prinsip pengembangan modern — menjadikannya pilihan tepat untuk membangun aplikasi admin dengan cepat, efisien, dan maintainable. Lanjut untuk melihat bagaimana teknologi ini disusun dalam alur kerja proyek.
