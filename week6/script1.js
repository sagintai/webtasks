function strike(event) {
	const b = event.currentTarget.parentNode.childNodes[1];
	let t = b.textContent;
	b.innerHTML = "<s>" + t + "</s>";
}

let tasks = document.querySelector("#tasks").childNodes;

for(let i = 1 ; i < tasks.length; i += 2) { 
	console.log(tasks[i].childNodes[0].addEventListener("click", strike));
}
