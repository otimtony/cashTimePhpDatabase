<?php


$usertotalSavingsExpenditure = $_POST['totalSavingsExpenditure'];
$usertotalTransportExpenditure = $_POST['totalTransportExpenditure'];
$usertotalMedicalExpenditure= $_POST['totalMedicalExpenditure'];
$usertotalHomeneedsExpenditure = $_POST['totalHomeneedsExpenditure'];
$usertotalEducationExpenditure= $_POST['totalEducationExpenditure'];
$usertotalOthersExpenditure = $_POST['totalOthersExpenditure'];

$user = "ivan";
$pass = "m3tr0n3t";
$host= "idev2.gcinnovate.com";
$dbname="cashTime"

$con = mysqli_connect($host,$user,$pass,$dbname);
$sql="insert into Expenditure(totalSavingsExpenditure,totalTransportExpenditure,totalMedicalExpenditure,totalHomeneedsExpenditure,totalEducationExpenditure,totalOthersExpenditure) values('".$usertotalSavingsExpenditure."','".$usertotalTransportExpenditure."','".$usertotalMedicalExpenditure."','".$usertotalHomeneedsExpenditure."','".$usertotalEducationExpenditure."','".$usertotalOthersExpenditure."');";

if ($con->query($sql) === TRUE) {
    $last_id = $con->insert_id;
    echo "" . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>