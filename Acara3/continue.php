<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue; // Melewati iterasi jika angka genap
    }
    echo $i . " "; // Mencetak angka ganjil
}
