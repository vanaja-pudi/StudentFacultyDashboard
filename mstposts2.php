<!DOCTYPE html>
					<html>
					<head>
						<title>FACULTY</title>
						<link href="logo.png"
							rel="icon"
							type="png">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="css/bootstrap.css">
					<link rel="stylesheet" href="css/all.css">
					<link rel="stylesheet" href="css/fontawesome.css">
					<link rel="stylesheet" href="faall.css">
					<link rel="stylesheet" href="all.css">
					</head>
					<body>
					<div class="sidenav">
					<br><br><br>
						<a href="mfaculty.php"id="tag"><i class="fa fa">Home</i></a>
						<button class="dropdown-btn"><i class="fa fa">TimeTable</i>
							<i class="fa fa"></i>
						  </button>
						  <div class="dropdown-container">
							<a href="mef-1.html">ME-1</a>
							<a href="mef-2.html">ME-2</a>
						  </div></br>
						<a href="mecpost.php"id="tag"><i class="fa fa">Posts</i></a>
						<button class="dropdown-btn"><i class="fa fa">Assignments</i>
						<i class="fa fa"></i>
					  </button>
					  <div class="dropdown-container">
						<a href="mstposts1.php">ME-1</a>
						<a href="mstposts2.php">ME-2</a>
					  </div></br>
						<a href="famec.php"id="tag"><i class="fa fa">logout</i></a>
					</div>
											<div class="main"><h1>Student Assignments</h1></div><br><br>
<div class="table-responsive" id="tableDb">
<table id="student_data" class="table table-striped table-bordered">   
<thead>
	<tr>
		<td><i class="fa fa"><b>S.no</b></i></td>
		<td><i class="fa fa"><b>ID NUM</b></i></td>
		<td><i class="fa fa"><b>Class</b></i></td>
		<td><i class="fa fa"><b>Description</b></i></td>
		<td><i class="fa fa"><b>File</b></i></td>
		<td><i class="fa fa"><b>Time</b></i></td>
	</tr>
</thead>
<?php
include 'mainphp.php';
session_start();
date_default_timezone_set('Asia/kolkata');
$openTime=strtotime(date('y-m-d h:i:s'));
$result=$con->query("select * from massignment order by idnum");
$cla='me-2';
$i=1;
$prof=$_SESSION["username"];
		while($rowDb=$result->fetch_array())
		{
			$clDb=$rowDb['section'];
			$profDb=$rowDb['prof'];
			if($clDb==$cla && $profDb==$prof)
			{
				?>
					<tr >
						<td><?php echo $i; $i++;?></td>
						<td><?php echo $rowDb["idnum"]?></td>		
						<td><?php echo $rowDb["section"]?></td>
						<td><?php echo $rowDb["cont"]?></td>
						<td><?php echo "<a href='".$rowDb['file']."' download>click here to download</a>";?></td>
						<td><?php echo $rowDb["time"]?></td>
					</tr>
					<?php
			}
		}?>
</table>
</div>
			<script>
					var dropdown = document.getElementsByClassName("dropdown-btn");
					var i;
					for (i = 0; i < dropdown.length; i++) {
					  dropdown[i].addEventListener("click", function() {
					  this.classList.toggle("active");
					  var dropdownContent = this.nextElementSibling;
					  if (dropdownContent.style.display === "block") {
					  dropdownContent.style.display = "none";
					  } else {
					  dropdownContent.style.display = "block";
					  }
					  });
					}
					</script>
					</body>
					</html>