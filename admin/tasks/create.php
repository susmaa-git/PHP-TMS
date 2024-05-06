<?php require('../layouts/header.php') ;?>
<?php require('../layouts/navbar.php') ;?>

<?php

if(isset($_POST['create'])){
    $tasktitle = $_POST['tasktitle'];
    $description  = $_POST['description'];
    $duedate = $_POST['duedate'];
    if($tasktitle != "" && $description!= "" && $duedate!= ""){
        $select = "SELECT * FROM tasks WHERE tasktitle = '$tasktitle'";
        $get_select = mysqli_query($conn,$select);
        if($get_select-> num_rows>0){
            ?>
            <div class="alert alert-warning  alert-dismissible  fade show">
                <strong>Invalid title</strong>
                <button type="button" aria-label="close" class="btn-close" data-bs-dismiss="alert"></button>
            </div>

    
<?php
        }
        else{
            $insert = "INSERT INTO tasks(tasktitle, description,duedate) VALUES('$tasktitle','$description','$duedate')";
            $get_insert = mysqli_query($conn,$insert);
            if($get_insert){?>
             <div class="alert alert-success alert-dismissible  fade show" role= "alert">
            <strong>Task added successful</strong>
            <button type="button" class="btn-close" aria-label="close" data-bs-dismiss = "alert"></button>
        </div>

<?php
            }
            else{
?>
<div class="alert alert-error alert-dismissible  fade show">
            <strong>Task added Failed</strong>
            <button type="button" class="btn-close" aria-label="close" data-bs-dismiss = "alert"></button>
        </div>
<?php
            }
        }
    }
    else{
        ?>
           
           <div class="alert alert-danger alert-dismissible  fade show">
            <strong>All Fields are required</strong>
            <button type="button" class="btn-close" aria-label="close" data-bs-dismiss = "alert"></button>
        </div>
        <?php

    }
}

        
?>




    <section class="py-5">
        <div class="container w-50">
            <h4>Add Tasks</h4>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name= "tasktitle" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"> Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1"name= "description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputdate" class="form-label">Duedate</label>
                    <input type="date" class="form-control" id="exampleInputdate" name= "duedate" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary" name= "create">Submit</button>
                <div class="mb-3 form-check">
                    <span>I have already an account <a href="index.php">Login Now</a></span>
                </div>
            </form>
        </div>
    </section>

<?php require('../layouts/footer.php'); ?>