<?php
$link=mysqli_connect("localhost","root","") or die("failed to connect to server");
 mysqli_select_db($link,"express") or die("failed to connect to server");
if(isset($_POST['submit']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 if($username!=''&&$password!='')
 {
  $sql="SELECT * FROM admin where username='".$username."' and password='".$password."'";
  $query=mysqli_query($link,$sql) or die("failed to connect to server");
   $res=mysqli_fetch_row($query);
   if($res)
   {
    session_start();
    $_SESSION['username']=$username;
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Login Succesful!');\n";
    echo "window.location='view_technician.php'";
    echo "</script>";
   }
   else
   {
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Username or Password was incorrect!');\n";
    echo "window.location='member.html'";
    echo "</script>";

   }
 }
 else
 {
  echo "<script language=\"JavaScript\">\n";
  echo "alert('Enter both username or password!');\n";
  echo "window.location='member.html'";
  echo "</script>";
 }
}
?>