<?php
    $colors = array('Red', 'Green', 'Blue', 'Gray', 'Orange');

    //$array = array_rand($colors, 3);
    shuffle($colors);

    // echo $colors[$array[0]] . "<br/>";
    // echo $colors[$array[1]] . "<br/>";
    // echo $colors[$array[2]] . "<br/>";
    echo '<pre>';
        print_r($colors);
    echo '</pre>';
?>