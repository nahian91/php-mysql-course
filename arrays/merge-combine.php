<?php
    $color1 = array('a' => 'Red', 'b' =>'Green', 'c' => 'Blue');
    $color2 = array('d' => 'Orange', 'a' => 'Gray', 'b' => 'Yellow');
    $number = array(22,33,44);

    // $array = array_combine($age, $name);
    $array = array_merge_recursive($color1, $color2, $number);

    echo '<pre>';
        print_r($array);
    echo '</pre>';
?>