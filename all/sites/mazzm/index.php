<?php
		$menu='';

		require_once "controll/mysql_conf.php";
		$conn = mysqli_connect($host, $username, $password, $dbname);
		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT * FROM `tbl1_mazzm`";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	?>
<?php "CACHE-CONTROL: no-cache,no-cache,must-revalidate" ?>
<?php "CACHE-CONTROL: post-check=0,pre-check=0" ?>
<?php "Pragma: no-cache"?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 
	include 'controll/metakeys.html';
?>

    <link rel="shortcut icon" href="assests/image/mazzm.png">

    <title>I am Assam M. | Mazzm.com</title>

    <link href="assests/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="assests/css/pe-icon-7-stroke.css" rel="stylesheet" />
	  <link type="text/css" href="assests/css/ct-navbar.css" rel="stylesheet" />
    <link href="assests/css/cover.css" rel="stylesheet">
    <link href="assests/css/bootstrap-social.css" rel="stylesheet">
    <link href="assests/css/docs.css" rel="stylesheet">
    <link href="assests/css/font-awesome.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <body>
   <!-- Navigation -->
   	<?php include 'menu.php' ?>
   <!-- navigation end -->
  
    <div class="container land">
      <div class="row">
          <div class="col-md-5">
            <img class="mini_image"/>
          </div>
          <div class="col-md-7">
              <div class="inner cover">
              <h1 class="cover-heading"><?php echo $row['title1']; ?></h1>
              <h2><b><?php echo $row['title2']; ?></b></h2>
              <hr/>
              <p class="lead"><?php echo $row['text1']; ?></p>

              <p class="lead"><?php echo $row['text2']; ?></p>


              <p class="lead">
                <a href="assistant-camera" class="btn btn-lg btn-default">More about me.</a>
              </p>
              
              <div class="mastfoot">
                  <div class="inner">
                    <!--<p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>-->
                      <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                      <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                      <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                      <a class="btn btn-social-icon btn-vimeo"><i class="fa fa-vimeo-square"></i></a>               
                  </div>
              </div>          
          </div>          
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="assests/js/jquery.js"></script>
    <script type="text/javascript" src="assests/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assests/js/docs.js"></script>
  </body>
</html>
