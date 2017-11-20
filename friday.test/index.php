<?php if($_GET['check'] == true) {
	setcookie("user_id","",time() + 10000);
	}
	if($_GET['user_id'] !='') {
		setcookie('user_id', $_GET['user_id'], time() + 10000);
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="like_up.js" defer></script>
	<?php include "includes/link.php" ?>
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<script src="functions/slider.js" defer></script>
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
						$cat_name = mysqli_query($connection, "SELECT * FROM places INNER JOIN categories ON categories.id = places.categories_id");
						while($place = mysqli_fetch_assoc($cat_name)){
					 ?>
						<a href="places.php?name=<?php echo $place['name'] ?>" id="a">
							<div class="block">
								<img src="/images/places/<?php echo $place['image_path']; ?>" alt="blockImage" width="100%" style="max-height: 400px">
								<p class="block_logo" style="font-weight:bold"><?php echo $place['name'] ?></p>
								<div class="like"><p style="text-transform:uppercase"><?php echo $place['adress'] ?></p></div>
								<p style="margin-top:5px;font-weight:bold"><?php echo $place['title'] ?></p>
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
				<hr style="margin-top: 40px">
				<div class="slider">
					<h1 style="text-align:center">Some images to make site more pretty</h1>
					<ul id="slider">
					<li class="slide active">
						<img src="images/places/del_papa.jpg" alt="">
					</li>

					<li class="slide">
						<img src="images/places/del_papa.jpg" alt="">
					</li>

					<li class="slide">
						<img src="images/places/del_papa.jpg" alt="">
					</li>
				</ul>

				<div class="arrows">
					<span class="arrow next" id="next">right</span>
					<span class="arrow prev no_active" id="prev">left</span>
				</div>
				</div>
			</div>
		</div>

		<?php include "includes/footer.php" ?>

	</div>
</body>
</html>