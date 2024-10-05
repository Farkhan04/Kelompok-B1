<?php
// Definisikan interface Bird
interface Bird {
    // Method abstract yang harus diimplementasikan oleh kelas yang mengimplementasi interface ini
    public function makeSound();
}

// Definisikan class Perkutut yang mengimplementasikan interface Bird
class Perkutut implements Bird {
    // Implementasi method makeSound untuk menghasilkan suara khas burung Perkutut
    public function makeSound(){
        // Menampilkan suara Perkutut
        echo "Kur Kur";
    }
}

// Membuat objek dari class Perkutut
$burung = new Perkutut();

// Memanggil method makeSound() dari objek $burung, menampilkan "Kur Kur"
$burung->makeSound();
?>
