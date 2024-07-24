<?php
require('../connection/config.php');
// start the session
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == "" || $password == "") {
        header('location:../index.php?required=All Fields are Required');
    } else {
        // fetch the email and password from users table
        $select = "SELECT *FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $select);
        // check if the email and password is correct
        if ($result->num_rows > 0) {

            // get the user data
            $row = $result->fetch_assoc();
            // $row = mysqli_fetch_asoc($result);

            // set the session
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];

            header('location:../dashboard.php?success=Login Successfully');
        } else {
            header('location:../index.php?error=Invalid Email or Password');
        }
    }
}
require('connection/config.php');

?>