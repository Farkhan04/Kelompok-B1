<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <h2>Daftar</h2>

    <!-- cek pesan notifikasi -->
    <?php
    if (isset($_GET['regist'])) {
        if ($_GET['regist'] == "gagal") {
            echo "Username Sudah Tersedia";
        }
    }
    ?>

    <body>
        <form action="fungsi_register.php" method="POST">
            <p>nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_username" required></p>
            <p>password: <input type="password" name="txt_pass" required></p>
            <button type="submit" name="register">Register</button>
        </form>
        <p><a href="index.php">Login</p>
    </body>

</html>