<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 7 == 0) {
        echo "Angka pertama yang habis dibagi 7 adalah: $i";
        break; // Menghentikan perulangan ketika menemukan angka pertama yang habis dibagi 7
    }
}
