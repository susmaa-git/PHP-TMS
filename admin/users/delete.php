
<?php

require('../connection/config.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $get_select="DELETE FROM users WHERE id=$id";
    $select_result = mysqli_query($conn, $get_select);
    echo "<meta http-equiv=\"refresh\"content=\"0;URL=index.php\">";
    
}


?>