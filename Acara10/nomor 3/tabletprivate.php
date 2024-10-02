<?php

class Tablet {
    private $merk;
    private $camera;
    private $memory;
    private function infoTablet() {
        return "Tablet Merk: $this->merk, Kamera: $this->camera MP, Memory: $this->memory GB";
    }
    public function setTablet($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }
    public function getInfoTablet() {
        return $this->infoTablet();
    }
}
class Handphone extends Tablet {
    public $handphone_baru;

    public function beliHandphone($merk, $camera, $memory) {
        $this->setTablet($merk, $camera, $memory);
        return "Membeli Handphone baru. " . $this->getInfoTablet();
    }
}
$handphone1 = new Handphone();
echo $handphone1->beliHandphone("Xiaomi", 48, 256);
?>
