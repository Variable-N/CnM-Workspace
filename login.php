<?php
session_start();
include("includes/connection.php");
$login = 0; # 0 = not logged in, 1 = login successful, 2 = login failed

if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$designation = mysqli_query($connect, "SELECT Designation from user_info where Username = '$username'");
	$designation = mysqli_fetch_array($designation);
	$designation = $designation[0];

	if (empty($username)) {
		$login = 2;
	} else if (empty($password)) {
		$login = 2;
	} else {
		$res = mysqli_query($connect, "SELECT * FROM user_info WHERE Username = '$username' AND Password = '$password'");

		if (mysqli_num_rows($res) == 1) {
			$_SESSION['user'] = $username;
			if ($designation == "Executive" or $designation == "General Member") {
				header("Location: dashboardegm.php");
			} else if ($designation == "President" or $designation == "Vice President") {
				header("Location: dashboard1.html");
			} else if ($designation == "Director" or $designation == "Assistant Director") {
				header("Location: dashboard1.html");
			} else if ($designation == "Senior Executive") {
				header("Location: dashboardse.php");
			}
			$login = 1;
		} else {
			$login = 2;
		}
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>BUCC Communication and Marketing Department Workspace</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="stylesheet" type="text/css" href="<link href=" https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

	<script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
</head>

<body>


	<header>
		<nav>
			<div class="logo">
				<h1>BUCC C&M DEPARTMENT</h1>
			</div>
			<div class="menu">
				<a href="home.html">HOME</a>
				<a href="about.php">ABOUT</a>
				<a href="login.php">LOGIN</a>
			</div>
		</nav>

		<main>
			<div class="center">

				<?php if ($login == 0) { ?>
					<h1 style="color: #ffffff;"> Login</h1>
					}
				<?php } else if ($login == 2) { ?>
					<h1 style="color: #ffffff;"> Login</h1>
					<h2 style="color: #ff0000;"> Invalid Username or Password</h2>
					}
				<?php } ?>
				<form method="post">
					<div class="txt">
						<input type="username" name="username" required>
						<span></span>
						<label>Username</label>
					</div>
					<div class="txt">
						<input type="password" name="password" required>
						<span></span>
						<label>Password </label>
					</div>

					<input type="submit" name="login" value="Login">
					<div class="center2">
						<p style="color: #ffffff;">
							# Forgot password? or New member ?</br>
							- Email at info-C&M@bucc.org
						</p>
		</main>
	</header>

	<footer class="footerr">
		<div class="container">
			<div class="row">
				<div class="footer-col">
					<h4>Contact</h4>
					<ul>
						<li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">Email: info-C&M@bucc.org</a></li>
						<li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">Phone: 01600000000</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Follow:</h4>
					<ul>
						<li><a href="https://www.facebook.com/BRACUCC">Facebook: Brac University Computer Club(BUCC)</a></li>
						<li><a href="https://www.instagram.com/bracucc/">Instagram: bracucc</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


	<script type="text/javascript">
		(function() {
			window['__CF$cv$params'] = {
				r: '6d5c49a8bc848565',
				m: 'a6nBUGVySVLkidkX0elK3_loNLadDO7pDm_FeeThpKM-1643562354-0-AcvO6rBuoI6/8QLNGoNHDbi04J+7A5Mm1ZeOSZprIKvb28Uwqnbf6XpFQ34GBZGZbq5a2zqZ1fYJjD/grKma5rkd/fmWsafKOOa6jyksMohfioGehIkx/Jky8pjxRgamvywWMjAHw77/JQy5Nd3gNkcJaI0w+2EVMNsxs9QWVex/KMLfEI01BLwKk+DrGtUvIQ==',
				s: [0x5647a12d67, 0xb4239a42a3],
			}
		})();
	</script>
</body>

</html>