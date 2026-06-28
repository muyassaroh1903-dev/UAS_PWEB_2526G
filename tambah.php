<?php
require_once "function.php";

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {

        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href='index.php';
        </script>";

    } else {

        echo "
        <script>
            alert('Data gagal ditambahkan!');
            document.location.href='tambah.php';
        </script>";

    }

}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<h1>Tambah Data Mahasiswa</h1>

<form action="" method="post">

    <label>NIM</label>
    <input type="text" name="nim" required>

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Prodi</label>
    <input type="text" name="prodi" required>

    <label>Angkatan</label>
    <input type="number" name="angkatan" required>

    <label>Jurusan</label>
    <input type="text" name="jurusan" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Alamat</label>
    <textarea name="alamat" rows="4" required></textarea>

    <br>

    <button type="submit" name="submit" class="btn btn-tambah">
        Simpan
    </button>

    <a href="index.php" class="btn btn-hapus">
        Kembali
    </a>

</form>

</div>

</body>
</html>
