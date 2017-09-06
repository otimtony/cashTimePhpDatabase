<?php


$userhousehold = $_POST['household'];
$usersex = $_POST['sex'];
$userage = $_POST['age'];
$usereducationLevel = $_POST['educationLevel'];
$usernationality = $_POST['nationality'];
$userpoints = $_POST['points'];

$user = "ivan";
$pass = "m3tr0n3t";
$host= "idev2.gcinnovate.com";
$dbname="cashTime"

$con = mysqli_connect($host,$user,$pass,$dbname);
$sql="insert into users(household,sex,age,educationLevel,nationality,points) values('".$userhousehold."','".$usersex."','".$userage."','".$usereducationLevel."','".$usernationality."','".$userpoints."');";
// if(mysqli_query($con,$sql)){
//     echo  "data inserted";
    
// }else{  
//     echo "Failed";
// }

if ($con->query($sql) === TRUE) {
    $last_id = $con->insert_id;

    echo "" . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


?>