$(document).ready(function(){

	$(".block__spinner").fadeOut();
	$(".spinner").delay(400).fadeOut('slow');

	function heightDetect(){
		$('.top , .content__top, .content__about, .content__partners').css('height', $(window).height());
	};

	heightDetect()

	$(window).resize(function(){
		heightDetect();
	})

	$('.parallax-window').parallax({
		imageSrc: '../img/main-bg.jpg', 
		position: 'top center'
	});

	$('.bookingForm__parallax').parallax({
		imageSrc: '../img/book-bg.jpg', 
		position: 'top center'
	});

	function menuLinkActive(){
		$('.menu__link').each(function(){
			if ($(this).html() == $('title').html()) {
				$(this).addClass('menu__link_active');
			};
			if ($(this).hasClass('menu__link_submenu')){
				$(this).closest('.menu_level_1').prev('.menu__link').addClass('menu__link_active');
			};
		});

		$('.albumOne__link').each(function(){
			if ($(this).hasClass('albumOne__link_active')){

				$('.menu__link').each(function(){
					if ($(this).html() == ('Gallery')) {
						$(this).addClass('menu__link_active');
					};
				});
			};
		});
	}
	menuLinkActive();




	$("#tourSlider").carousel( { interval: 5000 } );

	$('.aboutMe__heading, .tourHeader__heading, .services__heading, .gallery__heading, .albumOne__heading, .partners__heading, .contact__heading').addClass('animated fadeInDown');

	$('.top__map').addClass('animated fadeInRightBig');
	$('.top__cities').addClass('animated fadeInLeftBig')

});

/*------Main Gallery------*/

$(function($){
	'use strict';
	// -----------------------------------------
	//   Basic Navigation
	// -------------------------------------
	(function () {
		var $frame  = $('#galleryMain');
		var $slidee = $frame.children('ul').eq(0);
		var $wrap   = $frame.parent();

		// Call Sly on frame
		$frame.sly({
			horizontal: 1,
			itemNav: 'basic',
			smart: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 3,
			scrollBar: $wrap.find('.scrollbar'),
			scrollBy: 1,
			pagesBar: $wrap.find('.pages'),
			activatePageOn: 'click',
			speed: 285,
			elasticBounds: 1,
			easing: 'easeOutExpo',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,
			cycleBy: 'items',
			cycleInterval: 3000
		});
	}());
});

/*-----anotherTours Gallery------*/

$(function($){
	'use strict';
	// -----------------------------------------
	//   Basic Navigation
	// -------------------------------------
	(function () {
		var $frame  = $('#anotherTours');
		var $slidee = $frame.children('ul').eq(0);
		var $wrap   = $frame.parent();

		// Call Sly on frame
		$frame.sly({
			horizontal: 1,
			itemNav: 'basic',
			smart: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 3,
			scrollBar: $wrap.find('.scrollbar'),
			scrollBy: 1,
			activatePageOn: 'click',
			speed: 285,
			elasticBounds: 1,
			easing: 'easeOutExpo',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,
		});
	}());

	/*----Main booking form------*/

	/*$(document).on('submit', '#bookingForm', function(e) {
		e.preventDefault();
		var bookMessage =  $('#bookingForm__message'),
		xM = ($(window).width() - bookMessage.width())/2,
		yM = ($(window).height() - bookMessage.height())/2,
		name = $('input[name=senderName]'),
		name_text = name.val(),

		email = $('input[name=email]'),
		email_text = email.val(),

		phone = $('input[name=phone]'),
		phone_text = phone.val(),

		qty = $('select[name=quantity]'),
		qty_text = qty.val(),

		country = $('select[name=country]'),
		country_text = country.val(),

		date = $('div[data-name=date]'),
		date_text = date.val(),

		dayQty = $('input[name=dayQuantity]'),
		dayQty_text = dayQty.val(),

		firstVisit = $('input[name=firstVisit]'),
		firstVisit_text = firstVisit.val(),

		tour = $('input[name=tour]'),
		tour_text = tour.val(),

		message = $('textarea[name=message]'),
		message_text = message.val();
		
		$.ajax({
			url: "https://formspree.io/irayakovskaya@gmail.com",
			method: "POST",
			data: {
				name: name_text,
				email: email_text,
				phone: phone_text,
				qty: qty_text,
				country: country_text,
				date: date_text,
				dayQty: dayQty_text,
				firstVisit: firstVisit_text,
				tour: tour_text,
				message: message_text
			},
			dataType: "json"
			
			}).done(function(){
				$('#bookingForm')[0].reset();//очистить форму
				bookMessage.html('<p class="bookMessage__text">Thank you for your message, we will contact you soon</p>').addClass('bookingForm__message_active').css('left', xM).css('top', yM);
				setTimeout(function(){//закрыть сообщение
					bookMessage.removeClass('bookingForm__message_active');}, 6000);
			}).fail(function() {
				bookMessage.html('<p class="bookMessage__text">something went wrong, please try again</p>').addClass('bookingForm__message_active').css('left', xM).css('top', yM);
				setTimeout(function(){//закрыть сообщение
					bookMessage.removeClass('bookingForm__message_active');}, 6000);
			});
		});*/

});


