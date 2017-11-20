<?php 
	include "../includes/config.php";	
	$data = $_POST["json"];
	$data = split(",",$data);
	$name = $data[0];
	$user_id = $data[2];
	// $likes = (int)$data[1];
	// $up = mysqli_query($connection, "UPDATE `places` SET `likes` = ". $likes ." WHERE `name` = '" . $name . "'");
	$places = mysqli_query($connection, "SELECT * FROM `places` WHERE `name` = '" . $name . "'");
	$place = mysqli_fetch_assoc($places);
	$id = $place['id'];

	$check = false;
	$q = mysqli_query($connection, "SELECT * FROM `users` WHERE `user_id` = " . $user_id);
	$user = mysqli_fetch_assoc($q);
	$liked = $user['liked'];
	$liked = split(" ", $liked);
	for($i = 0; $i < sizeof($liked); $i++) {
		if($liked[$i] == $id) {
			unset($liked[$i]);
			$check = true;
		}
	}

	if($check == false) {
		array_push($liked, $id);
	}

	$set = join(" ", $liked);
	$q = mysqli_query($connection, "UPDATE `users` SET `liked` = '" . $set . "' WHERE `user_id` = " . (int)$user_id);

	echo json_encode($check);
 ?>