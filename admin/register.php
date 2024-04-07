<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body>

    <section class="py-5"> 
        <div class="container">
            
            <div class="card w-25 mx-auto">
            <div class="title text-center py-3" >
                <h4>Register Account</h4>
            </div>
                <div class="card-body">
                    <?php
                   

                    if(isset($_GET['error'])){
                        echo "<div class='alert alert-danger'>".$_GET['error']."</div>";
                        header('refresh:2;url=register.php');
                    }

                    if(isset($_GET['required'])){
                        echo "<div class='alert alert-warning'>".$_GET['required']."</div>";
                        header('refresh:2;url=register.php');
                    }
                    ?>
                    <form action="auth/register.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPhone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" name="phone" id="exampleInputPhone" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary" name="register">Submit</button>
                        <div class="mb-3 form-check">
                           <span>I have already an account <a href="index.php">Login Now</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>