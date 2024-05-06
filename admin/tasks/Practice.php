<!-- auth/register.php -->
<?php require('../connection/config.php');?>
<?php
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($name!= "" && $phone!= "" && $email!= "" &&$password!= ""){
        $select = "SELECT * FROM users WHERE email = '$email'";
        $get_select = mysqli_query($conn,$select);
        if($get_select->num_rows>0){
           
           ?>
           <div class="alert alert-warning alert-dismissiible fade show" role = "alert">
            <strong>Invalid email addresss</strong>
            <button type="button" class="btn-close" aria-label= "close" data-bs-dismiss = "alert"></button>
           </div>
           
        <?php
        echo "<meta http-equiv=\"refresh\"content=\"1;URL = register.php>";
        
    }
        else{
            $insert = "INSERT INTO users(name, phone , email, password)VALUES('$name','$phone','$email','$password')";
            $get_insert = mysqli_query($conn, $insert);
            if($get_insert){
                header('Location:../index.php?success = Registration successful');
            }
            else{
                header('Location:../register.php?error = Registration failed');
            }
        }

    }
    else{
        header('Location:../register.php?required = All fields are required');
    }
}


?>