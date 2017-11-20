<?php if($_COOKIE['user_id'] == "") {
	include "registration.php";
	exit();
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/user1.css">
	<?php include "includes/link.php"; ?>
</head>
<body>
	<div class="wrapper">
		<div class="content">
				<?php include "includes/header.php";
					  $users = mysqli_query($connection, "SELECT * FROM `users` where `user_id` = " . $_COOKIE['user_id']);
					  $user = mysqli_fetch_assoc($users);
				?>
			<div class="content_inf">
				<div class="profile">
					<div class="user">
						<div class="user_img"><img src="images/default.jpg" alt="" width="100%"></div>
						<div class="user_inf">
							<p id="name" style="text-align: center"><?php echo $user['login'] ?>	</p>
							<hr>
	
							<p class="inf_log">Main information</p>
							<div class="inf_block"><p class="inf_name">Birthday</p><span><?php echo $user['birthday'] ?></span></div>							
							<div class="inf_block"><p class="inf_name">Gender</p><span><?php echo $user['gender'] ?></span></div>
							<div class="inf_block"><p class="inf_name">City</p><span><?php echo $user['city'] ?></span></div>
							<p class="inf_log">Extra</p>

							<div class="inf_block"><p class="inf_name">About</p><span><?php echo $user['extra'] ?></span></div>
						</div>
					</div>

					<div class="user_fav">
							<h1 style="text-align:center">FAVOURITES</h1>
							<div class="articles">	
								<?php 
									$places = mysqli_query($connection, "SELECT * FROM `places` ORDER BY `likes` DESC");
									$places_id = $user['favourites'];
									$places_id = split(" ", $places_id);
									while($place = mysqli_fetch_assoc($places)){
								 ?>	
								 	<?php 
								 		for($i = 0;$i < sizeof($places_id); $i++){
								 			if($places_id[$i] != $place['id'])
								 				continue;
								 		
								 	 ?>
									<a href="places.php?name=<?php echo $place['name'] ?>" id="a">
										<div class="block">
											<img src="/images/places/<?php echo $place['image_path']; ?>" alt="blockImage" width="100%">
											<p class="block_logo"><?php echo $place['name'] ?></p>
											<div class="like"><img src="images/png/heart.png" alt="" width="16px"><p><?php echo $place['likes'] ?></p></div>
										</div>
									</a>
								<?php }} ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		
		

		<?php include "includes/footer.php" ?>

	</div>
	
</body>
</html>