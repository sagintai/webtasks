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
				<?php $cat = mysqli_query($connection, "SELECT * FROM `categories` WHERE `id` = " . $_GET['id']);
					  $cat_name = mysqli_fetch_assoc($cat);	
					  $n = $cat_name['title'];
				 ?>
				<p id="useful"><?php echo $n ?></p>
				<div class="dashed"></div>


				<div class="articles">
				<?php 
						$places = mysqli_query($connection, "SELECT * FROM `places` where `categories_id` = " . $_GET['id']);
						if(mysqli_num_rows($places) == 0) {
							?><h1 style="margin: 0 auto"><?php  echo "There are no places in this categories";?></h1>
							</div>
							</div>
							</div>
							<?php
							include "includes/footer.php" ;
							exit();
						}
						while($place = mysqli_fetch_assoc($places)){
					 ?>
						<a href="places.php?id=<?php echo $place['id'] ?>" id="a">
							<div class="block">
								<img src="/images/places/<?php echo $place['image_path']; ?>" alt="blockImage" width="100%">
								<p class="block_logo"><?php echo $place['name'] ?></p>
								<div class="like"><img src="images/png/heart.png" alt="" width="16px"><p><?php echo $place['likes'] ?></p></div>
							</div>
						</a>
					<?php } ?>

				</div>
				
				<div class="info">
					<hr class="dashed">	
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