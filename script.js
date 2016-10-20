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

  	// ++++++++++++++++++++
	// Parallax
	// ++++++++++++++++++++
	var bodyHeight      = $('body').height();
    var clientHeight    = $(window).innerHeight();

    // Slider parallax
    $('.slider-parallax').each(function(){
      var slider = $(this);
      var topPos = slider.offset().top;
      var eleHeight = slider.height();

      $(window).scroll(function(){
        var scrolledHeight = $(window).scrollTop();
        slider.css({
          transform: 'translateY('+(-scrolledHeight/8)+'px)',
          MozTransform: 'translateY('+(-scrolledHeight/8)+'px)',
          WebkitTransform: 'translateY('+(-scrolledHeight/8)+'px)',
          msTransform: 'translateY('+ (-scrolledHeight/8)+'px)'
        });
      });
    });//slider parallax each

    // Parallax
    $('.parallax').each(function(){
    	var thisEle		  = 	$(this);
    	var topPos 		  = 	thisEle.offset().top;
    	var eleHeight 	= 	thisEle.height();
    	var thisPos 	  = 	thisEle.css('background-position').split(" ");
    	thisPos 		    = 	parseInt(thisPos[1]);
    	$(window).scroll(function(){
    		var scrolledHeight  = $(window).scrollTop() + clientHeight/1.1;

    		if(scrolledHeight > topPos){
    			resetScroll = (topPos) - ($(window).scrollTop());
    			var newPos 	= 	thisPos + (resetScroll/8);
    			thisEle.css('background-position', 'center ' + newPos+'px');
    		}
    	});//window scroll
    });//Parallax each

    // fade in
    $('.process li').each(function(){
      $(this).addClass('fade-in');
    });//process li
    $('.fade-in').each(function(){
    	var thisEle		= 	$(this);
    	var topPos 		= 	thisEle.offset().top;
    	$(window).scroll(function(){
    		var scrolledHeight  = $(window).scrollTop() + clientHeight/1.8;
    		if(scrolledHeight > topPos){
    			thisEle.addClass('show');
    		}
    	});//window scroll
    });//fade-in

  // ++++++++++++++++++++
  // Scroll Down
  // ++++++++++++++++++++
  $('.scroll-down-wrapper').hover(function(){
    $(this).toggleClass('animate');
  });//scroll-down hover

  $('.section').each(function(){
    var thisEle = $(this);
    var thisElePos;
    var currentScroll;
    var goToThis = thisEle.next('.section').offset().top;
    

    $(window).scroll(function(){
      thisElePos = thisEle.offset().top;
      currentScroll = $(window).scrollTop();
      
      if (currentScroll > thisElePos){
        goToThis = thisEle.next('.section').offset().top;
      }//if
    });//window.scroll

    

    $('.scroll-down-wrapper').click(function(){
        $("html, body").animate({
          scrollTop: goToThis
        }, 1000);
      // $(this).addClass('hide');
    });//scroll-down-wrapper click
    
      return false;
  });//.section each


  // var subFooter = $('.sub-footer').offset().top - 600;
  $(window).scroll(function(){
    if($(this).scrollTop() > 300){
      $('.scroll-down-wrapper').addClass('hide');
    } else {
      $('.scroll-down-wrapper').removeClass('hide');
    }
  });//window.scroll

});//end of document ready