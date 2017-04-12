<?php
	include 'connection.php';
	$busid = $_GET['busid'];
	$url = "http://ibus.tbkc.gov.tw/xmlbus/GetEstimateTime.xml?routeIds=1,";
	$url.=$busid;

	$xml = simplexml_load_file($url);


	//echo $xml->BusInfo[0]->Route[0]->EstimateTime[0]['StopID'];
	$list = '';

	$list .= '<table class="table table-striped">
  					<tr>
    					<th>編號</th>
    					<th>站名</th>
    					<th>到站時間</th>
  					</tr>';

	foreach ($xml->BusInfo[0]->Route[0] as  $value) {
		$id=$value['seqNo'];
		$name=$value['StopName'];
		$time=$value['comeTime'];
		if($time==""){
			$time = "尚未發車";
		}
		


		$list .= '
  					<tr>
    					<td>'.$id.'</td>
    					<td>'.$name.'</td>
    					<td>'.$time.'</td>
  					</tr>';
	}
	$list .='</table>';

	echo $list;
?>