<?php
   $conn = new Mysqli("localhost","root","","hotelmangement");
  if($conn->connect_error){
      die("Database connection Failed");
  }else{
    //echo ("Connection Succefully...");
  }


?>