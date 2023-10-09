<?php

// Static methods and properties
// static

class Dog
{
    public $name;
    public static $weight;

    public function bark()
    {
        echo 'Woof!';
    }

    public static function eat(){
        return " eating";
    }
}

$buldoc = new Dog();
