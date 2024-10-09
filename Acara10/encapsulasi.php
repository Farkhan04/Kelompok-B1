<?php
//Kelas Indukkk
class Car {
    protected $model;

    public function setModel($model) {
        $this->model = $model;
    }
}

//Warisannn
class SportsCar extends Car {
    public function hello() {
        return "beep! I am a <i>" . $this->model . "</i><br />";
    }
}

// Memperbaiki nama variabel
$sportsCar1 = new SportsCar();
$sportsCar1->setModel('Mercedes Benz');

// Memanggil metode hello dan menampilkan hasil
echo $sportsCar1->hello();
?>
