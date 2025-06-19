<?php
session_start();
if(empty($_SESSION['statee'])){
	header('Location:https://www.assamnizam.com');
}else{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="mazzm,mazzm.com,qatar,sri lanka,mohamed,assam,azzam,video,videographer,videography,cinema,cinematography,photo,photography,doha,doha film school"/>
<meta name="description" content="Im an 1st/2nd Assistant Camera based on Qatar, from Sri Lanka. Contact me: +974 6682 7121, +974 30 31 1511" />
<meta name="auther" content="Yasantha WB" />
<link rel="shortcut icon" href="../assests/image/mazzm.png">
<title>Contact Me  | M.Assam | Mazzm.com</title>
<link type="text/css" href="../assests/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="../assests/css/bootstrap-theme.min.css" rel="stylesheet">

<link type="text/css" href="../assests/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link type="text/css" href="../assests/css/ct-navbar.css" rel="stylesheet" />

<link type="text/css" href="../assests/css/contact.css" rel="stylesheet">
<link type="text/css" href="../assests/css/contact_responsive.css" rel="stylesheet" media="screen">
</head>

<body>

 <!-- Navigation -->
    <nav class="navbar navbar-ct-blue navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <center>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </center>
                </button>
                <a class="navbar-brand" href="mazzm_mazzm.php">Mazzm.com</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="assistant_camera.php">
                        	<i class="pe-7s-albums"></i>
                            <p>1st/2nd Assistant Camera</p>
                        </a>
                    </li>
                    <li>
                        <a href="filmography.php">
                        	<i class="pe-7s-portfolio"></i>
                            <p>Filmography</p>
                        </a>
                    </li>
                    <li>
                        <a href="cinematography.php">
                        	<i class="pe-7s-portfolio"></i>
                            <p>Work</p>
                        </a>
                    </li>
                    
                    <li class="active">
                        <a href="#">
                        	<i class="pe-7s-call"></i>
                            <p>Contact</p>
                        </a>
                    </li> 
                    <li>
                        <a href="http://qa.linkedin.com/in/mazzmassam" target="_blank">
                        	<i class="pe-7s-call"></i>
                            <p>Profile</p>
                        </a>
                    </li>                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="panel panel-default">
  <div class="panel-body">


<h1><center>Contact Me</center></h1>

<div id="contact"><center>
	<div class="l">
            <div><b>Qatar</b></div>
             <div>+974 6682 7121</div>
             <div>+974 3031 1511</div>
	</div>
    
	<div class="r">
            <div><b>Sri Lanka</b></div>
            <div>+94 777 977 422</div>
            <div>+94 812 571 026</div>
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
<textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Messege"></textarea>
   
<div class="actions">
<input type="submit" value="Send This Message" name="submit" id="submitButton" class="btn btn-success pull-right" title="Send This Message." />
</div>
	
</fieldset>
</form> 

  </div>
</div>

<script type="text/javascript" src="../assests/js/jquery.js"></script>
<script type="text/javascript" src="../assests/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assests/js/validation.js"></script>
<script type="text/javascript" src="../assests/js/ct-navbar.js"></script>
</body>
</html>
<?php
}
?>