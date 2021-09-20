
<html>
<head>
<style>
.main{
background-color:grey;
width:40%;
height:55%;
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
h2{
color:orange;
border:3px solid white;
width:235px;
}
p{
color:white;
}

</style>
</head>
<body>
<form action="update.php" method="post">
<div class="main">
<header>
<h1>Edit Password</h1>
<p>Old Password:</p>
<input type="text" name="old"></input>
<p>New Password:</p>
<input type="text" name="new" /> <br/><br/>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="submit" value="Update"/>
</header>
</div>
</form>
</body>
</html>