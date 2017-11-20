<?php 
	 include "../includes/config.php";	

	 $arr = $_POST['json'];
	 $arr = split(",", $arr);
	 $name = $arr[0];
	 $adress = $arr[1];
	 $telephone = $arr[2];
	 $img = $arr[3];
	 if($img == '') {
	 	$img = "alt.jpg";
	 }
	 else {
	 	$img = substr($img, 11);
	 }
	 $descr = $arr[4];
	 $cat_name = $arr[5];
	 $likes = (int)$arr[6];
	 $id = (int)$arr[7];
	 $get = mysqli_query($connection, "SELECT * FROM `places` WHERE `id` = " . $id);

	 $cats = mysqli_query($connection, "SELECT * FROM `categories`");
	 $cat_id = null;

	 foreach($cats as $cat) {
		if($cat['title'] == $cat_name) {
			$cat_id = $cat['id'];
				break;
			}
		}

	 $update = mysqli_query($connection, "UPDATE `places` SET `name`='$name',`adress`='$adress',`image_path`='$img',`description`='$descr',`categories_id`=$cat_id,`likes`=$likes,`telephone`='$telephone' WHERE `id`=" . (int)$id);

	 $forecho = array();
	 array_push($forecho, $id, $name, $adress, $img, $descr, $cat_id, $likes, $telephone);

	 // echo(json_encode($forecho));
	 print_r(json_encode($id));
	
 ?>
