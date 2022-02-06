<?php
session_start();
include("includes/connection.php");
$SE = mysqli_query($connect, "SELECT Count(username) AS count FROM user_info WHERE designation = 'Senior Executive';");
$SE = mysqli_fetch_array($SE);
$E = mysqli_query($connect, "SELECT Count(username) AS count FROM user_info WHERE designation = 'Executive';");
$E = mysqli_fetch_array($E);
$GM = mysqli_query($connect, "SELECT Count(username) AS count FROM user_info WHERE designation = 'General Member';");
$GM = mysqli_fetch_array($GM);
?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<title>BUCC Communication and Marketing Department Workspace</title>
	<link rel="stylesheet" type="text/css" href="CSS/about.css">
	<link rel="stylesheet" type="text/css" href="<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	
<script async src='/cdn-cgi/bm/cv/669835187/api.js'></script></head>
<body>
	

<header>
	<nav>
		<div class="logo"><h1>BUCC C&M DEPARTMENT</h1></div>
		<div class="menu">
			<a href="home.html">HOME</a>
			<a href="about.php">ABOUT</a>
			<a href="login.php">LOGIN</a>
		</div>
	</nav>

		<main>
			<div class = "Senior">
				<h1 class ="panel" style="color: white;">PANEL</h1>
				<img class="diractor1" src="CSS/img/mitu apu.PNG" alt="mitu">
				<h2 class = "dir1" style="color: rgb(0, 0, 0);">
					Ishrat jahan Mitu || Director
				</h2>
				<img class="diractor2" src="CSS/img/hridy apu.PNG" alt="mitu">
				<h2 class = "dir2" style="color: rgb(0, 0, 0);">
					Fahmida Ahmed Hridy || Director
				</h2>
				<img class="assistantdiractor" src="CSS/img/Arnab Bhai.PNG" alt="mitu">
				<h2 class = "adir" style="color: rgb(0, 0, 0);">
					Arnab Saha Authro || Assisstant Director
				</h2>
			<div class="Member">
				<h1 class= "count" style="color: white;">Member Count</h1>
				<h2 class= "siex" style="color: white;">Senior Executive = <?php echo $SE['count'] ?></h2> </br>
				<h2 class= "ex" style="color: white;">Executive =  <?php echo $E['count'] ?> </h2> </br>
				<h2 class= "gm" style="color: white;">General Member =  <?php echo $GM['count'] ?></h2> </br>
			</div> 
		</main>	
  </header>

  <footer class="footerr">
	<div class="container">
		<div class="row">
			<div class="footer-col">
				<h4>Contact</h4>
				<ul>
					<li><a href="#">Email: info-C&M@bucc.org</a></li>
					<li><a href="#">Phone: 01600000000</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Follow:</h4>
				<ul>
					<li><a href="#">Facebook: Brac University Computer Club(BUCC)</a></li>
					<li><a href="#">Instagram:  bracucc</a></li>
				</ul>
			</div>
		</div>
	</div>
  </footer>


<script type="text/javascript">(function(){window['__CF$cv$params']={r:'6d5c49a8bc848565',m:'a6nBUGVySVLkidkX0elK3_loNLadDO7pDm_FeeThpKM-1643562354-0-AcvO6rBuoI6/8QLNGoNHDbi04J+7A5Mm1ZeOSZprIKvb28Uwqnbf6XpFQ34GBZGZbq5a2zqZ1fYJjD/grKma5rkd/fmWsafKOOa6jyksMohfioGehIkx/Jky8pjxRgamvywWMjAHw77/JQy5Nd3gNkcJaI0w+2EVMNsxs9QWVex/KMLfEI01BLwKk+DrGtUvIQ==',s:[0x5647a12d67,0xb4239a42a3],}})();</script></body>
</html>