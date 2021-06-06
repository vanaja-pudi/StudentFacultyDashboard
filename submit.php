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
	<a href="student.php"id="tag"><i class="fa fa">Home</i></a>
	<button class="dropdown-btn"><i class="fa fa">TimeTable</i>
		<i class="fa fa"></i>
	  </button>
	  <div class="dropdown-container">
		<a href="cse1.html">CSE-1</a>
		<a href="cse2.html">CSE-2</a>
		<a href="cse3.html">CSE-3</a>
		<a href="cse4.html">CSE-4</a>
		<a href="cse5.html">CSE-5</a>
		<a href="cse6.html">CSE-6</a>
	  </div></br>
	<a href="submit.php"id="tag"><i class="fa fa">Post</i></a>
	<a href="fac.html"id="tag"><i class="fa fa">Faculty-info</i></a>
	<a href="index.php"id="tag"><i class="fa fa">logout</i></a>
</div>
<div class="main"><h1>Drop your Assignment</h1></div>
	<div class="container">
		<div class="left">
			<img src=msg1.webp class="imgbox">
		</div>
		<div class="right">
			<div class="formbox">
				<form action="assignment.php" method="POST" enctype="multipart/form-data">
					<select name="professor" required>
						  <option value="sateeshkumar">S.Sateeshkumar</option>
						  <option value="seshakumar">N.Seshakumar</option>
						  <option value="srilatha">N.Srilatha</option>
						  <option value="suneetha">C.Suneetha</option>
						  <option value="jayakrishna">G.Jayakrishna</option>
						  <option value="indraja">M.Indraja</option>
						  <option value="vijayabhaskar">K.vijayabhaskar</option>
						  <option value="satishkumar">Ch.Satishkumar</option>
						  <option value="anilkumar">T.Anilkumar</option>
						  <option value="subhashyadav">S.subhashyadav</option>
						  <option value="vishnupriyanka">J.Vishnupriyanka</option>
						  <option value="lakshmisri">S.LakshmiSri</option>
						  <option value="srikanth">N.Srikanth</option>
						  <option value="roopa">M.Roopa</option>
						  <option value="krishnaveni">A.Krishnaveni</option>
						  <option value="naveenkumar">N.Naveenkumar</option>
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