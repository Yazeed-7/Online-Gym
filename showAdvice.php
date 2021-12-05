<?php
ob_start();
include 'DBS.php';
session_start();

if (!isset($_SESSION["email"])) {
    header("Location:Login.php?error= You have to login first");
}
?>
<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Advices/Articles</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d97d2b3ea4.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>




        <!-- Bootstrap core CSS -->
        <link href="/WEB-Project/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet">


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
                width:30%;

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
            .btn1 {
                background: #1b1717;
                background-image: -webkit-linear-gradient(top, #1b1717, #1b1717);
                background-image: -moz-linear-gradient(top, #1b1717, #1b1717);
                background-image: -ms-linear-gradient(top, #1b1717, #1b1717);
                background-image: -o-linear-gradient(top, #1b1717, #1b1717);
                background-image: linear-gradient(to bottom, #1b1717, #1b1717);
                -webkit-border-radius: 11;
                -moz-border-radius: 11;
                border-radius: 11px;
                font-family: Arial;
                color: #eeebdd;
                font-size: 20px;
                padding: 2.5px 5px 2.5px 5px;
                text-decoration: none;
            }

            .btn1:hover {
                background: #630000;
                background-image: -webkit-linear-gradient(top, #630000, #1b1717);
                background-image: -moz-linear-gradient(top, #630000, #1b1717);
                background-image: -ms-linear-gradient(top, #630000, #1b1717);
                background-image: -o-linear-gradient(top, #630000, #1b1717);
                background-image: linear-gradient(to bottom, #630000, #1b1717);
                text-decoration: none;
            }
            .box {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.60), 0 6px 20px 0 rgba(0, 0, 0, 0.60);
            }

            .C{
                width:45%;
                position:relative;
                left:27.5%;
                right:27.5%;
                border-radius: 3%;
                background-color:#810000;
                color:#eeebdd;


            }
            hr{
                background-color: #eeebdd;
            }
            .img{
                height:2%;
            }.txtarea{
                Border-radius:2% width:20%; background-color:#eeebdd;
            }


            .containerX{
                background-color:rgba(238,235,221,0.99) ;
                margin-top: 20px;
                text-align: center;
                padding: 10px;
                padding-top:15px;
                border-radius: 2%;
                width:60%;
                position: relative;
                left:20%;
                right:15%;
                top:30%;
                color: #810000;

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
            }.comments{

                margin: 5px auto;

                border: 5px #1b1717 solid;
                font-size:1.5rem;
                width:60%;
                margin-bottom: 3%;

            }td,th{
                border: 3px #1b1717 solid;
            }
            body{
                background-color:#630000;
                color: #eeebdd;
                font-family: 'Montserrat', sans-serif;
                text-align: center
            }

            nav{
                background-color: rgba(99,0,0,0.8);
                color:#eeebdd;
            }
            textarea{
                border-radius: 2%;
                width:300px;
                height:200px;
            }
            .upButton{
                margin-top:20px;
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
            .bottomPadding{
                padding-bottom: 3%;
            }

            .form-control {
                border-color: transparent;
            }

            .input-group>.form-control:focus {
                border-color: transparent;
                box-shadow: inset 0 0 0 1px transparent;
            }

            .butto{
                border:none;
                font-family: 'Montserrat', sans-serif;
                font-weight: 900;
                line-height: 1.5;
               

            }
            .card-body{
                text-align: left;
            }

            .Q{
                 text-align: left;
            }
            #2{
               margin-bottom: 0px; color:black;
            }

        </style>




        <!-- Custom styles for this template -->
        

    </head>
    <body>

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
                            <a class="nav-link" href="Countcal.php" >Count calories</a>
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






        <h2 id="2" style=" text-align: center;">Advices/Articles from Coatch</h2>
        <div class="containerX box" id="searchMovie">

           

                <?php
                $con = mysqli_connect(HOST, DBUSER, DBPASSWORD, DBNAME);

                if (mysqli_connect_errno()) {
                    die("Failed to connect" . mysqli_connect_error());
                }




                $result = mysqli_query($con, "SELECT * FROM adv;");

                $i=0;
                while ($row = mysqli_fetch_array($result)) { ?>
                    
                  <div id='accordion'>
                         <div class='card'>
                           <div class='card-header Q' id='heading'>
                             <h5 class='mb-0'>
                               <button class='butto dropdown-toggle' data-toggle='collapse' data-target='#collapse<?php echo $i ?>' aria-expanded='false' aria-controls='collapse<?php echo $i ?>'>  <?php echo $row['topic']; ?>
                  </button>
                        </h5>
                    </div>
                     <div id='collapse<?php echo $i ?>' class='collapse' aria-labelledby='heading<?php echo $i ?>' data-parent='#accordion'>
                        <div class='card-body'>
                        <?php echo $row['advice']; ?>
                            </div>
                    </div>
                </div>
                    
                <?php  ++$i;  
                }
                ?>
                <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>


                </body>
                </html>