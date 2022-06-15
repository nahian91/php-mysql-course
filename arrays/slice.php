<?php
    // $colors = array('Red', 'Green', 'Blue', 'Yellow', 'Orange');

    $array = array(
        'a' => 'Red',
        'b' => 'Green',
        'c' => 'Blue'
    );

    $slice = array_slice($array, 0, 3);

    echo '<pre>';
        print_r($slice);
    echo '</pre>';
?>