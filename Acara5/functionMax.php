<?php
function maksimal ($bilangan1, $bilangan2)
{
    $hasil = max($bilangan1, $bilangan2);
    return $hasil;
    
}
$hasil = maksimal(100, 150);
echo "nilai terbesar ". $hasil;