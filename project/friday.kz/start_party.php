<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include "includes/link.php" ?>
</head>
<body>
	<div class="wrapper">
		<div class="content">
			<?php include "includes/header.php" ?>

				<div class="content_inf">	
					<div class="dashed"></div>
					<div class="createOut">	
						<div class="create">
							<form action="succes.php" method="GET">
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
								<input type="submit">
							</form>
						</div>	
					</div>

			</div>
		</div>

		<?php include "includes/footer.php" ?>

	</div>/
</body>
</html>