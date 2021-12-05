<?php
include 'resetDB.php';
session_start();
if(isset($_POST['Update'])){
    $pwd=$_POST['pwd1'];
    $pwd1=$_POST['pwd2'];
    if($pwd1==$pwd){
        
    
    
    $con= mysqli_connect(HOST,DBUSER,DBPASSWORD,DBNAME);
    $token=$_POST['token'];
    $query="SELECT email FROM password_reset where token='$token'";
    $result= mysqli_query($con, $query);
    $res= mysqli_fetch_array($result);
    $email=$res['email'];
    
    $query="UPDATE users SET pwd='$pwd' where email='$email'";
       if( mysqli_query($con, $query)){
           
    header("Location:Login.php?Pass=Password updated");  
       }
     header("Location:Login.php?Pas=Password changed"); 
    }else{
      
        header("Location:reset.php?token=".$_POST['token']."&notMatch=passwords did not match");
    }
    
    
}