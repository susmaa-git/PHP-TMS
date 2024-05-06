<?php require('../layouts/header.php');?>
<?php require('../layouts/navbar.php');?>




<?php
if(isset($_POST['create'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $faculty = $_POST['faculty'];
    $qualification = $_POST['qualification'];
    if($name!= "" && $phone!= "" && $address!= "" && $faculty!= "" && $qualification!= "")
    {
        $select = "SELECT * FROM teachers WHERE phone = $phone";
        $get_select = mysqli_query($conn,$select);
        if($get_select->num_rows>0){?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Invalid phone number</strong>
                <button type="button" class="btn-close" aria-label="close" data-bs-dismiss = "alert"></button>
            </div>
            
         <?php
         echo "<meta http-equiv=\"refresh\"content=\"2;URL = create.php\">";
        }
        else{
            $insert = "INSERT INTO teachers(name,phone,address,faculty,qualification)VALUES('$name','$phone','$address','$faculty','$qualification')";
            $get_insert = mysqli_query($conn, $insert);
            if($get_insert){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Teacher is added successfully</strong>
                <button type="button" class="btn-close" aria-label="close" data-bs-dismiss = "alert"></button>
                </div>
            </div>
                <?php
                echo "<meta http-equiv=\"refresh\"content=\"2;URL = index.php\">";
            }
            else{
                ?>
                <div class="alert alert-error alert-dismissible fade show" role="alert">
                <strong>Teacher addition is failed</strong>
                <button type="button" class="btn-close" aria-label="close" data-bs-dismiss = "alert"></button>
                </div>
                <?php
                echo "<meta http-equiv=\"refresh\"content=\"2;URL = create.php\">";
            }
        }


    }
    else{
        ?>
       
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>ALl fields are required</strong>
        <button type="button" class="btn-close" aria-label="close" data-bs-dismiss = "alert"></button>
       
        <?php
    }
}







?>

<section class="py-5">
    <div class="container w-50">
        <div class="d-flex justify-content-between">   
        <h4 class="pb-3">Add teacher</h4>
        <p><a href="index.php" class="btn btn-sm btn-primary" role = "button">Manage teacher</a></p>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name"   id="exampleInputName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputphone" class="form-label">Phone:</label>
                <input type="tel" class="form-control" name="phone"    id="exampleInputphone" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputaddress" class="form-label">Address:</label>
                <input type="text" class="form-control"  name = "address" id="exampleInputaddress" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputfaculty" class="form-label">faculty:</label>
                <input type="text" class="form-control"   name = "faculty" id="exampleInputfaculty" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputqualification" class="form-label">Qualification:</label>
                <input type="text" class="form-control" name="qualification"    id="exampleInputqualification" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-sm btn-primary" name="create">Create</button>
            </div>
            
        </form>
    </div>
</section>



<?php require('../layouts/footer.php');?>