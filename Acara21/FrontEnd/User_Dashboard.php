<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
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
    <h1 class="text-center">User Dashboard</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Berita</th>
                <th>Tanggal</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><a href="detail_berita.html">Berita Pertama</a></td>
                <td>2024-10-30</td>
                <td><img src="path/to/image1.jpg" alt="Gambar Berita 1" class="img-thumbnail"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="detail_berita.html">Berita Kedua</a></td>
                <td>2024-10-29</td>
                <td><img src="path/to/image2.jpg" alt="Gambar Berita 2" class="img-thumbnail"></td>
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
