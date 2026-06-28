# Sistem Pendataan Mahasiswa

## Deskripsi

Sistem Pendataan Mahasiswa merupakan aplikasi web sederhana yang dibuat menggunakan **HTML, CSS, PHP Native, dan MySQL**. Aplikasi ini digunakan untuk mengelola data mahasiswa dengan menerapkan konsep **CRUD (Create, Read, Update, Delete)**. Pengguna dapat menambah, melihat, mengubah, menghapus, serta mencari data mahasiswa melalui antarmuka yang sederhana dan mudah digunakan.

---

## Fitur

* Menampilkan data mahasiswa.
* Menambahkan data mahasiswa.
* Mengubah data mahasiswa.
* Menghapus data mahasiswa.
* Mencari data berdasarkan NIM, Nama, Prodi, atau Jurusan.
* Tampilan responsif dan mudah digunakan.

---

## Teknologi yang Digunakan

* HTML
* CSS
* PHP Native
* MySQL
* XAMPP (Apache & MySQL)

---

## Struktur Folder

```text
UAS-PWEB-2526G-095/
│
├── config.php
├── function.php
├── index.php
├── tambah.php
├── edit.php
├── hapus.php
├── style.css
├── database.sql
└── README.md
```

---

## Cara Menjalankan Program

1. Install **XAMPP**.
2. Jalankan **Apache** dan **MySQL**.
3. Salin folder proyek ke dalam folder `htdocs`.
4. Buat database baru dengan nama `db_mahasiswa`.
5. Import file `database.sql` melalui **phpMyAdmin**.
6. Sesuaikan konfigurasi database pada file `config.php`.

Contoh konfigurasi:

```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mahasiswa";
```

7. Buka browser dan akses:

```text
http://localhost/UAS-PWEB-2526G-095/
```

---

## Fitur CRUD

### Create

Menambahkan data mahasiswa baru melalui halaman **Tambah Mahasiswa**.

### Read

Menampilkan seluruh data mahasiswa dalam bentuk tabel.

### Update

Mengubah data mahasiswa yang telah tersimpan.

### Delete

Menghapus data mahasiswa dari database.

---

## Tampilan Aplikasi

* Halaman Utama
* Tambah Data Mahasiswa
* Edit Data Mahasiswa
* Fitur Pencarian Data

---

## Database

**Nama Tabel:** `mahasiswa`

**Field:**

* id
* nim
* nama
* prodi
* angkatan
* jurusan
* email
* alamat

---

## Penulis

**Nama** : Muyassaroh
**NIM** : 240631100095
**Program Studi** : Pendidikan Informatika
**Mata Kuliah** : Pemrograman Web

---

## Lisensi

Proyek ini dibuat untuk memenuhi tugas **Ujian Akhir Semester (UAS) Mata Kuliah Pemrograman Web**. Aplikasi dikembangkan menggunakan **HTML, CSS, PHP Native, dan MySQL** sebagai media pembelajaran dalam membangun sistem pendataan mahasiswa berbasis web dengan fitur **CRUD (Create, Read, Update, Delete)** dan pencarian data.
