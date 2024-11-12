<?php
require('koneksi.php'); 

// Buat objek koneksi
$db = new koneksi();
$pdo = $db->getKoneksi();

if (isset($_POST['update'])) {
    $userId = $_POST['txt_id'];
    $userMail = $_POST['txt_email']; 
    $userPass = $_POST['txt_pass']; 
    $userName = $_POST['txt_nama'];

    // Query untuk update dengan menggunakan prepared statement
    $query = "UPDATE user_detail SET user_password = :userPass, user_fullname = :userName WHERE id = :userId"; 
    $stmt = $pdo->prepare($query);
    
    // Bind parameters
    $stmt->bindParam(':userPass', $userPass);
    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':userId', $userId);

    // Execute the statement
    if ($stmt->execute()) {
        header('Location: home.php');
        exit();
    } else {
        echo "Update failed.";
    }
}

$id = $_GET['id'];

// Query untuk mengambil data user
$query = "SELECT * FROM user_detail WHERE id = :id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $userMail = $row['user_email']; 
    $userPass = $row['user_password']; 
    $userName = $row['user_fullname'];
?>

<html>
<head>
    <title>Update User</title>
</head>
<body>
    <form action="edit.php" method="POST">
        <p><input type="hidden" name="txt_id" value="<?php echo htmlspecialchars($row['id']); ?>"></p>
        <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" value="<?php echo htmlspecialchars($userMail); ?>" readonly></p> 
        <p>password: <input type="password" name="txt_pass" value="<?php echo htmlspecialchars($userPass); ?>"></p>
        <p>nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_nama" value="<?php echo htmlspecialchars($userName); ?>"></p>
        <button type="submit" name="update">Update</button>
    </form>
    <p><a href="home.php">Kembali</a></p>
</body>
</html>

<?php 
} else {
    echo "User not found.";
}
?>
