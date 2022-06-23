<?php
    $file = 'index.php';

    if(is_writable($file)){
        echo 'Yes, it is Readable';
    } else {
        echo 'No';
    }

    //echo filesize($file);
    //echo filetype('assets');

    //echo realpath($file);

    // echo '<pre>';
    // print_r(pathinfo($file, PATHINFO_EXTENSION));
    // echo '</pre>';

   // echo dirname($file);
   //echo basename($file);

    //rmdir('another');

    // if(file_exists($file)) {
    //     //echo readfile($file);
    //     //copy($file, 'copyfile.php');
    //     //rename('copyfile.php', 'rename.txt');
    //     unlink('rename.txt');
    // } else {
    //     echo 'File Not Found!';
    // }
    
?>