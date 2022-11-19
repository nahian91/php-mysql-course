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
                <h4 class="text-center bg-primary text-white p-3">Filter / FInd Data using Multiple Checkbox</h4>
                <form action="" method="GET">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mt-2">
                            <div class="card-header">Filter</div>
                            <div class="card-body">
                                <?php
                                    $checked = [];
                                    if(isset($_GET['brands'])) {
                                        $checked = $_GET['brands'];
                                    }
                                    $brands = mysqli_query($con, "SELECT * FROM brands");
                                    while($row = mysqli_fetch_assoc($brands)) {
                                        ?>
                                            <div>
                                                <input type="checkbox" name="brands[]" value="<?php echo $row['id'];?>" <?php if(in_array($row['id'], $checked)) {echo 'checked';}?>> <?php echo $row['name'];?>
                                            </div>
                                        <?php 
                                    }
                                ?>
                                <input type="submit" value="Filter" class="btn btn-primary mt-3">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">Products</div>
                            <div class="card-body">
                                <div class="row">
                                    <?php

                                        if(isset($_GET['brands'])) {
                                            $checked = [];
                                            $checked = $_GET['brands'];

                                            foreach($checked as $single) {
                                                $product = mysqli_query($con, "SELECT * FROM products WHERE brand_id IN ($single)");
                                                while($row = mysqli_fetch_assoc($product)) {
                                                    ?>
                                                        <div class="col-md-4">
                                                            <h4><?php echo $row['name'];?></h4>
                                                        </div>
                                                    <?php 
                                                }
                                            }
                                        } else {
                                            $product = mysqli_query($con, "SELECT * FROM products");
                                                while($row = mysqli_fetch_assoc($product)) {
                                                    ?>
                                                        <div class="col-md-4">
                                                            <h4><?php echo $row['name'];?></h4>
                                                        </div>
                                                    <?php 
                                                }
                                        }

                                        
                                    ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
