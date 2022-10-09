<?php
require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

require_once 'Car.php';
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$car = new Car('green', 4, 'gasoil');
echo $car->forward();
var_dump($car);

require_once 'Truck.php';
var_dump(Truck::ALLOWED_LOADING_LEVELS);
$truck = new Truck('white', 3, 'fuel', 40);
var_dump($truck);
echo $truck->forward();
var_dump($truck);
echo $truck->brake();
var_dump($truck);
echo '<br> '.$truck->getLoadingLevel().' <br />';
$truck->setLoadingLevel('cacahuètes');
echo '<br> '.$truck->getLoadingLevel().' <br />';
$truck->setLoadingLevel('full');
echo '<br> '.$truck->getLoadingLevel().' <br />';
