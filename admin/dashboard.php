<?php
require('connection/config.php');
require('auth/secure.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c1653eb0dd.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
    <style>
        .navbar .nav-item  a:hover{
            background-color: white;
            border-radius: 20px;

        }
    </style>
</head>

<body>
<div class="container-fluid bg-danger">
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Create
                            </a>
                            <ul class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="users/create.php">Add User</a></li>
                                <li><a class="dropdown-item" href="tasks/create.php">Add Task</a></li>
                                <li><a class="dropdown-item" href="files/create.php">Add File</a></li>
                                <li><a class="dropdown-item" href="teachers/create.php">Add teachers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Manage
                            </a>
                            <ul class="dropdown-menu  bg-info"  aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="users/index.php">Manage Users</a></li>
                                <li><a class="dropdown-item" href="tasks/index.php">Manage Tasks</a></li>
                                <li><a class="dropdown-item" href="files/index.php">Manage Files</a></li>
                                <li><a class="dropdown-item" href="teachers/index.php">Manage Teachers</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                    
                        <div class="d-flex">
                        <div class="nav-item dropdown bg-danger">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <p><a class="dropdown-item" href="auth/logout.php">Logout</a></p>
                            </div>
                        </div>
                        </div>
                        <a class="btn btn-primary btn-sm " href="register.php" role="button"> Register</a>
                        <a class="btn btn-primary btn-sm ms-3" href="index.php" role="button"> Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>


    <?php
    if (isset($_GET['success'])) {
        echo "<div class='alert alert-success'>" . $_GET['success'] . "</div>";
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=dashboard.php\">";
    }

    ?>
    <header class="py-5">
        <div class="container">
            <h3 class="text-danger text-center">This is my dashboard of task management system in php</h3>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/user.png" class="img-responsive" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title">Users</h5>
                            <p class="card-text">One can add and manage users.</p>
                            <a href="users/index.php" class="btn btn-outline-primary" title="View Users"> <i class="fa-solid fa-eye"></i> </a>
                            <a href="users/create.php" class="btn btn-outline-primary" title="Add Users "><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/file.jpg"class="card-img-top  img-responsive" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Files</h5>
                            <p class="card-text">One can add and manage files</p>
                            <a href="files/index.php" class="btn btn-outline-primary" title="View File"> <i class="fa-solid fa-eye"></i> </a>
                            <a href="files/create.php" class="btn btn-outline-primary" title="Add File "><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/task.png" class="card-img-top  img-responsive" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tasks</h5>
                            <p class="card-text">One can add and manage tasks.</p>
                            <a href="tasks/index.php" class="btn btn-outline-primary" title="View Task"> <i class="fa-solid fa-eye"></i> </a>
                            <a href="tasks/create.php" class="btn btn-outline-primary" title="Add Task"><i class="fa-solid fa-plus"></i></a>                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/teacher.png"    class="card-img-top  img-responsive" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Teachers</h5>
                            <p class="card-text">One can add and manage teachers.</p>
                            <a href="teachers/index.php" class="btn btn-outline-primary" title="View Teachers"> <i class="fa-solid fa-eye"></i> </a>
                            <a href="teachers/create.php" class="btn btn-outline-primary" title="Add Teachers"><i class="fa-solid fa-plus"></i></a>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-danger py-5 mt-5">
        <div class="container bg-danger">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <p>&copy; 2021 All Rights Reserved</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <p class="float-end">Designed by <a href="#">susma</a></p>
                </div>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>