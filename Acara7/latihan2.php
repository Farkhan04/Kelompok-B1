<?php
class person {
var $name;

function __construct($persons_name) { //construct dipanggil secara otomatis ketika objek dari kelas person dibuat
    echo "initialize class<br>";
    $this->name = $persons_name; //mengatur nama saat objek diinisialisasi
}

function set_name($new_name) {
    $this->name = $new_name;
}

function get_name() {
    return $this->name;
}

function __destruct(){ //methode khusu yang dipanggil secara otomatis ketika skrip php berkahir
    echo "<br>end class";
}
}

$stefan = new person("Stefan Mischook");

echo "Stefan's full name: " . $stefan->get_name();

?>