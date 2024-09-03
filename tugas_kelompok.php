<?php
// fungsi yang bernama faktorialFor dengan parameter $f
function faktorialFor($f) {
    $hasil = 1;
    
    // menghitung faktorial menggunakan perulangan For
    for ($i = 1; $i <= $f; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

// fungsi yang bernama faktorialWhile dengan parameter $w
function faktorialWhile($w) {
    $hasil = 1;
    $i = 1;
    
    // menggunakan perulangan while untuk menghitung faktorial
    while ($i <= $w) {
        $hasil *= $i;
        $i++;
    } 
    return $hasil;
}

// bilangan yang ingin dihitung faktorialnya
$bilangan1 = 5;
$bilangan2 = 4;

// memanggil fungsi faktorialFor dan mengisi parameter dengan angka yang ingin difaktorialkan
$faktorial1 = faktorialFor($bilangan1);

// memanggil fungsi faktorialWhile dan mengisi parameter dengan angka yang ingin difaktorialkan
$faktorial2 = faktorialWhile($bilangan2);

// menampilkan hasil
echo "Faktorial dari $bilangan1 adalah: " . $faktorial1 . "<br>";
echo "Faktorial dari $bilangan2 adalah: " . $faktorial2;
?>
