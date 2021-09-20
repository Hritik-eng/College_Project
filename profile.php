<?php
session_start();
?>

<html>
<head>
<style>
*{
margin:0;
padding:0;
}
body{
background:#ffccbc;
}
.action{
position:fixed;
top:20px;
right:30px;
}
.action .profile{
position:relative;
width:60px;
height:60px;
border-radius:50%;
overflow:hidden;
cursor:pointer;
}
.action .profile img{
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
object-fit:cover;
}
.action .menu{
position:absolute;
top:120px;
right:-10px;
padding:10px 20px;
background:#fff;
width:200px;
box-sizing:0 5px 25px rgba(0,0,0,0.1);
border-radius:15px;
transition:0.5s;
visibility:hidden;
opacity:0;
}
.action .active{
visibility:visible;
opacity:1;
}
.action .menu::before{
content:'';
position:absolute;
top:-5px;
right:28px;
width:20px;
height:20px;
background:#fff;
transform:rotate(45deg);
}
.action .menu h3{
width:100%;
text-align:center;
font-size:18px;
padding:20px 0;
font-weight:500;
color:#555;
line-height:1.2em;
}
.action .menu ul li{
list-style:none;
padding:10px 0;
border-top:1px solid rgba(0,0,0,0.2);
display:flex;
align-items:center;
}
.action .menu ul li img{
max-width:20px;
margin-right:20px;
opacity:0.5;
transition:0.5s;
}
.action .menu ul li:hover img{
opacity:1;
}
.action .menu ul li a{
display:inline-block;
text-decoration:none;
color:#555;
font-weight:500;
transition:0.5s;
}
.action .menu ul li:hover a{
color:blue;
}

</style>

</head>
<body>
<div class="action">
 <div class="profile" onclick="menuToggle();">
  <img src="user.png" >
</div>
<div class="menu">
<h3>My Profile</h3>
 <ul>
  <li><img src="edit.png"><a href="edit.php">Edit Profile</a></li>
  <li><img src="index.png"><a href="index.html">Contact to Admin</a></li>
  <li><img src="settings.png"><a href="#">Settings</a></li>
  <li><img src="logout.png"><a href="logout.php">Log out</a></li>
</ul>
</div>
</div>
<script>
function menuToggle(){
 const toggleMenu= document.querySelector(".menu");
 toggleMenu.classList.toggle('active');
}
</script>
</body>
</html>