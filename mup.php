<?php
include 'mainphp.php';
session_start();
$id=$_POST['mid'];
$cls=$_POST['mclass'];
$pd=$_POST['mpd'];
$cpd=$_POST['mcpd'];
$que=$_POST['mquestion'];
$ans=$_POST['manswer'];
$_SESSION['mn']=$_POST['mpn'];
if(strlen($id)==7)
{
	if((strlen($pd)>5)&&($pd==$cpd))
	{		
			$id_db=$con->query("select *from mlearner");
			if($id_db->num_rows>0)
			{

				while($information=$id_db->fetch_assoc())
				{

					$dbId=$information['mid'];
					$class_db=$information['mclass'];
					if($class_db==NULL && $id==$dbId)
					{
							$con->query("update mlearner set mclass='$cls',mpwd='$pd',mrpwd='$cpd',mquery='$que',mans='$ans',mname='$_SESSION[mn]' where mid='$id'");
				
								include 'mainmech.php';
					}
				}
				
				
			}
			else{
				echo"<script>alert('Idno is not recognized')</script>";
				include 'mecreg.php';
			
			}
	}
	else
	{
		echo "<script>alert('mismatch of passwords')</script>";
		include 'mecreg.php';
	}
}
else
{
	echo "<script>alert('Invalid User id')</script>";
	include 'mecreg.php';
}	

?>