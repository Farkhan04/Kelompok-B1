<?php
// Kelas Tablet dengan properti public
class Tablet {
    public $merk;
    public $camera;
    public $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function infoTablet() {
        echo "Tablet Merk: {$this->merk}, Camera: {$this->camera}MP, Memory: {$this->memory}GB\n";
    }
}

// Kelas Handphone mewarisi dari Tablet
class Handphone extends Tablet {
    public $handphone_baru;

    public function __construct($merk, $camera, $memory, $handphone_baru) {
        parent::__construct($merk, $camera, $memory);
        $this->handphone_baru = $handphone_baru;
    }

    public function beliHandphone() {
        echo "Membeli handphone baru: {$this->handphone_baru}\n";
    }
}

// Implementasi
$hp = new Handphone('Samsung', 12, 64, 'Samsung Galaxy S21');
$hp->infoTablet();
$hp->beliHandphone();
?>
