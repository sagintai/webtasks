function onSuccess_update(response) {
	console.log(response);
	let res = document.querySelector("#result");
	let p = document.createElement("p");
	p.innerHTML = "Changes are saved";
	res.appendChild(p);
	redirect();
}

function redirect() {
	document.location.href = "http://friday.test/admin.php";
}

function update(){
	let inf = document.querySelector(".add").childNodes;
	let arr = [];
	console.log(inf);
	for(let i = 1; i < 12; i += 2) {
		arr.push(inf[i].value);
	}

	arr.push(inf[12].value);
	arr.push(document.querySelector('#inv').innerHTML);

	let data = new FormData();
	data.append("json", arr);

	fetch("http://friday.test/functions/update.php", {
				method: "POST",
				body: data
			}).then(function(response){
				return response.json().then(onSuccess_update);
	});
}

document.querySelector("#updateButton").addEventListener("click", update);