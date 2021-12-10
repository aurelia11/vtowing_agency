<?php
require_once 'dbcon.php';
if(isset($_POST['submit'])){    
     $name = $_POST['fname'];
     $contact = $_POST['contact'];
     $carnumber = $_POST['carnumber'];
     $service = $_POST['services'];
     $address = $_POST['address'];
     $message = $_POST['message'];
    
     $sql = "INSERT INTO reports (num,fullname,contact,carnumber,services,street,message)
     VALUES ('$name','$contact','$carnumber','$service','$address','$message')";
     if (mysqli_query($connection, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($connection);
     }
     mysqli_close($connection);
}
?>
