<?php
    $array = range(0, 30, 3);

    foreach ($array as $arr) {
        echo $arr . "<br/>";
    }

    echo '<pre>';
        print_r($array);
    echo '</pre>';
?>