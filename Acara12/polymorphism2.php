<?php
// Abstract class Shape
abstract class Shape {
    // Abstract method untuk menghitung luas
    abstract public function getArea();
}

// Interface Drawable
interface Drawable {
    // Method untuk menggambar objek
    public function draw();
}

// Class Circle yang meng-extend Shape dan mengimplementasi Drawable
class Circle extends Shape implements Drawable {
    private $radius;

    // Constructor untuk Circle
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Mengimplementasikan method getArea() dari Shape
    public function getArea() {
        return 3.14 * $this->radius * $this->radius;
    }

    // Mengimplementasikan method draw() dari interface Drawable
    public function draw() {
        return "Drawing a Circle";
    }
}

// Class Square yang meng-extend Shape dan mengimplementasi Drawable
class Square extends Shape implements Drawable {
    private $side;

    // Constructor untuk Square
    public function __construct($side) {
        $this->side = $side;
    }

    // Mengimplementasikan method getArea() dari Shape
    public function getArea() {
        return $this->side * $this->side;
    }

    // Mengimplementasikan method draw() dari interface Drawable
    public function draw() {
        return "Drawing a Square";
    }
}

// Class Triangle yang meng-extend Shape dan mengimplementasi Drawable
class Triangle extends Shape implements Drawable {
    private $base;
    private $height;

    // Constructor untuk Triangle
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    // Mengimplementasikan method getArea() dari Shape
    public function getArea() {
        return 0.5 * $this->base * $this->height;
    }

    // Mengimplementasikan method draw() dari interface Drawable
    public function draw() {
        return "Drawing a Triangle";
    }
}

// Membuat objek dari masing-masing class
$circle = new Circle(5);  // Circle dengan radius 5
$square = new Square(4);  // Square dengan sisi 4
$triangle = new Triangle(3, 6);  // Triangle dengan alas 3 dan tinggi 6

// Array dari objek yang berbeda untuk mengimplementasikan polymorphism
$shapes = [$circle, $square, $triangle];

// Loop melalui setiap objek dan memanggil method draw dan getArea
foreach ($shapes as $shape) {
    echo $shape->draw() . "<br>";
    echo "Area: " . $shape->getArea() . "<br><br>";
}
?>
