<?php
include "koneksi.php";

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$gender   = $_POST['gender'];

// Cek username sudah ada atau belum
$cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

if (mysqli_num_rows($cek) > 0) {
    echo "Username sudah terdaftar! <br>";
    echo "<a href='register.php'>Kembali</a>";
    exit;
}

mysqli_query($conn, "INSERT INTO users(username, password, gender)
VALUES('$username', '$password', '$gender')");

echo "User berhasil terdaftar!<br>";
echo "<a href='login.php'>Login sekarang</a>";
?>
