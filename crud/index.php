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
                <?php
                    if(isset($_SESSION['delete'])) {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                ?>
                <table class="table table-border">
                    <tr>
                        <th>SL.</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Roll</th>
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
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary" type="button"><a href="view.php?id=<?php echo $row['id'];?>" class="text-white text-decoration-none">View</a></button>
                                    <button class="btn btn-success" type="button"><a href="edit-student.php?id=<?php echo $row['id'];?>" class="text-white text-decoration-none">Edit</a></button>
                                    <button class="btn btn-danger" type="button"><a href="delete-student.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are You Sure?')" class="text-white text-decoration-none">Delete</a></button>
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