<?php
class Car{
    protected $model;

    public function setModel($model){
        $this-> model = $model;
    }
}

class SportsCar extends Car{
    public function hello(){
        return "beep! I am a <i>".$this->model."</i><br />";
    }
}

$sporstCar1 = new SportsCar();
$sporstCar1 -> setModel('Mercedes Benz');

echo $sporstCar1 -> hello();
?>