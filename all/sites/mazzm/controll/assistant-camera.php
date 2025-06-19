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
<title>1st/2nd Assistant Camera  | M.Assam | Mazzm.com</title>
<link rel="shortcut icon" href="../assests/image/mazzm.png">

<link type="text/css" href="../assests/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="../assests/css/bootstrap-theme.min.css" rel="stylesheet">

<link type="text/css" href="../assests/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link type="text/css" href="../assests/css/ct-navbar.css" rel="stylesheet" />
<link type="text/css" href="../assests/css/docs.css" rel="stylesheet">
<link href="../assests/css/bootstrap-social.css" rel="stylesheet">
<link href="../assests/css/font-awesome.css" rel="stylesheet">

<link type="text/css" href="../assests/css/assistant_camera.css" rel="stylesheet">
<link type="text/css" href="../assests/css/assistant_camera_responsive.css" rel="stylesheet" media="screen">

    <style type="text/css">
    .row{
		margin-top:20px;
	}
	.txt,.btnn{
		width:100%;
	}
	.mer{color:red;}
	.col-md-12{text-align:left;}
    </style>
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
                    <li class="active">
                        <a href="#">
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
     <!--<div class="row">
    	<div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
    </div>-->

	<div class="jumbo">
    	<?php
		
		 require_once "mysql_conf.php";
            $conn = mysqli_connect($host, $username, $password, $dbname);
            $m="";
            $s="Record updated successfully";
            $e="Error: ";
				$m='';
            	if(isset($_POST['txt1'])){
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$t1 = str_replace("'","\'",$_POST['txt1_txt']);
					$sql = "UPDATE `tbl2_1_assistant_camera` SET "
							. "text1 = '" . $t1."'";
				
					if (mysqli_query($conn, $sql)) {
						$m = $s;
					} else {
						$m = $e . $sql . "<br>" . mysqli_error($conn);
					}
					
					echo'<div class="row"><div class="col-md-12">'.$m.'</div></div>';
				}
				
				if(isset($_POST['txt2'])){
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$t2 = str_replace("'","\'",$_POST['txt2_txt']);
					$sql = "UPDATE `tbl2_1_assistant_camera` SET "
							. "text2 = '" . $t2."'";
				
					if (mysqli_query($conn, $sql)) {
						$m = $s;
					} else {
						$m = $e . $sql . "<br>" . mysqli_error($conn);
					}
					
					echo'<div class="row"><div class="col-md-12">'.$m.'</div></div>';
				}
		?>
    
		<?php
           
            
            if (!$conn) {
                die("<span class='mer'>Connection failed: " . mysqli_connect_error()."</span>");
            }
            $sql = "SELECT * FROM tbl2_1_assistant_camera";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        
        
        <div class="row">
            <form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
            <input type="hidden" name="txt1" value="1"/>
            <div class="col-md-3">Text 1</div>
            <div class="col-md-6"><textarea type="text" name="txt1_txt" class="sel_i txt" value="" maxlength="600"><?php echo $row['text1'];?></textarea></div>
            <div class="col-md-1"></div>
            <div class="col-md-2"><input type="submit" value="Change" class="alert-succes btnn "/></div>
            </form>
        </div>
        
        <div class="row">
            <form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
            <input type="hidden" name="txt2" value="1"/>
            <div class="col-md-3">Text 2</div>
            <div class="col-md-6"><textarea type="text" name="txt2_txt" class="sel_i txt" value="" maxlength="300"><?php echo $row['text2'];?></textarea></div>
            <div class="col-md-1"></div>
            <div class="col-md-2"><input type="submit" value="Change" class="alert-succes btnn "/></div>
            </form>
        </div>
        
        
        
        
        <center>
        	<div class="logo-bar">
            	<img/>
            </div>
        </center>
        
        <!-- Work Details -->

    
    <div class="row">
    	<div class="col-md-3">Position</div>
        <div class="col-md-5">Description</div>
        <div class="col-md-1">Rank</div>
        <div class="col-md-2"></div>
    </div>
        
    <div class="row">
    	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
        <input type="hidden" name="tbl_row_id_new" value="1"/>
        <div class="col-md-3"><input type="text" name="positionn" class="sel_i txt" maxlength="45"/></div>
        <div class="col-md-6"><textarea type="text" name="descriptionn" class="sel_i txt" maxlength="80"></textarea></div>
        <div class="col-md-1"><input type="text" name="rankn" class="sel_i txt" value="0"/></div>
        <div class="col-md-2"><input type="submit" value="Add" class="btnn alert-success"/></div>
        </form>
    </div>    
    <?php
		$m='';
		if(!empty($_POST['positionn']) && isset($_POST['tbl_row_id_new'])){
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$tp = str_replace("'","\'",$_POST['positionn']);
			$td = str_replace("'","\'",$_POST['descriptionn']);
			$sql = "INSERT INTO `tbl2_2_works` ("
					. "`position`,"
					. " `description`,"
					. " `rank`) "
					. "VALUES ("
					. " '" . $tp . "',"
					. " '" . $td . "',"
					. " " . $_POST['rankn'] .""
					. ");";
		
			if (mysqli_query($conn, $sql)) {
				echo "<div class='row'><div class='col-md-12'>New record created successfully</div></div>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	?>    
        
        
        
        
        
       <hr/> 
        
    
    
    
    <?php
				$m='';
            	if(!empty($_POST['positionu']) && isset($_POST['tbl_row_id_upd'])){
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$tp = str_replace("'","\'",$_POST['positionu']);
					$td = str_replace("'","\'",$_POST['descriptionu']);
					
					$sql = "UPDATE `tbl2_2_works` SET "
							. "position = '" . $tp."', "
							. "description = '" . $td."', "
							. "rank = " . $_POST['ranku']." "
							. "WHERE id=".$_POST['tbl_row_id_upd']."";
				
					if (mysqli_query($conn, $sql)) {
						$m = $s;
					} else {
						$m = $e . $sql . "<br>" . mysqli_error($conn);
					}					
					echo'<div class="row"><div class="col-md-12">'.$m.'</div></div>';
				}
				
				
				
				if (isset($_POST['tbl_row_id_del'])) {		
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
			
					$sql = "DELETE FROM `tbl2_2_works` WHERE `id`='" . $_POST['tbl_row_id_del'] . "'";
					if (mysqli_query($conn, $sql)) {
						echo "<div class='row'><div class='col-md-12'>Record Deleted Successfully</div></div>";
					} else {
						echo "<div class='row'><div class='col-md-12'>Error: " . $sql . "<br>" . mysqli_error($conn)."</div></div>";
					}
				}
			?>
    
    
        <div class="row" id="intro">
			<?php
                $sql = "SELECT * FROM tbl2_2_works ORDER BY rank ASC";
                $result = mysqli_query($conn, $sql);
                
                while($row = mysqli_fetch_array($result)) {
            ?>
            
                <div class="row">
                    <form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
                    <input type="hidden" name="tbl_row_id_upd" value="<?php echo $row['id'];?>"/>
                    <div class="col-md-3">
                    	<input type="text" name="positionu" class="sel_i txt" value="<?php echo $row['position'];?>" maxlength="45"/>
                    </div>
                    <div class="col-md-6">
                    	<textarea type="text" name="descriptionu" class="sel_i txt" value="" maxlength="80"><?php echo $row['description'];?>
                        </textarea>
                        </div>
                    <div class="col-md-1"><input type="text" name="ranku" class="sel_i txt" value="<?php echo $row['rank'];?>"/></div>
                    <div class="col-md-1"><input type="submit" value="Upd" class="alert-success"/></div>
                    </form>
                    
                    <div class="col-md-1">
                    <form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
                    <input type="hidden" name="tbl_row_id_del" value="<?php echo $row['id'];?>"/>
                    <input type="submit" value="Del" class="alert-danger"/>
                    </form>
                    </div>
                </div>            
            <?php 
                ;}
            ?>
            
            
        </div>
        
	</div>
</div>


<script type="text/javascript" src="../assests/js/jquery.js"></script>
<script type="text/javascript" src="../assests/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assests/js/validation.js"></script>
<script type="text/javascript" src="../assests/js/ct-navbar.js"></script>
<script type="text/javascript" src="../assests/js/docs.js"></script>
</body>
</html>

<?php
	mysqli_close($conn);
}
?>