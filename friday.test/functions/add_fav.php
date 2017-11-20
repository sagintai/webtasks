<?php 
	include "../includes/config.php";	
	$array = $_POST['json'];
	$array = split(",",$array);
	$name = $array[0];
	$user_id = $array[2];
	$user_id = $array[1];
	$query = mysqli_query($connection, "SELECT * FROM `places` WHERE `name` = '" . $name  . "'");
	$place = mysqli_fetch_assoc($query);
	$id = $place['id'];
	$users = mysqli_query($connection, "SELECT * FROM `users` WHERE `user_id` = " . (int)$user_id);
	$user = mysqli_fetch_assoc($users);
	$fav = split(" ", $user['favourites']);

	$check = false;
	for($i = 0; $i < sizeof($fav); $i++) {
		if($fav[$i] == $id) {
			unset($fav[$i]);
			$check = true;
		}
	}

	if($check == false) {
		array_push($fav, $id);
	}

	$set = join(" ", $fav);

	$q = mysqli_query($connection, "UPDATE `users` SET `favourites` = '" . $set . "' WHERE `user_id` = " . (int)$user_id);

	echo($set);
	
 ?>