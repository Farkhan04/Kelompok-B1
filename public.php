<?php
class menu {
public $nama;
function set_nama($new_nama) {
$this->nama = $new_nama;
}
 function get_nama() {
    return $this->nama;
}
}
?>

<?php
$makanan = new menu();

echo "Jenis Makanan ".$makanan->nama="Bakso";
echo "<hr>";
echo $makanan->get_nama();
?>