<?php
class Car
{
    private $km = 0;
    
    public function drive($km) 
    {
        $this->km += $km;
    }
    
    public function getKm()
    {
        return $this->km;
    }


}