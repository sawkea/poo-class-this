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
}