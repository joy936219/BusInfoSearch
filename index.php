<!DOCTYPE html>
<html>
<head>
	<title>公車查詢</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
		function loaddata(){
    		
        	var xmlhttp = new XMLHttpRequest();
        	xmlhttp.onreadystatechange = function() {
           	 	if (this.readyState == 4 && this.status == 200) {
                	$('#bus_num').append(this.responseText); 
            	}
        	};
       		xmlhttp.open("GET", "bus_name.php", true);
        	xmlhttp.send();
    
		}
		var time;


		function show(){
			var id = $('#bus_num').val();
			var xmlhttp = new XMLHttpRequest();
        	xmlhttp.onreadystatechange = function() {
           	 	if (this.readyState == 4 && this.status == 200) {
                	$('#businfo_table').html(this.responseText); 
            	}
        	};
       		xmlhttp.open("GET", "businfo.php?busid="+id, true);
        	xmlhttp.send();
   
		}
</script>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 40%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body onload="loaddata()">
	<select id="bus_num" >		
	</select>
	<button onclick="show()">查詢</button>
	<div id="businfo_table"></div>

</body>
</html>