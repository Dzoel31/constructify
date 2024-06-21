# Cara menjalankan web dengan framework Laravel 11

## 1. Install Composer

Pertama, pastikan Anda sudah menginstall Composer. Jika belum, Anda bisa menginstall Composer dengan cara mengunjungi [Download Composer](https://getcomposer.org/Composer-Setup.exe) dan mengikuti langkah-langkah yang ada.

## 2. Install Laravel Herd

Kelompok kami menggunakan laravel Herd untuk memudahkan dalam pengembangan web. Anda bisa menginstall Laravel Herd dengan cara mengunjungi [Laravel Herd](https://herd.laravel.com/windows) dan mengikuti langkah-langkah yang ada.

## 3. Install node.js

Pastikan Anda sudah menginstall node.js, node.js digunakan untuk menjalankan npm. Jika belum, Anda bisa menginstall node.js dengan cara mengunjungi [Download Node.js](https://nodejs.org/en/download/) dan mengikuti langkah-langkah yang ada.

## 4. Extract folder web

Setelah Anda menginstall Composer, Laravel Herd, dan node.js, Anda bisa mengekstrak folder web yang sudah Anda download.

## 5. Tambahkan ke dalam Laravel Herd

Setelah Anda mengekstrak folder web, Anda bisa menambahkan folder web tersebut ke dalam Laravel Herd. Sebagai contoh, jika Anda mengekstrak folder web di C:\xampp\htdocs, maka Anda menambahkan C:\xampp\htdocs ke dalam Laravel Herd.

Cara menambahkan folder ke dalam Laravel Herd:

1. Buka Laravel Herd
2. Kunjungi menu general
3. Klik tombol Add Path
4. Pilih folder dimana Anda mengekstrak folder web, misalnya C:\xampp\htdocs

## 6. Jalankan mysql pada xampp

Pastikan Anda menjalankan mysql saja pada xampp.

## 7. Tambahkan .env

Setelah Anda menambahkan folder web ke dalam Laravel Herd, Anda bisa menambahkan file .env. File .env digunakan untuk mengatur konfigurasi database. Langkah-langkahnya:

1. Buka folder web yang sudah Anda tambahkan ke dalam Laravel Herd
2. Copy file .env.example dan paste dengan nama .env
3. Buka file .env dan atur konfigurasi dengan cara mengubah isi file .env (setelah =) sesuai dengan perintah comment yang ada di dalam file .env.example

## 8. Buka terminal

Setelah Anda menambahkan file .env, Anda bisa membuka terminal yang merujuk ke folder web.

## 9. Install dependency

Setelah terminal terbuka, Anda bisa menjalankan perintah `composer install` untuk menginstall dependency yang dibutuhkan. Kemudian menjalankan perintah `npm install` untuk menginstall dependency yang dibutuhkan.

## 10. Migrate database

1. Pertama membuat database dengan nama `constructify`.
2. Setelah itu, jalankan perintah `php artisan migrate:fresh --seed` untuk membuat tabel-tabel yang dibutuhkan.

Jika terjadi kendala, maka Anda dapat melakukan import database yang sudah kami sediakan dengan cara:

1. Matikan Laravel Herd
2. Nyalakan Apache dan MySQL pada xampp
3. Buka phpmyadmin
4. Import database yang sudah kami sediakan dengan cara klik tombol import pada phpmyadmin dan pilih file database yang sudah kami sediakan pada folder database di dalam folder web yang sudah Anda download.
5. Setelah selesai, matikan kembali Apache (biarkan MySQL tetap menyala). Kemudian nyalakan kembali Laravel Herd.

## 11. Jalankan web

Setelah Anda menginstall dependency dan migrate database, Anda bisa menjalankan web dengan cara menjalankan perintah `npm run dev` untuk menjalankan web pada mode development.

## 12. Buka web

Setelah Anda menjalankan web, Anda bisa membuka web dengan cara membuka browser dan mengetikkan URL yang muncul pada terminal setelah Anda menjalankan perintah `npm run dev`.

Contoh URL: `http://constructify.test`

## 13. Selesai

lakukan login dengan ketentuan sebagai berikut:

- Admin
  - email: Admin@constructify.com
  - password: admin123
- Customer
  - email: Customer@constructify.com
  - password: customer123

Jika terjadi error, Anda bisa menghubungi kami melalui email:

- 2210511084 Dzulfikri Adjmal (0895392754696)
