### For PBWL Course Class B

## Setup
1. Clone repo ini
```
$ git clone https://github.com/ferdinand-lanvino/simple-guestbook
```
2. Ubah direktori
```
$ cd simple-guestbook
```
3. Buat file konfigurasi .env dengan menjalankan perintah ini
```
$ cp .env.example .env
```
4. Buka file .env, pastikan setting databasenya sudah sesuai.
5. Jalankan perintah di bawah
```
$ composer install
$ php artisan key:generate
$ php artisan migrate:fresh
```

## Checklist

- [X] Buat model bernama Guest beserta migrationnya
- [X] Isi file migration dengan dua kolom name dan message
- [X] Buat controller GuestController
- [X] Buat dua view untuk menampilkan daftar Guest (index.blade.php) dan Form Input (form.blade.php)
- [X] Buat dua method (index() dan form()) untuk menampilkan dua view (index.blade.php dan form.blade.php)
- [X] Daftarkan dua method tersebut di route web.php
- [X] Tambahkan kode html form untuk input data di form.blade.php
- [X] Tambahkan kode html untuk menampilkan data di index.blade.php
- [X] Tambahkan method store() + routing untuk menyimpan data Guest
- [X] Tambahkan route name untuk memberi alias pada route
- [X] Ubah file migrasi untuk menambahkan kolom baru -> email, avatar, phone_number + migrasi ulang (re-migrate)
- [X] Tambahkan validasi request ketika submit
- [ ] Pasang Bootstrap 5 + Autentikasi
- [ ] Ubah tampilan pada view index & form memakai komponen Bootstrap
- [ ] Menambahkan reusable layout
  

