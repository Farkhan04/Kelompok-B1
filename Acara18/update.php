<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$email = $_POST['email'];
$tlpn  = $_POST['tlpn'];
$alamat  = $_POST['alamat'];
$kelamin = $_POST['kelamin'];

$id = $_POST['id'];

$sql = "UPDATE diri SET nama='$nama', lahir='$tgl', email='$email', 
telpon='$tlpn', alamat='$alamat', kelamin='$kelamin' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location:tampil.php");
} else {
    echo "<script type='text/javascript'> 
            alert('Data Gagal Dimasukan!'); 
            location.replace('edit.php'); 
          </script>";
}

mysqli_close($conn);
