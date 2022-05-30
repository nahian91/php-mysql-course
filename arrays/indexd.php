<?php

    $subjects = array('Bangla', 'English', 'Math', 'Physics', 'Chemistry');

    echo '<ul>';
    for($i=0; $i<=4; $i++) {
        echo '<li>'.$subjects[$i].'</li>';
    }
    echo '</ul>';

?>