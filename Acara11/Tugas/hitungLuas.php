<?php

interface hitungLuas {
    public function hitungLuasPersegi($sisi);
    public function hitungLuasSegitiga($alas, $tinggi);
    public function hitungLuasLingkaran($radius);
}

class LuasPersegi implements hitungLuas {
    public function hitungLuasPersegi($sisi) {
        return $sisi * $sisi;
    }

    public function hitungLuasSegitiga($alas, $tinggi) {
       
    }

    public function hitungLuasLingkaran($radius) {
       
    }
}

class LuasSegitiga implements hitungLuas {
    public function hitungLuasPersegi($sisi) {
       
    }

    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    public function hitungLuasLingkaran($radius) {
        
    }
}

class LuasLingkaran implements hitungLuas {
    public function hitungLuasPersegi($sisi) {
      
    }

    public function hitungLuasSegitiga($alas, $tinggi) {
        
    }

    public function hitungLuasLingkaran($radius) {
        return 3.14 * $radius * $radius; // Menggunakan nilai pi 3.14
    }
}

$persegi = new LuasPersegi();
echo "Luas Persegi dengan sisi 4: " 
. $persegi->hitungLuasPersegi(4) . "<br>";

$segitiga = new LuasSegitiga();
echo "Luas Segitiga dengan alas 6 dan tinggi 8: " 
. $segitiga->hitungLuasSegitiga(6, 8) . "<br>";

$lingkaran = new LuasLingkaran();
echo "Luas Lingkaran dengan radius 7: " 
. $lingkaran->hitungLuasLingkaran(7) . "<br>";

?>
