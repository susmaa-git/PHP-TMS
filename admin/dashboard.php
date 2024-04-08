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
    <title>Dashboard</title>
</head>

<body>
    <div class="container-fluid bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <p><a class="dropdown-item" href="auth/logout.php">Logout</a></p>
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
        header('refresh:2;url=dashboard.php');
    }

    ?>
    <header class="py-5">
        <div class="container">
            <h3 class="text-danger">This is My Dashboard</h3>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Users</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="users/index.php" class="btn btn-primary">View Users</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Students</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Students</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-light py-5 mt-5">
        <div class="container bg-light">
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