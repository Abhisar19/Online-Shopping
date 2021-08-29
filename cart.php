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
								<li>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query="select * from cart";

$run=mysqli_query($link,$query);

$total = mysqli_num_rows($run);

?>
									<a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart<?php echo $total; ?></a></li>
				
								<li><a href="logout.php">Logout</a></li>
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
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
<center>
<?php
if($_SESSION["username"]) {
?>
<h3>
Welcome <?php echo $_SESSION["username"]; ?>
</h3>
<?php
}
else echo "<h1>Please login first .</h1>";
?>
</center>

<form action="cart1.php" method="post">
	<section id="cart_items">
		<div class="container">		
			<div class="review-payment">
            <center><h2>Shopping Cart</h2></center>
			</div>
	
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="name">Name</td>
							<td class="image">Item</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
        					<td class="del">Delete</td>
	               	      	</tr>
					</thead>
					<tbody>
<?php

$link = mysqli_connect("localhost", "root", "", "users");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query="select * from cart";

$run=mysqli_query($link,$query);

while($result=mysqli_fetch_array($run)){

$id=$result['id'];

$name=$result['cname'];

$image=$result['cimage'];

$price=$result['cprice'];

$qua=$result['cqua'];

$qprice=$result['cprice']*$qua;

@$total += $result['cprice']*$qua;


?>

<td><?php echo $name; ?></td>
<td><img src="<?php echo $image; ?>" height="100px" width="100px"></td>
<td><?php echo $price; ?></td>
<td>
<input type="hidden" name="id[]" value="<?php echo $id; ?>">
<input type="text" name="qty[]" value="<?php echo $qua; ?>" size="5"></td>
<td><?php echo $qprice; ?></td>
<td><input type="checkbox" name="check[]" value="<?php echo $id; ?>" multiple></td></tr>


<?php
}
?>
<center>
<tr>
<td colspan=6><input type="submit" name="submit" value="Update">
<?php

$link = mysqli_connect("localhost", "root", "", "users");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['submit'])){

if(isset($_POST['qty'])){

$quaty = $_POST['qty'];
$ids = $_POST['id'];

$array = array_combine($quaty,$ids);

foreach ($array as $q => $i) {

  $query = "update cart set cqua='$q' where id='$i'";
 
  mysqli_query($link,$query);
  header('location:cart.php?mes=Update Quantity Successfully');
 } 

}

}

?>

<?php

$link = mysqli_connect("localhost", "root", "", "users");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['submit'])){

if(isset($_POST['check'])){

	$dele = $_POST['check'];
	foreach ($dele as $del) {

    $query = "delete from cart where id='$del'";
   
    if(mysqli_query($link,$query)){
    
    header("location:cart.php?mes=Item Deleted Successfully");

    }
    else{

    header("location:cart.php?mes=Item Not Deleted sSuccessfully");

    }
       
	 } 
}

?>
<?php
}
mysqli_close($link);
?>

Total Price: <?php echo $total; ?>

<a href="payment.php">Checkout</a>
<a href="index.php">Continue Shopping</a>
</tr>	
			</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
</form>

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