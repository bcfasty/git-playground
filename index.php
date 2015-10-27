<?php
/**
 * GIT Playground Project
 */
require "lib/Car.php";

$car = new Car();
$car->drive(20); // 50 is to fast :) 30 is alsoy too fast
echo "Car has driven " . $car->getKm() . " km.";
