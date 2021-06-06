<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
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
	<style>body{overflow: hidden;}</style>
</head>
<body>
<div class="sidenav">
<br><br><br>
	<a href="mstudent.php"id="tag"><i class="fa fa">Home</i></a>
	<button class="dropdown-btn"><i class="fa fa">TimeTable</i>
		<i class="fa fa"></i>
	  </button>
	  <div class="dropdown-container">
		<a href="me1.html">ME-1</a>
		<a href="me2.html">ME-2</a>
	  </div></br>
	<a href="msubmit.php"id="tag"><i class="fa fa">Post</i></a>
	<a href="mfac.html"id="tag"><i class="fa fa">Faculty-info</i></a>
	<a href="mainmech.php"id="tag"><i class="fa fa">logout</i></a>
</div>
<div class="main"><h1>Drop your Assignment</h1></div>
	<div class="container">
		<div class="left">
			<img src=msg1.webp class="imgbox">
		</div>
		<div class="right">
			<div class="formbox">
				<form action="massignment.php" method="POST" enctype="multipart/form-data">
					<select name="professor" required>
						  <option value="lavanya">B.Lavanya</option>
						  <option value="praveena">M.Praveena</option>
						  <option value="suneetha">C.Suneetha</option>
						  <option value="krishnamurthy">Ch.Krishnamurthy</option>
						  <option value="Chinnarao">P.Chinnarao</option>
						  <option value="kiranmai">S.Kiranmai</option>
						  <option value="raju">G.Raju</option>
						  <option value="ramvikas">P.Ramvikas</option>
						  <option value="suryaprakash">Ch.Suryaprakash</option>
						  <option value="srinivasnaik">A.Srinivasnaik</option>
						  <option value="shazad">Sk.Shazad</option>
						  <option value="velangani">B.Velangani</option>
					</select><br><br><br>
					 <textarea placeholder="Description reg your submission..." name="description" required></textarea><br><br><br>
					<input type="file" name="stufile"value="file" required><input type="submit" required name="stupload"value="SUBMIT">
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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
<script>
$(document).ready( function () {
 $('#student_data').DataTable( {
   "bSort": false
 } );
});
 </script>
</body>
</html>
<script>
	$(document).ready(function(){
		$('#student_data').DataTable();
	});
</script>