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
<title>Filmography  | M.Assam | Mazzm.com</title>
<link type="text/css" href="../assests/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="../assests/css/bootstrap-theme.min.css" rel="stylesheet">

<link type="text/css" href="../assests/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link type="text/css" href="../assests/css/ct-navbar.css" rel="stylesheet" />

<link type="text/css" href="../assests/css/filmography.css" rel="stylesheet">
<link type="text/css" href="../assests/css/filmography_responsive.css" rel="stylesheet" media="screen">

<style type="text/css">
div textarea{
	width:100%;
}
.alert-success,.alert-danger{
	width:100%;
}
.r{
	width:100%;
}
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
                    <li>
                        <a href="assistant_camera.php">
                        	<i class="pe-7s-albums"></i>
                            <p>1st/2nd Assistant Camera</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
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

<div class="content jumbo">

<?php
			require_once "mysql_conf.php";
            $conn = mysqli_connect($host, $username, $password, $dbname);
            $m="";
			$i="Record Added successfully";
            $s="Record updated successfully";
            $e="Error: ";
            	$m='';
				if(isset($_POST['txt1'])){
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$t1 = str_replace("'","\'",$_POST['txt1_txt']);
					$sql = "UPDATE `tbl3_1_filmography` SET "
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
					$sql = "UPDATE `tbl3_1_filmography` SET "
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
            $sql = "SELECT * FROM tbl3_1_filmography";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        
        <!--
        <div class="row">
            <form method="POST" action="<?php /*echo htmlentities($_SERVER["PHP_SELF"]);*/ ?>" id="" enctype="multipart/form-data">
            <input type="hidden" name="txt1" value="1"/>
            <div class="col-md-3">Text 1</div>
            <div class="col-md-6"><textarea type="text" name="txt1_txt" class="sel_i txt" value="" autocomplete="off" maxlength="600"><?php /*echo $row['text1'];*/?></textarea></div>
            <div class="col-md-2"><input type="submit" value="Change" class="btnn"/></div>
            </form>
        </div>
        
        <div class="row">
            <form method="POST" action="<?php /*echo htmlentities($_SERVER["PHP_SELF"]);*/ ?>" id="" enctype="multipart/form-data">
            <input type="hidden" name="txt2" value="1"/>
            <div class="col-md-3">Text 2</div>
            <div class="col-md-6"><textarea type="text" name="txt2_txt" class="sel_i txt" value="" autocomplete="off" maxlength="300"><?php /*cho $row['text2'];*/?></textarea></div>
            <div class="col-md-2"><input type="submit" value="Change" class="btnn"/></div>
            </form>
        </div>
        -->
        




	<div class="row">
    	<div class="row"  id="hd">
        	<div class="col-md-5">Project</div>
            <div class="col-md-2">Job Roll</div>
            <div class="col-md-2">Date</div>
            <div class="col-md-1">Rank</div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
        </div>
           
        
        <div class="row" id="ls">
        	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
            <input type="hidden" name="tbl_row_id_new" value="1"/>
        	<div class="col-md-5"><textarea type="text" name="projectn" class="sel_i txt"></textarea></div>
            <div class="col-md-2"><textarea type="text" name="rolln" class="sel_i txt"></textarea></div>
            <div class="col-md-2"><input type="text" name="daten" class="sel_i txt"/></div>
            <div class="col-md-1"><input type="text" name="rankn" class="sel_i txt r" value="0"/></div>
            <div class="col-md-1"><input type="submit" value="Add" class="btnn alert-success"/></div>
        </div> 
        <?php
            $m='';
			if(!empty($_POST['projectn']) && isset($_POST['tbl_row_id_new'])){
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
				
				$projectn = str_replace("'","\'",$_POST['projectn']);
				$rolln = str_replace("'","\'",$_POST['rolln']);
                $sql = "INSERT INTO `tbl3_2_works` ("
                        . "`project`,"
                        . " `roll`,"
						. " `rank`,"
                        . " `date`) "
                        . "VALUES ("
                        . " '" . $projectn . "',"
                        . " '" . $rolln . "',"
						. " " . $_POST['rankn'] . ","
                        . " '" . $_POST['daten'] ."'"
                        . ");";
            
                if (mysqli_query($conn, $sql)) {
                    $m = $i;
                } else {
                    $m = $e . $sql . "<br>" . mysqli_error($conn);
                }
				echo'<div class="row"><div class="col-md-12">'.$m.'</div></div>';
            }
        ?>    
        
        
        <hr/>
        
        
        
        
        
        <?php
            	$m='';
				if(!empty($_POST['projectu']) && isset($_POST['tbl_row_id_upd'])){
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$projectu = str_replace("'","\'",$_POST['projectu']);
					$rollu = str_replace("'","\'",$_POST['rollu']);
					
					$sql = "UPDATE `tbl3_2_works` SET "
							. "project = '" . $projectu."', "
							. "roll = '" . $rollu."', "
							. "date = '" . $_POST['dateu']."', "
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
			
					$sql = "DELETE FROM `tbl3_2_works` WHERE `id`='" . $_POST['tbl_row_id_del'] . "'";
					if (mysqli_query($conn, $sql)) {
						echo "<div class='row'><div class='col-md-12'>Record Deleted Successfully</div></div>";
					} else {
						echo "<div class='row'><div class='col-md-12'>Error: " . $sql . "<br>" . mysqli_error($conn)."</div></div>";
					}
				}
			?>
        
        <div class="row" id="intro">
			<?php
                $sql = "SELECT * FROM tbl3_2_works ORDER BY rank ASC";
                $result = mysqli_query($conn, $sql);
                
                while($row = mysqli_fetch_array($result)) {
            ?>
        
        <div class="row" id="ls">
        	<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" id="" enctype="multipart/form-data">
            <input type="hidden" name="tbl_row_id_upd" value="<?php echo $row['id'];?>"/>
        	<div class="col-md-5"><textarea type="text" name="projectu" class="sel_i txt"><?php echo $row['project'];?></textarea></div>
            <div class="col-md-2"><textarea type="text" name="rollu" class="sel_i txt"><?php echo $row['roll'];?></textarea></div>
            <div class="col-md-2"><input type="text" name="dateu" class="sel_i txt" value="<?php echo $row['date'];?>"/></div>
            <div class="col-md-1"><input type="text" name="ranku" class="sel_i txt r" value="<?php echo $row['rank'];?>"/></div>
            <div class="col-md-1"><input type="submit" value="Upd" class="btnn alert-success"/><br/></form></div>
            
            
            
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
            
            
        
        
        
        
        
        <!--<div class="row">
        	<div class="col-md-6"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </div>-->
    </div>

</div>

<script type="text/javascript" src="../assests/js/jquery.js"></script>
<script type="text/javascript" src="../assests/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assests/js/validation.js"></script>
<script type="text/javascript" src="../assests/js/ct-navbar.js"></script>
</body>
</html>

<?php
	mysqli_close($conn);
}
?>