<?php
// require 'classes/Car.php';
// require 'classes/Cat.php';
// require 'classes/Category.php';
// require 'classes/Fruit.php';
// require 'new_car/Car.php';
// require 'classes/Dog.php';  

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});