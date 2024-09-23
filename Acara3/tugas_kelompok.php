<?php
// Fungsi yang bernama faktorial For dengan parameter $f
function faktorialke1($f)
{
    $hasil = 1;

    // Menghitung faktorial menggunakan perulangan For
    for ($i = 1; $i <= $f; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

// Fungsi yang bernama faktorial for dengan parameter $w
function faktorialke2($w)
{
    $hasil = 1;
    // Menggunakan perulangan for untuk menghitung faktorial
    for ($i = 1; $i <= $w; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

// Bilangan yang ingin dihitung faktorialnya
$bilangan1 = 5;
$bilangan2 = 4;

// Menggunakan faktorialke1 atau faktorialke2
$faktorial1 = faktorialke1($bilangan1);
$faktorial2 = faktorialke2($bilangan2);

// Fungsi untuk mengecek apakah bilangan genap atau ganjil
function cekGenapGanjil($hasilFaktorial, $bilangan)
{
    if ($bilangan % 2 == 0) {
        echo "$bilangan adalah Bilangan Genap yang memiliki faktorial: $hasilFaktorial <br>";
    } else {
        echo "$bilangan adalah Bilangan Ganjil yang memiliki faktorial: $hasilFaktorial <br>";
    }
}

// Menampilkan hasil faktorial dan pengecekan genap/ganjil
cekGenapGanjil($faktorial1, $bilangan1);
cekGenapGanjil($faktorial2, $bilangan2);
