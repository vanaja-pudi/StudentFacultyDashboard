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
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/fontawesome.css">
<link rel="stylesheet" href="faall.css">
<link rel="stylesheet" href="all.css">
</head>
<body>
<div class="sidenav">
<br><br><br>
	<a href="faculty.php"id="tag"><i class="fa fa">Home</i></a>
	<button class="dropdown-btn"><i class="fa fa">TimeTable</i>
		<i class="fa fa"></i>
	  </button>
	  <div class="dropdown-container">
		<a href="cs-1.html">CSE-1</a>
		<a href="cs-2.html">CSE-2</a>
		<a href="cs-3.html">CSE-3</a>
		<a href="cs-4.html">CSE-4</a>
		<a href="cs-5.html">CSE-5</a>
		<a href="cs-6.html">CSE-6</a>
	  </div></br>
	<a href="#"id="tag"><i class="fa fa">Posts</i></a>
	<button class="dropdown-btn"><i class="fa fa">Assignments</i>
		<i class="fa fa"></i>
	  </button>
	  <div class="dropdown-container">
		<a href="stposts1.php">CSE-1</a>
		<a href="stposts2.php">CSE-2</a>
		<a href="stposts3.php">CSE-3</a>
		<a href="stposts4.php">CSE-4</a>
		<a href="stposts5.php">CSE-5</a>
		<a href="stposts6.php">CSE-6</a>
	  </div></br>
	<a href="index.php"id="tag"><i class="fa fa">logout</i></a>
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
	$posts=$con->query("select *from calerts where name='$username'order by sno desc");
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

