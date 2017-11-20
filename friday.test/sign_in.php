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
					<div class="dashed"></div>
					<div class="createOut">	
						<div class="create">
							<form action="succes.php" method="GET">
								<input type="text" placeholder="Login" name="name">
								<input type="text" placeholder="Password" name="password">
								<input type="submit">
							</form>
						</div>	
					</div>

			</div>
		</div>

		<?php include "includes/footer.php" ?>

	</div>/
</body>
</html>