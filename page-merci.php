<?php
/**
 * Template Name: Page Fintech
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.3
 */

get_header(); ?>

<style type="text/css">
	
	.slide-A {
		position: relative;
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-ikigai.png';?>');
		background-size: 1399px 727px;
	}
	@media screen and (max-width: 930px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-ikigai.png';?>') 50% / 100%;
		    background-size: 1100px 572px;
		}
	}
	@media screen and (min-width: 1399px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-ikigai.png';?>') 50% / 100%;
		    background-size: 1585px 824px;
		}
	}
	@media screen and (min-width: 1585px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-ikigai.png';?>') 50% / 100%;
		    background-size: 1750px 909px;
		}
	}
	@media screen and (min-width: 1750px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-ikigai.png';?>') 50% / 100%;
		    background-size: 1920px 998px;
		}
	}
	@media screen and (min-width: 1921px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-ikigai.png';?>') 50% / 100%;
		    background-size: 2200px 1143px;
		}
	}
	<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/style-backtotop.php') ?>
	
</style>


<div id="primary" class="content-area page-ikigai">
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

				<nav class="clearfix menu-container nav-desktop" role="navigation">
					<div>
						<ul id="nav"> 
							<li><a href="<?php echo site_url();?>">Accueil</a></li>
							<div class="dropdown">
									<a href="#" data-toggle="dropdown" role="button" id="dropdownMenuLink" class="btn btn-secondary dropdown-toggle spe-fintech" aria-haspopup="true" aria-expanded="false">Programme Ikigai</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										<li><a class="dropdown-item" href="<?php echo site_url();?>/cours-audio">Cours audio</a></li>
										<li><a class="dropdown-item" href="<?php echo site_url();?>/fintech">Fintech</a></li>
										
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
							<li><a class="spe-fintech" href="<?php echo site_url();?>/fintech">Programme Ikigai</a></li>
							<li><a href="<?php echo site_url();?>/boussole">Outils</a></li>
							<li><a href="<?php echo site_url();?>/evenements">Évènements</a></li>
							<li class="last-li"><a href="<?php echo site_url();?>/lieu">Le lieu</a></li>
							<li class="last-li"><a href="#colophon">Contact</a></li>
			        	</ul>
			        </div>
			    </nav>

			    <div class="cta-container">

			    	<h1 class="titre-slide-A">Le programme <span style="color:#03E8FC">Ikigai</span></h1>

			    	<h2>Faites le bilan </br> pour trouver votre Ikigai</h2>
			   		<div>
			   			<a class="cta-slide-A" href="#slide8">
			   				Je postule
						</a>
			   		</div>
			   	</div>


			</div>
		</section>


		<section class="slide2 slide2-iki">
			<div class="container-fluid" >
			    <div class="clearfix middle-container">
			        <div class="col-md-5 texte-slide2-sm middle-text container-text-maison">
			        	<h2>Devenez qui vous êtes vraiment</h2>
			        	<p>Ici, l'on croit qu’il existe une place parfaite pour chacune et chacun d’entre nous. Une place où l’on peut trouver l’équilibre et l’épanouissement suffisant pour vivre en accord avec qui l’on est vraiment. Les japonais l’appellent le Ikigai : la raison de vivre, d’être. </p>
			        	
			        </div>
			        <div class="col-md-7 middle-text container-maison-ikigai" style="padding-right: 0px;">
			        	<img alt="Maison programme Ikigai" class="maison-ikigai" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/maison.png';?>'>
			        </div>
			    </div>
			</div>
		</section>

		<section class="slide3-iki">
			<div class="container-fluid">
				<div class="clearfix ">

					<div class="col-sm-5 container-tools-ikigai">
						<img alt="Outils du programme Ikigai" class="tools-ikigai" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/tools-ikigai.png';?>'>
					</div>
					
					<div class="col-sm-5 text-tools-ikigai">
						<h2>Votre parcours mérite de l'attention</h2>
						<p>Parce que trouver son Ikigai demande du courage et de l’optimisme nous avons cherché à créer un programme à taille humaine et bienveillant. Nous créons les conditions de confiance pour vous apporter ce qu’il y a de plus précieux : du temps et de l’attention.</p>
						
					</div>
					<div class="col-sm-2"></div>
					
				</div>
			</div>
		</section>

		<section class="slide4-iki">
			<div class="container-fluid">
				<div class="clearfix">
					<div class="col-sm-4 col-sm-offset-4"></div>
					<h2>Le programme Ikigai est fait pour vous aider à :</h2>
					
				</div>
				<div class="clearfix ">
					<div class="col-sm-2"></div>
					<div class="col-sm-4">
						<img alt="Envies programme Ikigai" class="ico-ikigai" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/ico-envies.svg';?>'>
						<p>Faire le bilan sur vos envies</p>
					</div>
					<div class="col-sm-4">
						<img alt="Objectifs programme Ikigai" class="ico-ikigai" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/ico-objectifs.svg';?>'>
						<p>Clarifier vos objectifs de carrière</p>
					</div>
					<div class="col-sm-2"></div>
				</div>

				<div class="clearfix">
					<div class="col-sm-4">
						<img alt="Bilan compétences programme Ikigai" class="ico-ikigai" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/ico-competences.svg';?>'>
						<p>Remettre en valeur vos compétences</p>
					</div>
					<div class="col-sm-4">
						<img alt="Bilan talent programme Ikigai" class="ico-ikigai" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/ico-talent.svg';?>'>
						<p>Affirmer votre talent</p>
					</div>
					<div class="col-sm-4">
						<img alt="Stratégie de carrière programme Ikigai" class="ico-ikigai" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/ico-strategie.svg';?>'>
						<p>Définir une stratégie pour tendre vers votre Ikigai</p>
					</div>
				</div>

				<div class="clearfix ">
					<div class="col-sm-2"></div>
					<div class="col-sm-4">
						<img alt="Créativité programme Ikigai" class="ico-ikigai" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/ico-idees.svg';?>'>
						<p>Explorer des idées de métiers qui vous correspondent</p>
					</div>
					<div class="col-sm-4">
						<img alt="Networking et réseau programme Ikigai" class="ico-ikigai" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/ico-reseau.svg';?>'>
						<p>Agrandir votre réseau professionnel</p>
					</div>
					<div class="col-sm-2"></div>					
				</div>

			</div>
		</section>

		<section class="slide5-iki">
			<div classm="container-fluid">
				<div class="clearfix">
					<div class="col-sm-2 col-md-4">
						
					</div>
					<div class="col-sm-10 col-md-8">
						<div class="clearfix">
							<div class="droite-blanc">
								<div class="clearfix profs-1">
									<div class="col-sm-6 col-sm-push-6">
										<h2>
											Ils vous accompagnent
										</h2>
										<h3>
											Animé par les fondateurs de WAKE UP, 
											ce programme s’inspire de leur parcours. Salariés, auto-entrepreneurs puis entrepreneurs, ils se sont créés petit à petit une vie personnelle et professionnelle de plus en plus riche de sens.
										</h3>
									</div>
									
									<div class="col-sm-6 col-sm-pull-6">
										<div class="quotes">
											<img class="photo-anais-seb" alt="Anaïs Raoux & Sébastien Sors animateurs programme Ikigai"  src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/portrait-anais-raoux-sebastien-sors.jpg';?>'>
											<div class="quote quote-haut middle-container">
												<div class="quote-txt middle-text">
													<p><a href="javascript:void(0)" onclick="window.top.window.scrollTo(0,0);
								document.getElementById('cover').style.display='block';
								document.getElementById('fondateurs').style.display='block';
								document.getElementById('cancel').style.display='block';
								document.getElementById('cancel-2').style.display='block';"> Anaïs</a> joue parfaitement son rôle de mentor et de coach.</p>
												</div>
												<div class="quote-ico middle-text">
													<img alt="Quote Citation Ikigai" class="ico-quote" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/quote.svg';?>'>
												</div>
											</div>
											<div class="quote quote-bas middle-container">
												<div class="quote-ico middle-text">
													<img alt="Quote Citation Ikigai" class="ico-quote" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/quote.svg';?>'>
												</div>
												<div class="quote-txt middle-text">
													<p><a href="javascript:void(0)" onclick="window.top.window.scrollTo(0,0);
								document.getElementById('cover').style.display='block';
								document.getElementById('fondateurs').style.display='block';
								document.getElementById('cancel').style.display='block';
								document.getElementById('cancel-2').style.display='block';"> Sébastien</a> sème des graines qui ne pourront que germer.</p>
												</div>
											</div>
										</div>
										
									</div>
								
								</div>

								<div class="clearfix profs-2">
									<div class="col-sm-6">
										<h3>
											Ils mettent à votre disposition ce qui les ont aidé à trouver une place toujours plus épanouissante :
										</h3>
									</div>
									<div class="col-sm-6">
										<h4>Créativité</h4>
										<p>
											On surestime toujours ce que l’on peut faire en un an et on sous-estime ce que l’on peut faire en dix ans. Ils vous aident à imaginer au-delà des limites que vous vous étiez fixé.
										</p>
									</div>
									<div class="col-sm-6">
										<h4>Méthodologie</h4>
										<p>
											Le meilleur moyen de résoudre tous les problèmes, c’est de commencer par un problème. Ils vous apportent les outils et la structure pour avancer sereinement.
										</p>
									</div>
									<div class="col-sm-6">
										<h4>Networking</h4>
										<p>
											Les plus belles opportunités de la vie se trouvent dans les rencontres. En plus des élèves de votre promotion, ils vous connectent leur réseau business, entrepreneurial et associatif.
										</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
			
		</section>

		<section class="slide6-iki">
			<div class="container-fluid">
				<div class="clearfix intro-prog-iki">
					<div class="col-sm-4">
						<h2>Au programme</h2>
					</div>
					<div class="col-sm-8">
						<p>Pendant 1 mois vous allez quitter les contraintes et le rythme effréné du quotidien pour explorer le champ des possibles. Vous allez oser écrire votre vie de rêve et vous donner du temps pour faire le bilan.</p>
					</div>
				</div>
			</div>
			<div class="banniere-prog">
				<img class="prog-horiz-iki" alt="Programme Ikigai de WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/programme-horizontal-ikigai.png';?>'>
				<img class="prog-vert-iki" alt="Programme Ikigai de WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/programme-vertical-ikigai.png';?>'>
			</div>
			<div class="container-fluid">
				<div class="clearfix intro-2-prog-iki">
					<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
						<div class="a-gauche">
							<h3>Les <span style="color:#ffffff;">4 ateliers</span> ont lieu les mardis de </h3>
						</div>
						<div class="a-droite">
							<h3><span style="color:#ffffff;">18h30 à 21h30</span> avec collation incluse :</h3>
						</div>
					</div>
				</div>
				<div class="clearfix container-details-atelier">
					<div class="clearfix">
						<div class="col-sm-6 details-ateliers-iki">
							<div>
								<img alt="Numero Programme Ikigai WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/number-1.svg';?>'>
							</div>
							<div>
								<p>
									Affirmez vos talents & vos compétences
								</p>
								<p>
									Connaître ses talents et ses compétences est une bonne chose mais cela n’est pas suffisant. On vous aide ici à vous faire prendre conscience de l’unicité de vos aptitudes. Pour que vous-mêmes puissiez les affirmer avec davantage de confiance et de conviction. On apprendra également à bien faire la différence entre talent et compétences, une des clés fondamentales pour tendre efficacement vers votre Ikigai.
								</p>
							</div>
						</div>
						<div class="col-sm-6 details-ateliers-iki">
							<div>
								<img alt="Numero Programme Ikigai WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/number-2.svg';?>'>
							</div>
							<div>
								<p>
									Définissez votre vie rêvée
								</p>
								<p>
									Napoleon Hill disait “ce que l’esprit peut concevoir, il peut l’atteindre”. Tout commence donc avec un rêve, une idée. Mais encore faut-il prendre le temps de rêver. Et parfois même, faut-il s’autoriser à le faire. Ici, on vous guide pour que vous décriviez petit à petit ce que vous aimez et ce à quoi ressemblerait votre journée idéale. Cette étape est fondamentale pour démarrer tout nouveau projet de vie.
								</p>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="col-sm-6 details-ateliers-iki">
							<div>
								<img alt="Numero Programme Ikigai WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/number-3.svg';?>'>
							</div>
							<div>
								<p>
									Adoptez une stratégie de carrière
								</p>
								<p>
									Votre stratégie de carrière va dépendre en grande partie de la connaissance de votre propre personnalité et surtout, de votre capacité à analyser les métiers et les opportunités en fonction d’elle. On vous partage ici les méthodes et les clés d’analyse pour que vous puissiez élaborer la stratégie de carrière la plus efficace possible.
								</p>
							</div>
						</div>
						<div class="col-sm-6 details-ateliers-iki">
							<div>
								<img alt="Numero Programme Ikigai WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/number-4.svg';?>'>
							</div>
							<div>
								<p>
									Apprenez à raconter votre histoire
								</p>
								<p>
									Comment se présenter dans la vie réelle ou dans un e-mail ? Quelles sont les déclencheurs que l’on peut utiliser pour capter l’attention de son interlocuteur ? Comment faire en sorte pour que l’on pense à soi lorsque se présente une opportunité ? Ici, on utilise tout ce que vous avez mis en avant lors des précédents ateliers pour construire le pitch percutant qui vous conduira vers votre Ikigai.
								</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</section>

		<section class="slide7-iki">
			<div class="container-fluid">
				<div class="clearfix">
					<h2>Ce programme <span style="color:#ff0055;">n’est pas</span> fait pour vous si :</h2>
				</div>
				<div class="clearfix">
					<div class="col-sm-8 col-md-9">
						<div class="clearfix">
							<div class="col-sm-6">
								<div class="title-not-for-u">
									<p>
										Vous pensez que tout arrive du jour 
										au lendemain
									</p>
								</div>
								<div>
									<p>
										Ça serait le rêve mais il semblerait que ça ne se passe pas ainsi sur notre Terre. Parfois, rien ne peut remplacer la patience et la persévérance.
									</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="title-not-for-u">
									<p>
										Vous croyez que la vie est contre vous
									</p>
								</div>
								<div>
									<p>
										“Un pessimiste voit la difficulté dans chaque opportunité, un optimiste voit l'opportunité dans chaque difficulté”, Churchill avait tout dit.
									</p>
								</div>
							</div>
						</div>
						<div class="clearfix">
							<div class="col-sm-6">
								<div class="title-not-for-u">
									<p>
										Vous attendez que l’on vous dise 
										quoi faire
									</p>
								</div>
								<div>
									<p>
										Vous allez bénéficier d’un cadre d’accompagnement et de réflexion pour faciliter votre prise de décision. Mais à la fin, c’est à vous de jouer.
									</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="title-not-for-u">
									<p>
										Vous savez déjà précisément là où vous voulez aller
									</p>
								</div>
								<div>
									<p>
										On vous invite à jeter un oeil à notre programme Action parce qu’ici on prend surtout du temps pour soi pour poser les bases d’un nouveau départ.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-3">
						<img alt="Banane mascotte WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/banane-prof.png';?>'>
					</div>
				</div>
			</div>
		</section>
		
		

		<section id="slide8" class="slide8-iki" style="
						background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/bg-onboarding.jpg';?>'); background-repeat:no-repeat; background-size: cover; background-position: top;">
			<div class="container-fluid">
				<h2>Merci !</h2><br><br>

				
				<?php echo do_shortcode('

[accept_stripe_payment_checkout]

<h4>Nous vous confirmons la bonne réception du paiement de 590 € TTC pour le {item_name}.</h4> <p>Vous recevrez également une confirmation sur cet e-mail : {payer_email}.<br><br> A très vite !

[/accept_stripe_payment_checkout]'); ?>
				</p>

			</div>
		</section>


	</main><!-- .site-main -->
</div><!-- .content-area -->



<?php get_footer(); ?>