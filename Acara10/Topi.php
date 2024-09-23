<?php
// Kelas induk yang bernama ItemProduk
class ItemProduk {
    // Property yang dimiliki oleh kelas ItemProduk
    public $ukuran;
    public $warna;
    public $nama;

    // Method untuk mengatur ukuran produk
    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    // Method untuk mendapatkan ukuran produk
    public function getUkuran() {
        return $this->ukuran;
    }

    // Method untuk mengatur warna produk
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // Method untuk mendapatkan warna produk
    public function getWarna() {
        return $this->warna;
    }

    // Method untuk mengatur nama produk
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Method untuk mendapatkan nama produk
    public function getNama() {
        return $this->nama;
    }
}

// Kelas Topi yang mewarisi ItemProduk
class Topi extends ItemProduk {
    // Property yang dimiliki oleh kelas Topi
    public $model;

    // Method untuk mengatur model topi
    public function setModel($model) {
        $this->model = $model;
    }

    // Method untuk mendapatkan model topi
    public function getModel() {
        return $this->model;
    }
}

// Kelas Celana yang mewarisi ItemProduk
class Celana extends ItemProduk {
    // Property yang dimiliki oleh kelas Celana
    public $tipe;
    public $model;

    // Method untuk mengatur tipe celana
    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    // Method untuk mendapatkan tipe celana
    public function getTipe() {
        return $this->tipe;
    }

    // Method untuk mengatur model celana
    public function setModel($model) {
        $this->model = $model;
    }

    // Method untuk mendapatkan model celana
    public function getModel() {
        return $this->model;
    }
}

// Kelas Baju yang mewarisi ItemProduk
class Baju extends ItemProduk {
    // Property yang dimiliki oleh kelas Baju
    public $tipe;

    // Method untuk mengatur tipe baju
    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    // Method untuk mendapatkan tipe baju
    public function getTipe() {
        return $this->tipe;
    }
}

// Contoh penggunaan
$topi = new Topi();
$topi->setNama("Topi Fedora");
$topi->setWarna("Hitam");
$topi->setUkuran("M");
$topi->setModel("Fedora");

$celana = new Celana();
$celana->setNama("Celana Jeans");
$celana->setWarna("Biru");
$celana->setUkuran("L");
$celana->setTipe("Jeans");
$celana->setModel("Slim Fit");

$baju = new Baju();
$baju->setNama("Baju Kaos");
$baju->setWarna("Putih");
$baju->setUkuran("XL");
$baju->setTipe("Kaos");

// Menampilkan informasi produk
echo "Topi: " . $topi->getNama() . ", Warna: " . $topi->getWarna() . ", Ukuran: " . $topi->getUkuran() . ", Model: " . $topi->getModel() . "\n";
echo "Celana: " . $celana->getNama() . ", Warna: " . $celana->getWarna() . ", Ukuran: " . $celana->getUkuran() . ", Tipe: " . $celana->getTipe() . ", Model: " . $celana->getModel() . "\n";
echo "Baju: " . $baju->getNama() . ", Warna: " . $baju->getWarna() . ", Ukuran: " . $baju->getUkuran() . ", Tipe: " . $baju->getTipe() . "\n";
?>
