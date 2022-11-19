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
                        <h4>Insert & Update Select Value in Database</h4>
                    </div>
                    <div class="card-body">
                        <?php 
                            $id = $_GET['id'];
                            $info = mysqli_query($con, "SELECT * FROM city WHERE id = '$id'");
                            $row = mysqli_fetch_assoc($info);
                        ?>
                        <form action="" method="POST">
                          <input type="hidden" name="update_id" value="<?php echo $id;?>">
                          <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>">
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Select City</label>
                            <select name="city" class="form-control">
                              <option value="Sylhet" <?php if($row['city'] == 'Sylhet') {echo 'Selected';} ?>>Sylhet</option>
                              <option value="Dhaka" <?php if($row['city'] == 'Dhaka') {echo 'Selected';} ?>>Dhaka</option>
                              <option value="Rajshahi" <?php if($row['city'] == 'Rajshahi') {echo 'Selected';} ?>>Rajshahi</option>
                              <option value="Khulna" <?php if($row['city'] == 'Khulna') {echo 'Selected';} ?>>Khulna</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                          </div>
                        </form>

                        <?php
                            if(isset($_POST['submit'])) {
                                $update_id = $_POST['update_id'];
                                $name = $_POST['name'];
                                $city = $_POST['city'];

                                $update = mysqli_query($con, "UPDATE city SET name = '$name', city = '$city' WHERE id = '$update_id'");

                                if($update) {
                                    header('Location: select.php');
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
