<?php
include "koneksi.php";

$id = $_GET['id'];

$get = mysqli_query($conn, "SELECT foto FROM namasiswa WHERE id='$id'");
$data = mysqli_fetch_assoc($get);

unlink("gambar/" . $data['foto']);

mysqli_query($conn, "DELETE FROM namasiswa WHERE id='$id'");

header("Location: tampil_foto.php?deleted=1");
?>
