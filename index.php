<?php

// Clone - mavjud obyektdan yangi obyekt yaratiladi


require_once 'autoload.php';

$cat = new Cat();
$cat->name = 'Kisa';

$cat2 = clone $cat;
$cat2->name = 'Baroq';
echo $cat->name;
echo $cat2->name;
