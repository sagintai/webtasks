<?php 
				include "includes/config.php";
				$data = $_POST["json"];
				$data = split(",", $data);
				$login = $data[0];
				$pas1 = $data[1];
				$pas2 = $data[2];
				$gender = $data[3];
				$photo = $data[4];
				$bd = $data[5];
				$city = $data[6];
				$about = $data[7];

				$q = mysqli_query($connection, "INSERT INTO `users`(`login`, `password`, `gender`, `photo_path`, `birthday`, `city`, `extra`) VALUES (
					'" . $login . "','" . $pas1 . "','" . $gender . "','" . $photo . "','" . $bd . "','" . $city ."','" . $about . "')");
				$q1 = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '" . $login . "'" );
				$user = mysqli_fetch_assoc($q1);
				$user_id = $user['user_id'];
				echo(json_encode($user_id));
 ?>