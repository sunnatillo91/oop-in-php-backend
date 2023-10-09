<?php

// Abstract
// abstract - the key word to create abstract class or method
// from abstract class we can't create an object

abstract class Car
{
    // property, attribute

    public $model;
    public $year;

    public function __construct($model, $year)
    {
        $this->model = $model;
        $this->year = $year;
    }
    //methods
    public function drive()
    {
        return 'driving';
    }

    abstract public function start();

    public function getFuel()
    {
        return 'fueling';
    }

    public function setModel($model)
    {
        $this->model = $model;
    }
}

class ElectricCar extends Car {
    public $battery;

    public function start()
    {
        return "Starting";
    }

    public function charge(){
        return "charging";
    }
}

final class RaceCar extends Car {   // bu classdan meros olib bo'lmaydi final so'zi borligi uchun
    public function start()
    {
        return "Starting";
    }
}

class PublicCar extends Car {
    public function start()
    {
        return "Starting";
    }
}

$tesla = new ElectricCar('tesla', '2023');
$tesla->battery = '45000 mA';
$tesla->charge();

var_dump($tesla->charge()); 

 



$audi = new Car('Audi', '2020');
 
// $audi->setModel('Audi-prime');
echo $audi->model;

// $bmw = new Car();
// $merc = new Car();

// $audi->model = 'Audi';
// $audi->year = '2022';

// echo $audi->drive() . ' ';
// echo $audi->model . ' ' . $audi->year;
// // var_dump($bmw);

// var_dump($audi->drive());
