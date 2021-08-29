<html><!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn,"users");
if (isset($_GET['submit'])) {
$id = $_GET['uid'];
$name = $_GET['username'];
$pass = $_GET['password'];
$email = $_GET['email'];
$cont = $_GET['contact'];
$query = mysqli_query("update customers set
username='$name', password='$pass', email='$email', contact='$cont',
where uid='$id'", $conn);
}
$query = mysqli_query("select * from customers", $conn);
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href='update.php?update={$row['uid']}'>{$row['username']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysqli_query("select * from customers where uid=$update", $conn);
while ($row1 = mysqli_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name=uid' value='{$row1['uid']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='username' value='{$row1['username']}' />";
echo "<br />";
echo "<label>" . "Password:" . "</label>" . "<br />";
echo"<input class='input' type='password' name='password' value='{$row1['password']}' />";
echo "<br />";
echo "<label>" . "Email:" . "</label>" . "<br />";
echo"<input class='input' type='email' name='email' value='{$row1['email']}' />";
echo "<br />";
echo "<label>" . "Mobile:" . "</label>" . "<br />";
echo"<input class='input' type='phone' name='contact' value='{$row1['contact']}' />";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysqli_close($conn);
?>
</body>
</html>