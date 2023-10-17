<?php

namespace classes;

class Fruit
{
    public $type;
    public $price;

    public function __construct($type, $price)
    {
        $this->type = $type;
        $this->price = $price;
    }

    public function view()
    {
        return 'This is a ' . $this->type . ' and costs ' . number_format($this->price, 2);
    }

    public function create()
    {
        return "I am growing " . $this->type . " and I like it";
    }
}

class Apple extends Fruit
{
    public $color;
    public $name;

    public function setName($name)
    {
        return $this->name = $name;
    }
}

class Banana extends Fruit
{
    public $name;
    public function update()
    {
        echo "<br>Banana updated!";
    }

    public function getName($name)
    {
        return $this->name = $name;
    }
}

$product = new Apple('dried fruit', 20000);
$product->name = 'apple';
$product->color = 'brown';
$product->setName('five star apple');


$product2 = new Banana('fresh fruit', 25000);
// var_dump($product);
var_dump($product2->create()) . var_dump($product2->getName('banana')). var_dump($product->view()) ;
// var_dump($product->setName('five star apple'));
