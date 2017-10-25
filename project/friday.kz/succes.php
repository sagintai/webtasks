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
			<?php 
				$name = $_GET['name'];
				$adress = $_GET['adress'];
				$img = $_GET['image'];
				$descr = $_GET['description'];
				$cat_name = $_GET['categorie'];
				$telephone = $_GET['telephone'];

				$cats = mysqli_query($connection, "SELECT * FROM `categories`");
				$cat_id = null;

				foreach($cats as $cat) {
					if($cat['title'] == $cat_name) {
						$cat_id = $cat['id'];
						break;
					}
				}

				$insert = mysqli_query($connection, "INSERT INTO `places`(`name`, `adress`, `image_path`, `description`, `categories_id`, `telephone`) VALUES ('" .  $name . "','". $_adress . "','".$img."','".$descr."','".$cat_id."','".$telephone."')");

				if($insert) {
					?>
					<h1>Succesfully added.</h1>
					<?php 
				}
			 ?>		

			</div>
			
		</div>

		<?php include "includes/footer.php" ?>

	</div>
</body>
</html>