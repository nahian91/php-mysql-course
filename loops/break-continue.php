<?php
    // for($x = 0; $x <= 10; $x++) {
    //     if($x == 5){
    //         continue;
    //     }
    //     echo $x . "<br/>";
    // }

    $x = 0;
    while($x <= 10) {
        if($x == 8) {
            $x++;
            continue;
        }
        echo $x . '<br/>';
        $x++;
    } 
?>