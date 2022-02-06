<!DOCTYPE html>
<html lang="en">
<?php session_start();
include("includes/connection.php");
$user = $_SESSION['user'];
$username = mysqli_query($connect, "SELECT Full_Name FROM user_info WHERE Username = '$user'");
$username = mysqli_fetch_array($username);
$username = $username[0];
?>
<head>
	<meta charset="utf-8">
	<title>BUCC Communication and Marketing Department Workspace</title>
	<link rel="stylesheet" type="text/css" href="CSS/info.css">
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
				<a href="dashboardegm.php">Back to Dashboard</a>
				<a href="logout.php">LOG OUT</a>
			</div>
		</nav>

		<main>
			<div class="info" style="color: aliceblue;">
				<h3 class="dir">
					Director</br></br>
					<?php
					$query = mysqli_query($connect, "SELECT Full_Name, Email FROM user_info WHERE designation = 'Director';");
					$count = 1;
					while($row = mysqli_fetch_array($query)) {
					$name = $row['Full_Name'];
					$email = $row['Email'];
					echo "($count)Name: $name </br>";
					echo "<div style = 'color: cyan' >Email: $email</div> </br>";
					$count++;
					}
					?>
				</h3>
				<h3 class="adir">
					Assisstant Director</br></br>
					<?php
					$query = mysqli_query($connect, "SELECT Full_Name, Email FROM user_info WHERE designation = 'Assistant Director';");
					$count = 1;
					while($row = mysqli_fetch_array($query)) {
					$name = $row['Full_Name'];
					$email = $row['Email'];
					echo "($count)Name: $name </br>";
					echo "<div style = 'color: cyan' >Email: $email</div> </br>";
					$count++;
					}
					?>
				</h3>
				<h3 class="se">
					Senior Executive</br></br>
					<?php
					$query = mysqli_query($connect, "SELECT Full_Name, Email, Phone FROM user_info WHERE designation = 'Senior Executive';");
					$count = 1;
					while($row = mysqli_fetch_array($query)) {
					$name = $row['Full_Name'];
					$email = $row['Email'];
					$phone = $row['Phone'];
					echo "($count)Name: $name </br>";
					echo "<div style = 'color: #00FFFF' >Email: $email</div>";
					echo "<div style = 'color: #00AACC' >Number: $phone</div> </br>";
					$count++;
					}
					?>
				</h3>
			</div>
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