<?
include("parts/header.php"); 
?>
<div class="content">
	<div class="content__top">
		<section class="top">
			<div class="parallax-window"></div>
			<div class="container">
				<div class="top__map">
					<img src="img/map.png" alt="Ukraine" class="map__img">
					<ul class="mapCities">
						<li class="mapcities__mark mapCities__kiev">
							<img src="img/mapCities/kiev.png" alt="" class="mapCities__photo">
							<div class="mapCities__pop ">
								<h3 class="mapCities__head">Kiev</h3>
								<p class="mapCitites__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
						</li>
						<li class="mapcities__mark mapCities__kharkov">
							<img src="img/mapCities/kharkov.png" alt="" class="mapCities__photo">
							<div class="mapCities__pop">
								<h3 class="mapCities__head">Kharkov</h3>
								<p class="mapCitites__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
						</li>
						<li class="mapcities__mark mapCities__dnepr">
							<img src="img/mapCities/dnepr.png" alt="" class="mapCities__photo">
							<div class="mapCities__pop">
								<h3 class="mapCities__head">Dnepr</h3>
								<p class="mapCitites__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
						</li>
						<li class="mapcities__mark mapCities__lviv">
							<img src="img/mapCities/lviv.png" alt="" class="mapCities__photo">
							<div class="mapCities__pop ">
								<h3 class="mapCities__head">Lviv</h3>
								<p class="mapCitites__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
						</li>
						<li class="mapcities__mark mapCities__odessa">
							<img src="img/mapCities/odessa.png" alt="" class="mapCities__photo">
							<div class="mapCities__pop">
								<h3 class="mapCities__head">Odessa</h3>
								<p class="mapCitites__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="top__cities" id="popover">
					<div class="cities">
						<div class="city kiev-popover" tabindex="0">
							<img src="img/cities/kiev.jpg"  alt="#" class="city__img" >
							<div class="city__cityHover">
								<h2 class="cityHover__header ">kyiv</h2>
							</div>
						</div>
						<div class="city kiev-popover" tabindex="0">
							<img src="img/cities/odessa.jpg" alt="#" class="city__img">
							<div class="city__cityHover">
								<h2 class="cityHover__header ">odessa</h2>
							</div>
						</div>
						<div class="city kiev-popover" tabindex="0">
							<img src="img/cities/kharkov.jpg" alt="#" class="city__img">
							<div class="city__cityHover">
								<h2 class="cityHover__header ">kharkiv</h2>
							</div>
						</div>
						<div class="city kiev-popover" tabindex="0">
							<img src="img/cities/lviv.jpg" alt="#" class="city__img">
							<div class="city__cityHover">
								<h2 class="cityHover__header ">lviv</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="content__aboutUkr">
		<div class="container">
			<section class="aboutUkr">
				<h1 class="aboutUkr__heading">Hello to everyone!!! </h1>
				<p class="aboutUkr__text">Are you planning  to visit Ukraine? Welcome!!!<br>My name is Irina, I love Ukraine and I want to share this feeling with you!!!<br>You will fall in love with Ukraine, I’m sure!!!</p>
				<p class="aboutUkr__text">Every country, city is like a people – everyone has  own unique character and charm. You have to see Ukraine with your own eyes  and to feel  it’s unforgettable beauty. It is country with rich history, with the most  greenest cities in Europe, with beautiful architecture and friendly people, and I will be happy to show it to you!</p>
				<p class="aboutUkr__text">I love my job, it gives me the opportunity to meet new people from different countries, it’s inspiring for me. Also I like very much walking and exploring new places in Ukraine. I am very active, easy-going and with me you can feel comfortable.</p>
				<p class="aboutUkr__text">You can just enjoy Ukraine and don't wasting your time for searching what to do here, where to go, how to find perfect place for food, where to go for some shopping, for have some fun and whatever... I can do all these for you, organize your time here, depending on your interests...</p>
				<p class="aboutUkr__text">I’m sure you will spend the best your time there and will be full of positive emotions!</p>
				<p class="aboutUkr__text">So take your guide and enjoy your travel :)</p>

			</section>
			<section class="galleryMain">
				<div class="galleryMain__wrap">
					<div class="scrollbar">
						<div class="handle">
							<div class="mousearea"></div>
						</div>
					</div>
					<div class="galleryMain__frame" id= "galleryMain">
						<ul class="clearfix">
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
							<li class="galleryMain__item"></li>
						</ul>
					</div>
					<ul class="pages"></ul>
				</div>
			</section>
		</div>
	</div>
</div>
<?
include("parts/footer.php"); 
?>
<script>
		//var m1 	= new Menu("#menu");
		var p1 	= new Popover("#popover");
		var sly = new Sly('.galleryMain__frame').init();
	</script>

</body>
</html>