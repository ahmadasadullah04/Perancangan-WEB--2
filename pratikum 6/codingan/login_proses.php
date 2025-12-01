<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

if (mysqli_num_rows($data) == 0) {
    echo "Username tidak ditemukan<br>";
    echo "<a href='login.php'>Kembali</a>";
    exit;
}

$user = mysqli_fetch_assoc($data);

if (password_verify($password, $user['password'])) {
    // Login berhasil → buat session
    $_SESSION['username'] = $user['username'];
    $_SESSION['gender']   = $user['gender'];

    header("Location: dashboard.php");
    exit;
} else {
    echo "Password salah!<br>";
    echo "<a href='login.php'>Coba lagi</a>";
}
?>
