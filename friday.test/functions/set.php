<?php 
	include "../includes/config.php";
 	$val = $_POST['data'];
 	$q = mysqli_query($connection, "SELECT * FROM `subcats` WHERE `categories_id` = " . (int)$val);
 	$a = array();
 	while($v = mysqli_fetch_assoc($q)) {
 		array_push($a, array(
 			$v['id'],$v['name']
 			));
 	}

 	print_r(json_encode($a));

 ?>