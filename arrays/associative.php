<?php
    $subjects = array(
        'Bangla' => 77,
        'English' => 67,
        'Math' => 98,
        'Chemistry' => 57,
        'Physics' => 89
    );
    //$subjects['math'] = 94;

    echo '<ul>';
    foreach($subjects as $key => $subject) {
        echo '<li>'.$key.' '.$subject.'</li>';
    }
    echo '</ul>';
?>