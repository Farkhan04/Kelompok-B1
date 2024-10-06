<?php
require_once 'Person.php';
require_once 'Language.php';

// Class German yang meng-extend abstract class Person dan mengimplementasikan interface Language
class German extends Person implements Language {
    public function greet() {
        return "Hallo!";
    }

    public function speak() {
        return "Speaking German.";
    }
}
?>
