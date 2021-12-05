<?php
session_start();
include "DBS.php";
$email = "";
$pwd = "";

if ( !isset($_POST['email']) || !isset($_POST['pwd'])){
    header('Location:Loging.php');}
$email= $_POST['email'];
    $pwd= $_POST['pwd'];

     if($email=='Ahmed@Fitos.sa' && $pwd=='1234'){
           $_SESSION['email']="Ahmed@Fitos.sa";
        
        header ('Location:adminHomePage.php');
        
     }
        else{
    
    
    $con=mysqli_connect(HOST,DBUSER,DBPASSWORD,DBNAME);
    
    if (mysqli_connect_errno()) {
    die("Failed to connect" . mysqli_connect_error());
}

$result=mysqli_query($con,"SELECT * FROM users where email='$email' AND pwd='$pwd';");



  
    if(mysqli_num_rows($result)>0){
        
        $_SESSION['email']=$email;
        header ('Location:userHomePage.php');
   }else
       header('Location:Login.php?error=The email and password you entered did not match');
   
    
}



?>
