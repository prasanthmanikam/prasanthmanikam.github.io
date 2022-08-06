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
}

?>
</table>