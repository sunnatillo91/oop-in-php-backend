<?php

// Inheritance
// extends - the key word to create inheritance from class 
// parent - child 
// overriding - parent clasda mavjud clasni child clasda boshqa ko'rinishda yozish
// final - bu so'z yordamida klassdan yoki metoddan boshqa meros olib bo'lmasligini belgilash mumkin

namespace classes;

class Car 
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

// var_dump($tesla->charge());





// $audi = new Car('Audi', '2020');
 
// $audi->setModel('Audi-prime');
// echo $audi->model;

// $bmw = new Car();
// $merc = new Car();

// $audi->model = 'Audi';
// $audi->year = '2022';

// echo $audi->drive() . ' ';
// echo $audi->model . ' ' . $audi->year;
// // var_dump($bmw);

// var_dump($audi->drive());
