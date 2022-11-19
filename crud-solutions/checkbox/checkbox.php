<?php
    $con = mysqli_connect('localhost', 'root', '', 'crud');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-xxl-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Insert & Update Multiple Checkbox Value in Database</h4>
                    </div>
                    <div class="card-body">

                    <?php
                        if(isset($_POST['submit'])) {
                            
                            $colors = $_POST['colors'];
                            $color_imp = implode(',', $colors);

                            $insert = mysqli_query($con, "INSERT INTO colors (colors) VALUES ('$color_imp')");

                            if($insert) {
                                echo 'Success';
                            }
                        }
                    ?>

                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                            <div class="mb-3">
                                <label for="" class="form-label">Your Favourite Colors?</label>
                                <br>
                                <br>
                                <input type="checkbox" name="colors[]" value="Red"> Red
                                <input type="checkbox" name="colors[]" value="Green"> Green
                                <input type="checkbox" name="colors[]" value="Blue"> Blue
                                <input type="checkbox" name="colors[]" value="Yellow"> Yellow
                                <input type="checkbox" name="colors[]" value="Orange"> Orange
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                            </div>
                        </form>
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Sl.</th>
                                <th>Colors</th>
                                <th>Edit</th>
                            </tr>
                            <?php
                                $get = mysqli_query($con, "SELECT * FROM colors");
                                while($row = mysqli_fetch_assoc($get)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['colors'];?></td>
                                            <td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
                                        </tr>
                                    <?php 
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
