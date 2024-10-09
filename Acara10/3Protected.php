<?php
// Kelas Tablet dengan properti protected
class Tablet {
    protected $merk;
    protected $camera;
    protected $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    protected function infoTablet() {
        echo "Tablet Merk: {$this->merk}, Camera: {$this->camera}MP, Memory: {$this->memory}GB\n";
    }
}

// Kelas Handphone mewarisi dari Tablet
class Handphone extends Tablet {
    protected $handphone_baru;

    public function __construct($merk, $camera, $memory, $handphone_baru) {
        parent::__construct($merk, $camera, $memory);
        $this->handphone_baru = $handphone_baru;
    }

    public function beliHandphone() {
        $this->infoTablet(); // Dapat mengakses infoTablet karena protected
        echo "Membeli handphone baru: {$this->handphone_baru}\n";
    }
}

// Implementasi
$hp = new Handphone('iPhone', 12, 128, 'iPhone 13 Pro');
$hp->beliHandphone();
?>
