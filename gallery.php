<?
include("parts/header.php"); 
?>
<div class="content">
	<div class="content__gallery">
		<div class="container">
			<h2 class="gallery__heading">Gallery</h2>
			<div class="container__section">
				<div class="section">
					<div class="section__info">
						<div class="panel-group row section__albums">

							<? foreach($galleryMain as $album => $value){ ?>
							<div class="col-sm-4 albums__album">
								<div class="panel panel-default thumbnail album">
									<div class="panel-heading album__heading"><?= $album?></div>
									<div class="panel-body albums__info">
										<div class="albums__photo">
											<img class="img-responsive albums__img" src="../img/gallery/<?=$album?>.jpg">
											<a href="gallery-<?=$album?>.php" class="albums__hover"><i class="fa fa-search-plus albums__fa" aria-hidden="true"></i></a>
										</div>
										<div class="caption album__text"><?=$value["descr"]?></div>
										<div class="album__place"><?=$value["place"]?></div>
										<a href="gallery-<?= $album?>.php" class="album__link">View photos</a>
									</div>	
								</div>
							</div>
							<? } ?>

						</div> 
					</div>
				</div>
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
</body>
</html>