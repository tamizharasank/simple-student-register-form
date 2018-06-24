<?php
$conn = mysqli_connect('localhost','root','root','pana');
if(! $conn ) {
die('Could not connect: ' . mysqli_error());
}
$sql = "SELECT state.id,state.state,city.city,city.referid from state LEFT JOIN city ON state.id = city.referid order by state.id ASC";
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
	$rown['city']=$row['city'];	
	$rown['referid']=$row['referid'];		
	array_push($json, $rown);
}
echo json_encode($json);
}

?>
