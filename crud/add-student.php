<?php 
    include 'inc/connection.php';
    include 'inc/common.php';
?>
            <div class="col-xxl-8">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Class</label>
                    <select name="class" class="form-control">
                        <option disabled>Select Class</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Section</label>
                    <select name="section" class="form-control">
                        <option disabled>Select Section</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Roll</label>
                    <input type="number" class="form-control" name="roll">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control"></textarea>
                </div>
                <input type="submit" class="form-control btn btn-primary d-inline" value="Add Student" name="submit">
                </form>

                <?php
                    if(isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $class = $_POST['class'];
                        $section = $_POST['section'];
                        $roll = $_POST['roll'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];

                        $sql = "INSERT INTO std_info VALUES (NULL, '$name', '$class', '$section', '$roll', '$phone', '$email', '$address')";
                        $insert = mysqli_query($con, $sql);
                        
                        if($insert) {
                            $_SESSION['success'] = '<div class="alert alert-primary" role="alert">Data Insert Success</div>';
                            header('Location: index.php');
                        } else {
                            echo 'Not Inserted';
                        }
                    }
                ?>

            </div>
        </div>
    </div>
</body>
</html>