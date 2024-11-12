<?php
include '../koneksi.php'; // Pastikan path sesuai

// Ambil data berita dari database
$query = "SELECT * FROM berita ORDER BY id DESC"; // Mengambil berita terbaru terlebih dahulu
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .img-table {
            max-width: 150px;
            /* Sesuaikan ukuran gambar agar tidak terlalu besar */
            height: auto;
            /* Menjaga rasio aspek gambar */
            display: block;
            /* Mengatur gambar agar bisa dipusatkan */
            margin: 0 auto;
            /* Memusatkan gambar di dalam kolom */
        }

        .card {
            overflow: hidden;
            /* Menghindari overflow konten */
        }

        .card-body {
            display: flex;
            /* Menggunakan flexbox untuk tata letak */
            justify-content: space-between;
            /* Ruang antara konten dan gambar */
            align-items: center;
            /* Vertikal center */
        }

        .card-text {
            flex: 1;
            /* Membiarkan teks mengisi ruang yang tersisa */
            margin-right: 20px;
            /* Jarak antara teks dan gambar */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="mt-5 text-center">User Dashboard</h2>

        <div class="text-center mt-4">

            <a href="../logout.php" class="btn btn-danger ml-2">Logout</a>
        </div>

        <div class="mt-4">
            <?php
            // Tampilkan berita
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='card mb-3'>";
                    echo "<div class='card-body'>";
                    echo "<div class='card-text'>" . htmlspecialchars($row['judul']) . "<br>" . htmlspecialchars($row['konten']) . "</div>";
                    echo "<img src='" . htmlspecialchars($row['gambar']) . "' alt='Gambar Berita' class='img-table'>"; // Gunakan kelas img-table
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<div class='alert alert-info'>Belum ada berita yang dipublikasikan.</div>";
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>