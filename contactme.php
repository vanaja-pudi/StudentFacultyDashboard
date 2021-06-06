<?php
if(isset($_POST['name'])&&isset($_POST['email']]){
  $name=$_POST['name'];
  $to=$_POST['email'];
  $doubt=$_POST['subject'];
  $sub=$_POST['Alert from stu-fac dashboard'];
  $body='<html>
            <body>
                <h2>Alerts</h2>
                <br>
                  <p>Name:<br>'.$name.'</p>
                  <p>Sub:<br>'.$doubt.'</p>
              </body>
            </html>';
$headers="From: "$name."\r\n";
$headers="MIME-Version: 1.0\r\n";
$headers="Contact-type :text/html; charset-utf-8";
//send
$send=mail($to,$sub,$body,$headers);
if($send){
  echo '<br>';
  echo 'Thanks for contacting me. I will be with you shortly';
}else{
  echo 'error';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
   <style>
	    body{
	    	background-image: url(c.jpeg);
	    	background-size:cover;
	    }
	    hr{
	    	background: white;	
	    }

		.contact-form{
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 100px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
		}
   </style>
  </head>
<body>

</section>
<div class="container contact-form">
	<h1>Contact form</h1>
	<hr>

	<div class="row">
   
       <div class="col-md-6">
       	<address>SAIVANAJA</address>
       	<p>Email:- s160625@rguktsklm.ac.in</p>
       	<p>Phone:- 7285983024</p><br><br>
       	<address>DIVYALOCHANA</address>
       	<p>Email:- s160705@rguktsklm.ac.in</p>
       	<p>Phone:- 9666436979</p>
       </div>
       <div class="col-md-6">
       	<form action="" method="POST">
         <div class="form-group">
         	<label>Name</label>
         	<input type="text" class="form-control" name="name">
         </div>

         <div class="form-group">
         	<label>Email</label>
         	<input type="text" class="form-control" name="email">
         </div>

         <div class="form-group">
         	<label>Massage</label>
         	<textarea  class="form-control" rows="7" name="subject"></textarea>
         </div>

         <div class="form-group">
         	<button class="btn btn-primary btn-block">Send</button>
         </div>
       </form>
       </div>

    </div>
</div>
</body>
</html>
