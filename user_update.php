<?php


$userhousehold = $_POST['household'];
$usersex = $_POST['sex'];
$userage = $_POST['age'];
$usereducationLevel = $_POST['educationLevel'];
$usernationality = $_POST['nationality'];
$userpoints = $_POST['points'];
$user_id = $_POST['id'];


$user = "ivan";
$pass = "m3tr0n3t";
$host= "idev2.gcinnovate.com";
$dbname="cashTime"

$con = mysqli_connect($host,$user,$pass,$dbname);
$sql="update users
set household = ".$userhousehold.",
sex = '".$usersex."',
age = ".$userage.",
educationLevel = '".$usereducationLevel."',
nationality = '".$usernationality."',
points = ".$userpoints."
where user_id = ".$user_id;


if ($con->query($sql) === TRUE)
    echo true;
else
    echo false;

?>