<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Payment Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="register.insert.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Payment Receipt Number </label>
                <input type="text" name="Payment_ReceiptNumber" class="form-control" >
            </div>
            <div class="form-group">
                <label> Payment Paid Amount</label>
                <input type="text" name="Payment_PaidAmount" class="form-control" >
            </div>
            <div class="form-group">
                <label> Payment Date</label>
                <input type="text" name="Payment_Date" class="form-control">
            </div>
            <div class="form-group">
                <label>Company ID</label>
                <input type="email" name="Company_ID" class="form-control">
            </div>
            <div class="form-group">
                <label>CarOwner ID</label>
                <input type="text" name="CarOwner_id" class="form-control" >
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
    <h6 class="m-0 font-weight-bold text-warning">Payment Records 
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addadminprofile">
              Add Payment
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

            <?php
            require("dbconfig.php");
                $query = "SELECT * FROM payment";
                $query_run = mysqli_query($connection, $query);
            ?>



      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Payment Receipt Number </th>
            <th>Payment Paid Amount</th>
            <th> Payment Date</th>
            <th>Company ID</th>
            <th>CarOwner ID</th>
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
              <td><?php  echo $row['Payment_ReceiptNumber']; ?></td>
              <td><?php  echo $row['Payment_PaidAmount']; ?></td>
              <td><?php  echo $row['Payment_Date']; ?></td>
              <td><?php  echo $row['Company_ID']; ?></td>
              <td><?php  echo $row['CarOwner_Id']; ?></td>
            </td>
            <td>             
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row["Payment_ReceiptNumber"];?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success">UPDATE</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row["Payment_ReceiptNumber"];?>">
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