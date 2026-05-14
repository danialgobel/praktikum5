# Praktikum 5 - Laravel Routing

Proyek ini adalah hasil praktikum pembelajaran framework Laravel, khususnya fokus pada routing. Dibuat untuk memahami cara kerja routing di Laravel dengan berbagai jenis route.

## Fitur Routing

Proyek ini memiliki 5 route utama:

1. **Halaman Utama** (`/`) - Menampilkan halaman welcome default Laravel
2. **Halaman About** (`/about`) - Halaman informasi sederhana
3. **User Greeting** (`/user/{name}`) - Menampilkan salam dengan nama yang diberikan
4. **Product Info** (`/product/{id}`) - Menampilkan informasi produk berdasarkan ID
5. **City Info** (`/city/{name}`) - Menampilkan informasi kota

## Cara Menjalankan

1. Pastikan PHP dan Composer sudah terinstall
2. Clone repository ini
3. Jalankan `composer install`
4. Copy `.env.example` ke `.env` dan konfigurasi database jika perlu
5. Jalankan `php artisan serve`
6. Buka browser ke `http://127.0.0.1:8000`

## Teknologi yang Digunakan

- Laravel 11
- PHP 8.3
- MySQL/SQLite untuk database

## Lisensi

Proyek ini dibuat untuk keperluan edukasi praktikum.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
