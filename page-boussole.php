<?php
/**
 * Template Name: Boussole
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.3
 */

get_header(); ?>

<style type="text/css">
	 @font-face {
	    font-family: "Raleway";
	    src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Regular.ttf';?>');
	    }
	 @font-face {
	    font-family: "Raleway";
	    font-style: italic;
	    src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Italic.ttf';?>');
	}
	@font-face {
	    font-family: "Raleway";
	    font-weight: bold;
	    src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-SemiBold.ttf';?>');
	}
	@font-face {
	    font-family: "Raleway";
	    font-weight: lighter;
	    src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Light.ttf';?>');
	}
		
	body {
	    font-family: "Raleway", Helvetica, Arial, sans-serif !important;
	    background-color: #3B2A53;
	}
	.slide1 {
		background: url("<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/bg-boussole.jpg';?>");
		background-repeat: no-repeat;
		background-position: center top;
		background-size: cover;
	}

	@media screen and (max-width: 992px) {
		.slide1 {
			background-attachment: scroll;
			background-size: cover;
		}
	}

	.slide-A {
		position: relative;
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-boussole.jpg';?>');
		background-size: 1399px 727px;
	}
	@media screen and (max-width: 930px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-boussole.jpg';?>') 50% / 100%;
		    background-size: 1100px 572px;
		}
	}
	@media screen and (min-width: 1399px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-boussole.jpg';?>') 50% / 100%;
		    background-size: 1585px 824px;
		}
	}
	@media screen and (min-width: 1585px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-boussole.jpg';?>') 50% / 100%;
		    background-size: 1750px 909px;
		}
	}
	@media screen and (min-width: 1750px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-boussole.jpg';?>') 50% / 100%;
		    background-size: 1920px 998px;
		}
	}
	@media screen and (min-width: 1921px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-boussole.jpg';?>') 50% / 100%;
		    background-size: 2200px 1143px;
		}
	}
	<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/style-backtotop.php') ?>

</style>

<!-- Pixel Event : Visite Programme -->
<script>

  fbq('track', 'ViewContent', {

    content_ids: 'Boussole',

    content_type: 'Product',

  });

  function boutonpostulez () {
  	fbq('track', 'AddToCart',
  		{ 
  			content_ids: 'Boussole',
  			content_type: 'Product'
  		});
  }

</script>
<!-- End Pixel Event : Visite Programme -->


<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
					
		<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/manifeste.php') ?>
		<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fondateurs.php') ?>
		<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/charte.php') ?>

	<div id="cover"></div>


	<!-- **** SLIDE 1 *** -->
	<!--******************-->
	<!--******************-->


	<section class="slide slide1 vertical-center">


	
		<div class="container-fluid">

			<div id="mainHeaderWrapper" class="clearfix">
					<div class="clearfix">
						<a href="<?php echo site_url();?>">
							<img class="logo-wakeup" alt="logo-wake up" src='<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/logo-wake-up.png';?>'>
						</a>

					</div>

					<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/menu-nav.php') ?>
						
			</div>
			<div class="clearfix">
				<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-xl-6 col-xl-offset-3 slide1-lineup">
					
					<img class="icone-boussole" alt="icone Boussole by WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/icone-boussole.png';?>'>
					<h1>Boussole est un test de personnalité spécialement conçu pour vous aider à trouver vos talents !</h1>
					<div class="bouton-slide-1">
						<a href="https://boussole.wake-up.io/">
							<button onclick='boutonpostulez()' class="btn btnjaune">démarrez le test</button>
						</a>
					</div>	
				</div>
			</div>		
		</div>
	</section>

	<!-- **** SLIDE 1 *** -->
	<!--******************-->
	<!--******************-->
	<!-- **** SLIDE 2 *** -->

					
	<section class="slide slide2" style="background: url('<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/background2.png';?>') no-repeat center center fixed; background-size: cover;">
		<div class="container-fluid">

			<div class="infor clearfix">
				<div class="col-md-4 mobile_img_info" style="background:#03e8fc;">
					<img class="img_info" alt="picto neuroscience WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/info1.svg';?>'/>
				</div>
				<div class="col-md-8 text_info">
					<div class="clearfix">
						<div class="col-md-5">
							<h3 class="titre_info" id="titre_1" style="color:#03e8fc;">Un modèle neurophilosophique</h3>
						</div>
						<div class="col-md-7">
							<p class="desc_info">Boussole est un test de personnalité basé sur les recherches en neurosciences ainsi que sur la mécanique de l'esprit décrite dans les travaux du célèbre psychologue Carl Gustav Jung. A travers ses questions, il analyse ainsi les dimensions conscientes et inconscientes de notre psychologie.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="clearfix slide-content">							
				
				<div class="col-md-6 hidden-sm hidden-xs container-graph">
					<img class="graph" alt="Graphe Boussole de WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/visual_graph.png';?>'>
					<div class="numero">
						<p>1.</p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="slide-content-txt">
						<h2 style="color:#ffffff;" class="hidden-xs hidden-sm">Trouvez votre talent d'or</h2>

						<div class="col-xs-12 clearfix visible-sm visible-xs">
							<div class="titre-contenu">
								<div class="numero">
									<p>1.</p>
								</div>
								<h2 style="color:#ffffff;">Trouvez votre talent d'or</h2>
							</div>

							<div>
								
								<p>L’approche neurophilosophique permet de révéler votre aptitude innée, celle que 94 % de la population n’a pas. Elle est le noyau à partir duquel vous devriez construire votre carrière et vous former aux métiers de demain. Boussole est un test de personnalité de 80 questions qui se passe en 8 minutes.</p>
								<p>Les réponses sont traitées par un algorithme qui vous envoie directement et gratuitement les résultats dans votre boite e-mail. Vous y trouverez votre talent d’or, vos trois qualités ainsi que le positionnement clé que vous avez en entreprise.
								</p>
							</div>
						</div>

						<div class="hidden-xs hidden-sm"> 
						<p>L’approche neurophilosophique permet de révéler votre aptitude innée, celle que 94 % de la population n’a pas. Elle est le noyau à partir duquel vous devriez construire votre carrière et vous former aux métiers de demain. Boussole est un test de personnalité de 80 questions qui se passe en 8 minutes.</p>
						<p>Les réponses sont traitées par un algorithme qui vous envoie directement et gratuitement les résultats dans votre boite e-mail. Vous y trouverez votre talent d’or, vos trois qualités ainsi que le positionnement clé que vous avez en entreprise.
						</p>
						</div>
						<div class="graph-sm visible-xs visible-sm">
							<img class="graph " alt="Graph" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/visual_graph.png';?>'>
						</div>
					</div>
				</div>
			</div>

		</div>			
	</section>

	<!-- **** SLIDE 2 *** -->
	<!--******************-->
	<!--******************-->
	<!-- **** SLIDE 3 *** -->
					
	<section class="slide slide3" style="background: url('<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/background3.png';?>') no-repeat center center fixed; background-size: cover;">

		<div class="container-fluid">

			<div class="infor clearfix">

				<div class="col-md-4 mobile_img_info" style="background:#3b2b52;">
					<img class="img_info" alt="picto networking WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/info2.svg';?>'/>
				</div>
				
				<div class="col-md-8 text_info">
					<div class="clearfix">
						<div class="col-md-5">
							<h3 class="titre_info" id="titre_1" style="color:#3b2b52;">Networking <br />positif</h3>
						</div>
						<div class="col-md-7">
							<p class="desc_info">Créer une carrière sur mesure nécessite de bien s’entourer et de repenser sa façon de networker. Pour entretenir un bon réseau il faut avant tout être soi-même une opportunité pour les autres et savoir donner avant de recevoir.</p>
						</div>
						
					</div>
				</div>

				
				
			</div>

			<div class="clearfix slide-content">							
				
				<div class="col-md-6 container-graph">

					<div class="slide-content-txt">
						<div class="clearfix">
							<div class="col-md-1 hidden-sm hidden-xs">
								<div class="numero numero2">
									<p>2.</p>
								</div>
							</div>
							<div class="col-md-11 col-sm-12 text-inside">
								<div class="titre-contenu">
									<div class="numero numero2 visible-sm visible-xs">
										<p>2.</p>
									</div>
									<h2>Rejoignez le camp <br />des optimistes</h2>
								</div>
								<div class="hidden-xs">
								<p>Boussole est un test de personnalité gratuit car son objectif est de rassembler une communauté forte de personnes qui osent créer la vie de leurs rêves. C’est en rassemblant des personnalités ambitieuses, persévérantes et surtout bienveillantes qu’il est possible de créer un mouvement positif qui bénéficie à chacun. <a href="javascript:void(0)" onclick="window.top.window.scrollTo(0,0);
									document.getElementById('cover').style.display='block';
									document.getElementById('manifeste').style.display='block';
									document.getElementById('cancel').style.display='block';
									document.getElementById('cancel-2').style.display='block';
									" class="button">Lire notre manifeste</a>.</p>
								<p><a href="https://www.facebook.com/groups/754701014738846/" target="_blank">Rejoignez la communauté</a> pour accéder aux tips carrière, meet-ups inspirants et ateliers pour vous créer petit à petit une carrière sur-mesure.
								</p>
								</div>
							</div>
							<div class="col-xs-12 visible-xs">
								<p>Boussole est un test de personnalité gratuit car son objectif est de rassembler une communauté forte de personnes qui osent créer la vie de leurs rêves. C’est en rassemblant des personnalités ambitieuses, persévérantes et surtout bienveillantes qu’il est possible de créer un mouvement positif qui bénéficie à chacun. <a href="javascript:void(0)" onclick="window.top.window.scrollTo(0,0);
									document.getElementById('cover').style.display='block';
									document.getElementById('manifeste').style.display='block';
									document.getElementById('cancel').style.display='block'" class="button">Lire notre manifeste</a>.</p>
								<p><a href="https://www.facebook.com/groups/754701014738846/" target="_blank">Rejoignez la communauté</a> pour accéder aux tips carrière, meet-ups inspirants et ateliers pour vous créer petit à petit une carrière sur-mesure.
								</p>
							</div>
						</div>

						<div class="photo-slide3  visible-xs visible-sm">
							<img alt="Photo networking WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/photo1.png';?>'>
						</div>
					</div>
				</div>

				<div class="col-md-6 hidden-sm hidden-xs photo-slide3">
					<img class="graph photo-networking" alt="Photo networking WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/photo1.png';?>'>
					
				</div>

			</div>

		</div><br /><br />
						
	</section>

	<!-- **** SLIDE 3 *** -->
	<!--******************-->
	<!--******************-->
	<!-- **** SLIDE 4 *** -->

	<section class="slide slide4" style="background: url('<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/background4.png';?>') no-repeat center center fixed; background-size: cover;">
		<div class="container-fluid">

			<div class="infor clearfix">
				<div class="col-md-4 mobile_img_info" style="background:#f5e873;">
					<img class="img_info" alt="picto transparence WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/info3.svg';?>'/>
				</div>
				<div class="col-md-8 text_info">
					<div class="clearfix">
						<div class="col-md-5">
							<h3 class="titre_info" id="titre_1" style="color:#f5e873;">Transparence<br /> = Confiance</h3>
						</div>
						<div class="col-md-7">
							<p class="desc_info">Notre intention est de vous aider à créer une carrière sur-mesure et épanouissante. Nous sommes convaincus que la confiance en est l’ingrédient essentiel. C’est pourquoi l’effort de transparence est au coeur de notre démarche.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="clearfix slide-content">							
				
				<div class="col-md-6 hidden-sm hidden-xs container-graph">
					<img class="graph pigeon" alt="Image oiseau WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/bird.png';?>'>
					<div class="numero numero-droite">
						<p>3.</p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="slide-content-txt">
						<h2 class="hidden-xs hidden-sm">Restez libre</h2>

						<div class="clearfix visible-sm visible-xs">
							<div class="titre-contenu col-xs-12">
								<div class="numero">
									<p>3.</p>
								</div>
								<h2>Restez libre</h2>
							</div>

							<div class="col-xs-12">
								
								<p class="txt-slide4">Vous êtes maître de votre destin, restez maître de vos données. Vous pouvez supprimer à tout moment et en un seul clic vos informations personnelles sur le test de personnalité. Vos réponses seront alors totalement et définitivement anonymisées. <a href="javascript:void(0)" onclick="window.top.window.scrollTo(0,0);
								document.getElementById('cover').style.display='block';
								document.getElementById('charte_div').style.display='block';
								document.getElementById('cancel').style.display='block';
								document.getElementById('cancel-2').style.display='block';" class="button">Lire notre charte de confidentialité.</a>
								</p>
							</div>
						</div>

						<div class="hidden-xs hidden-sm"> 
						<p class="txt-slide4">Vous êtes maître de votre destin, restez maître de vos données. Vous pouvez supprimer à tout moment et en un seul clic vos informations personnelles sur le test de personnalité. Vos réponses seront alors totalement et définitivement anonymisées. <a href="javascript:void(0)" onclick="window.top.window.scrollTo(0,0);
						document.getElementById('cover').style.display='block';
						document.getElementById('charte_div').style.display='block';
						document.getElementById('cancel').style.display='block';
						document.getElementById('cancel-2').style.display='block';" class="button">Lire notre charte de confidentialité.</a>
						</p>
						</div>
						<div class="graph-sm visible-xs visible-sm">
							<img class="graph pigeon" alt="Image oiseau WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/bird.png';?>'>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- **** SLIDE 4 *** -->
	<!--******************-->
	<!--******************-->
	<!-- **** SLIDE 5 *** -->
			
	<section class="slide slide5" style="background: url('<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/background5.png';?>') no-repeat center center fixed; background-size: cover;">

		<div class="container-fluid" id="ready" style="background: white url('<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/visuals.png';?>') no-repeat; background-position: center top; background-size : 100% auto;">
			<div class="clearfix ready-inside">
				<h2>Passez Boussole</h2>


				<h3>Le test de personnalité prend 8 minutes, pas plus ! Vous recevez gratuitement par e-mail votre talent d'or, vos trois qualités ainsi que là où vous apportez le plus de valeur en entreprise.</h3>
				
				<a href="https://boussole.wake-up.io/">
					<button onclick='boutonpostulez()' class="btn btnjaune">démarrez le test</button>
				</a>
			</div>	
		</div>

		<div class="clearfix content-5 " id="newsletter-boussole">


				<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 slide5-form" id="mc_embed_signup">

						<h2 style="color: white;">Recevez tous les vendredis à 8h des conseils carrière et des analyses basées sur la personnalité.</h2>
						
						<form action="//wake-up.us14.list-manage.com/subscribe/post?u=4714d965ed464bcbe3f4e6e54&amp;id=8209afd58c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

								<div class="form-group" id="mc_embed_signup_scroll">

									<div class="a-centrer">
										<div class="gauche">

											<div class="special-chp-form-1">
												<input id="mce-FNAME" type="text" value="" name="FNAME" class="form-control" placeholder="votre prénom">
											</div>

											<div class="mc_field_group special-chp-form-2">
												<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="votre e-mail">
											</div>
										</div>

										<div class="droite">
											<div class="special-chp-form-3">
												<input type="submit" class="button btn btnjaunetr" name="subscribe" id="mc-embedded-subscribe" value="recevoir la newsletter" >
											</div>

										</div>
									</div>

								</div>

						</form>

						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4714d965ed464bcbe3f4e6e54_324224b9fa" tabindex="-1" value=""></div>
				</div>

		</div>
	</section>

	</main><!-- .site-main -->
</div><!-- .content-area -->
		

<?php get_footer(); ?>
