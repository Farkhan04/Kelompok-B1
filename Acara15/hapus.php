<?php
require ('koneksi.php');
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM user_detail WHERE id='$id'")or die(mysqli_connect_errno());
header("location:home.php");
?>