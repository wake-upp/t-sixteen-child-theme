<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.3
 */

get_header(); ?>

<!---- GOOGLE STRUCTURED DATA ---->
<!-------------------------------->

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://www.wake-up.io",
  "logo": "https://www.wake-up.io/wp-content/themes/t-sixteen-child-theme/images/HOMEPAGE/logo-wake-up-square.jpg",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "41 rue du Faubourg Montmartre",
    "addressLocality": "Paris",
    "addressRegion": "Île-de-France",
    "postalCode": "75009",
    "addressCountry": "FR"
  },
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+33 1 76 35 02 24",
    "contactType": "customer service"
  }],
  "image": [
    "https://www.wake-up.io/wp-content/themes/t-sixteen-child-theme/images/PHOTOS/Espace-bas.jpg",
    "https://www.wake-up.io/wp-content/themes/t-sixteen-child-theme/images/PHOTOS/Bas-conf.jpg",
    "https://www.wake-up.io/wp-content/themes/t-sixteen-child-theme/images/PHOTOS/Haut.jpg"
  ]
}
</script>

<!---- GOOGLE STRUCTURED DATA ---->
<!-------------------------------->

<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-homepage.css?v05" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-3-right-offset.css" rel="stylesheet">

<style type="text/css">


	.slide-A {
		background-image: linear-gradient( rgba(0,0,0,0), rgba(0,0,0,1)) , url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/bg-homepage.jpg';?>');
		background-repeat: no-repeat;
		background-position: top center;
		background-color: transparent;
		background-size: cover;

	}
	.container-prog {
		background-repeat: no-repeat;
		background-position: top center;
		background-color: transparent;
		background-size: cover;
	}
	.prog-ikigai {
		background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/programmes/ikigai-program-bg.jpg';?>');
	}
	.prog-audio {
		background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/programmes/audio-program-bg.jpg';?>');
	}
	.prog-fintech {
		background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/programmes/fintech-program-bg.jpg';?>');
	}
	.prog-agri {
		background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/programmes/agri-program-bg.jpg';?>');
	}
	.prog-energie {
		background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/programmes/energie-program-bg.jpg';?>');
	}

	.slide-D {
		background: url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/bg-D.png';?>');
		
		background-size: cover;
		background-repeat: no-repeat;
	}

	#mainHeaderWrapper{
	    position:relative;
	    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/losange.png';?>') 50% / 100%;
	    background-size: 1399px 988px;
	    margin-top: -7.5em;
	    margin-bottom: -7.5em;
	    z-index: 6;
	}

	@media screen and (max-width: 600px) {
		#mainHeaderWrapper{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/losange.png';?>') 50% / 100%;
		    background-size: 1399px 1144px;
		    margin-top: -6.5em;
		    margin-bottom: -6.5em;
		    z-index: 6;
		}
	}

	@media screen and (max-width: 374px) {
		#mainHeaderWrapper{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/losange-sm.png';?>') 50% / 100%;
		    background-size: 1399px 1277px;
		    margin-top: -6.5em;
		    margin-bottom: -6.5em;
		    z-index: 6;
		}
	}

	@media screen and (min-width: 1399px) {
		#mainHeaderWrapper{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/losange.png';?>') 50% / 100%;
		    background-size: 1585px 1119px;
		    margin-top: -8.3em;
		    margin-bottom: -8.5em;
		    z-index: 6;
		}
	}

	@media screen and (min-width: 1585px) {
		#mainHeaderWrapper{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/losange.png';?>') 50% / 100%;
		    background-size: 1750px 1236px;
		    margin-top: -9.4em;
		    margin-bottom: -9.4em;
		    z-index: 6;
		}
	}
	@media screen and (min-width: 1750px) {
		#mainHeaderWrapper{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/losange.png';?>') 50% / 100%;
		    background-size: 1920px 1356px;
		    margin-top: -10em;
		    margin-bottom: -10.2em;
		    z-index: 6;
		}
	}
	@media screen and (min-width: 1921px) {
		#mainHeaderWrapper{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/losange-HD.png';?>') 50% / 100%;
		    background-size: 2200px 1360px;
		    margin-top: -11.3em;
		    margin-bottom: -11.7em;
		    z-index: 6;
		}
	}

	.slide-E {
		background: url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/bg-E.png';?>');
		background-repeat: no-repeat;
		background-position: center top;
		background-color: transparent;
		background-size: cover;
	}

	.container-wu-conv {
		background: url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/inspiration/bg-wu-conversations.jpg';?>');
		background-repeat: no-repeat;
		background-position: center top;
		background-size: cover;
	}
	.container-wu-bc {
		background: url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/inspiration/bg-wu-bookclub.jpg';?>');
		background-repeat: no-repeat;
		background-position: center top;
		background-size: cover;
	}

	<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/style-backtotop.php') ?>


</style>


<div id="primary" class="content-area homepage">
	<main id="main" class="site-main" role="main">

			
		<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/manifeste.php') ?>
		<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fondateurs.php') ?>

		<div id="cover"></div>

		<section id="slide-A" class="slide-A">

				<div class="container-fluid">
					<div class="clearfix">

						<a href="<?php echo site_url(); ?>">
						    <img class="logo-wakeup" alt="logo-wake up"
						         src='<?php echo bloginfo('stylesheet_directory') . '/images/HOMEPAGE/logo-wake-up.png'; ?>'>
						</a>

						<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/menu-nav.php') ?>

						<div class="titre-cache">
							<h1>WAKE UP École de développement personnel</h1>
						</div>

						<div class="titre-homepage titre-lg">
							
							<h2>Trouvez et créez la carrière</h2>
							<h2>qui est faite pour vous</h2>
						</div>

						<div class="titre-homepage titre-sm">
							<h2>Trouvez et créez</h2><br>
							<h2>la carrière qui est</h2><br>
							<h2 style="border-bottom: 1px solid #ffffff;padding-bottom: 10px;">faite pour vous</h2>
						</div>

						<div class="cartouche">
							<img alt="scroll icon"
							     src='<?php echo bloginfo('stylesheet_directory') . '/images/HOMEPAGE/scroll-icon.png'; ?>'>
							<h3>Programmes</h3>
							<p>
								Que vous ayez 5, 10 ou plus de 15 années d’expérience professionnelle, l'école WAKE UP vous accompagne dans toutes les étapes de votre évolution de carrière.
							</p>
						</div>

					</div>

				</div>

		</section>


		<!--***** INTRO (A) *****-->
		<!--*********************-->
		<!--*********************-->
		<!--**** PROGRAMMES *****-->

		<section class="programmes-ecole">
			<div class="container-fluid">
				<div class="clearfix enveloppe-programmes">
					<div class="container-prog prog-ikigai">
						<div class="title-prog neg">
							<h4 style="font-size: 1.4em;">Trouvez votre<br> <span style="font-size: 2.55em;">Ikigai</span></h4>
						</div>
						<div class="cta-info-prog">
							Trouvez votre voie
						</div>
						<div class="infos-prog">
							<div class="inside-infos-prog ">
								<h4>Faites un bilan de carrière et trouvez votre raison d'être.</h4>
								<ul>
									<li>1 mois</li>
									<li>10 élèves</li>
									<li>990 €</li>
								</ul>
							</div>
							<div class="btns-info-prog">
								<a class="btn-info-decouvrir" href="<?php echo site_url();?>/ikigai">Découvrir</a>
								<a class="btn-info-sinscrire" href="<?php echo site_url();?>/inscription-ikigai">S'inscrire</a>
							</div>
						</div>			
					</div>
					<div class="container-prog prog-audio">
						<div class="title-prog pos">
							<h4 style="font-size: 2.2em;">Métiers &<br> <span style="font-size: 0.8em;">Psychologie</span></h4>
						</div>
						<div style="padding-left: 65px;" class="cta-info-prog info-prog-audio">
							Cours audio
							<img class="casque-info-prog" alt="casque audio" src="<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/programmes/headphones.png';?>">
						</div>
						<div class="infos-prog">
							<div class="inside-infos-prog">
								<h4>Un coach de poche pour vous aider à trouver un métier épanouissant.</h4>
								<ul>
									<li>8 épisodes</li>
									<li>Liste de métiers personnalisée</li>
									<li>79 €</li>
								</ul>
							</div>
							<div class="btns-info-prog">
								<a class="btn-info-decouvrir" href="<?php echo site_url();?>/cours-audio">Découvrir</a>
								<a class="btn-info-sinscrire" href="<?php echo site_url();?>/cours-audio">S'inscrire</a>
							</div>
						</div>
					</div>

					<div class="container-prog prog-fintech">
						<div class="title-prog neg">
							<h4 style="font-size: 2.2em;">Fintech</h4>
						</div>
						<div class="cta-info-prog">
							Donnez du sens à la finance
						</div>
						<div class="infos-prog" style="margin-top:2%">
							<div class="inside-infos-prog">
								<h4>Découvrez où et comment créer une finance plus humaine et durable.</h4>
								<ul>
									<li>5 semaines</li>
									<li>25 élèves</li>
									<li>2790 €</li>
								</ul>
							</div>
							<div class="btns-info-prog">
								<a class="btn-info-decouvrir" href="<?php echo site_url();?>/fintech">Découvrir</a>
								<a class="btn-info-sinscrire" href="<?php echo site_url();?>/fintech">S'inscrire</a>
							</div>
						</div>
					</div>
					<div class="container-prog prog-agri">
						<div class="title-prog pos">
							<h4 style="font-size: 2.2em;">Nourrir<br> <span style="font-size: 0.75em;">l'humanité</span></h4>
						</div>
						<div class="cta-info-prog">
							Prochainement
						</div>
						<div class="infos-prog" style="margin-top:-20%">
							<div class="inside-infos-prog">
								<h4>En 2050, nous serons 10 milliards sur Terre. Contribuez au développement d'une alimentation saine et durable.</h4>
								<h4 style="margin-top:1em; font-family: 'Raleway-Regular'">Restez informé•e de la sortie du programme :</h4>
								<div id="mc_embed_signup">
								    <form action="https://wake-up.us14.list-manage.com/subscribe/post?u=4714d965ed464bcbe3f4e6e54&amp;id=f6af6bd674" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								        <div id="mc_embed_signup_scroll">

								            <div class="mc-field-group">
								    	       <input placeholder="E-mail" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
								            </div>
								            <div class="mc-field-group">
								            	<input placeholder="Prénom" type="text" value="" name="FNAME" class="" id="mce-FNAME">
								            </div>

								    	<div id="mce-responses" class="clear">
								    		<div class="response" id="mce-error-response" style="display:none"></div>
								    		<div class="response" id="mce-success-response" style="display:none"></div>
								    	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								        
								        <div style="position: absolute; left: -5000px;" aria-hidden="true">
								            <input type="text" name="b_4714d965ed464bcbe3f4e6e54_f6af6bd674" tabindex="-1" value="">
								        </div>
								        <div class="clear">
								            <input type="submit" value="Envoyer" name="subscribe" id="mc-embedded-subscribe" class="button btn-info-sinscrire"></div>
								        </div>
								    </form>
								</div>
							</div>
						</div>
					</div>
					<div class="container-prog prog-energie">

						<div class="title-prog pos">
							<h4 style="font-size: 2.2em;">Repenser<br> <span style="font-size: 1em;">l'énergie</span></h4>
						</div>
						<div class="cta-info-prog">
							Prochainement
						</div>
						<div class="infos-prog" style="margin-top:-20%">
							<div class="inside-infos-prog">
								<h4>Avez-vous pensé à l'après pétrole ? Participez à la réinvention de notre façon de consommer et produire notre énergie.</h4>
								<h4 style="margin-top:1em; font-family: 'Raleway-Regular'">Restez informé•e de la sortie du programme :</h4>
								<div id="mc_embed_signup">
								    <form action="https://wake-up.us14.list-manage.com/subscribe/post?u=4714d965ed464bcbe3f4e6e54&amp;id=bbcf8633ff" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								        <div id="mc_embed_signup_scroll">

								            <div class="mc-field-group">
								    	       <input placeholder="E-mail" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
								            </div>
								            <div class="mc-field-group">
								            	<input placeholder="Prénom" type="text" value="" name="FNAME" class="" id="mce-FNAME">
								            </div>

								    	<div id="mce-responses" class="clear">
								    		<div class="response" id="mce-error-response" style="display:none"></div>
								    		<div class="response" id="mce-success-response" style="display:none"></div>
								    	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								        
								        <div style="position: absolute; left: -5000px;" aria-hidden="true">
								            <input type="text" name="b_4714d965ed464bcbe3f4e6e54_bbcf8633ff" tabindex="-1" value="">
								        </div>
								        <div class="clear">
								            <input type="submit" value="Envoyer" name="subscribe" id="mc-embedded-subscribe" class="button btn-info-sinscrire"></div>
								        </div>
								    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>



		<!--**** PROGRAMMES *****-->
		<!--*********************-->
		<!--*********************-->
		<!--**** BOUSSOLE(E) ****-->

		<section id="slide-E" class="slide-E">
			<div class="container-fluid">
			    <div class="clearfix">
			    	<div class="col-md-6 col-lg-5">
			    		<div class="clearfix">
			    			<div class="col-lg-9 col-lg-offset-3 texte-boussole">
			    			
					    				<h2>Découvrez vos talents et votre force en entreprise</h2>
					    				<p>Boussole est un puissant test de personnalité GRATUIT pour vous aider à trouver ce que vous savez faire mieux que tout le monde.</p>

					    				<div class="btn-cta-boussole">
					    					<a class="btn-decouv-boussole" href="<?php echo site_url();?>/boussole">En savoir plus</a>
					    					<a class="btn-passer-boussole" target="_blank" href="https://boussole.wake-up.io/">Passer le test</a>
					    				</div>
					    		</div>
			    			</div>
			    		</div>
			    	</div>
			    	<div class="img-ipad col-md-6 col-lg-7">
			    		<img class="" src="<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/ipad.png';?>">
			    	</div>
			    </div>

			</div>
		</section>

		<!--**** BOUSSOLE(E) ****-->
		<!--*********************-->
		<!--*********************-->
		<!--*** MANIFESTE (D) ***-->

		<div id="slide-D" class="slide-D container-fluid">
			<div id="mainHeaderWrapper">

				<img src="<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/losange.png';?>">

				<div class="texte-slide-D clearfix">

					<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-xl-6 col-xl-offset-3 texte-manifeste">
					    <h2>Le camp des optimistes</h2>

					    <p>La vie est pleine d’incertitudes. Elle est faite de hauts et de bas, de coups durs et de joies immenses. Mais nous gardons toujours la maîtrise d’une chose : celle de notre attitude par rapport à la vie.</p>

					    <p>Chez WAKE UP nous ne croyons pas que la vie agit contre nous, mais qu’elle agit pour nous. Nous croyons en l’avenir, dans le potentiel de chacun et que la chance sourit à celles et ceux qui sourient à la vie.</p>
					  
					    <p>Au quotidien, nous faisons donc le plein d’inspiration, de courage, d’enthousiasme et d’énergie pour devenir des entrepreneurs de nos propres vies.</p>

				    </div>
				    
				</div>
				    <p class="cta-manifeste">
				    	<a href="javascript:void(0)" 
onclick="
	window.top.window.scrollTo(0,0); 
	document.getElementById('cover').style.display='block'; 
	document.getElementById('manifeste').style.display='block'; 
	document.getElementById('cancel').style.display='block'; 
	document.getElementById('cancel-2').style.display='block';">

						Lire notre manifeste</a>
					</p>
			</div>
		</div>

		<!--*** MANIFESTE (D) ***-->
		<!--*********************-->
		<!--*********************-->
		<!--**** INSPIRATION ****-->

		<section class="inspiration">
			<div class="container-fluid">
				<div class="clearfix">
					<div class="inspi-gauche">
						<div class="intro-inspiration">
							<h2>Inspirez-vous !</h2>
							<p>
								À l'école WAKE UP, il y a toujours quelque chose pour être inspiré. Écoutez notre tout nouveau podcast ou rejoignez notre club lecture de développement personnel sur Youtube.
							</p>
						</div>
						<div class="content-inspiration container-wu-conv">
							<h3>WAKE UP Conversations</h3>
							<p>
								Le nouveau podcast qui donne la voix aux grandes figures et penseurs du développement personnel. On y aborde les mystères de la vie pour faire le plein d'espoir dans ce monde si incertain.
							</p>
							<div class="container-double-img">
								<img class="double-img img-logo-conv" alt="logo WAKE UP conversations" src="<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/inspiration/logo-wu-conversations-reduced.png';?>">
								<a class="double-img" style="float: right;" target="_blank" href="<?php echo site_url();?>/podcast">
									<img alt="miniature WAKE UP Conversations Bernard Werber" src="<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/inspiration/miniature-wu-conv-werber.jpg';?>">
								</a>
							</div>
							
							
							<a class="liens-inspiration lien-wu-conversations" href="<?php echo site_url();?>/podcast">Écouter le podcast</a>
						</div>
						
					</div>
					<div class="inspi-droite">
						<div class="content-inspiration container-wu-bc">
							<h3>WAKE UP Book Club</h3>
							<p>
								C'est le tout premier club lecture de développement personnel sur Youtube. Lors de chaque émission, nous recréeons l'univers du livre en décor... Abonnez-vous ! 
							</p>
							<div class="container-double-img">
								<a class="double-img" target="_blank" href="https://www.youtube.com/watch?v=HBXPxDOHMYE">
									<img alt="miniature WAKE UP Book Club" src="<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/inspiration/miniature-bookclub-alchimiste.jpg';?>">
								</a>
								<img class="double-img img-logo-book" alt="logo WAKE UP Book Club" src="<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/inspiration/logo-wake-up-book-club-white-reduced.png';?>">
							</div>
							
							
							<a class="liens-inspiration lien-wu-bookclub" target="_blank" href="https://www.youtube.com/channel/UCHHog81xo8hlt7ajC4v6AsQ">Rejoindre le club</a>
						</div>
						<img class="img-smiley" alt="Smiley WAKE UP" src="<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/inspiration/smile.png';?>">
					</div>
				</div>
			</div>
			
		</section>

		<!--
		<section class="video-bookclub">
			HELLO
			<iframe class="frame-video" width="560" height="315" src="https://www.youtube.com/embed/HBXPxDOHMYE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</section>
		-->


		<!--**** INSPIRATION ****-->
		<!--*********************-->
		<!--*********************-->
		<!--******  MEDIAS ******-->

		<section id="slide-G" class="slide-G">
			<div class="container-fluid">
				<div>
					<h2>Ils en parlent :</h2>
				</div>
				
				<?php
                include('wp-content/themes/t-sixteen-child-theme/myphpfiles/presse.php');
                ?>
				
			</div>
		</section>
		
		<!--******  MEDIAS ******-->
		<!--*********************-->
		<!--*********************-->
		<!--***** ARTICLES ******-->


		<!--***** ARTICLES ******-->
		<!--*********************-->
		<!--*********************-->
		<!--******  FOOTER ******-->


	</main><!-- .site-main -->
</div><!-- .content-area -->


<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: FR
 */
$.extend($.validator.messages, {
        required: "Ce champ est requis.",
        remote: "Veuillez remplir ce champ pour continuer.",
        email: "Veuillez entrer une adresse email valide.",
        url: "Veuillez entrer une URL valide.",
        date: "Veuillez entrer une date valide.",
        dateISO: "Veuillez entrer une date valide (ISO).",
        number: "Veuillez entrer un nombre valide.",
        digits: "Veuillez entrer (seulement) une valeur numérique.",
        creditcard: "Veuillez entrer un numéro de carte de crédit valide.",
        equalTo: "Veuillez entrer une nouvelle fois la même valeur.",
        accept: "Veuillez entrer une valeur avec une extension valide.",
        maxlength: $.validator.format("Veuillez ne pas entrer plus de {0} caractères."),
        minlength: $.validator.format("Veuillez entrer au moins {0} caractères."),
        rangelength: $.validator.format("Veuillez entrer entre {0} et {1} caractères."),
        range: $.validator.format("Veuillez entrer une valeur entre {0} et {1}."),
        max: $.validator.format("Veuillez entrer une valeur inférieure ou égale à {0}."),
        min: $.validator.format("Veuillez entrer une valeur supérieure ou égale à {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


<?php get_footer(); ?>