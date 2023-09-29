<?php

class Production
{
    public $product;
    public $operator;

    public function laboratory()
    {
        return "Laboratory";
    }
}

$wire = new Production();
// $wire->laboratory();

// echo $wire->laboratory();
var_dump($wire->laboratory());
