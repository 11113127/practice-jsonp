<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>基本資料</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>基本資料</label>
</div>
<div id="body">
	<table width="80%" border="1">
		<tr>
			<td>車牌</td>
			<td>顏色</td>
		</tr>
		<tbody id = "divCustomers">
            
        </tbody>
	</table>

</div>
    <script>
        function setTable(result){
            var html = "";
            for (var i = 0; i < result.length; i++) {
                html += "<tr><td>"+result[i].plateNumber+"</td><td>"+result[i].color+"</td></tr>";
            }
            document.querySelector("#divCustomers").innerHTML = html;
        }
    </script>
    <script src="http://localhost/jsonp/project/setTable.php?callback=setTable&id=1"></script>
</body>
</html>