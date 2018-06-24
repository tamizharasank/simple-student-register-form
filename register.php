<?php

$localhost='localhost';
$username='root';
$password='root';
$dbname='pana';
$conn = mysqli_connect($localhost,$username,$password,$dbname);
if(!$conn ) {
die('Could not connect: ' . mysqli_error());
}

$ss=json_decode(file_get_contents("php://input"));
$data = array();
$error = array();
if (empty($ss->name)) {
	$error["name"]="name is required";
}
if (empty($ss->email)) {
	$error["email"]="email is required";
}
if (empty($ss->dob)) {
	$error["dob"]="DOB is required";
}
if (empty($ss->state)) {
	$error["state"]="state is required";
}
if (empty($ss->roll)) {
	$error["roll"]="roll is required";
}
if (empty($ss->city)) {
	$error["city"]="city is required";
}
if (empty($ss->address)) {
	$error["address"]="address is required";
}
if (empty($ss->mobile)) {
	$error["mobile"]="mobile is required";
}
if (empty($ss->password)) {
	$error["password"]="password is required";
}
if (!empty($error)) {
	$data["error"] = $error;
}
else{
	$name = mysqli_real_escape_string($conn,$ss->name);
	$email = mysqli_real_escape_string($conn,$ss->email);
	$password = mysqli_real_escape_string($conn,$ss->password);
	$password = md5($password);
	$roll = mysqli_real_escape_string($conn,$ss->roll);
	$state = mysqli_real_escape_string($conn,$ss->state);
	$city = mysqli_real_escape_string($conn,$ss->city);
	$address = mysqli_real_escape_string($conn,$ss->address);
	$dob = mysqli_real_escape_string($conn,$ss->dob);
	$mobile = mysqli_real_escape_string($conn,$ss->mobile);
	$sql = "INSERT INTO register (name,email,password,roll,state,city,address,dob,mobile) Values ('$name','$email','$password','$roll','$state','$city','$address','$dob','$mobile')";
	if (mysqli_query($conn,$sql)) {
		$data["message"] = "inserted records sucessfully";
	}

}
echo json_encode($data);



?>
