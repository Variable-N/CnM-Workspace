<?php session_start();
include("includes/connection.php");
$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BUCC Communication and Marketing Department Workspace</title>
    <link rel="stylesheet" type="text/css" href="CSS/assign.css">
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
                <a href="dashboardse.php">Back to Dashboard</a>
                <a href="logout.php">LOG OUT</a>
            </div>
        </nav>

        <main>
            <div class="txt">
                <div class="basic" style="color: snow;">
                    <?php
                    // $query = mysqli_query($connect, "SELECT * FROM event WHERE Event_ID = '$eventID'");
                    // $row = mysqli_fetch_array($query);
                    ?>

                    <h3>Assign a Task To Executives and General Members</br></br></h3>
                    <form method="POST">
                        <div>
                            <label>Select Task Type:</label>
                            <input type="radio" id="Caption" name="type" value="Caption">
                            <label for="Caption">Caption</label>
                            <input type="radio" id="Other" name="type" value="Other">
                            <label for="Other">Other</label><br>
                            <label> Task Details<br> </label>
                            <textarea name="taskd" rows="4" cols="80"> </textarea>
                            <br><br>
                            <label for="deadline">Deadline:</label>
                            <input type="date" id="deadline" name="deadline">
                            <br>
                            <label> <br>Event ID </label>
                            <input type="text" name="eventID">
                            <span></span>
                            <br>
                            <br>
                            <label>Assign Member Type:</label>
                            <input type="radio" id="v1" name="member" value="General Member">
                            <label for="v1"> General Members </label>
                            <input type="radio" id="v2" name="member" value="Executive">
                            <label for="v2"> Executives</label>
                            <input type="radio" id="v3" name="member" value="All">
                            <label for="v3"> GM and E</label><br>
                            <br>
                        </div>
                        <h3> Upcoming Events: </h3>
                        Event ID -> Event Name -> Date
                        <br>
                        <?php
                        $query = mysqli_query($connect, "SELECT * FROM event WHERE Event_Date >= CURDATE() order by Event_Date Limit 5;");
                        while ($row = mysqli_fetch_array($query)) {
                            echo $row['Event_ID'] . "-> " . $row['Event_Name'] . " -> " . $row['Event_Date'] . "<br>";
                        }
                        ?>
                </div>
                <div class="subbutton">
                    <input type="submit" name="submit" style="background: green; color: aliceblue;" ; value="Submit">
                </div>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $details = $_POST['taskd'];
                    $deadline = $_POST['deadline'];
                    $eventID = $_POST['eventID'];
                    $user = $_SESSION['user'];
                    if ($_POST['member'] == "Executive") {
                        $query = mysqli_query($connect, "SELECT * FROM user_info WHERE Designation = 'Executive';");
                        while ($row = mysqli_fetch_array($query)) {
                            if ($_POST['type'] == 'Caption') {
                                $taskID = rand(1000001010, 1999999001);
                            } else {
                                $taskID = rand(2000001010, 2999999001);
                            }
                            $username = $row['Username'];
                            $query1 = mysqli_query($connect, "INSERT INTO `task` (`Username`, `Task_ID`, `Task_Description`, `deadline`, `Given_By`, `Status`, `Event_ID`) VALUES ('$username', '$taskID', '$details', '$deadline', '$user', 'Not Done', '$eventID')");
                        }
                        header("Location: dashboardse.php");
                    } elseif ($_POST['member'] == "General Member") {
                        $query = mysqli_query($connect, "SELECT * FROM user_info WHERE Designation = 'General Member';");
                        while ($row = mysqli_fetch_array($query)) {
                            if ($_POST['type'] == 'Caption') {
                                $taskID = rand(1000001010, 1999999001);
                            } else {
                                $taskID = rand(2000001010, 2999999001);
                            }
                            $username = $row['Username'];
                            $query1 = mysqli_query($connect, "INSERT INTO `task` (`Username`, `Task_ID`, `Task_Description`, `deadline`, `Given_By`, `Status`, `Event_ID`) VALUES ('$username', '$taskID', '$details', '$deadline', '$user', 'Not Done', '$eventID')");
                        }
                        header("Location: dashboardse.php");
                    } else {
                        $query = mysqli_query($connect, "SELECT * FROM user_info WHERE Designation = 'General Member' or Designation = 'Executive';");
                        while ($row = mysqli_fetch_array($query)) {
                            if ($_POST['type'] == 'Caption') {
                                $taskID = rand(1000001010, 1999999001);
                            } else {
                                $taskID = rand(2000001010, 2999999001);
                            }
                            $username = $row['Username'];
                            $query1 = mysqli_query($connect, "INSERT INTO `task` (`Username`, `Task_ID`, `Task_Description`, `deadline`, `Given_By`, `Status`, `Event_ID`) VALUES ('$username', '$taskID', '$details', '$deadline', '$user', 'Not Done', '$eventID')");
                        }

                        header("Location: dashboardse.php");
                    }
                    echo "FAILED";
                }
                ?>
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

<!-- INSERT INTO `user_info` (`Username`, `ID`, `Full_Name`, `Date_of_Birth`, `Email`, `Password`, `Designation`, `Task_Completed`, `Phone`) VALUES ('mitu', '18101111', 'Ishrat Jahan Mitu', '1997-10-05', 'ishrat.jahan.mitu@g.bracu.ac.bd', '123', 'Director', '20', '01745678901')
 -->