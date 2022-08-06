<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"express");
$username=$_POST['username'];
$model=$_POST['model'];
$processor=$_POST['processor'];
$motherboard=$_POST['motherboard'];
$problem=$_POST['desc'];
$solution=$_POST['solution'];
$tech=$_POST['tech'];


if(isset($_POST['submit']))
{
	$insert="INSERT INTO `express`.`report` (`username`, `model`,`processor`,`motherboard`,`desc`,`solution`,`tech`) values ('$username','$model','$processor','$motherboard','$desc','$solution','$tech')";
	mysqli_query($link,$insert) or die(mysqli_error($link));
}
	
?>
