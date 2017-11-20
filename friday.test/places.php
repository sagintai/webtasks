<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="like.js" defer></script>
	<script src=""></script>
	<?php include "includes/link.php" ?>
</head>
<body>
	<div class="wrapper">
		<div class="content">
				<?php include "includes/header.php" ;
				$places = mysqli_query($connection,"SELECT * FROM `places` WHERE `id` = " . (int)$_GET['id'] . " OR `name` = '" . $_GET['name'] . "'");	
				$users = mysqli_query($connection, "SELECT * FroM `users` WHERE `user_id` = " . (int)$_COOKIE['user_id']);
				$user = mysqli_fetch_assoc($users);
				$place = mysqli_fetch_assoc($places);
				$id = $place['id'];
				?>
			<div class="content_inf">	
				<p id="useful"><?php echo $place['name'] ?></p>
				<hr class="dashed">
					
				<?php  	
						if(mysqli_num_rows($places) == 0) {
							?>
							<h1>There's no such place</h1>
							<h2><a href="search.php">Try again</a></h2>
							</div>
							</div>
							<?php
							include "includes/footer.php";
							exit();
						} ?>

				<?php 
					$check = false;
					$user_id = $_COOKIE['user_id'];
					$users = mysqli_query($connection, "SELECT * FROM `users` WHERE `user_id` = " . (int)$user_id);
					$user = mysqli_fetch_assoc($users);
					$fav = split(" ", $user['favourites']);
					$liked = split(" ", $user['liked']);

					for($i = 0; $i < sizeof($fav); $i++) {
						if($fav[$i] == $id) {
							$check = true;
						}
					}
				 ?>

				 <div class="check" style="display:none"><?php
										$check2 = false; 
										for($i = 0; $i < sizeof($liked); $i++) {
											if($liked[$i] == $id) {
												$check2 = true;
											}
										}
										if($check2) {
											echo "liked";
										}
										else{
											echo "not";
										}
									 ?></div>

				<div class="article">
					<table>
						<tr>
							<td><img src="/images/places/<?php echo $place['image_path']; ?>" alt="blockImage" id="block_image"></td>
						</tr>
						<tr>
							<td class="td_place">
								<div class="description">
									<p id="descr_title"><?php echo $place['name']?></p>
									<p id="adress"><span>Adress: </span><?php echo $place['adress'] ?></p>
									<p id="decr_text"><?php echo $place['description'] ?></p>
									<p id="telephone"><span>Telephone: </span> <?php echo $place['telephone'] ?></p>
									<div class="like"><img src="images/png/heart.png" alt="" width="16px" id="img"><p><?php echo $place['likes'] ?></p></div>
									<?php 
										if($_COOKIE['user_id'] != '') {
											?><p class="fav"><?php 
											if($check) {
												echo "remove";
											}
											else{
												echo "add";
											}
										}
									 ?></p>
										
								</div>
								</td>
							</tr>
						</table>
				</div>
				<p class="none" style="display:none"><?php echo $_COOKIE['user_id'] ?></p>
			
			</div>
		</div>
		

		<?php include "includes/footer.php" ?>

	</div>
	
</body>
</html>