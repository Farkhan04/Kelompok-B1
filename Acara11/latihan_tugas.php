<?php
// Membuat interface hitungLuas
interface hitungLuas {
    public function hitungLuasPersegi($sisi);
    public function hitungLuasSegitiga($alas, $tinggi);
    public function hitungLuasLingkaran($jariJari);
}
?>

<?php
class Persegi implements hitungLuas {
    // Implementasi fungsi menghitung luas persegi
    public function hitungLuasPersegi($sisi) {
        return $sisi * $sisi;
    }

    // Method ini tidak digunakan dalam kelas Persegi, tapi harus diimplementasikan karena interface memerlukannya
    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0;
    }

    public function hitungLuasLingkaran($jariJari) {
        return 0;
    }
}
?>

<?php
class Segitiga implements hitungLuas {
    // Implementasi fungsi menghitung luas segitiga
    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    // Method ini tidak digunakan dalam kelas Segitiga, tapi harus diimplementasikan karena interface memerlukannya
    public function hitungLuasPersegi($sisi) {
        return 0;
    }

    public function hitungLuasLingkaran($jariJari) {
        return 0;
    }
}
?>

<?php
class Lingkaran implements hitungLuas {
    // Implementasi fungsi menghitung luas lingkaran
    public function hitungLuasLingkaran($jariJari) {
        return 3.14 * $jariJari * $jariJari;
    }

    // Method ini tidak digunakan dalam kelas Lingkaran, tapi harus diimplementasikan karena interface memerlukannya
    public function hitungLuasPersegi($sisi) {
        return 0;
    }

    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0;
    }
}
?>

<?php
// Membuat objek dari kelas Persegi
$persegi = new Persegi();
echo "Luas Persegi dengan sisi 4: " . $persegi->hitungLuasPersegi(4) . "<br>";

// Membuat objek dari kelas Segitiga
$segitiga = new Segitiga();
echo "Luas Segitiga dengan alas 5 dan tinggi 10: " . $segitiga->hitungLuasSegitiga(5, 10) . "<br>";

// Membuat objek dari kelas Lingkaran
$lingkaran = new Lingkaran();
echo "Luas Lingkaran dengan jari-jari 7: " . $lingkaran->hitungLuasLingkaran(7) . "<br>";
?>
