<?php
    $var = 'FA-F9-DD-B2-5E';

    // $options = array(
    //     'options' => array(
    //         'min_range' => 20,
    //         'max_range' => 30
    //     )
    // );

    $filter = filter_var($var, FILTER_VALIDATE_MAC);

    if($filter) {
        echo $var . ' is a Valid MAC';
    } else {
        echo $var . ' not a Valid MAC';
    }
?>