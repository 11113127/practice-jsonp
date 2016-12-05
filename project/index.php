<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>上傳檔案</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>上傳檔案</label>
</div>
<div id="body">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<button type="submit" name="btn-upload">上傳</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>成功<a href="view.php">顯示上傳紀錄</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>上傳錯誤</label>
        <?php
	}
	else
	{
		?>
        <label>限定圖檔</label>
        <?php
	}
	?>
</div>
<div id="footer">
</div>
</body>
</html>