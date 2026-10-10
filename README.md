Tugas Rutin 9 - Pemrograman Web (Laravel Setup)

Proyek ini adalah implementasi Tugas Rutin 9 untuk mata kuliah Pemrograman Web menggunakan framework Laravel. Fokus utama pada tugas ini adalah konfigurasi awal (setup), pemahaman struktur folder, pembuatan database, dan dasar-dasar routing serta view (Blade).

🛠️ Prasyarat

Pastikan sistem Anda telah menginstal perangkat lunak berikut sebelum memulai:

PHP (versi 8.x direkomendasikan)

Composer

Web Server lokal (Laragon)

MySQL

🚀 Langkah Instalasi & Setup

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer Anda:

1. Membuat atau Mengunduh Proyek
   Jika Anda membuat proyek baru dari awal, gunakan perintah:

composer create-project laravel/laravel tugas-rutin-9

(Catatan: Jika Anda melakukan clone/unduh dari repositori Git, jalankan composer install terlebih dahulu di dalam folder proyek).

2. Pengaturan Environment (.env)

Salin (copy) file .env.example dan ubah namanya menjadi .env.

Jika Anda melakukan clone proyek, buat application key baru dengan menjalankan:

php artisan key:generate

3. Konfigurasi Database

Buka aplikasi Laragon atau XAMPP dan jalankan MySQL.

Buka file .env di text editor Anda, lalu sesuaikan kredensial database pada bagian ini:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tr-9
DB_USERNAME=root
DB_PASSWORD=

Pastikan Anda sudah membuat database kosong dengan nama yang sesuai (nama_database_tugas) di phpMyAdmin.

4. Menjalankan Migrasi
   Jalankan perintah berikut untuk membuat tabel-tabel ke dalam database Anda:

php artisan migrate

5. Menjalankan Server Lokal
   Mulai server development dengan perintah:

php artisan serve

Akses aplikasi melalui browser di http://localhost:8000.

📂 Skema & Penjelasan Struktur Folder Utama

Berikut adalah skema folder dasar proyek Laravel yang relevan dengan tugas ini:

tugas-rutin-9/
├── app/
│   ├── Http/
│   │   └── Controllers/     <-- Tempat menyimpan Controller
│   └── Models/              <-- Tempat menyimpan Model
├── database/
│   └── migrations/          <-- Tempat menyimpan file migrasi database
├── public/
│   ├── index.php            <-- Titik masuk (entry point) aplikasi
│   └── (css, js, images)    <-- Aset statis publik
├── resources/
│   └── views/               <-- Tempat menyimpan file Blade (tampilan UI)
│       ├── layouts/         <-- Folder untuk template layout utama
│       │   └── app.blade.php
│       └── welcome.blade.php
├── routes/
│   └── web.php              <-- Tempat mendefinisikan rute web
├── .env                     <-- File konfigurasi environment (database, dll)
└── composer.json            <-- Konfigurasi dependencies PHP

Penjelasan Detail Folder:

app/: Merupakan tempat menyimpan logika utama aplikasi. Folder ini berisi Models (app/Models/) yang merepresentasikan tabel database, serta Controllers (app/Http/Controllers/) yang mengatur alur data dari rute ke tampilan.

routes/: Folder ini mengatur semua rute (URL) aplikasi. File yang paling sering digunakan adalah routes/web.php, tempat kita menghubungkan URL yang diketik pengguna di browser dengan Controller atau View yang sesuai.

resources/: Berisi views (tampilan antarmuka) dan aset yang belum dikompilasi. Di tugas ini, kita banyak bekerja di dalam resources/views/ menggunakan templating engine Blade (contoh: app.blade.php), termasuk membuat folder layouts untuk modularisasi halaman.

database/: Menyimpan file konfigurasi database, terutama migrations (database/migrations/). Migrasi berfungsi seperti "version control" untuk skema database, memungkinkan kita membuat tabel tanpa menulis perintah SQL secara manual.

public/: Titik masuk utama aplikasi web. File index.php di sini memuat semua permintaan. Folder ini juga merupakan tempat untuk menyimpan aset statis yang bisa diakses langsung secara publik, seperti file CSS, JavaScript, dan gambar.

.env: File environment (bukan folder) yang tersembunyi di root aplikasi. Sangat penting untuk menyimpan konfigurasi yang sifatnya rahasia dan spesifik untuk setiap lingkungan (lokal vs production), seperti kata sandi database.
