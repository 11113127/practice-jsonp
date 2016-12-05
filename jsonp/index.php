<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>JSONP</title>
</head>
<body>
	<table id="divCustomers"></table>
	<script>
		function setTable(result){
			var html = "<tr><th>plateNumber</th><th>color</th></tr>";
			for(var i = 0; i < result.length; i++){
				html += "<tr><td>"+result[i].plateNumber+"</td><td>"+result[i].color+"</td></tr>";
			}
			document.querySelector("#divCustomers").innerHTML = html;
		}
	</script>
	<script src="http://localhost/jsonp/jsonp/jsonp.php?callback=setTable&token=<?php echo $_SESSION["token"]?>"></script>
</body>
</html>