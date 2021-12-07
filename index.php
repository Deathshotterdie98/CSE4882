<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <div class="banner-text">
    <h1>Car Sharing</h1>
    <p>Plan your next trip now</p>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
  <br><br><br><br><br>
  <div class="banner-btn">
    <a href="login.php">Login</a>
    <a href="signup.php">Sign Up</a>
  </div>

  <div class="banner-btn">
  <div id="sideNav">
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about_us.php">About Us</a></li>
        <li><a href="contact_us.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </div>
</div>
  <div id="menuBtn">
    <img src="img/menu.png" id="menu">
  </div>
  

<script>
    var menuBtn=document.getElementById("menuBtn")
    var sideNav=document.getElementById("sideNav")
    var menu=document.getElementById("menu")

        menuBtn.onclick=function(){
          if(sideNav.style.right=="-250px"){
            sideNav.style.right="0";
            }
          else{
            sideNav.style.right="-250px";
            
          }
}
  </script>

</body>
</html>
