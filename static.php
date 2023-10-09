<?php

// Static methods and properties - bular klasga tegishli obyektga emas
// static metodni ichida $this dan foydalanib bo'lmaydi

class Cat
{
    public $name;
    public static $weight = '25kg';

    public function run()
    {
        echo " running";
    }

    public function bark()
    {
        // $this->run();
        // return self::eat();
        return self::$weight;
        // echo "Meow";
    }

    public static function eat()
    {
        // $this->run();       //static metodni ichida $this dan foydalanib bo'lmaydi

        echo " eating ";
    }
}

class Kitten extends Cat
{
    public function __constract()
    {
        parent::eat();
    }
}

$pet = new Cat();
var_dump($pet->bark());

// Agar static metod bo'lsa classdagi static metodni :: orqali chaqirib foydalanish mumkin

// echo Cat::eat();
// echo Cat::$weight;