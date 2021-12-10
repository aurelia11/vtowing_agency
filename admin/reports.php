<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Report Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="register.insert.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Report Number </label>
                <input type="text" name="reportNumber" class="form-control" >
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="fullname" class="form-control" >
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" name="contact" class="form-control">
            </div>
            <div class="form-group">
                <label>Car Number</label>
                <input type="text" name="Car Number" class="form-control" >
            </div>
            <div class="form-group">
                <label>Service</label>
                <input type="text" name="Service" class="form-control">
            </div>
            <div class="form-group">
                <label>Street</label>
                <input type="text" name="street" class="form-control" >
            </div>
            <div class="form-group">
                <label>Message</label>
                <input type="text" name="Message" class="form-control" >
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-warning">Report Records 
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addadminprofile">
              Add Report
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

            <?php
            require("dbconfig.php");
                $query = "SELECT * FROM reports";
                $query_run = mysqli_query($connection, $query);
            ?>



      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Index</th>
            <th>Full Name</th>
            <th>Contact</th>
            <th>Car Number</th>
            <th>Service </th>
            <th>Street</th>
            <th>Message </th>
            <th>UPDATE </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
            <?php
                if(mysqli_num_rows($query_run) > 0){                  
                  while($row = mysqli_fetch_assoc($query_run)){
                        ?>
     
          <tr>
              <td><?php  echo $row['num']; ?></td>
              <td><?php  echo $row['fullname']; ?></td>
              <td><?php  echo $row['contact']; ?></td>
              <td><?php  echo $row['carnumber']; ?></td>
              <td><?php  echo $row['service']; ?></td>
              <td><?php  echo $row['street']; ?></td>
              <td><?php  echo $row['message']; ?></td>
            </td>
            <td>             
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row["num"];?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success">UPDATE</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row["num"];?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>

          <?php
              } 
                }
                else {
                  echo "No Record Found";
                    }
          ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>