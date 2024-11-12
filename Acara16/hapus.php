<?php
require('koneksi.php');

// Buat objek koneksi
$db = new koneksi();
$pdo = $db->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data dengan menggunakan prepared statement
    $query = "DELETE FROM user_detail WHERE id = :id";
    $stmt = $pdo->prepare($query);
    
    // Bind parameter
    $stmt->bindParam(':id', $id);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: home.php");
        exit();
    } else {
        echo "Error: Unable to delete user.";
    }
} else {
    echo "No ID provided.";
}
?>
