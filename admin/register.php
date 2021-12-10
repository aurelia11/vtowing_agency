<?php
require_once('dbconfig.php');
require_once('includes/header.php'); 
require_once('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Company Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action=" " method="POST">
      <?php
      require("dbconfig.php");
        $query = "SELECT * FROM company";
        $query_run = mysqli_query($connection, $query);
      ?>

        <div class="modal-body">

            <div class="form-group">
                <label> Company ID </label>
                <input type="text" name="c_id" class="form-control" >
            </div>
            <div class="form-group">
                <label> Company Name </label>
                <input type="text" name="c_name" class="form-control" >
            </div>
            <div class="form-group">
                <label> Company Phone Number </label>
                <input type="text" name="c_contact" class="form-control">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="c_address" class="form-control">
            </div>
            <div class="form-group">
                <label>Website Address</label>
                <input type="text" name="c_web" class="form-control" >
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="save_btn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-warning">Company Profiles 
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addadminprofile">
              Add Company Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

            <?php
            require("dbconfig.php");
                $query = "SELECT * FROM company";
                $query_run = mysqli_query($connection, $query);
            ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Company ID </th>
            <th>Company Name </th>
            <th> Phone Number</th>
            <th>Email Address </th>
            <th>Website Address</th>
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
              <td><?php  echo $row['Company_ID']; ?></td>
              <td><?php  echo $row['Company_Name']; ?></td>
              <td><?php  echo $row['Company_PhoneNumber']; ?></td>
              <td><?php  echo $row['Company_EmailAddress']; ?></td>
              <td><?php  echo $row['Company_WebsiteAddress']; ?></td>
            </td>
            <td>             
                <form action="update.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row["Company_ID"];?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success">UPDATE</button>
                </form>
            </td>
            <td>
                <form action="crud.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row["Company_ID"];?>">
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