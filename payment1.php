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
<script>
function validate()
{
if(document.Form1.cardnme.value == "-1") 
    {
        alert("Please Select Your Card Company name");
        return false;
    }
   if(document.Form1.bank.value == "-1") 
    {
        alert("Please Select Your Card Bank");
        return false;
    }                   
var a = document.Form1.cardname.value;
if(a=="")
{
alert("Please Enter Your Card Name");
document.Form1.cardname.focus();
return false;
}
if(!isNaN(a))
{
alert("Please Enter Only Characters");
document.Form1.cardname.select();
            return false;
        }
        if ((a.length < 3) || (a.length > 15))
        {
            alert("Your Character must be 3 to 15 Character");
            document.Form1.cardname.select();
            return false;
        }
var b = document.Form1.cardnumber.value;
if(b=="")
{
alert("Please Enter Your Card Number");
document.Form1.cardnumber.focus();
return false;
}
        if ((!isNaN(b) || b.length>=20))
        {
            alert("Your number must be a 16 digit number");
            document.Form1.cardnumber.select();
            return false;
        }
var c = document.Form1.city.value;
if(c=="")
{
alert("Please Enter Your City");
document.Form1.city.focus();
return false;
}
if(!isNaN(a))
{
alert("Please Enter Only Characters");
document.Form1.city.select();
            return false;
        }
        if ((c.length < 3) || (c.length > 15))
        {
            alert("Your Character must be 3 to 15 Character");
            document.Form1.city.select();
            return false;
        }

if(document.Form1.expmonth.value == "-1") 
    {
        alert("Please Select Your Card Expiry Month");
        return false;
    }
if(document.Form1.expyear.value == "-1") 
    {
        alert("Please Select Your Card Expiry Year");
        return false;
    }
                    if (document.Form1.cvv.value == "" ||
                        isNaN(document.Form1.cvv.value) ||
                        document.Form1.cvv.value.length != 3)
                    {
                    alert("Please provide a 3 digit Cvv Number");
                    document.Form1.cvv.focus();
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

   <div id="contact-page" class="container">
      <div class="bg">
        <div class="row">       
           <div class="table-responsive cart_info">
        <table class="table table-condensed">
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

}
?>
<?php
mysqli_close($link);
?>
</tbody>
</table>
</div>
        </div>      
        <div class="row">   
          <div class="col-sm-12">
            <div class="contact-form">
              <div class="status alert alert-success" style="display: none"></div>
              <center><h3>Card Information</h3></center>
                   <form action="ins2.php" name="Form1" method="post" onsubmit="return(validate())">
                    <div class="form-group col-md-12">
              <select name="cardnme" class="form-control" required="required">
              <option value="-1" selected>Enter the Card Name</option>
  <option value="Visa">Visa</option>
  <option value="Master">Master</option>
  <option value="Debit">Debit Card</option>
  <option value="Credit">Credit Card</option>
          </select>        
           </div>
                    <div class="form-group col-md-12">
          <select name="bank" class="form-control" required="required">
              <option value="-1" selected>Enter Bank Name</option>
             <option value="ICICI">ICICI</option>
  <option value="HDFC">HDFC</option>
  <option value="Union">Union</option>
  <option value="Kotak Mahindra">Kotak Mahindra</option>
  <option value="Other">Other</option>
          </select>
                    </div>

                    <div class="form-group col-md-12">
                    <input type="text" name="cardname" class="form-control" required="required" placeholder="Card Holder Name"/>
                    </div>
                
                    <div class="form-group col-md-12">
                    <input type="text" name="cardnumber" class="form-control" required="required" placeholder="Card Number"/>    
                    </div>

                    <div class="form-group col-md-12">
                    <input type="text" name="city" class="form-control" required="required" placeholder="City"/>
                    </div>

                    <div class="form-group col-md-12">
<select name="expmonth" class="form-control" required="required">
<option value="-1">Enter Expiry Month</option>
<option value="January">January</option><option value="February">February</option><option value="March">March</option>
<option value="April">April</option><option value="May">May</option><option value="June">June</option>
<option value="July">July</option><option value="August">August</option><option value="September">September</option>
<option value="October">October</option><option value="November">November</option><option value="December">December</option>
           </select>                    
                    </div>                       
                    <div class="form-group col-md-12">
           <select name="expyear" class="form-control" required="required">
<option value="-1">Enter Expiry Year</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>        
           </select>
                    </div>
                    <div class="form-group col-md-12">
                    <input type="text" name="cvv" class="form-control" required="required" placeholder="CVV"/>
                    </div>
                    <div class="form-group col-md-12">
                    <input type="text" name="payment" value="<?php echo $total; ?>" class="form-control" required="required" />
                    </div>
 
                    <div class="form-group col-md-12">
                        <input type="submit" name="submit" class="btn btn-primary pull-right" value="Continue To Pay">
                    </div>
                </form>
            </div>
          </div>
          </div>          
        </div>  
      </div>  
    </div>
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