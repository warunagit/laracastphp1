<?php ob_start(); session_start();
$i=0;
require_once "../controll/mysql_conf.php";//echo ''.md5('u$3r');
$conn = mysqli_connect($host, $username, $password, $dbname);
if(isset($_POST['btn_submit'])){
if (!$conn) {
die("<span class='mer'>Connection failed: " . mysqli_connect_error()."</span>");
}
//$sql = "SELECT * FROM user LIMIT 1";
//$result = mysqli_query($conn, $sql);
//$row = mysqli_fetch_assoc($result);										
//if($row['key'] == md5($_POST['password'])){	
if($_POST['password']=="u$3r"){	
$_SESSION["statee"] = "activee";
if(isset($_SESSION["statee"])){
//header("Location:http://localhost/sites/mazzm/controll/mazzm_mazzm");
header("Location:https://www.assamnizam.com/controll/index.php");
}
}else{
echo('<div class="alert-danger"><center>Invalid Key</center></div>');
session_unset();
session_destroy();
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Controll</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" accept-charset="UTF-8" >
                            <fieldset>
                                <div class="form-group input-group">
                                	<span class="input-group-addon">@</span>
                                    <input class="form-control" placeholder="Passcode" name="password" type="password" value="xxxxxx" />
                                </div>
                                <input type="submit" class="btn btn-success btn-block" name="btn_submit"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="jquery-1.11.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="sb-admin-2.js"></script>

</body>

</html>
<?php ob_flush(); ?>
