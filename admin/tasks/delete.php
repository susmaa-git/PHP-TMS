<?php  require('../layouts/header.php');?>
<?php  require('../layouts/navbar.php');?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "DELETE FROM tasks WHERE id = $id";
    $get_delete = mysqli_query($conn,$delete);
    echo "<meta http-equiv=\"refresh\"content=\"0;URL = index.php";

}



?>



<?php  require('../layouts/footer.php');?>