<?php
class ItemProduk {
    protected $ukuran;
    protected $warna;
    protected $nama;

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
?>