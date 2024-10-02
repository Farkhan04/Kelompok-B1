<?php
abstract class Person {
    abstract public function greet();
}
class English extends Person {
    public function greet() {
        echo "Good Morning!<br>";
    }
}
class German extends Person {
    public function greet() {
        echo "Guten Morgen!<br>";
    }
}
class French extends Person {
    public function greet() {
        echo "Bonjour!<br>";
    }
}
$people = [
    new English(),
    new German(),
    new French()
];

// Menggunakan method greet() yang berbeda-beda tergantung objeknya
foreach ($people as $person) {
    $person->greet();
}
?>
