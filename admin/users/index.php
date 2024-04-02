<?php require('../layouts/header.php') ;?>
<?php require('../layouts/navbar.php') ;?>

<section class="py-5">
    <div class="container">
        <h4 class="pb-3">Manage Users</h4>
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
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>
                <a class="btn btn-primary btn-sm " href="#" role="button">Edit </a>
                <a class="btn btn-info btn-sm " href="#" role="button">View </a>
                <a class="btn btn-danger btn-sm " href="#" role="button">Delete </a>
              </td>
            </tr>
          </tbody>
        </table>
    </div>
</section>
<?php require('../layouts/footer.php') ;?>
