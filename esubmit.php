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
	<a href="estudent.php"id="tag"><i class="fa fa">Home</i></a>
	<button class="dropdown-btn"><i class="fa fa">TimeTable</i>
		<i class="fa fa"></i>
	  </button>
	  <div class="dropdown-container">
		<a href="ece1.html">ECE-1</a>
		<a href="ece2.html">ECE-2</a>
		<a href="ece3.html">ECE-3</a>
		<a href="ece4.html">ECE-4</a>
		<a href="ece5.html">ECE-5</a>
		<a href="ece6.html">ECE-6</a>
	  </div></br>
	<a href="#"id="tag"><i class="fa fa">Post</i></a>
	<a href="efac.html"id="tag"><i class="fa fa">Faculty-info</i></a>
	<a href="mainece.php"id="tag"><i class="fa fa">logout</i></a>
</div>
<div class="main"><h1>Drop your Assignment</h1></div>
	<div class="container">
		<div class="left">
			<img src=msg1.webp class="imgbox">
		</div>
		<div class="right">
			<div class="formbox">
				<form action="eassignment.php" method="POST" enctype="multipart/form-data">
					<select name="professor" required>
						  <option value="ramesh babu">N.Ramesh babu</option>
						  <option value="santhosh kumar">N.Santhosh kumar</option>
						  <option value="srinivas gagandeep">T.Srinivas Gagandeep</option>
						  <option value="sudharani">K.Sudharani</option>
						  <option value="harshasri">K.Harshasri</option>
						  <option value="naga subrahmanyam">B.Naga Subrahmanyam</option>
						  <option value="jayanthi">K.Jayanthi</option>
						  <option value="gowthami">P.Gowthami</option>
						  <option value="sravani">B.Sravani</option>
						  <option value="tirupathamma">M.V.Tirupathamma</option>
						  <option value="tirumala">P.Tirumala</option>
						  <option value="ramu">M.Ramu</option>
						  <option value="sashibhushanrao">V.SashiBhushanRao</option>
						  <option value="chinnari">J.Chinnari</option>
						  <option value="vasundara">M.Vasundara</option>
						  <option value="venkataramana">G.Venkataramana</option>
						  <option value="baburao">L.Baburao</option>
						  <option value="usharani">V.Usharani</option>
						  <option value="sravanika">B.sravanika</option>
						  <option value="saroja">V.saroja</option>
						  <option value="sathishkumar">Y.Sathishkumar</option>
						  <option value="ramanamurthy">Y.Ramanamurthy</option>
						  <option value="tejaswi">P.Tejaswi</option>
						  <option value="naveen">B.Naveen</option>
						  <option value="mounika">D.Mounika</option>
						  <option value="lakshminarayana">K.Lakshminarayana</option>
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