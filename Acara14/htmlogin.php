<?php
require_once 'koneksi.php';
require_once 'tugas_login.php';

session_start();
$errorMessage = '';
$koneksiObj = new koneksi();
$loginObj = new Login($koneksiObj->getKoneksi());

if (isset($_POST['submit'])) {
    $email = $_POST['txt_email'];
    $password = $_POST['txt_pass'];
    $errorMessage = $loginObj->loginUser($email, $password);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input {
            margin: 10px 0;
            padding: 8px;
            width: calc(100% - 22px);
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="home.php" method="POST">
        <h2>Login</h2>
        <?php
        if (!empty($errorMessage)) {
            echo '<p class="error">' . htmlspecialchars($errorMessage) . '</p>';
        }
        ?>
        <p>Email: <input type="text" name="txt_email"></p>
        <p>Password: <input type="password" name="txt_pass"></p>
        <button type="submit" name="submit">Sign In</button>
        <div>
            <a href="register.php">Daftar akun</a>
        </div>
    </form>
</body>
</html>
