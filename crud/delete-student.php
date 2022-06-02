<?php
    include 'inc/connection.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM std_info WHERE id = $id";
    $delete = mysqli_query($con, $sql);

    if($delete) {
        $_SESSION['delete'] = '<div class="alert alert-danger" role="alert">Data Deleted Success</div>';
        header('Location: index.php');
    } else {
        echo 'Not Deleted';
    }
?>