<?php
include 'mainphp.php';
session_start();
$sid=$_POST['sid'];
$_SESSION["id"]=$sid;
$spd=$_POST['spd'];
$did=$con->query("select * from cilearner where ciid='$sid'");
if($con->connect_error){
	die("connection failed :".$con->connection_error);
}
if($did->num_rows>0)
{
	while($data=$did->fetch_assoc())
	{
		$pdFromDb=$data['cipwd'];
		$classs=$data['ciclass'];
		$name=$data['ciname'];
		
	}
	if($classs!=NULL)
	{	
	if($spd==$pdFromDb)
	{
				?>
				<html>
				<head>
				<title>STUDENT</title>
				<link href="logo.png"
				rel="icon"
				type="png">
				<link rel="stylesheet" href="all.css">
				<meta="viewport" content="width=device-width,initial-scale=1">
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
				<link rel="stylesheet" href="css/bootstrap.css">
				<link rel="stylesheet" href="css/dataTables.bootstrap.css">
				<link rel="stylesheet" href="css/all.css">
				<link rel="stylesheet" href="css/fontawesome.css">
				<link rel="stylesheet" href="file:///C:/xampp/htdocs/Dream/fontawesome-free-5.11.2-web(1)/fontawesome-free-5.11.2-web/css/all.css">
				</head>
				<body>
				<div class="sidenav">
				<br><br><br>
					<a href="#"id="tag"><i class="fa fa">Home</i></a>
					<button class="dropdown-btn"><i class="fa fa">TimeTable</i>
						<i class="fa fa"></i>
					  </button>
					  <div class="dropdown-container">
						<a href="ce-1.html">CE-1</a>
						<a href="ce-2.html">CE-2</a>
					  </div></br>
					<a href="csubmit.php"id="tag"><i class="fa fa">Post</i></a>
					<a href="cifac.html"id="tag"><i class="fa fa">Faculty</i></a>
					<a href="mainciv.php"id="tag"><i class="fa fa">logout</i></a>
				</div></br>
				<div class="div_header">
	<h1>Welcome To Student-Faculty Dashboard</h1>
	<h2 class="nameSt"><?php $sid=$_SESSION["id"]; echo $name;?></h2>
	</div>
				<div class="table-responsive" id="tableDb">
				<table id="student_data" class="table table-striped table-bordered">   
				<thead>
					<tr>
						<td><i class="fa fa"><b>CLASS</b></i></td>
						<td><i class="fa fa"><b>TITLE</b></i></td>
						<td><i class="fa fa"><b>-POSTED BY</b></i></td>
						<td><i class="fa fa"><b>Posted time</b></i></td>
					</tr>
				</thead>
				<?php
				
				date_default_timezone_set('Asia/kolkata');
				$openTime=strtotime(date('y-m-d h:i:s'));
				$result=$con->query("select * from cialerts order by sno desc");
				$stuClass=$con->query("select ciclass from cilearner where ciid='$sid'");
				while($xyz=$stuClass->fetch_assoc())
				{
					$cl=$xyz['ciclass'];
				}
						while($rowDb=$result->fetch_array())
						{
							$msgTime=$rowDb['clock'];
							$timeDiff=$openTime-strtotime($msgTime);
							$clDb=$rowDb['section'];
							if($clDb==$cl||$clDb=='all')
							{
								?>
									<tr >
										<td><?php echo $rowDb["section"]?></td>		
										<td><h5 data-target="#<?php echo $rowDb['sno'];?>" data-toggle="modal" ><?php echo $rowDb["title"]; if(($timeDiff/86400)<3)?>&nbsp;<img src="newgif.gif" width="40px" height="30px"></h5></td>
										<td><?php echo $rowDb["name"]?></td>
										<td><?php echo $rowDb["clock"]?></td>
									</tr>
				<div class="modal fade" data-keyboard="false" data-backdrop="static"id="<?php echo $rowDb['sno'];?>" tabindex="-1">
					<div class="modal-dialog modal-megamenu">
						<div class="modal-content">
							<div class="modal-header">
								<button class="btn btn-primary">NOTIFICATIONS</button><button class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
							<?php
								echo $rowDb['msg'];
								?>
							</div>
							<div class="modal-footer">
							<?php
								$extension=$rowDb['file'];
								$actExt=explode('.',$extension);
								if($actExt[2]!='')
								{
									echo "<a href='".$rowDb['file']."' target='_blank' download>click here to download</a>";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" data-dismiss="modal">close</button><?php
								}else{
									?><button class="btn btn-primary" data-dismiss="modal">close</button><?php
								}?>
							</div>
						</div>
					</div><?php
							}
						}?>
				</div>
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
				<script type="text/javascript" src="js/jquery.js"></script>
				<script type="text/javascript" src="js/jquery.dataTables.js"></script>
				<script type="text/javascript" src="js/bootstrap.js"></script>
				<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
				<script>
					function showDetails(button){
						var cus=button.id;
					}
				</script>
				<script>
				$(document).ready( function () {
				 $('#student_data').DataTable( {
				   "bSort": false
				 } );
			   } );
			   </script>
				</body>
				</html>
				<script>
					$(document).ready(function(){
						$('#student_data').DataTable();
					});
				</script>
						<?php
	}
	else
	{	
		echo '<script type="text/javascript"> alert("check your password")</script>';
		include "mainciv.php";
	}
}
else
{
	echo '<script> alert("Sorry u r not registered")</script>';
	include "mainciv.php";
}
}
else{
	echo '<script type="text/javascript"> alert("Invalid userid")</script>';
	include "mainciv.php";
}
?>