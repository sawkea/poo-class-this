<?php

class Computer
{
    public $brand;
    public $size;

    function setBrand($brand){
        $this->brand = $brand;
    }

    function setSize($size){
        $this->size = $size;
    }
}

$computer17 = new Computer();
$computer17->setBrand('Asus');
$computer17->setSize('17');

$computer15 = new Computer();
$computer15->setBrand('Dell');
$computer15->setSize('15');

$computer14 = new Computer();
$computer14->setBrand('Lenovo');
$computer14->setSize('14');

echo "Ordinateur :".$computer17->brand." à un processeur ".$computer17->size. "<br>";
echo "Ordinateur :".$computer15->brand." à un processeur ".$computer15->size. "<br>";
echo "Ordinateur :".$computer14->brand." à un processeur ".$computer14->size. "<br>";