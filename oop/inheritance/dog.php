<?php

    require 'animal.php';
    class Dog extends Animal {

    }
    $dog = new Dog('Green', '10 KG', 'Rice');
    $dog->color();
    $dog->weight();
    $dog->food();
?>