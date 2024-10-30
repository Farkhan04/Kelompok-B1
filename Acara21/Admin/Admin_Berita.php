<?php
include '../koneksi.php'; // Pastikan path sesuai

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $gambar = $_FILES['gambar'];

    // Validasi input
    if (!empty($judul) && !empty($konten) && $gambar['error'] == 0) {
        // Path folder untuk menyimpan gambar
        $target_dir = "../img";
        $target_file = $target_dir . basename($gambar["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validasi tipe file gambar
        $allowed_types = array("jpg", "jpeg", "png", "gif");
        if (in_array($imageFileType, $allowed_types)) {
            // Pindahkan file gambar ke folder target
            if (move_uploaded_file($gambar["tmp_name"], $target_file)) {
                // Simpan data ke database
                $query = "INSERT INTO berita (judul, konten, gambar) VALUES ('$judul', '$konten', '$target_file')";
                if (mysqli_query($koneksi, $query)) {
                    $success_message = "Berita berhasil disimpan!";
                    header('Location: Admin_Dashboard.php');
                } else {
                    $error_message = "Gagal menyimpan berita: " . mysqli_error($koneksi);
                }
            } else {
                $error_message = "Gagal mengunggah gambar.";
            }
        } else {
            $error_message = "Format file tidak valid. Hanya mendukung JPG, JPEG, PNG, dan GIF.";
        }
    } else {
        $error_message = "Judul, konten, dan gambar harus diisi!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulis Berita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="mt-5 text-center">Tulis Berita</h2>
        <?php
        if (isset($success_message)) {
            echo "<div class='alert alert-success text-center'>$success_message</div>";
        }
        if (isset($error_message)) {
            echo "<div class='alert alert-danger text-center'>$error_message</div>";
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data"> <!-- Tambahkan enctype -->
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="konten">Konten Berita</label>
                <textarea class="form-control" id="konten" name="konten" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Upload Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Berita</button>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>