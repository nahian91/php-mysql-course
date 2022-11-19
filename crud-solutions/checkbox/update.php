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
                            $id = $_GET['id'];
                            $colors = mysqli_query($con, "SELECT * FROM colors WHERE id = '$id'");
                            $row = mysqli_fetch_assoc($colors);

                            $color_exp = explode(',', $row['colors']);
                        ?>

                        <form action="" method="POST">
                            <input type="hidden" name="update_id" value="<?php echo $id;?>">
                            <div class="mb-3">
                                <label for="" class="form-label">Your Favourite Colors?</label>
                                <br>
                                <br>
                                <input type="checkbox" name="colors[]" value="Red" <?php if(in_array('Red', $color_exp)) {echo 'checked';} ?>> Red
                                <input type="checkbox" name="colors[]" value="Green"  <?php if(in_array('Green', $color_exp)) {echo 'checked';} ?>> Green
                                <input type="checkbox" name="colors[]" value="Blue"  <?php if(in_array('Blue', $color_exp)) {echo 'checked';} ?>> Blue
                                <input type="checkbox" name="colors[]" value="Yellow"  <?php if(in_array('Yellow', $color_exp)) {echo 'checked';} ?>> Yellow
                                <input type="checkbox" name="colors[]" value="Orange"  <?php if(in_array('Orange', $color_exp)) {echo 'checked';} ?>> Orange
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                            </div>
                        </form>

                        <?php
                            if(isset($_POST['submit'])) {
                            
                                $update_id = $_POST['update_id'];
                                $colors = $_POST['colors'];
                                $color_imp = implode(',', $colors);
    
                                $update = mysqli_query($con, "UPDATE colors SET colors = '$color_imp' WHERE id = '$update_id'");
    
                                if($update) {
                                    header('location: checkbox.php');
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
