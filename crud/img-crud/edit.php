<?php


    $con = mysqli_connect('localhost', 'root', '', 'img-crud') or die (mysqli_error());
    $id = $_GET['id'];
    $sql = "SELECT * FROM image WHERE id = $id";
    $query = mysqli_query($con, $sql);
    $std = mysqli_fetch_assoc($query);

    if(isset($_POST['submit'])) {
        $name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];

        $file_exp = explode('.', $name);
        $file_lower = strtolower(end($file_exp));
        $file_exts = array('png', 'jpg');

        $rename = date('Y') . '-' . rand(9,999) . '.' .$file_lower;

        if(in_array($file_lower, $file_exts, $rename)) {
            if($size < 100000) {
                $update = move_uploaded_file($tmp_name, 'img/' . $rename);
                if($update) {
                    $img_update = "UPDATE image SET image ='$rename' WHERE id = '$id'";
                    mysqli_query($con, $img_update);
                    if($img_update) {
                        header('Location: index.php');
                    } else {
                        echo 'Image Update Failded';
                    }
                } else {
                    echo 'Image Update Failed!';
                }
            } else {
                echo 'Image too big. less then 100kb';
            }
        } else {    
            echo 'Image must be png or jpg';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <img style="width:100px" src="img/<?php echo $std['image'];?>" alt="">
        <input type="file" name="image">
        <br><br><br>
        <input type="submit" value="Upload Image" name="submit">
    </form> 
</body>
</html>