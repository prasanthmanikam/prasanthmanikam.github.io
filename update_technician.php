<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"express");
$techID=$_POST['techID'];
$techName=$_POST['techName'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

if(isset($_POST['submit']))
{
    $insert="INSERT INTO `express`.`technician` (`techID`, `techName`,`email`,`mobile`) values ('$techID','$techName','$email','$mobile')";
    mysqli_query($link,$insert) or die(mysqli_error($link));
    echo "<script language=\"JavaScript\">\n";
	echo "alert('Update success');\n";
	echo "window.location='view_order.php'";
	echo "</script>";
}
    
?>
