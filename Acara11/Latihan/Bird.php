<?php
interface Bird{
    public function makeSound();
}
class Perkutut implements Bird {
    public function makeSound(){
        echo "Kur Kur";
    }
}
$burung = new Perkutut();
$burung->makeSound();
?>
