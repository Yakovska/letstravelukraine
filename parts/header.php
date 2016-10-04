<?php include("vars.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Travel in Ukraine</title>
	<meta name="description" content="Bootstrap site about traveling">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="../libs/animate.min.css">
	<link rel="stylesheet" href="../libs/bootstrap-formhelpers.min.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/about.css">
	<link rel="stylesheet" href="../css/tour.css">
	<link rel="stylesheet" href="../css/services.css">
	<link rel="stylesheet" href="../css/gallery.css">
	<link rel="stylesheet" href="../css/partners.css">
	<link rel="stylesheet" href="../css/contact.css">
	
</head>
<body>
	<div class="block__spinner">
		<div class="block__spinner">
			<div class="spinner">
				<span class="spinner__span"></span>
				<span class="spinner__span"></span>
				<span class="spinner__span"></span>
			</div>
		</div>
	</div>
	<div class="block__header">
		<div class="navbar navbar-fixed-top container__header">
			<div class="container">
				<div class="header__logo">
					<a href="http://letstravelukraine.com/" class="logo navbar-brand">
						<h1 class="logo__title">Let's Travel Ukraine</h1>
					</a>
				</div>
				<div class="header__sandwich navbar-header">
					<button type="button" class="sandwich navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="sandwich__iconbar icon-bar"></span>
						<span class="sandwich__iconbar icon-bar"></span>
						<span class="sandwich__iconbar icon-bar"></span>
					</button>
				</div>
				<div class="header__menu collapse navbar-collapse navbar-right" id="myNavbar">
					<ul class=" nav navbar navbar-nav menu">
						<li class="menu__item"><a href="about.php" class="menu__link">about</a></li>
						<li class=" dropdown menu__item">
							<a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown">tours<span class="caret"></span></a>
							<ul class="menu menu_level_1 dropdown-menu menu__submenu">
								<li class="submenu__content">
									<div class="row">
										
											<div class="col-sm-12 col-md-3">
												<ul class="submenu__tours">
													<li class="submenu__tourhead"><p class="submenu__tourtext">Kiev tours</p></li>
													<li class="submenu__tourName"><a href="tours_kiev-sightseeing.php" class="submenu__link">Kiev sightseeing</a></li>
													<li class="submenu__tourName"><a href="tours_ancientKiev.php" class="submenu__link">Ancient Kiev</a></li>
													<li class="submenu__tourName"><a href="tours_kievPecherskLavra.php" class="submenu__link">Kiev Pechersk Lavra</a></li>
													<li class="submenu__tourName"><a href="tours_museumOfWorldWarII.php" class="submenu__link">Museum of World War II</a></li>
													<li class="submenu__tourName"><a href="tours_romanticKiev.php" class="submenu__link">Romantic Kiev</a></li>
													<li class="submenu__tourName"><a href="tours_folkOpenAirMuseumPirogiv.php" class="submenu__link">Folk open-air Museum Pirogiv</a></li>
												</ul>
											</div>
											<div class="col-sm-12 col-md-4">
												<ul class="submenu__tours">																						
													<li class="submenu__tourName submenu__list"><a href="tours_openAirAviationMuseumOfUkraine.php" class="submenu__link">Open-air aviation Museum of Ukraine</a></li>
													<li class="submenu__tourName"><a href="tours_mezhyhirya.php" class="submenu__link">Mezhyhirya</a></li>
													<li class="submenu__tourName"><a href="tours_partyTour.php" class="submenu__link">Party tour</a></li>
													<li class="submenu__tourName"><a href="tours_botanicalGarden.php" class="submenu__link">Botanical Garden</a></li>
													<li class="submenu__tourName"><a href="tours_streetArtTour.php" class="submenu__link">Street art tour</a></li>
													<li class="submenu__tourName"><a href="tours_kievGastroTour.php" class="submenu__link">Kiev Gastro tour</a></li>
												</ul>
											</div>
											<div class="col-sm-12 col-md-3">
												<ul class="submenu__tours">										
													<li class="submenu__tourhead"><p class="submenu__tourtext">Carpatians</p></li>
													<li class="submenu__tourName"><a href="tours_carpatians.php" class="submenu__link">Carpatians tour</a></li>
													<li class="submenu__tourhead"><p class="submenu__tourtext">Kharkiv tours</p></li>
													<li class="submenu__tourName"><a href="tours_kharkiv-sightseeing.php" class="submenu__link">Kharkiv sightseeing</a></li>
													<li class="submenu__tourhead"><p class="submenu__tourtext">Odessa tours</p></li>
													<li class="submenu__tourName"><a href="tours_odessa-sightseeing.php" class="submenu__link">Odessa sightseeing</a></li>
												</ul>
											</div>
											<div class="col-sm-12 col-md-2">
												<ul class="submenu__tours">										
													<li class="submenu__tourhead"><p class="submenu__tourtext">Lviv tours</p></li>
													<li class="submenu__tourName"><a href="tours_lviv-sightseeing.php" class="submenu__link">Lviv sightseeing</a></li>
													<li class="submenu__tourName"><a href="tours_lvivGastroTour.php" class="submenu__link">Lviv Gastro tour</a></li>
												</ul>
											</div>
							
									</div>
								</li>		
							</ul>
						</li>
						<li class="menu__item "><a class="menu__link" href="services.php">services</a></li>
						<li class="menu__item"><a href="gallery.php" class="menu__link">gallery</a></li>
						<li class="menu__item"><a href="#" class="menu__link">interesting</a></li>
						<li class="menu__item"><a href="#" class="menu__link">rewiews</a></li>
						<li class="menu__item"><a href="partners.php" class="menu__link">partners</a></li>
						<li class="menu__item"><a href="contacts.php" class="menu__link">contacts</a></li>

						<? foreach($socialIcons as $icon => $sI){ ?>
						<li class="menu__item"><a href="<?= $sI["link"]?>" class="menu__link" target = "blank"><img src="img/contacts/<?= $icon?>.png" class="menu-icon"></a></li>
						<? } ?>

					</ul>
				</div>
			</div>
		</div>
	</div>