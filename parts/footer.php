<?
?>
<footer class="footer">
	<div class="container">
		<div class="footer__contacts">
			<i class="footer__icons fa fa-phone"></i>: +38 (067) 793-84-94<br>
			<i class="footer__icons fa fa-envelope"></i>: 
			<a href="mailto:letstravelukraine@gmail.com" class="footer__mail">letstravelukraine@gmail.com</a>
		</div>
		<div class="footer__socials">

		<? foreach($socialIcons as $icon => $sI){ ?>
			<a class="footer__socialLink" href="<?= $sI['link']?>" target="blank"><img src="img/contacts/<?= $icon?>.png" class="menu-icon"></a>
		<? } ?>

		</div>
		<div class="col-xs-12">
			<p class="footer__copyright">&#169; 2016 Let's Travel Ukraine</p>
		</div>
	</div>
</footer>
<script src="../libs/jquery-3.1.0.min.js"></script>	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/fcc6b80eb3.js"></script>	
<script src="../scripts/component.js"></script>
<script src="../libs/parallax.min.js"></script>
<script src="../libs/vendor/plugins.js"></script>
<script src="../libs/sly.min.js"></script>
<script src="../libs/jquery-migrate-1.2.1.min.js"></script>
<script src="../libs/bootstrap-formhelpers.min.js"></script>
<script src="../scripts/common.js"></script>
<script src="../scripts/scripts.js"></script>