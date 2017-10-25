<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="like_up.js" defer></script>
	<?php include "includes/link.php" ?>
</head>
<body>
	<div class="wrapper">
		<div class="content">
			<div class="header">
				<?php include "includes/header.php" ?>

				<div id="welcome">
					<p>Welcome to Friday</p>
					<span>made by @sagyntai</span>
				</div>
			</div>

			<div class="content_inf">	

				<p id="useful_1">Most popular articles</p>
				<hr class="first">
				<div class="articles">
					<?php 
						$places = mysqli_query($connection, "SELECT * FROM `places` ORDER BY `likes` DESC LIMIT 4");
						while($place = mysqli_fetch_assoc($places)){
					 ?>
						<a href="places.php?name=<?php echo $place['name'] ?>" id="a">
							<div class="block">
								<img src="/images/places/<?php echo $place['image_path']; ?>" alt="blockImage" width="100%">
								<p class="block_logo"><?php echo $place['name'] ?></p>
								<div class="like"><img src="images/png/heart.png" alt="" width="16px"><p><?php echo $place['likes'] ?></p></div>
							</div>
						</a>
					<?php } ?>


				</div>
				<hr class="dashed">
					<p id="useful_2">Lorem</p>
				<hr class="dashed">
				
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