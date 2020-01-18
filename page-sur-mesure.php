<?php
/**
 * Template Name: Page sur mesure
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.3
 */

get_header(); ?>

<style type="text/css">
	
	.slide-A {
		position: relative;
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A-sm.png';?>');
		background-size: 1399px 727px;
	}
	@media screen and (max-width: 930px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A-sm.png';?>') 50% / 100%;
		    background-size: 1100px 572px;
		}
	}
	@media screen and (min-width: 1399px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A-sm.png';?>') 50% / 100%;
		    background-size: 1585px 824px;
		}
	}
	@media screen and (min-width: 1585px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A-sm.png';?>') 50% / 100%;
		    background-size: 1750px 909px;
		}
	}
	@media screen and (min-width: 1750px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A-sm.png';?>') 50% / 100%;
		    background-size: 1920px 998px;
		}
	}
	@media screen and (min-width: 1921px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A-sm.png';?>') 50% / 100%;
		    background-size: 2200px 1143px;
		}
	}
	<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/style-backtotop.php') ?>
	
</style>


<div id="primary" class="content-area page-fintech page-sur-mesure">
	<main id="main" class="site-main" role="main">

		<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fondateurs.php') ?>
		<div id="cover"></div>
		
		<section id="slide-A" class="slide-A">
		
			<div id="mainHeaderWrapper" class="container-fluid">
				<img src="<?php echo bloginfo('stylesheet_directory').'/images/bg-A-sm.png';?>">
				<div class="clearfix">
					<div class="col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
						<a href="<?php echo site_url();?>">
							<img class="logo-wakeup-fintech" alt="logo-wake up" src='<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/logo-wake-up.png';?>'>
						</a>
						
					</div>
				</div>

				<nav class="clearfix menu-container nav-desktop" role="navigation">
					<div>
						<ul id="nav"> 
							<li><a href="<?php echo site_url();?>">Accueil</a></li>
							<div class="dropdown">
									<a href="#" data-toggle="dropdown" role="button" id="dropdownMenuLink" class="btn btn-secondary dropdown-toggle spe-fintech" aria-haspopup="true" aria-expanded="false">Programme sur-mesure</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										<li><a class="dropdown-item" href="<?php echo site_url();?>/fintech">Fintech</a></li>
										<li><a class="dropdown-item" href="<?php echo site_url();?>/sur-mesure">Sur-mesure</a></li>
									</div>
							</div>
							<li><a href="<?php echo site_url();?>/boussole">Outils</a></li>
							<li><a href="<?php echo site_url();?>/evenements">Évènements</a></li>
							<li class="last-li"><a href="<?php echo site_url();?>/lieu">Le lieu</a></li>
						</ul>
					</div>
				</nav>

			    <nav class="nav-mobile" role="navigation">
			    	<div id="menuToggle">

			    		<input type="checkbox" />

						<span></span>
						<span></span>
						<span></span>
			    		
			    	
			        	<ul id="menu"> 
			        		<li><a href="<?php echo site_url();?>">Accueil</a></li>
							<li><a class="spe-fintech" href="<?php echo site_url();?>/sur-mesure">Programme sur-mesure</a></li>
							<li><a href="<?php echo site_url();?>/boussole">Outils</a></li>
							<li><a href="<?php echo site_url();?>/evenements">Évènements</a></li>
							<li class="last-li"><a href="<?php echo site_url();?>/lieu">Le lieu</a></li>
							<li class="last-li"><a href="#colophon">Contact</a></li>
			        	</ul>
			        </div>
			    </nav>

			    <div class="cta-container">

			    	<h1 class="titre-slide-A">Le programme <span style="color:#03E8FC">sur-mesure</span></h1>

			    	<h2>Faites partie </br> de la prochaine promotion</h2>
			   		<div>
			   			<a class="cta-slide-A" target="_blank" href="https://wakeup1.typeform.com/to/yODkQA">
			   				Je postule
						</a>
			   		</div>
			   	</div>


			</div>
		</section>


		<section class="slide2 slide2-sm">
			<div class="container-fluid" >
			    <div class="clearfix middle-container">
			        <div class="col-md-5 texte-slide2-sm middle-text">
			        	<h2>Concrétisez </br>votre <span style="color:#FF0054"> projet de vie</span></h2>
			        	<p>Sortez des sentiers battus et quittez la routine pour vivre une vie extraordinaire. Ce programme sur-mesure est fait pour vous accompagner dans ce saut que vous rêvez de faire depuis longtemps.</p>
			        	<p>Quelle que soit votre ambition : monter votre entreprise, changer de job ou devenir freelance, ce programme vous aide à trouver les idées, l'énergie, la stratégie et moyens pour y arriver.</p>
			        </div>
			        <div class="col-md-7 middle-text container-pomme-full" style="padding-right: 0px;">
			        	<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/pomme-full.php'); ?>
			        </div>
			    </div>
			</div>
			<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/pomme-bottom.php'); ?>
			<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/pomme.php'); ?>

			
		</section>


		<section class="slide3-sm">
			<div class="container-fluid">
				<div class="clearfix middle-container">

					<div class="col-sm-5 middle-text container-txt-creer">
						<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/texte-sur-mesure.php'); ?>
					</div>
					
					<div class="col-sm-7 middle-text">
						<h2>Vous êtes <span style="color:#F5E873">au coeur</span> du programme</h2>
						<p>Nous croyons qu’il est essentiel de partir des fondamentaux, c’est-à-dire vous, vos rêves, vos talents, vos éventuels doutes, pour construire un accompagnement personnalisé. Notre philosophie n’est pas de vous aider à améliorer vos faiblesses, mais de vous aider à démultiplier vos forces et à organiser votre vie autour de ces dernières.</p>
						<p>Nous allons vous aider à passer à l’action et à franchir les barrières qui pourraient entraver votre chemin. En général, ces barrières sont plus souvent psychologiques que techniques. C’est pourquoi nous avons mis au centre de notre démarche des méthodes de connaissance de soi et de développement personnel.</p>
					</div>

					<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/texte-sur-mesure-horizontal.php'); ?>
					
				</div>
			</div>
		</section>
		
		<section class="slide4-sm">
			<div class="container-fluid header-programme-sm" style="max-width: 100%;">
				<div class="clearfix">
					<div class="col-lg-6 col-lg-offset-3">
						<h2>Détails sur <span style="color: #FF0054">l'accompagnement</span></h2>
						<h3>Le programme se déroule sur trois mois afin de vous laisser le temps de progresser efficacement vers vos objectifs. En pratique, il contient :</h3>
					</div>
				</div>
				<div class="clearfix bandeau-mosaique">
						<div class="img-mosaique">
							<img src='<?php echo bloginfo('stylesheet_directory').'/images/MOSAIQUE/1-cours.jpg';?>' class="img-responsive" alt="Photo cours programme sur-mesure - WAKE UP">
						</div>
						<div class="img-mosaique">
							<img src='<?php echo bloginfo('stylesheet_directory').'/images/MOSAIQUE/2-yoga.jpg';?>' class="img-responsive" alt="Photo yoga programme sur-mesure - WAKE UP">
						</div>
						<div class="img-mosaique">
							<img src='<?php echo bloginfo('stylesheet_directory').'/images/MOSAIQUE/3-lieu.jpg';?>' class="img-responsive" alt="Photo lieu programme sur-mesure - WAKE UP">
						</div>
						<div class="img-mosaique img-cachee">
							<img src='<?php echo bloginfo('stylesheet_directory').'/images/MOSAIQUE/4-renita.jpg';?>' class="img-responsive" alt="Photo Renita Kalhorn programme sur-mesure - WAKE UP">
						</div>
						<div class="img-mosaique img-cachee">
							<img src='<?php echo bloginfo('stylesheet_directory').'/images/MOSAIQUE/5-travail.jpg';?>' class="img-responsive" alt="Photo travail programme sur-mesure - WAKE UP">
						</div>
				</div>
			</div>
			<div class="container-fluid container-ateliers">
				<div class="clearfix">
					<div class="col-md-6 details-contenu">
						<ul>
							<li><span style="font-family: 'Raleway-Bold'">1 entretien individuel approfondi de 2-3 h</span></br><span style="color:#000;">à partir de notre questionnaire de personnalité Boussole pour faire le bilan sur vos talents et définir un plan d’action</span></li>
							<li><span style="font-family: 'Raleway-Bold'">Un suivi hebdomadaire par e-mail</span></br><span style="color:#000;">pour mesurer vos réussites et vous aider à atteindre vos micro-objectifs de chaque semaine</span></li>
							<li><span style="font-family: 'Raleway-Bold'">5 Ateliers </span></br><span style="color:#000;">où apprendre des techniques et des méthodes essentielles à utiliser au quotidien pour libérer son potentiel</span></li>
							<li><span style="font-family: 'Raleway-Bold'">1 petit déjeuner inspirant par mois</span></br><span style="color:#000;">avec un entrepreneur ou une personne engagée</span></li>
							<li><span style="font-family: 'Raleway-Bold'">1 coaching individuel</span></br><span style="color:#000;">à mi-parcours</span></li>
							<li><span style="font-family: 'Raleway-Bold'">Une séance d’introspection par semaine</span></br><span style="color:#000;">(méditation / yoga / sophrologie)</span></li>
							<li><span style="font-family: 'Raleway-Bold'">Accès au lieu tous les lundis</span></br><span style="color:#000;">pour venir travailler, discuter, lire et vous inspirer</span></li>
							<li><span style="font-family: 'Raleway-Bold'">SMS de motivation quotidien</span></br><span style="color:#000;">et un accès illimité au groupe privé d’entraide sur WhatsApp</span></li>
							<li><span style="font-family: 'Raleway-Bold'">1 coaching individuel de 2-3 h pour faire le bilan</span></br><span style="color:#000;">sur ces trois mois et prendre votre envol en toute autonomie</span></li>
						</ul>
					</div>

					<div class="col-md-6 details-ateliers">
						<ul>
							<li>
								<div>
									<span style="font-family: 'Raleway-Bold'">Les 5 ateliers</span> <span style="color:#000; font-family: 'Raleway-Bold'">ont lieu en soirée :</span>
								</div>
							</li>
							<div class="liste-ateliers">
								<p class="titre-atelier">#1 Se créer une routine du succès</p>
								<p>Le succès se trouve dans l’accumulation de petites choses positives et l’échec dans l’accumulation de petites choses négatives. Ici, on détermine ensemble les actions quotidiennes positives que vous allez mettre en place tout au long du programme.</p>

								<p class="titre-atelier">#2 Définir son Ikigaï et construire un tableau de vision</p>
								<p>Le cerveau ne peut se concentrer que sur une seule chose à la fois. Il est donc important de ne pas jouer les girouettes avec lui. Le simple fait de définir précisément et clairement vos objectifs et vos rêves augmente biologiquement vos chances de succès.</p>

								<p class="titre-atelier">#3 Développer ses ressources créatives</p>
								<p>La créativité ne se contrôle pas directement, mais elle se provoque. Il faut donc être conscient que certaines conditions environnementales et psychiques sont bien plus favorables à l’émergence d’idées nouvelles que d’autres.</p>

								<p class="titre-atelier">#4 Définir le business plan de sa vie</p>
								<p>Être entrepreneur de sa vie implique de bien gérer ses finances. Inutile de rentrer dans des tableaux compliqués, quelques lignes simples permettent de déterminer rapidement les moyens requis pour la réalisation de son projet.</p>

								<p class="titre-atelier">#5 Mettre en avant ses talents et devenir un•e As de la négociation</p>
								<p>Se présenter de façon percutante permet de valoriser votre actif numéro un : votre crédibilité. C’est avec elle que vous ouvrez toutes les portes : clients, partenaires, journalistes, potentiels associés etc.</p>
							</div>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="slide5-sm">
			<div class="container-fluid">
				<div class="clearfix header-calendrier">
					<img alt="Picto calendrier programme sur-mesure WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/dates.png';?>'>
					<h2>Calendrier</h2>
					<h3>Programme de coaching de 3 mois</h3>
					
					<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/calendrier-sur-mesure.php'); ?>
				</div>
				
			</div>
		</section>
		

		<section id="slide6" class="slide6-sm" style="
						background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/bg-slide6-sm.jpg';?>'); background-repeat:no-repeat; background-size: cover; background-position: top;">
			<div class="container-fluid">

				<h2>Rejoignez la prochaine promotion</h2>

				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-2">
						<img class="picto-postuler" alt="Picto des dates WAKE UP" title="Picto des dates WAKE UP"  src='<?php echo bloginfo('stylesheet_directory').'/images/agenda-violet.png';?>'>
					</div>
					<div class="col-md-5"></div>
				</div>
				<div class="row slide6-lignes">
					<div class="col-md-5"><hr class="hidden-xs hidden-sm"></div>
					<div class="col-md-2">
						<p class="titre-pictos">DATES À VENIR</p>
					</div>
					<div class="col-md-5"><hr></div>
				</div>
				<div class="row dates">
					<div class="col-md-4">
						<h3>Janvier</h3>
						<p>Complet</p>
					</div>
					<div class="col-md-4">
						<h3>30 Avril</h3>
						<p>au 31 juillet 2018</p>
					</div>
					<div class="col-md-4">
						<h3>5 Septembre</h3>
						<p>au 6 décembre 2018</p>
					</div>
				</div>


				<img class="picto-prix hidden-sm hidden-xs" alt="Picto des dates WAKE UP" title="Picto des dates WAKE UP"  src='<?php echo bloginfo('stylesheet_directory').'/images/ico-prix-violet.png';?>'>

				<div class="row slide6-lignes">
					<div class="col-md-5"><hr></div>
					<div class="col-md-2">
						<p class="titre-prix hidden-sm hidden-xs">PRIX</p>
					</div>
					<div class="col-md-5 hidden-sm hidden-xs"><hr></div>

				</div>
				<div class="row prix">
					<img class="picto-prix visible-prix" alt="Picto des dates WAKE UP" title="Picto des dates WAKE UP"  src='<?php echo bloginfo('stylesheet_directory').'/images/ico-prix-violet.png';?>'>
					<h2>4 390 € TTC</h2>
				</div>
				<div class="row slide6-lignes">
					<div class="col-md-12"><hr></div>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p>10 personnes maximum dans le programme</p>
						<p>Repas et petits déjeuners inclus</p>
					</div>
				</div>
				<div class="row-candidature">
				    <a target="_blank" href="https://wakeup1.typeform.com/to/yODkQA" class="cta-candidature">Je postule !</a>
				</div>	
	    
			</div>
		</section>


	</main><!-- .site-main -->
</div><!-- .content-area -->



<?php get_footer(); ?>