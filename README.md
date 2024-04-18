# sehatpluss
SehatPluss adalah website sederhana yang dirancang untuk menyediakan layanan kesehatan secara online. Website ini memungkinkan pengguna untuk berkonsultasi dengan dokter, mendapatkan resep obat, dan melacak rekam medis mereka secara digital.

### Fitur Utama
- **Konsultasi Medis**: Pengguna dapat berkonsultasi dengan dokter melalui platform.
- **Resep Obat**: Pengguna dapat menerima resep obat dari dokter setelah konsultasi.
- **Rekam Medis**: Pengguna dapat melihat dan mengelola rekam medis mereka.

### Cara Install
Untuk menginstall dan menjalankan project ini di lokal Anda, ikuti langkah-langkah berikut:

1. Clone repository ini ke lokal Anda menggunakan perintah:
   ```
   git clone https://github.com/chitoge435/SehatPlus
   ```
2. Masuk ke direktori project:
   ```
   cd sehatpluss
   ```
3. Install semua dependensi yang diperlukan menggunakan composer:
   ```
   composer install
   ```
4. Salin file `.env.example` dan ubah namanya menjadi `.env`, kemudian konfigurasikan database Anda.
5. Jalankan migrasi database:
   ```
   php artisan migrate
   ```
6. Jalankan project:
   ```
   php artisan serve
   ```
   Sekarang, Anda dapat mengakses website di `http://localhost:8000`.

### Library yang Digunakan
- **Laravel**: Framework PHP untuk membangun aplikasi web.
- **Spatie Laravel-Permission**: Untuk manajemen hak akses pengguna.
- **Laravel Sanctum**: Untuk autentikasi API.

Dengan menggunakan kombinasi dari berbagai library dan fitur ini, SehatPluss menyediakan solusi lengkap untuk kebutuhan layanan kesehatan online.
