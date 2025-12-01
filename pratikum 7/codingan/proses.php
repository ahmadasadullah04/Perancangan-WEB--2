<?php
include "koneksi.php";

$nama = $_POST['nama'];
$file = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];
$size = $_FILES['foto']['size'];

$folder = "gambar/";
$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

$newName = uniqid() . "." . $ext;

// VALIDASI
if (!in_array($ext, $allowed_ext)) {
    echo "<script>alert('Format file tidak diperbolehkan!');history.back();</script>";
    exit;
}

if ($size > 1000000) { // >1MB
    echo "<script>alert('Ukuran file terlalu besar!');history.back();</script>";
    exit;
}

// Upload
if (move_uploaded_file($tmp, $folder . $newName)) {
    mysqli_query($conn, "INSERT INTO namasiswa (nama, foto)
    VALUES ('$nama', '$newName')");

    header("Location: tampil_foto.php?success=1");
} else {
    echo "Upload gagal!";
}
?>
