<html>
    <head>
        <title>Upload Image</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" value="Upload">
        </form>

        <?php
            if(isset($_FILES['image'])) {
                $name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];

                if(move_uploaded_file($tmp_name, 'images/'.$name)) {
                    echo 'Image Uploaded Sucessfully';
                }
            }
        ?>
    </body>
</html>