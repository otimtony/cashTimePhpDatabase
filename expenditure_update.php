<?php


$usertotalSavingsExpenditure = $_POST['totalSavingsExpenditure'];
$usertotalTransportExpenditure = $_POST['totalTransportExpenditure'];
$usertotalMedicalExpenditure= $_POST['totalMedicalExpenditure'];
$usertotalHomeneedsExpenditure = $_POST['totalHomeneedsExpenditure'];
$usertotalEducationExpenditure= $_POST['totalEducationExpenditure'];
$usertotalOthersExpenditure = $_POST['totalOthersExpenditure'];
$expenditure_id = $_POST['id'];

$user = "ivan";
$pass = "m3tr0n3t";
$host= "idev2.gcinnovate.com";
$dbname="cashTime"

$con = mysqli_connect($host,$user,$pass,$dbname);
$sql="
update Expenditure 
set totalSavingsExpenditure = ".$usertotalSavingsExpenditure.",
totalTransportExpenditure = ".$usertotalTransportExpenditure.",
totalMedicalExpenditure = ".$usertotalMedicalExpenditure.",
totalHomeneedsExpenditure = ".$usertotalHomeneedsExpenditure.",
totalEducationExpenditure = ".$usertotalEducationExpenditure.",
totalOthersExpenditure = ".$usertotalOthersExpenditure."
where expenditure_id = ".$expenditure_id;

if(mysqli_query($con,$sql))
	echo true;
else
	echo false;

?>