function submit() {
	let login = document.querySelector("#login").value;
	let pas1 = document.querySelector("#password1").value;
	let pas2 = document.querySelector("#password2").value;
	let gender = document.querySelector("#password2").value;

	console.log(gender, pas1);
}

document.querySelector("#addUser").addEventListener("click", submit);