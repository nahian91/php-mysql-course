<?php
    // $numbers = [
    //     [1,2,3],
    //     [4,5,6]
    // ];
    // foreach($numbers as list($a, $b, $c)) {
    //     echo $a.$b.$c . "<br/>";
    // }

    $info = [
        [1, 'John', 'CSE', 22, 'Sylhet'],
        [2, 'David', 'CSE', 23, 'Dhaka'],
        [3, 'Wick', 'CSE', 21, 'Khulna'],
        [4, 'Mike', 'CSE', 24, 'Rajshahi'],
        [5, 'Sarah', 'CSE', 23, 'Barishal']
    ];
    echo '
        <table border="1">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Department</th>
                <th>Age</th>
                <th>District</th>
            </tr>
           
        
    ';
    foreach($info as list($id, $name, $dept, $age, $district)) {

        echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$dept.'</td><td>'.$age.'</td><td>'.$district.'</td></tr>';
        // echo '<tr>';
        //     echo '<td>'.$id.'</td>';
        //     echo '<td>'.$name.'</td>';
        //     echo '<td>'.$dept.'</td>';
        //     echo '<td>'.$age.'</td>';
        //     echo '<td>'.$district.'</td>';
        // echo '</tr>';
    }
    echo '</table>';
?>