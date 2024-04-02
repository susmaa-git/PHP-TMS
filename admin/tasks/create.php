<?php require('../layouts/header.php') ;?>
<?php require('../layouts/navbar.php') ;?>


    <section class="py-5">
        <div class="container w-50">
            <h4>Add Tasks</h4>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"> Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <div class="mb-3 form-check">
                    <span>I have already an account <a href="index.php">Login Now</a></span>
                </div>
            </form>
        </div>
    </section>

<?php require('../layouts/footer.php'); ?>