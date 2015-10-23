<?php
/**
 * GIT Playground Project
 */
require "lib/Car.php";

$car = new Car();
$car->drive(50);
echo "Car has driven " . $car->getKm() . " km";