<?php 
	include "../includes/config.php";
	$id = (int)$_POST['json'];
	$remove = mysqli_query($connection, "DELETE FROM `places` WHERE `id` = " . $_POST['json']);
	if($remove) {
		echo(json_encode("Successfully removed element with id " . $id));
	}
?>