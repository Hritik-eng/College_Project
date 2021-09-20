<?php
include 'profile.php';  //in this file session is started so dont need to start the session in this file
if(!isset($_SESSION['username']))
 header('location:http://localhost:8080/College project/login.html');

if(!isset($_SESSION['card']))
 header('location:http://localhost:8080/College project/login.html'); 
 
?>

<html>
<head>

<title>Admin</title>
<style>
#dv1{
width:50%;
height:50%;
margin-left:25%;
margin-top:10%;
border:10px solid black;
border-radius:15px;
background-color:grey;
}
h1{
padding-left:25%;
background-color:yellow;
}
#frm{
padding-left:30%;
}
input{
width:250px;
height:30px;
border-radius:10px;
}
#log{
background-color:green;
}

select{
width:250px;
height:25px;
border-radius:10px;
}
option{
color:blue;
}
h3{
color:white;
}
span{
color:orange;
}
</style>

</head>
<body>
<div id="dv1">
<h1>Mobile Recharge Portal</h1>
<br/>
<form id="frm" action="#" method="post" >
<label><h3>Enter Your <span><?php echo $_SESSION['card'];?></span> No.:</h3></label>
<input type="tel" name="mob" id="input1" placeholder="Enter Mobile No." required/>
<br/><br/>
<label><h3>Enter Amount:</h2></label>
<input type="text" name="txt" id="in2" placeholder="Enter Rs" required/><br/>
<select id="op" >
<option>Select Offer</option>
<option value="49">Rs49 50MB 28days</option>
<option value="149">Rs149 2GB 28days</option>
<option value="249">Rs249 1.5GB daily 28days</option>
<option value="299">Rs299 2GB daily 28days</option>
</select>
<br/></br>
<input type="submit" value="Recharge Now" name="login" id="log"/>
</form>
</div>
</body>
</html>

