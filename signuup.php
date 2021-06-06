<?php
session_start();
$id=$_POST['id'];
include 'mainphp.php';
$cls=$_POST['class'];
$pd=$_POST['pd'];
$cpd=$_POST['cpd'];
$que=$_POST['question'];
$ans=$_POST['answer'];
$_SESSION['mn']=$_POST['pn'];
if(strlen($id)==7)
{
	if((strlen($pd)>5)&&($pd==$cpd))
	{		
			$id_db=$con->query("select * from clearner");
			if($id_db->num_rows>0)
			{

				while($information=$id_db->fetch_assoc())
				{

					$dbId=$information['cid'];
					$class_db=$information['class'];
					if($class_db==NULL && $id==$dbId)
					{
							$con->query("update clearner set class='$cls',pwd='$pd',rpwd='$cpd',cquery='$que',cans='$ans',cname='$_SESSION[mn]' where cid='$id'");
				
								include 'maincse.php';
					}
				}
				
				
			}
			else{
				echo"<script>alert('Idno is not recognized')</script>";
				include 'csereg.php';
			
			}
	}
	else
	{
		echo "<script>alert('mismatch of passwords')</script>";
		include 'csereg.php';
	}
}
else
{
	echo "<script>alert('Invalid User id')</script>";
	include 'csereg.php';
}	

?>