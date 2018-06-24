<?php
session_start(); 
$conn = mysqli_connect('localhost','root','root','pana');

if (!$conn) {
	die('Could not connect: ' . mysqli_error());
}
$user_name = $_POST['user_name'];
$pass = $_POST['password'];	
$pass = md5($pass);
$sql = "SELECT mobile,password from register where mobile = '$user_name' and password = '$pass'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$rows = mysqli_num_rows($result);
if ($rows == 1) {
$_SESSION['login_user']=$user_name; // Initializing Session
header("location: user.php"); // Redirecting To Other Page
} 
else {

}
if (isset($_SESSION['login_user'])) {
	$user = $_SESSION['login_user'];
}
else{
	header('location: login.html');
}



?>
