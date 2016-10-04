/*------Popover------*/

function Popover(sSelector){
	var p = this;
	
	p.main = function(){

		p.init(sSelector);
		p.cityImg = p.find('.city__img');
		p.cityHover = p.find('.city__cityHover');
		p.cityHoverHeader = p.find('.cityHover__header');

		$('.kiev-popover').bind('hidden.bs.popover', p.returnSize);
		p.cityHover.bind('mouseover', p.resizeImg);
		p.cityHover.bind('mouseout', p.sizeImg);
	}

	p.resizeImg = function(){
		if(!$(this).parent().attr('aria-describedby')){
			$(this).prev(p.cityImg).addClass('resizeImg');
			$(this).addClass('cityHover__active');
			$(this).find(p.cityHoverHeader).addClass('header__active');}
		}

		p.sizeImg = function(){
			$(this).removeClass('cityHover__active');
			$(this).find(p.cityHoverHeader).removeClass('header__active');
			if(!$(this).parent().attr('aria-describedby')){
				$(this).prev(p.cityImg).removeClass('resizeImg');
			}
		}
		p.returnSize = function(){
			$(this).find(p.cityImg).removeClass('resizeImg');
		}

		$(function(){
			$('.kiev-popover').popover({
				title: 'Lviv',
				content: 'Lviv is a unique city in Ukraine! Many people call Lviv as a little Paris)) Here you can see real Ukraine, to hear beautiful Ukrainian language, to try tasty Ukrainian food, enjoy the smell of coffee from the local coffee shops and you will have so much fun in creative bars… Welcome to Lviv!!! <p class="city__link"><a href="https://www.facebook.com/">View tours</a></p>',
				trigger: 'focus',
				html:'true'
			});
		})

		$(document).ready(p.main);
	}
	Popover.prototype = new Component();



	/*---Tour Gallery----*/
	function TourGallery (sSelector){
		var t = this;

		t.main = function(){
			t.init(sSelector)

			t.pictures 			= t.find(".tourGallery__item");
			t.img 					= t.find(".tourGallery__img");
			t.arrow 				= t.find(".tourPreview__arrow");
			t.preview 			= t.find(".tourPreview");
			t.arrowPrev 		= t.find(".tourPreview__arrow_prev");
			t.arrowNext 		= t.find(".preview__arrow_next");
			t.close 				= t.find(".tourPreview__close");
			t.previewImage 	= t.find(".tourPreview__image");
			t.current 			= 0;
			t.max 					= t.pictures.length;

		t.pictures.bind('click', t.showPreview);//show photo
		t.preview.bind('click', t.closePreview);//close photo
		$('body').bind('keyup', t.keystroke); // close esc
		t.arrowPrev.bind('click', t.showPrevious);//prev photo
		t.arrowNext.bind('click', t.showNext);//next photo
		t.close.bind('click', t.closePreview);
		if(screen.width < 1030){
			t.previewImage.click(t.showNext);//for small screens
		}
	}

	t.showPreview = function(event){
		var picture = $(this);
		
		t.current = t.pictures.index(picture);
		t.display(picture);
	}
	t.closePreview = function(event){
		if(!event||$(event.target).hasClass("tourPreview__close")||$(event.target).hasClass("close__span")){
			t.preview.removeClass("tourPreview__shown");
		}

	}
	t.keystroke = function(event){
		if(t.preview.hasClass('tourPreview__shown')){
			if(event.which == 39){
				t.showNext();}
				else if(event.which == 37){
					t.showPrevious();}
					if(event.which == 27){
						t.closePreview();}
					}
				}
				t.showImage = function(iShift){
					t.current+=iShift;
					if(t.current >= t.max){
						t.current = 0;}
						else if(t.current <0){
							t.current = t.max -1;}

							t.display(t.find(".tourGallery__item:eq(" + t.current + ")"));
						}

						t.display = function(oPicture){
							var smallImage 	= oPicture.find(".tourGallery__img")
							,bigImageSrc 	= smallImage.attr("src");
							t.previewImage.attr("src", bigImageSrc);
		t.preview.addClass("tourPreview__shown"); //show preview
	}

	t.showPrevious = function(){//показать предыдущее фото
		t.showImage(-1);
	}

	t.showNext = function(){//показать следующее фото
		t.showImage(1);
	}
	$(document).ready(t.main);
}
TourGallery.prototype = new Component();

/*----Services------*/

function Services(sSelector){
	var s = this;
	

	s.main = function(){
		s.init(sSelector);
		s.link 					= s.find('.breadNav_link');
		s.left 					= s.find('.arrow__left');
		s.right 				= s.find('.arrow__right');
		s.block 				= s.find('.services__block');
		s.current 			= 0;
		s.max 					= s.block.length;
		s.x = 2000;

		s.right.bind('click', s.showNext);
		s.left.bind('click', s.showPrev);
		s.link.bind('click', s.showInfo);
	}

	s.showNext = function(){
		s.showInfoRight(+1);
	}

	s.showPrev = function(){
		s.showInfoLeft(-1);
	}

	s.curObject = function(oCurrent){
		var curObject = s.find('.services__block:eq(' + oCurrent + ')');
		
		curObject.animate({opacity: 0}, 300, function(){
			curObject.removeClass('services__block_active');
		});
	}

	s.length = function(oLength){
		if(oLength >= s.max){
			s.current = 0;}
			else if(oLength <0){
				s.current = s.max -1;}
			}
			s.showInfoRight = function(iShift){
				s.curObject(s.current);
				s.current+=iShift;
				s.length(s.current); 
				s.display((s.find('.services__block:eq(' + s.current + ')')), 'left');
			}

			s.showInfoLeft = function(iShift){
				s.curObject(s.current);
				s.current+=iShift;
				s.length(s.current); 

				s.display((s.find('.services__block:eq(' + s.current + ')')), 'right');
			}
			s.display= function(oBlock, direct){
				setTimeout(function(){
					oBlock.stop().animate({[direct]: 2000}, 50, function(){
						oBlock.addClass('services__block_active').css('opacity', 1);
					});
					oBlock.animate({[direct]: 0}, 900);
				}, 300);
			}

			s.showInfo = function(event){
				event.preventDefault();
				s.link.removeClass('breadNav_link_active');
				$(this).addClass('breadNav_link_active');

		var info = s.find('[data-link =' + $(this).html() + ']'); // найти блок с data-link по названию ссылки
		var activeBlock = s.find('.services__block_active');
		
		s.curObject(activeBlock.index() - 2);
		
		s.display(info, 'left'); // показать блок
	}

	$(document).ready(s.main);
}
Services.prototype = new Component();

function BookingForm(sSelector){
	var b = this;
	b.main = function(){
		b.init(sSelector);

		b.name 				= b.find('input[name=senderName]');
		b.email 			= b.find('input[name=email]');
		b.phone 			= b.find('input[name=phone]');
		b.qty 				= b.find('select[name=quantity]');
		b.country			= b.find('select[name=country]');
		b.date 				= b.find('div[data-name=date]');
		b.dayQty 			= b.find('input[name=dayQuantity]');
		b.firstVisit 	= b.find('input[name=firstVisit]');
		b.tour 				= b.find('input[name=tour]');
		b.userMessage = b.find('textarea[name=message]');
		b.submit			= b.find('button[type=submit]');
		b.message 		= b.find('.bookingForm__message');
		b.messageText = b.find('.bookMessage__text');

		b.xM = ($(window).width() - b.message.width())/2;
		b.yM = ($(window).height() - b.message.height())/2;
		
		b.elem.bind('submit', b.sendMail); // ajax запрос
	}
	
	b.sendMail = function(event){
		event.preventDefault();
		
		var checkboxes = ""; 
		$('input[name=tour]:checkbox:checked').each(function(){
			var checkboxItem = $(this);
			if(checkboxes){  
				checkboxes += ", ";
			}
			checkboxes += checkboxItem.val() 
			return checkboxes;
		});

		/*console.log(b.name.val(), b.email.val(), b.phone.val(), b.country.val(), b.qty.val(), b.date.val(), $('input[name=firstVisit]:checkbox:checked').val());
		$('input[name=tour]:checkbox:checked').each(function(){
			console.log($(this).val());
		});*/

			$.ajax({//метод ajax возвращает объект XMLhttprequest

				'url': 'bookingForm-request.php?t='+ new Date().getTime()//текущая страница url  к запросу
				,'method':'POST'//метод передачи данных
				,'dataType':'json'//тип данных, вовращаемых в callback функцию
				,'timeout' : 1000 //время таймаут, в милисек
				,'data': {//передаваемые данные - строка или объект
					'name'					: b.name.val() 
					,'email'				: b.email.val()
					,'phone'				: b.phone.val()
					,'qty' 					: b.qty.val()
					,'country' 			: b.country.val()
					,'date' 				: b.date.val()
					,'dayQty' 			: b.dayQty.val()
					,'firstVisit' 	: $('input[name=firstVisit]:checked').val()
					,'tour' 				: checkboxes
					,'userMessage' 	: b.userMessage.val()
				},
				'success' : function(jsonServerResponse){
				},
				//если ошибка
				'error' : function(oAjax){
				},
				//по окончании запроса
				'complete' : function(oAjax){
					var serverResponse = oAjax.responseJSON;
					//responseText интерпретированный как json
					if(oAjax.status == 200){//200 - OK
						if(serverResponse != undefined){
							b.messageText.html(serverResponse.message);}
							else{
								alert('response that cannot parsed as JSON:\n'+oAjax.responseText);}
							}
							else{
								alert('Totally unpredicted error.');}
							}
						}); 
			
			/*b.form[0].reset();//очистить форму*/
			b.message.addClass('bookingForm__message_active').css('left', b.xM).css('top', b.yM);//показать сообщение пользователю
			
			setTimeout(function(){//закрыть сообщение
				b.message.removeClass('bookingForm__message_active');}, 6000);
		}
		$(document).ready(b.main);
	}
	BookingForm.prototype = new Component();

	function Services(sSelector){
	var s = this;
	

	s.main = function(){
		s.init(sSelector);
		s.link 					= s.find('.breadNav_link');
		s.left 					= s.find('.arrow__left');
		s.right 				= s.find('.arrow__right');
		s.block 				= s.find('.services__block');
		s.current 			= 0;
		s.max 					= s.block.length;
		s.x = 2000;

		s.right.bind('click', s.showNext);
		s.left.bind('click', s.showPrev);
		s.link.bind('click', s.showInfo);
	}

	s.showNext = function(){
		s.showInfoRight(+1);
	}

	s.showPrev = function(){
		s.showInfoLeft(-1);
	}

	s.curObject = function(oCurrent){
		var curObject = s.find('.services__block:eq(' + oCurrent + ')');
		
		curObject.animate({opacity: 0}, 300, function(){
			curObject.removeClass('services__block_active');
		});
	}

	s.length = function(oLength){
		if(oLength >= s.max){
			s.current = 0;}
			else if(oLength <0){
				s.current = s.max -1;}
			}
			s.showInfoRight = function(iShift){
				s.curObject(s.current);
				s.current+=iShift;
				s.length(s.current); 
				s.display((s.find('.services__block:eq(' + s.current + ')')), 'left');
			}

			s.showInfoLeft = function(iShift){
				s.curObject(s.current);
				s.current+=iShift;
				s.length(s.current); 

				s.display((s.find('.services__block:eq(' + s.current + ')')), 'right');
			}
			s.display= function(oBlock, direct){
				setTimeout(function(){
					oBlock.stop().animate({[direct]: 2000}, 50, function(){
						oBlock.addClass('services__block_active').css('opacity', 1);
					});
					oBlock.animate({[direct]: 0}, 900);
				}, 300);
			}

			s.showInfo = function(event){
				event.preventDefault();
				s.link.removeClass('breadNav_link_active');
				$(this).addClass('breadNav_link_active');

		var info = s.find('[data-link =' + $(this).html() + ']'); // найти блок с data-link по названию ссылки
		var activeBlock = s.find('.services__block_active');
		
		s.curObject(activeBlock.index() - 2);
		
		s.display(info, 'left'); // показать блок
	}

	$(document).ready(s.main);
}
Services.prototype = new Component();


/*--Form message--*/
function MessageForm(sSelector){
	var m = this;
	m.main = function(){
		m.init(sSelector);

		m.name 				= m.find('input[name=senderName]');
		m.email 			= m.find('input[name=email]');
		m.userMessage = m.find('textarea[name=message]');
		m.submit			= m.find('button[type=submit]');
		m.message 		= m.find('.bookingForm__message');
		m.messageText = m.find('.bookMessage__text');

		m.xM = ($(window).width() - m.message.width())/2;
		m.yM = ($(window).height() - m.message.height())/2;
		
		m.elem.bind('submit', m.sendMail); // ajax запрос
	}
	
	m.sendMail = function(event){
		event.preventDefault();
		
			$.ajax({//метод ajax возвращает объект XMLhttprequest

				'url': 'messageForm-request.php?t='+ new Date().getTime()//текущая страница url  к запросу
				,'method':'POST'//метод передачи данных
				,'dataType':'json'//тип данных, вовращаемых в callback функцию
				,'timeout' : 1000 //время таймаут, в милисек
				,'data': {//передаваемые данные - строка или объект
					'name'					: m.name.val() 
					,'email'				: m.email.val()
					,'userMessage' 	: m.userMessage.val()
				},
				'success' : function(jsonServerResponse){
				},
				//если ошибка
				'error' : function(oAjax){
				},
				//по окончании запроса
				'complete' : function(oAjax){
					var serverResponse = oAjax.responseJSON;
					//responseText интерпретированный как json
					if(oAjax.status == 200){//200 - OK
						if(serverResponse != undefined){
							m.messageText.html(serverResponse.message);}
							else{
								alert('response that cannot parsed as JSON:\n'+oAjax.responseText);}
							}
							else{
								alert('Totally unpredicted error.');}
							}
						}); 
			
			/*b.form[0].reset();//очистить форму*/
			m.message.addClass('bookingForm__message_active').css('left', m.xM).css('top', m.yM);//показать сообщение пользователю
			
			setTimeout(function(){//закрыть сообщение
				m.message.removeClass('bookingForm__message_active');}, 6000);
		}
		$(document).ready(m.main);
	}
	MessageForm.prototype = new Component();







