<?php require('../layouts/header.php') ;?>
<?php require('../layouts/navbar.php') ;?>


    <section class="py-5">
        <div class="container w-50 ">
            <h4>Add User</h4>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <div class="mb-3 form-check">
                    <span>I have already an account <a href="index.php">Login Now</a></span>
                </div>
            </form>
        </div>
    </section>

<?php require('../layouts/footer.php'); ?>