<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
						<h1>REGISTRATION</h1>
							<input type="text" name="login" placeholder="login" id="login">
							<input type="password" name="password1" placeholder="password" id="pas1">
							<input type="password" name="password2" placeholder="password again" id="pas2">
							<div class="gender">
								<span><p>Male</p><input type="radio" name="gender" value="male" id="r1"></span>
								<span><p>Female</p><input type="radio" name="gender" value="female" id="r2"></span>
								<span><p>Other</p><input type="radio" name="gender" value="other" id="r3"></span>
							</div>
							<input type="file" placeholder="photo" name="photo" id="photo">
							<input type="text" name="birthday" placeholder="birthday" id="bd">
							<input type="text" name="city" placeholder="city" id="city">
							<textarea id="area" placeholder="About yourself" name='a' id="area"></textarea>
							<input type="submit" id='addUser'>
					</div>
				<div class="error"></div>
			</div>
		</div>
		
		<script>
			function check() {
				let check = true;

				if(document.querySelector("#pas1").value != document.querySelector("#pas2").value) {
					document.querySelector(".error").innerHTML = "<p>Passwords are not the same</p>";
					return;
				}

				if(document.querySelector("#login").value == "" || document.querySelector("#pas1").value == "" || 
					document.querySelector("#pas2").value == "" || document.querySelector("#bd").value == "" ||
					document.querySelector("#city").value == "" || document.querySelector("#area").value == ""
				){
					document.querySelector(".error").innerHTML = "<p>Not all sections are filled </p>";
					return;
				}

				load();

				// document.querySelector("form").action = "http://friday.test/success.php";
			}

			function load() {
				let ar = [];
				let gender;
				if(document.querySelector("#r1").checked) {
					gender = document.querySelector("#r1").value;
				}

				if(document.querySelector("#r2").checked) {
					gender = document.querySelector("#r2").value;
				}

				if(document.querySelector("#r3").checked) {
					gender = document.querySelector("#r3").value;
				}

				ar.push(document.querySelector("#login").value);
				ar.push(document.querySelector("#pas1").value);
				ar.push(document.querySelector("#pas2").value);
				ar.push(gender);
				ar.push(document.querySelector("#photo").value);
				ar.push(document.querySelector("#bd").value);
				ar.push(document.querySelector("#city").value);
				ar.push(document.querySelector("#area").value);

				let data = new FormData();
				data.append("json", ar);
				fetch("http://friday.test/success.php", {
					method: "POST",
					body: data
				}).then(function(response) {
					response.json().then(function(response) {
						document.location.href = "http://friday.test/index.php?user_id=" + response;
					})
				});
			}

			document.querySelector("#addUser").addEventListener("click", check);
		</script>
		

		<?php include "includes/footer.php" ?>

	</div>
	
</body>
</html>