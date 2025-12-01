<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>FORM REGISTER USER</h2>

<form action="register_proses.php" method="post">

Username :
<input type="text" name="username" required><br><br>

Password :
<input type="password" name="password" required><br><br>

Gender :
<select name="gender" required>
    <option>Laki-laki</option>
    <option>Perempuan</option>
</select><br><br>

<button type="submit">Daftar</button>

</form>

<a href="login.php">Sudah punya akun? Login</a>

</body>
</html>
