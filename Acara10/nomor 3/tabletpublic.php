<?php

class Tablet {
    public $merk;
    public $camera;
    public $memory;

    public function infoTablet() {
        return "Tablet Merk: $this->merk, Kamera: $this->camera MP, Memory: $this->memory GB";
    }
}

class Handphone extends Tablet {
    public $handphone_baru;

    public function beliHandphone() {
        return "Membeli Handphone baru dengan Merk: $this->merk";
    }
}

$handphone1 = new Handphone();
$handphone1->merk = "Samsung";
$handphone1->camera = 12;
$handphone1->memory = 64;
$handphone1->handphone_baru = true;
echo $handphone1->infoTablet() . "<br>";
echo $handphone1->beliHandphone();
?>
