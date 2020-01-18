<?php
/**
 * Template Name: Page Lieu
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.3
 */

get_header(); ?>

<style type="text/css">
	
	.slide-A {
		position: relative;
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>');
		background-size: 1399px 727px;
	}
	@media screen and (max-width: 930px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>') 50% / 100%;
		    background-size: 1100px 572px;
		}
	}
	@media screen and (min-width: 1399px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>') 50% / 100%;
		    background-size: 1585px 824px;
		}
	}
	@media screen and (min-width: 1585px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>') 50% / 100%;
		    background-size: 1750px 909px;
		}
	}
	@media screen and (min-width: 1750px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>') 50% / 100%;
		    background-size: 1920px 998px;
		}
	}
	@media screen and (min-width: 1921px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>') 50% / 100%;
		    background-size: 2200px 1143px;
		}
	}
	<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/style-backtotop.php') ?>
	.slide-photos-lieu{
		    position:relative;
		    background: repeat url('<?php echo bloginfo('stylesheet_directory').'/images/LIEU/fond-blanc.png';?>');
		}
</style>


<div id="primary" class="content-area page-lieu">
	<main id="main" class="site-main" role="main">

		<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fondateurs.php') ?>
		<div id="cover"></div>
		
		<section id="slide-A" class="slide-A">
		
			<div id="mainHeaderWrapper" class="container-fluid">
				<img src="<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>">
				<div class="clearfix">
					<div class="col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
						<a href="<?php echo site_url();?>">
							<img class="logo-wakeup-fintech" alt="logo-wake up" src='<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/logo-wake-up.png';?>'>
						</a>
					</div>
				</div>

				<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/menu-nav.php') ?>

			    <div class="cta-container">

			    	<h1 class="titre-slide-A">Le Lieu</h1>

			    	<h2>41 rue du Faubourg Montmartre </br> Paris 9</h2>
			   		<div>
			   			<a class="cta-slide-A" target="_blank" href="https://www.google.fr/maps/dir/''/41+rue+du+faubourg+montmartre,+paris+wake+up/@48.8744488,2.2715974,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x47e66e4815223ac7:0x3824b95852fd0b86!2m2!1d2.341637!2d48.87447">
			   				Itinéraire
						</a>
			   		</div>
			   	</div>


			</div>
		</section>


		<section id="cd-google-map">
			<div id="google-container"></div>
			<div id="cd-zoom-in"></div>
			<div id="cd-zoom-out"></div>
			<address>41 rue du Faubourg Montmartre, 75009 Paris</address> 
		</section>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBt4_Uxl5dGy_JA1pErZ862vLvod93wFc"></script>


		<section class="slide-photos-lieu">

			<div class="container-fluid">
				<div class="clearfix">
					<div class="col-sm-7">
						<img src='<?php echo bloginfo('stylesheet_directory').'/images/LIEU/1-haut-photos-wake-up.jpg?v1';?>' class="img-responsive" alt="Photo espace haut - Lieu WAKE UP">
					</div>
					<div class="col-sm-5">
						<div style="padding-bottom: 1px" class="col-sm-12">
							
							<img src='<?php echo bloginfo('stylesheet_directory').'/images/LIEU/3-escalier-photos-wake-up.jpg?v1';?>' class="img-responsive" alt="Photo escalier - Lieu WAKE UP">
						</div>
						<div style="padding-top: 1px" class="col-sm-12">
							<img src='<?php echo bloginfo('stylesheet_directory').'/images/LIEU/2-plaque-entree-photos-wake-up.jpg?v1';?>' class="img-responsive" alt="Photo plaque d'entrée - Lieu WAKE UP">
						</div>
					</div>
				</div>

				<div class="clearfix">
					<div class="col-sm-5">
						<img src='<?php echo bloginfo('stylesheet_directory').'/images/LIEU/4-bas-banquettes-photos-wake-up.jpg?v1';?>' class="img-responsive" alt="Photo espace salon - Lieu WAKE UP">
					</div>
					<div class="col-sm-7">
						<img src='<?php echo bloginfo('stylesheet_directory').'/images/LIEU/5-terrasse-photos-wake-up.jpg?v1';?>' class="img-responsive" alt="Photo terrasse - Lieu WAKE UP">
					</div>
				</div>

				

				<div style="padding-bottom: 1px" class="clearfix">
					<div class="col-sm-7">
						<img src='<?php echo bloginfo('stylesheet_directory').'/images/LIEU/7-chill-photos-wake-up.jpg?v1';?>' class="img-responsive" alt="Photo salon bas - Lieu WAKE UP">
					</div>
					<div class="col-sm-5">
						<div style="padding-bottom: 1px" class="col-sm-12">
							<img src='<?php echo bloginfo('stylesheet_directory').'/images/LIEU/8-conference-photos-wake-up.jpg?v1';?>' class="img-responsive" alt="Photo espace conférence - Lieu WAKE UP">
						</div>
						<div style="padding-top: 1px" class="col-sm-12">
							<img src='<?php echo bloginfo('stylesheet_directory').'/images/LIEU/9-lumieres-photos-wake-up.jpg?v1';?>' class="img-responsive" alt="Photo lumières - Lieu WAKE UP">
						</div>
					</div>
				</div>

				

				<div class="clearfix">
					<div style="padding: 1px ;" class="col-sm-12">
						<img src='<?php echo bloginfo('stylesheet_directory').'/images/LIEU/6-bas-photos-wake-up.jpg?v1';?>' class="img-responsive" alt="Photo espace du bas - Lieu WAKE UP">
					</div>
				</div>

			</div>
		</section>
		
		<section>
			<div class="container-fluid privatisation">
				<div class="clearfix">
					<div class="col-md-8 col-md-offset-2">
						<h3>Pour toute demande de privatisation du lieu, écrivez-nous à <a href="mailto:bonjour@wake-up.io?subject=Demande%20de%20devis%20-%20Lieu%20WAKE%20UP&body=Bonjour%20Claire%2C%0A%0AJe%20souhaiterais%20obtenir%20un%20devis%20pour%20lieu%20au%2041%20rue%20du%20Faubourg%20Montmartre.%0A%0A%E2%80%A2%20Date%20%3A%0A%E2%80%A2%20Nombre%20de%20personnes%20%3A%0A%E2%80%A2%20Format%20%3A%0A%E2%80%A2%20Nom%20de%20l'entreprise%20%3A%0A%E2%80%A2%20Adresse%20%3A%0A%0AMerci%20par%20avance%20!">bonjour@wake-up.io</a>.</h3>
					</div>
				</div>
			</div>
		</section>
		

	</main><!-- .site-main -->
</div><!-- .content-area -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/map.js"></script> 

<?php get_footer(); ?>