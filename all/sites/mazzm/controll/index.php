<?php
session_start();
if(empty($_SESSION['statee'])){
	header('Location:https://www.assamnizam.com');
}else{
?>
<?php 
require_once "mysql_conf.php";
		$conn = mysqli_connect($host, $username, $password, $dbname);
		$m="";
		$s="Record updated successfully";
		$e="Error: ";
		$text="";
?>

<?php "CACHE-CONTROL: no-cache,no-cache,must-revalidate" ?>
<?php "CACHE-CONTROL: post-check=0,pre-check=0" ?>
<?php "Pragma: no-cache"?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 
	include 'metakeys.html';
?>

    <link rel="shortcut icon" href="assests/image/mazzm.png">

    <title>Assam Nizam | Mazzm.com</title>

    <link href="../assests/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../assests/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link type="text/css" href="../assests/css/ct-navbar.css" rel="stylesheet" />
    <link href="../assests/css/cover.css" rel="stylesheet">
    <link href="../assests/css/bootstrap-social.css" rel="stylesheet">
    <link href="../assests/css/docs.css" rel="stylesheet">
    <link href="../assests/css/font-awesome.css" rel="stylesheet">
    <link href="../assests/css/font-awesome.css" rel="stylesheet" />
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

    <style type="text/css">
    
    </style>
  </head>

  <body>
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
                </center>
                </button>
                <a class="navbar-brand active" href="#" id="m">Mazzm.com</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                    <li>
                        <a href="assistant_camera.php" id="m">
                        	<i class="pe-7s-albums"></i>
                            <p>1st/2nd Assistant Camera</p>
                        </a>
                    </li>
                    <li>
                        <a href="filmography.php" id="m">
                        	<i class="pe-7s-portfolio"></i>
                            <p>Filmography</p>
                        </a>
                    </li>
                    <li>
                        <a href="cinematography.php" id="m">
                        	<i class="pe-7s-portfolio"></i>
                            <p>Work</p>
                        </a>
                    </li>
                    
                    <li>
                        <a href="contact.php" id="m">
                        	<i class="pe-7s-call"></i>
                            <p>Contact</p>
                        </a>
                    </li>    
                    <li>
                        <a href="https://www.imdb.com/name/nm6229716/" target="_blank" id="m">
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
  
  
  
  <div class="container land">
    
    <?php 
		//Set Page Images
		if(isset($_POST['bg'])){
			echo $_FILES['upl']['size'];
			if($_FILES['upl']['size']<3072000){						
				if(!empty($_FILES['upl']['tmp_name'])){
					move_uploaded_file($_FILES['upl']['tmp_name'], '../assests/image/mazzm.com.full.png');
				}
			}else{
			}
		}
		
        //small image
		if(isset($_POST['bgm'])){
			echo $_FILES['upls']['size'];
			if($_FILES['upls']['size']<3072000){						
				if(!empty($_FILES['upls']['tmp_name'])){
					move_uploaded_file($_FILES['upls']['tmp_name'], '../assests/image/mazzm.com.small.png');
				}
			}else{
			}
		}		
		
        //iphone image
		if(isset($_POST['bgi'])){
			echo $_FILES['upli']['size'];
			if($_FILES['upli']['size']<3072000){						
				if(!empty($_FILES['upli']['tmp_name'])){
					move_uploaded_file($_FILES['upli']['tmp_name'], '../assests/image/mazzm.com.retina.svg');
				}
			}else{
			}
		}		
	?>
    <div class="row">
    	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="bg" value="1"/>
        <div class="col-md-6">Big Background (Max 3MB / .png)</div>
        <div class="col-md-4"><input type="file" name="upl" onchange="readURL(this);" class="sel_i" value="Max 3MB"/></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    
    
    <div class="row">
    	<form method="POST" action="<?php /*echo htmlentities($_SERVER["PHP_SELF"]);*/ ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="bgm" value="1"/>
        <div class="col-md-6">Mobile Background (.png)</div>
        <div class="col-md-4"><input type="file" name="upls" onchange="" class="sel_i"/></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    
    <div class="row">
    	<form method="POST" action="<?php /*echo htmlentities($_SERVER["PHP_SELF"]);*/ ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="bgi" value="1"/>
        <div class="col-md-6">iPhone Background (192dpi .svg)</div>
        <div class="col-md-4"><input type="file" name="upli" onchange="" class="sel_i"/></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    
    
    <!-- save colors -->
     <?php
			if(isset($_POST['bgtbl'])){
                // Check connection
                if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
				}
				
				$sql = "UPDATE colors SET "
						.$_POST['bgtbl']."='".$_POST['color']."'";
			
				if (mysqli_query($conn, $sql)) {
					$m = $s;
				} else {
					$m = $e. $sql . "<br>" . mysqli_error($conn);
				}
				echo'<div class="row"><div class="col-md-12">'.$m.'</div></div>';
            }
        ?> 
    <!-- colors -->
    <div class="row">
    	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="bgtbl" value="bgcolor"/>
        <div class="col-md-6">Background Color</div>
        <div class="col-md-4 c"><input type="color" name="color" onchange="setBGColor(this);" class="sel_i" value="#ffffff"/></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    
    <div class="row">
    	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="bgtbl" value="fcolor"/>
        <div class="col-md-6">Font Color</div>
        <div class="col-md-4 c"><input type="color" name="color" onchange="setFColor(this);" class="sel_i"/></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    
    <div class="row">
    	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="bgtbl" value="mhcolor"/>
        <div class="col-md-6">Menu Hover BG Color</div>
        <div class="col-md-4 c"><input type="color" name="color" onchange="setMenuHoverColor(this);" class="sel_i"/></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    
    <div class="row">
    	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="bgtbl" value="btncolor"/>
        <div class="col-md-6">Social Buttons BG Color</div>
        <div class="col-md-4 c"><input type="color" name="color" onchange="setSocialBtnBgColor(this);" class="sel_i"/></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-4 c">
        		<a class="btn btn-social-icon btn-linkedin" id="scl"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
    	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="bgtbl" value="btnfcolor"/>
        <div class="col-md-6">Social Buttons F Color</div>
        <div class="col-md-4 c"><input type="color" name="color" onchange="setSocialBtnFColor(this);" class="sel_i"/></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    
    
    <!-- Update Queries -->
    <?php	
		
		//Set Page Texts
		if(isset($_POST['ttl1'])|isset($_POST['ttl2'])|isset($_POST['txt1'])|isset($_POST['txt2'])){
		
		//Title1
		if(isset($_POST['ttl1'])){   
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$t1 = str_replace("'","\'",$_POST['ttl1_txt']);
			$sql = "UPDATE tbl1_mazzm SET "
					. "title1 ='" . $t1."'" ;
		
			if (mysqli_query($conn, $sql)) {
				$m = $s;
			} else {
				$m = $e. $sql . "<br>" . mysqli_error($conn);
			}
		}
		
		//Title2
		if(isset($_POST['ttl2'])){
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$t2 = str_replace("'","\'",$_POST['ttl2_txt']);
			$sql = "UPDATE `tbl1_mazzm` SET "
					. "`title2` = '" . $t2 ."'" ;
		
			if (mysqli_query($conn, $sql)) {
				$m = $s;
			} else {
				$m = $e . $sql . "<br>" . mysqli_error($conn);
			}
		}
		
		//Text1
		if(isset($_POST['txt1'])){
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$t3 = str_replace("'","\'",$_POST['txt1_txt']);
			$sql = "UPDATE `tbl1_mazzm` SET "
					. "`text1` = '" . $t3 ."'" ;
		
			if (mysqli_query($conn, $sql)) {
				$m = $s;
			} else {
				$m = $e . $sql . "<br>" . mysqli_error($conn);
			}
		}
		
		//Text2
		if(isset($_POST['txt2'])){
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$t4 = str_replace("'","\'",$_POST['txt2_txt']);
			$sql = "UPDATE `tbl1_mazzm` SET "
					. "`text2` = '" . $t4 ."'" ;
		
			if (mysqli_query($conn, $sql)) {
				$m = $s;
			} else {
			   $m = $e . $sql . "<br>" . mysqli_error($conn);
			}
		}
		
		echo $m;
		}
	?>
    
    <?php
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT * FROM `tbl1_mazzm`";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	?>
    
    <div class="row">
        <form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="ttl1" value="1"/>
        <div class="col-md-6">Big Title (20 Letters)</div>
        <div class="col-md-4"><input type="text" name="ttl1_txt" class="sel_i txt" value="<?php echo $row['title1'];?>" autocomplete="off"/></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    
    <div class="row">
        <form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="ttl2" value="1"/>
        <div class="col-md-6">Small Title (60 Letters)</div>
        <div class="col-md-4"><input type="text" name="ttl2_txt" class="sel_i txt" value="<?php echo $row['title2'];?>"/></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    
    <div class="row">
        <form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="txt1" value="1"/>
        <div class="col-md-6">Text 1 (400 Letters)</div>
        <div class="col-md-4"><textarea  name="txt1_txt" class="sel_i txt" value=""><?php echo $row['text1'];?></textarea></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    
    <div class="row">
        <form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="txt2" value="1"/>
        <div class="col-md-6">Text 2 (200 Letters)</div>
        <div class="col-md-4"><textarea name="txt2_txt" class="sel_i txt" value=""><?php echo $row['text2'];?></textarea></div>
        <div class="col-md-2"><input type="submit" value="Change"/></div>
        </form>
    </div>
    
    <!--
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
    </div> -->
    
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="../assests/js/jquerybg.js"></script>
<script type="text/javascript" src="../assests/js/bootstrap.min.jss"></script>
<script type="text/javascript" src="../assests/js/docs.js"></script>

  </body>
</html>

<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				document.body.style.backgroundImage = "url('"+e.target.result+"')";
			}
			reader.readAsDataURL(input.files[0]);
			}
		};
			
	function setBGColor(color){
		document.body.style.backgroundColor = color.value;
		document.body.style.backgroundImage = "url('../assests/image/mazzm.com.full.png')";
	};
			
	function setFColor(color){
		document.body.style.color = color.value;
		document.getElementById('m').style.color=color.value;
	};
			
	function setMenuHoverColor(color){				
	};
	
	function setSocialBtnBgColor(color){
		document.getElementById('scl').style.backgroundColor=color.value;
	};
	function setSocialBtnFColor(color){
		document.getElementById('scl').style.color=color.value;
	};
	</script>
    
<?php 
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM `colors`";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
?>

<style type="text/css">html{background-color:<?php echo $row['bgcolor']; ?>;}body{color:<?php echo $row['fcolor']; ?>;}#m,.nav #m{color:<?php echo $row['fcolor']; ?>;}body,html{margin:0px;padding:0px;}.col-md-6{text-align:right;}.row{margin-top:20px;}.txt{width:100%;}.c{text-align:left;}.btn-social-icon {background-color:<?php echo $row['btncolor']; ?>;color:<?php echo $row['btnfcolor']; ?>;}
</style>
    
<?php
	mysqli_close($conn);
}
?>