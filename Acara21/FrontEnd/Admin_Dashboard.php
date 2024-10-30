<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" type="text/css">
    <style>
        body {
            background-color: #f8f9fc;
        }
        .container {
            margin-top: 30px;
        }
        .img-thumbnail {
            max-width: 100px; /* Ukuran thumbnail */
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Admin Dashboard</h1>
    <div class="text-right mb-3">
        <a href="Admin_Berita.php" class="btn btn-primary">Tulis Berita</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Berita</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Berita Pertama</td>
                <td>2024-10-30</td>
                <td><img src="path/to/image1.jpg" alt="Gambar Berita 1" class="img-thumbnail"></td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Berita Kedua</td>
                <td>2024-10-29</td>
                <td><img src="path/to/image2.jpg" alt="Gambar Berita 2" class="img-thumbnail"></td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>
            <!-- Tambahkan berita lainnya di sini -->
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
