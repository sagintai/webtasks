let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];

/* Write your code here */

var c = document.querySelector("#cars");

for(var i = 0; i < cars.length; i++ ) {
	let div = document.createElement("div");
	div.className = "card";

	let img = document.createElement("img");
	img.src = cars[i]['image_url'];
	img.width = 100;

	let price = document.createElement("span");
	price.innerHTML = cars[i]['price'];
	price.setAttribute("style", "display:none;")
	price.className = 'price';

	let check = document.createElement("span");
	check.innerHTML = "f";
	check.setAttribute("style", "display:none;")
	check.className = 'check';

	let basket = document.createElement("div");
	basket.className = 'basket';
	basket.setAttribute("style", "width: 30px; height: 30px;");
	basket.addEventListener("click", setPrice);

	let p = document.createElement("p");
 	p.innerHTML = cars[i]['brand'] + " " + cars[i]['model'];
 
	div.appendChild(img);
	div.appendChild(price);
	div.appendChild(p);
	div.appendChild(basket);
	div.appendChild(check)
	c.appendChild(div);

	console.log(div);

}

function setPrice(event) {
	var table = document.querySelector("#insideBasket");
	var items = document.querySelector("#items");
	var total = document.querySelector("#sum");

	var target = event.currentTarget.parentNode;
	var check = target.childNodes[4];

	var cur = parseInt(target.childNodes[1].innerHTML);
	if(check.innerHTML === "f"){
		total.innerHTML = parseInt(total.innerHTML) + cur;
		items.innerHTML = parseInt(items.innerHTML)  + 1;
		check.innerHTML = "t";
	}

	else {
		total.innerHTML = parseInt(total.innerHTML) - cur;
		items.innerHTML = parseInt(items.innerHTML)  - 1;
		check.innerHTML = "f";	
	}

}