<?php
	include 'connection.php';

	$sql = "select * from onlyone";

	$result = mysqli_query($conn,$sql);
	//$temp = array();
	$output = "";

	while ($row = mysqli_fetch_assoc($result)) {
		# code...
		$output .="<option>".$row['SchoolName']."</option>";
	}
	header('Content-Type: application/text');
	//echo json_encode($temp);
	//echo "Hello";
	echo $output;
	mysqli_close($conn);
?>