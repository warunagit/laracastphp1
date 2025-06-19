<?php $menu = 'fi'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 
	include 'controll/metakeys.html';
?>

<link rel="shortcut icon" href="assests/image/mazzm.png">
<title>Filmography  | M.Assam | Mazzm.com</title>
<link type="text/css" href="assests/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="assests/css/bootstrap-theme.min.css" rel="stylesheet">

<link type="text/css" href="assests/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link type="text/css" href="assests/css/ct-navbar.css" rel="stylesheet" />

<link type="text/css" href="assests/css/filmography.css" rel="stylesheet">
<link type="text/css" href="assests/css/filmography_responsive.css" rel="stylesheet" media="screen">
</head>

<body>

 <!-- Navigation -->
   		<?php include 'menu.php' ?>
  <!-- navigation end -->
    

<div class="content jumbo">
	<div class="row">
    	<div class="row"  id="hd">
        	<div class="col-md-6"><b>Project</b></div>
            <div class="col-md-4"><b>Job Roll</b></div>
            <div class="col-md-2"><b>Date</b></div>
        </div>
        

        <?php
			require_once "controll/mysql_conf.php";
			$conn = mysqli_connect($host, $username, $password, $dbname);
            $sql = "SELECT * FROM tbl3_2_works ORDER BY rank DESC";
            $result = mysqli_query($conn, $sql);
                
            while($row = mysqli_fetch_array($result)) {
        ?>
            	<div class="row" id="ls">
            		<div class="col-md-6 h"><?php echo $row['project'];?></div>
                	<div class="col-md-4"><?php echo $row['roll'];?></div>
                    <div class="col-md-2"><?php echo $row['date'];?></div>
            	</div>
       <?php 
        	}
        ?>
        
        <!--<div class="row">
        	<div class="col-md-6"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </div>-->
    </div>

</div>

<script type="text/javascript" src="assests/js/jquery.js"></script>
<script type="text/javascript" src="assests/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assests/js/validation.js"></script>
<script type="text/javascript" src="assests/js/ct-navbar.js"></script>
</body>
</html>