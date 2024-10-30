<?php
session_start();
include 'koneksi.php'; // Pastikan path ini sesuai

// Proses login jika form dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['Username'];
    $password = md5($_POST['password']); // Enkripsi password dengan md5

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE Username='$username' AND Password='$password'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $data['Role']; // Pastikan menggunakan 'Role' dari database

        // Redirect berdasarkan peran pengguna
        if ($_SESSION['role'] == 'admin') {
            header("Location: ../Acara21/Admin/Admin_Dashboard.php"); // Untuk admin
        } else {
            header("Location: ../Acara21/Admin/User_Dashboard.php"); // Untuk user
        }
        exit();
    } else {
        $error = "Login gagal! Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fc;
        }

        .container {
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" id="loginForm">
                            <div class="form-group">
                                <label for="inputUsername">Username</label>
                                <input type="text" class="form-control" id="txt_username" name="Username" placeholder="Enter your Username" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                        <div id="responseMessage" class="mt-3">
                            <?php
                            if (isset($error)) {
                                echo "<div class='alert alert-danger text-center'>$error</div>";
                            }
                            ?>
                        </div>
                        <div class="form-group text-center">
                            <a href="register.php">Don't have an account? Register here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
