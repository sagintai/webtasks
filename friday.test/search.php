<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include "includes/link.php" ?>
	<script src="functions/search_.js" defer></script>
</head>
<body>
	<div class="wrapper">
		<div class="content">
			<?php include "includes/header.php";
				  $cats = mysqli_query($connection,"SELECT * FROM `categories`");
			 ?>

				<div class="search" style="margin-bottom: 20px">
						<select name="" id="search-select1">
							<option value="">Select categorie</option>
							<?php while($cat = mysqli_fetch_assoc($cats)){ ?>
								<option value="<?php echo $cat['id'] ?>"><?php echo $cat['title'] ?></option>
							<?php } ?>
						</select>

						<select name="" id="search-select2" value="1">
							<option value="">Select subcategorie</option>
						</select>


					<div class="inp" style="display:flex;flex-direction:column">
						<input type="text" id="place_input" placeholder="Input place name" style="width:100%">
						<div class="places_show"></div>
					</div>
				</div>

				<div class="articles"></div>
	
		</div>

		<?php include "includes/footer.php" ?>

	</div>
</body>
</html>