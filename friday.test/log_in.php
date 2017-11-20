<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<script></script>
	<?php include "includes/link.php"; ?>
</head>
<body>
	<div class="wrapper">
		<div class="content">
				<?php include "includes/header.php";
					  
				?>
			<div class="content_inf">
					<div class="reg">
						<h1>Log in</h1>
						<input type="text" id="login">
						<input type="password" id="pas1">
						<input type="submit" id="submit">
					</div>
				<div class="error"></div>
			</div>
		</div>
		
		<script>
			function check() {
				if(document.querySelector("#login").value == "" || document.querySelector("#pas1").value == "" 
				){
					document.querySelector(".error").innerHTML = "<p>Not all sections are filled </p>";
					return;
				}
				let data = new FormData();
				let ar = [document.querySelector("#login").value, document.querySelector("#pas1").value];
				data.append("json", ar);
				fetch("functions/in.php", {
					method: "POST",
					body: data
				}).then(function(response) {
					response.json().then(function(response){
							if(response[0] == "true") {
								document.location.href = "http://friday.test/index.php?user_id=" + response[1];	
							}
					})
				});
			}

			document.querySelector("#submit").addEventListener("click", check);
		</script>
		

		<?php include "includes/footer.php" ?>

	</div>
	
</body>
</html>