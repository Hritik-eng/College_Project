<?php

$to_email="guptahritik895@gmail.com";
$subject="Simple Email Test via Php";
$body="Hi, This is test email send by PHP Script";
$headers="From: hritikgupta895@gmail.com";

if(mail($to_email, $subject, $body, $headers)) 
{
 echo "Email succsessfully sent to $to_email...";
}
else
{
  echo "Email sending faild...";
}

?>