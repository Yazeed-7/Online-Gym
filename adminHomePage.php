
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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
        <title>HomePage</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d97d2b3ea4.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
        <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .title{
                background-color: #1b1717;
                color: #eeebdd;
                padding: 50px;
            }
            footer{
                background-color: #1b1717;
                color: #eeebdd;
            }
            .colms{
                background-color: #1b1717;
                border-radius:15px;
                margin: 0 100px 0 100px;
            }
            .badge{
                border-radius: 80%;
                background: #810000;
                color: #eeebdd;
            }
            .colms2{
                padding: 0 1o0px 0 100px;
                border: 10px solid #eeebdd;
                border-radius: 10%;
                background-color: #eeebdd;
                margin: 0 50px 0 50px;
                text-align: center;
            }
            main{
                background-color: #1b1717;
                padding-bottom: 100px;
            }
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
            }

        </style>
        <!-- Custom styles for this template -->

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark title">
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

        <div class="title">
            <div class="container">
                <h1 class="display-3">Welcome, Coach</h1>
            </div>
        </div>

        <main role="main">

            <!-- Main jumbotron for a primary marketing message or call to action -->


            <div class="container">
                <!-- Example row of columns -->
                <div class="row justify-content-center colms">
                    <div style="padding-top: 35px; margin-bottom: 2%;" class="col-4 colms2 ">
                        <h2>Write Advice</h2>
                        <p>Write advice for trainee</p>
                        <p><a style="background-color: #1b1717;" class="btn btn-secondary" href="WriteAdvice.php" role="button">Write &raquo;</a></p>
                    </div>
                    

                </div>

                <hr>

            </div> <!-- /container -->
            <footer style="text-align: center; padding: 138px 0 0 0" class="container">
                <p>&copy; Movies 2021</p>
            </footer>
        </main>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></body>
</html>
