
function load() {
	let str = document.querySelector("#place_input").value;
	let data = new FormData();
	data.append("data", str);
	let list = document.querySelector(".places_show");
	list.style.width = "100%";
	list.innerHTML = '';

	fetch("http://friday.test/functions/search_name.php", {
				method: "POST",
				body: data
			}).then(function(response){
				return response.json().then(function(response) {
					for(let i = 0; i < response.length; i++) {
						let a = document.createElement("a");
						a.innerHTML = response[i];;
						a.href = "http://friday.test/places.php?name=" + response[i];
						a.style.textDecoration = "none";
						a.style.color = "#000000";
						a.style.display = "block";
						a.style.width = "100%";
						a.onmouseover = function() {
							this.style.background = "gray";
							this.style.color = "#fff";
						}
						a.onmouseout = function() {
							this.style.background = "#fff";
							this.style.color = "#000000";
						}
						list.appendChild(a);
					}
				})
				});
}

function set() {
	let val = document.querySelector("#search-select1").value;
	let data = new FormData();
	data.append("data", val);
	let list = document.querySelector("#search-select2");
	list.innerHTML = '';	

	fetch("http://friday.test/functions/set.php", {
				method: "POST",
				body: data
			}).then(function(response){
				return response.json().then(function(response){
					console.log(response);
					for(let i = 0; i < response.length; i++) {
						let option = document.createElement("option");
						option.value = response[i][0];
						option.innerHTML = response[i][1];
						list.appendChild(option);
					}
				})
			})
}

function place() {
	let val = document.querySelector("#search-select2").value;
	let data = new FormData();
	data.append("data", val);
	let list = document.querySelector(".articles");
	list.innerHTML = ''


	fetch("http://friday.test/functions/setPlace.php", {
				method: "POST",
				body: data
			}).then(function(response){
				return response.json().then(function(response){
					for(let i = 0; i < response.length; i++) {
						let div = document.createElement("div");
						let img = document.createElement("img");
						let p1 = document.createElement("p");
						let a = document.createElement("a");
						p1.innerHTML = response[i][1];

						div.className += "block";
						a.id = "a";
						a.href = "places.php?name=" + response[i][1];
						p1.className += "block_logo";

						img.src = "/images/places/" + response[i][2];

						div.appendChild(img);
						div.appendChild(p1);
						img.style.width="100%";
						img.style.maxHeight="400px";

						a.appendChild(div);
						list.appendChild(a);
					}
				})
			});
}

document.querySelector("#search-select2").addEventListener("change", place);
document.querySelector("#search-select1").addEventListener("change", set);
document.querySelector("#place_input").addEventListener("keyup", load);