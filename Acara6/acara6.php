<?php
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

$C = [];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

echo "Hasil penjumlahan matriks A dan B adalah:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $C[$i][$j] . " ";
    }
    echo "<br>";
}
?>
