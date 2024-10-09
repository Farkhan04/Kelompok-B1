<?php
// Membuat abstract class Person
abstract class Person {
    // Abstract function greet
    abstract public function greet();
}

// Kelas English mengimplementasikan greet()
class English extends Person {
    public function greet() {
        return "Hello!";
    }
}

// Kelas German mengimplementasikan greet()
class German extends Person {
    public function greet() {
        return "Hallo!";
    }
}

// Kelas French mengimplementasikan greet()
class French extends Person {
    public function greet() {
        return "Bonjour!";
    }
}

// Membuat array dari objek yang berbeda untuk mengimplementasikan polymorphism
$people = [
    new English(),
    new German(),
    new French()
];

// Loop melalui setiap objek dan memanggil metode greet
foreach ($people as $person) {
    echo $person->greet() . "<br>";
}
?>
