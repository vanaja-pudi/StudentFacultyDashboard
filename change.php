<?php
include 'mainphp.php';
$cun=$_POST['cun'];
$chpd=$_POST['chpd'];
$cnpd=$_POST['cnpd'];
$ffun=mysql_query("select password from faculty where username='$cun'");
$frow=mysql_num_rows($ffun);
if($frow>0)
{
	while($information=mysql_fetch_assoc($ffun))
	{
		$psdFromDb=$information['password'];
	}
	if($chpd==$psdFromDb)
	{	
		mysql_query("update faculty set password='$cnpd' where username='$cun'");
		echo '<script>alert("Successfully changed")</script>';
		include 'faclutysign.html';
	}
	else
	{
		echo '<script>alert("Invalid Password")</script>';
		include 'fpassword.html';
	}
}
else
{
	echo '<script>alert("Invalid Username")</script>';
		include 'fpassword.html';
}
?>