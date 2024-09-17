<?php
abstract class Car{
    protected $tankVolume;
    public function setTankVolume($volume){
        $this->TankVolume = $volume;
    }
    abstract public function calcNumMilesOnFullTank();
}
?>