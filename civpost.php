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
						<a href="cfaculty.php"id="tag"><i class="fa fa">Home</i></a>
						<button class="dropdown-btn"><i class="fa fa">TimeTable</i>
							<i class="fa fa"></i>
						  </button>
						  <div class="dropdown-container">
							<a href="cef-1.html">CE-1</a>
							<a href="cef-2.html">CE-2</a>
							
						  </div></br>
						<a href="#"id="tag"><i class="fa fa">Posts</i></a>
						<button class="dropdown-btn"><i class="fa fa">Assignments</i>
						<i class="fa fa"></i>
					  </button>
					  <div class="dropdown-container">
						<a href="ceposts1.php">CE-1</a>
						<a href="ceposts2.php">CE-2</a>
					  </div></br>
						<a href="faciv.php" id="tag"><i class="fa fa">logout</i></a>
					</div>
					<div class="main"><h1 style="text-transform:capitalize; font-weight:bold;">Your Uploads</h1></div>
<div class="table-responsive" id="tableDb">
	<table id="student_data" class="table table-striped table-bordered">   
	<thead>
		<tr>
			<td><i class="fa-fa"><b>Sno</b></i></td>
			<td><i class="fa fa"><b>Title-Message</b></i></td>
			<td><i class="fa fa"><b>CLASS</b></i></td>
		</tr>
	</thead>
	<?php
	include 'mainphp.php';
	session_start();
	$username=$_SESSION["username"];
	$posts=$con->query("select *from cialerts where name='$username'order by sno desc");
	$rows=$posts->num_rows;
	if($posts->num_rows>0)
	{
		$i=1;
		while($i<=$rows)
		{
		while($actualData=$posts->fetch_assoc())
		{
			?>
			<tr>
				<td><?php echo $i; $i++;?></td>
				<td><?php echo $actualData['title'].' - '.$actualData['msg'];?></td>
				<td><?php echo $actualData['section'];?></td>
			</tr>
			<?php
		}
		}
	}else{echo 'not yet posted any messages';}
	?>
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

