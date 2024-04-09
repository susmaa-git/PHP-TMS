<?php require('../layouts/header.php'); ?>
<?php require('../layouts/navbar.php'); ?>


<section class="py-5">
    <div class="container w-50 ">
        <h4>Add User</h4>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Manage Users</a>
        <?php

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $get_select = "SELECT *FROM users WHERE id=$id";
            $select_result = mysqli_query($conn, $get_select);
            // fetch single row data from database
            $data = $select_result->fetch_assoc();
        }

        ?>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" readonly name="name" value="<?php echo $data['name']; ?>" id="exampleInputName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Phone</label>
                <input type="tel" class="form-control" readonly name="phone" value="<?php echo $data['phone']; ?>" id="exampleInputPhone" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" readonly name="email" value="<?php echo $data['email']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

        </form>
    </div>
</section>

<?php require('../layouts/footer.php'); ?>