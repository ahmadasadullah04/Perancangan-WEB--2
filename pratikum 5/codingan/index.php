<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Siswa</title>
</head>
<body>

<h2>FORM PENDAFTARAN SISWA BARU</h2>

<form action="proses_daftar.php" method="post">

Nama Lengkap : <br>
<input type="text" name="nama" required><br><br>

NISN : <br>
<input type="text" name="nisn" required><br><br>

Tempat Lahir : <br>
<input type="text" name="tempat" required><br><br>

Tanggal Lahir : <br>
<input type="date" name="tgl" required><br><br>

Jenis Kelamin : <br>
<select name="jk">
    <option>Laki-laki</option>
    <option>Perempuan</option>
</select><br><br>

Agama : <br>
<select name="agama">
    <option>Islam</option>
    <option>Kristen</option>
    <option>Hindu</option>
    <option>Budha</option>
    <option>Konghucu</option>
</select><br><br>

Alamat : <br>
<textarea name="alamat" required></textarea><br><br>

No HP : <br>
<input type="text" name="hp" required><br><br>

Email : <br>
<input type="email" name="email" required><br><br>

<button type="submit">Daftar</button>

</form>

</body>
</html>

