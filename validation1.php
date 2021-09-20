
<?php
session_start();
$name=$_POST['first'];
$email=$_POST['email'];
$contact=$_POST['num'];
$pass1=$_POST['pass'];
$pass2=$_POST['Cpass'];
$reg1= "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
$reg2="/^[6789]([0-9]{9})$/";
$reg3="/^[0-9a-zA-Z]{6,20}$/";
if(preg_match($reg1,"$email") && preg_match($reg2,"$contact") && preg_match($reg3,"$pass1") && preg_match($reg3,"$pass2") ){
  if($pass1==$pass2){
   $email=$_POST['email'];
   $pass=$_POST['pass'];
   $con=mysqli_connect("localhost","Hritik","Hritik@123");
   mysqli_select_db($con,"project");
   $q="insert into user(Email,Password) values('$email','$pass')";
    mysqli_query($con,$q);
     mysqli_close($con);
  header('location:http://localhost:8080/College Project/reg.php');
  }
  else{
      header('location:http://localhost:8080/College Project/reg.html');
}
     
}
else{
 header('location:http://localhost:8080/College Project/reg.html');
}
?>
