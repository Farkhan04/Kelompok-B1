<?php

class Calculator {
   
    public function penjumlahan($a, $b) {
        return $a + $b;
    }

    public function pengurangan($a, $b) {
        return $a - $b;
    }

    public function perkalian($a, $b) {
        return $a * $b;
    }

    public function pembagian($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "error";
        }
    }
}

$calc = new Calculator();


$bil1 = 10;
$bil2 = 5;

echo "Bilangan 1: " . $bil1 . "<br>";
echo "Bilangan 2: " . $bil2 . "<br><br>";

echo "Penjumlahan: " . $calc->penjumlahan($bil1, $bil2) . "<br>";
echo "Pengurangan: " . $calc->pengurangan($bil1, $bil2) . "<br>";
echo "Perkalian: " . $calc->perkalian($bil1, $bil2) . "<br>";
echo "Pembagian: " . $calc->pembagian($bil1, $bil2) . "<br>";
?>