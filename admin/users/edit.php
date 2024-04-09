<?php require('../layouts/header.php'); ?>
<?php require('../layouts/navbar.php'); ?>


<section class="py-5">
    <div class="container w-50 ">
        <h4>Add User</h4>

        <?php

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $get_select="SELECT *FROM users WHERE id=$id";
            $select_result = mysqli_query($conn, $get_select);
            // fetch single row data from database
            $data= $select_result->fetch_assoc();
        }

        if (isset($_POST['edit'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            if ($name != "" && $phone != "" && $email != "") {

                    $insert = "UPDATE users SET name='$name', phone='$phone', email='$email' WHERE id=$id";
                    $result = mysqli_query($conn, $insert);
                    if ($result) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>User is updated</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
                    } else {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>User is not updated</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                <?php
                       echo "<meta http-equiv=\"refresh\" content=\"2;URL=create.php\">";
                    }
                }
            } else {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>All fields are required</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php
            }
        

        ?>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" id="exampleInputName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Phone</label>
                <input type="tel" class="form-control" name="phone" value="<?php echo $data['phone']; ?>" id="exampleInputPhone" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email"value="<?php echo $data['email']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Submit</button>
            <div class="mb-3 form-check">
                <span>I have already an account <a href="index.php">Login Now</a></span>
            </div>
        </form>
    </div>
</section>

<?php require('../layouts/footer.php'); ?>