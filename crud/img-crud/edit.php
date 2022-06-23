<?php


    $con = mysqli_connect('localhost', 'root', '', 'img-crud') or die (mysqli_error());
    
    $id = $_GET['id'];

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
                $upload = move_uploaded_file($tmp_name, 'img/' . $rename);
                if($upload) {
                    $update = "UPDATE image SET image ='$rename' WHERE id = '$id'";
                    mysqli_query($con, $update);
                    if($update) {
                        echo 'Image Update Success';
                    } else {
                        echo 'Image Update Failded';
                    }
                } else {
                    echo 'Image Upload Failed!';
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <img src="<?php echo $row['image'];?>" alt="">
        <input type="file" name="image">
        <br><br><br>
        <input type="submit" value="Upload Image" name="submit">
    </form> 
</body>
</html>