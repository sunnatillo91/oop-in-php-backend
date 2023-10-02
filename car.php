<?php

// Inheritance
// extends
// parent - child
// overriding  - method can be rewritten 
// final - class shouldn't be reused in odrder to create new class or method that shouldn't be rewiritten

class Car
{
    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function drive()
    {
        return "Driving {$this->model} in color:{$this->color}";
    }
}

// new class from Car class
final class ElectricCar extends Car{

    public $battery;
    public $speed;

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

class GibridCar extends ElectricCar{
    public static $number_of_wheels=4;//static property of the class
}

$byd = new GibridCar('BYD', 'BK');

var_dump($byd);
// Fatal error: Class GibridCar may not inherit from final class (ElectricCar) in C:\OpenServer\domains\oop-in-php\index.php on line 48

// We'll create new object from new class
$tesla = new ElectricCar('Red','TeslaX');
$tesla->battery = '6000mA';

var_dump($tesla->drive());
// var_dump($tesla);
