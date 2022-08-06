<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"express");
if(isset($_REQUEST['submit']))
{
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$subject=$_POST['subject'];
$address=$_POST['address'];
$message=$_POST['message'];
$order_no=order.rand(100,500);
$selected_radio = $_POST['selected_radio'];

if ($selected_radio == 'Normal Hours') {

$Normal_status = 'checked';

}
else if ($selected_radio == 'Best Choice') {

$Best_status = 'checked';
}else if($selected_radio == 'After hours and Weekends'){
$After_status = 'checked';
}




$insqDbtb="INSERT INTO `express`.`order`
(`username`, `mobile`, `subject`, `address`,`message`,`order_no`,`selected_radio`,`status`) VALUES ('$username', '$mobile', 
'$subject', '$address', '$message', '$order_no', '$selected_radio','pending')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));

if($insqDbtb){
	echo "<script language=\"JavaScript\">\n";
	echo "alert('Your order has been succesfully submitted');\n";
	echo "window.location='member.html'";
	echo "</script>";
}
else{
	echo"error";
}
}
?>
