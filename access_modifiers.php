<?php

// Access Modifiers
// public - (property, attribute, methods) in all places may use
// private - (property, attribute, methods)  in main class possible to use
// protected  - (property, attribute, methods)in parent and child classes possible to use

class Car
{
    public $color;
    protected $model;
    private $distance;
    protected $year;

    protected function setYear($year){
        $this->year = $year;
    }

    private function _setDistance($distance){
        $this->distance = $distance *100 ; // convert km into miles
    }
    
    public function __construct($color, $model, $distance)
    {
        $this->color = $color;
        $this->model = $model;
        $this->_setDistance($distance); //private method call
    }

    public function getModel(){
        return $this->model;
    }

    public function getDistance(){
        return $this->distance;
    }

    protected function reverse(){
        echo "Reversing the car";
    }

    private function sell(){
        echo "Selling the car";
    }
}

$spark = new ElectricCar('BK', 'Best', 100);
$tesla = new Car('White', 'TeslaX Star', 200);

// echo $spark->getReverse();
$spark->year = 3000;
echo $spark->getYear();

// echo $spark->model;
// echo $spark->getModel();
// echo $spark->getDistance();
var_dump($spark);

// new class from Car class
final class ElectricCar extends Car{
    public function start()
    {
        return "Starting";
    }
    public $battery;
    public $speed;
    public $year;

    public function getYear(){
        return $this->year;
    }
    public function getReverse(){
        return parent::reverse() . "<br> Reversing with electricity.";
    }

    public function charge(){
        echo 'Charging';
    }

    public function price(){
        return 10.56789 * rand(234); // random number between two numbers
    }

    public function drive()
    {
        return $this->charge();
    }
}
