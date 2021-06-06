<?php
session_start();
$id=$_POST['eid'];
include 'mainphp.php';
$cls=$_POST['eclass'];
$pd=$_POST['epd'];
$cpd=$_POST['ecpd'];
$que=$_POST['equestion'];
$ans=$_POST['eanswer'];
$_SESSION['mn']=$_POST['epn'];
if(strlen($id)==7)
{
	if((strlen($pd)>5)&&($pd==$cpd))
	{		
			$id_db=$con->query("select * from elearner");
			if($id_db->num_rows>0)
			{

				while($information=$id_db->fetch_assoc())
				{

					$dbId=$information['eid'];
					$class_db=$information['eclass'];
					if($class_db==NULL && $id==$dbId)
					{
							$con->query("update elearner set eclass='$cls',epwd='$pd',erpwd='$cpd',equery='$que',eans='$ans',ename='$_SESSION[mn]' where eid='$id'");
								include 'mainece.php';
					}
				}
				
				
			}
			else{
				echo"<script>alert('Idno is not recognized')</script>";
				include 'ecereg.php';
			
			}
	}
	else
	{
		echo "<script>alert('mismatch of passwords')</script>";
		include 'ecereg.php';
	}
}
else
{
	echo "<script>alert('Invalid User id')</script>";
	include 'ecereg.php';
}	

?>