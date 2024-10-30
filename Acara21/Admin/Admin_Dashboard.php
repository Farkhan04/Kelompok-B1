<?php
include '../koneksi.php'; // Pastikan path sesuai

// Ambil data berita dari database
$query = "SELECT * FROM berita";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="mt-5 text-center">Admin Dashboard</h2>


    <div class="text-center mt-4">
        <a href="Admin_berita.php" class="btn btn-primary">Tulis Berita</a>
        <a href="../logout.php" class="btn btn-danger ml-2">Logout</a>
    </div>
</div>

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; // Untuk nomor urut
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . htmlspecialchars($row['judul']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['konten']) . "</td>";
                    echo "<td><img src='" . htmlspecialchars($row['gambar']) . "' alt='Gambar Berita' style='width: 100px; height: auto;'></td>";
                    echo "<td>
                            <a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>