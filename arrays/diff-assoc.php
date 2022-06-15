<?php
    $color1 = array(
        'a' => 'Red',
        'b' => 'Green',
        'c' => 'Blue',
        'd' => 'White'
    );
    $color2 = array(
        'a' => 'Red',
        'b' => 'Green',
        'c' => 'White'
    );
    $color3 = array(
        'a' => 'Red',
        'c' => 'Blue',
        'e' => 'Green' 
    );
    $array = array_diff_assoc($color1, $color2, $color3);

    echo '<pre>';
        print_r($array);
    echo '</pre>';
?>