<?php
/**
 * GIT Playground Project
 */
require "lib/Car.php";

$car = new Car();
$car->drive(30); // 50 is to fast :)
echo "Car has driven " . $car->getKm() . " km";
