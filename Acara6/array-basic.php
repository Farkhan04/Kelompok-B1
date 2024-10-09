<?php
$punakawan = array("Semar","Gareng","Petruk","Bagong");
echo $punakawan[0]; //Hasilnya Semar
echo "<br>";
echo $punakawan[3] . "<br>"; // Hasilnya Bagong
$punakawan[1]="Semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong" . "<br>";
echo $punakawan[3]; // Hasilnya Petruk
?>