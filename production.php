<?php

class Production        //class
{
    public $product;
    public $color;
    public $year;

    public function laboratory()
    {
        return "Laboratory";
    }

    public function __construct($product, $color, $year)
    {
        $this->product = $product;
        $this->color = $color;
        $this->year = $year;
    }

    public function BatteryCable()
    {
        return 'Cobalt positive harness';
    }
}

$wire = new Production('AVSS 2.0', 'BK', 2023);
$enamel_wire = new Production('PET 1.2', '', 2023);



// var_dump($wire);
var_dump($enamel_wire);
// var_dump($wire->laboratory());
// var_dump($wire->BatteryCable());
// var_dump($enamel_wire->BatteryCable());
