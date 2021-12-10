<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "v_towing_96742023";
    $connection=mysqli_connect($servername,$username,$password,$dbname);
      if(!$connection){
          die('Could not Connect MySql Server:');
        }
?>