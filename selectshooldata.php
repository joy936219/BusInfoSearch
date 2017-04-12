<?php
	include 'connection.php';
	$SchoolName = $_GET['SchoolName'];
	$sql = "select distinct SchoolID,SchoolName,SchoolDepName from thisyearbrief where SchoolName ='$SchoolName'";

	$result = mysqli_query($conn,$sql);

	$resulttable = "<table>
  						<tr>
    						<th>學校代碼</th>
    						<th>學校名稱</th>
    						<th>系名</th>
  						</tr>";

	while($row = mysqli_fetch_assoc($result)){
		$resulttable.= "<tr>
    						<td>".$row['SchoolID']."</td>
    						<td>".$row['SchoolName']."</td>
    						<td>".$row['SchoolDepName']."</td>
  						</tr>";

	}
	$resulttable .= "</table>";
	echo $resulttable;
	mysqli_close($conn);

?>