<?php

namespace classes;

class Vegitable
{
    public $name;

    public function __toString()
    {
        return $this->name;
    }

    public function __clone()
    {
        echo "Cloning vegetables...";
    }
}
