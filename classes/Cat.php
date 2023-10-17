<?php

// Namespace
namespace classes;

class Cat
{
    public static $name;
    public static $weight = '25kg';

    const BREED = 'Old cat';

    public function run()
    {
        echo " running";
    }

    public static function bark()
    {
        return self::BREED;
    }
}
