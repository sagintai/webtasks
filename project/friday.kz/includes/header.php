<div class="list">
					<?php 
						include "config.php";
						$places = mysqli_query($connection,"SELECT * FROM `places`");
						$num = mysqli_num_rows($places);
						$rand = rand(1,$num);
					?>
					<ul>
						<div class="friday"><p>FRIDAY</p></div>
						<li><a href="/">Home</a></li>
						<li><a href="list.php">List</a></li>
						<li><a href="places.php?id=<?php echo $rand ?>">Random</a></li>
						<li><a href="search.php">Search</a></li>
					</ul>
				</div>