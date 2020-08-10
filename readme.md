APLIKASI PENCARIAN & REKOMENDASI WISATA TERBAIK DENGAN METODE TOPSIS

Penjelasan:
1. Aplikasi ini dibuat dengan laravel 5.5
2. Versi PHP minimal 7.0
3. Database ada di fordel dump_database


Cara Install Aplikasi:

1. Install Composer dulu [jika sudah maka point ini abaikan saja] (link install composer https://getcomposer.org/)
2. Buka terminal[linux] atau Command Prompt [windows]
3. lalu arahkan ke dalam foder aplikasi ini
4. lalu ketik Composer update [wajib terkoneksi dengan internet & tunggu sampai update package selesai]
5. lalu buat database[nama database terserah anda] & import file .sql yang ada dalam folder dump_database
6. lalu file .env.example rename menjadi .env
7. lalu setting bagian ini :
    DB_DATABASE=nama_datatabase_yg_kamu_buat_tadi
    DB_USERNAME=root [biasa sih defaultnya root, kalo beda tinggal sesuaikan aja]
    DB_PASSWORD= [biasanya kosong untuk, jika ada ya tinggal sesuaikan aja]
8. lalu pergi ke terminal/command prompt yang tadi buka, kalu ketik php artisan key:generate lalu enter
9. ketik php artisa serve lalu enter dan ketik web browser anda dengan link http://127.0.0.1:8000/
10. selesai...

KONTAK: aguss6460@gmail.com