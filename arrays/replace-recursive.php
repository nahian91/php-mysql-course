<?php
    $arr1 = array(
        'a' => array('Red', 'Green'),
        'b' => array('Blue', 'Gray')
    );
    $arr2 = array(
        'a' => array('Yellow', 'Purple', 'White'),
        'b' => array('Tomato', 'Teal', 'C1', 'C2')
    );

    //$array = array_replace($color1, $color2);
    $array = array_replace_recursive($arr2, $arr1);

    echo '<pre>';
        print_r($array);
    echo '</pre>';
?>