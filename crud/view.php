<?php 
    include 'inc/connection.php';
    include 'inc/common.php';

    $id = $_GET['id'];
    $single = "SELECT * FROM std_info WHERE id = $id";
    $result = mysqli_query($con, $single);
    $row = mysqli_fetch_assoc($result);
?>
            <div class="col-xxl-8">
                <h2>Student Info</h2>
                <hr>
                <?php
                    if(isset($_SESSION['update'])) {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                ?>
                <table class="table table-border">
                    <tr>
                        <th>Name</th>
                        <td><?php echo $row['name'];?></td>
                    </tr>
                    <tr>
                        <th>Class</th>
                        <td><?php echo $row['class'];?></td>
                    </tr>
                    <tr>
                        <th>Section</th>
                        <td><?php echo $row['section'];?></td>
                    </tr>
                    <tr>
                        <th>Roll</th>
                        <td><?php echo $row['roll'];?></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><?php echo $row['phone'];?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $row['email'];?></td>
                    </tr>
                    <tr>
                        <th>Adress</th>
                        <td><?php echo $row['address'];?></td>
                    </tr>                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>