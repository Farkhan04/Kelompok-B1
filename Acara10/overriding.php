<?php
class Car{
    public function hello(){
        return "beep";
    }
}

class SportsCar extends Car{
    public function hello(){
       return "Hallo";
    }
} 

$sporstCar1 = new SportsCar();
echo $sporstCar1 -> hello();
?>