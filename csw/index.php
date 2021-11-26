<?php
session_start();
include('connection.php');

//logout
include('logout.php');

//remember me
include('remember.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Sharing Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="styling.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/sunny/jquery-ui.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCwJ 2Vepe9L2Miuh7QH87SR_RItIXHlX6Q"></script>
      <style>
          /*margin top for myContainer*/
          #myContainer {
              margin-top: 50px;
              text-align: center;
              color: black;
          }
          
          /*header size*/
          #myContainer h1{
              font-size: 5em;
          }
          
          .bold{
              font-weight: bold;
          }
          #googleMap{
              width: 100%;
              height: 30vh;
              margin: 10px auto;
          }
          .signup{
              margin-top: 20px;
          }
          #spinner{
              display: none;
              position: fixed;
              top: 0;
              left: 0;
              bottom: 0;
              right: 0;
              height: 85px;
              text-align: center;
              margin: auto;
              z-index: 1100;
          }
          #results{
            margin-bottom: 100px;   
          }
          .driver{
            font-size:1.5em;
            text-transform:capitalize;
            text-align: center;
          }
          .price{
            font-size:1.5em;
          }
          .departure, .destination{
            font-size:1.5em;
          }
          .perseat{
            font-size:0.5em;
          }
          .journey{
            text-align:left; 
          }
          .journey2{
            text-align:right; 
          }
          .time{
            margin-top:10px;  
          }
          .telephone{
            margin-top:10px;
          }
          .seatsavailable{
            font-size:0.7em; 
            margin-top:5px;
          }
          .moreinfo{
            text-align:left; 
          }
          .aboutme{
            border-top:1px solid grey;
            margin-top:15px;
            padding-top:5px;
          }
          #message{
            margin-top:20px;
          }
          .journeysummary{
            text-align:left; 
            font-size:1.5em;
          }
          .noresults{
            text-align:center;  
            font-size:1.5em;
          }
          
          .previewing{
              max-width: 100%;
              height: auto;
              border-radius: 50%;
          }
          .previewing2{
              margin: auto;
              height: 20px;
              border-radius: 50%;
          }
          
      
      </style>
  </head>
  <body>
    <!--Navigation Bar-->  
    <?php
    if(isset($_SESSION["user_id"])){
        include("navigationbarconnected.php");
    }else{
        include("navigationbarnotconnected.php");
    }  
    ?>
    
      <div class="container-fluid" id="myContainer">
          <div class="row">
              <div class="col-md-6 col-md-offset-3">
                  <h1>Plan your next trip now!</h1>
                  <p class="lead">Save Money! Save the Environment!</p>
                  <p class="bold">You can save up to 3000$ a year using car sharing!
                  </p>
                  <!--Search Form-->
                  <form class="form-inline" method="get" id="searchform">
                      <div class="form-group">
                          <label class="sr-only" for="departure">Departure:</label>
                          <input type="text" class="form-control" id="departure" placeholder="Departure" name="departure">
                      </div>
                      <div class="form-group">
                          <label class="sr-only"></label>
                          <input type="text" class="form-control" id="destination" placeholder="Destination" name="destination">
                      </div>
                      <input type="submit" value="Search" class="btn btn-lg green" name="search">
                  
                  </form>
                  <!--Search Form End-->
                  
                  <!--Google Map-->
                  <div id="googleMap"></div>
                  
                  <!--Sign up button-->
                 <li><a href="signup.php" type="submit" class="btn btn-lg green">Sign Up</a></li>
                  <div id="results">
                   
                </div>
              
              </div>
          
          </div>
      
      </div>
      

    <!-- Footer-->
      <div class="footer">
          <div class="container">
              <p>DevelopmentIsland.com Copyright &copy; 2015-<?php $today = date("Y"); echo $today?>.</p>
          </div>
      </div>
      
      <!--Spinner-->
      <div id="spinner">
         <img src='ajax-loader.gif' width="64" height="64" />
         <br>Loading..
      </div>
      
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="map.js"></script>  
    <script src="javascript.js"></script>
  </body>
</html>