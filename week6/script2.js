let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

let cntr = document.querySelector("#countries");
let ct = document.querySelector("#cities");

for(let i = 0; i < countries.length; i++) {
			let n = document.createElement("option");
			n.innerHTML = countries[i];
			cntr.add(n);
		}


function add2() {
	while (ct.hasChildNodes()) {
    	ct.removeChild(ct.lastChild);
	}

	var val = cntr.value;

	var cities = cities_by_country[val];
	for(let i = 0; i < cities.length; i++) {
		let n = document.createElement("option");
		n.innerHTML = cities[i];
		ct.add(n);
	}
}

cntr.addEventListener("click", add2);