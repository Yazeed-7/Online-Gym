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
            
            #Q{
                background-color:rgba(27,23,23,0.9);
                border-radius: 2%;
                  width:99%;
                position: relative;
                left:0.5%;
                right:0.5%;
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
           
      #loading, #results {
        display: none;
      }
      #loading {
       
      }
      
      .w{
            width: 120px;
  height: auto;
  background-color: background-color:rgba(27,23,23,0.9);
      }
      .pt-0{
          padding: 0;
      }
      .col-sm-2{
       padding:0;   
      }

        </style>


        <!-- Custom styles for this template -->

    </head>
    <body >

        <!<!-- Navbar-section -->
        <div class="containar-fluid">
           <nav class="navbar navbar-expand-lg navbar-dark" style="padding-bottom: 15px;">
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
        
        <h2 style="text-align:center; margin-top:0%;  margin-bottom:15px;">Count calories</h2>
        <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="card card-body text-center mt-5" id="Q">
            <h1 class="heading display-5 pb-3">Calorie Calculator</h1>
            <form id="calorie-form">

              <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="age" placeholder="Enter your age">
                </div>
              </div>

              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                  <div class="col-sm-10" id="form-radio">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="male" name="customRadioInline1" class="custom-control-input" checked="checked">
                      <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="female" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="female">Female</label>
                    </div>  
                  </div>
                </div> 
              </fieldset> 

              <div class="form-group row">
                <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="weight" placeholder="In kilograms">
                </div>
              </div>

              <div class="form-group row">
                <label for="height" class="col-sm-2 col-form-label">Height</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="height" placeholder="In centimeters">
                </div>
              </div>
              
              <div class="form-group row" >
                <label class="col-form-label col-sm-2 pt-0" id="P">Activity</label>
                <select class="custom-select col-sm-10" id="list">
                  <option selected value="1">Sedentary (little or no exercise)</option>
                  <option value="2">Lightly active (light exercise/sports 1-3 days/week)</option>
                  <option value="3">Moderately active (moderate exercise/sports 3-5 days/week)</option>
                  <option value="4">Very active (hard exercise/sports 6-7 days a week)</option>
                  <option value="5">Extra active (very hard exercise/sports & physical job or 2x training)</option>
                </select>
              </div>

              <div class="form-group">
                <input type="submit" value="Calculate" class="btn btn-dark btn-block">
              </div>

            </form>

            <div id="loading">
              <img  class="w" src="Loading.gif" alt="">
            </div>

            <div id="results" class="pt-4">
              <h5>Total Calories</h5>
              <div class="form-group">
                <div class="input-group">
                  <input type="number" class="form-control" id="total-calories" disabled>
                </div>
              </div>                       
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="app.js"></script>
       
        <br>
        <br>
        <div style="height:20px margin-top:3%">
           
        </div>

       


    </body>
</html>
