<?php

    require 'animal.php';
    class Cat extends Animal {

    }
    $cat = new Cat('White', '30 KG', 'Bread');
    $cat->weight() .'<br/>';
    $cat->color() .'<br/>';
    $cat->food() .'<br/>';
?>