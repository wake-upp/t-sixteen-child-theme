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


<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-wuconv.css?v6" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mkhplayer.default.css"/>
<style type="text/css">

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
        src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway.ttf';?>');
    }

    body {
        font-family: "Raleway", Helvetica, Arial, sans-serif !important;
        background-color: #FFFFFF;
    }

    .slide1 {
        background: url("<?php echo bloginfo('stylesheet_directory').'/images/wuconv/bg-blog.png';?>");
        background-repeat: no-repeat;
        background-position: top center;
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
    <main id="main" class="site-main page-cours-audio" role="main">

        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/manifeste.php') ?>
        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fondateurs.php') ?>
        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/charte.php') ?>

        <div id="cover"></div>

        <!-- **** SLIDE 1 *** -->
        <!--******************-->
        <!--******************-->

        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/menu-nav.php') ?>


        <section class="slide slide1 vertical-center">


            <div class="container-fluid">


                <div id="mainHeaderWrapper" class="clearfix">

                    <a href="<?php echo site_url(); ?>">
                        <img class="logo-wakeup" alt="logo-wake up"
                             src='<?php echo bloginfo('stylesheet_directory') . '/images/HOMEPAGE/logo-wake-up.png'; ?>'>
                    </a>

                </div>

                
            </div>

        </section>

        <h1 class="titre-pour-podcast">Le podcast du développement personnel</h1>

        <!-- **** SLIDE 1 *** -->
        <!--******************-->
        <!--******************-->
        <!--***** WU CONV ****-->

        <section class="content-wuconv">
            <div class="container-fluid">
                <div class="clearfix header-wuconv">
                    <div class="col-sm-6 container-logo-wuconv">
                        <img class="img-logo-wuconv" alt="logo wake up conversations podcast" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-wake-up-conversations-podcast.png'; ?>">
                    </div>
                    <div class="col-sm-5">
                        <h3>SAISON 2</h3>
                        <h2>WAKE UP Conversations :<br> Le nouveau podcast du développement personnel !</h2>
                        <p>Anaïs Raoux, directrice de l'école WAKE UP, reçoit les grandes figures du développement personnel. Une interview intimiste, humaniste, où l’on aborde les grands mystères de la vie. </p>
                        <p> Qui sommes-nous ? Quel est le sens de notre existence ? Que se passe t’il après la mort ? Avons-nous tous un destin ? Cet été, au rythme d'un vendredi sur deux, des auteurs, philosophes et scientifiques nous donnent l'espoir de dépasser les difficultés de notre monde moderne.</p>
                    </div>
                    <div class="col-sm-1"></div>
                </div>

                <div class="clearfix container-episodes-wuconv">
                			<!--*******************-->
			                <!-- ** EPISODE 11 *** -->
			                <div id="episode-11" class="clearfix episode-wuconv">
		                        <div class="inside-episode jackette-episode">
		                            <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast Christian Clot" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-episode-11-augustin.jpg'; ?>">
		                            <div class="btn-plateformes">
		                                <a target="_blank" href="https://soundcloud.com/wakeupconversations/episode-11-augustin-paluel">
		                                    <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.youtube.com/watch?v=CPJigND5D24">
		                                    <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                                </a> 
		                                <a target="_blank" href="https://open.spotify.com/episode/4ifBzIAJtTws2SsVE21UNC">
		                                    <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                    <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                                </a>
		                                
		                                <a target="_blank" href="https://podcasts.apple.com/fr/podcast/%C3%A9pisode-10-christian-clot-sadapter-%C3%A0-lextr%C3%AAme/id1470047326?i=1000461446815">
		                                    <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                                </a>
		                            
		                                
		                            </div>
		                        </div>
		                        <div class="inside-episode details-episode">
		                            <h3>17 JANVIER 2020</h3>
		                            <h2>Épisode 11 : Entreprendre selon ses valeurs</h2>
		                            <p>
		                            	Les biscuits Michel et Augustin, c’est lui. Autodidacte de la vie, quand Augustin Paluel Marmont lance son entreprise il sait qu’il ne fera aucune concession sur ses valeurs. Le résultat ? Une marque unique à son image : authentique et passionnée. Dans cet épisode, nous abordons ensemble ce qui l’inspire. Nous parlons d’intuition, de foi, d’hospitalité, des talents dans le métier si particulier d’entrepreneur.
		                            </p>
		                            
		                            <iframe src="https://player.pippa.io/wakeupconversations/episodes/episode-11-augustin-paluel-marmont?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                        </div>
		                	</div>
		                	<!-- ** EPISODE 11 *** -->
		                	<!--*******************-->
                			<!--*******************-->
			                <!-- ** EPISODE 10 *** -->
			                <div id="episode-10" class="clearfix episode-wuconv">
		                        <div class="inside-episode jackette-episode">
		                            <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast Christian Clot" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-episode-10-christian.jpg'; ?>">
		                            <div class="btn-plateformes">
		                                <a target="_blank" href="https://soundcloud.com/wakeupconversations/sadapter-a-lextreme">
		                                    <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.youtube.com/watch?v=CPJigND5D24">
		                                    <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                                </a> 
		                                <a target="_blank" href="https://open.spotify.com/episode/5wuZqKrTNI8kvGWjsm45PE">
		                                    <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                    <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                                </a>
		                                
		                                <a target="_blank" href="https://podcasts.apple.com/fr/podcast/%C3%A9pisode-10-christian-clot-sadapter-%C3%A0-lextr%C3%AAme/id1470047326?i=1000461446815">
		                                    <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                                </a>
		                            
		                                
		                            </div>
		                        </div>
		                        <div class="inside-episode details-episode">
		                            <h3>3 JANVIER 2020</h3>
		                            <h2>Épisode 10 : S'adapter à l'extrême</h2>
		                            <p>
		                            	Christian Clot est un explorateur de l’extrême. Pour mieux comprendre le fonctionnement du cerveau humain, il mène des expéditions dans les lieux les plus dangereux sur Terre, comme le désert en Iran par 70°C ou encore Sibérie avec un froid polaire. Nous parlons ensemble des étonnantes capacités d’adaptation du cerveau et du rôle de l’émerveillement pour y parvenir.
		                            </p>
		                            
		                            <iframe src="https://player.pippa.io/wakeupconversations/episodes/episode-10-christian-clot?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                        </div>
		                	</div>
		                	<!-- ** EPISODE 10 *** -->
		                	<!--*******************-->
		                	<!--*******************-->
			                <!-- *** EPISODE 9 *** -->
			                <div id="episode-9" class="clearfix episode-wuconv">
		                        <div class="inside-episode jackette-episode">
		                            <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast Perla" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-episode-9-perla.jpg'; ?>">
		                            <div class="btn-plateformes">
		                                <a target="_blank" href="https://soundcloud.com/wakeupconversations/episode-9-perla-servan">
		                                    <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.youtube.com/watch?v=NnmvEtvo_b4">
		                                    <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                                </a> 
		                                <a target="_blank" href="https://open.spotify.com/episode/5brR6A8XGIjePgrhyyMO55">
		                                    <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                    <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                                </a>
		                                
		                                <a target="_blank" href="https://podcasts.apple.com/fr/podcast/%C3%A9pisode-9-perla-servan-schreiber-savourer-la-vie/id1470047326?i=1000460303780">
		                                    <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                                </a>
		                            
		                                
		                            </div>
		                        </div>
		                        <div class="inside-episode details-episode">
		                            <h3>20 DECEMBRE 2019</h3>
		                            <h2>Épisode 9 : Savourer la vie</h2>
		                            <p>
		                            	Connue comme étant la fondatrice de Psychologies Magazine, Perla Servan Schreiber est plus que ça. Elle croque la vie à pleine dent et nous partage dans cet épisode ses recettes de cuisine et de vie. Nous parlons ensemble de l’importance de trouver sa place, du pouvoir de la sérendipité, de liberté et des secrets pour une histoire d'amour qui dure.
		                            </p>
		                            
		                            <iframe src="https://player.pippa.io/wakeupconversations/episodes/episode-9-perla-servan-schreiber?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                        </div>
		                	</div>
		                	<!-- *** EPISODE 9 *** -->
		                	<!--*******************-->
			                <!--*******************-->
			                <!-- *** EPISODE 8 *** -->
			                <div id="episode-8" class="clearfix episode-wuconv">
		                        <div class="inside-episode jackette-episode">
		                            <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast Cyril Dion" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-episode-8-cyril-dion.jpg'; ?>">
		                            <div class="btn-plateformes">
		                                <a target="_blank" href="https://soundcloud.com/wakeupconversations/episode-8-cyril-dion-sengager">
		                                    <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.youtube.com/watch?v=jwJwZacfP7s">
		                                    <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                                </a> 
		                                <a target="_blank" href="https://open.spotify.com/episode/4Wgdsmylc6Sca4V1tq2Qxj">
		                                    <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                    <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                                </a>
		                                
		                                <a target="_blank" href="https://podcasts.apple.com/fr/podcast/%C3%A9pisode-8-cyril-dion-sengager-pour-la-plan%C3%A8te/id1470047326?i=1000458885969">
		                                    <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                                </a>
		                            
		                                
		                            </div>
		                        </div>
		                        <div class="inside-episode details-episode">
		                            <h3>6 DECEMBRE 2019</h3>
		                            <h2>Épisode 8 : S'engager pour la planète</h2>
		                            <p>
		                            	Élu activiste de l’année 2019, Cyril Dion est surtout connu pour la réalisation du documentaire à succès Demain et le mouvement des Colibris qu’il a cofondé avec Pierre Rabhi. Il parle dans cet épisode d’effondrement, du rôle des nouvelles histoires, de la difficulté à préserver son énergie quand on est engagé et également de l’importance des questions existentielles.
		                            </p>
		                            
		                            <iframe src="https://player.pippa.io/wakeupconversations/episodes/episode-8-cyril-dion?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                        </div>
		                	</div>
		                	<!-- *** EPISODE 8 *** -->
		                	<!--*******************-->
		                	<!--*******************-->
			                <!-- *** EPISODE 7 *** -->
			                <div id="episode-7" class="clearfix episode-wuconv">
		                        <div class="inside-episode jackette-episode">
		                            <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast Magda Hollander-Lafon" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-episode-7-magda-hollander-lafon.jpg'; ?>">
		                            <div class="btn-plateformes">
		                                <a target="_blank" href="https://soundcloud.com/wakeupconversations/magda-hollander-lafon">
		                                    <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.youtube.com/watch?v=ZPeE-iJ7Mhs">
		                                    <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                                </a> 
		                                <a target="_blank" href="https://open.spotify.com/episode/7s0Mvldz0NUPBgTvicT1Wt">
		                                    <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                    <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                                </a>
		                                
		                                <a target="_blank" href="https://podcasts.apple.com/fr/podcast/wake-up-conversations/id1470047326">
		                                    <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                                </a>
		                            
		                                
		                            </div>
		                        </div>
		                        <div class="inside-episode details-episode">
		                            <h3>27 SEPTEMBRE 2019</h3>
		                            <h2>Épisode 7 : Transmettre l'intransmissible</h2>
		                            <p>
		                            	Elle a survécu l'horreur d'Auschwitz. À 92 ans, Magda Hollander Lafon traverse une nouvelle fois le pont de sa mémoire et nous raconte : la déportation, l'arrivée dans les camps, sa blessure hongroise, la bonté des hommes, l'intuition qui l'a sauvée et ses remèdes au mal de vivre. Elle le fait par fidélité de la mémoire mais surtout pour nous, pour demain, pour éveiller les consciences.
		                            </p>
		                            
		                            <iframe src="https://player.pippa.io/wakeupconversations/episodes/magda-hollander-lafon?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                        </div>
			                </div>
			                <!-- *** EPISODE 7 *** -->
			                <!--*******************-->
		                	<!--*******************-->
			                <!-- *** EPISODE 6 *** -->
			                <div id="episode-6" class="clearfix episode-wuconv">
		                        <div class="inside-episode jackette-episode">
		                            <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast Natacha Calestreme" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-episode-6-natacha-calestreme.jpg'; ?>">
		                            <div class="btn-plateformes">
		                                <a target="_blank" href="https://soundcloud.com/wakeupconversations/episode-6-natacha-calestreme">
		                                    <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.youtube.com/watch?v=2zUvdBWQQao">
		                                    <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                                </a> 
		                                <a target="_blank" href="https://open.spotify.com/episode/4z8aQnf0HhOgC2yD3nBaxS">
		                                    <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                    <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                                </a>
		                                
		                                <a target="_blank" href="https://podcasts.apple.com/fr/podcast/%C3%A9pisode-6-natacha-calestr%C3%A9m%C3%A9-gu%C3%A9rir-des-blessures-invisibles/id1470047326?i=1000449663692">
		                                    <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                                </a>
		                            
		                                
		                            </div>
		                        </div>
		                        <div class="inside-episode details-episode">
		                            <h3>13 SEPTEMBRE 2019</h3>
		                            <h2>Épisode 6 : Guérir des blessures invisibles</h2>
		                            <p>
		                            	Natacha Caléstrémé est journaliste scientifique, réalisatrice de documentaires et auteure. Elle écrit des romans psychologiques déguisés en thrillers policiers pour aider les autres à guérir de blessures invisibles. On parle dans cet épisode de pervers narcissiques, d'énergies, de conscience et de protocoles pour se libérer de liens qui empêchent d'avancer.
		                            </p>
		                            
		                            <iframe src="https://player.pippa.io/wakeupconversations/episodes/episode-6-natacha-calestreme-guerrir-des-blessures-invisible?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                        </div>
			                </div>
			                <!-- *** EPISODE 6 *** -->
			                <!--*******************-->
		                	<!--*******************-->
			                <!-- *** EPISODE 5 *** -->
			                <div id="episode-5" class="clearfix episode-wuconv">
		                        <div class="inside-episode jackette-episode">
		                            <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast Idriss Aberkane" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-episode-5-idriss-aberkane.jpg'; ?>">
		                            <div class="btn-plateformes">
		                                <a target="_blank" href="https://soundcloud.com/wakeupconversations/cover-episode-5-idriss-aberkane">
		                                    <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.youtube.com/watch?v=KEL2OS7FJbk">
		                                    <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                                </a> 
		                                <a target="_blank" href="https://open.spotify.com/episode/232QS2IPXmKqQlAC8XBrbl">
		                                    <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                    <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                                </a>
		                                
		                                <a target="_blank" href="https://podcasts.apple.com/fr/podcast/%C3%A9pisode-5-r%C3%A9concilier-science-et-spiritualit%C3%A9-idriss/id1470047326?i=1000448182451">
		                                    <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                                </a>
		                            
		                                
		                            </div>
		                        </div>
		                        <div class="inside-episode details-episode">
		                            <h3>30 AOÛT 2019</h3>
		                            <h2>Épisode 5 : Réconcilier science et spiritualité</h2>
		                            <p>
		                            	Idriss Aberkane est un entrepreneur, chercheur et essayiste français. Avec 3 doctorats en poche à moins de 30 ans, il plaide aujourd’hui pour la complémentarité des sciences et de la spiritualité, qui sont, selon lui deux besoins de notre identité. Il parle dans cet épisode du cerveau, de la conscience, d’éducation mais aussi d’Harry Potter, de latin, de soufisme et de bio-mimétisme.
		                            </p>
		                            
		                            <iframe src="https://player.pippa.io/wakeupconversations/episodes/episode-5-idriss-aberkane?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                        </div>
			                </div>
			                <!-- *** EPISODE 5 *** -->
			                <!--*******************-->
		                	<!--*******************-->
			                <!-- *** EPISODE 4 *** -->
			                <div id="episode-4" class="clearfix episode-wuconv">
		                        <div class="inside-episode jackette-episode">
		                            <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast Bernard Werber" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-episode-4-bernard-werber.jpg'; ?>">
		                            <div class="btn-plateformes">
		                                <a target="_blank" href="https://soundcloud.com/wakeupconversations/episode-4-bernard-werber">
		                                    <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                                </a>
		                                <a >
		                                    <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                                </a> 
		                                <a target="_blank" href="https://open.spotify.com/episode/6xq4X09Fouepwcko4M4JqR">
		                                    <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                    <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                                </a>
		                                
		                                <a target="_blank" href="https://podcasts.apple.com/fr/podcast/%C3%A9pisode-4-bernard-werber-faire-la-r%C3%A9volution-avec-des/id1470047326?i=1000447022904">
		                                    <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                                </a>
		                            
		                                
		                            </div>
		                        </div>
		                        <div class="inside-episode details-episode">
		                            <h3>16 AOÛT 2019</h3>
		                            <h2>Épisode 4 : Faire la révolution avec des histoires</h2>
		                            <p>
		                            	Bernard Werber est l'un des auteurs français contemporains les plus lus au monde. À son compteur : 30 millions de livres. Mais plus qu’un écrivain à succès, Bernard Werber est surtout un raconteur d’histoires. On pourrait l’écouter des heures parler de spiritualité, de science-fiction, de mythologie. Avec un regard espiègle et un sourire amusé, il nous parle dans cet épisode du pouvoir de l’imagination et des histoires pour transformer notre monde.
		                            </p>
		                            
		                            <iframe src="https://player.pippa.io/wakeupconversations/episodes/episode-4-bernard-werber?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                        </div>

		                    </div>
			                <!-- *** EPISODE 4 *** -->
			                <!--*******************-->
		                	<!--*******************-->
			                <!-- *** EPISODE 3 *** -->
			                <div id="episode-3" class="clearfix episode-wuconv">
		                        <div class="inside-episode jackette-episode">
		                            <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast Stéphane Allix" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-episode-3-stephane-allix.jpg'; ?>">
		                            <div class="btn-plateformes">
		                                <a target="_blank" href="https://soundcloud.com/wakeupconversations/episode-3-stephane-allix">
		                                    <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                                </a>
		                                <a >
		                                    <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                                </a> 
		                                <a target="_blank" href="https://open.spotify.com/episode/4w3GjQgwI8U1TWsciOrOpK">
		                                    <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                    <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                                </a>
		                                
		                                <a target="_blank" href="https://podcasts.apple.com/fr/podcast/%C3%A9pisode-3-st%C3%A9phane-allix-briser-le-tabou-de-la-mort/id1470047326?i=1000445948120">
		                                    <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                                </a>
		                            
		                                
		                            </div>
		                        </div>
		                        <div class="inside-episode details-episode">
		                            <h3>2 AOÛT 2019</h3>
		                            <h2>Épisode 3 : Briser le tabou de la mort</h2>
		                            <p>
		                            	Journaliste, réalisateur, écrivain et fondateur de l'INREES, Stéphane Allix enquête sur les sujets qui dérangent. En 2015, il publie le livre "Le Test" où il parvient, au travers d'une expérience, à entrer en contact avec son père dans l'au-delà. Un témoignage humble, ouvert et d'une rigueur scientifique qui aide à transformer le tabou de la mort, en une chance de voir notre monde de façon plus lucide. 
		                            </p>
		                            
		                            <iframe src="https://player.pippa.io/wakeupconversations/episodes/episode-3-stephane-allix?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                        </div>

		                    </div>
		                
			                <!-- *** EPISODE 3 *** -->
			                <!--*******************-->
		                    <!--*******************-->
		                    <!-- *** EPISODE 2 *** -->
		                    <div id="episode-2" class="clearfix episode-wuconv">
		                        <div class="inside-episode jackette-episode">
		                            <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast Esther Perel" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-episode-2-esther-perel.jpg'; ?>">
		                            <div class="btn-plateformes">
		                                <a target="_blank" href="https://soundcloud.com/wakeupconversations/episode-2-esther-perel">
		                                    <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://youtu.be/qwzHAAKyAz8">
		                                    <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                                </a> 
		                                <a target="_blank" href="https://open.spotify.com/episode/42JxtIeEJBehDmSc7WMqZu?si=wiQguxsvRDyis4Y-CrHbCA">
		                                    <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                                </a>
		                                <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                    <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                                </a>
		                                
		                                <a target="_blank" href="https://podcasts.apple.com/fr/podcast/%C3%A9pisode-2-esther-perel-changer-son-regard-sur-linfid%C3%A9lit%C3%A9/id1470047326?i=1000444834907">
		                                    <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                                </a>
		                            
		                                
		                            </div>
		                        </div>
		                        <div class="inside-episode details-episode">
		                            <h3>19 JUILLET 2019</h3>
		                            <h2>Épisode 2 : Changer son regard sur l'infidélité</h2>
		                            <p>Plus de 30 millions de personnes ont vu ses TED Talk. Esther Perel, la psychothérapeute la plus célèbre de New York, nous livre les secrets d’une relation qui dure. Elle redonne du sens à la notion d’érotisme et montre comment l’évolution de notre société influence la qualité de nos relations. On y découvre alors que l’infidélité, sujet si tabou, peut en réalité être une chance pour un nouveau départ.
		                            </p>
		                            
		                            <iframe src="https://player.pippa.io/wakeupconversations/episodes/episode-2-esther-perel?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                        </div>

		                    </div>
		                </div>
		                <!-- *** EPISODE 2 *** -->
		                <!--*******************-->
		                <!--*******************-->
		                <!-- *** EPISODE 1 *** -->
		                <div id="episode-1" class="clearfix episode-wuconv">
		                    <div class="inside-episode jackette-episode">
		                        <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast jonathan lehmann" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-episode-1-jonathan-lehmann.jpg'; ?>">
		                        <div class="btn-plateformes">
		                            <a target="_blank" href="https://soundcloud.com/wakeupconversations/episode-1-jonathan-lehmann">
		                                <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                            </a>
		                            <a target="_blank" href="https://www.youtube.com/watch?v=8iwQy6-XXZA">
		                                <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                            </a>
		                            <a target="_blank" href="https://open.spotify.com/episode/1CQl8cDEr1xyWSaBmHetEM">
		                                <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                            </a>
		                            <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                            </a>
		                            
		                            <a target="_blank" href="https://podcasts.apple.com/fr/podcast/%C3%A9pisode-1-jonathan-lehmann-se-lib%C3%A9rer-la-tyrannie-du/id1470047326?i=1000443664649">
		                                <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                            </a>
		                        
		                            
		                        </div>
		                    </div>
		                    <div class="inside-episode details-episode">
		                        <h3>5 JUILLET 2019</h3>
		                        <h2>Épisode 1 : Se libérer de la tyrannie du mental</h2>
		                        <p>Passer de la frénésie de Wall Street à l’art de la méditation, c’est toute l’histoire de Jonathan Lehmann. Il nous parle ici du pouvoir du moment présent, de la différence entre plaisir et bonheur, et comment la pratique méditative permet de se dissocier de ses pensées. Jonathan raconte aussi son vécu avec la religion, son chemin vers la spiritualité et sa relation avec son père.</p>
		                        
		                        <iframe src="https://player.pippa.io/wakeupconversations/episodes/episode-1-jonathan-lehmann?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                    </div>

		                </div>
		                <!-- *** EPISODE 1 *** -->
		                <!--*******************-->
		                <!--*******************-->
		                <!-- ***  TEASER   *** -->
		                <div class="clearfix episode-wuconv">
		                    <div class="inside-episode jackette-episode">
		                        <img class="img-cover-episode" alt="cover épisodes wake up conversations podcast" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/cover-wuconv.jpg'; ?>">
		                        <div class="btn-plateformes">
		                            <a target="_blank" href="https://soundcloud.com/wakeupconversations/teaser">
		                                <img class="logos-plateformes" alt="logo soundcloud svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-soundcloud.svg'; ?>">
		                            </a>
		                            <a target="_blank" href="https://www.youtube.com/watch?v=T-yvSzKVVyY&feature=youtu.be">
		                                <img class="logos-plateformes" alt="logo youtube svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-youtube.svg'; ?>">
		                            </a>
		                            <a target="_blank" href="https://open.spotify.com/show/6QTX0cnp3u1XH4P1EE86ag">
		                                <img class="logos-plateformes" alt="logo spotify svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-spotify.svg'; ?>">
		                            </a>
		                            <a target="_blank" href="https://www.deezer.com/fr/show/391122">
		                                <img class="logos-plateformes" alt="logo deezer svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-deezer.svg'; ?>">
		                            </a>
		                            
		                            <a target="_blank" href="https://podcasts.apple.com/fr/podcast/bande-annonce/id1470047326?i=1000442664843">
		                                <img class="logos-plateformes" alt="logo apple podcast svg" src="<?php echo bloginfo('stylesheet_directory') . '/images/wuconv/logo-apple-podcast.svg'; ?>">
		                            </a>
		                        
		                            
		                        </div>
		                    </div>
		                    <div class="inside-episode details-episode">
		                        <h3>25 JUIN 2019</h3>
		                        <h2>Bande-annonce</h2>
		                        <p>Le premier épisode de WAKE UP Conversations sera en ligne le 5 juillet. Dans cette bande d'annonce, découvrez la raison pour laquelle nous avons créé ce podcast et devinez peut-être qui seront les premiers invités !</p>
		                        <iframe src="https://player.pippa.io/wakeupconversations/episodes/teaser?theme=custom&latest=1&primary=312053&background=ffffff" frameBorder="0" width="450px" height="140px" allow="autoplay"></iframe>

		                    </div>

		                </div>
		                <!-- ***  TEASER   *** -->
		                <!--*******************-->
		            </div>
                </div>
            </div>
        </section>

        <!-- **** SLIDE 1 *** -->
        <!--******************-->

        <!--*********************-->
        <!--******  MEDIAS ******-->

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

