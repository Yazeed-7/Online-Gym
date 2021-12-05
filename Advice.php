    <?php
            include 'DBS.php';

$con = mysqli_connect(HOST,DBUSER,DBPASSWORD,DBNAME);
if(mysqli_connect_errno())
{
die("failed to connect to mysql". mysqli_connect_error());
}
$x=$_POST["advice"];
$y=$_POST["topic"];
$query=" INSERT INTO adv (advice,topic) VALUES('$x','$y');";

mysqli_query($con,$query);

$query1="SELECT email,name from users;";
$result= mysqli_query($con, $query1);
 
while($row= mysqli_fetch_array($result)){
            $to=$row["email"];
            $subject="New advice/article";
            $message="Hello ".$row["name"]." \n new Advice uploaded 😃";
           
              $headers="Content-type:text/html\r\n";
              $headers="From: <fitosgym1@gmail.com\r\n";
                  
            mail($to,$subject,$message,$headers);  
    
    
    
}





header("Location:WriteAdvice.php?done= The advice has been sent");

mysqli_close($con);
            ?>