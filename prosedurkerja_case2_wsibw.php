<?php
// Definisi interface Animal
interface Animal {
    // Method abstract yang harus diimplementasikan oleh setiap kelas yang mengimplementasikan interface ini
    public function makeSound();
}

// Definisi class Cat yang mengimplementasikan interface Animal
class Cat implements Animal {
    // Implementasi method makeSound khusus untuk kucing
    public function makeSound(){
        echo "Meow"; // Suara kucing
    }
}

// Definisi class Dog yang mengimplementasikan interface Animal
class Dog implements Animal {
    // Implementasi method makeSound khusus untuk anjing
    public function makeSound() {
        echo "Bark"; // Suara anjing
    }
}

// Definisi class Mouse yang mengimplementasikan interface Animal
class Mouse implements Animal {
    // Implementasi method makeSound khusus untuk tikus
    public function makeSound(){
        echo "Squeak"; // Suara tikus
    }
}

// Membuat objek dari masing-masing kelas
$cat = new Cat();   // Objek kucing
$dog = new Dog();   // Objek anjing
$mouse = new Mouse(); // Objek tikus

// Memasukkan objek-objek ke dalam array
$animals = array($cat, $dog, $mouse); // Daftar hewan

// Menggunakan loop untuk memberitahu setiap hewan untuk mengeluarkan suara
foreach($animals as $animal) {
    $animal->makeSound(); // Memanggil method makeSound() dari setiap objek
}
?>
