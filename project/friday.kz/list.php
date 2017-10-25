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
				<p id="useful">Categories</p>
				<div class="dashed"></div>


				<div class="articles">
				<?php 
						$cats = mysqli_query($connection, "SELECT * FROM `categories`");
						while($cat = mysqli_fetch_assoc($cats)){
					 ?>
						<a href="cats.php?id=<?php echo $cat['id'] ?>" id="a">
							<div class="block">
								<img src="/images/places/<?php echo $cat['image']; ?>" alt="blockImage" width="100%">
								<p class="block_logo"><?php echo $cat['title'] ?></p>
							</div>
						</a>
					<?php } ?>

				</div>
				
				<div class="info">
					<div class="fixed">
						
						<div class="element">
							<img src="images/png/landing_png_1.png" alt="" width="50%">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam expedita sequi sapiente fuga corporis autem dolorum ratione est vitae dignissimos!</p>
						</div>

						<div class="element">
							<img src="images/png/landing_png_2.png" alt="" width="50%">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam expedita sequi sapiente fuga corporis autem dolorum ratione est vitae dignissimos!</p>
						</div>

						<div class="element">
							<img src="images/png/landing_png_3.png" alt="" width="50%">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam expedita sequi sapiente fuga corporis autem dolorum ratione est vitae dignissimos!</p>
						</div>
					
				</div>
					
				</div>
			</div>
		</div>

		<?php include "includes/footer.php" ?>

	</div>
</body>
</html>