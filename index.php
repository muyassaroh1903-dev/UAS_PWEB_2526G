<?php
require_once "function.php";

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");


if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendataan Mahasiswa</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h1>Sistem Pendataan Mahasiswa</h1>

    <a href="tambah.php" class="btn btn-tambah">
        + Tambah Mahasiswa
    </a>

    <br><br>

    <!-- FORM PENCARIAN -->
    <form action="" method="post" class="search-box">

        <input
            type="text"
            name="keyword"
            placeholder="Cari NIM, Nama, Prodi, Jurusan..."
            autocomplete="off"
        >

        <button type="submit" name="cari" class="btn btn-search">
            🔍 Cari
        </button>

        <a href="index.php" class="btn btn-edit">
            Reset
        </a>

    </form>

    <table>

        <thead>

            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

        <?php if(empty($mahasiswa)) : ?>

        <tr>
            <td colspan="9" style="text-align:center;">
                Data tidak ditemukan.
            </td>
        </tr>

        <?php endif; ?>

        <?php
        $no = 1;
        foreach($mahasiswa as $row) :
        ?>

        <tr>

            <td><?= $no++; ?></td>

            <td><?= $row["nim"]; ?></td>

            <td><?= $row["nama"]; ?></td>

            <td><?= $row["prodi"]; ?></td>

            <td><?= $row["angkatan"]; ?></td>

            <td><?= $row["jurusan"]; ?></td>

            <td><?= $row["email"]; ?></td>

            <td><?= $row["alamat"]; ?></td>

            <td>

                <a href="edit.php?id=<?= $row["id"]; ?>" class="btn btn-edit">
                    Edit
                </a>

                <a href="hapus.php?id=<?= $row["id"]; ?>"
                   class="btn btn-hapus"
                   onclick="return confirm('Yakin ingin menghapus data?');">

                    Hapus

                </a>

            </td>

        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

</body>
</html>
