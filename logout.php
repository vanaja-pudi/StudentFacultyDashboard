<html>
<?php
include 'mainphp.php';
session_start();
$userId=$_SESSION['id'];
mysql_query("update student set security=0 where idno='$userId'");
?>
<head>
<title>CSE</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header class="site-header clearfix">
 <nav>
  <div class="logo">
  <div class="img"><img src="cse.jpg" height="40" width="40">
  </div>
  <h1><span>COMPUTER SCIENCE AND ENGINEERING</span></h1>
  </div>
  <div class="menu"> 
   <ul>
    <li></li>
    <li><h4><a href="signin.html">STUDENT</a></h4></li>
    <li><h2><a href="#">FACULTY</a></h2></li>
    <li><h3><a href="aboutus.html">ABOUTUS</a></h3></li>
   </ul>
  </div>
 </nav>
 <section>
  <div class="leftside"> 
   <img src="image2.jfif">
  </div>
<div class="rightside"> 
  <div class="text"></div>
   <p><i> "machinery and equipment developed from the application of 
   scientific knowledge..”</p></p>
  </div>
 </section>
</header>
		 <script src="jquery.ripples-min.js" type="text/javascript"></script> 
         <script src="typed.min.js" type="text/javascript"></script>
         <script src="main.js" type="text/javascript"></script>
</body>
</html>


    