<?php
session_start();
?>
<html>
<head>
<style>
.main{
background-color:grey;
width:40%;
height:50%;
margin-left:28%;
margin-top:10%;
border:4px solid blue;
border-radius:10px;
}

header{
padding:50px;
padding-left:150px;
}
#btn{
margin-left:43px;
background-color:green;
}

</style>
</head>
<body>
<div class="main">
<header>
<h2>Recover Your Account</h2>
<p>Please fill email id property:</p>
<input type="email" name="email" /> <br/><br/>
<button id="btn">Send Mail</button>
<p>Have an account?<a href="login.html">Log in</a></p>
</header>
</div>
</body>
</html>