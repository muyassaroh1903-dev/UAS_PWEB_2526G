<?php
require_once "function.php";


if (!isset($_GET["id"])) {
    header("Location: index.php");
    exit;
}

$id = $_GET["id"];


$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];


if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {

        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href='index.php';
        </script>";

    } else {

        echo "
        <script>
            alert('Data gagal diubah!');
            document.location.href='edit.php?id=$id';
        </script>";

    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<h1>Edit Data Mahasiswa</h1>

<form action="" method="post">

    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">

    <label>NIM</label>
    <input type="text" name="nim" value="<?= $mhs['nim']; ?>" required>

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $mhs['nama']; ?>" required>

    <label>Prodi</label>
    <input type="text" name="prodi" value="<?= $mhs['prodi']; ?>" required>

    <label>Angkatan</label>
    <input type="number" name="angkatan" value="<?= $mhs['angkatan']; ?>" required>

    <label>Jurusan</label>
    <input type="text" name="jurusan" value="<?= $mhs['jurusan']; ?>" required>

    <label>Email</label>
    <input type="email" name="email" value="<?= $mhs['email']; ?>" required>

    <label>Alamat</label>
    <textarea name="alamat" rows="4" required><?= $mhs['alamat']; ?></textarea>

    <br>

    <button type="submit" name="submit" class="btn btn-edit">
        Update
    </button>

    <a href="index.php" class="btn btn-hapus">
        Kembali
    </a>

</form>

</div>

</body>
</html>
