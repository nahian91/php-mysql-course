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
                <h4 class="text-center bg-primary text-white p-3">Filter / Find by Product Price</h4>
                <br>
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="form-label">From Price</label>
                            <input type="number" name="from_price" class="form-control" value="<?php if(isset($_GET['from_price'])) {echo $_GET['from_price'];}?>">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">To Price</label>
                            <input type="number" name="to_price" class="form-control" value="<?php if(isset($_GET['to_price'])) {echo $_GET['to_price'];}?>">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Click</label> <br>
                            <input type="submit" value="Filter" name="submit" class="btn btn-primary">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <?php
                            if(isset($_GET['from_price']) && $_GET['to_price']) {
                                $from_price = $_GET['from_price'];
                                $to_price = $_GET['to_price'];

                                $products = mysqli_query($con, "SELECT * FROM products WHERE price BETWEEN '$from_price' AND '$to_price'");
                                while($row = mysqli_fetch_assoc($products)) {
                                    ?>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4>Name: <?php echo $row['name'];?></h4>
                                                    <h5>Price: <?php echo $row['price'];?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                }
                            } else {
                                $products = mysqli_query($con, "SELECT * FROM products");
                                while($row = mysqli_fetch_assoc($products)) {
                                    ?>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4>Name: <?php echo $row['name'];?></h4>
                                                    <h5>Price: <?php echo $row['price'];?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
