<?php
include 'mainphp.php';
session_start();
if(isset($_POST['upload'])){
	$file=$_FILES['image'];
	$fileName=$file['name'];
	$fileSize=$file['size'];
	$fileType=$file['type'];
	$error=$file['error'];
	$fileTmpName=$file['tmp_name'];
	date_default_timezone_set("Asia/kolkata");
	$clock=date('y/m/d h:i:s');
	$_SESSION['postTime']=$clock;
	$fileExt=explode('.',$fileName);
	$fileActExt=strtolower(end($fileExt));	
	if($error===0)
	{	
		if($fileSize<5000000)
		{
		$fileNameNew=uniqid('',true).".".$fileActExt;
		$fileDestination='uploads/'.$fileNameNew;
		move_uploaded_file($fileTmpName,$fileDestination);
		header("location: message.php?upload success");
		$username=$_SESSION["username"];
		$facName=$_POST["facName"];
		$faClass=$_POST["faClass"];
		$message=$_POST["message"];
		echo"<html><head><script type='text/javascript'>alert('Submitted successfully')</script></head></html>";
			$con->query("insert into calerts(section,name,title,msg,file,clock) values('$faClass','$username','$facName','$message','$fileDestination','$clock')");
			
		}else{
			echo"<html><head><script>alert('file size is too big')</script></head></html>";
			include 'faculty.php';
		}
	}else{
			echo"<html><head><script>alert('error=1 , while uploading this file')</script></head></html>";
			include'faculty.php';
	}
}
?>
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
	<a href="#"id="tag"><i class="fa fa">Home</i></a>
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
	<a href="fac1.html"id="tag"><i class="fa fa">Faculty</i></a>
	<a href="post.php"id="tag"><i class="fa fa">Posts</i></a>
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
	<a href="facse.php"id="tag"><i class="fa fa">logout</i></a>
</div>
	<div class="main"><h1>LEAVE A MESSAGE</h1></div>
	<div class="container">
		<div class="left">
			<img src=msg1.webp class="imgbox">
		</div>
		<div class="right">
			<div class="formbox">
				<form action="message.php" method="POST" enctype="multipart/form-data">
					<input type="text" placeholder="Enter title" name="facName"><br><br><br>
					<select name="faClass">
						  <option value="cse-1">cse-1</option>
						  <option value="cse-2">cse-2</option>
						  <option value="cse-3">cse-3</option>
						  <option value="cse-4">cse-4</option>
						  <option value="cse-5">cse-5</option>
						  <option value="cse-6">cse-6</option>
						  <option value="all">All</option>
					</select><br><br><br>
					 <textarea placeholder="Convey your message" name="message"></textarea><br><br><br>
					<input type="file" name="image" value="file"><input type="submit" name="upload"value="SUBMIT">
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