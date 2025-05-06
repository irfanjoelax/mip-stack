---
title: Stack Program yang Digunakan
excerpt: Detail lengkap tentang stack program dan arsitektur pengembangan yang digunakan dalam MIP Stack untuk membangun aplikasi Laravel yang modern dan terstruktur.
date: 2024-05-06
category: Getting Started
image: /mipstack/img/ogimages/stack-program.png
---


MIP Stack menggunakan kombinasi stack program modern yang dirancang untuk efisiensi, skalabilitas, dan kemudahan pemeliharaan dalam pengembangan aplikasi berbasis Laravel dan Filament. Bagian ini menjelaskan bagaimana masing-masing lapisan teknologi bekerja sama membentuk arsitektur aplikasi yang solid dan dapat diandalkan.


## Arsitektur Umum

MIP Stack menerapkan pendekatan **MVC (Model-View-Controller)** yang merupakan arsitektur standar Laravel, dikombinasikan dengan pola **component-based** dari Filament.

Struktur utama:
- **Model**: Mengelola data dan hubungan antar entitas (Eloquent ORM)
- **View**: Dihandle oleh Filament menggunakan TailwindCSS + Blade
- **Controller**: Bertugas sebagai pengatur logika alur (terutama untuk fitur custom/non-Filament)

## Backend Stack
- **Framework**: `Laravel 12`  
  Core utama pengembangan backend, menyediakan fitur routing, queue, validasi, dan banyak lagi.

- **ORM**: `Eloquent ORM`  
  Mempermudah pengelolaan relasi dan query database menggunakan pendekatan OOP (Object Oriented Programming).

- **Authentication**:
  Menyediakan fitur login, registrasi, verifikasi email, proteksi route, dan manajemen sesi pengguna.

- **Role & Permission**: `Spatie Permission` + `Filament Shield`  
  Mengelola hak akses pengguna dengan kontrol granular berdasarkan peran, resource, atau fitur.

- **API Layer**: `Laravel API Resource`  
  Digunakan untuk kebutuhan pengembangan API RESTful yang konsisten dan terstruktur.


## Frontend Stack

- **Admin UI**: `Filament 3`  
  Antarmuka admin modern berbasis komponen dengan dukungan tema yang elegan dan integrasi Tailwind.

- **Styling**: `Tailwind CSS`  
  Framework CSS utility-first yang membuat proses styling lebih cepat dan konsisten.

- **Interaktivitas**: `Alpine.js`  
  Menambahkan behavior interaktif ringan tanpa perlu framework frontend besar seperti Vue/React.

- **Asset Build Tool**: `Vite`  
  Bundler cepat dan modern untuk asset JavaScript, CSS, dan image, menggantikan Laravel Mix.

- **Template Engine**: `Blade`  
  Engine templating bawaan Laravel untuk membuat tampilan dinamis yang bersih dan reusable.

## Database/Storage


- **Database**: `MySQL / MariaDB / PostgreSQL`  
  Dapat disesuaikan dengan kebutuhan proyek, default-nya menggunakan MySQL.

- **Migration**: `Laravel Migrations`  
  Digunakan untuk versioning struktur tabel database secara sistematis.

- **Seeder & Factory**: `Laravel Seeder & Factory`  
  Membantu membuat data dummy atau testing secara otomatis dan terstruktur.

- **Storage**: `Laravel Filesystem`  
  Menyediakan abstraction untuk menyimpan file di local disk, public, S3, dsb.


## Plugin/Library

- **Filament Shield**  
  Plugin untuk otomatisasi pembuatan permission berbasis resource Filament.

- **Quick Create**  
  Plugin yang memungkinkan pembuatan data langsung dari modal atau sidebar dengan cepat.

- **Easy Footer**  
  Plugin untuk menambahkan dan mengelola informasi footer di admin panel.

- **Laravel Debugbar**  
  Alat bantu debug saat development, menampilkan informasi query, request, dan session.

- **Laravel IDE Helper**  
  Mempermudah autocomplete dan dokumentasi saat development di editor/IDE seperti VSCode atau PhpStorm.

## Toolchain Development

- **Composer**  
  Manajemen dependency PHP, digunakan untuk menginstal library Laravel dan plugin tambahan.

- **NPM**  
  Manajemen package frontend (Tailwind, Alpine, dsb) serta menjalankan proses build dengan Vite.

- **Vite**  
  Build tool cepat dan ringan untuk menangani asset frontend, menggantikan Laravel Mix.

- **Git**  
  Version control untuk mengatur histori perubahan kode dan kolaborasi tim development.

---

Stack ini dirancang untuk fleksibel, scalable, dan sesuai dengan praktik modern Laravel development.

