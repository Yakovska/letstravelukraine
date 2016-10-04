<?
include("parts/header.php"); 
?>
<div class="content">
	<div class="content__services" id=services>
		<div class="container">
			<h2 class="services__heading">our services</h2>
			<div class="services__breadNav">
				<ol class="breadcrumb breadNav_nav">
					<li class="breadNav_item"><a href="#" class="breadNav_link breadNav_link_active">accommodation</a></li>
					<li class="breadNav_item"><a href="#" class="breadNav_link">translator</a></li>
					<li class="breadNav_item"><a href="#" class="breadNav_link">transfer</a></li>
				</ol>
			</div>
			<div class="services__info col-sm-12">
				<i class="fa fa-chevron-left services__arrow arrow__left" aria-hidden="true"></i>
				<i class="fa fa-chevron-right services__arrow arrow__right" aria-hidden="true"></i>
				<div class="services__block services__block_active col-sm-12" data-link="accommodation">
					<div class="services__icon col-xs-12 col-sm-5">
						<i class="services__fa fa fa-home" aria-hidden="true"></i>
					</div>
					<div class="services__about col-xs-12 col-sm-7">
						<h3 class="about__heading">accommodation</h3>
						<p class="services__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi deleniti molestias nulla sint, rerum labore saepe nihil tenetur possimus eum at, placeat, ducimus doloribus! Error illum atque repellat sit maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis esse vero impedit, eveniet autem amet cum iure iusto repellat sapiente et vitae consequuntur eos. </p>
						<a href="#sendRequestForm" class="btn services__link">send request</a>
					</div>
				</div>
				<div class="services__block col-sm-12" data-link="translator">
					<div class="services__icon col-xs-12 col-sm-5">
						<i class="services__fa fa fa-language" aria-hidden="true"></i>
					</div>
					<div class="services__about col-xs-12 col-sm-7">
						<h3 class="about__heading">translator</h3>
						<p class="services__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi deleniti molestias nulla sint, rerum labore saepe nihil tenetur possimus eum at, placeat, ducimus doloribus! Error illum atque repellat sit maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis esse vero impedit, eveniet autem amet cum iure iusto repellat sapiente et vitae consequuntur eos. </p>
						<a href="#sendRequestForm" class="btn services__link">send request</a>
					</div>
				</div>
				<div class="services__block col-sm-12" data-link = "transfer">
					<div class="services__icon col-xs-12 col-sm-5">
						<i class="services__fa fa fa-car" aria-hidden="true"></i>
					</div>
					<div class="services__about col-xs-12 col-sm-7">
						<h3 class="about__heading">transfer</h3>
						<p class="services__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi deleniti molestias nulla sint, rerum labore saepe nihil tenetur possimus eum at, placeat, ducimus doloribus! Error illum atque repellat sit maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis esse vero impedit, eveniet autem amet cum iure iusto repellat sapiente et vitae consequuntur eos. </p>
						<a href="#sendRequestForm" class="btn services__link">send request</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="content__booking-request" >
	
		<div class="container">
			<h2 class="form__heading">Request form</h2>
			<div class="bookingform">
				<div class="bookingForm__message" id=""></div>
				<form class="bookingForm__form" id="bookingForm" role="form" action="" method="POST" >
				<div class="bookingForm__message"><p class="bookMessage__text"></p></div>
					<div class="row bookingForm__row">
						<div class="col-md-4">
							<div class="form-group bookingForm__group">
								<label for="name" class="form__label">Your name</label>
								<input type="text" class="form-control bookingForm__input" name="senderName" placeholder="Enter your name" id="name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group bookingForm__group">
								<label for="email" class="form__label">Your email</label>
								<input type="email" class="form-control email required bookingForm__input" name="email" placeholder="Enter email" id="email" aria-required="true">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group bookingForm__group">
								<label for="phone" class="form__label">Your phone</label>
								<input type="text" class="form-control bookingForm__input" name="phone" placeholder="Enter phone" id="phone">
							</div>
						</div>
					</div>
					<div class="row bookingForm__row">
						<div class="col-md-4">
							<div class="form-group bookingForm__group">
								<label for="quantity" class="form__label">How many people</label>
								<select name="quantity" id="quantity" class="form-control bookingForm__input bookingForm__select">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6 and more">6 and more</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group bookingForm__group">
								<label for="country" class="form__label">What country you're from</label>
								<select class="form-control bfh-countries bookingForm__input" data-flags="true" name="country"></select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group  bookingForm__group">
								<label for="date" class="form__label">Tour date</label>
								<div class="bfh-datepicker" data-align="right" data-format="y-m-d" data-placeholder="Choose date" data-date="" data-input="form-control bookingForm__input" data-name="date" id="date"></div>
							</div>
						</div>
					</div>
					<div class="row bookingForm__row">
						<div class="col-md-4">
							<div class="form-group bookingForm__group">
								<label for="dayQuantity" class="form__label">the number of travel days</label>
								<input type="text" class="form-control bookingForm__input" name="dayQuantity" placeholder="Enter the number of days" id="dayQuantity">
							</div>
						</div>
						<div class="col-md-4">
							<div class="checkbox bookingForm__checkbox bookingForm__visit">
								<label for="visit" class="form__label label__checkbox">
									<input type="checkbox" id="visit" value="visit" class="input__checkbox"><i class="check-bg fa fa-check" aria-hidden="true" name ="firstVisit"></i>This is my first visit to Ukraine
								</label>
							</div>
						</div>
					</div>
					<div class="row bookingForm__row">
						<div class="col-md-12">
							<div class="form-group bookingForm__group">
								<label for="message" class="form__label">Your message</label>
								<textarea class="bookingForm__textarea" name="message" rows="3" placeholder="Your message"></textarea>
							</div>
						</div>
					</div>
					<div class="row bookingForm__row">
						<div class="col-md-12">
							<div class="form-group">
								<button type="submit" vlue="send" class="btn bookingForm__btn">Send request</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?
	include("parts/anotherTours.php");
	?>
</div>
<?
include("parts/footer.php"); 
?>
<script>
	var s1 = new Services ('#services');
	b1 = new BookingForm("#bookingForm");
</script>

</body>
</html>