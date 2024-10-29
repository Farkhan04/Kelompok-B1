<?php
require("koneksi.php");
require("query.php"); // Mengimpor file yang berisi kelas crud
$obj = new crud(); // Membuat objek dari kelas crud

// $email = $_GET['user_fullname'];
//Perubahan
//insialisasi session
session_start();

//mengecek user pada session
if (!isset($_SESSION['id'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login.php');
}

$sesID = $_SESSION['id'];
$sesName = $_SESSION['name'];
$sesLvl = $_SESSION['level'];


?>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <h1>Selamat Datang <?php echo $sesName; ?></h1>
    <table border='1'>
        <tr>
            <td>No</td>
            <td>Email</td>
            <td>Nama</td>
            <td></td>
        </tr>
        <?php
        $data = $obj->lihatData();
        $no = 1;
        if ($data->rowCount() > 0) {
            while ($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['user_email']; ?></td>
                    <td><?php echo $row['user_fullname']; ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id']; ?>">edit</a>
                        <a href="hapus.php?id=<?php echo $row['id']; ?>">hapus</a>
                    </td>
                </tr>
        <?php
                $no++;
            }
        } ?>
    </table>
    <p> <a href="logout.php">logout</p>
</body>

</html>