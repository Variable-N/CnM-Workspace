<?php session_start();
include("includes/connection.php");
$user = $_SESSION['user'];
if (isset($_GET["data"])) {
	$eventID = $_GET["data"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>BUCC Communication and Marketing Department Workspace</title>
	<link rel="stylesheet" type="text/css" href="CSS/submit.css">
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
			<div class="txt">
				<div class="basic" style="color: snow;">
					<?php
					$query = mysqli_query($connect, "SELECT * FROM event WHERE Event_ID = '$eventID'");
					$row = mysqli_fetch_array($query);
					?>

					<h3>Caption Submission</br></h3>
					<h3> Event name: <?php echo $row['Event_Name'] ?> </h3>
				</div>
				<form method="POST">
					<div class="submitinfo">
						<textarea name="captionn" rows="4" cols="80"> </textarea>
						<span></span>
						<label> </label>
					</div>
			</div>
			<div class="subbutton">
				<input type="submit" name="submit" style="background: green; color: aliceblue;" ; value="Submit">
			</div>
			</form>
			<?php
			if (isset($_POST['submit'])) {
				$captionn = $_POST['captionn'];
				$user = $_SESSION['user'];
				$query = mysqli_query($connect, "INSERT INTO `captions` (`Username`, `Event_ID`, `Submitted_Caption`) VALUES ('$user', '$eventID', '$captionn')");
				$query = mysqli_query($connect, "UPDATE `task` SET `Status` = 'Done' WHERE `task`.`Username` = '$user' AND `task`.`Event_ID` = $eventID");
				header("Location: dashboardegm.php");
			}
			?>
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

<!-- INSERT INTO `user_info` (`Username`, `ID`, `Full_Name`, `Date_of_Birth`, `Email`, `Password`, `Designation`, `Task_Completed`, `Phone`) VALUES ('mitu', '18101111', 'Ishrat Jahan Mitu', '1997-10-05', 'ishrat.jahan.mitu@g.bracu.ac.bd', '123', 'Director', '20', '01745678901')
 -->