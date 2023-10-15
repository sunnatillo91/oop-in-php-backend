<?php

// Autoload - autoload.php faylga spl_autoload_register yaratilib unda classlarni o'z 
// ichiga oladi va o'sha yerda foydalansa bo'ladi


require_once 'autoload.php';

$cat = new Cat();
$banana = new Fruit('hul meva', '20000');

echo $cat->run();
echo $banana->view();
