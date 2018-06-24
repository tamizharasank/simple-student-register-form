<?php
$connection = mysqli_connect("localhost", "root", "root","pana");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql = "SELECT mobile from register where mobile = '$user_check'";
$ses_sql=mysqli_query($sql, $connection);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: login.html'); // Redirecting To Home Page
}
?>