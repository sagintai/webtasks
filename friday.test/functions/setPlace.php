<?php 
	include "../includes/config.php";
 	$val = $_POST['data'];
 	$q = mysqli_query($connection, "SELECT * FROM `places` WHERE `subcats_id` = " . (int)$val);
 	$ar = array();
 	while ($place = mysqli_fetch_assoc($q)){
 		array_push($ar, array(
 				$place['id'],
 				$place['name'],
 				$place['image_path'],
 				$place['telephone']
 			));
 	}

 	print_r(json_encode($ar));
 ?>