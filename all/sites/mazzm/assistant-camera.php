<?php $menu = 'as'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 
	include 'controll/metakeys.html';
?>

<title>Assistant Camera  | M.Assam | Mazzm.com</title>
<link rel="shortcut icon" href="assests/image/mazzm.png">

<link type="text/css" href="assests/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="assests/css/bootstrap-theme.min.css" rel="stylesheet">

<link type="text/css" href="assests/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link type="text/css" href="assests/css/ct-navbar.css" rel="stylesheet" />
<link type="text/css" href="assests/css/docs.css" rel="stylesheet">
<link href="assests/css/bootstrap-social.css" rel="stylesheet">
<link href="assests/css/font-awesome.css" rel="stylesheet">

<link type="text/css" href="assests/css/assistant_camera.css" rel="stylesheet">
<link type="text/css" href="assests/css/assistant_camera_responsive.css" rel="stylesheet" media="screen">
</head>

<body>

  <!-- Navigation -->
   		<?php include 'menu.php' ?>
  <!-- navigation end -->

<div class="content">
	<div class="jumbo">
    <?php
				require_once "controll/mysql_conf.php";
				$conn = mysqli_connect($host, $username, $password, $dbname);
		
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "SELECT * FROM `tbl2_1_assistant_camera`";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);	
            ?>
    
    
        <p>
            <?php echo $row['text1'];?>
        </p>
    
        <P>
            <?php echo $row['text2'];?>
        </p>
        
        <center>
        	<div class="logo-bar">
            	<img/>
            </div>
        </center>
        
        <div class="row" id="intro">        
        	<?php
                $sql = "SELECT * FROM tbl2_2_works ORDER BY rank,id";
                $result = mysqli_query($conn, $sql);
                
                while($row = mysqli_fetch_array($result)) {
            ?>
            	<div class="row" id="ls">
            		<div class="col-lg-5" id="hh"><?php echo $row['position'];?></div>
                	<div class="col-lg-7"><?php echo $row['description'];?></div>
            	</div>
            <?php 
                }
            ?>
        </div>
        
	</div>
</div>


<script type="text/javascript" src="assests/js/jquery.js"></script>
<script type="text/javascript" src="assests/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assests/js/validation.js"></script>
<script type="text/javascript" src="assests/js/ct-navbar.js"></script>
<script type="text/javascript" src="assests/js/docs.js"></script>
</body>
</html>
<?php
	mysqli_close($conn);
?>
