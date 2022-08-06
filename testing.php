<!DOCTYPE html>
<html lang="en">
<head>
 <body>
    <center>
        <table>
        <tr><th>packname</th><th>packprice</th><th>packdesc</th></tr>
        <?php

        $link = mysqli_connect("localhost","root","") or die("failed to connect to server");
        mysqli_select_db($link,"express") or die("failed to connect to server");
            
        $query= "SELECT * FROM packages";

        $result= mysql_query($link,$query);
        while($row = mysqli_fetch_array($result)){
            echo"<tr><td>".$row["packname"]."</td><td>".$row["packprice"]."</td><td>".$row["packdesc"];
        }
        ?>
        </table>
    </center>



</body>
</html>