<?php require('../layouts/header.php'); ?>
<?php require('../layouts/navbar.php'); ?>

<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between">
      <h4 class="pb-3">Manage teachers</h4>
      <p class=""> <a name="" id="" class="btn btn-primary btn-sm" href="create.php" role="button"><i class="fa-solid fa-plus"></i></a>
      </p>
    </div>

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
          <th scope="col">Address</th>
          <th scope="col">Faculty</th>
          <th scope="col">Qualification</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $select = "SELECT * FROM teachers";
        $result = mysqli_query($conn, $select);
        $i = 1;
        while ($data = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['phone']; ?></td>
            <td><?php echo $data['address']; ?></td>
            <td><?php echo $data['faculty']; ?></td>
            <td><?php echo $data['qualification']; ?></td>
            <td>
              <a class="btn btn-primary btn-sm " href="edit.php?id=<?php echo $data['id']; ?>" role="button">Edit </a>
              <a class="btn btn-info btn-sm " href="view.php?id=<?php echo $data['id']; ?>" role="button">View </a>
              <a class="btn btn-danger btn-sm " onclick="return confirm('Do you want to delete this data??');" href="delete.php?id=<?php echo $data['id']; ?>" role="button">Delete </a>
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