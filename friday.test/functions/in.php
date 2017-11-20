<?php 
	setcookie("user_id", 1, time() + 100000);
	include '../includes/config.php';
 	$ar = $_POST['json'];
 	$ar = split(",", $ar);
 	$login = $ar[0];
 	$pas = $ar[1];
 	$q = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '" . $login . "' AND `password` = '" . $pas . "'");
 	if(mysqli_num_rows($q) == 0) {
 		echo json_encode("INCORRECT LOGIN OR PASSWORD");
 		exit();
 	}
 	$user = mysqli_fetch_assoc($q);
 	$send = ['true',$user['user_id']];
 	print_r(json_encode($send));
 ?>