<?php include('../session.php'); ?>
<?php include ('../connect.php');?>
<!DOCTYPE html>

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
   <meta charset="utf-8" />
   <link rel="shortcut icon" href="images/favicon.ico" />
   <title>Portal|Lock Screen</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        <!-- BEGIN LOGO -->
       <h5 class="form-title" style="color:#ffffff;font-weight: 400;">
                <img src="../assets/admin/img/logo.jpg" style="margin-left: 10px; width: 100px; height: 100px;"/><br/><br>
                <p style="text-align:center;font-size: 26px; color: #FFFFFF;">MIATHENE BOYS HIGH SCHOOL PORTAL</p>
            </h5>
    </div>
    <div class="lock-wrap">
        <div class="metro single-size gray">
            <img src="images/noimage.png" alt="profile-photo" style="height: 165px" >
        </div>
        <div class="metro double-size blue">
            <h1><?php echo  $firstname. ' '.$secondname; ?></h1>
            <p>vectorlab@gmail.com</p>
        </div>
        <div class="metro double-size green">
            <form action="#" method="post">
             <?php
if (isset($_POST['login'])) {
//$servername = "localhost";
//$username1 = "root";
//$password1 = "";
//$db= "dbMySchool";
// Create connection
//$conn = mysql_connect($servername, $username1, $password1) or die(mysql_error());
// Check connection
//mysql_select_db($db);
$password=$_POST['password'];
if (empty($_POST['password'])) {
 ?>
		<div class="alert alert-danger" style=" padding-left:10px; text-align:center; font-size:13px; "><p style="color:black;" ></p><strong> Password Field is Empty </strong></div>
	<?php
}
else
{

$query1 = mysqli_query($conn,"select * from tblstudent WHERE AdmNo='$password' ") or die(mysqli_error());
$rows = mysqli_num_rows($query1);
$rw=mysqli_fetch_array($conn,$query1);
if ($rows >0) {
	$_SESSION['login_user']=$rw['AdmNo']; // Initializing Session
echo'gone';
header("location:index.php");
// Redirecting To Other Page
}
 else {
?>
<div class="alert alert-danger" style=" padding-left:10px; text-align:center; font-size:13px;"><strong> Password is Invalid. Try again </strong></div>
	<?php
}

mysqli_close($conn); // Closing Connection
}
}
?>
                <div class="input-append lock-input" class="login-form">
                    <input type="password" class="" placeholder="Password" name="password">
                    <button type="submit" class="btn tarquoise" name="login"><i class=" icon-arrow-right"></i></button>
                </div>
            </form>
        </div>
        <div class="metro single-size terques">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Locked</span>
            </div>
        </div>
        <div class="metro double-size gray ">
            <a href="logout.php?logout" class="user-position">
                <i class="icon-user"></i>
                <span>Login Another User</span>
            </a>
        </div>
        <div class="metro double-size orange">
            <a href="javascript:;" class="user-position">
                <i class="icon-key"></i>
                <span>Forgot Password ?</span>
            </a>
        </div>
    </div>
</body>
<!-- END BODY -->
</html>