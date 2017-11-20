			if(document.querySelector(".check").innerHTML == "liked") {
				img.src = "images/png/red.png";
			}
			else {
				img.src = "images/png/heart.png";
			}

			let name = document.querySelector("#useful").innerHTML;
			let like = document.querySelector(".like");
			let fav =  document.querySelector(".fav");
			let id = document.querySelector(".none").innerHTML;
			let c = false;

			var num = like.childNodes[1];

			function likes_load() {
				let data = new FormData();
				let ar = [name,num.innerHTML];
				data.append("json", ar);
				fetch("http://friday.test/functions/likes_load.php", {
						method: "POST",
						body: data
					}).then(function(response){
						response.json().then(function(response) {
							console.log(response);
						})
					});
			}

			function load() {
				let data = new FormData();
					let ar = [name, num.innerHTML,id];
					data.append("json", ar);
					fetch("http://friday.test/functions/likes_add.php", {
						method: "POST",
						body: data
					}).then(function(response) {
						response.json().then(function(response){
							if(response == true) {
								num.innerHTML = parseInt(num.innerHTML) - 1;
							    img.src = "images/png/heart.png";
							}
							else {
								num.innerHTML = parseInt(num.innerHTML) + 1;			
								img.src = "images/png/red.png";
							}
							likes_load();
						})
					});
			}

			let check = false;
			function like_up(){	
				
				load();
			}


			function load_fav() {
				let data = new FormData();
				let name = document.querySelector("#useful").innerHTML;
				let ar = [name,id];
				data.append("json", ar);
				fetch("http://friday.test/functions/add_fav.php", {
				method: "POST",
				body: data
					}).then(function(response){
						response.text().then(function(response){
							console.log(response);
						})
					});	
			}


			let check2;
			if(document.querySelector(".fav").innerHTML == "add") {
				check2 = true;
			}
			else {
				check2 = false;
			}

			function add_to_fav() {
				
				if(!check2) {
					fav.innerHTML = "add";
				}
				else {
					fav.innerHTML = "remove";
				}
				check2 = !check2;

				load_fav();
			}


			like.addEventListener("click",like_up);
			fav.addEventListener("click",add_to_fav);