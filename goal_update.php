<?php


$usergoalName = $_POST['goalName'];
$usergoalAmount = $_POST['goalAmount'];
$usergoalStartDate= $_POST['goalStartDate'];
$usergoalEndDate = $_POST['goalEndDate'];
$goal_id = $_POST['id'];

$user = "ivan";
$pass = "m3tr0n3t";
$host= "idev2.gcinnovate.com";
$dbname="cashTime"

$con = mysqli_connect($host,$user,$pass,$dbname);
$sql="update Goal
set goalName = '".$usergoalName."',
goalAmount = '".$usergoalAmount."',
goalStartDate = '".$usergoalStartDate."',
goalEndDate = '".$usergoalEndDate."'
where goal_id = ".$goal_id;

if ($con->query($sql) === TRUE)
    echo true;
else
    echo false;

?>