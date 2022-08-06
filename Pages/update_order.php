<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Express PC Repair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://bootstraptaste.com" />
    <!-- css -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/jcarousel.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <!-- Theme skin -->
    <link href="skins/default.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><span>E</span>xpress PC Repair</a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">ORDERS <b class=" icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="view_order.php">VIEW ORDERS</a></li>
                                    <li class="active"><a href="update_order.php">UPDATE ORDERS</a></li>

                                </ul>
                            </li>
                            <li><a href="E-Shop.html">Technicians</a></li>
                            <li><a href="contact.html">LOG OUT</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            </header>

<style>
table,td,th
{
 padding:10px;

 font-family:Georgia, "Times New Roman", Times, serif;
 border:solid  5px #a1c6da;
 text-align: center;
}
</style>
<div class="container">
<table align="center" border="1" width="70%">
<tr>
<th>Order No</th>
<th>Mobile</th>
<th>Subject</th>
<th>Message</th>
<th>Username</th>
<th>Package</th>
<th>Status</th>
</tr>
</div>

<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"express");
$sql = "SELECT `username`,`mobile`,`subject`,`address`, `message`, `order_no`, `selected_radio`,`status` FROM `order`";
$results = mysqli_query($link,$sql);

//you can add thead tag here if you want your table to have column headers
 while($rowitem = mysqli_fetch_array($results)) {
    echo "<tr>";
    echo "<td>" . $rowitem['order_no'] . "</td>";
    echo "<td>" . $rowitem['mobile'] . "</td>";
    echo "<td>" . $rowitem['subject'] . "</td>";
    echo "<td>" . $rowitem['message'] . "</td>";
    echo "<td>" . $rowitem['username'] . "</td>";
    echo "<td>" . $rowitem['selected_radio'] . "</td>";
    echo "<td>" . $rowitem['status'] . "</td>";
    echo "</tr>";


?>


<?php

if(isset($_POST['update']))
{
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"express");
$results = mysqli_query($link,$sql);

$order_no = $_POST['order_no'];
$status = $_POST['FINISHED'];


$sql = mysql_query("UPDATE order SET status = '$status' WHERE order_no = '$order_no'");

$retval = mysql_query( $link, $sql );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";

}
}

?>
<!-- javascript
        ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
