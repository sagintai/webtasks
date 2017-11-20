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
							<div class="add">
								<input type="text" placeholder="Name of your place" name="name">
								<input type="text" placeholder="Adress of your place" name="adress">
								<input type="text" placeholder="Your telephone" name="telephone">
								<input type="file" name="image">
								<textarea name="description" cols="25" rows="5" placeholder="describe you place"></textarea>
								<select name="categorie">
									<?php 
									$cats = mysqli_query($connection, "SELECT * FROM `categories`");
									while($cat = mysqli_fetch_assoc($cats)){
								 		?>
										<option value="<?php echo $cat['title'] ?>"> <?php echo $cat['title'] ?></option>
										<?php 
									} ?>		
								</select>
								<input style="display:none" type="text" placeholder="likes" value="0" name="likes" disabled="disabled">
								<input type="submit" id='addButton'>
							</div>
						</div>	
					</div>

			</div>
		</div>

		<script>
			function onSuccess_add(response) {
				document.querySelector(".add").innerHTML = "";
				let h1 = document.createElement("h1");
				h1.style.color = "#fff";
				h1.innerHTML = "Succesfully added";
				document.querySelector(".add").appendChild(h1);
			}

			function add(event) {
				let inf = document.querySelector(".add").childNodes;
				let arr = [];
				for(let i = 1; i < inf.length; i += 2) {
					arr.push(inf[i].value);
				}
				let data = new FormData();
				data.append("json", arr);

				fetch("http://friday.test/functions/add.php", {
							method: "POST",
							body: data
						}).then(function(response){
							return response.json().then(onSuccess_add);
					});
				}


			document.querySelector("#addButton").addEventListener("click", add);
		</script>

		<?php include "includes/footer.php" ?>

	</div>/
</body>
</html>