<?php
require_once("security.php");
require_once('includes/header.php'); 
require_once('includes/navbar.php'); 
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-warning"> Update Company Profile </h6>
        </div>
        <div class="card-body">
        <?php       

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];

                
                $query = "SELECT * FROM company WHERE Company_ID ='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row){
                    ?>                 

                    <form action="crud.php" method="POST">

                        <input type="hidden" name="edit_id" value="<?php echo $row['Company_ID'] ?>">

                        <div class="form-group">
                            <label> Company Name </label>
                            <input type="text" name="edit_username" value="<?php echo $row['Company_Name'] ?>" class="form-control">                                    
                        </div>
                        <div class="form-group">
                            <label> Phone Number </label>
                            <input type="text" name="edit_contact" value="<?php echo $row['Company_PhoneNumber'] ?>" class="form-control">                                    
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="edit_email" value="<?php echo $row['Company_EmailAddress'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Web Address</label>
                            <input type="text" name="edit_website" value="<?php echo $row['Company_WebsiteAddress'] ?>"class="form-control">
                        </div>

                        <a href="register.php" class="btn btn-danger"> CANCEL </a>
                        <button type="submit" name="updatebtn" href="crud.php" class="btn btn-success"> Update </button>

                    </form>
                    <?php
                }

            }
            ?>


<?php
require_once('includes/scripts.php');
require_once('includes/footer.php');
?>
