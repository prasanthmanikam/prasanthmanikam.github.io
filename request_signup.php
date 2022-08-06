<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"express");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

 
// Validation will be added here


if ($password != $cpassword) {
echo "<script>alert('Error... Passwords do not match!')</script>";
echo "window.location='index.html'";

}else
$check_name="SELECT * FROM member where username='$username'";
    $run=mysqli_query($link,$check_name) or die("failed to connect to server");

     if(mysqli_num_rows($run)>0){
    echo "<script>alert('Username $username already exist in our database. Please try with another username!')</script>";
    echo "window.location='index.html";


}else
	$check_email="SELECT * FROM member where email='$email'";
		$run=mysqli_query($link,$check_email) or die("Failed to connect to server");

		if(mysqli_num_rows($run)>0){
	echo "<script>alert('Email $email already exist in our database. Please try with another email!')</script>";
	echo "window.location='index.html";
		}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `express`.`member`
(`firstname`, `lastname`, `username`, `email`,`password`,`cpassword`) VALUES ('$firstname', '$lastname', 
'$username', '$email', '$password', '$cpassword')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
echo "<script language=\"JavaScript\">\n";
echo "alert('Registration succesful!');\n";
echo "window.location='Login.html'";
echo "</script>";
}
}
?>

