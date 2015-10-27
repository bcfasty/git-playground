<?php
class Car
{
    private $km = 0;
	private $speed = 0;
	private $maxSpeed = 100;
    
    public function drive($km) 
    {
        $this->km += $km;
    }
    
    public function getKm()
    {
        return $this->km;
    }

}