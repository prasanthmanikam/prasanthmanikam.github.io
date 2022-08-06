<?php
$result = mysqli_query($con, "SELECT * FROM users WHERE ID='".$_GET['id']"'");
$row = mysqli_fetch_array($result);
echo $row['username'];
echo $row['email'];
?>