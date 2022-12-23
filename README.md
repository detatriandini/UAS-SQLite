# Dokumentasi Project (cara install/cara setup/endpoin/screenshot)

UAS Manajemen Basis Data - Kelompok 2 - IF B
Anggota Kelompok 2
1. Deta Triandini (1207050025)
2. Farras Rangga W (1207050035)
3. Fatih Fauzan K (1207050037)

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
5. Buat file untuk melihat data dengan nama update.php
![image](https://user-images.githubusercontent.com/83359019/209285513-548db69a-5eac-4546-837d-3213f4807660.png)
6. Buat file untuk mengedit data dengan nama update-2.php
![image](https://user-images.githubusercontent.com/83359019/209285901-9280f721-b489-408b-a373-35fcfade1d92.png)
7. Buat file untuk menghapus data dengan nama delete.php
![image](https://user-images.githubusercontent.com/83359019/209285662-05ba6d0e-bcdf-416e-8788-2e5a021918d2.png)

# Cara Menjalankan Aplikasi
1. Klik start apache dan mysql di xampp
2. Buka browser masukkan domain localhost:http://localhost/namaFolderAplikasi/ (disini kami membuat folder dengan nama UAS-SQLite) 
Maka ketikan domain http://localhost/UAS-SQLite/

# Tampilan Aplikasi
1. Tampilan awal
![Screenshot (137)](https://user-images.githubusercontent.com/114047429/209361504-cbec73a9-f870-4648-bd38-4bcb21cf4a09.png)
2. Tampilan setelah diinsert
![Screenshot (138)](https://user-images.githubusercontent.com/114047429/209361554-325f04e8-dbfd-4651-b203-9da100cb47cb.png)
3. Tampilan form update
![Screenshot (139)](https://user-images.githubusercontent.com/114047429/209361698-ddab0e4c-ed4a-4c37-98f5-2b3ce0bdc878.png)
4. Tampilan setelah diupdate
![Screenshot (140)](https://user-images.githubusercontent.com/114047429/209361797-3dc6ace6-66cc-4bdc-b4ad-4d7223de2f6e.png)
5. Tampilan setelah dihapus
![Screenshot (141)](https://user-images.githubusercontent.com/114047429/209361831-906c523e-2342-44f0-8d81-0017376f0334.png)

