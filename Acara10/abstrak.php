
<?php
abstract class Mobil{
    protected $tankVolume;
    public function setTankVolume($volume){
        $this->tankVolume = $volume;
    }
    abstract public function calcNumMilesOnFullTank();
}
?> 