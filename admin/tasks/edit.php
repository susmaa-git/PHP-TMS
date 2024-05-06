<?php require('../layouts/header.php'); ?>
<?php require('../layouts/navbar.php'); ?>


<section class="py-5">
    <div class="container w-50 ">
        <h4>Add User</h4>

        <?php

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $get_select="SELECT *FROM tasks WHERE id=$id";
            $select_result = mysqli_query($conn, $get_select);
            // fetch single row data from database
            $data= $select_result->fetch_assoc();
        }

        if (isset($_POST['edit'])) {
            $tasktitle = $_POST['tasktitle'];
            $description = $_POST['description'];
            $duedate = $_POST['duedate'];

            if ($tasktitle != "" && $description != "" && $duedate != "") {

                    $insert = "UPDATE tasks SET tasktitle='$tasktitle', description='$description', duedate='$duedate' WHERE id=$id";
                    $result = mysqli_query($conn, $insert);
                    if ($result) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Task is updated</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
                    } else {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Task is not updated</strong>
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
                <label for="exampleInputtasktitle" class="form-label">Tasktitle</label>
                <input type="text" class="form-control" name="tasktitle" value="<?php echo $data['tasktitle']; ?>" id="exampleInputtasktitle" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputDescription" class="form-label">Description</label>
                <input type="description" class="form-control" name="description" value="<?php echo $data['description']; ?>" id="exampleInputDescription" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputduedate" class="form-label">Due date</label>
                <input type="date" class="form-control" name="duedate"value="<?php echo $data['duedate']; ?>" id="exampleInputduedate" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Submit</button>
            <div class="mb-3 form-check">
                <span>I have already an account <a href="index.php">Login Now</a></span>
            </div>
        </form>
    </div>
</section>

<?php require('../layouts/footer.php'); ?>