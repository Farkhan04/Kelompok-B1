<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$email = $_POST['email'];
$tlpn  = $_POST['tlpn'];
$alamat  = $_POST['alamat'];
$kelamin = $_POST['kelamin'];


$sql = "INSERT INTO diri (id, nama, lahir, email, telpon, alamat, kelamin) 
    VALUES ('','$nama','$tgl','$email','$tlpn','$alamat','$kelamin')";

if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'> 
            alert('Data Berhasil Dimasukan!'); 
            location.replace('tampil.php'); 
          </script>";
} else {
    echo "<script type='text/javascript'> 
            alert('Data Gagal Dimasukan!');
              location.replace('tampil.php'); 
          </script>";
}

mysqli_close($conn);
//header("Location:input.php"); 
