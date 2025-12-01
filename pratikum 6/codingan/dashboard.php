<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>SELAMAT DATANG</h2>

<?php
echo "Username : " . $_SESSION['username'] . "<br>";
echo "Jenis Kelamin : " . $_SESSION['gender'] . "<br>";
?>

<br>
<a href="logout.php">Logout</a>

</body>
</html>
