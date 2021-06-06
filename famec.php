<html>
<head>
<link rel="stylesheet" href="maincse.css">
<title>MEC-FACULTY</title>
<link href="logo.png"
	rel="icon"
	type="png">
<!--<link rel="stylesheet" href="style.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
	body{
	overflow: hidden;
	background: url(3.jpg);
	background-repeat: no-repeat;
	background-size: cover;	
}
</style>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<!--navigation bar starts-->
<section id="header">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				  <a href="#" class="navbar-brand"><h3>Student-Faculty Dashboard</h3></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
				aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto" id="mainmenu">
							<li class="nav-item ">
								<a href="mainciv.php" class="nav-link">CIVIL</a>
							</li>
							<li class="nav-item ">
								<a href="index.php" class="nav-link">CSE</a>
							</li>
							<li class="nav-item ">
								<a href="mainece.php" class="nav-link">ECE</a>
							</li>
							<li class="nav-item">
								<a href="mainmech.php" class="nav-link">MECH</a>
							</li>
							<li class="nav-item" id="hoveff">
								<a href="#" class="nav-link">Faculty</a>
								<ul class="navbar-nav ml-auto" id="submenu">
									<li class="nav-item"><a href="facse.php">cse</a></li>
									<li class="nav-item"><a href="faciv.php">civil</a></li>
									<li class="nav-item"><a href="faece.php">ece</a></li>
									<li class="nav-item "><a href="famec.php">mech</a></li>
								</ul>
							</li>
						</ul>
					</div>
			</div>
		</nav>
	</div>
</section>
<!-- navbar ends-->
<section>
  <div class="leftside"> 
	<div class="div_container">
		<div class="outer">
			<form class="box" action="mecin.php" method="POST">
				  <h3>Login</h3>
				  <input type="text" name="fun" placeholder="Username">
				  <input type="password" name="fpd" placeholder="Password">
				  <input type="submit" value="Signin">
			</form>
		</div>
	</div>
  </div>
 <div class="rightsid"> 
	<div class="text"></div>
</div>
 </section>
<script src="js/jquery.ripples-min.js" type="text/javascript"></script> 
<script src="main.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
</body>
</html>