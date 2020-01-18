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
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/bg-events-2.png';?>');
		background-size: 1399px 727px;
	}
	@media screen and (max-width: 930px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-events-2.png';?>') 50% / 100%;
		    background-size: 1100px 572px;
		}
	}
	@media screen and (min-width: 1399px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-events-2.png';?>') 50% / 100%;
		    background-size: 1585px 824px;
		}
	}
	@media screen and (min-width: 1585px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-events-2.png';?>') 50% / 100%;
		    background-size: 1750px 909px;
		}
	}
	@media screen and (min-width: 1750px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-events-2.png';?>') 50% / 100%;
		    background-size: 1920px 998px;
		}
	}
	@media screen and (min-width: 1921px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-events-2.png';?>') 50% / 100%;
		    background-size: 2200px 1143px;
		}
	}
	.zone-events {
		position:relative;
		background: repeat-y center bottom url('<?php echo bloginfo('stylesheet_directory').'/images/vertical-dots-solo-centered.svg';?>') ;
		background-size: 17px;
	}

	@media screen and (max-width: 768px) {
		.zone-events {
			position:relative;
			background: none;
		}
		.inside-events {
			position:relative;
			background: repeat-y left bottom 150px url('<?php echo bloginfo('stylesheet_directory').'/images/vertical-dots-solo-01.svg';?>') ;
			background-size: 15px;
		}
	}

	<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/style-backtotop.php') ?>

	.slide-photos-lieu{
		    position:relative;
		    background: repeat url('<?php echo bloginfo('stylesheet_directory').'/images/LIEU/fond-blanc.png';?>');
		}


</style>

<script>

function montrer() {
    var x = document.getElementsByClassName("past");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "block";
    }

	var nbofpast = x.length;
		
	var block = document.getElementsByClassName("block");
	var j;
	var secondblock = x.length + 1;

	var w = window.innerWidth
	|| document.documentElement.clientWidth
	|| document.body.clientWidth;
	    
	if (isOdd(nbofpast)==1) {
	   	for (j = 0; j < block.length; j++) {
	    	block[j].classList.remove("block-impair");
	    	block[j].classList.add("block-pair");
	    }
	    if ( w < 768) {      
	    	block[secondblock].setAttribute("style", "margin-top: 0em ;");
	    	block[1].setAttribute("style", "margin-top: 0em ;");  
	    }
	    else {
	    	block[secondblock].setAttribute("style", "margin-top: initial !important;");
	    }
	}

	else {
		if ( w < 768) {      
	    	block[secondblock].setAttribute("style", "margin-top: 0em ;");
	    	block[1].setAttribute("style", "margin-top: 0em ;");  
	    }
	    else {
	    	block[secondblock].setAttribute("style", "margin-top: initial !important;");
	    }
		
	}
}

function cacher() {
    var x = document.getElementsByClassName("past");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    	var nbofpast = x.length;
    	
    	var block = document.getElementsByClassName("block");
        var j;
        var secondblock = x.length + 1;

        var w = window.innerWidth
        || document.documentElement.clientWidth
        || document.body.clientWidth;
        
        if (isOdd(nbofpast)==1) {
        	for (j = 0; j < block.length; j++) {
        		    block[j].classList.add("block-impair");
        		    block[j].classList.remove("block-pair");
        	}
        	if ( w < 768) {      
        		block[secondblock].setAttribute("style", "margin-top: 0em ;"); 
        	}
        	else {
        		block[secondblock].setAttribute("style", "margin-top: 10em ;");
        	}
        }
        else {
        	if ( w < 768) {      
        		block[secondblock].setAttribute("style", "margin-top: 0em ;"); 
        	}
        	else {
        		block[secondblock].setAttribute("style", "margin-top: 10em ;");
        	}
        }
}

</script>


<div id="primary" class="content-area page-events">
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

			    	<h1 class="titre-slide-A" style="color: #ffffff;">Évènements chez WAKE UP</h1>

			   	</div>


			</div>
		</section>

		<section class="zone-logo-calendrier">
			<img class="calendar-events" src='<?php echo bloginfo('stylesheet_directory').'/images/calendar.svg';?>'>
		</section>


		<section class="zone-events">

			<div class="container-fluid inside-events">
				<div class="clearfix header-button">

					<div class="col-sm-6 block-start block-start-droite">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">

								<a href="javascript:void(0)" id="more-button" onclick="
								montrer();
								document.getElementById('less-button').style.display='block';
								document.getElementById('more-button').style.display='none';">
									
										<div class="elements-past">
										<img alt="icone évènements passés" class="icon_past_events" src='<?php echo bloginfo('stylesheet_directory').'/images/icon_past_events.svg';?>'>
										</div>
										<div class="elements-past">
											<p>Afficher les événements passés</p>
										</div>
								</a>

								<a href="javascript:void(0)" id="less-button" onclick="
								cacher();
								document.getElementById('more-button').style.display='block';
								document.getElementById('less-button').style.display='none';">
										<div class="elements-past">
										<img alt="icone évènements passés" class="icon_past_events" src='<?php echo bloginfo('stylesheet_directory').'/images/icon_past_events.svg';?>'>
										</div>
										<div class="elements-past">
											<p>Masquer les anciens évènements</p>
										</div>
								</a>
								
							</div>
						</div>
					</div>

					<div class="col-sm-6 block-start block-start-gauche">
						<div class="clearfix">
							<div class="content-event">
								<p></p>
							</div>
						</div>
					</div>
				</div>

				<div class="clearfix list-events">

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Dépasser ses peurs avec Axelle Tessandier</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>25 Janvier 19h00 - 21h00</h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>★ Conférence inspirante ★<br>On rencontre Axelle Tessandier, auteure, entrepreneure optimiste et citoyenne engagée. On parlera de son parcours, de la campagne qu'elle a menée pour Emmanuel Macron et comment elle réussit à dépasser ses peurs et ses doutes. La conférence sera suivie d’une séance de dédicaces de son livre “Une marcheuse en campagne”.</p>
								<p>
									<a href="https://www.youtube.com/watch?v=3F5DJtsPX8U&" target="_blank">Accéder au replay</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Présentation du programme Fintech</h2>
							</div>
						</div>
						<div class="clearfix">
							
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>30 janvier 8h00 - 9h00 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Vous recherchez plus de sens dans votre travail ? Une carrière à la hauteur de vos ambitions ? Saisissez votre chance de vivre peut-être une success story de la finance. Le programme Fintech ce sont six samedis de formation intensifs qui ont déjà permis à près d’un élève sur deux de changer de carrière en finance.</p>
								<p>
									<a>Terminé</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Atelier Trouvez votre Ikigaï </h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>30 janvier 18h30 - 21h30 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Cet atelier est destiné à toutes les personnes désireuses de faire un bilan et trouver ce qui les fait réellement vibrer. </p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-atelier-trouvez-votre-ikigai-42122525608">Complet</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Miracle Morning avec Cosmopolitan France</h2>
							</div>
						</div>
						<div class="clearfix">
							
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>31 janvier 7h30 - 9h00</h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Trouvez le courage de se lever aux aurores pour faire un peu de sport, méditer, lire... Qui a déjà essayé sans jamais réussir ? C’est le moment de se prouver le contraire avec Cosmopolitan. Au programme : cours de yoga, petit-déjeuner gourmand & healthy et atelier boost confiance en soi. Sur jeu-concours et invitations uniquement.</p>
								<p>
									<a target="_blank" href="https://www.instagram.com/p/Bd2ynhCAnDG/?hl=fr">Terminé</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Se forger un mental six-pack avec Renita Kahlorn</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>6 février 19h00 - 20h00</h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Renita est adepte du flow et coach de haut niveau pour les entrepreneurs. Experte de la gestion du stress et de l’incertitude, elle a accompagné les forces spéciales NAVY SEALS.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-se-forger-un-mental-six-pack-avec-renita-kalhorn-42656541865">Terminé</a>
								</p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Atelier Trouvez votre Ikigaï </h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>13 février 18h30 - 21h30 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Cet atelier est destiné à toutes les personnes désireuses de faire un bilan et trouver ce qui les fait réellement vibrer. </p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-atelier-trouvez-votre-ikigai-42817371912">Terminé</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Voyager vers la découverte de soi avec Marine Barnérias</h2>
							</div>
						</div>
						<div class="clearfix">
							
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>20 février 19h00 - 20h30</h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>★ Conférence inspirante ★<br>On rencontre Marine Barnérias, auteure et entrepreneure pleine d'énergie. Après l'annonce de sa sclérose en plaques, Marine se lance seule dans un voyage au bout du monde en Nouvelle Zélande, Mongolie et Birmanie. Elle nous parlera de ce voyage interdit à la découverte de son corps, son esprit et son âme. L'événement sera suivi d'une séance de dédicaces de son livre "Seper Hero".</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-voyager-vers-la-decouverte-de-soi-avec-marine-barnerias-42654389427">Terminé</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>S'évader avec Laurent Jacqua</h2>
							</div>
						</div>
						<div class="clearfix">
							
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>27 février 19h00 - 20h30</h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>★ Conférence inspirante ★<br>On rencontre Laurent Jacqua, ancien détenu, militant et écrivain français. Il passe 25 années en prison, au cours desquelles il s’évade à plusieurs reprises. C'est depuis la prison qu'il a fait ses premiers pas en écriture en créant un blog clandestin. On parlera ensemble de bonheur, de liberté, du pouvoir des mots et de comment on s’évade non pas au pistolet mais à l’épistolaire.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-sevader-avec-laurent-jacqua-43245251712?utm_term=eventurl_text">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Morning Career #1</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>6 mars 8h00 - 9h30 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Le Morning Career, c'est un petit déjeuner de networking pour rencontrer des <a style="font-family: Raleway-Regular; text-decoration: underline; color:#000;" href="https://www.wake-up.io/boussole">profils Boussole</a> complémentaires au sien.</p>
								<p>
									Pourquoi donc des profils complémentaires au sien ? Parce qu'on progresse toujours plus vite dans la vie en rencontrant des points de vue différents. 👊 Et surtout, ces personnes nous comprennent et voient ce que nous ne voyons pas.
								</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-1-43443511713">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Mettre de l'humour dans sa vie avec Michaël Hirsch</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>13 mars 19h00 - 21h30 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>★ Conférence inspirante ★<br>On rencontre Michaël Hirsch, comédien, auteur et humoriste sur scène. Michaël joue avec les mots comme personne, pratique un humour lettré et se dit lui-même un peu timbré. On parlera de son changement de carrière, du pouvoir des mots, du talent et de l'importance de l'humour dans la vie.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-mettre-de-lhumour-dans-sa-vie-avec-michael-hirsch-43476933679">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Atelier : Organisez votre vie autour de votre talent</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>15 mars 18h30 - 21h30 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Cet atelier est destiné à toutes les personnes désireuses de faire un bilan pour exploiter leur plein potentiel. Il est ouvert à tous les métiers et secteurs d'activité.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-atelier-organisez-votre-vie-autour-de-votre-talent-43274920452">Complet</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Écouter son coeur avec Cyrielle Hariel</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>29 mars 19h00 - 21h30 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>★ Conférence inspirante ★<br>On rencontre Cyrielle Hariel, journaliste, chroniqueuse sur Europe 1, activiste et auteure du livre Faire Battre le coeur du monde. Véritable rayon de soleil, le coeur de Cyrielle chavire alors qu'elle se lance dans une mission humanitaire auprès des Rohingyas, le peuple le plus persécuté au monde. À l'aube de ses 27 ans, on lui diagnostique un souffle au coeur et doit être opérée. Elle décide alors de se consacrer à mettre en lumière les change makers, tous ceux qui oeuvrent pour faire battre le coeur du monde.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-ecouter-son-coeur-avec-cyrielle-hariel-43704380980">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Présentation du programme Fintech</h2>
							</div>
						</div>
						<div class="clearfix">
							
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>4 avril 8h00 - 9h00 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Vous recherchez plus de sens dans votre travail ? Une carrière à la hauteur de vos ambitions ? Saisissez votre chance de vivre peut-être une success story de la finance. Le programme Fintech ce sont six samedis de formation intensifs qui ont déjà permis à près d’un élève sur deux de changer de carrière en finance.</p>
								<p>
									<a href="https://www.eventbrite.fr/e/billets-presentation-du-programme-fintech-44367908609" target="_blank">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>



					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Morning Career #2</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>10 avril 8h00 - 9h30 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Le Morning Career, c'est un petit déjeuner de networking pour rencontrer des <a style="font-family: Raleway-Regular; text-decoration: underline; color:#000;" href="https://www.wake-up.io/boussole">profils Boussole</a> complémentaires au sien.</p>
								<p>
									Pourquoi donc des profils complémentaires au sien ? Parce qu'on progresse toujours plus vite dans la vie en rencontrant des points de vue différents. 👊 Et surtout, ces personnes nous comprennent et voient ce que nous ne voyons pas.
								</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-2-43894401336">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Atelier : Organisez votre vie autour de votre talent</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>5 avril 18h30 - 21h30 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Cet atelier est destiné à toutes les personnes désireuses de faire un bilan pour exploiter leur plein potentiel. Il est ouvert à tous les métiers et secteurs d'activité.<br><br><br><br></p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-atelier-organisez-votre-vie-autour-de-votre-talent-44111346224">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Atelier : Décryptez les métiers avec votre personnalité</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>3 mai 19h00 - 20h30 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Le processus pour trouver le job de ses rêves est long et difficile. Néanmoins, vous pouvez gagner un temps précieux en décryptant les métiers sous l’angle de la personnalité et de la psychologie.
								</p>
								<p>
									L’objectif de cet atelier est de vous donner des clés de lectures pour que vous trouviez petit à petit le métier qui correspondra au mieux à vos talents.
								</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-atelier-organisez-votre-vie-autour-de-votre-talent-44111346224">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Morning Career #3</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>15 mai 8h00 - 9h30 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Le Morning Career, c'est un petit déjeuner de networking pour rencontrer des <a style="font-family: Raleway-Regular; text-decoration: underline; color:#000;" href="https://www.wake-up.io/boussole">profils Boussole</a> complémentaires au sien.</p>
								<p>
									Pourquoi donc des profils complémentaires au sien ? Parce qu'on progresse toujours plus vite dans la vie en rencontrant des points de vue différents. 👊 Et surtout, ces personnes nous comprennent et voient ce que nous ne voyons pas.
								</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-3-45023984951">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Présentation du programme ikigai</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>15 juin 8h - 9h </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Vous sentez que vous n'exploitez pas tout votre potentiel ? Vous voulez écrire une nouvelle page dans votre carrière ? On vous donne rendez-vous autour d'un petit déjeuner convivial pour vous présenter le programme ikigai et répondre à toutes vos questions.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-presentation-du-programme-ikigai-46752099789">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Présentation du programme Fintech</h2>
							</div>
						</div>
						<div class="clearfix">
							
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>27 juin 8h00 - 9h00 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Vous recherchez plus de sens dans votre travail ? Une carrière à la hauteur de vos ambitions ? Saisissez votre chance de vivre peut-être une success story de la finance. Le programme Fintech ce sont six samedis de formation intensifs qui ont déjà permis à près d’un élève sur deux de changer de carrière en finance.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-presentation-du-programme-fintech-46839537317">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2>Présentation du programme ikigai</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3>10 juillet 8h00 - 9h00 </h3>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Vous sentez que vous n'exploitez pas tout votre potentiel ? Vous voulez écrire une nouvelle page dans votre carrière ? On vous donne rendez-vous autour d'un petit déjeuner convivial pour vous présenter le programme ikigai et répondre à toutes vos questions.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-presentation-du-programme-ikigai-47456665163">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Présentation du programme ikigai</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">18</span> <span class="mois-debut">septembre</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2018 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Vous sentez que vous n'exploitez pas tout votre potentiel ? Vous voulez écrire une nouvelle page dans votre carrière ? On vous donne rendez-vous autour d'un petit déjeuner convivial pour vous présenter le programme ikigai et répondre à toutes vos questions.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-presentation-du-programme-ikigai-47914397252">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Présentation du programme Fintech</h2>
							</div>
						</div>
						<div class="clearfix">
							
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">26</span> <span class="mois-debut">septembre</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2018 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-fintech.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Vous recherchez plus de sens dans votre travail ? Une carrière à la hauteur de vos ambitions ? Saisissez votre chance de vivre peut-être une success story de la finance. Le programme Fintech ce sont six samedis de formation intensifs qui ont déjà permis à près d’un élève sur deux de changer de carrière en finance.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-presentation-du-programme-fintech-47918188592">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Présentation du programme ikigai</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">18</span> <span class="mois-debut">octobre</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2018 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Vous sentez que vous n'exploitez pas tout votre potentiel ? Vous voulez écrire une nouvelle page dans votre carrière ? On vous donne rendez-vous autour d'un petit déjeuner convivial pour vous présenter le programme ikigai et répondre à toutes vos questions.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-presentation-du-programme-ikigai-47914397252">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Présentation du programme Fintech</h2>
							</div>
						</div>
						<div class="clearfix">
							
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">19</span> <span class="mois-debut">octobre</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2018 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-fintech.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<p>Vous recherchez plus de sens dans votre travail ? Une carrière à la hauteur de vos ambitions ? Saisissez votre chance de vivre peut-être une success story de la finance. Le programme Fintech ce sont six samedis de formation intensifs qui ont déjà permis à près d’un élève sur deux de changer de carrière en finance.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-presentation-du-programme-fintech-50942763176">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Présentation du programme Ikigai</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">16</span> <span class="mois-debut">novembre</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2018 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Vous sentez que vous n'exploitez pas tout votre potentiel ? Vous voulez écrire une nouvelle page dans votre carrière ? On vous donne rendez-vous autour d'un petit déjeuner convivial pour vous présenter le programme ikigai et répondre à toutes vos questions.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-presentation-du-programme-ikigai-51878667491">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Présentation du programme Ikigai</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">12</span> <span class="mois-debut">décembre</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2018 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Vous sentez que vous n'exploitez pas tout votre potentiel ? Vous voulez écrire une nouvelle page dans votre carrière ? On vous donne rendez-vous autour d'un petit déjeuner convivial pour vous présenter le programme ikigai et répondre à toutes vos questions.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-presentation-du-programme-ikigai-53023504730">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Morning Careers #4</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">23</span> <span class="mois-debut">janvier</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2019 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Rencontrez d'autres personnes bienveillantes en changement de carrière autour d'un petit-déjeuner qui donne la pêche. Et découvrez également les coulisses de notre programme Ikigai.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-4-54520683833">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Coaching collectif</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">24</span> <span class="mois-debut">janvier</span> <span class="heure-debut">19h00</span> - <span class="heure-fin">21h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2019 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Coaching en ligne de 2 heures pour vous aider à faire avancer votre projet de reconversion professionnelle. Ce coaching est réservé à la promotion de janvier du cours audio : Trouvez un métier adapté à votre personnalité.</p>
								<p>
									<a target="_blank" href="https://www.wake-up.io/cours-audio/">Voir le cours</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Morning Careers #5</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">13</span> <span class="mois-debut">février</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2019 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Rencontrez d'autres personnes bienveillantes en changement de carrière autour d'un petit-déjeuner qui donne la pêche. Et découvrez également les coulisses de notre programme Ikigai.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-5-55215179087">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Coaching collectif</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">28</span> <span class="mois-debut">février</span> <span class="heure-debut">19h00</span> - <span class="heure-fin">21h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2019 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Coaching en ligne de 2 heures pour vous aider à faire avancer votre projet de reconversion professionnelle. Ce coaching est réservé à la promotion de janvier du cours audio : Trouvez un métier adapté à votre personnalité.</p>
								<p>
									<a target="_blank" href="https://www.wake-up.io/cours-audio/">Voir le cours</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Morning Careers #6</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">13</span> <span class="mois-debut">mars</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2019 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Rencontrez d'autres personnes bienveillantes en changement de carrière autour d'un petit-déjeuner qui donne la pêche. Et découvrez également les coulisses de notre programme Ikigai.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-6-56354637237">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Morning Careers #7</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">17</span> <span class="mois-debut">avril</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2019 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Rencontrez d'autres personnes bienveillantes en changement de carrière autour d'un petit-déjeuner qui donne la pêche. Et découvrez également les coulisses de notre programme Ikigai.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-7-56354805741">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Morning Careers #8</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">15</span> <span class="mois-debut">mai</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2019 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Rencontrez d'autres personnes bienveillantes en changement de carrière autour d'un petit-déjeuner qui donne la pêche. Et découvrez également les coulisses de notre programme Ikigai.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-8-60583969283">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Morning Careers #9</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">14</span> <span class="mois-debut">juin</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2019 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Rencontrez d'autres personnes bienveillantes en changement de carrière autour d'un petit-déjeuner qui donne la pêche. Et découvrez également les coulisses de notre programme Ikigai.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-9-61922795749">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Morning Careers #10</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">9</span> <span class="mois-debut">juillet</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2019 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Rencontrez d'autres personnes bienveillantes en changement de carrière autour d'un petit-déjeuner qui donne la pêche. Et découvrez également les coulisses de notre programme Ikigai.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-10-61923823824">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair past">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Morning Careers #11</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">1er</span> <span class="mois-debut">août</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2019 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Rencontrez d'autres personnes bienveillantes en changement de carrière autour d'un petit-déjeuner qui donne la pêche. Et découvrez également les coulisses de notre programme Ikigai.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-11-61924024424">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 block block-pair">
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								<h2 class="nom-de-event">Morning Careers #12</h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge">
								<img class="dots-5" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots.svg';?>'>
								<img class="dots-3" src='<?php echo bloginfo('stylesheet_directory').'/images/horizontal-dots-3.svg';?>'>
							</div>
							<div class="content-event">
								<h3><span class="date-debut">27</span> <span class="mois-debut">août</span> <span class="heure-debut">8h00</span> - <span class="heure-fin">9h00</span> </h3>
								<div class="infos-events-cachees"><span class="annee-event">2019 </span><span class="adresse-lieu">41 rue du faubourg Montmartre, 75009 Paris</span><img class="image-event-cachee" alt="image event" src='<?php echo bloginfo('stylesheet_directory').'/images/EVENTS/illustration-prog-ikigai.jpeg';?>'></div>
							</div>
						</div>
						<div class="clearfix">
							<div class="marge"></div>
							<div class="content-event">
								
								<p>Rencontrez d'autres personnes bienveillantes en changement de carrière autour d'un petit-déjeuner qui donne la pêche. Et découvrez également les coulisses de notre programme Ikigai.</p>
								<p>
									<a target="_blank" href="https://www.eventbrite.fr/e/billets-morning-careers-12-61924084604">S'inscrire !</a>
								</p>
							</div>
						</div>
					</div>

					
			</div>
		</section>

		<section class="bottom-zone-events">
			<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/rocket.php') ?>
		</section>

		<section class="instagram">
			<div class="container-fluid">

				<script type="text/javascript" src='<?php echo bloginfo('stylesheet_directory').'/js/instafeed.js';?>'></script>

				<div id="instafeed"></div>
				
				<script type="text/javascript">
					/*
				        var feed = new Instafeed({
				            get: 'tagged',
				            tagName: 'école',
				            limit:'6',
				            sortBy:'most-recent',
				            resolution:'standard_resolution',
				            clientId: '19f7492dde1640eda67a55c2e7d94a66',
				            accessToken: '4693620333.cfe58b8.1522130044b34cb483a4336b1713dbc3'
				        });
				        feed.run();
				</script>
			</div>
			<div>
				<a target="_black" href="https://www.instagram.com/wakeup_io/">
					<h3>Suivez-nous sur Instagram</h3>
				</a>
			</div>
			
		</section>


	</main><!-- .site-main -->
</div><!-- .content-area -->

<script type="text/javascript">
	window.onload = majpositionnement();

	function isOdd(num) { return num % 2;}
	console.log("1 is " + isOdd(1));
	console.log("2 is " + isOdd(2));
	console.log("3 is " + isOdd(3));
	console.log("4 is " + isOdd(4));


	function majpositionnement() {
		var x = document.getElementsByClassName("past");
		var nbofpast = x.length;
		
		var block = document.getElementsByClassName("block");
	    var j;
	    var secondblock = x.length + 1;

	    var w = window.innerWidth
	    || document.documentElement.clientWidth
	    || document.body.clientWidth;
	    
	    if (isOdd(nbofpast)==1) {
	    	for (j = 0; j < block.length; j++) {
	    		    block[j].classList.add("block-impair");
	    		    block[j].classList.remove("block-pair");
	    	}
	    	
	    	if ( w < 768) {      
	    		block[secondblock].setAttribute("style", "margin-top: 0em ;"); 
	    	}
	    	else {
	    		block[secondblock].setAttribute("style", "margin-top: 10em ;");
	    	}
	    }

	    else {
	    	if ( w < 768) {      
	    		block[secondblock].setAttribute("style", "margin-top: 0em ;"); 
	    	}
	    	else {
	    		block[secondblock].setAttribute("style", "margin-top: 10em ;");
	    	}
	    }
	}


</script>

<?php get_footer(); ?>