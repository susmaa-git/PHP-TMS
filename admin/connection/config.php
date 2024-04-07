<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "feb15";

// $conn = mysqli_connect($host, $user, $pass, $db);
$conn = new mysqli($host, $user, $pass, $db);

// if(!$conn){
//     echo "Database Connection Failed";
// }

// another way to check connection
// if($conn){
//     echo "Database Connection Successfull";
// }
// else{
//     echo "Database Connection Failed";
// }



?>