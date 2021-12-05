<?php

include "DBS.php";
$email = "";
$pwd = "";




$email = $_POST['email'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];

$name = $_POST['name'];

$con = mysqli_connect(HOST, DBUSER, DBPASSWORD, DBNAME);

if (mysqli_connect_errno()) {
    die("Failed to connect" . mysqli_connect_error());
}

$x = mysqli_query($con, "SELECT * FROM users where email= '$email';");

$Found = mysqli_num_rows($x);
if($pwd1==$pwd2){
if ($Found > 0) {

    mysqli_close($con);
    header('Location:Signup.php?error=email already exist');
} else {

    $userID = mysqli_query($con, "SELECT MAX(userId) FROM users");

    mysqli_query($con, "INSERT INTO users (name,email,pwd,isUser) VALUES ('$name','$email','$pwd1',1);");
    mysqli_close($con);
    
    header('Location:Login.php?Signup=Account is created');
}
}else{
    header('Location:Signup.php?notMatch=passwords did not match');
}
mysqli_close($con);
?>