<?php   

session_start();  

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

<?php echo $name; ?>
<img src="<?php echo $image; ?>" height="100px" width="100px">
<?php echo $price; ?>
<input type="hidden" name="id[]" value="<?php echo $id; ?>">
<input type="text" name="qty[]" value="<?php echo $qua; ?>" size="5">
<?php echo $qprice; ?>
<input type="checkbox" name="check[]" value="<?php echo $id; ?>" multiple>


<?php
}
?>

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

    header("location:cart.php?mes=Item Not Deleted Successfully");

    }
       
	 } 
}
}
?>
