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
                        if(isset($_POST['submit'])) {
                          $name = $_POST['name'];
                          $city = $_POST['city'];

                          $insert = mysqli_query($con, "INSERT INTO city (name, city) VALUES ('$name', '$city')");

                          if($insert) {
                            echo '<h3>Data Insert</h3>';
                          }
                        }
                    ?>

                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                          <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Select City</label>
                            <select name="city" class="form-control">
                              <option disabled selected>Select City</option>
                              <option value="Sylhet">Sylhet</option>
                              <option value="Dhaka">Dhaka</option>
                              <option value="Rajshahi">Rajshahi</option>
                              <option value="Khulna">Khulna</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <input type="submit" name="submit" class="btn btn-primary" value="Add">
                          </div>
                        </form>

                        <table class="table table-border">
                          <tr>
                            <th>Name</th>
                            <th>City</th>
                            <th>Action</th>
                          </tr>
                          <?php
                            $get = mysqli_query($con, "SELECT * FROM city");
                            $count = mysqli_num_rows($get);

                            if($count > 0) {
                                while($row= mysqli_fetch_assoc($get)){
                                  ?>
                                    <tr>
                                      <td><?php echo $row['name'];?></td>
                                      <td><?php echo $row['city'];?></td>
                                      <td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
                                    </tr>
                                  <?php
                                }
                            } else {
                              echo 'No Data Found';
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
