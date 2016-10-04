<?
include("parts/header.php"); 
?>
<div class="content">
	<div class="content__top">
		<div class="container">
			<section class="tourSlider col-sm-5 col-xs-12">
				<div id="tourSlider" class="carousel slide tourSlider__slider" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/tours/botanicalGarden/slider/4.png" alt="#" class="tourSlider__img">
						</div>

						<? foreach($tourSlider as $slide => $num){ ?>
						<div class="item ">
							<img src="img/tours/botanicalGarden/slider/<?= $num?>.png" alt="#" class="tourSlider__img">
						</div>
						<? } ?>
						
					</div>
				</div>
			</section>
			<section class="tourHeader col-sm-7 col-xs-12">
				<h1 class="tourHeader__heading">botanical garden</h1>
				<p class="tourHeader__descr">Walking tour</p>
				<div class="tourHeader__duration">
					<i class="fa fa-clock-o tourHeader__fa" aria-hidden="true"></i>
					<span class="tourHeader__details"> Duration: 3 hours</span>
				</div>
				<div class="tourHeader__money">
					<i class="fa fa-money tourHeader__fa" aria-hidden="true"></i>
					<span class="tourHeader__details"> Price:  <img src="../img/flag-EU.jpg" class="flag">  00 EUR</span>
				</div>
				<a href="#seeBookingForm" class="btn tourHeader__link">book it</a>
			</section>
		</div>
	</div>
	<div class="content__tourAbout">
		<div class="container">
			<section class="tourAbout__descr">
				<h2 class="tourAbout__heading">What you will see</h2>
				<p class="tourAbout__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ducimus dolor laboriosam voluptates dolores minus. Harum consequatur adipisci, id blanditiis deleniti officiis. Esse, rerum accusantium, eos similique consequatur possimus consequuntur..</p>
			</section>
			<section class="tourAbout__tourGallery" id="tourGallery">
				<div class="tourGallery">

					<? foreach($tourGallery as $photo => $num){ ?>
					<div class="tourGallery__item">
						<img src="img/tours/botanicalGarden/photo/<?=$num?>.jpg" alt="" class="tourGallery__img">
					</div>
					<? } ?>
					
				</div>
				<div class='tourPreview'> <!-- весь экран полностью -->
					<div class="tourPreview__max">
						<div class='tourPreview__arrow tourPreview__arrow_prev'><span class="tourPrev__fa fa fa-angle-left"></span></div> <!-- next -->
						<div class='tourPreview__arrow preview__arrow_next'><span class="tourPrev__fa fa fa-angle-right"></span></div> <!-- prev -->
						<div class='tourPreview__close'>
							<span class="close__span close__span_1"></span>
							<span class="close__span close__span_2"></span>
						</div> <!-- close -->
						<img src='' class='tourPreview__image' alt=""> <!-- фото -->

					</div>
				</div>
			</section>
		</div>
	</div>

	<?
	include("parts/anotherTours.php");
	?>

	<div class="content__booking bookingForm__parallax" id="seeBookingForm">
		<div class="container">
			<h2 class="booking__heading">Booking form</h2>
			<div class="bookingform">
				<?
				include("parts/bookForm.php")
				?>
			</div>
		</div>
	</div>

</div>
<?
include("parts/footer.php"); 
?>

<script>
	var t1 = new TourGallery("#tourGallery"),
		b1 = new BookingForm("#bookingForm");
</script>

</body>
</html>