<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DTS-VSGA 2021 (JWD)</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="px-3">
        <h4 class="col-lg-6">Form DTS VSGA 2021</h4>
        <h5 class="col-lg-6"><b>Tambah Data</b></h5>
        <div class="col-lg-6">
            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM diri WHERE id='$id'";
            $hasil = mysqli_query($conn, $sql);
            $nomer = 1;
            while ($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
            ?>
                <form name="satu" action="update.php" method="post">
                    <div class="form-group">
                        <label for="id">ID Anda:</label>
                        <input type="text" name="id" id="id" class="form-control" value="<?php
                                                                                            echo $data['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Anda:</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama']; ?>"
                            placeholder="Masukan nama lengkap anda 
   dengan gelar">
                    </div>
                    <div class="form-group mb-2">
                        <label for="tgl">Tanggal Lahir Anda:</label>
                        <input type="date" name="tgl" id="tgl" class="form-control" value="<?php
                                                                                            echo $data['lahir']; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">E-Mail Anda:</label>
                        <input type="email" name="email" id="email" name="email" class="form-control"
                            value="<?php echo $data['email']; ?>" placeholder="Masukan email 
   anda">
                    </div>
                    <div class="form-group mb-2">
                        <label for="tlpn">Nomer Telpon Anda:</label>
                        <input type="number" name="tlpn" id="tlpn" pattern="[0-9]{12}" class="form-control" value="<?php echo $data['telpon']; ?>" placeholder="Masukan nomor telpon anda">
                    </div>
                    <div class="form-group mb-2">
                        <label for="alamat">Alamat Anda:</label>
                        <input class="form-control" name="alamat" id="alamat" rows="3" value="<?php echo $data['alamat']; ?>"
                            placeholder="Masukan alamat 
   anda"></input>
                    </div>
                    <div class="form-group mb-2">
                        <label for="kelamin">Jenis Kelamin:</label>
                        <select name="kelamin" id="Kelamin" value="" class="form-control">
                            <option value="<?php echo $data['kelamin']; ?>">
                                <?php echo
                                $data['kelamin']; ?>
                            </option>
                            <option value="<?php
                                            if ($data['kelamin'] == 'Pria') {
                                                echo 'Wanita';
                                            } else {
                                                echo 'Pria';
                                            }
                                            ?>">
                                <?php
                                if ($data['kelamin'] == 'Pria') {
                                    echo 'Wanita';
                                } else {
                                    echo 'Pria';
                                }
                                ?>
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            <?php
            }
            ?>
        </div>
    </div>