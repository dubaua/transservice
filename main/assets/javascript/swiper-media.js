var testswiper = new Swiper('.hero__container .hero__list-wrapper',{ 
	slidesPerView: 1,
	spaceBetween: 30,
	navigation: {
	    nextEl: '.swiper-button-next',
	    prevEl: '.swiper-button-prev'
	},
	initialSlide: 0,
	loop: true,

	// on: {
	// 	init: function() { 
	// 		var swiper = this;
	// 		console.log('console init:' + swiper.autoplay.running);
	// 	},
	// 	progress: function() {
	// 		var swiper = this;
	// 		console.log(swiper.autoplay.running);
	// 	},
	// },
}) 


$( document ).ready(function() {
	// setTimeout(function(){
	// 	console.log('init');
	// 	$('.cd-panel').on('mouseenter', function(e){ 
	// 	console.log('stop autoplay'); 
	// 	testswiper.autoplay.stop(); 
	// 	}) 

	// 	$('.cd-panel').on('mouseleave', function(e){ 
	// 	console.log('start autoplay'); 
	// 	testswiper.autoplay.start(); 
	// 	})
	// },1500)

});