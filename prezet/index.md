# MIP-Stack

**MIP-Stack** adalah starter template Laravel modern yang dikembangkan oleh **Muhammad Irfan Permana** untuk mempercepat proses pengembangan aplikasi berbasis Laravel dan Filament.

## ✨ Fitur Utama

-   Laravel 12
-   Filament 3 (Admin Panel)
-   Autentikasi siap pakai
-   Struktur folder rapi & scalable

## 📦 Instalasi

-   Clone repositori MIP-Stack dari GitHub ke komputer lokal Anda. Gantilah namakamu dengan username GitHub Anda jika berbeda.

```bash
git clone https://github.com/namakamu/mip-stack.git
```

-   Masuk ke folder proyek hasil clone untuk mulai bekerja di dalam direktori aplikasi.

```bash
cd mip-stack
```

-   Menginstal semua dependency PHP yang dibutuhkan Laravel berdasarkan file composer.json.

```bash
composer install
```

-   Menyalin konfigurasi default dari .env.example menjadi .env, yang akan digunakan Laravel untuk membaca pengaturan aplikasi.

```bash
cp .env.example .env
```

-   Menghasilkan application key dan menyimpannya ke file .env. Key ini digunakan Laravel untuk enkripsi data dan session.

```bash
php artisan key:generate
```

-   Menjalankan migration untuk membuat tabel-tabel database yang dibutuhkan aplikasi.

```bash
php artisan migrate
```

-   Menjalankan server lokal Laravel agar aplikasi bisa diakses melalui browser di http://127.0.0.1:8000

```bash
php artisan serve
```
