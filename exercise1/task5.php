<?php
$bmw["model"] = "X5";
$bmw["doors"] = 5;
$bmw["speed"] = 120;
$bmw["year"] = "2015";

$opel["model"] = "vectra";
$opel["doors"] = 4;
$opel["speed"] = 110;
$opel["year"] = "2013";

$toyota["model"] = "camry";
$toyota["doors"] = 4;
$toyota["speed"] = 140;
$toyota["year"] = "2020";

$cars = array("opel" => $opel,
    "bmw" => $bmw, "toyota" => $toyota);
$names = ["opel", "toyota", "bmw"];
var_dump($cars[$names[2]]);
foreach ($names as $car) {
    echo 'CAR '. $car. "\n";
    echo $car." ". $cars[$car]['model'] . " " .$cars[$car]['speed']. " " . $cars[$car]['doors']. " ". $cars[$car]['year']. "\n";
}