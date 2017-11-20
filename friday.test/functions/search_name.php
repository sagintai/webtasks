<?php 
	include "../includes/config.php";
	$str = $_POST['data'];
	$all = mysqli_query($connection, "SELECT * FROM `places`");
	$auth = array();
	while($a = mysqli_fetch_assoc($all)) {
		array_push($auth, $a['name']);
	}
	$auth = array_unique($auth);
	$list = array();
	$str1 = "";
	$str2 = "";

	$length = strlen($str);
	if($length == 0) {
		exit();
	}

	for($i = 0; $i < sizeof($auth); $i++) {
		$auth[$i] = strtolower($auth[$i]);		
		if(substr($auth[$i], 0, $length) == $str){
			array_push($list,$auth[$i]);
		}
	}

	print_r(json_encode($list));
 ?>