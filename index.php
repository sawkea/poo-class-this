<?php

require_once "class/Computer.php";
require_once "class/Car.php";

// Créer un objet
// Un objet est aussi appelé une instance de classe
// Instancier la classe Computer
$computerOne = new Computer();
$computerTwo = new Computer();

$computerOne ->brand = 'Lenovo';
$computerTwo ->brand = 'Dell';

$computerOne ->sizeScreen = '17';
$computerTwo ->sizeScreen = '13';

$computerTwo ->sayHelloComputer();
$computerOne ->sayHelloComputer();

var_dump($computerOne);
var_dump($computerTwo);


// Car
$myNewCar = new Car();

$myNewCar->name = 'Peugeot';
$myNewCar->model = '2008';

$myNewCar->print();