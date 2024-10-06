<?php
require_once 'English.php'; // Memasukkan class English
require_once 'German.php';  // Memasukkan class German
require_once 'French.php';  // Memasukkan class French

// Fungsi untuk menampilkan greeting dari class yang extend abstract class Person
function greetPerson(Person $person) {
    echo $person->greet() . PHP_EOL;
}

// Fungsi untuk menampilkan bahasa yang digunakan dari class yang mengimplementasikan interface Language
function speakLanguage(Language $language) {
    echo $language->speak() . PHP_EOL;
}

// Membuat object dari masing-masing class
$englishPerson = new English();
$germanPerson = new German();
$frenchPerson = new French();

// Menampilkan greeting dan bahasa yang digunakan
greetPerson($englishPerson);  // Output: Hello!
speakLanguage($englishPerson); // Output: Speaking English.

greetPerson($germanPerson);  // Output: Hallo!
speakLanguage($germanPerson); // Output: Speaking German.

greetPerson($frenchPerson);  // Output: Bonjour!
speakLanguage($frenchPerson); // Output: Speaking French.
?>
