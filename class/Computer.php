<?php

/**
 * StudlyCaps (majuscule)
 * Le nom du fichier doit porter le même nom que la classe
 */


// déclarer une classe
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
        echo 'Mon ordinateur te dit bonjour <br>';

    }
}