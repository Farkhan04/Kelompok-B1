<?php
interface Tanah{
    public function hitungLuas();
}
abstract class Bibit{
    abstract public function ditanami();
}

class Lingkaran extends Bibit implements Tanah{
    private $jariJari;
    private $pi=3.14;

    public function __construct($jariJari){
        $this->jariJari=$jariJari;

    }
    public function hitungLuas(){
        return $this->jariJari *  $this->pi;
    }
    public function ditanami(){
        return"ditanami kopi";
    }

}
class PersegiPanjang extends Bibit implements Tanah{
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar){
        $this->panjang= $panjang;
        $this->lebar = $lebar;
    }
    public function hitungLuas(){
        return $this->panjang *  $this->lebar;
    }
    public function ditanami(){
        return "ditanami padi";
    }
}
$tanahAgus = new Lingkaran(3);
$tanahCandra = new PersegiPanjang(3,4);

echo "Tanah Agus seluas " . $tanahAgus->hitungLuas() . " m2 \n";
echo $tanahAgus->ditanami() . "\n \n";

echo "Tanah Candra seluas  ". $tanahCandra->hitungLuas() . " m2 \n";
echo $tanahCandra->ditanami() . "\n \n";
?>