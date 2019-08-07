var allCities = document.querySelectorAll('.map-address-item');


for (var i = 0; i < allCities.length;i++) {
	allCities[i].addEventListener('click',function(event){
		event.preventDefault();
		var loaderOk = this.querySelector('.map-address-item__loader--ok');
		var loader = this.querySelector('.map-address-item__loader--active');
		var link = this.querySelector('.map-address-item__title');
		for (var i = 0; i < allCities.length;i++) {
			allCities[i].classList.remove('map-address-item--active');
			var loaderAllOk =  allCities[i].querySelector('.map-address-item__loader--ok');
			var loaderAllActive =  allCities[i].querySelector('.map-address-item__loader--active');
			loaderAllOk.style.display = 'none';
			loaderAllActive.style.display = 'none';
		}
		this.classList.add('map-address-item--active');
		loader.style.display = 'flex';
		setTimeout(function(){
			loader.style.display = 'none';
			loaderOk.style.display = 'flex';
		},2000);
		setTimeout(function(){
			document.location.href = link.getAttribute('href');
		},2500);
	})
}