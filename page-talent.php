<?php
/**
 * Template Name: Podcast
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.3
 */
get_header(); ?>


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


<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-pulse.css?v0" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mkhplayer.default.css"/>

<style type="text/css">

    @font-face {
		font-family: Raleway-BlackItalic;
		src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-BlackItalic.ttf';?>');
		font-weight: normal;
	}

	@font-face {
		    font-family: Raleway-Italic;
		    src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Italic.ttf';?>');
		    font-weight: normal;
		}

    body {
        font-family: "Raleway", Helvetica, Arial, sans-serif !important;
        background-color: #FFFFFF;
    }

    .slide1 {
        background: url("<?php echo bloginfo('stylesheet_directory').'/images/TALENT/bg-anais-light.jpg';?>");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        background-color: #FFFFFF;
    }

    @media screen and (max-width: 600px) {
    	.slide1 {
    	    background: url("<?php echo bloginfo('stylesheet_directory').'/images/TALENT/bg-anais-mobile-light.jpg';?>");
    	    background-repeat: no-repeat;
    	    background-position: center center;
    	    background-size: cover;
    	    background-color: #FFFFFF;
    	}
    }

    .slide4 {
        background: url("<?php echo bloginfo('stylesheet_directory').'/images/TALENT/bg-cta-pulse-light.jpg';?>");
        background-repeat: no-repeat;
        background-position: bottom center;
        background-size: cover;
        background-color: #FFFFFF;
    }

    nav {
        margin-top: 2em;
        width: 100%;
        max-width: 1100px;
        left: 0;
        right: 0;
        top: 150px;
        position: absolute;
        z-index: 2000;
    }
    @media screen and (max-width: 930px) {
        nav {
            top: 0px;
        }
    }
    nav ul {
        text-align: center;
    }
    <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/style-backtotop.php') ?>


</style>

 


<div id="primary" class="content-area">
    <main id="main" class="site-main page-talent" role="main">

        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/manifeste.php') ?>
        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fondateurs.php') ?>
        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/charte.php') ?>

        <div id="cover"></div>

        <!-- **** SLIDE 1 *** -->
        <!--******************-->
        <!--******************-->


        <section class="slide1 vertical-center">


            <div class="container-fluid">


                <div id="mainHeaderWrapper" class="clearfix">

                    <a href="<?php echo site_url(); ?>">
                        <img class="logo-wakeup" alt="logo-wake up"
                             src='<?php echo bloginfo('stylesheet_directory') . '/images/HOMEPAGE/logo-wake-up.png'; ?>'>
                    </a>

                    <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/menu-nav.php') ?>

                </div>

                <div class="clearfix">
                    <div class="col-sm-8">
                    	<div class="clearfix intro-quote middle-container-2">
                    		<div class="quote-item-container float-left middle-text-2"><p class="quote-item">“</p></div>
                    		<div class="quote-slide1 float-left middle-text-2"><p style="font-family:'Raleway-BlackItalic'; font-size:2em;">La connaissance de soi est la spécialité de notre école</p></div>
                    	</div>
                    	<h1>WAKE UP arrive en entreprise</h1>
                    	<p class="txt-slide-1">
                    		Nous avons élaboré un outil pour aider vos collaborateurs à mieux se connaître et mieux comprendre les valeurs de votre entreprise. Le but&nbsp? Faire grandir la culture.
                    	</p>

                    	<p class="signature-right">Anaïs Raoux <br> <span style="font-size:0.6em"> DIRECTRICE WAKE UP</span></p>

                    	<div class="container-pulse-logo clearfix">
                    		
                    		<img style="margin-left: 90px; " src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/logo-pulse.png'; ?>'>
                    		<hr class="hr-ouf">
                    		<hr class="hr-classic">
                    	</div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>

                
            </div>

        </section>

        <!-- **** SLIDE 1 *** -->
        <!--******************-->
        <!--******************-->
        <!--***** SLIDE 2 ****-->

        <section class="slide2">
            <div class="container-fluid ">
            	<div class="col-sm-4 hidden-small-2 bloc-gauche-seb">
            		<img src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/seb-side.png'; ?>'>
            	</div>
            	<div class="col-sm-8 bloc-droite-seb">
            		<div class="container-text-slide2">
            			<h2>
            			Le XXIème siècle sera <span style="color: #ff0055;">introspectif</span> ou ne sera pas.
	            		</h2>
	            		<img class="line-uncertainty-mobile visible-small-2" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/line-uncertainty-mobile.png'; ?>'>
	            		<p>
	            			Les incertitudes sont de plus en plus croissantes : business, politique, société, climat, effondrement de la biodiversité. Pour rester sereines face aux bouleversements qui ont déjà commencés, les entreprises qui réussiront demain seront celles qui se connaissent le mieux. Elles sauront alors créer une culture forte qui sera le pivot indispensable des transformations en cours.
	            		</p>
            		</div>

            		<img class="visible-small-2 seb" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/seb-side-mobile.png'; ?>'>
            		

            		<img class="line-uncertainty hidden-small-2" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/line-uncertainty.png'; ?>'>

            		<p class="signature-left" style="text-align: left; ">Sébastien Sors <br> <span style="font-size:0.6em"> DIRECTEUR PÉDAGOGIQUE</span></p>

            	</div>
                
            </div>
        </section>

        <!-- **** SLIDE 2 *** -->
        <!--******************-->
        <!--******************-->
        <!--***** SLIDE 3 ****-->

        <section class="slide3">
        	<div class="container-fluid">
        		<div class="col-sm-6">
        			<h2>Nous vous aidons à ...</h2>
        			<div class="items-pulse clearfix">
        				<div class="middle-container">
        					<img class="ico-pulse middle-text" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/talents.svg'; ?>'>
        					<p class="middle-text">comprendre les talents intrinsèques</p>
        				</div>
        			</div>
        			<div class="items-pulse clearfix">
        				<div class="middle-container">
	        				<img class="ico-pulse middle-text" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/force.svg'; ?>'>
	        				<p class="middle-text">voir les forces chez les autres</p>
        				</div>
        			</div>
        			<div class="items-pulse clearfix">
        				<div class="middle-container">
	        				<img class="ico-pulse middle-text" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/values.svg'; ?>'>
	        				<p class="middle-text">incarner les valeurs de l’entreprise</p>
        				</div>
        			</div>
        		</div>
        		<div class="col-sm-6">
        			<h2 class="second-titre">Nous croyons dans ...</h2>
        			<div class="items-pulse clearfix">
        				<div class="middle-container">
	        				<img class="ico-pulse middle-text" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/content.svg'; ?>'>
	        				<p class="middle-text">du contenu personnalisé</p>
        				</div>
        			</div>
        			<div class="items-pulse clearfix">
        				<div class="middle-container">
	        				<img class="ico-pulse middle-text" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/learning.svg'; ?>'>
	        				<p class="middle-text">un apprentissage en continu</p>
        				</div>
        			</div>
        			<div class="items-pulse clearfix">
        				<div class="middle-container">
	        				<img class="ico-pulse middle-text" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/collective.svg'; ?>'>
	        				<p class="middle-text">l’intelligence du collectif</p>
        				</div>
        			</div>
        		</div>
        	</div>
        	
        </section>

        <!-- **** SLIDE 3 *** -->
        <!--******************-->
        <!--******************-->
        <!--***** SLIDE 4 ****-->
        <section class="slide4">
        	<div class="container-fluid">
        		<div class="clearfix middle-container">
        			<div class="col-sm-2 middle-text hidden-sm">
        				<img class="arrow-cta" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/arrow-left.png'; ?>'>
        			</div>
        			<div class="col-sm-4 middle-text">
        				<h2>Intéressé ?</h2>
        					<p>
        						Nous recherchons les premières équipes utilisatrices. Vous gagnerez en nouvelles connaissances, nous gagnerons des feedbacks. Laissez-nous votre mail pour que l’on vous écrive.
        					</p>
        			</div>
        			<div class="col-sm-4 middle-text">
        				<div id="mc_embed_signup">
								    <form action="https://wake-up.us14.list-manage.com/subscribe/post?u=4714d965ed464bcbe3f4e6e54&amp;id=239e10018b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								        <div id="mc_embed_signup_scroll">

								            <div class="mc-field-group">
								    	       <input placeholder="Votre mail" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
								            </div>
								            <div class="mc-field-group">
								            	<input placeholder="Votre nom" type="text" value="" name="FNAME" class="" id="mce-FNAME">
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
        			<div class="col-sm-2 middle-text hidden-sm">
        				<img class="arrow-cta" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/arrow-right.png'; ?>'>
        			</div>
        		</div>
        	</div>
        </section>
        <!-- **** SLIDE 4 *** -->
        <!--******************-->
        <!--******************-->
        <!--***** MEDIAS *****-->

        <section id="slide-G" class="slide-G">
            <div class="container-fluid">
                <div>
                    <h2>Ils parlent de WAKE UP :</h2>
                </div>
                <?php
                include('wp-content/themes/t-sixteen-child-theme/myphpfiles/presse.php');
                ?>
                
            </div>
        </section>
        
        <!--******  MEDIAS ******-->
        <!--*********************-->



    </main>
    
    
</div><!-- .content-area -->


<?php get_footer(); ?>

<script type="text/javascript">
    $( document ).ready(function() {
        alert ("hello");
        var cssLink = document.createElement("link");
        cssLink.href = "<?php echo get_stylesheet_directory_uri(); ?>/css/style-wuconv.css?v1";
        cssLink.rel = "stylesheet"; 
        cssLink.type = "text/css"; 
        frames['iframe1'].document.head.appendChild(cssLink);
    } ;
</script>

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

