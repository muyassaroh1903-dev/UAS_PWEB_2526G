<?php
require_once "function.php";


if (!isset($_GET["id"])) {
    header("Location: index.php");
    exit;
}

$id = (int)$_GET["id"];


if (hapus($id) > 0) {

    echo "
    <script>
        alert('Data mahasiswa berhasil dihapus!');
        document.location.href='index.php';
    </script>";

} else {

    echo "
    <script>
        alert('Data mahasiswa gagal dihapus!');
        document.location.href='index.php';
    </script>";

}
?>
