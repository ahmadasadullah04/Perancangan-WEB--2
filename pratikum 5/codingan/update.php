<?php
include "koneksi.php";

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$nisn   = $_POST['nisn'];
$tmp    = $_POST['tempat'];
$tgl    = $_POST['tgl'];
$jk     = $_POST['jk'];
$agama  = $_POST['agama'];
$alamat = $_POST['alamat'];
$hp     = $_POST['hp'];
$email  = $_POST['email'];

mysqli_query($conn, "UPDATE pendaftaran SET
    nama='$nama',
    nisn='$nisn',
    tempat_lahir='$tmp',
    tgl_lahir='$tgl',
    jk='$jk',
    agama='$agama',
    alamat='$alamat',
    no_hp='$hp',
    email='$email'
    WHERE id='$id'
");

header("Location: data_siswa.php");
exit;
?>
