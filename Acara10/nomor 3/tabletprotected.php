<?php
class Tablet {
    protected $merk;
    protected $camera;
    protected $memory;

    protected function infoTablet() {
        return "Tablet Merk: $this->merk, Kamera: $this->camera MP, Memory: $this->memory GB";
    }
}
class Handphone extends Tablet {
    public $handphone_baru;
    public function beliHandphone($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
        return "Membeli Handphone baru dengan Merk: $this->merk. " . $this->infoTablet();
    }
}
$handphone1 = new Handphone();
echo $handphone1->beliHandphone("iPhone", 12, 128);
?>
