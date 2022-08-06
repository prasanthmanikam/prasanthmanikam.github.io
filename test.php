<?php
session_start();
$username=$_SESSION['username'];
$link=mysqli_connect("localhost","root","") or die("failed to connect to server");
 mysqli_select_db($link,"express") or die("failed to connect to server");
  
  $sql="SELECT * FROM packages";
  $query=mysqli_query($link,$sql) or die("failed to connect to server");
   if(!$query) die ("database access failed");
   
   $rows = mysqli_num_rows($query);

   for($j=0; $j < $rows; ++$j)
   {
    echo 'packname:' .mysql_result($result,$j,'packname') . '<br/>';
   }

   ?>