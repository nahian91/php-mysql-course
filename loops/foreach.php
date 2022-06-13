<?php
    // $colors = ['Red', 'Green', 'Orange', 'Blue'];
    // echo '<ol>';
    // foreach($colors as $color) {
    //     ?>
    //         <li><?php //echo $color;?></li>
    //     <?php
    // }
    // echo '</ol>';

    $infos = [
        'John' => 22,
        'David' => 23,
        'Wick' => 24
    ];
    foreach($infos as $key => $info) {
        echo 'My Name is '.$key.' and Age is '.$info . "<br/>";
    }

    $tests = [
        [1,2,3],
        [4,5,6]
    ];
    foreach($tests as list($a, $b, $c)) {
        
    }
?>
