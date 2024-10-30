<?php
include 'koneksi.php'; // Memasukkan koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Enkripsi password dengan md5

    // Periksa apakah username sudah ada
    $checkQuery = mysqli_query($koneksi, "SELECT * FROM user WHERE Username='$username'");
    if (mysqli_num_rows($checkQuery) > 0) {
        echo "<div class='alert alert-danger text-center'>Username sudah ada, silakan gunakan yang lain.</div>";
    } else {
        // Masukkan data baru ke database
        $query = "INSERT INTO user (Username, Password, Role) VALUES ('$username', '$password', 'user')"; // Set role 'user'
        if (mysqli_query($koneksi, $query)) {
            echo "<div class='alert alert-success text-center'>Pendaftaran berhasil. <a href='index.php'>Login di sini</a></div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Terjadi kesalahan saat mendaftar, coba lagi.</div>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                    <h3 class="text-center font-weight-light my-4">Register</h3>
                </div>
                <div class="card-body">
                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </form>
                    <div class="form-group text-center">
                        <a href="index.php">Already have an account? Login here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
