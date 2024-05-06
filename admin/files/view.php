<?php require('../layouts/header.php'); ?>
<?php require('../layouts/navbar.php'); ?>


<section class="py-5">
    <div class="container w-50 ">
        <h4>Add File</h4>

        <?php
        if(isset($_GET['id'])){
            $id= $_GET['id'];

            $select= "SELECT *FROM files where id= $id";
            $select_result= mysqli_query($conn, $select);
            $data= $select_result->fetch_assoc();
            // $data=mysqli_fetch_assoc($select_result);
        }

        ?>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" readonly name="title" value="<?php echo $data['title']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" readonly id="exampleFormControlTextarea1" name="description" rows="3"><?php echo $data['description']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="Image" class="form-label">Image</label> <br>
                <img src="../uploads/<?php echo $data['img_link']; ?>" alt="" width="150" height="150" class="py-2">
            </div>

        </form>
    </div>
</section>

<?php require('../layouts/footer.php'); ?>