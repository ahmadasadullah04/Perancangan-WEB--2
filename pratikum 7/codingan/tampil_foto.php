<?php
include "koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM namasiswa ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Foto Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Daftar Foto Siswa</h2>

    <div class="text-end mb-3">
        <a href="input_foto.php" class="btn btn-primary">Upload Foto Baru</a>
    </div>

    <table class="table table-striped table-hover shadow-sm bg-white rounded">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php while ($d = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?= $d['id'] ?></td>
                <td><?= $d['nama'] ?></td>
                <td><img src="gambar/<?= $d['foto'] ?>" width="70" class="rounded shadow"></td>
                <td>
                    <a href="delete.php?id=<?= $d['id'] ?>" 
                       class="btn btn-outline-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus?')">
                       Hapus
                    </a>
                </td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

</div>

</body>
</html>
