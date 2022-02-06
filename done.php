<?php 
session_start();
include("includes/connection.php");

if(isset($_GET["task"]))
{
    $uname = $_SESSION['user'];
    $Task_ID = $_GET["task"];
    $query = mysqli_query($connect, "UPDATE `task` SET `Status` = 'Done' WHERE `task`.`Username` = '$uname' AND `task`.`Task_ID` = $Task_ID");
}
header("Location: dashboardegm.php");
