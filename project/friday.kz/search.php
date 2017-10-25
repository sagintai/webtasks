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

			<div class="search">

				<form action="places.php" method="GET">
					<input type="text" name="name" placeholder="Input place name">
					<input type="submit" class="submit">
				</form>

			</div>	
		</div>

		<?php include "includes/footer.php" ?>

	</div>
</body>
</html>