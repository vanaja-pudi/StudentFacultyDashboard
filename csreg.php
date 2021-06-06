<html>
<head>
<link rel="stylesheet" href="reg.css">
<title>CSE-SIGNUP</title>
<link href="logo.png"
	rel="icon"
	type="png">
<!--<link rel="stylesheet" href="style.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
							<li class="nav-item active">
								<a href="#" class="nav-link">CSE</a>
							</li>
							<li class="nav-item ">
								<a href="mainece.php" class="nav-link">ECE</a>
							</li>
							<li class="nav-item ">
								<a href="mainmech.php" class="nav-link">MECH</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Faculty</a>
								<ul class="navbar-nav ml-auto" id="submenu">
									<li class="nav-item"><a href="facse.php" >cse</a></li>
									<li class="nav-item"><a href="faciv.php">civil</a></li>
									<li class="nav-item"><a href="faece.php">ece</a></li>
									<li class="nav-item"><a href="famec.php" >mech</a></li>
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
			<form class="box" action="signuup.php" method="POST">
				  <h3>SIGNUP</h3>
				       <input type="text" name="id" placeholder="Enter Idno"><br><br>
			<input type="text" name="pn" placeholder="Enter name"><br><br>
            <select name="class">
                        <option value="cse-1">cse-1</option>
                          <option value="cse-2">cse-2</option>
                          <option value="cse-3">cse-3</option>
                          <option value="cse-4">cse-4</option>
                          <option value="cse-5">cse-5</option>
                          <option value="cse-6">cse-6</option>
            </select><br><br>
             <input type="password" name="pd" placeholder="********"><br><br>
            <input type="password" name="cpd" placeholder="confirm password"><br><br>
			<select name="question" required>
						<option value=""hidden>Security question?</option>
                        <option value="Aim">Aim?</option>
                          <option value="pet name?">pet name?</option>
                          <option value="Inspiration">Inspiration</option>
                          <option value="lucky number?">lucky number?</option>
            </select><br><br>
			<input type="text" name="answer" placeholder="Enter answer"><br><br>
            <input type="submit" value="signup" >
			</form>
		</div>
	</div>
  </div>
  <div class="rightside"> 
  <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive" id="tableDb">
		<table class= "table table-bordered  mb-0"id="student_data"style="border:3px solid gray;overflow-x:hidden;">
			<thead><tr><th style="color:black;font-weight:bold;background: linear-gradient(57deg, gray, white); font-size:20px;font-family:cooper;text-align:center;box-shadow:0 30px 30px rgba(0.5,0,1,0);">
			NOTIFICATIONS TO ALL</th></tr>
			</thead>
				<?php
					include 'mainphp.php';
					$msgs=$con->query("select *from calerts where section='all' order by sno desc");
					date_default_timezone_set('Asia/kolkata');
					$openTime=strtotime(date('y-m-d h:i:s'));
					
					while($result=$msgs->fetch_array())
					{
						?>
						<tr>
							<td style="color:white; font-size:15px;" ><h6><?php echo $result['msg'];
								$extension=$result['file'];
								$actExt=explode('.',$extension);
								if($actExt[2]!='')
								{
									?><a href="<?php echo $result['file'];?>" target="_blank"download><img src="newgif.gif" width="40px" height="30px>"></a><?php
								}
								else{echo'';}?></h6></td>
						</tr><?php
					}?>
		</table>
	</div>
	</div>
 </section>
</body>
</html>