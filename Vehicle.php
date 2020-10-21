<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Vehicle
{
    public $wheels;
    public $gear;
    
    public function setGear($gear)
    {
        $this->gear = $gear;
    }
    
    public function setWheels($wheels)
    {
        $this->wheels = $wheels;
    }
    
//    public function getGear()
//    {
//        return $this->gear;
//    }
//    
//    public function getWheels()
//    {
//        return $this->wheels;
//    }
//
//    public function moveForward()
//    {
//        return 'it moves forward';
//    }
}

$vehivle = new Vehicle();
$vehivle->setGear(5);
$vehivle->setWheels(4);

echo $vehivle->wheels."<br>";
echo $vehivle->gear;
