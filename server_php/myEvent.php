<?php
$json = array();
if (isset($_GET["name"])) {
	$name = $_GET["name"];
	include_once './GCM.php';
	include_once './db_functions.php';
	$db = new DB_Functions();
	$gcm = new GCM();
	$res = $db->myEvent($name);
	if($res){
		$fields = array(
			'myeventlist' => $res,
		);
		$result = json_encode($fields);
		echo $result;
	}else{
		echo "failed";
	}
} else {
	echo "missing";
}
?>