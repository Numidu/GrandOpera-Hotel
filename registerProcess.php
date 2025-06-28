<?php
include "Connection1.php";
$fname =$_POST["f"];
$lname = $_POST["l"];
$email =$_POST["e"];
$password =$_POST["p"];
$tel =$_POST["t"];
$address=$_POST["a"];


echo $fname;
if(empty($fname)){
    echo ("Enter name");
}elseif(empty($lname)){
    echo("Enter lname");
}elseif(empty($email)){
    echo("Enter email");
}elseif(empty($password)){
    echo("Enter password");
}elseif(empty($address)){
    echo("Enter address");
}else{
       
 $sqlqury ="INSERT INTO userdetails (fname, lname, email, password, contact, address) VALUES (?,?,?,?,?,?);";
      $stmt = $conn->prepare($sqlqury);
      if($stmt){
      $stmt->bind_param("ssssss",$fname,$lname,$email,$password,$tel,$address);
        if($stmt->execute()){ echo("Data add succefully");}
        else{
            echo("data insert failed");
        }
    }else{
        echo "connection failed".$conn->error;
    }

    $conn->close();
   
}


?>