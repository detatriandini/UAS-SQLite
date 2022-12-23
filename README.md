# Dokumentasi Project (cara install/cara setup/endpoin/screenshot)

UAS Manajemen Basis Data - Kelompok 2 - IF B
Anggota Kelompok 2
1. Deta Triandini (1207050025)
2. Farras Rangga W (12070500
3. Fatih Fauzan K (12070500

Penjelasan Aplikasi : Aplikasi CRUD SQLite dengan PHP

# Cara Install SQLite di Windows
1. Download SQLite pada situs berikut https://www.sqlite.org/download.html kemudian pilih Precompiled Binaries for Windows. 
![image](https://user-images.githubusercontent.com/83359019/209278661-59673b77-7ee5-4fcf-bb50-d02b4f79d752.png)
2. Extract file yang telah di download, selanjutnya buat sebuah folder pada dist c dengan nama sqlite dan paste file yang telah di extract sebelumnya untuk struktur foldernya seperti dibawah ini :
![image](https://user-images.githubusercontent.com/83359019/209279001-6ed9f877-a550-49e0-96be-6e669e8c22cf.png)
3. Tambahkan C:\sqlite pada path environment variable settings komputer. 
4. Jalankan SQLite di cmd seperti berikut
![image](https://user-images.githubusercontent.com/83359019/209279586-944c41d1-e447-4c5d-a65e-4dec8ebed01e.png)

# Cara Setup SQLite
# a. Enable SQLite3 (Mengaktifkan SQLite Service di web server)
1. Buka folder XAMPP pada direktori, Cari folder php, lalu cari file php.ini (C:\xampp\php\php.ini)
2. Buka file php.ini pada kode editor, kemudian enable atau aktifkan SQLite3 dengan menghapus semicolon (;) pada awal baris. (ctrl + f sqlite3)
![image](https://user-images.githubusercontent.com/83359019/209282718-e2ffd2a2-4ed1-4dfc-b9db-dbf934dd7fb1.png)
3. Save dan restart web server.

# b. Membuat Database SQLite dan Connection php dengan SQLite
1. Aplikasi akan dijalankan dilocal maka buat folder pada direktori yang sama pada XAMPP\htdocs. 
2. Buat file baru dengan nama connecdb.php. Seperti berikut:
![image](https://user-images.githubusercontent.com/83359019/209283258-fdcea606-e127-42a9-b3e0-d2c722b38137.png)
3. Kemudian buat file baru sebagai pusat dari semua fungsi yang dijalankan pada aplikasi dengan nama index.php. Source Code terlampir.
4. Buat file untuk menambahkan data dengan nama insert.php 
![image](https://user-images.githubusercontent.com/83359019/209284873-e5c6e731-0c01-4483-890d-30c5125182ed.png)
5. Buat file untuk mengupdate data dengan nama update.php
![image](https://user-images.githubusercontent.com/83359019/209285513-548db69a-5eac-4546-837d-3213f4807660.png)
6. Buat file untuk mengedit data dengan nama update-2.php
![image](https://user-images.githubusercontent.com/83359019/209285901-9280f721-b489-408b-a373-35fcfade1d92.png)
7. Buat file untuk menghapus data dengan nama delete.php
![image](https://user-images.githubusercontent.com/83359019/209285662-05ba6d0e-bcdf-416e-8788-2e5a021918d2.png)

