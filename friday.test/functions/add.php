<?php 
	 include "../includes/config.php";	

	 $arr = $_POST['json'];
	 $arr = split(",", $arr);
	 $name = $arr[0];
	 $adress = $arr[1];
	 $telephone = $arr[2];
	 $img = $arr[3];
	 $descr = $arr[4];
	 $cat_name = $arr[5];

	 $cats = mysqli_query($connection, "SELECT * FROM `categories`");
	 $cat_id = null;

	 foreach($cats as $cat) {
		if($cat['title'] == $cat_name) {
			$cat_id = $cat['id'];
				break;
			}
		}

	 $insert = mysqli_query($connection, "INSERT INTO `places`(`name`, `adress`, `image_path`, `description`, `categories_id`, `telephone`) VALUES ('" .  $name . "','". $adress . "','".$img."','".$descr."','".$cat_id."','".$telephone."')");

	 $get = mysqli_query($connection, "SELECT * FROM `places` ORDER BY `id` DESC LIMIT 1");
	 $id = mysqli_fetch_assoc($get)['id'];

	 $forecho = array();
	 array_push($forecho, $id, $name, $adress, $img, $descr, $cat_id, 0, $telephone);

	 echo(json_encode($forecho));
	
 ?>