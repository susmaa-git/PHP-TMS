<?php require('../layouts/header.php') ;?>
<?php require('../layouts/navbar.php') ;?>

<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between">
    <h4 class="pb-3">Manage User</h4>
    <p><a href="create.php" role="button" class="btn btn-sm btn-primary">Create User</a></p>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th class="col">#</th>
        <th class="col">tasktitle</th>
        <th class="col">description</th>
        <th class="col">duedate</th>
        <th class="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $select = "SELECT * FROM tasks";
      $get_select = mysqli_query($conn,$select);
      $i = 1;
      while($row = mysqli_fetch_assoc($get_select)){
        ?>
      <tr>
        <th class="row"><?php echo $i++;?></th>
        <td><?php echo $row['tasktitle'];?></td>
        <td><?php echo $row['description'];?></td>
        <td><?php echo $row['duedate'];?></td>
        <td>
          <a href="edit.php?id=<?php echo $row['id'];?>" role="button" class="btn-btn-sm btn-primary">Edit</a>
          <a href="view.php?id=<?php echo $row['id'];?>" role="button" class="btn-btn-sm btn-primary">View</a>
          <a href="delete.php?id =<?php echo $row['id'];?>" role="button"   onclick="return confirm('Do you want to delete?')" class="btn-btn-sm btn-primary">Delete</a>
        </td>
      </tr>
s
<?php
      }
      ?>
      
      
      
      
      
      ?>
    </tbody>
  </table>
</section>
<?php require('../layouts/footer.php') ;?>
