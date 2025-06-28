<?php
include "connection1.php";
session_start();

$pwd =$_POST["p"];
$email=$_POST["e"];
$remember=isset($_POST["r"]);

if(empty($pwd)){
    echo "password is emty";
}elseif(empty($email)){
    echo "email is emty";
}else{
   $sqlquery="SELECT * FROM  userdetails  WHERE  email=?  AND password=? ";
            $stmt=$conn->prepare($sqlquery);
            if($stmt){
               $stmt->bind_param("ss",$email,$pwd);
               $stmt->execute();
               $rs=$stmt->get_result();

                if($rs->num_rows==1){
                    $user=$rs->fetch_assoc();
                    $_SESSION['u']=$user;
                    echo("success");

                    if($remember){
                    setcookie("email",$email,time()+(60*60*24*30));
                    setcookie("pwd",$pwd,time()+(60*60*24*30));
                    }
                }else{
                    echo"invalid user";
                   }
            }else{
                echo "loging faile".$conn->error;
            }
}

?>