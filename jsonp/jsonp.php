<?php 
header('Content-Type:text/html;charset=utf-8');
// header('Content-Type:application/json');
if(isset($_GET [ 'callback' ]) /*&& isset($_SESSION["token"]) && $_GET [ 'callback' ] == $_SESSION["token"]*/){
	// $callback =  $_GET [ 'callback' ];
	$callback =  htmlspecialchars($_GET [ 'callback' ]);
	$data = "[
	    {'plateNumber':'ABC-123', 'color':'red'},
	    {'plateNumber':'ABC-456', 'color':'orange'},
	    {'plateNumber':'ABC-789', 'color':'yellow'}
	]";
	echo  $callback .  "("  . $data .  ");" ; 
}
?>