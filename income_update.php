<?php


$usertotalSalaryIncome = $_POST['totalSalaryIncome'];
$usertotalInvestmentIncome = $_POST['totalInvestmentIncome'];
$usertotalLoanIncome= $_POST['totalLoanIncome'];
$usertotalOthersIncome = $_POST['totalOthersIncome'];
$income_id = $_POST['id'];

$user = "ivan@165.227.67.248";
$pass = "m3tr0n3t";
$host= "idev2.gcinnovate.com";
$dbname="cashTime"

$con = mysqli_connect($host,$user,$pass,$dbname);

$sql="update Income
set totalSalaryIncome = '".$usertotalSalaryIncome."',
totalInvestmentIncome = '".$usertotalInvestmentIncome."',
totalLoanIncome = '".$usertotalLoanIncome."',
totalOthersIncome= '".$usertotalOthersIncome."'
where income_id = ".$income_id;

if(mysqli_query($con,$sql))
	echo true;
else
	echo false;

?>
