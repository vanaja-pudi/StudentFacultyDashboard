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
<a href="es-1.html">ECE-1</a>
<a href="es-2.html">ECE-2</a>
<a href="es-3.html">ECE-3</a>
<a href="es-4.html">ECE-4</a>
<a href="es-5.html">ECE-5</a>
<a href="es-6.html">ECE-6</a>
</div></br>
<a href="post.php"id="tag"><i class="fa fa">Posts</i></a>
<button class="dropdown-btn"><i class="fa fa">Assignments</i>
<i class="fa fa"></i>
</button>
<div class="dropdown-container">
<a href="estposts1.php">ECE-1</a>
<a href="estposts2.php">ECE-2</a>
<a href="estposts1.php">ECE-3</a>
<a href="estposts2.php">ECE-4</a>
<a href="estposts1.php">ECE-5</a>
<a href="estposts2.php">ECE-6</a>
</div></br>
<a href="faece.php"id="tag"><i class="fa fa">logout</i></a>
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
			  <option value="me-1">ECE-1</option>
			  <option value="me-2">ECE-2</option>
			  <option value="me-1">ECE-3</option>
			  <option value="me-2">ECE-4</option>
			  <option value="me-1">ECE-5</option>
			  <option value="me-2">ECE-6</option>
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