<?php

session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','users') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM customers WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["uid"] = $row[uid];
$_SESSION["username"] = $row[username];
} else {
 echo "Invalid Username or Password!";
}
}
if(isset($_SESSION["uid"])) {
header("Location:index.php");
}

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
<script type="text/javascript">
function validate()
{
	   
var a = document.Form1.username.value;
if(a=="")
{
alert("Please Enter Your User Name");
document.Form1.username.focus();
return false;
}
if(!isNaN(a))
{
alert("Please Enter Only Characters");
document.Form1.username.select();
            return false;
        }
        if ((a.length < 3) || (a.length > 15))
        {
            alert("Your Character must be 3 to 15 Character");
            document.Form1.username.select();
            return false;
        }

	    if(document.Form1.password.value == "")
        {
        	alert("Password cant be blank");
        	document.Form1.password.focus();
        	return false;
        }
        var email = document.Form1.email.value;
                    atpos = email.indexOf("@");
                    dotpos = email.lastIndexOf(".");
                    if (email == "" || atpos < 1 || (dotpos - atpos < 2))
                    {
                        alert("Please enter correct email ID")
                        document.Form1.email.focus();
                        return false;
                    }
                    if (document.Form1.contact.value == "" ||
                        isNaN(document.Form1.contact.value) ||
                        document.Form1.contact.value.length != 10)
                    {
                    alert("Please provide a Mobile in the format ######.");
                    document.Form1.contact.focus();
                    return false;
                    }
                    return(true);
                  }                  
                function isNumberKey(evt)
                {
                    var charCode = (evt.which) ? evt.which : event.keyCode;
                    if (charCode != 46 && charCode > 31 &&
                            (charCode < 48 || charCode > 57))
                    {
                        alert("Enter Number");
                        return false;
                    }
                    return true;
                }        
</script>
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
								<li><a href="index.php">Home</a></li>
				                <li class="dropdown"><a href="#">Products<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="elec.php">Electronics</a></li>
								   </ul>
                                </li> 
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
	<form class="navbar-form" action="search.php" method="post">
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
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form name="frmUser" method="post" action="" align="center">
                         	<input type="text" name="username" placeholder="Username" />
							<input type="password" name="password" placeholder="Password" />
							<center><input type="submit" name="submit" value="Login" class="btn btn-primary pull-right"></center>
							</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Create New Account</h2>
						<form action="data3.php" name="Form1" method="post" onsubmit="return(validate())">
							<input type="text" name="username" placeholder="Username"/>
							<input type="password" name="password" placeholder="Password"/>
						    <input type="email" name="email" placeholder="Email ID"/>
							<input type="phone" name="contact" placeholder="Contact No"/>
							<center><input type="submit" name="submit" value="Create" class="btn btn-primary pull-right"></center>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
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
	