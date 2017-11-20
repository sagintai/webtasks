let prev = document.getElementById("prev");
		let next = document.getElementById("next");

		let slides = document.getElementsByClassName('slide');

		for(let i = 0; i < slides.length; i++){
			slides[i].style.zIndex = slides.length - i;
		}

		next.onclick = function (){
			let activeEl = document.querySelector(".active");
			if(activeEl.nextElementSibling) {
				activeEl.style.left = "-100%";
				activeEl.classList.remove('active');
				activeEl.nextElementSibling.classList.add('active');
				this.classList.remove('no_active');
				prev.classList.remove('no_active');

				if(!activeEl.nextElementSibling.nextElementSibling) {
					this.classList.add('no_active');
				}

			}
		}

		prev.onclick = function (){
			let activeEl = document.querySelector(".active");
			if(activeEl.previousElementSibling) {
				activeEl.previousElementSibling.style.left = "0%";
				activeEl.classList.remove('active');
				activeEl.previousElementSibling.classList.add('active');
				this.classList.remove('no_active');
				next.classList.remove('no_active');

				if(!activeEl.previousElementSibling.previousElementSibling) {
					this.classList.add('no_active');
				}

			}
		}