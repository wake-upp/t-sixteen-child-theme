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


<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-boussolepro.css?v2" rel="stylesheet">

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

    .slide-anais {
        background: url("<?php echo bloginfo('stylesheet_directory').'/images/TALENT/bg-anais-light-v2.jpg';?>");
    }

    .slide1.header {
        background: url("<?php echo bloginfo('stylesheet_directory').'/images/BOUSSOLE-PRO/header_bg.jpg';?>");
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

    .container-fluid {
        max-width: none;
    }


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


        <section class="slide1 header vertical-center">


            <div class="container">


                <div id="mainHeaderWrapper" class="clearfix">

                    <a href="<?php echo site_url(); ?>">
                        <img class="logo-wakeup" alt="logo-wake up"
                             src='<?php echo bloginfo('stylesheet_directory') . '/images/HOMEPAGE/logo-wake-up.png'; ?>'>
                    </a>

                    <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/menu-nav.php') ?>

                </div>

                <div class="clearfix">
                    <div class="col-sm-6">
                        <!--
                    	<div class="clearfix intro-quote middle-container-2">
                    		<div class="quote-item-container float-left middle-text-2"><p class="quote-item">“</p></div>
                    		<div class="quote-slide1 float-left middle-text-2"><p style="font-family:'Raleway-BlackItalic'; font-size:2em;">La connaissance de soi est la spécialité de notre école.</p></div>
                    	</div>
                    -->
                        <div class="container-pulse-logo clearfix">

                            <img class="logo-boussole-pro" src='<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/BoussolePro_logo.svg'; ?>'>

                        </div>
                        <h1 class="title-boussole-pro">The talent compass for companies</h1>
                        <p class="txt-slide-1">
                            Visualize the distribution of talents in your team and strenthgens them through customized content for each team member.
                        </p>

                        <a href="#slide-plan" class="btn-cta-boussolepro">Get started</a>

                    </div>
                    <div id="carousel-app" class="carousel slide carousel-app" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/ScreenshotApp2.png'; ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/ScreenshotApp3.png'; ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/ScreenshotApp4.png'; ?>" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/ScreenshotApp5.png'; ?>" alt="Fourth slide">
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </section>

        <!-- **** SLIDE 1 *** -->
        <!--******************-->
        <!--******************-->
        <!--***** SLIDE TAB ****-->

        <section class="slide-tabs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col tab-block tab1 active" data-pane="pane1">
                        <strong class="number">1</strong>
                        <div class="content">
                            <img src="<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/Icon_Question.svg'; ?>" alt="Question mark">
                            <h3>Talent test based on a neurophilosophical model.</h3>
                        </div>
                        <div class="arrow-down"></div>
                    </div>
                    <div class="col tab-block tab2" data-pane="pane2">
                        <strong class="number">2</strong>
                        <div class="content">
                            <img src="<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/Icon_Boussole-graph.svg'; ?>" alt="Question mark">
                            <h3>Visualization of talent distribution by person and team.</h3>
                        </div>
                        <div class="arrow-down"></div>
                    </div>
                    <div class="col tab-block tab3" data-pane="pane3">
                        <strong class="number">3</strong>
                        <div class="content">
                            <img src="<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/Icon_Cards.svg'; ?>" alt="Question mark">
                            <h3>Card collecting game with customised lessons about you and your team.</h3>
                        </div>
                        <div class="arrow-down"></div>
                    </div>
                </div>
                <div class="container tab-content pane1 active">
                    <div class="row">
                        <div class="col-md">
                            <h2>The product starts with an advanced version of the already proven Boussole Talent test.</h2>
                            <ul>
                                <li>Already 110.000 users</li>
                                <li>100% private, no data sell</li>
                                <li>20 additional questions</li>
                                <li>Current Boussole data importable</li>
                            </ul>
                        </div>
                        <div class="col-md">
                            <video src="<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/phone.mp4'; ?>" autoplay loop></video>
                        </div>
                    </div>
                </div>
                <div class="container tab-content pane2"></div>
                <div class="container tab-content pane3"></div>
            </div>
        </section>

        <!-- **** SLIDE TAB *** -->
        <!--******************-->
        <!--******************-->
        <!--***** SLIDE SEB ****-->

        <section class="slide-seb">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-sm-4 hidden-small-2 bloc-gauche-seb">
                        <img src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/seb-side.png'; ?>'>
                    </div>
                    <div class="col-sm-8 bloc-droite-seb">
                        <div class="container-text-slide2">
                            <h2 class="title-vision">
                                Le XXIème siècle sera <span style="color: #ff0055;">introspectif</span> ou ne sera pas
                            </h2>
                            <p class="details-vision">
                                Les incertitudes sont de plus en plus croissantes : business, politique, société, climat, effondrement de la biodiversité. Pour rester sereines faces aux bouleversements qui ont déjà commencés, les entreprises qui réussiront demain seront celles qui se connnaissent le mieux. Elles sauront alors créer une culture forte qui sera le pivot indispensable des transformations en cours.                            </p>
                        </div>

                        <img class="visible-small-2 seb" src='<?php echo bloginfo('stylesheet_directory') . '/images/TALENT/seb-side-mobile.png'; ?>'>

                        <p class="signature-left">Sébastien Sors <br> <span style="font-size:0.6em"> DIRECTEUR PÉDAGOGIQUE</span></p>

                    </div>
                </div>
            </div>
        </section>

        <!-- **** SLIDE 3 *** -->
        <!--******************-->
        <!--******************-->
        <!-- ** SLIDE WE ** -->

        <section class="slide-we">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <h2>We help with...</h2>
                        <div class="item">
                            <img src='<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/talents.svg'; ?>'>
                            <span>Understanding talents</span>
                        </div>
                        <div class="item">
                            <img src='<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/force.svg'; ?>'>
                            <span>Seeing the strength of others</span>
                        </div>
                        <div class="item">
                            <img src='<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/values.svg'; ?>'>
                            <span>Embracing company values</span>
                        </div>
                    </div>
                    <div class="col-md">
                        <h2>We believe in...</h2>
                        <div class="item">
                            <img src='<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/content.svg'; ?>'>
                            <span>Personalised content</span>
                        </div>
                        <div class="item">
                            <img src='<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/learning.svg'; ?>'>
                            <span>Continuously education</span>
                        </div>
                        <div class="item">
                            <img src='<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/collective.svg'; ?>'>
                            <span>The collective intellignece</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--*** SLIDE WE ***-->
        <!--******************-->
        <!--******************-->
        <!--***** SLIDE 3 ****-->

        <!--
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
        -->

        <!-- **** SLIDE 3 *** -->
        <!--******************-->
        <!--******************-->
        <!--***** SLIDE PLAN ****-->
        <section class="slide-plan" id="slide-plan">
            <div class="container">
                <h1>Choose your plan</h1>
                <div class="cards">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Start-ups</h5>
                            <div class="card-subtitle">1-20 employees</div>
                            <div class="price"><span class="symbol">€</span>299 <span class="times">1 time!</span></div>
                            <ul class="card-text">
                                <li>Max 20 Boussole Pro tests</li>
                                <li>1 Team</li>
                                <li>Exclusive Lessons</li>
                                <li>Additional podcasts and videos</li>
                                <li>Life-time access</li>
                                <li>Manual set up</li>
                            </ul>
                            <a href="#" class="btn-cta-boussolepro">Get started</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Scale-ups</h5>
                            <div class="card-subtitle">21-50 employees</div>
                            <div class="price"><span class="symbol">€</span>499 <span class="times">1 time!</span></div>
                            <ul class="card-text">
                                <li>Max 50 Boussole Pro tests</li>
                                <li>Multiple Teams</li>
                                <li>Exclusive Lessons</li>
                                <li>Additional podcasts and videos</li>
                                <li>Life-time access</li>
                                <li>Manual set up</li>
                            </ul>
                            <a href="#" class="btn-cta-boussolepro">Get started</a>
                        </div>
                    </div>
                    <div class="card enterprises">
                        <div class="card-body">
                            <h5 class="card-title">Entreprises</h5>
                            <div class="card-subtitle">50+ employees</div>
                            <ul class="card-text">
                                <li>Bulk pricing offer</li>
                                <li>Unlimited Boussole Pro Tests</li>
                                <li>Unlimited Teams</li>
                                <li>Additional podcasts and videos</li>
                                <li>Life-time access</li>
                                <li>Automatic set up</li>
                                <li>Optional tailored sessions</li>
                                <li>Premium support</li>
                            </ul>
                            <a href="#" class="btn-cta-boussolepro">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- **** SLIDE PLAN *** -->
        <!--******************-->
        <!--******************-->
        <!--***** SLIDE ANAIS *****-->

        <section class="slide-anais">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-1">
                        <div class="quote-anais">
                            <span class="quote-mark">“</span>
                            People are most valuable when they use their talents...
                        </div>
                        <img src="<?php echo bloginfo('stylesheet_directory') . '/images/BOUSSOLE-PRO/play-btn.svg'; ?>">
                        <p class="signature-right">Anaïs Raoux <br> <span style="font-size:0.6em"> DIRECTRICE WAKE UP</span></p>
                    </div>
                </div>

            </div>
        </section>

        <!--****** SLIDE ANAIS ******-->
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
        });}(jQuery));var $mcj = jQuery.noConflict(true);
</script>
<!--End mc_embed_signup-->

<script type="text/javascript">
    $('.tab-block').click(function() {
        $('.tab-block').removeClass('active')
        $(this).addClass('active')
        $('.tab-content').removeClass('active')
        let pane = $(this).data('pane')
        console.log(pane)
        $(".tab-content." + pane).addClass('active')
    })
</script>
