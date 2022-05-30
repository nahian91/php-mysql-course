<?php
    $infos = array(
        array(1, 'John', 'Bangla', 77),
        array(2, 'David', 'English', 78),
        array(3, 'Wick', 'Physics', 98),
        array(4, 'Doe', 'Math', 45),
        array(5, 'William', 'Chemistry', 65)
    );

    echo '<table border="1"><tr><th>ID</th><th>Name</th><th>Subject</th><th>Mark</th></tr>';
    for($row = 0; $row < 5; $row++) {
        echo '<tr>';
        for($col = 0; $col < 4; $col++) {
            echo '<td>'.$infos[$row][$col].'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>