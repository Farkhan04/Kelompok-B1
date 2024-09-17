<?php
// fungsi yang bernama faktorial For dengan parameter $f
function faktorialke1($f)
{
    $hasil = 1;

    // menghitung faktorial menggunakan perulangan For
    for ($i = 1; $i <= $f; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

// fungsi yang bernama faktorial for dengan parameter $w
function faktorialke2($w)
{
    $hasil = 1;
    // menggunakan perulangan for untuk menghitung faktorial
    for ($i = 1; $i <= $w; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

// bilangan yang ingin dihitung faktorialnya
$bilangan1 = 5;
$bilangan2 = 4;

// menggunakan if-else untuk menentukan apakah menggunakan faktorialke1 atau faktorialke2
if ($bilangan1 >= 5) {
    $faktorial1 = faktorialke1($bilangan1);
} else {
    $faktorial1 = faktorialke2($bilangan1);
}

if ($bilangan2 >= 5) {
    $faktorial2 = faktorialke1($bilangan2);
} else {
    $faktorial2 = faktorialke2($bilangan2);
}


// // menggunakan satu if-else untuk menentukan apakah menggunakan faktorialke1 atau faktorialke2
// if ($bilangan1 >= 5 || $bilangan2 >= 5) {
//     $faktorial1 = faktorialke1($bilangan1);
//     $faktorial2 = faktorialke1($bilangan2);
// } else {
//     $faktorial1 = faktorialke2($bilangan1);
//     $faktorial2 = faktorialke2($bilangan2);
// }

// menampilkan hasil
echo "Faktorial dari $bilangan1 adalah: " . $faktorial1 . "\n" . "<br>";
echo "Faktorial dari $bilangan2 adalah: " . $faktorial2;
