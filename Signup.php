
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Sign In</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
  <link href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Favicons -->

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
             .navbar-brand {
    font-family: "Ubuntu";
    font-size: 2.5rem;
    font-weight: bold;
    margin-left: 3.5%;
    margin-top:0;
    
  }
      
        .A{
            border-radius: 3%;
            width: 30%;
            height: 93%;
            position:absolute;
                left :0%;
                right:35%;
                    top:5%;
                    padding-bottom:0%; 
                    padding-top: 0.5%;
                   
   
            color:#eeebdd;
            background-color:rgba(27,23,23,0.9);
         
            
        } .box {
                  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.70), 0 6px 20px 0 rgba(0, 0, 0, 0.70);
            }
  
        
        
        .approval{
                    width:70%;
                    
                    position:relative;
                    left:15%;
                    right:15%;
                    background-color: #630000;
                    border-color: #1b1717;
                    color:#eeebdd;

                }
        body{
            background-image: url(Login-Background.jpg);
        overflow: hidden;
        }
        .img{ 
                    
                  filter: brightness(50%);
                  
                }
        .Logwidth{
            margin: 5%;
            margin-top: 7%;
            Color:#1b1717;
         
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
  margin-top:3%; 
    }
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
    margin-bottom: 0%;
}
        
        
    </style>

    
    <!-- Custom styles for this template -->
    <link href="bootstrap-5.0.0-beta3-dist/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
     
<main class="form-signin">
       <img src="Login-Background.jpg" class="img" alt="alt"/>
    <div class="A box" id="two">
        <h1 class="navbar-brand h3 mb-3 fw-normal">Fitos</h1>
    <form method="post" action="checkSignup.php" >
         <?php
                    if (isset($_GET['error'])) {
                        echo "<div class='alert alert-danger approval' id='H' role='alert' style='margin-bottom=2%'>" . $_GET['error'] . "</div>";
                    }else if (isset($_GET['Signup'])) {
                        echo "<div class='alert alert-success approval' id='H' role='alert'>" . $_GET['Signup'] . "</div>";
                    }else if (isset($_GET['notMatch'])) {
                        echo "<div class='alert alert-danger approval' id='H' role='alert'>" . $_GET['notMatch'] . "</div>";
                    }
                    ?>
    
    <h2 class="h3 mb-3 fw-normal" Style="margin-top:0.5%; margin-bottom:0.5%; ">Sign Up</h2>

    
    <div class="form-floating Logwidth">
        
        
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required autofocus>
      <label for="floatingInput">Enter your email address</label>
    </div>
    <div class="form-floating Logwidth">
        <input name="pwd1" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Create a Password</label>
    </div>
    <div class="form-floating Logwidth">
        <input name="pwd2" type="password" class="form-control" id="floatingPassword" placeholder="Confirm password" required>
      <label for="floatingPassword">Confirm Password</label>
    </div>
  <div class="form-floating Logwidth">
        <input name="name"  class="form-control" id="floatingPassword" placeholder="Name" required>
        <label for="floatingPassword" class="Q">What should we call you?</label>
    </div>
     <p class="Signup">
            Already have account? <a href="Login.php">Sign in now</a>
         </p>
    
    <button class="btn" type="submit">Sign Up</button>
    
  </form>
        </div>
    <script> 
        $(document).ready(function(){
            $("#two").animate({
                left: '35%'
            });
        });
    </script> 
</main>


    
  </body>
</html>
