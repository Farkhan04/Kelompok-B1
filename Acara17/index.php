<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>www.jti.com - Upload Multi File Menggunakan PHP MySQLi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-center">UPLOAD MULTI FILE PHP</h2>

        <?php if (isset($_GET['alert'])): ?>
            <?php if ($_GET['alert'] == "gagal_ukuran"): ?>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Ukuran File Terlalu Besar
                </div>
            <?php elseif ($_GET['alert'] == "gagal_ektensi"): ?>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Ekstensi Gambar Tidak Diperbolehkan
                </div>
            <?php elseif ($_GET['alert'] == "simpan"): ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> Gambar Berhasil Disimpan
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <form action="proses_act.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" name="foto[]" id="foto" required multiple>
                <p class="text-danger">Ekstensi yang diperbolehkan: .png | .jpg | .jpeg | .gif</p>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
