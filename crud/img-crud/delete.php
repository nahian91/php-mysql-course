<?php
    $con = mysqli_connect('localhost', 'root', '', 'img-crud') or die (mysqli_error());

    $id = $_GET['id'];
    $image_delete = $_GET['image_delete'];

    $sql = "DELETE image FROM image WHERE id = '$id'";
    $delete = mysqli_query($con, $sql);

    if($delete) {
        unlink('img/'.$image_delete);
        header('Location: index.php');
    } else {
        echo 'Delete Failed';
    }
?>