<?php   
 session_start();  
?>  

<?php

echo $id=$_GET['id'];

$link = mysqli_connect("localhost", "root", "", "users");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query="select * from product where id='$id'";

$run = mysqli_query($link,$query);

while($result = mysqli_fetch_array($run))

{

$id = $result['id'];
$name = $result['pname'];
$image = $result['image'];
$price = $result['pprice'];
$description = $result['pdesc'];

$query="insert into cart(cname,cimage,cprice,cdesc) values('$name', '$image', '$price', '$description')";

if(mysqli_query($link,$query)){

header("Location:index.php?mes=product added successfully");

}

else{
header("Location:index.php?mes=product not added successfully");
}

}
mysqli_close($link);
?>