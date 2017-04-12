<!DOCTYPE html>
<html>
<head>
	<title>公車查詢</title>
    <meta charset="utf-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        function keywordsrh(){
            
            var keyword = $('#keyword').val();
            if(keyword == ""){
                $('#businfo_table').html('');
                loaddata();
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    $('#bus_num').html(this.responseText); 

                }
            };
            xmlhttp.open("GET", "inputsearch.php?keyword="+keyword, true);
            xmlhttp.send();
    
        }
</script>
<style type="text/css">
    button{
        width: 100%;
    }
</style>
</head>
<body onload="loaddata()">
    <div class="container-fluid">
        <h2>公車時刻查詢</h2>
        <div class="form-group">
            <p><input id="keyword" type="text" class="form-control" placeholder="Search.." onkeyup="keywordsrh()"></p>
            <div class="row">
                <div class="col-sm-11"> 
                    <select id="bus_num" class="form-control"></select>
                </div>
                
                <div class="col-sm-1">
                    <button onclick="show()" class="btn btn-default">查詢</button>
                </div>
                <div class="">
            
            
        </div>
        <br>
        <div id="businfo_table"></div>  
        
       
    </div>
	</div>

</body>
</html>