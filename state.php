<?php
$conn = mysqli_connect('localhost','root','root','pana');
if(! $conn ) {
die('Could not connect: ' . mysqli_error());
}
$sql = "SELECT * from state order by state ASC";
$result=mysqli_query($conn,$sql);
$json=array();
if (!$result) {
	die('Could not get data: ' . mysqli_error());
}
else{
while ($row = mysqli_fetch_array($result)) {
	
	// echo '{"name":'.$row['name'].',"price":'.$row['price'].'},';
	$rown['id']=$row['id'];
	$rown['state']=$row['state'];		
	array_push($json, $rown);
}
echo json_encode($json);
}

?>
