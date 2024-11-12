<?php
include '../koneksi.php'; // Make sure this path is correct

// Retrieve data for editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM berita WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $berita = mysqli_fetch_assoc($result);
    } else {
        echo "Data not found!";
        exit;
    }
}

// Update data after form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $gambar = $_FILES['gambar'];

    // Validate inputs
    if (!empty($judul) && !empty($konten)) {
        $target_file = $berita['gambar']; // Existing image path

        // Handle new image upload if provided
        if ($gambar['error'] == 0) {
            $target_dir = "../img/";
            $target_file = $target_dir . basename($gambar["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $allowed_types = array("jpg", "jpeg", "png", "gif");

            if (in_array($imageFileType, $allowed_types)) {
                if (move_uploaded_file($gambar["tmp_name"], $target_file)) {
                    // Delete the old image file if a new image is uploaded
                    if (file_exists($berita['gambar'])) {
                        unlink($berita['gambar']);
                    }
                } else {
                    $error_message = "Failed to upload new image.";
                }
            } else {
                $error_message = "Invalid file format. Only JPG, JPEG, PNG, and GIF are allowed.";
            }
        }

        // Update data in the database
        $query = "UPDATE berita SET judul = '$judul', konten = '$konten', gambar = '$target_file' WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            $success_message = "News updated successfully!";
            header('Location: Admin_Dashboard.php');
        } else {
            $error_message = "Failed to update news: " . mysqli_error($koneksi);
        }
    } else {
        $error_message = "Title and content are required!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit News</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="mt-5 text-center">Edit News</h2>
        <?php
        if (isset($success_message)) {
            echo "<div class='alert alert-success text-center'>$success_message</div>";
        }
        if (isset($error_message)) {
            echo "<div class='alert alert-danger text-center'>$error_message</div>";
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">News Title</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo htmlspecialchars($berita['judul']); ?>" required>
            </div>
            <div class="form-group">
                <label for="konten">News Content</label>
                <textarea class="form-control" id="konten" name="konten" rows="5" required><?php echo htmlspecialchars($berita['konten']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Upload Image (optional)</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*">
                <small>Current Image: <a href="<?php echo $berita['gambar']; ?>" target="_blank">View</a></small>
            </div>
            <button type="submit" class="btn btn-primary">Update News</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
