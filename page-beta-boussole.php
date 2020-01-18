<?php
/**
 * Template Name: WAKE UP
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
		background: url("<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/background1.png';?>");
		background-repeat: no-repeat;
		background-position: center center;
		background-attachment: fixed;
		background-size: cover;
	}

	@media screen and (max-width: 992px) {
		.slide1 {
			background-attachment: scroll;
			background-size: cover;
		}
	}

</style>


<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
					
			<!-- manifeste -->
			<div class="container-fluid overlay" id="manifeste">
				<div class="clearfix head-slide-1">
					<div class="col-sm-6 logo-head">
						<img class="logo-wakeup" alt="logo Boussole by WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/logo-boussole-by-wake-up.png';?>'>
					</div>
				</div>

				<div class="clearfix">
					<div class="col-md-6 col-md-offset-3 content-overlay">
						<h3>Manifeste</h3>
						<p>
						L’incertitude fait plus que jamais partie de notre quotidien. Ce que nous croyions hier stable et éternel est en train de disparaître : grandes entreprises, sécurité de l’emploi, démocraties, glaciers etc.
						</p>
						<p>
						Même la science, dont le commun des mortels accorde une confiance parfois aveugle, n’est pas épargnée. Les fondements de ses théories physiques sont en train de sombrer comme un château de carte. En astrophysique on butte depuis des décennies sur le mystère de la matière noire et de l’énergie noire qui composeraient 95 % de notre univers. Et plus les physiciens avancent, plus ils sont perdus. La physique quantique apporte aussi son grain de sel avec des observations tout à fait étonnantes. On montre par exemple que des particules microscopiques sont capables de communiquer à la vitesse de la lumière, on ne sait comment, à travers les milliers de kilomètres de roche des montagnes du Tibet.
						</p>
						<p>
						Des scientifiques, aux politiques, aux économistes, aux entrepreneurs, aux commerçants, aux ouvriers jusque dans nos propres vies quotidiennes, nous sommes tous dans le même bateau face à l’incertitude de ce monde en mouvement. 
						</p>
						<p>
						Vraisemblablement, nous avons toutes et tous deux options. Soit nous fuyons ce monde en mouvement en nous immergeant dans la réalité virtuelle de nos smartphones, nos réseaux sociaux, nos jobs planqués, l’excès de consommation et l’industrie du divertissement. Soit, nous décidons d’embrasser courageusement l’incertitude, de jouer avec elle, de créer notre propre vie et de la vivre pleinement.
						</p>
						<p>
						Le premier choix semble conduire là où nous en sommes aujourd’hui. La dépression est bientôt à la première place mondiale des maladies invalidante, 60 % des personnes sont désengagées de leur travail et la planète souffre plus que jamais.
						</p>
						<p>
						Chez WAKE UP nous optons pour la seconde voie. Nous sommes trois cofondateurs à avoir choisi de nous créer, à un moment où un autre, une vie sur-mesure. La route est longue, parfois difficile, parfois très joyeuse et toujours incertaine. En revanche, elle nous fait sentir plus vivants que jamais et nous aide à nous rendre toujours plus utile au monde.
						</p>
						<p>
						Tout notre travail chez WAKE UP est donc orienté vers une seule intention : vous apporter tous les moyens possibles pour vous aider à vivre pleinement votre vie pour ne rien regretter. Tous ces moyens sont encore à inventer. Nous ferons probablement des erreurs et il y aura des imperfections. Mais tout comme vous, nous aussi allons avancer sur la création de notre propre vie. Nous serons donc heureux de faire un bout de chemin ensemble.
						</p>

						<a style="margin-top: 3em;" href="javascript:void(0)" id="cancel-2" onclick="
							document.getElementById('cover').style.display='none';
							document.getElementById('cancel').style.display='none';
							document.getElementById('cancel-2').style.display='none';
							document.getElementById('manifeste').style.display='none';
						">
						<button class="btn btnjaune">Retour</button>
						</a>

					</div>
					
				</div>
			<div class="col-sm-6 email-head">
				<a  href="javascript:void(0)" onclick="
				document.getElementById('cover').style.display='none';
				document.getElementById('cancel').style.display='none';
				document.getElementById('cancel-2').style.display='none';
				document.getElementById('manifeste').style.display='none';" id="cancel">&times;</a>
			</div>
		</div>
		<!-- Fin manifeste -->


					<!-- charte_div -->
					<div class="container-fluid overlay" id="charte_div">
						<div class="clearfix head-slide-1">
							<div class="col-sm-6 logo-head">
								<img class="logo-wakeup" alt="logo Boussole by WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/logo-boussole-by-wake-up.png';?>'>
							</div>

						</div>

						<div class="clearfix">
							<div class="col-md-6 col-md-offset-3 content-overlay">
						
						<h3>Charte de confidentialité</h3>
						
						<h4>En quelques mots :</h4>
						<p>
						Comme nous prenons rarement le temps de lire les chartes de confidentialité, on a résumé pour vous l’essentiel.
						</p>
						<p>
						Si vous souhaitez répondre à notre questionnaire, voici comment seront utilisées vos réponses :
						</p>

						<ul>
						<li>pour vous accompagner dans votre orientation professionnelle</li>
						<li>pour réaliser des statistiques afin d’améliorer Boussole</li>
						<li>et si vous avez aimé notre démarche : pour vous proposer de participer à nos ateliers, conférences et programmes de formation</li>
						</ul>

						<p>
						Pas plus, pas moins !
						</p>
						<p>
						Point important sur lequel nous nous engageons fermement : <strong>vos données ne seront ni vendues, ni communiquées à d’autres personnes</strong>. Nous n’aimerions pas que cela nous arrive. Nous prenons donc soin de vos données comme si c’était les nôtres. Cet engagement a fait l’objet d’une déclaration à la CNIL au n°2109506.
						</p>
						<p>
						Par ailleurs, vos données sont stockées en France, plus précisément dans les <a href="https://www.ovh.com/fr/apropos/securite.xml" target="_blank">locaux ultra sécurisés</a> d’OVH. Nous avons aussi pris le soin de sécuriser le site comme vous pouvez le voir avec le “S” dans le HTTPS de la barre d’adresse.
						</p>
						<p>
						Si d’aventure vous ne souhaitez pas faire un bout de chemin avec WAKE UP, vous aurez également la possibilité d’anonymiser vos données. Concrètement, voici ce qu’il se passera dans notre base de données : 
						</p>

						<img class="img-responsive img-anonymiser" alt="Anonimiser données chartes Boussole WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/anonymisation.png';?>'>

						<p>
						Pour ce faire, vous n’aurez qu’à cliquer sur le lien en toute fin de l’e-mail de résultats de Boussole. Cette suppression sera définitive, nous n’aurons donc plus aucune possibilité de vous proposer d’éventuels coachings ou autres recommandations pour votre orientation professionnelle.
						</p>
						<p>
						S’il existe une moindre zone de flou, vous pouvez contacter directement Sébastien Sors, cofondateur de WAKE UP et inventeur de Boussole via l’adresse e-mail boussole@wake-up.io. Il vous répondra avec plaisir dans les meilleurs délais.
						</p>
						<p>
						Si vous avez encore du courage, voici maintenant la charte formulée dans des termes “plus classiques” :
						</p>

						<h4>1. Définition et nature des données à caractère personnel</h4>


						<p>
						Lors de votre utilisation de notre site, nous pouvons être amenés à vous demander de nous communiquer des données à caractère personnel vous concernant.
						</p>
						<p>
						Le terme « données à caractère personnel » désigne toutes les données qui permettent d’identifier un individu, ce qui correspond notamment à votre prénom, courrier électronique, situation professionnelle, ainsi qu’à tout autre renseignement que vous choisirez de nous communiquer à votre sujet.
						</p>

						<h4>2. Objet de la présente charte</h4>

						<p>
						La présente charte a pour objet de vous informer sur les moyens que nous mettons en œuvre pour collecter vos données à caractère personnel, dans le respect le plus strict de vos droits.
						</p>
						<p>
						Nous vous indiquons à ce sujet que nous nous conformons, dans la collecte et la gestion de vos données à caractère personnel, à la loi n° 78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, dans sa version actuelle.
						</p>

						<h4> 3. Identité du responsable de la collecte de données</h4>


						<p>
						Le responsable de la collecte de vos données à caractère personnel est la société WAKE UP, SAS, immatriculée au Registre du Commerce et des Sociétés de Paris sous le n°824 546 063, ayant son siège social au 9-11 rue Anatole de la Forge, 75017 Paris.
						</p>

						<h4>4. Collecte des données à caractère personnel</h4>

						<p>
						Vos données à caractère personnel sont collectées pour répondre à une ou plusieurs des finalités suivantes :
						</p>

						<ul>
						<li>Accompagner dans l’orientation de carrière</li>
						<li>Constituer un fichier de membres inscrits pour notre communauté en ligne, de prospects et de clients</li>
						<li>Adresser des newsletters, sollicitations et messages promotionnels. Dans le cas où vous ne le souhaiteriez pas, nous vous donnons la faculté d’exprimer votre refus à ce sujet lors de la collecte de vos données</li>
						<li>Élaborer des statistiques commerciales et de fréquentation de nos services</li>
						<li>Gérer la gestion des avis des personnes sur des produits, services ou contenus</li>
						<li>Effectuer les opérations relatives à la gestion des clients concernant les contrats, commandes, livraisons, factures, programmes de fidélité, suivis de la relation avec les clients </li>
						<li>Respecter nos obligations légales et réglementaires</li>
						</ul>


						<p>
						Nous vous informons, lors de la collecte de vos données personnelles, si certaines données doivent être obligatoirement renseignées ou si elles sont facultatives. Nous vous indiquons également quelles sont les conséquences éventuelles d’un défaut de réponse.
						</p>

						<h4>5. Destinataires des données collectées</h4>

						<p>
						Le personnel de notre société, les services chargés du contrôle (commissaire aux comptes notamment) et notre sous-traitant informatique auront accès à vos données à caractère personnel.
						</p>
						<p>
						Peuvent également être destinataires de vos données à caractère personnel les organismes publics, exclusivement pour répondre à nos obligations légales, les auxiliaires de justice, les officiers ministériels et les organismes chargés d’effectuer le recouvrement de créances.
						</p>
						<h4>6. Cession des données à caractère personnel</h4>

						<p>
						Vos données à caractère personnel ne feront pas l’objet de cessions, locations ou échanges au bénéfice de tiers.
						</p>

						<h4>7. Durée de conservation des données à caractère personnel</h4>

						<p><strong>► Concernant les données relatives à la gestion de clients et prospects :</strong>
						</p>
						<p>
						Vos données à caractère personnel ne seront pas conservées au-delà de la durée strictement nécessaire à la gestion de notre relation commerciale avec vous. Toutefois, les données permettant d’établir la preuve d’un droit ou d’un contrat, devant être conservées au titre du respect d’une obligation légale, le seront pendant la durée prévue par la loi en vigueur.
						</p>
						<p>
						Concernant d’éventuelles opérations de prospection à destination des clients, leurs données pourront être conservées pendant un délai de trois ans à compter de la fin de la relation commerciale. 
						</p>
						<p>
						Les données à caractère personnel relatives à un prospect, non client, pourront être conservées pendant un délai de trois ans à compter de leur collecte ou du dernier contact émanant du prospect.
						</p>
						<p>
						Au terme de ce délai de trois ans, nous pourrons reprendre contact avec vous pour savoir si vous souhaitez continuer à recevoir des sollicitations commerciales.
						</p>
						<p>
						<strong>► Concernant les statistiques de mesure d’audience :</strong>
						</p>
						<p>
						Les informations stockées dans le terminal des utilisateurs ou tout autre élément utilisé pour identifier les utilisateurs et permettant leur traçabilité ou fréquentation ne seront pas conservées au-delà de 6 mois. 

						</p>
						<p>
						<strong>► Concernant les données relatives à l’animation de la communauté :</strong>
						</p>
						<p>
						Vos données à caractère personnel ayant une utilité dans l’animation de la communauté seront conservées pendant toute la durée de votre implication dans la communauté.

						</p>
						<p>

						<h4>8. Sécurité</h4>

						<p>
						Nous vous informons prendre toutes précautions utiles, mesures organisationnelles et techniques appropriées pour préserver la sécurité, l’intégrité et la confidentialité de vos données à caractère personnel et notamment, empêcher qu’elles soient déformées, endommagées ou que des tiers non autorisés y aient accès.
						</p>

						<h4>9. Cookies</h4>

						<p>
						Les cookies sont des fichiers textes, souvent cryptés, stockés dans votre navigateur. Ils sont créés lorsque le navigateur d’un utilisateur charge un site internet donné : le site envoie des informations au navigateur, qui créé alors un fichier texte. Chaque fois que l’utilisateur revient sur le même site, le navigateur récupère ce fichier et l’envoie au serveur du site internet.
						</p>
						<p>
						On peut distinguer deux types de cookies, qui n’ont pas les mêmes finalités : les cookies techniques et les cookies publicitaires :
						</p>

						<ul>
						<li>
						Les cookies techniques sont utilisés tout au long de votre navigation, afin de la faciliter et d’exécuter certaines fonctions. Un cookie technique peut par exemple être utilisé pour mémoriser les réponses renseignées dans un formulaire ou encore les préférences de l’utilisateur s’agissant de la langue ou de la présentation d’un site internet, lorsque de telles options sont disponibles.</li>
						<li>
						Les cookies publicitaires peuvent être créés non seulement par le site internet sur lequel l’utilisateur navigue, mais également par d’autres sites internet diffusant des publicités, annonces, widgets ou autres éléments sur la page affichée. Ces cookies peuvent notamment être utilisés pour effectuer de la publicité ciblée, c’est-à-dire de la publicité déterminée en fonction de la navigation de l’utilisateur.</li>
						</ul>

						<p>
						Nous utilisons des cookies techniques. Ceux-ci sont stockés dans votre navigateur pour une période qui ne peut excéder six mois.
						</p>
						<p>
						Nous n’utilisons pas de cookies publicitaires. Toutefois, si nous devions en utiliser à l’avenir, nous vous en informerions au préalable et vous auriez la possibilité le cas échéant de désactiver ces cookies.
						</p>
						<p>
						Nous utilisons ou pouvons utiliser Google Analytics qui est un outil statistique d’analyse d’audience qui génère un cookie permettant de mesurer le nombre de visites sur le site, le nombre de pages vues et l’activité des visiteurs. Votre adresse IP est également collectée pour déterminer la ville depuis laquelle vous vous connectez. La durée de conservation de ce cookie est mentionnée à l’article 7 (v) de la présente charte.
						</p>
						<p>
						Nous vous rappelons à toutes fins utiles qu’il vous est possible de vous opposer au dépôt de cookies en configurant votre navigateur. Un tel refus pourrait toutefois empêcher le bon fonctionnement du site.
						</p>

						<h4>10. Consentement</h4>

						<p>
						Lorsque vous choisissez de communiquer vos données à caractère personnel, vous donnez expressément votre consentement pour la collecte et l’utilisation de celles-ci conformément à ce qui est énoncé à la présente charte et à la législation en vigueur.
						</p>

						<h4>11. Accès à vos données à caractère personnel</h4>

						<p>
						Conformément à la loi n° 78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, vous disposez du droit d’obtenir la communication et, le cas échéant, la rectification ou la suppression des données vous concernant, à travers un accès en ligne à votre dossier. Vous pouvez également vous adresser à :
						</p>

						<ul>
						<li>
						adresse de courrier électronique : boussole@wake-up.io</li>
						<li>adresse de courrier postal : WAKE UP, 9-11 rue Anatole de la Forge, 75017 Paris</li>
						</ul>

						<p>

						Il est rappelé que toute personne peut, pour des motifs légitimes, s'opposer au traitement des données la concernant.

						</p>

						<h4>12. Modifications</h4>

						<p>
						Nous nous réservons le droit, à notre seule discrétion, de modifier à tout moment la présente charte, en totalité ou en partie. Ces modifications entreront en vigueur à compter de la publication de la nouvelle charte.
						</p>
						<p>
							Nous vous tiendrons informé de ces modifications le cas échéant.
						</p>
						<p>
						Votre utilisation du site suite à l’entrée en vigueur de ces modifications vaudra reconnaissance et acceptation de la nouvelle charte. A défaut et si cette nouvelle charte ne vous convient pas, vous ne devrez plus accéder au site.
						</p>

						<h4>13. Entrée en vigueur</h4>

						<p>
						La présente charte est entrée en vigueur le 16 octobre 2017.
						</p>

						<a style="margin-top: 3em;" href="javascript:void(0)" id="cancel-2" onclick="
							document.getElementById('cover').style.display='none';
							document.getElementById('cancel').style.display='none';
							document.getElementById('cancel-2').style.display='none';
							document.getElementById('charte_div').style.display='none';
						">
						<button class="btn btnjaune">Retour</button>
						</a>

							</div>
						</div>
						<div class="col-sm-6 email-head">
							<a  href="javascript:void(0)" onclick="
							document.getElementById('cover').style.display='none';
							document.getElementById('cancel').style.display='none';
							document.getElementById('cancel-2').style.display='none';
							document.getElementById('charte_div').style.display='none';" id="cancel">&times;</a>
						</div>
					</div>
					<!-- Fin charte_div -->

	<div id="cover"></div>


	<!-- **** SLIDE 1 *** -->
	<!--******************-->
	<!--******************-->


	<section class="slide slide1 vertical-center">
	
		<div class="container-fluid">
			<div class="clearfix head-slide-1">
				<div class="col-sm-6 logo-head">
					<img class="logo-wakeup" alt="logo Boussole by WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/logo-boussole-by-wake-up.png';?>'>
				</div>

				<div class="col-sm-6 email-head">
					<p style="color:white;margin-top:80px; text-align:right;">Restez en contact : <span style="color:#ff0066;">boussole@wakeup.io</span>
					</p>
				</div>
			</div>

			<div class"clearfix">
				<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-xl-4 col-xl-offset-4 slide1-lineup">
							
					<h1>Trouvez et créez la carrière  qui est faite pour vous</h1>
					<h2>Boussole est un test de personnalité spécialement conçu pour vous aider à trouver ce que 94% de l'humanité ne sait pas aussi bien faire que vous.</h2>
					<div class="bouton-slide-1">
						<a href="https://boussole.wake-up.io/">
							<button class="btn btnjaune">démarrez le test</button>
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
							<p class="desc_info">Boussole est un test basé sur les recherches en neurosciences ainsi que sur la mécanique de l'esprit décrite dans les travaux du célèbre psychologue Carl Gustav Jung. A travers ses questions, il analyse ainsi les dimensions conscientes et inconscientes de notre psychologie.</p>
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
								
								<p>L’approche neurophilosophique permet de révéler votre aptitude innée, celle que 94 % de la population n’a pas. Elle est le noyau à partir duquel vous devriez construire votre carrière et vous former aux métiers de demain. Boussole est un questionnaire de 80 questions qui se passe en 8 minutes.</p>
								<p>Les réponses sont traitées par un algorithme qui vous envoie directement et gratuitement les résultats dans votre boite e-mail. Vous y trouverez votre talent d’or, vos trois qualités ainsi que le positionnement clé que vous avez en entreprise.
								</p>
							</div>
						</div>

						<div class="hidden-xs hidden-sm"> 
						<p>L’approche neurophilosophique permet de révéler votre aptitude innée, celle que 94 % de la population n’a pas. Elle est le noyau à partir duquel vous devriez construire votre carrière et vous former aux métiers de demain. Boussole est un questionnaire de 80 questions qui se passe en 8 minutes.</p>
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
								<p>Le test Boussole est gratuit car son objectif est de rassembler une communauté forte de personnes qui osent créer la vie de leurs rêves. C’est en rassemblant des personnalités ambitieuses, persévérantes et surtout bienveillantes qu’il est possible de créer un mouvement positif qui bénéficie à chacun. <a href="javascript:void(0)" onclick="window.top.window.scrollTo(0,0);
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
								<p>Le test Boussole est gratuit car son objectif est de rassembler une communauté forte de personnes qui osent créer la vie de leurs rêves. C’est en rassemblant des personnalités ambitieuses, persévérantes et surtout bienveillantes qu’il est possible de créer un mouvement positif qui bénéficie à chacun. <a href="javascript:void(0)" onclick="window.top.window.scrollTo(0,0);
									document.getElementById('cover').style.display='block';
									document.getElementById('manifeste').style.display='block';
									document.getElementById('cancel').style.display='block'" class="button">Lire notre manifeste.</a>.</p>
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
								
								<p class="txt-slide4">Vous êtes maître de votre destin, restez maître de vos données. Vous pouvez supprimer à tout moment et en un seul clic vos informations personnelles sur le test. Vos réponses seront alors totalement et définitivement anonymisées. <a href="javascript:void(0)" onclick="window.top.window.scrollTo(0,0);
								document.getElementById('cover').style.display='block';
								document.getElementById('charte_div').style.display='block';
								document.getElementById('cancel').style.display='block';
								document.getElementById('cancel-2').style.display='block';" class="button">Lire notre charte de confidentialité.</a>
								</p>
							</div>
						</div>

						<div class="hidden-xs hidden-sm"> 
						<p class="txt-slide4">Vous êtes maître de votre destin, restez maître de vos données. Vous pouvez supprimer à tout moment et en un seul clic vos informations personnelles sur le test. Vos réponses seront alors totalement et définitivement anonymisées. <a href="javascript:void(0)" onclick="window.top.window.scrollTo(0,0);
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


				<h3>Le questionnaire prend 8 minutes, pas plus ! Vous recevez gratuitement par e-mail votre talent d'or, vos trois qualités ainsi que là où vous apportez le plus de valeur en entreprise.</h3>
				
				<a href="https://boussole.wake-up.io/">
					<button class="btn btnjaune">démarrez le test</button>
				</a>
			</div>	
		</div>

		<div class="clearfix content-5 " id="newsletter-boussole">

				

				<div class="col-sm-4 col-sm-push-8 img-newsletter">
					<img alt="Newsletter Fintech Boussole WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/packshot.png';?>'>
				</div>

				<div class="col-sm-8 col-sm-pull-4 slide5-form" id="mc_embed_signup">

						<h2 style="color: white;">Vous vous intéressez à l'innovation financière ?<br />Recevez les offres d'emploi en Fintech décryptées avec Boussole.</h2>
						
						<form action="//wake-up.us14.list-manage.com/subscribe/post?u=4714d965ed464bcbe3f4e6e54&amp;id=8209afd58c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

								<div class="form-group" id="mc_embed_signup_scroll">


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
		
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container-fluid">
				<div class="clearfix">

					<div class="col-sm-4 inspire-wakeup">
						<ul class="social-media">
						    <li>
						    	<p>Inspiré par :</p>
						    </li>
						    <li>
						    	<a href="http://www.wake-up.io" target="_blank" class="icon-10 mail" title="social-wake-up">
						    		<img style="text-align:right;" alt="logo WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE/wu_logo.png';?>'>
						    	</a>
						    </li>
						</ul>
					</div>

					<div class="col-sm-4 col-sm-offset-4 logo-networks">
				    	<ul class="social-media">
				    		<li>
				    			<a href="mailto:bonjour@wake-up.io" target="_blank" class="icon-10 mail" title="mail">
				    				<svg viewBox="0 0 485.211 485.211">
				    					<path fill="#8d98a1" d="M485.211,363.906c0,10.637-2.992,20.498-7.785,29.174L324.225,221.67l151.54-132.584   c5.895,9.355,9.446,20.344,9.446,32.219V363.906z M242.606,252.793l210.863-184.5c-8.653-4.737-18.397-7.642-28.908-7.642H60.651   c-10.524,0-20.271,2.905-28.889,7.642L242.606,252.793z M301.393,241.631l-48.809,42.734c-2.855,2.487-6.41,3.729-9.978,3.729   c-3.57,0-7.125-1.242-9.98-3.729l-48.82-42.736L28.667,415.23c9.299,5.834,20.197,9.329,31.983,9.329h363.911   c11.784,0,22.687-3.495,31.983-9.329L301.393,241.631z M9.448,89.085C3.554,98.44,0,109.429,0,121.305v242.602   c0,10.637,2.978,20.498,7.789,29.174l153.183-171.44L9.448,89.085z"/>
				    				</svg>
				    			</a>
				    		</li>
				    		<li>
				    			<a href="https://www.facebook.com/joinwakeup" target="_blank" class="icon-10 facebook" title="Facebook">
				    				<svg viewBox="0 0 512 512">
				    					<path fill="#8d98a1" d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"/>
				    				</svg><!--[if lt IE 9]><em>Facebook</em><![endif]-->
				    			</a>
				    		</li>
				    		<li>
				    			<a class="twitter" href="https://twitter.com/wakeup_io" target="_blank" title="Follow mypandora">
				    				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-285.9 385.7 26.5 22" style="enable-background:new -285.9 385.7 26.5 22;" xml:space="preserve">
				    				<path fill="#8d98a1" d="M-269.3,386c-2.4,0.9-3.9,3.1-3.7,5.6l0.1,0.9l-1-0.1c-3.5-0.4-6.5-2-9.1-4.5l-1.3-1.3l-0.3,0.9c-0.7,2.1-0.2,4.3,1.2,5.7 c0.8,0.8,0.6,0.9-0.7,0.4c-0.5-0.2-0.9-0.3-0.9-0.2c-0.1,0.1,0.3,1.9,0.7,2.6c0.5,1,1.5,1.9,2.6,2.5l0.9,0.4l-1.1,0 c-1.1,0-1.1,0-1,0.4c0.4,1.3,1.9,2.6,3.6,3.2l1.2,0.4l-1,0.6c-1.5,0.9-3.3,1.4-5.1,1.4c-0.9,0-1.6,0.1-1.6,0.2 c0,0.2,2.3,1.3,3.7,1.7c4.1,1.3,8.9,0.7,12.6-1.4c2.6-1.5,5.2-4.6,6.4-7.5c0.7-1.6,1.3-4.4,1.3-5.8c0-0.9,0.1-1,1.1-2.1 c0.6-0.6,1.2-1.3,1.3-1.5c0.2-0.4,0.2-0.4-0.8,0c-1.6,0.6-1.9,0.5-1.1-0.4c0.6-0.6,1.3-1.7,1.3-2.1c0-0.1-0.3,0-0.6,0.2 c-0.3,0.2-1.1,0.5-1.7,0.7l-1,0.3l-0.9-0.6c-0.5-0.3-1.2-0.7-1.6-0.9C-266.9,385.6-268.4,385.7-269.3,386z"/>
				    				</svg>
				    			</a>
				    		</li>
				    		<li>
				    			<a class="linkedin" href="https://www.linkedin.com/company/wake-up---l%27école-de-la-fintech" target="_blank">
				    				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-281.3 388.1 16.6 15.9" style="enable-background:new -281.3 388.1 16.6 15.9;" xml:space="preserve">
				    				<path fill="#8d98a1" d="M-264.7,403.9v-6.1c0-3.3-1.8-4.8-4.1-4.8c-1.9,0-2.7,1-3.2,1.8v-1.5h-3.6c0,1,0,10.7,0,10.7h3.6v-6 c0-0.3,0-0.6,0.1-0.9c0.3-0.6,0.8-1.3,1.8-1.3c1.3,0,1.8,1,1.8,2.4v5.7L-264.7,403.9L-264.7,403.9z M-279.3,391.8c1.2,0,2-0.8,2-1.9 c0-1-0.8-1.8-2-1.8c-1.2,0-2,0.8-2,1.8C-281.3,390.9-280.5,391.8-279.3,391.8L-279.3,391.8L-279.3,391.8z M-277.5,403.9v-10.7h-3.6 v10.7H-277.5z"/>
				    				</svg>
				    			</a>
				    		</li>

				    	</ul>
					</div>
				</div>
			</div>
		</footer><!-- .site-footer -->

<script src="http://code.jquery.com/jquery-latest.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>

<!-- MAILCHIMP -->
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--  FIN MAILCHIMP -->

</body>
</html>
