<?php 
    include 'inc/connection.php';
    include 'inc/common.php';
?>
            <div class="col-xxl-8">
                <?php
                    if(isset($_SESSION['success'])) {
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    }
                ?>
                <table class="table table-border">
                    <tr>
                        <th>SL.</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Roll</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $select = "SELECT * FROM std_info";
                        $result = mysqli_query($con, $select);
                        $i = 0;
                        while($row = mysqli_fetch_assoc($result)) {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['class'];?></td>
                            <td><?php echo $row['section'];?></td>
                            <td><?php echo $row['roll'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-success" type="button"><a href="" class="text-white">Edit</a></button>
                                    <button class="btn btn-danger" type="button"><a href="" class="text-white">Delete</a></button>
                                </div>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>