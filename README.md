# Tugas UAS Pemrograman Web – CRUD Mahasiswa

-   Nama : Andhika Bayu Satriaji
-   NIM : 231110081

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
  </a>
</p>

<h1 align="center"> CRUD Mahasiswa – Laravel</h1>

<p align="center">
  CRUD application for managing student data using Laravel<br>
  <i>Developed for Tugas Pemrograman Web 2025</i>
</p>

---

## Fitur Aplikasi

-   Lihat data mahasiswa
-   Tambah mahasiswa baru
-   Edit data mahasiswa
-   Hapus mahasiswa (dengan konfirmasi modal)

---

## Teknologi

| Tools        | Keterangan                  |
| ------------ | --------------------------- |
| Laravel 10   | Backend Framework           |
| Blade        | Templating engine           |
| Tailwind CSS | Styling modern & responsive |
| MySQL        | Database                    |

---

## Cara Menjalankan Project

```bash
git clone https://github.com/andhikabay/crud-mahasiswa.git
cd crud-mahasiswa
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve


---

 **Pastikan**:

- Database MySQL dengan nama `crud_mahasiswa` udah dibuat (bisa via phpMyAdmin).
- Sudah menjalankan `composer install` dan `php artisan migrate` setelah clone repo.
- File `.env` dibuat dari `.env.example` dan disesuaikan sesuai setting lokal.

---

##  Struktur Penting

| Path                                           | Fungsi                                 |
|------------------------------------------------|----------------------------------------|
| `app/Models/Mahasiswa.php`                     | Model data Mahasiswa                   |
| `app/Http/Controllers/MahasiswaController.php` | Controller utama untuk CRUD            |
| `resources/views/mahasiswa/`                   | Folder view (index, create, edit, dsb) |
| `routes/web.php`                               | Routing utama aplikasi Laravel         |
| `database/migrations/`                         | Struktur tabel database via migration  |

---

##  Catatan Penting

- File `.env`, `vendor/`, dan `node_modules/` **tidak diupload** ke GitHub agar lebih ringan dan aman.


---

##  File yang Diabaikan (.gitignore)

| File/Folder         | Alasan                                       |
|---------------------|----------------------------------------------|
| `.env`              | Berisi informasi sensitif (DB, key, dsb)     |
| `vendor/`           | Hasil composer install (besar & rebuildable) |
| `node_modules/`     | Hasil npm install (besar & rebuildable)      |
| `.idea/`, `.vscode/`| Settingan editor pribadi                     |
| `storage/logs/`     | File log error yang tidak dibutuhkan         |

---

##  Author

Made with love by [@andhikabay](https://github.com/andhikabay)
Tugas Pemrograman Web – 2025
```
