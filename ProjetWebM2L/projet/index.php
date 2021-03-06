<?php
if(!isset($_SESSION))
		 {
			 session_start();
		}
unset($_SESSION['accesUtilisateur']);
unset($_SESSION['accesAdmin']);

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
					<li><a href="#service" class="smoothScroll">Connexion</a></li>
<!--					<li><a href="#about" class="smoothScroll">About</a></li>
					<li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
-->					<li><a href="#contact" class="smoothScroll">Contact</a></li>				</ul>
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
								<h1 class="wow bounce">Bienvenue sur le site</h1>
								<h2>
									<span class="wow bounce" data-wow-delay="0.3s">DE FORMATION </span>
									<span class="wow bounce" data-wow-delay="0.6s">DE LA </span>
									<span class="wow bounce" data-wow-delay="0.9s">M2L</span>
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
					<h2>Connexion</h2>
					<hr>
					<h4>Au service de formation M2L</h4>
				</div>

				<form action="ControlerIndex.php" method="post" role="form">
							<input name="login" type="text" placeholder="Identifiant" maxlength="15" pattern="[a-zA-Z]{1,10}" title="Lettre uniquement,10 caracteres maximuns" class="form-control">
							<input name="motdepasse" type="password" placeholder="Mot de passe" pattern="[a-zA-Z0-9]{1,15}" title="Lettre & chiffre uniquement,10 caracteres maximuns" maxlength="15"class="form-control">
							<input type="submit" name="submit2" value="Connexion" class="form-control">

					</form>
					<?php
					include("ControlerIndex.php");
					if(isset($_SESSION['message3']))
					{
						echo "<div style='width:100%;' class='alert alert-warning'><font color=\"red\">".$_SESSION['message4'].$_SESSION['message3']."</font> </div>";
						unset($_SESSION['message3']);
						unset($_SESSION['message4']);
					}
					?>
				<div class="col-md-6 col-sm-6">
<!--					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-laptop"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Web Design</h3>
							<p>Workforce responsive template is a mobile friendly website design with animated transitions. You may download and modify this layout for your websites.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-android"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Mobile App</h3>
							<p>Please tell your friends about templatemo.com website. Thank you. Credit goes to <a rel="nofollow" href="https://pixabay.com" target="_blank">Pixabay</a> for images used in this template.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-paper-plane"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">SEO Marketing</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-html5"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">HTML5 &amp; CSS3</h3>
							<p>This is based on Bootstrap v3.3.4 layout. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
						</div>
					</div>
				</div>			-->
			</div>
		</div>
	</section>
	<!-- end service -->
	<!-- start divider -->
	<div class="divider">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="divider-des">
						<h3 class="text-uppercase">Vous rencontrez des problèmes avec le site ?</h3>
						<p>Rendez-vous dans la section contact afin de nous demander de l'aide</p>
						<a href="#contact"><button class="btn btn-default text-uppercase">Contact</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
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
						<h2 class="wow bounceIn">Inscription </h2>
						<hr>
						<h4>Inscrivez-vous en quelques secondes !</h4>
					</div>
					<form action="ControlerIndex.php" method="post" role="form">
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="text" pattern="[A-Z]{1,10}" title="lettre en majuscule uniquement,10 caracteres maximuns" maxlength="10" placeholder="Nom" name="nom" class="form-control">
						</div>
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="text" placeholder="Login" pattern="[A-Za-z]{1,10}" title="lettre uniquement,10 caracteres maximuns" maxlength="10" name="prenom" class="form-control">
						</div>
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,6}$" title="respecter un format mail" name="mail" class="form-control">
						</div>
						<div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
							<input type="password" class="form-control" pattern="[A-Za-z0-9]{1,15}" title="lettre & chiffre uniquement,10 caracteres maximuns" maxlength="15" name="mdp" placeholder="Password">
						</div>
						<div class="col-md-offset-3 col-sm-offset-3 col-sm-6 col-md-6 wow fadeIn" data-wow-delay="0.3s">
							<input type="submit" value="S'inscrire" name="submit" class="form-control">

							<?php
							include("ControlerIndex.php");
							if(isset($_SESSION['$messageErreurInscription']))
							{
								//echo $_SESSION['sql'];
								echo "<div style='width:100%;' class='alert alert-warning'><font color=\"red\">".$_SESSION['message5'].$_SESSION['$messageErreurInscription']."</font> </div>";
								unset($_SESSION['$messageErreurInscription']);
							}
							if(isset($_SESSION['messageinscription']))
							{
								//echo $_SESSION['sql'];
								echo "<div style='width:100%;' class='alert alert-success'><font color=\"green\">".$_SESSION['messageinscription']."</font> </div>";
								unset($_SESSION['messageinscription']);
							}
							if(isset($_SESSION['message2']))
							{
								echo "<div style='width:100%;' class='alert alert-warning'><font color=\"red\">".$_SESSION['message2'].$_SESSION['message']."</font> </div>";
								unset($_SESSION['message2']);
								unset($_SESSION['message']);
							}

							?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- end contact -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
			<!--		<ul class="social-icon wow fadeIn" data-wow-delay="0.3s">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
					</ul>	-->
					<p class="wow bounceIn">Copyright &copy; <span>M2L</span> 2084
                    | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent"><span>templatemo</span></a></p>
				</div>
			</div>
		</div>
	</footer>
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
