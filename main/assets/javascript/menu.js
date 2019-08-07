let button = document.querySelector('.nav__burger-wrapper'),
    first = document.querySelector('.nav__burger-first'),
    second = document.querySelector('.nav__burger-second'),
    third = document.querySelector('.nav__burger-third'),
    fourth = document.querySelector('.nav__burger-fourth'),
    dropLink = document.getElementsByClassName('nav__link'),
    navWrapper = document.getElementsByClassName('nav__popup-wrapper'),
    isActive = false;

function onclickDropLink (e) {
    for(let i=0; i<navWrapper.length; i++){
        navWrapper[i].style = 'display: none; opacity: 0';
    }

    if(e.target.nextElementSibling != null) {
        e.target.nextElementSibling.style = 'animation: showDropMenu .5s forwards; display: block';
    }
}

for(let i=0; i<dropLink.length; i++){
    if(dropLink[i].getAttribute('href') == '#'){
        dropLink[i].parentNode.style = 'margin: 8px 0;';
        dropLink[i].parentNode.addEventListener('click', onclickDropLink);
    } else {
        // console.log('не #!');
    }
}

function citySelector() {
	var citySelector = document.querySelector('.city-selector');
	var languageButton = citySelector.querySelector('.city-selector__label');
	
	languageButton.addEventListener('click',function(event){
		event.preventDefault();
		if(citySelector.classList.contains('city-selector--opened')) {
			citySelector.classList.remove('city-selector--opened')
		} else {
			citySelector.classList.add('city-selector--opened')
		}
	});

}

function onClickPrimaryButton() {
    let element = document.querySelector('.nav__list');


      if(!isActive) {
        element.classList.add('nav__is-active');
        first.classList.add('nav__burger-first-active');
        second.classList.add('nav__burger-second-active');
        third.classList.add('nav__burger-third-active');
        fourth.classList.add('nav__burger-fourth-active');
        isActive = true;
    } else {
        let first = document.querySelector('.nav__burger-first');
        element.classList.remove('nav__is-active');
        first.classList.remove('nav__burger-first-active');
        second.classList.remove('nav__burger-second-active');
        third.classList.remove('nav__burger-third-active');
        fourth.classList.remove('nav__burger-fourth-active');
        isActive = false;
    }




}
const scrollNavImg = function() {

    var menu = $('nav.nav');
    // var page = $('.hero');

    var defTop = menu.offset().top;

    $(window).on('scroll', function(){
        if (defTop - ($('body').scrollTop() || $('html').scrollTop()) <= 0) {
            menu.addClass('scroll_nav');
            // page.addClass('scroll_page');
    //         // $('.nav__logo').attr('src', 'http://images.trans-s.su/assets/images/logo_narrow_ru.svg');
        } else {
            menu.removeClass('scroll_nav');
            // page.removeClass('scroll_page');
    //         // $('.nav__logo').attr('src', 'http://images.trans-s.su/assets/images/logo.png');
        }
    });
};

const whileSlider = function () {
    const startSlider = setInterval(function(){
        $(".hero__button-next").click();
    }, 3000);

    $(".hero__item ").on('click', function(){
        clearInterval(startSlider);
    });
}



$('document').ready(function(){
    scrollNavImg();
		whileSlider();
		citySelector();
		button.addEventListener('click', onClickPrimaryButton);

});

$(document).ready(function(){
	var geolocation;
	ymaps.ready(function(){
		geolocation = ymaps.geolocation.city;
			$('.what-is-city__title').html('  ' + geolocation);
	});

	$('.what-is-city__yes').click(function(){
		$.cookie('citySelected', 'true', { expires: 7 });
		$('.what-is-city').fadeOut('fast');
		if (document.location.host != 'trans-s.su' && geolocation == 'Челябинск') {
			document.location.href = "https://trans-s.su/";
		}
	})
	if ($.cookie('citySelected') != 'true') {
		$('.what-is-city').fadeIn('slow').css('display','flex');
	}
	$('.what-is-city__no').click(function(){
		$('.what-is-city__list').slideDown('fast');
		$(this).prop('disabled',true).css('opacity','0.7');
	})
	$('.city-mobile-btn').click(function(){
		$('.what-is-city').fadeIn('slow').css('display','flex');
		$('.what-is-city__list').slideDown('fast');
		$('.what-is-city__no').prop('disabled',true).css('opacity','0.7');
	})

});