<?php 
	include "../includes/config.php";	
	$data = $_POST["json"];
	$data = split(",",$data);
	$name = $data[0];
	$likes = (int)$data[1];
	$up = mysqli_query($connection, "UPDATE `places` SET `likes` = ". $likes ." WHERE `name` = '" . $name . "'");
	print_r(json_encode($data));
 ?>