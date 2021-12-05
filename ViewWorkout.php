<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location:Login.php?error: You have to login first");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>View Workout tutorial</title>


        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d97d2b3ea4.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>






        <style>

            .btn {
                -webkit-border-radius: 28;
                -moz-border-radius: 28;
                border-radius: 28px;
                font-family: Arial;
                color: #eeebdd;
                font-size: 20px;
                background: #630000;
                padding: 10px 20px 10px 20px;
                text-decoration: none;
                width:70%;

            }.approval{
            width:60%;
            margin-top:2%;
            position:relative;
            left:20%;
            right:20%;
            background-color: #630000;
                    border-color: #1b1717;
                    color:#eeebdd;
            
            }

            .btn:hover {
                background: #630000;
                background-image: -webkit-linear-gradient(top, #630000, #810000);
                background-image: -moz-linear-gradient(top, #630000, #810000);
                background-image: -ms-linear-gradient(top, #630000, #810000);
                background-image: -o-linear-gradient(top, #630000, #810000);
                background-image: linear-gradient(to bottom, #630000, #810000);
                text-decoration: none;
                color:#eeebdd;
            }
            .containerX{
                background-color:#eeebdd ;
                color: #1B1717;
                margin-top: 40px;
                text-align: center;
                padding: 10px;
                border-radius: 2%;
                width:55%;
                position: relative;
                left:22.5%;
                right:22.5%;
                top:37%;
                  top: 1rem;
  right: -1rem;
  
               
            }
              .box {
                  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.50), 0 6px 20px 0 rgba(0, 0, 0, 0.50);
            }
  
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
            body{
                background-color:#630000;
                color: #eeebdd;
                font-family: "Montserrat";
                
            }

             h2, h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
            line-height: 1.5;
            }

            h3 {
              font-Size: 1.5rem;
            }

            h2 {
              font-Size: 3rem;
            }

            textarea{
                border-radius: 2%;
                width:300px;
                height:200px;
            }
            .upButton{
                margin-top:20px;
               margin-left: 13%;
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
            .containar-fluid {
                padding: 3% 15% 0%;
                
            }
            #A{
               position:absolute;
              
            }
            .Video{
              border-radius: 3%;  
            }


        </style>


        <!-- Custom styles for this template -->

    </head>
    <body>

        <!<!-- Navbar-section -->
        <div class="containar-fluid">
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
            <li class="nav-item">
                <a class="nav-link" href="showAdvice.php">Advices/Articles</a>
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
        </div>
        <h2 style="text-align:center; margin-top:2%;  margin-bottom:30px;">View Workout tutorial </h2>
        <div class="containerX box">
            <br>
            <h3 id="#A">-Chest day tutroial </h3>
            <br>
           <iframe class="Video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/84ObaROTa78?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <hr style="  border: 0; height: 1px;background: #333;background-image: linear-gradient(to right, #ccc, #333, #ccc);color:#630000">
            <br>
            <h3 id="#A">-Back day tutroial </h3>
            <br>
            <iframe class="Video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/NaU8mlULPmY?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
            <hr style="  border: 0; height: 1px;background: #333;background-image: linear-gradient(to right, #ccc, #333, #ccc);color:#630000">
            <br>
            <h3 id="#A">-Shoulders and shrugs day tutroial </h3>
            <br>
            <iframe class="Video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/Z5g48LuHB9s?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <hr style="  border: 0; height: 1px;background: #333;background-image: linear-gradient(to right, #ccc, #333, #ccc);color:#630000">
            <br>
            <h3 id="#A">-Legs day tutroial </h3>
            <br>
            <iframe class="Video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/COKYKgQ8KR0?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <hr style="  border: 0; height: 1px;background: #333;background-image: linear-gradient(to right, #ccc, #333, #ccc);color:#630000">
            <br>
            <h3 id="#A">-Arms day tutroial </h3>
            <br>
            <iframe class="Video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/qRS3cn89gBE?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <br>
        </div>
        <br>
        <br>
        <div style="height:20px margin-top:3%">
           
        </div>

       


    </body>
</html>
