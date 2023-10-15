<?php

namespace App\new_car;

// public
// protected - faqatgina parent class va shu clasdan kelib chiqqan child classni ichida public funksiya yordamida ishlatish mumkin
// private - 

class Car
{
    // property, attribute
    public $model;
    protected $year;
    private $km;

    public function __construct($model, $year, $km)
    {
        $this->model = $model;
        $this->year = $year;
        $this->km =$km;
    }
    //methods
    public function drive()
    {
        return 'driving';
    }
}

class ElectricCar extends Car {
    public $km;
    public function getYear()
    {
        return $this->year;
    }
    public function start()
    {
        return "Starting";
    }

    public function getKm()
    {
        return $this->km;
    }
}

$tesla = new ElectricCar('teslaX', 2023, 13330);

echo $tesla->getKm();
// echo $tesla->getYear();