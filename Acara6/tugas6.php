<?php
echo "<br><br>-TUGAS-<br>";
//deklarasi matrix a, dan b
$A = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

$B = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);

//matrix hasil penjumlahan
$C = array();

//ukuran 3x3
$rows = 3;
$cols = 3;

//looping penjumlahan matrix
for ($i = 0; $i < $rows; $i++) {        //i=baris
    for ($j = 0; $j < $cols; $j++) {    //j=kolom
        $C[$i][$j] = $A [$i][$j] + $B[$i][$j];
    }
}

//hasil penjumlahan
echo "Hasil penjumlahan matriks A dan B: <br />";
for ($i = 0; $i < $rows; $i++) {        
    for ($j = 0; $j < $cols; $j++) {    
       echo $C[$i][$j] . " ";
    }
    echo "<br />";
}
?>