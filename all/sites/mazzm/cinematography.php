<?php $menu = 'ci'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cinemotography | M.Assam | Mazzm.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 
	include 'controll/metakeys.html';
?>

<link rel="shortcut icon" href="assests/image/mazzm.png">

<link type="text/css" href="assests/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="assests/css/bootstrap-theme.min.css" rel="stylesheet">
<link type="text/css" href="assests/css/normalizee.css" rel="stylesheet">

<link type="text/css" href="assests/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link type="text/css" href="assests/css/ct-navbar.css" rel="stylesheet" />

<link type="text/css" href="assests/css/cinemotography.css" rel="stylesheet">
<link type="text/css" href="assests/css/cinemotography_responsive.css" rel="stylesheet" media="screen">

</head>

<body onLoad=="set();">
	<!-- Navigation -->
   		<?php include 'menu.php' ?>
  <!-- navigation end -->
    

<div class="content">
<div class="jumbo">
	<div id="viewer">
    	<div id="desc">
        	<div class="vdesc" id="ttl"></div>
            <div class="vdesc" id="txt">Job Roll</div>
            <div class="vdesc" id="jrl"></div>
            <div class="vdesc" id="txt">Distribution</div>
            <div class="vdesc" id="dtrb"></div>
            <div class="vdesc" id="txt" id="l">Links</div>
            <div class="vdesc" id="lnks""></div>
        </div>
    	<iframe id="ifrm"></iframe>
    </div>
    
    <div id="thumbs"> 
    
		<?php
			require_once "controll/mysql_conf.php";
			$conn = mysqli_connect($host, $username, $password, $dbname);
            $sql = "SELECT * FROM tbl4_cinematography ORDER BY id DESC";
            $result = mysqli_query($conn, $sql);
                
            while($row = mysqli_fetch_array($result)) {
        ?>
    
                <img src="assests/image/works/cinematography/<?php echo $row['id'];?>.jpg"
                    data-link="<?php echo $row['mainlink'];?>" 
                    data-ttl="<?php echo $row['title'];?>"
                    data-jrl="<?php echo $row['jobroll'];?>"
                    data-dtrb="<?php echo $row['distribution'];?>"
             		data-lnks="<?php echo $row['sublinks'];?>"
        />
       <?php 
        	}
        ?>
        
    </div>
</div>
</div>

<script type="text/javascript" src="assests/js/jquery.js"></script>
<script type="text/javascript" src="assests/js/bootstrap.min.js"></script>
<script type="text/javascript">
	resize();
	$("document").ready(function(){
		$("img:nth-child(1)").click();	
	});
	function set(){
		if($(window).width()>600){	
			resize();
		}		
	}
	function resize(){				
		var w = $("#viewer iframe").width();
		var h = (w/16)*9;
		$("#viewer iframe").css("height",h+"px");			
		/*if($(window).width()>600){$("#thumbs").css("height",$("#viewer iframe").height());}*/
	};	
	$("#thumbs img").click(function(){
		var x = this.dataset.link;
		document.getElementById("ifrm").src=x;			
		x = this.dataset.ttl;
		document.getElementById("ttl").innerHTML=x;
		x = this.dataset.jrl;
		document.getElementById("jrl").innerHTML=x
		x = this.dataset.dtrb;
		document.getElementById("dtrb").innerHTML=x
		x = this.dataset.lnks;
		document.getElementById("lnks").innerHTML=x
		$("html,body").animate({scrollTop :0},"slow");		
	});
</script>
<script type="text/javascript" src="assests/js/ct-navbar.js"></script>
</body>
</html>