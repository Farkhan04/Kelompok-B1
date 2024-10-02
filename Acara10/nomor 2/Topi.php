<?php
require_once 'ItemProduk.php';
class Topi extends ItemProduk {
    
    private $model;

    // Constructor untuk inisialisasi properti
    public function __construct($nama, $ukuran, $warna, $model) {
        $this->setNama($nama);
        $this->setUkuran($ukuran);
        $this->setWarna($warna);
        $this->model = $model;
    }

    // Method untuk mendapatkan model topi
    public function getModel() {
        return $this->model;
    }

    // Method untuk menampilkan informasi topi
    public function infoProduk() {
        return "Nama Topi: " . $this->getNama() . 
               ", Ukuran: " . $this->getUkuran() . 
               ", Warna: " . $this->getWarna() . 
               ", Model: " . $this->getModel();
    }
}
?>