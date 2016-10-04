
<form class="bookingForm__form" id="bookingForm" role="form" action="" method="POST">
<div class="bookingForm__message"><p class="bookMessage__text"></p></div>
	<div class="row bookingForm__row">
		<div class="col-md-4">
			<div class="form-group bookingForm__group">
				<label for="name" class="bookingForm__label">Your name</label>
				<input type="text" class="form-control bookingForm__input" name="senderName" placeholder="Enter your name" id="name">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group bookingForm__group">
				<label for="email" class="bookingForm__label">Your email</label>
				<input type="email" class="form-control email required bookingForm__input" name="email" placeholder="Enter email" id="email" aria-required="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group bookingForm__group">
				<label for="phone" class="bookingForm__label">Your phone</label>
				<input type="text" class="form-control bookingForm__input" name="phone" placeholder="Enter phone" id="phone">
			</div>
		</div>
	</div>
	<div class="row bookingForm__row">
		<div class="col-md-4">
			<div class="form-group bookingForm__group">
				<label for="quantity" class="bookingForm__label">How many people</label>
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
				<label for="country" class="bookingForm__label">What country you're from</label>
				<select class="form-control bfh-countries bookingForm__input" name = "country" data-flags="true"></select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group  bookingForm__group">
				<label for="date" class="bookingForm__label">Tour date</label>
				<div class="bfh-datepicker" data-align="right" data-format="y-m-d" data-placeholder="Choose date" data-date="" data-input="form-control bookingForm__input" data-name = "date" id="date"></div>
			</div>
		</div>
	</div>
	<div class="row bookingForm__row">
		<div class="col-md-4">
			<div class="form-group bookingForm__group">
				<label for="dayQuantity" class="bookingForm__label">the number of travel days</label>
				<input type="text" class="form-control bookingForm__input" name="dayQuantity" placeholder="Enter the number of days" id="dayQuantity">
			</div>
		</div>
		<div class="col-md-4">
			<div class="checkbox bookingForm__checkbox bookingForm__visit">
				<label for="kievSightseeing" class="bookingForm__label label__checkbox">
					<input type="checkbox" id="kievSightseeing" name ="firstVisit" value="yes" class="input__checkbox"><i class="check-bg fa fa-check" aria-hidden="true"></i>This is my first visit to Ukraine
				</label>
			</div>
		</div>
	</div>
	<div class="row bookingForm__row">
		<div class="col-md-12">
			<label for="tours-form-list" class="bookingForm__label">Choose tourse</label>
		</div>
		<div class="col-md-4">
			<div class="form-group bookingForm__group" id="tours-form-list">
				<div class="checkbox bookingForm__checkbox">
					<label for="kievSightseeing" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="kievSightseeing" name ="tour" value="kievSightseeing" class="input__checkbox"><i class="check-bg fa fa-check" aria-hidden="true"></i>Kiev sightseeing
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="ancientKiev" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="ancientKiev" name ="tour" value="ancientKiev" class="input__checkbox"><i class="check-bg fa fa-check"></i>Ancient Kiev
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="kievPecherskLavra" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="kievPecherskLavra" name ="tour" value="kievPecherskLavra" class="input__checkbox"><i class="check-bg fa fa-check"></i>Kiev Pechersk Lavra
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="museumOfWorldWarII" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="museumOfWorldWarII" name ="tour" value="museumOfWorldWarII" class="input__checkbox"><i class="check-bg fa fa-check"></i>Museum of World War II
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="romanticKiev" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="romanticKiev" name ="tour" value="romanticKiev" class="input__checkbox"><i class="check-bg fa fa-check"></i>romantic Kiev
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="folkOpenAirMuseumPirogiv" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="folkOpenAirMuseumPirogiv" name ="tour" value="folkOpenAirMuseumPirogiv" class="input__checkbox"><i class="check-bg fa fa-check"></i>Folk open-air Museum Pirogiv
					</label>
				</div>
				
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group bookingForm__group" id="tours-form-list">				
				<div class="checkbox bookingForm__checkbox">
					<label for="openAirAviationMuseumOfUkraine" name ="tour" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="openAirAviationMuseumOfUkraine" value="openAirAviationMuseumOfUkraine" class="input__checkbox" name="tour"><i class="check-bg fa fa-check" aria-hidden="true"></i>Open-air aviation Museum of Ukraine
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="mezhyhirya" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="mezhyhirya" name ="tour" value="mezhyhirya" class="input__checkbox"><i class="check-bg fa fa-check"></i>Mezhyhirya
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="partyTour" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="partyTour" name ="tour" value="partyTour" class="input__checkbox"><i class="check-bg fa fa-check"></i>Party tour
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="botanicalGarden" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="botanicalGarden" name ="tour" value="botanicalGarden" class="input__checkbox"><i class="check-bg fa fa-check"></i>Botanical Garden
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="streetArtTour" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="streetArtTour" name ="tour" value="streetArtTour" class="input__checkbox"><i class="check-bg fa fa-check"></i>Street art tour
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="kievGastroTour" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="kievGgastroTour" name ="tour" value="kievGastroTour" class="input__checkbox"><i class="check-bg fa fa-check" aria-hidden="true"></i>Kiev Gastro tour
					</label>
				</div>
				
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group bookingForm__group" id="tours-form-list">
				<div class="checkbox bookingForm__checkbox">
					<label for="carpatians" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="carpatians" name ="tour" value="carpatians" class="input__checkbox"><i class="check-bg fa fa-check" aria-hidden="true"></i>carpatians
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="kharkivSightseeing" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="kharkivSightseeing" name ="tour" value="kharkivSightseeing" class="input__checkbox"><i class="check-bg fa fa-check" aria-hidden="true"></i>Kharkiv sightseeing
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="odessaSightseeing" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="odessaSightseeing" name ="tour" value="odessaSightseeing" class="input__checkbox"><i class="check-bg fa fa-check" aria-hidden="true"></i>Odessa sightseeing
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="lvivSightseeing" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="lvivSightseeing" name ="tour" value="lvivSightseeing" class="input__checkbox"><i class="check-bg fa fa-check" aria-hidden="true"></i>Lviv sightseeing
					</label>
				</div>
				<div class="checkbox bookingForm__checkbox">
					<label for="lvivGastroTour" class="bookingForm__label label__checkbox">
						<input type="checkbox" id="lvivGastroTour" name ="tour" value="lvivGastroTour" class="input__checkbox"><i class="check-bg fa fa-check" aria-hidden="true"></i>Lviv Gastro tour
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="row bookingForm__row">
		<div class="col-md-12">
			<div class="form-group bookingForm__group">
				<label for="message" class="bookingForm__label">Your message</label>
				<textarea class="bookingForm__textarea" name="message" rows="3" placeholder="Your message"></textarea>
			</div>
		</div>
	</div>
	<div class="row bookingForm__row">
		<div class="col-md-12">
			<div class="form-group">
				<button type="submit" value="send" class="btn bookingForm__btn">Send request</button>
			</div>
		</div>
	</div>
</form>