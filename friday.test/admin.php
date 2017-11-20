<?php 
	include "includes/config.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<script src="functions/admin_.js" defer></script>
</head>
<body>

	<?php 
		$places = mysqli_query($connection, "SELECT * FROM `places`");
	 ?>

	<table>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>ADRESS</th>
			<th>IMAGE</th>
			<th>DESCRIPTION</th>
			<th>CATEGORIE_ID</th>
			<th>LIKES</th>
			<th>TELEPHONE</th>
		</tr>
		<?php 
			while($place = mysqli_fetch_assoc($places)){
				?>
				<tr>
					<td><?php echo $place['id'] ?></td>
					<td><?php echo $place['name'] ?></td>
					<td><?php echo $place['adress'] ?></td>
					<td><?php echo $place['image_path'] ?></td>
					<td><?php echo mb_substr($place['description'],0 ,15 , 'UTF-8') ?></td>
					<td><?php echo $place['categories_id'] ?></td>
					<td><?php echo $place['likes'] ?></td>
					<td><?php echo $place['telephone'] ?></td>
					<td><button class="delete">DELETE</button></td>
					<td><button><a href="admin_update.php?id=<?php echo $place['id'] ?>">UPDATE</a></button></td>
				</tr>
				<?php
			}
		 ?>
	</table>
			
							<div class="add">
								<input type="text" placeholder="Name of your place" name="name">
								<input type="text" placeholder="Adress of your place" name="adress">
								<input type="text" placeholder="Your telephone" name="telephone">
								<input type="file" name="image">
								<textarea name="description" cols="25" rows="5" placeholder="describe you place"></textarea>
								<select name="categorie">
									<?php 
									$cats = mysqli_query($connection, "SELECT * FROM `categories`");
									while($cat = mysqli_fetch_assoc($cats)){
								 		?>
										<option value="<?php echo $cat['title'] ?>"> <?php echo $cat['title'] ?></option>
										<?php 
									} ?>		
								</select>
								<input type="text" placeholder="likes" value="0" name="likes" disabled="disabled">
								<input type="submit" id='addButton'>
							</div>
							

	<div id="result"></div>

</body>
</html>