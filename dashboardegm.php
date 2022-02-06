<?php session_start();
include("includes/connection.php");
$user = $_SESSION['user'];
$username = mysqli_query($connect, "SELECT Full_Name FROM user_info WHERE Username = '$user'");
$username = mysqli_fetch_array($username);
$username = $username[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>BUCC Communication and Marketing Department Workspace</title>
	<link rel="stylesheet" type="text/css" href="CSS/Dashboard1.css">
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
				<a href="Info.php"> Information of other members</a>
				<a href="logout.php">LOG OUT</a>
			</div>
		</nav>

		<main>
			<h1 class="welcome" style="color: #ffffff;">Hello <?php echo $username ?>,</br> Welcome to the BUCC C&M Workspace</h1>
			<h2 class="task" style="color: #ffffff;">
				Your assigned task: </br>
				<?php
				$query = mysqli_query($connect, "SELECT * FROM task WHERE Username = '$user' ORDER BY deadline");
				$count = 1;
				while ($row = mysqli_fetch_array($query)) {
					if ($row['Status'] != 'Done') {
						$givenby = $row['Given_By'];
						echo $count++ . ". " . $row['Task_Description'] . "</br>Given by: $givenby </br> <div style = 'color : red;'> Deadline:" . $row['deadline'] . "</div>";
						$event_ID = $row['Event_ID'];
						$taskID = $row['Task_ID'];
						if ($taskID < 2000000000) {
							?>
							<a href="submit.php?data=<?php echo $event_ID ?>" style="color: #55ffff; ">Submit</a>
							<?php
						}
						else {

				?>
						<a href="done.php?task=<?php echo $taskID ?>" style="color: #00ff00; ">Mark As Done</a>
				<?php
						}
						echo "</br></br>";
					}
				}
				?>

			</h2>


			<?php
			$query = mysqli_query($connect, "SELECT count(Status) FROM task WHERE username = '$user' AND status = 'Done';");
			$row = mysqli_fetch_array($query);
			if ($row[0] == 0) {
			} else {
				$query = mysqli_query($connect, "SELECT * FROM task WHERE Username = '$user' ORDER BY deadline");
				$count = 1;
				?>
				<h2 class = "task1" style="color: #ffffff;">
				<?php
				echo 'Welldone, you have completed: </br>';
				while ($row = mysqli_fetch_array($query)) {
					if ($row['Status'] == 'Done') {
						echo $count++ . ". " . $row['Task_Description'];
						echo "</br></br>";
					}
				}
			}
			?>
			</h2>
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