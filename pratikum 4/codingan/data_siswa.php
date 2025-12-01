<?php
include "koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM pendaftaran ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar</title>
</head>
<body>

<h2>DATA PENDAFTAR SISWA BARU</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>NISN</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>No HP</th>
    <th>Email</th>
    <th>Tanggal Daftar</th>
</tr>

<?php while ($d = mysqli_fetch_array($data)) { ?>
<tr>
    <td><?= $d['id'] ?></td>
    <td><?= $d['nama'] ?></td>
    <td><?= $d['nisn'] ?></td>
    <td><?= $d['jk'] ?></td>
    <td><?= $d['agama'] ?></td>
    <td><?= $d['no_hp'] ?></td>
    <td><?= $d['email'] ?></td>
    <td><?= $d['created_at'] ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>
