<?php
class Car{
    private $model;

    public function setModel($model){
        $this-> model = $model;
    }
    public function hello(){
        return "beep! I am a <i>".$this->model."</i><br />";
    }
}

class SportsCar extends Car{
}

$sporstCar1 = new SportsCar();
$sporstCar1 -> setModel('Mercedes Benz');

echo $sporstCar1 -> hello();
?>