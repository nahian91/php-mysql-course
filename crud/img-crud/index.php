<?php
    $con = mysqli_connect('localhost', 'root', '', 'img-crud') or die (mysqli_error());
    

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
                    $insert = "INSERT INTO image (image) VALUES ('$rename')";
                    mysqli_query($con, $insert);
                    if($insert) {
                        echo 'Image Stored Success';
                    } else {
                        echo 'Image Stored Failded';
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
        <input type="file" name="image">
        <br><br><br>
        <input type="submit" value="Upload Image" name="submit">
    </form> 
    <br><br><br><br><br>

    <?php
        $sql = "SELECT * FROM image";
        $result = mysqli_query($con, $sql);

        echo '<table border="1">';
        while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><img style="width:100px" src="img/<?php echo $row['image'];?>" alt=""></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id'];?>&image_delete=<?php echo $row['image'];?>" onclick="return confirm('Are You Sure?');">Delete</a>
                    </td>
                </tr>
            <?php
        }
        echo '</table>';
    ?>
</body>
</html>