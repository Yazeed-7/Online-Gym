
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Email</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;900&family=Ubuntu&display=swap" rel="stylesheet">


        <!-- Bootstrap core CSS -->
        <link href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

        <!-- Favicons -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <meta name="theme-color" content="#7952b3">


        <style>
            .body{
                font-family: "Montserrat";
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
                 .box {
                  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.70), 0 6px 20px 0 rgba(0, 0, 0, 0.70);
            }
  

                .A{
                    border-radius: 3%;
                    width: 30%;
                    height: 45%;
                    position:absolute;
                    left :0%;
                    right:35%;
                    top:30%;
                    padding-bottom: 4%;
                    padding-top:2%;
                    


                    color:#eeebdd;
                    background-color:rgba(27,23,23,0.9);



                }
                body{
                    
                                        overflow: hidden;
                }
                 .img{ 
                    
                  filter: brightness(50%);
                  
                }
                .Logwidth{
                    margin: 3%;
                    Color:#1b1717;

                }
                .approval{
                    width:80%;
                    
                    position:relative;
                    left:10%;
                    right:10%;
                  

                }
                .approval1{
                    width:80%;
                    
                    position:relative;
                    left:10%;
                    right:10%;
                    background-color: #630000;
                    border-color: #1b1717;
                    color:#eeebdd;

                }

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
                .Signup a{
                    text-decoration: none;
                    color: #eeebdd;
                }
                .Signup{
                    margin-top:3%;
                }
                .ForgotPass{
                    margin-bottom:2%;
                    margin-top: 1%;
                }.ForgotPass a{
                    text-decoration: none;
                    color: #eeebdd;
                }


            </style>


            <!-- Custom styles for this template -->
            <link href="bootstrap-5.0.0-beta3-dist/signin.css" rel="stylesheet">
        </head>
        <body class="text-center">
<img src="Login-Background.jpg" class="img" alt="alt"/>

            <main class="form-signin">

               
                <div class="A box" id="two">
                    <?php
                    if (isset($_GET['not'])) {
                        echo "<div class='alert alert-danger approval1'  role='alert'>" . $_GET['not'] . "</div>";
                    }else{
                       
                    if (isset($_GET['Found'])) {
                        echo "<div class='alert alert-success approval' id='H' role='alert'>" . $_GET['Found'] . "</div>";
                    }
                  
                    }
                    ?>
                    <form method="post" action="resetDB.php" >

                        <h1 class="h3 mb-3 fw-normal" Style="margin-top:3%;">Enter your email</h1>

                        <div class="form-floating Logwidth">
                            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required autofocus>
                            <label for="floatingInput">Email address</label>
                        </div>
                        
                        <button class="btn" style="margin-top:3%;" type="submit" name="reset">Next</button>

                    </form>
                </div>
                <script>
                    $(document).ready(function () {
                        $("#two").animate({
                            left: '35%'
                        });
                    });
                </script> 
            </main>



        </body>
    </html>
