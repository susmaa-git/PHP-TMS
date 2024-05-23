<?php require('../layouts/header.php'); ?>
<?php require('../layouts/navbar.php'); ?>


<section class="py-5">
    <div class="container w-50">
        <h4>Add File</h4>

        <?php
        if (isset($_POST['submit'])) {

            $title = $_POST['title'];
            $description = $_POST['description'];

            $filename = $_FILES['dataFile']['name'];
            $filesize = $_FILES['dataFile']['size'];
          
            

            $exploade = explode('.', $filename);
            // echo $exploade;
            $file = strtolower($exploade[0]);
            $ext = strtolower($exploade[1]);


            $strreplace = str_replace(' ', '', $file);
            
            $finalname = $strreplace . time() . '.' . $ext;

            if ($title != "" && $description != "" && $finalname != "") {
                if ($filesize <= 2 * 1024 * 1024) {
                    if ($ext == 'jpg' || $ext == 'png' || $ext == 'pdf' || $ext == 'jpeg') {
                        if (move_uploaded_file($_FILES['dataFile']['tmp_name'], '../uploads/' . $finalname)) {
                            $insert = "INSERT INTO files(title, description, img_link, type) VALUES ('$title','$description','$finalname','$ext')";
                            $result = mysqli_query($conn, $insert);
                            if ($result) {
                                echo "file is submitted";
                                header('Refresh:2; URL=index.php');
                            } else {
                                echo "file is not submitted";
                                header('Refresh:0;URL =  create.php');

                            }
                        } else {
                            echo "File is not uploaded";
                            header('Refresh:0;URL =  create.php');
                        }
                    } else {
                        echo "Extension does not match";
                        header('Refresh:0;URL =  create.php');
                    }
                } else {
                    echo "File size must be lessthen 2MB";
                    header('Refresh:0;URL =  create.php');
                }
            } else {
                echo "All fields are required";
                header('Refresh:0;URL =  create.php');
            }
        }


        ?>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="Image" class="form-label">Image</label>
                <input type="file" class="form-control" name="dataFile" id="Image" aria-describedby="helpId" placeholder="" />
            </div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</section>

<?php require('../layouts/footer.php'); ?>