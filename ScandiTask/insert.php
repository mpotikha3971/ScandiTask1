<?php
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$add_date = date("Y-m-d H:i:s");
$product_name =$_REQUEST['product_name'];
$quantity = $_REQUEST['quantity'];
$added_by = $_SESSION["username"];
$price = $_REQUEST['price'];
$ins_query="insert into new_record (`add_date`,`product_name`,`quantity`,`added_by`,`price`) values ('$add_date','$product_name','$quantity','$added_by','$price')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="product_name" placeholder="Enter Product Name" required /></p>
<p><input type="text" name="quantity" placeholder="Enter Product Quantity" required /></p>
<p><input type="text" name="price" placeholder="Enter Product Price" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
ScandiWeb Junior Developer Test Task 
<br /><br />
Maksym Potikha
<br /><br />
maksym.potikha@gmail.com
</div>
</div>
</body>
</html>