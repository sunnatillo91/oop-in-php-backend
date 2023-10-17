<?php

// getters and setters - protected va private propertylarni olib kelish va o'rnatish uchun foydalaniladi
 
require_once 'autoload.php';

$audi = new Cars();
$audi->setModel('Audi');
$audi->setYear('2022');

echo $audi->getModel();
echo $audi->getYear();