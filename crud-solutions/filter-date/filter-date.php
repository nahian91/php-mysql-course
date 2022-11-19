<?php
    $con  = mysqli_connect('localhost', 'root', '', 'crud');
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
                        <h4>How to Filter Date Between Two Dates</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">From Date</label>
                                    <input type="date" name="from_date" class="form-control" value="<?php if(isset($_GET['from_date'])) {echo $_GET['from_date'];} ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">To Date</label>
                                    <input type="date" name="to_date" class="form-control" value="<?php if(isset($_GET['to_date'])) {echo $_GET['to_date'];} ?>">
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Filter">
                                </div>
                            </div>
                        </form>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>	
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>Created</th>
                                    </tr>
                                
                                <?php
                                    if(isset($_GET['from_date']) && $_GET['to_date']) {
                                        $from_date = $_GET['from_date'];
                                        $to_date = $_GET['to_date'];

                                        $filter = "SELECT * FROM users WHERE created BETWEEN '$from_date' AND '$to_date'";

                                        $filter_query = mysqli_query($con, $filter);

                                        if(mysqli_num_rows($filter_query) > 0) {
                                            while($row = mysqli_fetch_assoc($filter_query)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['id'];?></td>
                                                        <td><?php echo $row['full_name'];?></td>
                                                        <td><?php echo $row['email'];?></td>
                                                        <td><?php echo $row['username'];?></td>
                                                        <td><?php echo $row['password'];?></td>
                                                        <td><?php echo $row['role'];?></td>
                                                        <td><?php echo $row['created'];?></td>
                                                    </tr>
                                                <?php 
                                            }
                                        } else {
                                            echo '<h4>Sorry. nothing found</h4>';
                                        }
                                    }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
