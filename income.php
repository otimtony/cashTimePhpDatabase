<?php


$usertotalSalaryIncome = $_POST['totalSalaryIncome'];
$usertotalInvestmentIncome = $_POST['totalInvestmentIncome'];
$usertotalLoanIncome= $_POST['totalLoanIncome'];
$usertotalOthersIncome = $_POST['totalOthersIncome'];

$user = "ivan@165.227.67.248";
$pass = "m3tr0n3t";
$host= "idev2.gcinnovate.com";
$dbname="cashTime"

$con = mysqli_connect($host,$user,$pass,$dbname);
$sql="insert into Income(totalSalaryIncome,totalInvestmentIncome,totalLoanIncome,totalOthersIncome) values('".$usertotalSalaryIncome."','".$usertotalInvestmentIncome."','".$usertotalLoanIncome."','".$usertotalOthersIncome."');";
// if(mysqli_query($con,$sql)){
// 	echo  "data inserted";
	
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
