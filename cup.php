<?php
session_start();
$id=$_POST['civid'];
include 'mainphp.php';
$cls=$_POST['civclass'];
$pd=$_POST['civpd'];
$cpd=$_POST['civcpd'];
$que=$_POST['civquestion'];
$ans=$_POST['civanswer'];
$_SESSION['mn']=$_POST['civpn'];
if(strlen($id)==7)
{
	if((strlen($pd)>5)&&($pd==$cpd))
	{		
			$id_db=$con->query("select * from cilearner");
			if($id_db->num_rows>0)
			{

				while($information=$id_db->fetch_assoc())
				{

					$dbId=$information['ciid'];
					$class_db=$information['ciclass'];
					if($class_db==NULL && $id==$dbId)
					{
							$con->query("update cilearner set ciclass='$cls',cipwd='$pd',cirpwd='$cpd',ciquery='$que',cians='$ans',ciname='$_SESSION[mn]' where ciid='$id'");
				
								include 'mainciv.php';
					}
				}
				
				
			}
			else{
				echo"<script>alert('Idno is not recognized')</script>";
				include 'civreg.php';
			
			}
	}
	else
	{
		echo "<script>alert('mismatch of passwords')</script>";
		include "civreg.php";
	}
}
else
{
	echo "<script>alert('Invalid User id')</script>";
	include 'civreg.php';
}	
?>