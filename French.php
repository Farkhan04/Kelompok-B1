<?php
require_once 'Person.php';
require_once 'Language.php';

// Class French yang meng-extend abstract class Person dan mengimplementasikan interface Language
class French extends Person implements Language {
    public function greet() {
        return "Bonjour!";
    }

    public function speak() {
        return "Speaking French.";
    }
}
?>
