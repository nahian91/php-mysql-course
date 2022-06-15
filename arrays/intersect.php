<?php
    $color1 = array(
        'a' => 'Red',
        'b' => 'Green',
        'c' => 'White'
    );
    $color2 = array(
        'b' => 'Gray',
        'c' => 'Blue',
    );
    $color3 = array(
        'b' => 'Color1',
        'c' => 'Color2'
    );
    $array = array_intersect_key($color1, $color2, $color3);

    echo '<pre>';
        print_r($array);
    echo '<pre>';
?>