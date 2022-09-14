<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$add_date = date("Y-m-d H:i:s");
$product_name =$_REQUEST['product_name'];
$quantity =$_REQUEST['quantity'];
$added_by = $_SESSION["username"];
$price = $_REQUEST['price'];
$update="update new_record set add_date= '".$add_date."', product_name='".$product_name."', quantity='".$quantity."', added_by='".$added_by."', price='".$price."', id='".$id."' ";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="product_name" placeholder="Enter Product Name" required value="<?php echo $row['product_name'];?>" /></p>
<p><input type="text" name="quantity" placeholder="Enter Product Quantity" required value="<?php echo $row['quantity'];?>" /></p>
<p><input type="text" name="price" placeholder="Enter Product Price" required value="<?php echo $row['price'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

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