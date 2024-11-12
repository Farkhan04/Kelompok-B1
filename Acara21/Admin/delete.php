<?php
include '../koneksi.php'; // Adjust path if necessary

// Check if 'id' is set in the query string
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch berita data to confirm the deletion and display current information
    $query = "SELECT * FROM berita WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $berita = mysqli_fetch_assoc($result);
    } else {
        echo "Data not found!";
        exit;
    }

    // Process deletion after confirmation
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Delete the image file if it exists
        if (file_exists($berita['gambar'])) {
            unlink($berita['gambar']);
        }

        // Delete record from database
        $query = "DELETE FROM berita WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            $success_message = "News deleted successfully!";
            header('Location: Admin_Dashboard.php'); // Redirect to dashboard after deletion
            exit;
        } else {
            $error_message = "Failed to delete news: " . mysqli_error($koneksi);
        }
    }
} else {
    echo "No data selected for deletion!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete News</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="mt-5 text-center">Delete News</h2>
        <?php
        if (isset($success_message)) {
            echo "<div class='alert alert-success text-center'>$success_message</div>";
        }
        if (isset($error_message)) {
            echo "<div class='alert alert-danger text-center'>$error_message</div>";
        }
        ?>
        
        <div class="alert alert-warning text-center">
            <p>Are you sure you want to delete the following news item?</p>
            <h4><?php echo htmlspecialchars($berita['judul']); ?></h4>
            <p><?php echo htmlspecialchars($berita['konten']); ?></p>
            <?php if ($berita['gambar']): ?>
                <img src="<?php echo $berita['gambar']; ?>" alt="Image" style="max-width: 200px;">
            <?php endif; ?>
        </div>
        
        <form method="POST" action="">
            <button type="submit" class="btn btn-danger">Confirm Delete</button>
            <a href="Admin_Dashboard.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
