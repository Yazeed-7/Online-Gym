<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location:Login.php?error: You have to login first");
}
    ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Homepage</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d97d2b3ea4.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
      body {
    font-family: "Montserrat";
    text-align: center;
  }
 
  .iconDark {
    width: 80px;
    height: 80px;
    color: #810000;
    margin: 5%;
  }
  
  .iconDark:hover {
    color: #630000;
  }

  .iconLight {
    width: 80px;
    height: 80px;
    color: #eeebdd;
    margin: 5%;
  }
  .box {
                  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.50), 0 6px 20px 0 rgba(0, 0, 0, 0.50);
            }
  
  .iconLight:hover {
    color: #c9c7bf;
  }
  h1, h2, h3, h4, h5, h6 {
    font-family: "Montserrat";
    font-size: 1.5rem;
    font-weight: 900;
  }
  
  h3 {
    font-size: 1.5rem;
    font-weight: 900;
  }
  
  p {
    color: grey;
  }
  #two{
      position: relative;
      left:112%;
    
  }
  
  .containar-fluid {
    padding: 3% 15% 7%;
  }
  
  .section-heading {
    font-size: 3.5rem;
    line-height: 1.5;
    font-weight: 900;
  }
  
  /* Navigation Bar */
  .navbar {
    padding: 0 0 4.5rem 0;
  }
  
  .navbar-brand {
    font-family: "Ubuntu";
    font-size: 2.5rem;
    font-weight: bold;
  }
  
  .nav-item {
    padding: 0 18px;
  }
  
  .nav-link {
    font-size: 1.2rem;
  }
  
  /* Title */
  #title {
    background-color: #630000;
    color: #eeebdd;
    text-align: left;
    padding-bottom: 10%;
  }
  
  .title-text {
    font-size: 3.5rem;
    line-height: 1.5;
    font-weight: 900;
  }
  
  .homePageImage {
    width: 110%;
    
    transform: rotate(11.5deg);
    position: absolute;
    border-radius: 50px;
  }
  
  /* searchMovie */
  #searchMovie {
    padding: 8% 15%;
    background-color: #eeebdd;
    position: relative;
    z-index: 1;
  }
  #searchMovie a{
      margin-top: 5%;
      background-color: #630000;
      color: #eeebdd;
  }
  .search-text{
    font-size: 2.5rem;
    line-height: 1.5;
    font-weight: 500;
  }
  
  /* AddMovie */
  #AddMovie {
    padding: 8% 15%;
    position: relative;
    background-color: #630000;
    color: #eeebdd;
  }
  #AddMovie a{
    margin-top: 5%;
    background-color: #eeebdd;
    color: #630000;
}

  .AddMovie-text{
    font-size: 2.5rem;
    line-height: 1.5;
    font-weight: 500;
  }
  
  /* getRecommendation */
  #getRecommendation {
    padding: 8% 15%;
    background-color: #eeebdd;
    position: relative;
  }
  #getRecommendation a{
    margin-top: 5%;
    background-color: #630000;
    color: #eeebdd;
}
  .getRecommendation-text{
    font-size: 2.5rem;
    line-height: 1.5;
    font-weight: 500;
  }
  /* Footer */
  #footer {
    background-color: #630000;
    padding: 8% 15%;
    color: #eeebdd;
  }
  
  .footer-text{
    font-size: 2.5rem;
    line-height: 1.5;
    font-weight: 500;
  }
  .contact-icon {
    margin: 10px;
  }
  
  @media (max-width: 990px) {
    #title {
      text-align: center;
    }
    
    .homePageImage {
      position: static;
      transform: rotate(0);
    }
    
  }
  .badge{
                border-radius: 80%;
                background: #1B1717;
                color: #eeebdd;
            }
  
  </style>
  
  
</head>

<body>

                     
  <section id="title">
    <div class="containar-fluid">

      <!-- Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="userHomePage.php">Fitos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="ViewWorkout.php">View Workout tutorial</a>
            </li>
          <li class='nav-item' style='padding-right:0px;'>  
              
                
                <span class='badge'>1</span>
          </li>
          <li class="nav-item" style='padding-left:0px;'>
                    <a class="nav-link" style='padding-left:0px;' href="showAdvice.php">Advices/Articles</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Countcal.php">Count calories</a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
        <div id="profile" class="dropdown-menu" aria-labelledby="dropdown01">
         
          <a class="dropdown-item" href="Signout.php">Log out</a>
        </div>
      </li>
          </ul>
        </div>
      </nav>



      <!-- Title -->
      
      <div class="row">   
        <div class="col-lg-6">
            <?php
            include 'DBS.php';
            
            $con=mysqli_connect(HOST,DBUSER,DBPASSWORD,DBNAME);
            if(mysqli_connect_errno()){
                echo " Error :".mysqli_connect_error();
            }
            $email=$_SESSION['email'];
            $query="SELECT name FROM users where email='$email'";
            
            $result=mysqli_query($con,$query);
            
           
           while($row = mysqli_fetch_array($result)){
            $name=$row['name'];
            }
            echo"<h3 id='two' class='title-text' style=' color:#eeebdd; text-shadow: 2px 2px rgba(27,23,23,0.9);'>Hello $name</h3>";
            
            ?>
          <h1 class="title-text">Explore the World of Fitness.</h1>
        </div>
        <div class="col-lg-6 con-img">
          <img class="homePageImage box" src="Fitness.jpg" alt="TV-image">
        </div>
      </div>

    </div>
  </section>


  <script> 
        $(document).ready(function(){
            $("#two").animate({
                left: '-1%'
            });
        });
    </script> 

</body>


</html>
