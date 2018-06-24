<?php

$localhost='localhost';
$username='root';
$password='root';
$dbname='t';
$conn = mysqli_connect($localhost,$username,$password,$dbname);
if(!$conn ) {
die('Could not connect: ' . mysqli_error());
}

$ss=json_decode(file_get_contents("php://input"));
$data = array();
$error = array();
if (empty($ss->msg)) {
	$error["msg"]="msg is required";
}
if (empty($ss->dat)) {
	$error["dat"]="date is required";
}
if (!empty($error)) {
	$data["error"] = $error;
}
else{
	$msg = mysqli_real_escape_string($conn,$ss->msg);
	$dat = mysqli_real_escape_string($conn,$ss->dat);
	$sql = "INSERT INTO register (name,email,password,roll,state,city,address,dob,mobile) Values ('$msg','$dat','','','','','','','805633')";
	if (mysqli_query($conn,$sql)) {
		$data["message"] = "inserted records sucessfully";
	}

}
echo json_encode($data);



?>
