<!DOCTYPE html>
<html>
<head>
    <title>Upload Gambar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h3>Upload Foto Siswa</h3>
        </div>
        <div class="card-body">

            <form action="proses.php" method="post" enctype="multipart/form-data">
                
                <div class="mb-3">
                    <label class="form-label">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pilih Foto</label>
                    <input type="file" name="foto" class="form-control" required>
                </div>

                <button class="btn btn-success w-100">Upload</button>
            </form>

        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="tampil_foto.php" class="btn btn-outline-primary">Lihat Daftar Foto</a>
    </div>
</div>

</body>
</html>
