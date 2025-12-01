<?php
include "koneksi.php";

$data = mysqli_query($conn, "SELECT * FROM pendaftaran ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>DATA PENDAFTAR SISWA BARU</h2>

<a href="index.php">+ Tambah Pendaftar Baru</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>NISN</th>
    <th>JK</th>
    <th>Agama</th>
    <th>No HP</th>
    <th>Email</th>
    <th>Aksi</th>
</tr>

<?php while ($d = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $d['id'] ?></td>
    <td><?= $d['nama'] ?></td>
    <td><?= $d['nisn'] ?></td>
    <td><?= $d['jk'] ?></td>
    <td><?= $d['agama'] ?></td>
    <td><?= $d['no_hp'] ?></td>
    <td><?= $d['email'] ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id'] ?>">Edit</a> | 
        <a href="hapus.php?id=<?= $d['id'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
