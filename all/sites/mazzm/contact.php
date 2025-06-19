<?php $menu = 'co'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 
	include 'controll/metakeys.html';
?>

<link rel="shortcut icon" href="assests/image/mazzm.png">
<title>Contact Me  | M.Assam | Mazzm.com</title>
<link type="text/css" href="assests/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="assests/css/bootstrap-theme.min.css" rel="stylesheet">

<link type="text/css" href="assests/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link type="text/css" href="assests/css/ct-navbar.css" rel="stylesheet" />

<link type="text/css" href="assests/css/contact.css" rel="stylesheet">
<link type="text/css" href="assests/css/contact_responsive.css" rel="stylesheet" media="screen">
</head>

<body>

 <!-- Navigation -->
   		<?php include 'menu.php' ?>
  <!-- navigation end -->
    

<div class="panel panel-default">
  <div class="panel-body">


<h1><center>Contact Me</center></h1>

<div id="contact"><center>
	<div class="m">
    		<div><b>Dubai</b></div>
<div><a href="tel:+971569048557">+971 5690 48557</a></div>
            <div></div>
    </div>
	<div class="l">
            <div><b>Qatar</b></div>
             <div>-</div>
	</div>
    
	<div class="r">
            <div><b>Sri Lanka</b></div>
            <div><a href="tel:+94777977422">+94 777 977 422</a></div>
    </div></center>
</div>
<hr>   
   
<?php
	 if(isset($_POST['submit']))
	 {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$query = $_POST['message'];
		$email_from = $name.'<'.$email.'>';
	
	 $to="assammail@gmail.com";
	 $subject="Contact from mazzm.com!";
	 $headers  = 'MIME-Version: 1.0' . "\r\n";
	 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 $headers .= "From: ".$email_from."\r\n";
	 $message="	  
		   
			 Name:
			 $name 	   
			 <br>
			 Email-Id:
			 $email 	   
			 <br>
			 Message:
			 $query 	   
		  
	   ";
	   
		if(mail($to,$subject,$message,$headers)){
			echo '<div class="alert alert-success" role="alert">
					<a  class="alert-link">Successful Submission! Thank you for contacting me.</a>
				  </div>';
		}else{
			echo '<div class="alert alert-danger" role="alert">
					<a  class="alert-link">Error while sending Email !</a>
				  </div>';
		}
	 }
?>
      
   		                                                
<form name="enq" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" onsubmit="return validation();">
<fieldset>
    
<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" />
<input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
<textarea rows="7" name="message" id="message" class="input-block-level" placeholder="Messege"></textarea>
   
<div class="actions">
<input type="submit" value="Send This Message" name="submit" id="submitButton" class="btn btn-success pull-right" title="Send This Message." />
</div>
	
</fieldset>
</form> 

  </div>
</div>

<script type="text/javascript" src="assests/js/jquery.js"></script>
<script type="text/javascript" src="assests/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assests/js/validation.js"></script>
<script type="text/javascript" src="assests/js/ct-navbar.js"></script>
</body>
</html>