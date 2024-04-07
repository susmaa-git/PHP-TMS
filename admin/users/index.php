<?php require('../layouts/header.php'); ?>
<?php require('../layouts/navbar.php'); ?>

<section class="py-5">
  <div class="container">
    <h4 class="pb-3">Manage Users</h4>

    <?php

    if (isset($_GET['msg'])) {
      echo "<div class='alert alert-success'>" . $_GET['msg'] . "</div>";
      header('refresh:2;url=index.php');
    }
    ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $select = "SELECT * FROM users";
        $result = mysqli_query($conn, $select);
        $i = 1;
        while ($data = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['phone']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td>
              <a class="btn btn-primary btn-sm " href="#" role="button">Edit </a>
              <a class="btn btn-info btn-sm " href="#" role="button">View </a>
              <a class="btn btn-danger btn-sm " href="#" role="button">Delete </a>
            </td>
          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
  </div>
</section>
<?php require('../layouts/footer.php'); ?>