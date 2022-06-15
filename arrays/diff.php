<?php
    $color1 = array(
        'a' => 'Red',
        'b' => 'Green',
        'c' => 'Blue',
        'd' => 'White'
    );
    $color2 = array(
        'a' => 'Red',
        'b' => 'Blue',
    );
    $color3 = array(
        'a' => 'Red',
        'b' => 'Green'
    );
    $array = array_diff($color1, $color2, $color3);

    echo '<pre>';
        print_r($array);
    echo '</pre>';
?>