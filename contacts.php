<?
include("parts/header.php"); 
?>
<div class="content">
	<div class="content__contact">
		<div class="container">
			<h2 class="contact__heading">contact us</h2>
			<p class="contact__descr">If you have any questions or need assistance, please contact us. <br> We will do our best to make your trip was memorable</p>
			<section class="contact__panel">


				<div class="panel__item">
					<img src="../img/contacts/b-phone.png" alt="" class="panel__img">
					<p class="panel__link">+38 (067) 793-84-94</p>
				</div>
				<div class="panel__item">
					<img src="../img/contacts/b-mail.png" alt="" class="panel__img panel__mail">
					<br><a href="mailto:letstravelukraine@gmail.com" class="panel__link panel__link_mail">letstravelukraine@gmail.com</a>
				</div>
				<div class="panel__item">
					<img src="../img/contacts/b-fb.png" alt="" class="panel__img">
					<br><a href="https://www.facebook.com/letstravelua/" class="panel__link" target="blank">Let's Travel Ukraine</a>
				</div>
				<div class="panel__item">
					<img src="../img/contacts/b-inst.png" alt="" class="panel__img">
					<br><a href="https://www.instagram.com/letstravelukraine/" class="panel__link" target="blank">Let's Travel Ukraine</a>
				</div>
				<div class="panel__item">
					<img src="../img/contacts/b-ta.png" alt="" class="panel__img">
					<br><a href="https://www.tripadvisor.com/" class="panel__link" target="blank">Let's Travel Ukraine</a>
				</div>
			</section>
			<section class="contact__message">
				<h2 class="message__heading">Your letter</h2>
				<div class="messageForm">
					<div class="bookingForm__message" id=""></div>
					<form class="messageForm__form" action="" role="form" method="POST" id="messageForm">
					<div class="bookingForm__message"><p class="bookMessage__text"></p></div>
						<div class="row messageForm__row">
							<div class="col-xs-12 col-md-6">
								<div class="form-group messageForm__group">
									<label for="name" class="messageForm__label col-sm-2">Your name</label>
									<div class="col-sm-10">
										<input type="text" class="form-control messageForm__input" name="senderName" placeholder="Enter your name" id="name">
									</div>
								</div>
								<div class="form-group messageForm__group">
									<label for="email" class="messageForm__label col-sm-2">Your email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control email required messageForm__input" name="email" placeholder="Enter your email" id="email">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="form-group messageForm__group">
									<label for="message" class="messageForm__label col-sm-2">Your message</label>
									<div class="col-sm-10">
										<textarea class="messageForme__textarea" name="message" rows="5" placeholder="Your message"></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group messageForm__group">
									<button type="submit" class="btn btn-default messageForm__btn">Send letter</button>
								</div>
							</div>
						</div>

					</form>
				</div>
			</section>
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
	var m1 = new MessageForm("#messageForm");
</script>
</body>
</html>