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
				<?php include "includes/header.php" ;
				$places = mysqli_query($connection,"SELECT * FROM `places` WHERE `id` = " . (int)$_GET['id'] . " OR `name` = '" . $_GET['name'] . "'");	
				$place = mysqli_fetch_assoc($places);
				?>
			<div class="content_inf">	
				<p id="useful"><?php echo $place['name'] ?></p>
				<hr class="dashed">
					
				<?php  	
						if(mysqli_num_rows($places) == 0) {
							?>
							<h1>There's no such place</h1>
							<h2><a href="search.php">Try again</a></h2>
							<?php
							include "includes/footer.php";
							exit();
						} ?>

				<div class="article">
					<table>
						<tr>
							<td><img src="/images/places/<?php echo $place['image_path']; ?>" alt="blockImage" id="block_image"></td>
						</tr>
						<tr>
							<td>
								<div class="description">
									<p id="descr_title"><?php echo $place['name']?></p>
									<p id="adress"><span>Adress: </span><?php echo $place['adress'] ?></p>
									<p id="decr_text"><?php echo $place['description'] ?></p>
									<p id="telephone"><span>Telephone: </span> <?php echo $place['telephone'] ?></p>
									<div onclick="like_up()" class="like"><img src="images/png/heart.png" alt="" width="16px"><p><?php echo $place['likes'] ?></p></div>
									<?php
									 	$num = $place['likes']; 
									?>
								</td>
							</tr>
						</div>
					</table>
				</div>
			
			</div>
		</div>
		

		<?php include "includes/footer.php" ?>

		<script defer>
			let like = document.querySelector(".like");
			let check = false;
			function like_up(){
				var num = like.childNodes[1];
				
				if(!check){
					num.innerHTML = parseInt(num.innerHTML) + 1;
					check = !check;
					<?php
						$num = intval($num) + 1;
						$add = mysqli_query($connection,"UPDATE `places` SET `likes` = " . $num . " WHERE `id` = " . $place['id']);
					 ?>
				}
				else{
					num.innerHTML = parseInt(num.innerHTML) - 1;
					check = !check;
				}
			}
		</script>

	</div>
	
</body>
</html>