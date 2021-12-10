<?php
require_once('register.php');
require_once("dbconfig.php");

//Adding to database
if(isset($_POST['save_btn'])){
    
    $Company_ID = $_POST['c_id'];
    $Company_Name = $_POST['c_name'];
    $Company_PhoneNumber = $_POST['c_contact'];
    $Company_EmailAddress = $_POST['c_address'];
    $Company_WebsiteAddress = $_POST['c_web'];

    $query = "INSERT INTO company SET 
            Company_ID=$Company_ID,
            Company_Name =$Company_Name,
            Company_PhoneNumber = $Company_PhoneNumber,
            Company_EmailAddres= $Company_EmailAddress,
            Company_WebsiteAddress=$Company_WebsiteAddress";


    $query_run=mysqli_query($connection, $query);
            
        if($query_run){              
            $_SESSION['success'] = "Company Profile Added";
            $_SESSION['status_code'] = "success";
            header('Location:register.php');
        }

        else {
            $_SESSION['status'] = "Company Profile Not Added";
            $_SESSION['status_code'] = "error";
              header('Location: register.php');  
            }
        }

    

    
//Updating in database    
if(isset($_POST['updatebtn'])){   
    $Company_id = $_POST['edit_id'];
    $Company_Name = $_POST['edit_username'];
    $Company_PhoneNumber = $_POST['edit_contact'];
    $Company_EmailAddress = $_POST['edit_email'];
    $Company_WebsiteAddress = $_POST['edit_website'];

    $query="UPDATE company SET Company_Name = '$Company_Name', Company_PhoneNumber = '$Company_PhoneNumber',Company_EmailAddress ='$Company_EmailAddress', Company_WebsiteAddress = '$Company_WebsiteAddress' WHERE Company_ID = '$Company_id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success'] = 'Your Data is Updated';
        //header("Location:register.php");
    }else{
        $_SESSION['status'] = 'Your Data is not Updated';
        //header("Location:register.php");
    }
} 



 //Deleting from database 
if(isset($_POST['delete_btn'])){   
    $Company_id=$_POST['delete_id'];

    $query="DELETE FROM company WHERE Company_ID='$Company_id'";
    $query_run=mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success'] = 'Your Data is Deleted';
        //header("Location:register.php");
    }else{
        $_SESSION['status'] = 'Your Data is not Deleted';
        //header("Location:register.php");
    }
}  




?>