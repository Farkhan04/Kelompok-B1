<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Multi File - www.jti.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">UPLOAD MULTI FILE PHP</h2>

        <!-- Notifikasi Alert -->
        <?php if (isset($_GET['alert'])): ?>
            <?php if ($_GET['alert'] == "gagal_ukuran"): ?>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Ukuran file terlalu besar.
                </div>
            <?php elseif ($_GET['alert'] == "gagal_ektensi"): ?>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Ekstensi gambar tidak diperbolehkan.
                </div>
            <?php elseif ($_GET['alert'] == "simpan"): ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> Gambar berhasil disimpan.
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Form Upload -->
        <form action="proses_act.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="foto1">Foto 1:</label>
                <input type="file" name="foto[]" id="foto1" class="form-control" required multiple>
            </div>
            <div class="form-group">
                <label for="foto2">Foto 2:</label>
                <input type="file" name="foto[]" id="foto2" class="form-control" required multiple>
            </div>
            <p class="text-danger">Ekstensi yang diperbolehkan: .png | .jpg | .jpeg | .gif</p>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
