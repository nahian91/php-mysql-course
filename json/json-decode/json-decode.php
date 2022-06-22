<?php

    $json_file = "demo.json";

    $json_string = file_get_contents($json_file);

    // $json_decode = json_decode($json_string, true);
    $json_decode = json_decode($json_string, false);

    // echo '<table border="1"><tr><th>ID</th><th>Name</th><th>Class</th><th>Section</th><th>City</th></tr>';
    //     foreach($json_decode as list('id' => $id, 'name' =>$name, 'class' => $class, 'section' => $section, 'city' => $city)) {
    //         ?>
    //             <tr>
    //                 <td><?php //echo $id;?></td>
    //                 <td><?php //echo $name;?></td>
    //                 <td><?php //echo $class;?></td>
    //                 <td><?php //echo $section;?></td>
    //                 <td><?php //echo $city;?></td>
    //             </tr>
    //         <?php
    //     }
    // echo '</table>';

    echo '<table border="1"><tr><th>ID</th><th>Name</th><th>Class</th><th>Section</th><th>City</th></tr>';
        foreach($json_decode as $single) {
            ?>
                <tr>
                    <td><?php echo $single->id;?></td>
                    <td><?php echo $single->name;?></td>
                    <td><?php echo $single->class;?></td>
                    <td><?php echo $single->section;?></td>
                    <td><?php echo $single->city;?></td>
                </tr>
            <?php
        }
    echo '</table>';

    
?>