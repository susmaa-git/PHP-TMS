<?php  
require('../connection/config.php'); 
session_start();

if (isset($_SESSION['email'])) {

} else {
    header('location:../index.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c1653eb0dd.js" crossorigin="anonymous"></script>
    <title>Title</title>
    <style>
        .navbar .nav-item  a:hover{
            background-color: white;
            border-radius: 20px;

        }
    </style>
</head>

<body>