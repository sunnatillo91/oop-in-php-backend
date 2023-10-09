<?php

// Traits

trait AnimalTrait{
    public function eat(){
        echo " eating";        
    }

    public function sleep(){
        echo " Sleeping";
    }
}

trait WalkingTrait
{
    public function walking()
    {
        return "walking";
    }
}

interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    use AnimalTrait, WalkingTrait;
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function view($name){
        return $this->name = 'Olapar';
    }

    public function makeSound()
    {
        return $this->name . " says Woof!";
    }
}

$dog = new Dog('Qorakuz');
// $dog->eat();
echo 'Qorakuz ' . $dog->walking();
// var_dump('Qorakuz' . $dog->eat());

// $domestic_animal = new Dog('Olapar');
// var_dump($domestic_animal);