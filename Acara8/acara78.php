<?php
// Define the Calculator class
class Calculator {
    // Method for addition
    public function add($a, $b) {
        return $a + $b;
    }

    // Method for subtraction
    public function subtract($a, $b) {
        return $a - $b;
    }

    // Method for multiplication
    public function multiply($a, $b) {
        return $a * $b;
    }

    // Method for division
    public function divide($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Cannot divide by zero!";
        }
    }
}

// Create an instance of the Calculator class
$calc = new Calculator();

// Example usage
$number1 = 10;
$number2 = 5;

echo "Number 1: " . $number1 . "<br>";
echo "Number 2: " . $number2 . "<br><br>";

echo "Addition: " . $calc->add($number1, $number2) . "<br>";
echo "Subtraction: " . $calc->subtract($number1, $number2) . "<br>";
echo "Multiplication: " . $calc->multiply($number1, $number2) . "<br>";
echo "Division: " . $calc->divide($number1, $number2) . "<br>";
?>