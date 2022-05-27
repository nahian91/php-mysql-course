<?php
    $mark = 74;

    if($mark >= 80) {
        echo 'A+';
    } elseif($mark >= 70 && $mark <=79) {
        echo 'A';
    } elseif($mark >= 60 && $mark <=69) {
        echo 'B';
    } elseif($mark >= 50 && $mark <=59) {
        echo 'C';
    } elseif($mark >= 40 && $mark <=49) {
        echo 'D';
    } else {
        echo 'Failed!';
    }
?>