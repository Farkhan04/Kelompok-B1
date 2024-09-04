<?php
// Matriks A 3x3
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B 3x3
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Matriks untuk menyimpan hasil penjumlahan
$C = [];

// Looping bersarang untuk menjumlahkan elemen-elemen dari matriks A dan B
for ($i = 0; $i < 3; $i++) { //berfungsi untuk mengakses setiap baris dari matriks.
    for ($j = 0; $j < 3; $j++) { //berfungsi untuk mengakses setiap kolom di dalam baris yang sedang diproses.
        // Menjumlahkan elemen yang bersesuaian dari matriks A dan B
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan hasil penjumlahan matriks
echo "Hasil penjumlahan matriks A dan B adalah:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $C[$i][$j] . " ";
    }
    echo "<br>";
}
?>
