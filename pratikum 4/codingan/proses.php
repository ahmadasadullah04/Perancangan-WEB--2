<?php
include "koneksi.php";

$nama   = $_POST['nama'];
$nisn   = $_POST['nisn'];
$tmp    = $_POST['tempat'];
$tgl    = $_POST['tgl'];
$jk     = $_POST['jk'];
$agama  = $_POST['agama'];
$alamat = $_POST['alamat'];
$hp     = $_POST['hp'];
$email  = $_POST['email'];

$query = "INSERT INTO pendaftaran
(nama, nisn, tempat_lahir, tgl_lahir, jk, agama, alamat, no_hp, email)
VALUES
('$nama','$nisn','$tmp','$tgl','$jk','$agama','$alamat','$hp','$email')";

mysqli_query($conn, $query);

echo "<h2>Pendaftaran Berhasil!</h2>";
echo "<a href='data_siswa.php'>Lihat Data Siswa</a>";
?>
