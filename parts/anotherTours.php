<?
?>
<div class="content__anotherTours">
	<div class="container">
		<section class="anotherTours">
			<h2 class="anotherTours__heading">Our Tours</h2>
			<div class="anotherTours__wrap">
				<div class="scrollbar">
					<div class="handle">
						<div class="mousearea"></div>
					</div>
				</div>
				<div class="anotherTours__frame" id= "anotherTours">
					<ul class="clearfix">
						<? foreach($anotherTours as $name => $cityTour){ ?>
						<li class="anotherTours__item">
							<div class="anotherTours__descr">
								<a href="<?= $cityTour["link"]?>" class="anotherTours__link"><h3 class="anotherTours__head"><?=$name?></h3></a>
							</div>
						</li>
						<? } ?>
					</ul>
				</div>
				<ul class="pages"></ul>
			</div>
		</section>
	</div>
</div>