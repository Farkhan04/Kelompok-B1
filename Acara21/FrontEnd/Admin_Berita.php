<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulis Berita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" type="text/css">
    <style>
        body {
            background-color: #f8f9fc;
        }
        .container {
            margin-top: 30px;
        }
        #imagePreview {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Tulis Berita</h1>
    <form>
        <div class="form-group">
            <label for="judulBerita">Judul Berita</label>
            <input type="text" class="form-control" id="judulBerita" placeholder="Masukkan judul berita" required>
        </div>
        <div class="form-group">
            <label for="isiBerita">Isi Berita</label>
            <textarea class="form-control" id="isiBerita" rows="5" placeholder="Masukkan isi berita" required></textarea>
        </div>
        <div class="form-group">
            <label for="gambarBerita">Upload Gambar</label>
            <input type="file" class="form-control-file" id="gambarBerita" accept="image/*" onchange="previewImage(event)" required>
            <img id="imagePreview" src="#" alt="Gambar Preview" style="display:none;">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan Berita</button>
    </form>
    <div class="text-right mt-3">
        <a href="Admin_Dashboard.php" class="btn btn-secondary">Kembali ke Dashboard</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function previewImage(event) {
        const input = event.target;
        const file = input.files[0];
        const preview = document.getElementById('imagePreview');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block'; // Tampilkan pratinjau gambar
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = "#";
            preview.style.display = 'none'; // Sembunyikan pratinjau jika tidak ada file
        }
    }
</script>
</body>
</html>
