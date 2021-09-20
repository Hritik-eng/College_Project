<?php
$Sim=$_POST['sim'];
$email=$_POST['email'];
$password=$_POST['pass'];
$con=mysqli_connect("localhost","Hritik","Hritik@123");
mysqli_select_db($con,"project");
$q="select * from user where Email='$email' && Password='$password' ";
$result=mysqli_query($con,$q);
$r=mysqli_num_rows($result);
if($r==1)
 { 
   session_start();
   $_SESSION['card']=$Sim;
   $_SESSION['username']=$email; //that is session variable it is available on all files and also accesible from all files
   header('location:http://localhost:8080/College project/home.php');
 }
else
{
header('location:http://localhost:8080/College project/login.html');
}
?>