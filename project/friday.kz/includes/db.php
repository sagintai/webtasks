<?php 
	$connection = mysqli_connect(
			$config['db']['server'],
			$config['db']['username'],
			$config['db']['password'],
			$config['db']['db_name']
		);
	if(!$connection) {
		echo "Error while connecting to server";
		echo mysqli_connect_error();
		exit();
	}
 ?>