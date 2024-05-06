<?php require('../layouts/header.php');?>
<?php require('../layouts/navbar.php');?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $select = "SELECT * FROM files WHERE id = $id";
    $get_select = mysqli_query($conn,$select);
    $data = mysqli_fetch_assoc($get_select);

    $oldfilelink = $data['img_link'];
    $finallink = '../uploads'.$oldfilelink;
    unlink($finallink);

    $delete = "DELETE FROM files WHERE id = $id";
    $get_delete = mysqli_query($conn, $delete);
    echo "<meta http-equiv=\"refresh\"content=\"0;URL = index.php>";


}






?>










<?php require('../layouts/footer.php');?>