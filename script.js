// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site. If unable to use gulp or anyother task runner. You can do it manually from online "script minified tools".
// 
//
//                   PLEASE  NOTE 

$(document).ready(function(){
	// ++++++++++++++++++++
	// On scroll add class in header
	// ++++++++++++++++++++
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();

		if (scroll >= 370){
			$("body").addClass("on-scrolled");
		} else {
			$("body").removeClass("on-scrolled");
		}
	});//window scroll

	// ++++++++++++++++++++
	// Responsive Menu
	// ++++++++++++++++++++
	$('.menu-button').click(function(){
		$('.responsive-menu nav').slideToggle();
		$(this).toggleClass('show');
	});//end of menu button


	// ++++++++++++++++++++
	// Slider (On Home page)
	// ++++++++++++++++++++

	//Single page product images Slider
  var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        autoplay: 2500,
        effect: 'fade'
    });
});//end of document ready