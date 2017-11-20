<?php 
	include "includes/config.php";
	$places = mysqli_query($connection, "SELECT * FROM `places` WHERE `id` = " . (int)$_GET['id']);
	$place = mysqli_fetch_assoc($places);
	$categorie = $place['categories_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<script src="functions/update_.js" defer></script>
</head>
<body>
	<div class="add">
		<input type="text" value="<?php echo $place['name'] ?>" name="name" placeholder="name">
		<input type="text" value="<?php echo $place['adress'] ?>" name="adress" placeholder="adress">
		<input type="text" value="<?php echo $place['telephone'] ?>" name="telephone" placeholder="telephone">
		<input type="file" name="image" value=<?php echo $place['image_path'] ?>>
		<textarea name="description" placeholder="description" cols="25" rows="5"><?php echo $place['description'] ?></textarea>
		<select name="categorie" value=<?php echo $place['categories_id'] ?>>
			<?php 
				$cats = mysqli_query($connection, "SELECT * FROM `categories`");
				while($cat = mysqli_fetch_assoc($cats)){
					if($cat['id'] == $categorie) {
						echo "<option selected=selected value=" . $cat['title']. ">" . $cat['title'] . "</option>";
					}
					else {
						echo "<option value=" . $cat['title']. ">" . $cat['title'] . "</option>";	
					}
						?>
			<?php 
				} ?>		
		</select>
		<input type="text" placeholder="likes" value=<?php echo $place['likes'] ?> name="likes">
		<input type="submit" id='updateButton' value="SAVE">
	</div>
	<div id="inv" style="display:none"><?php echo $_GET['id'] ?></div>
	<div id="result"></div>


</body>
</html>