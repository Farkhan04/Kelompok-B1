<!DOCTYPE html>
<html>
<head>
    <title>Login Multi-User</title>
</head>
<body>
    <h2>Login</h2>
    <form action="cek_login.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>

    <br>
    <p><a href="register.php">Register</a></p> <!-- Link ke halaman register -->
</body>
</html>
