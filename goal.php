<?php


$usergoalName = $_POST['goalName'];
$usergoalAmount = $_POST['goalAmount'];
$usergoalStartDate= $_POST['goalStartDate'];
$usergoalEndDate = $_POST['goalEndDate'];

$user = "ivan";
$pass = "m3tr0n3t";
$host= "idev2.gcinnovate.com";
$dbname="cashTime"

$con = mysqli_connect($host,$user,$pass,$dbname);
$sql="insert into Goal(goalName,goalAmount,goalStartDate,goalEndDate) values('".$usergoalName."','".$usergoalAmount."','".$usergoalStartDate."','".$usergoalEndDate."');";
// if(mysqli_query($con,$sql)){
// 	$last_id = $con->insert_id;
// 	echo  "data inserted";
// 	echo "string";
	
// }else{	
// 	echo "Failed";
// }
if ($con->query($sql) === TRUE) {
    $last_id = $con->insert_id;
    echo "" . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>