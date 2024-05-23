<?php require('../layouts/header.php');?>
<?php require('../layouts/navbar.php');?>




<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $select = "SELECT * FROM teachers WHERE id = $id";
    $get_select = mysqli_query($conn, $select);
    $data = mysqli_fetch_assoc($get_select);
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
                <input type="text" value = "<?php   echo $data['name']; ?>"   readonly    class="form-control" name="name"   id="exampleInputName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputphone" class="form-label">Phone:</label>
                <input type="tel" class="form-control" name="phone"   readonly value = "<?php   echo $data['phone']; ?>"    id="exampleInputphone" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputaddress" class="form-label">Address:</label>
                <input type="text" class="form-control"     readonly  value = "<?php   echo $data['address']; ?>"     name = "address" id="exampleInputaddress" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputfaculty" class="form-label">faculty:</label>
                <input type="text" class="form-control"     readonly value = "<?php   echo $data['faculty']; ?>"  name = "faculty" id="exampleInputfaculty" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputqualification" class="form-label">Qualification:</label>
                <input type="text" class="form-control"     readonly name="qualification"     value = "<?php   echo $data['qualification']; ?>"    id="exampleInputqualification" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-sm btn-primary" name="create">Create</button>
            </div>
            
        </form>
    </div>
</section>



<?php require('../layouts/footer.php');?>