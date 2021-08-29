<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <title>Online Shopping Site for Mobiles, Fashion, Books, Electronics, Home Appliances and More</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +91 8860357012</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> abhisar1906@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
                             	<li><a href="index1.php">Home</a></li>
				                <li><a href="addpro.php">Products</a></li>
								<li><a href="feed.php">Feedback</a></li>
								<li><a href="cust.php">Customers Info</a></li>
								<li><a href="ord.php">Orders Details</a></li>
								<li><a href="logout1.php">Logout</a></li>
                       	</ul>
						</div>
					</div>
						<form class="navbar-form" action="search1.php" method="post">
      <div class="input-group">
        <input type="text" name="fnm" class="form-control" placeholder="Search product by id">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>  
	</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
<center>
	<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_POST['submit'])){

$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$pqty=$_POST['pqty'];
$files=$_FILES['file'];
$pcategory=$_POST['pcategory'];
$pdesc=$_POST['pdesc'];

echo"<br>";


$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];

$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));

$fileextstored=array('png','jpg','jpeg','gif');

if(in_array($filecheck,$fileextstored))

{

	$destinationfile='upload/'.$filename;
	move_uploaded_file($filetmp,$destinationfile);

	$sql = "INSERT INTO `product`(`pname`,`pprice`,`pqty`,`image`,`pcategory`,`pdesc`) VALUES ('$pname','$pprice','$pqty','$destinationfile','$pcategory','$pdesc')";
}

}
if(mysqli_query($link, $sql)){

 echo "Product added successfully.";

}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
</center>
<br>
<br>
<footer id="footer"><!--Footer-->
        <div class="footer-top">
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <center>
                    <p>Copyright © 2018 All Rights Reserved</p>
                    </center>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer--> 

	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>