function onSuccess_rem(response) {
	let res = document.querySelector("#result");
	let div = document.createElement("p");
	div.innerHTML = response;
	res.appendChild(div);
}

function onSuccess_add(response) {
	let table = document.querySelector("table").lastChild;	
	let tr = document.createElement("tr");
	table.appendChild(tr);
	for(let i = 0; i < response.length; i++) {
		let td = document.createElement("td");
		td.innerHTML = response[i];
		tr.appendChild(td);
	}
	let td = document.createElement("td");
	let td2 = document.createElement("td");
	let button = document.createElement("button")
	button.innerHTML = "DELETE";
	button.className += "delete";

	let button2 = document.createElement("button")
	button2.className += "update";
	let a = document.createElement("a");
	a.href = "admin_update.php?id=" + response[0];
	a.innerHTML = "UPDATE";
	button2.appendChild(a);

	td.appendChild(button);
	td2.appendChild(button2);
	tr.appendChild(td);
	tr.appendChild(td2);
	button.addEventListener("click", rem);	
}

function rem(event) {
			let node = event.currentTarget.parentNode.parentNode;
			let id = node.childNodes[1].innerHTML;
			node.remove();

			let data = new FormData();
			data.append("json",id); 
			fetch("http://friday.test/functions/delete.php", {
				method: "POST",
				body: data
			}).then(function(response){
				return response.json().then(onSuccess_rem);
			});
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

		let table = document.querySelector("table");
		let tbody = table.childNodes[1];

		for(let i = 0; i < tbody.childNodes.length; i += 2) {
			let td = tbody.childNodes[i].childNodes;
			let button = td[td.length - 4].childNodes[0];
			button.addEventListener("click", rem);
		}

document.querySelector("#addButton").addEventListener("click", add);

