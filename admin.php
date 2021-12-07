<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	
  <div class="banner-text">
  <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>

	<div class="banner-btn">
  <div id="sideNav">
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about_us.php">About Us</a></li>
        <li><a href="contact_us.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="logout.php">Logout</a></li>
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