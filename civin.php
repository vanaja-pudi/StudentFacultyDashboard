<?php
include 'mainphp.php';
session_start();
$sun=$_REQUEST['fun'];
$_SESSION["username"]=$sun;
$spd=$_REQUEST['fpd'];
$dun=$con->query("select * from prof where name='$sun'");
if($dun->num_rows>0)
{
	while($information=$dun->fetch_assoc())
	{
		$psdFromDb=$information['password'];
		$branch=$information['branch'];
	}
	if($spd==$psdFromDb)
	{
		if($branch=='civil')
		{
			?>
<!DOCTYPE html>
<html>
<head>
	<title>FACULTY</title>
<link href="logo.png"
rel="icon"
type="png">
<link rel="stylesheet" href="all.css">
<link rel="stylesheet" href="faall.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/dataTables.bootstrap.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/fontawesome.css">
</head>
<body>
<div class="sidenav">
<br><br><br>
	<a href="#"id="tag"><i class="fa fa">Home</i></a>
	<button class="dropdown-btn"><i class="fa fa">TimeTable</i>
		<i class="fa fa"></i>
	  </button>
	  <div class="dropdown-container">
		<a href="cef-1.html">CE-1</a>
		<a href="cef-2.html">CE-2</a>
		
	  </div></br>
	<a href="civpost.php"id="tag"><i class="fa fa">Posts</i></a>
	<button class="dropdown-btn"><i class="fa fa">Assignments</i>
	<i class="fa fa"></i>
  </button>
  <div class="dropdown-container">
	<a href="ceposts1.php">CE-1</a>
	<a href="ceposts2.php">CE-2</a>
  </div></br>
	<a href="faciv.php" id="tag"><i class="fa fa">logout</i></a>
</div>
	<div class="main"><h1>Leave a message </h1></div>
	<div class="container">
		<div class="left">
			<img src=msg1.webp class="imgbox">
		</div>
		<div class="right">
			<div class="formbox">
				<form action="message.php" method="POST" enctype="multipart/form-data">
					<input type="text" placeholder="Enter title" name="facName"><br><br><br>
					<select name="faClass">
						  <option value="ce-1">ce-2A</option>
						  <option value="ce-2">ce-2B</option>
						  <option value="all">All</option>
					</select><br><br><br>
					 <textarea placeholder="Convey your message" name="message"></textarea><br><br><br>
					<input type="file" name="image" value="file"><input type="submit" name="upload" value="SUBMIT">
				</form>
			</div>
		</div>
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
<?php
}else{echo "<script>alert('Sorry you are not a member in CIVIL')</script>";
include 'faciv.php';}
}
else
{
echo "<script>alert('Incorrect password')</script>";
include 'faciv.php';
}
}
else
{
echo "<script>alert('Invalid username')</script>";
include 'faciv.php';
}
?>