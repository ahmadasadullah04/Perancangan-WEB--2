<?php
include "koneksi.php";

$id = $_GET['id'];
$q  = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id='$id'");
$d  = mysqli_fetch_assoc($q);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>

<h2>EDIT DATA SISWA</h2>

<form action="update.php" method="post">

<input type="hidden" name="id" value="<?= $d['id'] ?>">

Nama Lengkap : <br>
<input type="text" name="nama" value="<?= $d['nama'] ?>" required><br><br>

NISN : <br>
<input type="text" name="nisn" value="<?= $d['nisn'] ?>" required><br><br>

Tempat Lahir : <br>
<input type="text" name="tempat" value="<?= $d['tempat_lahir'] ?>" required><br><br>

Tanggal Lahir : <br>
<input type="date" name="tgl" value="<?= $d['tgl_lahir'] ?>" required><br><br>

Jenis Kelamin : <br>
<select name="jk">
    <option <?= $d['jk']=="Laki-laki"?"selected":"" ?>>Laki-laki</option>
    <option <?= $d['jk']=="Perempuan"?"selected":"" ?>>Perempuan</option>
</select><br><br>

Agama : <br>
<select name="agama">
    <option <?= $d['agama']=="Islam"?"selected":"" ?>>Islam</option>
    <option <?= $d['agama']=="Kristen"?"selected":"" ?>>Kristen</option>
    <option <?= $d['agama']=="Hindu"?"selected":"" ?>>Hindu</option>
    <option <?= $d['agama']=="Budha"?"selected":"" ?>>Budha</option>
    <option <?= $d['agama']=="Konghucu"?"selected":"" ?>>Konghucu</option>
</select><br><br>

Alamat : <br>
<textarea name="alamat" required><?= $d['alamat'] ?></textarea><br><br>

No HP : <br>
<input type="text" name="hp" value="<?= $d['no_hp'] ?>" required><br><br>

Email : <br>
<input type="email" name="email" value="<?= $d['email'] ?>" required><br><br>

<button type="submit">Update</button>

</form>

</body>
</html>

