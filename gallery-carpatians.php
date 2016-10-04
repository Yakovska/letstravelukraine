<?
include("parts/header.php"); 
?>
<div class="content">
	<div class="content__albumOne" id="album">
		<div class="container">
			<h2 class="albumOne__heading">Gallery - Carpatians</h2>
			<p class="albumOne__descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat iste aspernatur fugiat quidem cupiditate, voluptates deleniti incidunt ipsum quasi, obcaecati, nobis quisquam voluptatum sapiente nulla</p>
			<div class="albumOne__breadNav">
				<ol class="breadcrumb albumOne_nav">
					<li class="albumOne__item"><a href="gallery.php" class="albumOne__link">Gallery</a></li>
					<li class="albumOne__item"><a href="#" class="albumOne__link albumOne__link_active">Carpatians</a></li>
				</ol>
			</div>
			<div class="section">
				
				<div class="albumOne__photos">
				
					<? foreach($carpatians as $photo => $num){ ?>
					<img class="albumOne__img col-sm-2" src="img/gallery/carpatians/<?= $num?>.jpg" alt="">
					<? } ?>

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