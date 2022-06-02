<?php 
    include 'inc/connection.php';
    include 'inc/common.php';

    $id = $_GET['id'];
    $single = "SELECT * FROM std_info WHERE id = $id";
    $result = mysqli_query($con, $single);
    $std = mysqli_fetch_assoc($result);
?>
            <div class="col-xxl-8">
            <h4>Edit Student</h4>
            <hr>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $std['name'];?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Class</label>
                    <select name="class" class="form-control" required>
                        <option disabled selected>Select Class</option>
                        <option value="10" <?php if($std['class'] == 10) {echo 'selected';} ?>>10</option>
                        <option value="11" <?php if($std['class'] == 11) {echo 'selected';} ?>>11</option>
                        <option value="12" <?php if($std['class'] == 12) {echo 'selected';} ?>>12</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Section</label>
                    <select name="section" class="form-control" required>
                        <option disabled selected>Select Section</option>
                        <option value="A" <?php if($std['section'] == 'A') {echo 'selected';} ?>>A</option>
                        <option value="B" <?php if($std['section'] == 'B') {echo 'selected';} ?>>B</option>
                        <option value="C" <?php if($std['section'] == 'C') {echo 'selected';} ?>>C</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Roll</label>
                    <input type="number" class="form-control" value="<?php echo $std['roll'];?>" name="roll" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone" value="<?php echo $std['phone'];?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="<?php echo $std['email'];?>" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control" required><?php echo $std['address'];?></textarea>
                </div>
                <input type="submit" class="form-control btn btn-primary d-inline" value="Update Student" name="submit">
                </form>

                <?php
                    if(isset($_POST['submit'])) {
                        $update_id = $std['id'];
                        $name = $_POST['name'];
                        $class = $_POST['class'];
                        $section = $_POST['section'];
                        $roll = $_POST['roll'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];

                        $sql = "UPDATE std_info SET name = '$name', class = '$class', section = '$section', roll = '$roll', phone = '$phone', email = '$email', address = '$address' WHERE id = $update_id";
                        $update = mysqli_query($con, $sql);
                        
                        if($update) {
                            $_SESSION['update'] = '<div class="alert alert-primary" role="alert">Data Updated Success</div>';
                            header('Location: view.php?id='. $update_id);
                        } else {
                            echo 'Not Updated';
                        }
                    }
                ?>

            </div>
        </div>
    </div>
</body>
</html>