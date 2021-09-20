<?php
session_start();
$Old=$_POST['old'];
$New=$_POST['new'];
$con=mysqli_connect("localhost","Hritik","Hritik@123");
mysqli_select_db($con,"project");
$q="select * from user";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($result)){
if($Old==$row['Password']){
 $x="update user set Password='$New'  where Password='$Old' ";
 $res=mysqli_query($con,$x);
 if($res==1){
   echo "successfully updated";
   exit();
            }
    }
}
echo "You entered a incorrect old password";
?>