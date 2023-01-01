<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
if(isset($_POST['txtName']))
{

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPswd = $_POST['txtPswd'];


// database insert SQL code
$sql = "INSERT INTO `tbl_signup` (`fldName`, `fldEmail`, `fldPswd`) VALUES ('$txtName', '$txtEmail', '$txtPswd')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
