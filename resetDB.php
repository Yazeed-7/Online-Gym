<?php
Include"DBS.php";

$con=mysqli_connect(HOST,DBUSER,DBPASSWORD,DBNAME);


if(isset($_POST['reset'])){
    $email=$_POST['email'];
    $query="SELECT * FROM users where email='$email'";
    $run=mysqli_query($con,$query);
    if(mysqli_num_rows($run)){
        $row= mysqli_fetch_array($run);
        
       
        $db_id=$row['userId'];
        $token= uniqid(md5(time()));
        $query="INSERT INTO password_reset (userId,email,token) VALUES(".$db_id.",'$email','$token')";
        
       $nameQuery = "SELECT name FROM users where email='$email'";
        $result = mysqli_query($con,$nameQuery);
        $name = mysqli_fetch_array($result);
        
        if(mysqli_query($con,$query)){
            $to=$email;
            $subject="Password reset link";
            $message="Hello ".$name[0]." \n Click http://localhost/Fitos/reset.php?token=$token to reset your password.";
           
              $headers="Content-type:text/html\r\n";
              $headers="From: <fitosgym1@gmail.com\r\n";
                  
            mail($to,$subject,$message,$headers);
            
            header("Location:resetPassword.php?Found=Password link has been sent to your email");
            
            
        }
        
    }else{
        header("Location:resetPassword.php?not=email not found");
    }
}

?>