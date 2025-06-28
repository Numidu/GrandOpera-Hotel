<?php
  include "Connection1.php";
  $name =$_POST["n"];
  $email =$_POST["e"];
  $hotel=$_POST["h"];
  $description=$_POST["d"];


  if(empty($name)){
    echo "Enater name";
  }elseif(empty($email)){
    echo "Enter email";
  }elseif($hotel){
    echo"select hotel";
  }elseif(empty($description)){
    echo "Enter description";
  }else{
     $sql="INSERT INTO contact(name,email,hotel,description) VALUES (?,?,?,?)";

     $stmt =$conn->prepare($sql);
     if($stmt){
     $stmt->bind_param("ssss",$name,$email,$hotel,$description);
    if($stmt->execute()){
        echo "Data add success";
    }else{
        echo" data add failed";
    }
     }else{
        echo ("Connection failed".$conn->error);
     }




  }




?>