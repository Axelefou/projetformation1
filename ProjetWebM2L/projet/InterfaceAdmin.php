<?php
 if (!isset($_SESSION)) {
     session_start();
 }
if ($_SESSION['accesAdmin'] != "OPENADMIN") {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>M2L Formation</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
    <!--
	Workforce Template
	http://www.templatemo.com/free-website-templates/461-workforce
    -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
	<div class="preloader">
		<div class="sk-spinner sk-spinner-rotating-plane"></div>
	</div>
	<nav class="navbar navbar-fixed-top custom-navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#" class=" custom-navbar"><img src="images/slider/LogoM2L.jpg" alt="Logo M2L" width="60px"></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home" class="smoothScroll">Accueil</a></li>
					<li><a href="#service" class="smoothScroll">Formations</a></li>
<!--					<li><a href="#about" class="smoothScroll">About</a></li>
					<li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
-->					<li><a href="#contact" class="smoothScroll">Contact</a></li>
	<li><a href="index.php" class="smoothScroll">Se deconnecter</a></li>		</ul>
			</div>
		</div>
	</nav>
	<!-- start home -->
	<section id="home">
		<div class="overlay">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="images/slider/formation.jpg" alt="Slide 1">
						<div class="slider-caption">
							<div class="templatemo_homewrapper">
				<!--				<h3 class="wow bounceIn">web design and development</h3>		-->
							<h1 class="wow bounce">Bonjour admin <h1>
								<h2>

								</h2>
								<h2>

								</h2>
					<!--			<a href="#portfolio" class="smoothScroll templatemo-slider-btn btn btn-default">Learn More</a>  -->
							</div>
						</div>
					</li>

				<!--	<li>
						<img src="images/slider/2.jpg" alt="Slide 2">
						<div class="slider-caption">
							<div class="templatemo_homewrapper">
                            	<h2>CSS Flexbox</h2>
								<h1>Flex Slider</h1>
								<h3>Work on all modern browsers, IE 10+</h3>
								<a href="#about" class="smoothScroll templatemo-slider-btn btn btn-default">Meet Our Team</a>
							</div>
						</div>
					</li>			-->
				</ul>
			</div>
		</div>
	</section>
	<!-- end home -->
	<!-- start service -->

		<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow bounceIn">
					<h2>Les formations</h2>

					<hr>
					<h4>Choisissez votre/vos formation(s) </h4>
				</div>
				<table>
				<thead>
					<th class="black" style="text-align:center;width:20%;"> Date </th>
					<th class="black" style="text-align:center;width:20%;"> Libelle </th>
					<th class="black" style="text-align:center;width:20%;"> Duree </th>
					<th class="black" style="text-align:center;width:20%;"> Lieu </th>
					<th class="black" style="text-align:center;width:20%;"> Pre requis </th>
					<th class="black" style="text-align:center;width:20%;"> Formateur </th>
				</thead>
				<tbody>
				<?php
                include("DbFonctions.php");
                Tableau();
                 ?>
				</tbody>
				</table>


			</div>
		</div>
	</section>
	<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow bounceIn">
					<h2>Valider les formations de vos salariés</h2>

					<hr>
					<h4>Accepter ou refuser les formations de vos salariés<?php ?></h4>
				</div>


				<div>
				<table>
				<thead>
					<th class="black" style="text-align:center;width:20%;"> Nom </th>
					<th class="black" style="text-align:center;width:20%;"> Contenue formation </th>
					<th class="black" style="text-align:center;width:20%;"> Nb d'heure de formation </th>
					<th class="black" style="text-align:center;width:20%;"> Lieu de formation </th>
					<th class="black" style="text-align:center;width:20%;"> Formateur </th>
				</thead>
				<tbody>
				<?php

                TableauAdmin();
                    ?>
				</tbody>
				</table>


			</div>
		</div>
	</section>



	<!-- end divider -->
	<!-- start about
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow bounceIn">
					<h2>About</h2>
					<hr>
					<h4>a little about our company...</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 wow fadeInLeft templatemo-about-left" data-wow-delay="0.3s">
					<h3 class="about-title">Studio History</h3>
					<p>Phasellus tempus malesuada congue. Sed id est tincidunt, iaculis nulla vel, sodales metus. Morbi interdum accumsan augue, in accumsan neque lacinia sed. Fusce cursus eu ligula ut gravida. Ut tristique hendrerit bibendum. Suspendisse euismod sit amet quam et luctus.</p>
                    <p>Nulla viverra diam sed justo vehicula, non venenatis massa gravida. Nunc efficitur et quam non tempor. Nullam nec nisl eget est ultrices elementum nec vel nisl. Cras vestibulum nisl vel justo tempor, ut lacinia est accumsan.</p>
				</div>
				<div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.3s">
					<span class="text-uppercase">BOOTSTRAP 100%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
					</div>
					<span class="text-uppercase">HTML5 &AMP; CSS3 90%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
					</div>
					<span class="text-uppercase">Wordpress 65%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<div class="about-wrapper">
						<img src="images/team-img-1.png" class="img-responsive" alt="about img">
						<h3>Cindy Davis</h3>
						<h5>Founder &amp; Director</h5>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<div class="about-wrapper">
						<img src="images/team-img-2.png" class="img-responsive" alt="about img">
						<h3>Jenny Meno</h3>
						<h5>Creative Manager</h5>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<div class="about-wrapper">
						<img src="images/team-img-3.png" class="img-responsive" alt="about img">
						<h3>Catherine Barkley</h3>
						<h5>Co-Founder &amp; Designer</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	end about -->
	<!-- start portfolio
	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow bounceIn">
						<h2 class="wow bounceIn">Portfolio</h2>
						<hr>
						<h4>our lastest projects in the past 6 months</h4>
					</div>
					<div class="iso-section wow fadeIn" data-wow-delay="0.6s">

						<ul class="filter-wrapper clearfix">
							<li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".graphic">Graphic</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".photoshop">Photoshop</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".wallpaper">Wallpaper</a></li>
						</ul>

						<div class="iso-box-section">
							<div class="iso-box-wrapper col4-iso-box">

								<div class="iso-box graphic photoshop wallpaper col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img-1.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box graphic wallpaper col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img-2.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img-3.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box graphic col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img-4.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img-5.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box graphic photoshop col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img-6.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	 end portfolio -->
	<!-- start contact -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow bounceIn">
						<h2 class="wow bounceIn">Contact</h2>
						<hr>
						<h4>Discutez avec nous pour plus d'aide...</h4>
					</div>
					<form action="#" method="post" role="form">
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="text" placeholder="Nom" class="form-control">
						</div>
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="email" placeholder="Email" class="form-control">
						</div>
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="text" placeholder="Sujet" class="form-control">
						</div>
						<div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
							<textarea class="form-control" rows="5" placeholder="Message"></textarea>
						</div>
						<div class="col-md-offset-3 col-sm-offset-3 col-sm-6 col-md-6 wow fadeIn" data-wow-delay="0.3s">
							<input type="submit" value="Envoyer Message" class="form-control">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/imagesloaded.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
