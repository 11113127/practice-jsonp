<?php
include_once 'dbconfig.php';
// header('Content-Type:text/html;charset=utf-8');
// header('Content-Type:application/json');

if(isset($_GET[ 'callback' ]) && isset($_GET["id"]) ){
	$callback =  $_GET [ 'callback' ];
	$id =  $_GET [ 'id' ];
	// $callback =  htmlspecialchars($_GET [ 'callback' ]);
	$id =  htmlspecialchars($_GET [ 'id' ]);
	// $replace = array("'" => "&#39;", "\"" => "&quot;");
	// $id = strtr(htmlspecialchars($_GET [ 'id' ]), $replace);
	// %27%20or%201=%271
	$result = mysql_query("SELECT plateNumber,color FROM tbl_uploads where CONVERT(id,char) = '".$id."'");
	$arr = [];
	while($row=mysql_fetch_assoc($result)){
		$arr[]=$row;
	}
	echo  $callback .  "("  . json_encode($arr) .  ");" ; 
}
?>	