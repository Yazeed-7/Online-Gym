<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location:Login.php?error: You have to login first");
} ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Advice page</title>


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
                background: #1b1717;
                padding: 10px 20px 10px 20px;
                text-decoration: none;
                width:30%;

            }

            .btn:hover {
                background: #1b1717;
                background-image: -webkit-linear-gradient(top, #1b1717, #536162);
                background-image: -moz-linear-gradient(top, #1b1717, #536162);
                background-image: -ms-linear-gradient(top, #1b1717, #536162);
                background-image: -o-linear-gradient(top, #1b1717, #536162);
                background-image: linear-gradient(to bottom, #1b1717, #536162);
                text-decoration: none;
                color:#eeebdd;
            }
            .containerX{
                background-color:#eeebdd ;
                color: #1b1717;
                margin-top: 0px;
                text-align: center;
                padding: 10px;
                border-radius: 2%;
                width:50%;
                position: absolute;
                left:25%;
                right:25%;
                top:29%;

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
                background-color:#1b1717;
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
                padding: 0 11rem 4.5rem 11rem;
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
            main{
                padding-top: 20px;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            .containar-fluid {
                padding: 3% 15% 0%;

            }
            #Comment{
                width:360px;
            }
            .f{
                text-align: center;
                border-radius: 5%;
                width:50%;
                position: absolute;
                left:25%;
                right:25%;
                z-index:1;
                
            }
            #s{
                padding-bottom: 30px
            }


        </style>


        <!-- Custom styles for this template -->

    </head>
    <body>

        <!<!-- Navbar-section -->
       <nav id="s" class="navbar navbar-expand-lg navbar-dark title">
            <a class="navbar-brand" href="adminHomePage.php">Fitos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto">
                  
                    <li class="nav-item" style="padding-left:0px;">

                        

                        <a class='nav-link' href='WriteAdvice.php' style="padding-left:0px;">Write Advice</a>
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
        
        <h2 style="text-align:center; margin-top:0%;  margin-bottom:2px;">Write Advice</h2>
        <?php if(isset($_GET['done']))
                        echo "<div class='f alert alert-success approval1' id='H' role='alert'>" . $_GET['done'] . "</div>";
                        ?>
        <div class="containerX">
            <h4 id="upload" style="margin-top:10px;margin-bottom: 30px;">Write Advice/Article down here:</h4>
            <form action="Advice.php" method="POST">
           
                <p style="margin-top: 60px; margin-bottom:30px;"></p>
                <input type="text" style="margin-right:20px; margin-bottom:10px; border-radius: 2%;" required name="topic" placeholder="Topic"></input>
                <br> <br>
                <textarea id="Comment"  placeholder="Write Advice/Article:" name="advice" required></textarea>
                <br><br><br><br>
                <button type="submit" class="btn" name="">Send advice</button>
                <br><br>

            </form>
            
        
        </div>
        <div style="margin-top:2%">
            
            
        </div>





    </body>
</html>
