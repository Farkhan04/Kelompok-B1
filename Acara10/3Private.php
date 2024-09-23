<?php
// Kelas Tablet dengan properti private
class Tablet {
    private $merk;
    private $camera;
    private $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    private function infoTablet() {
        echo "Tablet Merk: {$this->merk}, Camera: {$this->camera}MP, Memory: {$this->memory}GB\n";
    }

    public function tampilInfoTablet() {
        $this->infoTablet(); // Hanya bisa diakses di dalam kelas sendiri
    }
}

// Kelas Handphone mewarisi dari Tablet
class Handphone extends Tablet {
    private $handphone_baru;

    public function __construct($merk, $camera, $memory, $handphone_baru) {
        parent::__construct($merk, $camera, $memory);
        $this->handphone_baru = $handphone_baru;
    }

    public function beliHandphone() {
        // $this->infoTablet(); // ERROR: Tidak bisa diakses karena private
        echo "Membeli handphone baru: {$this->handphone_baru}\n";
    }
}

// Implementasi
$hp = new Handphone('Xiaomi', 48, 256, 'Xiaomi Mi 11');
$hp->tampilInfoTablet();
$hp->beliHandphone();
?>
