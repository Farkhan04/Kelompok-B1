<!doctype html>
<html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DTS-VSGA 2021 (JWD)</title>
</head>

<body>

    <?php include 'header.php'; ?>
    <div class="container mt-5">
        <h2 class="mb-4"><b>Tabel DTS VSGA 2021</b></h2>
        <p>Tampil Data dari Database</p>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM diri";
                $hasil = mysqli_query($conn, $sql);
                $nomer = 1;

                while ($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
                ?>
                    <tr>
                        <td><?php echo $nomer++; ?></td>
                        <td><?php echo htmlspecialchars($data['nama']); ?></td>
                        <td><?php echo htmlspecialchars($data['lahir']); ?></td>
                        <td><?php echo htmlspecialchars($data['email']); ?></td>
                        <td><?php echo htmlspecialchars($data['telpon']); ?></td>
                        <td><?php echo htmlspecialchars($data['alamat']); ?></td>
                        <td><?php echo htmlspecialchars($data['kelamin']); ?></td>
                        <td>
                            <a class="btn btn-warning" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
