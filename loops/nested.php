<?php
    echo '<ul>';
    for($x = 1; $x <= 3; $x++) {
        echo '<li>Parent Item</li>';
        echo '<ol>';
        for($y = 1; $y<=2; $y++) {
            echo '<li>Child Item</li>';
                echo '<ul>';
                for($z = 1; $z <=4; $z++) {
                    echo '<li>Sub Child Item</li>';
                }
                echo '</ul>';
        }
        echo '</ol>';
    }
    echo '</ul>';
?>