<?php

// Interface 
// interface da kritilgan funksiyalar implements orqali class yaratilganda 
// classda f-ya tanasi bilan bo'lishi shart 

interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
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

$domestic_animal = new Dog('Olapar');
var_dump($domestic_animal);