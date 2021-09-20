<?php
session_start();
$name=$_GET["admin"];
$pass=$_GET["pass"];

$con=mysqli_connect("localhost","Hritik","Hritik@123","Admin"); // or we can mention the database in other way like  mysqli_select_db($con,"Admin");
if(mysqli_connect_error())
{
echo "Con not connect";
}
$q="select * from admin_login where Admin_Name='$name' && Admin_Password='$pass' ";
$result=mysqli_query($con,$q);
$row=mysqli_num_rows($result);
if($row==1)
{
header('location:http://localhost:8080/phpmyadmin/server_databases.php');
}
else
{
header('location:http://localhost:8080/College project/adminLogin.html');
}
?>