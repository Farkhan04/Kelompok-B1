
<?php
require ('koneksi.php'); 
if(isset($_POST['register'])){
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];

    $query  = "INSERT INTO user_detail VALUES ('','$userMail', '$userPass', '$userName', 2)"; 
    $result = mysqli_query($koneksi, $query); 
    header('Location: login.php');
}
?>
<html> 
    <head>
        <title>Register</title>
    </head>
<body>
    <form action="register.php" method="POST">
        <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" required></p> 
        <p>password: <input type="password" name="txt_pass" required></p>
        <p>nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_nama" required></p> 
        <button type="submit" name="register">Register</button>
    </form>
    <p><a href="login.php">Login</p>
</body>
</html>