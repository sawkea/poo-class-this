# Programmation Orientée Objet

POO : Programmation Orientée Objet

OOP : Object Oriented Programming

POO est un pattern (un style) pour créer un groupe de code basé sur les éléments de la vie réelle, chats, utilisateurs, voitures....
Le principal objectif de la POO est de créer un code réutilisable.

## Code de programmation procédurale

	<?php
	/* code en procedural */

	$computer17 = "Asus";
	$computer15 = "Dell";
	$computer14 = "Lenovo";

	$computer17Processor = "I3";
	$computer15Processor = "I5";
	$computer14Processor = "I7";

	echo "Ordinateur :".$computer17." à un processeur ".$computer17Processor. "<br>";
	echo "Ordinateur :".$computer15." à un processeur ".$computer15Processor. "<br>";
	echo "Ordinateur :".$computer14." à un processeur ".$computer14Processor. "<br>";
	?>

## Code de programmation poo

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
	?>

## Procédural vs Poo

En Procédural on va réfléchir à la façon d'écrire le code de haut en bas en définissant la variable et en l'imprimant.
* définir des variables
* définir des fonctions
* définir la logique
* définir le flux séquentiel


En Poo on va réfléchir à la manière de définir des composants réutilisable et de les utiliser. *Une approche en profondeur.*
* penser composant
* définir mon composant
* quelles variables et fonctions seront utilisées dans le composant
* comment réutiliser le composant

> Pensez Objet de la vie réelle !

## Qu'est-ce qu'une classe ?

Une classe est un regroupement logique de code avec des variables et des fonctions spécifiques à cet objet.

Ce plan permet d'organiser votre code en composants individuels.

Pensons réel, le plan d'un ordinateur regroupe toutes les pièces (spécification de l'objet - non réel) qui assemblées forment l'ordinateur (objet réel).

### Déclarer une classe en php

	<?php

		/**
 		* StudlyCaps (majuscule)
 		* Le nom du fichier doit porter le même nom que la classe
 		*/

 
		// déclarer une classe
		class Computer 
		{
	};

### Déclarer une propriété (variable) dans une classe

// déclarer une classe

	<?php
	class computer
	{

    		/**
     		* camelCase pour le nom des propriétés (lier des mots sans espaces ni ponctuations avec une majuscule à chaque mot)
     		*/
    		// déclarer une propriété (variable) dans une classe
    		public $brand;
    		public $sizeScreen;
	}

### Déclarer une méthode (fonction) dans une classe

	<?php
	class Computer 
	{

    		/**
     		* camelCase pour le nom des propriétés (lier des mots sans espaces ni ponctuations avec une majuscule à chaque mot)
     		*/
    		// déclarer une propriété (variable) dans une classe
    		public $brand;
    		public $sizeScreen;

    		/**
     		* Il est obligatoire d'uliser le camelCase pour le nom des méthodes
     		*/
    		// déclarer une méthode (fonction)
    			public function sayHelloComputer()
    			{
        			echo 'Mon ordinateur te dit bonjour';

    			}
	}

## Création d'un objet 

	<?php

	require_once "computer.php";

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

 * Résultat à l'écran :

Mon ordinateur te dit bonjour

Mon ordinateur te dit bonjour

C:\wamp\www\test\index.php:20:
object(Computer)[1]
  public 'brand' => string 'Lenovo' (length=6)
  public 'sizeScreen' => string '17' (length=2)
C:\wamp\www\test\index.php:21:
object(Computer)[2]
  public 'brand' => string 'Dell' (length=4)
  public 'sizeScreen' => string '13' (length=2)

## Mot-clé $this

 * dans index.php
	<?php
	require_once "class/Car.php";	

	// Car
	$myNewCar = new Car();

	$myNewCar->name = 'Peugeot';
	$myNewCar->model = '2008';

	$myNewCar->print();

 * dans class/Car.php
	<?php

	class Car
	{
    		public $name;
    		public $model;

    		public function getName()
    		{
        		return $this->name;
    		}
    		public function getModel()
    		{
        		return $this->model;
    		}

    		public function print()
    		{
        		// affiche dans cette classe la propriété name
        		echo "Ma voiture est une : " . $this->getName() . " ". $this->getModel();
    		}
	};

 * Dans le navigateur sera affiché : 

Ma voiture est une : Peugeot 2008
