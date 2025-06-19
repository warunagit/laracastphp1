<?php
session_start();
if(empty($_SESSION['statee'])){
	header('Location:https://www.assamnizam.com');
}else{
?>
<?php /*"CACHE-CONTROL: no-cache,no-cache,must-revalidate" ?>
<?php "CACHE-CONTROL: post-check=0,pre-check=0" ?>
<?php "Pragma: no-cache"*/?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cinemotography | M.Assam | Mazzm.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="mazzm,mazzm.com,qatar,sri lanka,mohamed,assam,azzam,video,videographer,videography,cinema,cinematography,photo,photography,doha,doha film school"/>
<meta name="description" content="Im an 1st/2nd Assistant Camera based on Qatar, from Sri Lanka. Contact me: +974 6682 7121, +974 30 31 1511" />
<meta name="auther" content="Yasantha WB" />
<link rel="shortcut icon" href="../assests/image/mazzm.png">

<link type="text/css" href="../assests/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="../assests/css/bootstrap-theme.min.css" rel="stylesheet">
<link type="text/css" href="../assests/css/normalizee.css" rel="stylesheet">

<link type="text/css" href="../assests/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link type="text/css" href="../assests/css/ct-navbar.css" rel="stylesheet" />

<link type="text/css" href="../assests/css/cinemotography.css" rel="stylesheet">
<link type="text/css" href="../assests/css/cinemotography_responsive.css" rel="stylesheet" media="screen">

<script type="text/javascript">
			function readURL(input,$id) {
			//alert($id);
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#sitem_image'+$id).attr('src', e.target.result);
			   }
				reader.readAsDataURL(input.files[0]);
			   }
			};
			function sel($this){
				$var = "#se"+$this;
				$($var).click();
			};
		</script>
        <style type="text/css">
        	.im #se, .im .seup, #se0{
				display: none;
			}
			.jumbo {
				width:100%;
			}
			.new{
				margin-top:20px;
				margin-bottom:20px;
			}
			textarea,.bt{
				width:100%;	
			}
			textarea{height:100%;}
			.alert-danger{
				margin-top:10px;
			}
			img{cursor:pointer;}
        </style>

</head>

<body onLoad=="set();">
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
                    <li class="active">
                        <a href="#">
                        	<i class="pe-7s-portfolio"></i>
                            <p>Work</p>
                        </a>
                    </li>
                    
                    <li>
                        <a href="contact.php">
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

<div class="content">
<div class="jumbo">
    
            
    <div class="row">
    	<div class="col-md-2 im">Image (270*500 .jpg)</div>
        <div class="col-md-2">Title (100 let.)</div>
        <div class="col-md-2">Job Roll (100 let.)</div>
        <div class="col-md-2">Distribution (300 let.)</div>
        <div class="col-md-2">MainLink (100 let.)</div>
        <div class="col-md-1">Links (100 let.)</div>        
        <div class="col-md-1">Action</div>
    </div>
    
    
    
    <?php
			$m="";
			$i="Record Added successfully";
            $s="Record updated successfully";
            $e="Error: ";
    	require_once "mysql_conf.php";
        $conn = mysqli_connect($host, $username, $password, $dbname);
		
		if(isset($_POST['tbl_row_id_new']) && !empty($_POST['titlen'])){
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$title = str_replace("'","\'",$_POST['titlen']) ;
			$jobroll = str_replace("'","\'",$_POST['jobrolln']);
			$distribution = str_replace("'","\'",$_POST['distributionn']);
			$mainlink = str_replace("'","\'",$_POST['mainlinkn']);
			$sublink = str_replace("'","\'",$_POST['linksn']);
			
			$sql = "INSERT INTO `tbl4_cinematography` ("
                        . " `title`,"
                        . " `jobroll`,"
						. " `distribution`,"
						. " `mainlink`,"
                        . " `sublinks`) "
                        . " VALUES ("
                        . " '" . $title. "',"
                        . " '" . $jobroll . "',"
						. " '" . $distribution . "',"
						. " '" . $mainlink . "',"
                        . " '" . $sublink ."'"
                        . ");";
				
			if (mysqli_query($conn, $sql)) {
				
				/***********************************/
				$allowed = array('jpg');
	
				$conn = mysqli_connect($host, $username, $password, $dbname);
				$sql = "SELECT id FROM tbl4_cinematography ORDER BY id DESC LIMIT 1";				
				$result = mysqli_query($conn, $sql);
            	$row = mysqli_fetch_assoc($result);
				
				if(isset($_FILES['upll']) && $_FILES['upll']['error'] == 0){
					$extension = pathinfo($_FILES['upll']['name'], PATHINFO_EXTENSION);
					
					if(in_array(strtolower($extension), $allowed)){
						
						if(move_uploaded_file($_FILES['upll']['tmp_name'], '../assests/image/works/cinematography/'.$row['id'].".jpg")){
							$m = $s;
							
						}else{
							$m = $e . $sql . "<br>" . mysqli_error($conn);
						}
					}else{
						$m = $e . "<br> Invalid Image Type. Only JPG." .$sql . "<br>" . mysqli_error($conn);
					}					
				}else{
					$m = $e . $sql . "<br>" . mysqli_error($conn);
				}				
			} else {
				$m = $e . $sql . "<br>" . mysqli_error($conn);
			}
			echo'<div class="row"><div class="col-md-12">'.$m.'</div></div>';
		}
	?>
    <div class="row new">
    	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="upload" enctype="multipart/form-data">
        <input type="hidden" name="tbl_row_id_new" value="1"/>
    	<div class="col-md-2 im">
        	<input type="file" name="upll" onchange="readURL(this,0);" id="se0"/>
            <img alt="Image Display Here" id="sitem_image0" src="#" onClick="sel(0);" height="100" width="100"/>
        </div>
        
        <div class="col-md-2"><textarea name="titlen"></textarea></div>
        <div class="col-md-2"><textarea name="jobrolln"></textarea></div>
        <div class="col-md-2"><textarea name="distributionn"></textarea></div>
        <div class="col-md-2"><input type="text" name="mainlinkn"/></div>
        <div class="col-md-1"><textarea name="linksn"></textarea></div>
        <div class="col-md-1"><input type="submit" value="Add" class="bt alert-success"/></div>
        </form>
    </div>
    
    
    
    <!-- update query -->
    <?php
    	if(isset($_POST['tbl_row_id_update']) & (!empty($_POST['titleu']))){
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			//$text = str_replace("'","\'",); 
			$id = $_POST['tbl_row_id_update'];
			$title = str_replace("'","\'",$_POST['titleu']) ;
			$jobroll = str_replace("'","\'",$_POST['jobrollu']);
			$distribution = str_replace("'","\'",$_POST['distributionu']);
			$mainlink = str_replace("'","\'",$_POST['mainlinku']);
			$sublink = str_replace("'","\'",$_POST['linksu']);
			
			$sql = "UPDATE `tbl4_cinematography` SET"
                        . " title = '".$title."', "
                        . " jobroll = '".$jobroll."', "
						. " distribution = '".$distribution."', "
						. " mainlink = '".$mainlink."', "
                        . " sublinks = '".$sublink."' "
						. " WHERE id = ".$id;
				
			if (mysqli_query($conn, $sql)) {
				
				/***********************************/
				$allowed = array('jpg');
				
				if(isset($_FILES['upllu']) && $_FILES['upllu']['error'] == 0){
					$extension = pathinfo($_FILES['upllu']['name'], PATHINFO_EXTENSION);
					
					if(in_array(strtolower($extension), $allowed)){
						
						if(move_uploaded_file($_FILES['upllu']['tmp_name'], '../assests/image/works/cinematography/'.$id.".jpg")){
							$m = $s;							
						}else{
							$m = $e . $sql . "<br>" . mysqli_error($conn);
						}
					}else{
						$m = $e . "<br> Invalid Image Type. Only JPG." .$sql . "<br>" . mysqli_error($conn);
					}					
				}else{
					$m = $e . $sql . "<br>" . mysqli_error($conn);
				}			
			}
			//echo'<div class="row"><div class="col-md-12">'.$m.'</div></div>';
		}
	?>
    
    <!-- delete query -->
    <?php
    	if(isset($_POST['tbl_row_id_delete'])){
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$id = $_POST['tbl_row_id_delete'];
			
			$sql = "DELETE FROM `tbl4_cinematography` WHERE id = ".$id;
				
			if (mysqli_query($conn, $sql)) {
				if(unlink('../assests/image/works/cinematography/'.$_POST['tbl_row_id_delete'].'.jpg')){
					echo '<div class="row"><div class="col-md-12">Success Fully Removed.</div></div>';	
				}else{
					echo'<div class="row"><div class="col-md-12">Error While Deleting File.</div></div>';
				}
			}else{
				echo mysqli_error($conn);
				echo'<div class="row"><div class="col-md-12">'."Error While Deleting.<br>" . mysqli_error($conn).'</div></div>';
			}
			echo mysqli_error($conn);
		}
	?>
    
    
    <!-- select query -->
    <?php  
         $sql = "SELECT * FROM tbl4_cinematography ORDER BY id DESC";
         $result = mysqli_query($conn, $sql);
                
         while($row = mysqli_fetch_array($result)) {
    ?>
    		<hr/>
            <div class="row">
            	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="upload" enctype="multipart/form-data">
            	<input type="hidden" name="tbl_row_id_update" value="<?php echo $row['id']; ?>"/>
                <div class="col-md-2 im">
                	<input type="file" name="upllu" onchange="readURL(this,<?php echo $row['id']; ?>);" id="se<?php echo $row['id']; ?>" class="seup"/>
                	<img src="../assests/image/works/cinematography/<?php echo $row['id']; ?>.jpg" id="sitem_image<?php echo $row['id']; ?>" 
                    src="#" onClick="sel(<?php echo $row['id']; ?>);" height="100" width="100"/>
                </div>
                <div class="col-md-2"><textarea name="titleu"><?php echo $row['title']; ?></textarea></div>
                <div class="col-md-2"><textarea name="jobrollu"><?php echo $row['jobroll']; ?></textarea></div>
                <div class="col-md-2"><textarea name="distributionu"><?php echo $row['distribution']; ?></textarea></div>
                <div class="col-md-2"><input type="text" name="mainlinku" value="<?php echo $row['mainlink']; ?>"/></div>
                <div class="col-md-1"><textarea name="linksu"><?php echo $row['sublinks']; ?></textarea></div>        
                <div class="col-md-1"><input type="submit" value="Upd" class="bt alert-success"/></form>
                
                <br/>
                						
                	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="delete" enctype="multipart/form-data">
                        <input type="hidden" name="tbl_row_id_delete" value="<?php echo $row['id']; ?>"/>
                        <input type="submit" value="Del" class="bt alert-danger"/>
                    </form>
                </div>                
            </div>
    <?php 
		 }
	?>
    
    
</div>
</div>

<script type="text/javascript" src="../assests/js/jquery.js"></script>
<script type="text/javascript" src="../assests/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assests/js/ct-navbar.js"></script>
</body>
</html>

<?php
	mysqli_close($conn);
}
?>