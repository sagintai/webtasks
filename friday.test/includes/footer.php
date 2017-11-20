<div class="footer">
			<div class="admin">
				<a href="admin.php"><img src="/images/admin_.png" alt=""></a>
				<!-- <a href="http://127.0.0.1/openserver/phpmyadmin/sql.php?server=1&db=friday_beta&table=places&pos=0&token=f1cd6867894e7aa3382c4aa4ccfd1c4d"><img src="/images/admin_.png" alt=""></a> -->
			</div>
			<div class="footer_right">
				<div class="partyButton">
					<button id="partyButton"><p><a href="start_party.php">New Party!</a></p></button>
				</div>

				<div class="footer_links">
					<ul>
						<li><a href="https://vk.com/eldar30sm"><img src="/images/icons/vk2.png" alt=""></a></li>
						<li><a href="https://instagram.com/raven_of_lenore"><img src="/images/icons/instagram.png" alt=""></a></li>
						<li><a href="https://steampowered.com/solitude"><img src="/images/icons/steam.png" alt=""></a></li>
						<li><a href="https://skype.com"><img src="/images/icons/skype.png" alt=""></a></li>
						<li><a href="https://gmail.com/sagintaio@gmail.com"><img src="/images/icons/g+.png" alt=""></a></li>
					</ul>
				</div>	

			 </div>

			<div class="footer_left">
				<div class="footer_friday"><p>FRIDAY</p></div>
				<div class="footer_text">
					<p>@ 2017 made by Sagyntay 2En04E</p>	
					<p>Beta version of site Friday.kz which will be officially activated on December 2017 | <span>Information by Number 8-747-408-95-75</span></p>
					<a href="http://friday.test/index.php?check=true" id="exit"><?php if($_COOKIE['user_id'] != "") {
						echo "logout";
					} ?></a>
					<?php if ($_COOKIE['user_id'] == ''){ ?>
						<a href="log_in.php">log in</a>
					<?php } ?>
				</div>
			</div>	
			
		</div>
	<script>
		document.querySelector("#exit").addEventListener("click", function() {
			fetch("/functions/exit_.php");
		});
	</script>