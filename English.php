<?php
require_once 'Person.php';
require_once 'Language.php';

// Class English yang meng-extend abstract class Person dan mengimplementasikan interface Language
class English extends Person implements Language {
    public function greet() {
        return "Hello!";
    }

    public function speak() {
        return "Speaking English.";
    }
}
?>
