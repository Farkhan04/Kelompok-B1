<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php?pesan=belum_login");
}

$username = $_SESSION['username'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Multi-User Access</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $username; ?>!</h2>
    <p>Anda login sebagai <b><?php echo ucfirst($role); ?></b>.</p>
    
    <?php if ($role === 'admin') : ?>
        <h3>Menu Admin</h3>
        <ul>
            <li><a href="admin.php">Kelola Pengguna</a></li>
            <li><a href="dashboard.php">Dashboard Admin</a></li>
        </ul>
    <?php elseif ($role === 'editor') : ?>
        <h3>Menu Editor</h3>
        <ul>
            <li><a href="edit_content.php">Edit Konten</a></li>
        </ul>
    <?php endif; ?>

    <a href="logout.php">Logout</a>
</body>
</html>
