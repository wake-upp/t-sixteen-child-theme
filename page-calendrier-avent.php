<?php
/**
 * Template Name: Podcast
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.3
 */
get_header(); ?>


<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-calendrier.css?v9" rel="stylesheet">


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
        background-color: #3B2A53;
    }

    .slide1 {
        background: url("<?php echo bloginfo('stylesheet_directory').'/images/CALENDRIER/motif-background.png';?>");
        background-repeat: repeat;
        background-color: #03E8FC;
    }
    .slide7 {
        background: url('<?php echo bloginfo('stylesheet_directory') . '/images/podcast/fond_canape.png'; ?>') no-repeat ; 
		background-size: cover;
		background-position: top ;
    }
    .slide6 {
        background: url('<?php echo bloginfo('stylesheet_directory') . '/images/podcast/bg_whatwework.jpg'; ?>') no-repeat ; 
        background-size: cover;
        background-position: top ;
    }
    @media screen and (max-width: 992px) {
        .slide6 {
            background: url('<?php echo bloginfo('stylesheet_directory') . '/images/podcast/bg_whatwework_vert.jpg'; ?>') no-repeat ; 
            background-size: cover;
            background-position: top ;
        }
    }

    .fenetre {

    }
    .fenetre1 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/1.jpg'; ?>') no-repeat ; }
    .fenetre2 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/2.jpg'; ?>') no-repeat ; }
    .fenetre3 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/3.jpg'; ?>') no-repeat ; }
    .fenetre4 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/4.jpg'; ?>') no-repeat ; }
    .fenetre5 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/5.jpg'; ?>') no-repeat ; }
    .fenetre6 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/6.jpg'; ?>') no-repeat ; }
    .fenetre7 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/7.jpg'; ?>') no-repeat ; }
    .fenetre8 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/8.jpg'; ?>') no-repeat ; }
    .fenetre9 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/9.jpg'; ?>') no-repeat ; }
    .fenetre10 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/10.jpg'; ?>') no-repeat ; }
    .fenetre11 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/11.jpg'; ?>') no-repeat ; }
    .fenetre12 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/12.jpg'; ?>') no-repeat ; }
    .fenetre13 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/13.jpg'; ?>') no-repeat ; }
    .fenetre14 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/14.jpg'; ?>') no-repeat ; }
    .fenetre15 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/15.jpg'; ?>') no-repeat ; }
    .fenetre16 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/16.jpg'; ?>') no-repeat ; }
    .fenetre17 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/17.jpg'; ?>') no-repeat ; }
    .fenetre18 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/18.jpg'; ?>') no-repeat ; }
    .fenetre19 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/19.jpg'; ?>') no-repeat ; }
    .fenetre20 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/20.jpg'; ?>') no-repeat ; }
    .fenetre21 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/21.jpg'; ?>') no-repeat ; }
    .fenetre22 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/22.jpg'; ?>') no-repeat ; }
    .fenetre23 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/23.jpg'; ?>') no-repeat ; }
    .fenetre24 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/24.jpg'; ?>') no-repeat ; }
    .fenetre25 { background: url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/25.jpg'; ?>') no-repeat ; }


 
    <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/style-backtotop.php') ?>

</style>


<div id="primary" class="content-area">
    <main id="main" class="site-main page-cours-audio" role="main">

        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/manifeste.php') ?>
        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fondateurs.php') ?>
        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/charte.php') ?>

        <div id="cover"></div>


        <!--******************-->
        <!--******************-->
        <!-- **** SLIDE 1 *** -->


        <section class="slide slide1 vertical-center">


                <div id="mainHeaderWrapper" class="clearfix">

                    <a href="<?php echo site_url(); ?>">
                        <img class="logo-wakeup" alt="logo-wake up"
                             src='<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/logo-triangle.png'; ?>'>
                    </a>

                    <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/menu-nav.php') ?>
                </div>

                <div class="titre-calendrier">
                    <img class="deco deco-right" alt="deco noel"
                             src='<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/right.png'; ?>'>
                    <h1>Calendrier de l'avent</h1>
                    <img class="deco deco-left" alt="deco noel"
                             src='<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/left.png'; ?>'>

                </div>
                <div class="titre2-calendrier">
                    <h2>du changement de carrière</h2>
                    <p>Tous les jours, retrouvez un extrait du <a href="<?php echo site_url();?>/cours-audio">cours audio</a> qui vous aide à trouver un job épanouissant.</p>
                </div>

                <div class="fenetres">

                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction1()" id="changeMe1" class="fenetre fenetre1 slide1-lineup">
                            <audio class="audio" id="music1" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/1erDecembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction2()" id="changeMe2" class="fenetre fenetre2 slide1-lineup">
                            <audio class="audio" id="music2" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/2decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction3()" id="changeMe3" class="fenetre fenetre3 slide1-lineup">
                            <audio class="audio" id="music3" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/3decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction4()" id="changeMe4" class="fenetre fenetre4 slide1-lineup">
                            <audio class="audio" id="music4" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/4decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction5()" id="changeMe5" class="fenetre fenetre5 slide1-lineup">
                            <audio class="audio" id="music5" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/5decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction6()" id="changeMe6" class="fenetre fenetre6 slide1-lineup">
                            <audio class="audio" id="music6" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/6decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction7()" id="changeMe7" class="fenetre fenetre7 slide1-lineup">
                            <audio class="audio" id="music7" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/7decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction8()" id="changeMe8" class="fenetre fenetre8 slide1-lineup">
                            <audio class="audio" id="music8" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/8decembre.mp3">
                            </audio>
                            <p class="audioWrapper" id="changeMe8" style="color:white; font-family:'Raleway-Bold';">10% offert<br>Code: 8decwu<br></p>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction9()" id="changeMe9" class="fenetre fenetre9 slide1-lineup">
                            <audio class="audio" id="music9" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/9decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction10()" id="changeMe10" class="fenetre fenetre10 slide1-lineup">
                            <audio class="audio" id="music10" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/10decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction11()" id="changeMe11" class="fenetre fenetre11 slide1-lineup">
                            <audio class="audio" id="music11" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/11decembre.mp3">
                            </audio>
                            <p class="audioWrapper" id="changeMe11" style="color:white; font-family:'Raleway-Bold';">10% offert<br>Code: 11decwu<br></p>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction12()" id="changeMe12" class="fenetre fenetre12 slide1-lineup">
                            <audio class="audio" id="music12" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/12decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction13()" id="changeMe13" class="fenetre fenetre13 slide1-lineup">
                            <audio class="audio" id="music13" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/13decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction14()" id="changeMe14" class="fenetre fenetre14 slide1-lineup">
                            <audio class="audio" id="music14" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/14decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction15()" id="changeMe15" class="fenetre fenetre15 slide1-lineup">
                            <audio class="audio" id="music15" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/15decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction16()" id="changeMe16" class="fenetre fenetre16 slide1-lineup">
                            <audio class="audio" id="music16" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/16decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction17()" id="changeMe17" class="fenetre fenetre17 slide1-lineup">
                            <audio class="audio" id="music17" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/17decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction18()" id="changeMe18" class="fenetre fenetre18 slide1-lineup">
                            <audio class="audio" id="music18" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/18decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction19()" id="changeMe19" class="fenetre fenetre19 slide1-lineup">
                            <audio class="audio" id="music19" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/19decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction20()" id="changeMe20" class="fenetre fenetre20 slide1-lineup">
                            <audio class="audio" id="music20" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/20decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction21()" id="changeMe21" class="fenetre fenetre21 slide1-lineup">
                            <audio class="audio" id="music21" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/21decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction22()" id="changeMe22" class="fenetre fenetre22 slide1-lineup">
                            <audio class="audio" id="music22" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/22decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction23()" id="changeMe23" class="fenetre fenetre23 slide1-lineup">
                            <audio class="audio" id="music23" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/23decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction24()" id="changeMe24" class="fenetre fenetre24 slide1-lineup">
                            <audio class="audio" id="music24" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/24decembre.mp3">
                            </audio>
                        </div>
                    </div>
                    <div id="clickMe" class="cursor-pointer">
                        <div onclick="myFunction25()" id="changeMe25" class="fenetre fenetre25 slide1-lineup">
                            <audio class="audio" id="music25" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/25decembre.mp3">
                            </audio>
                        </div>
                    </div>




                </div>

                <!--*********************-->
                <!-- ****** PRIX ******* -->

                <section class="carte-cadeau">
                    <a target="_blank" href="<?php echo site_url();?>/cours-audio?cadeau">
                        <img class="" alt="Bannière carte cadeau cours audio"
                             src='<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/animated_x-mas_banner(price).gif'; ?>'>
                    </a>
                    
                </section>

                <section class="prix-final">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="cadre-prix-2">
                                <h3>Cours audio + Recommandations de métiers</h3>
                                <h2 style="color:#03e8fc;">pour changer de job</h2>

                                <div class="bouton-slide-7">
                                    <a href="<?php echo site_url();?>/cours-audio">
                                        <button class="btn">Je découvre !</button>
                                    </a>
                                </div>
                            </div>  
                        </div>
              
                    </div>
                </section>
                
                <!-- ****** PRIX ******* -->
                <!--*********************-->
                


        </section>

        <!-- **** SLIDE 1 *** -->
        <!--******************-->
        <!--******************-->
        <!-- **** SLIDE 2 *** -->



        <!--*********************-->
        <!--******  MEDIAS ******-->

        <section id="slide-G" class="slide-G">
            <div class="container-fluid">
                <div>
                    <h2>Ils en parlent :</h2>
                </div>
                <div class="clearfix">
                    <div class="col-sm-3">
                        <a href="https://start.lesechos.fr/rejoindre-une-entreprise/conseils-carriere/reconversion-pro-un-podcast-a-offrir-pour-switcher-de-carriere-13590.php" target="_blank">
                            <img alt="Logo Les Echos Start" src="<?php echo bloginfo('stylesheet_directory').'/images/PRESSE/logo_les_echos_wake_up_transp.png';?>">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="https://www.marieclaire.fr/test-personnalite-boussole-carriere,1255278.asp" target="_blank">
                            <img alt="Logo Marie Claire HD" src="<?php echo bloginfo('stylesheet_directory').'/images/PRESSE/logo_marie_claire.png';?>">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="http://www.europe1.fr/emissions/pensees-positives/pensees-positives-25082018-3740435" target="_blank">
                            <img class="logo-ud" alt="Logo Europe1 HD" src="<?php echo bloginfo('stylesheet_directory').'/images/PRESSE/logo_europe1.png';?>">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="http://www.cosmopolitan.fr/,comment-changer-de-travail,1904913.asp" target="_blank">
                            <img alt="Logo Cosmopolitan WAKE UP" src="<?php echo bloginfo('stylesheet_directory').'/images/PRESSE/logo-cosmopolitan-wake-up.png';?>">
                        </a>
                    </div>
                    
                </div>
                
            </div>
        </section>
        
        <!--******  MEDIAS ******-->
        <!--*********************-->


    </main>
	
	
</div><!-- .content-area -->

<script type="text/javascript">
    jQuery(document).ready(function($){
      // browser window scroll (in pixels) after which the "back to top" link is shown
      var offset = 1000,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.carte-cadeau');

      //hide or show the "back to top" link
      $(window).scroll(function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('sticky') : $back_to_top.removeClass('');
      });

    });


    function myFunction1() {
        $('#changeMe1').addClass("audio-visible");
        $('#changeMe1').addClass("cursor-pointer");
        $('#changeMe1').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/1.png'; ?>')");
    };
    
    function myFunction2() {
        $('#changeMe2').addClass("audio-visible");
        $('#changeMe2').addClass("cursor-pointer");
        $('#changeMe2').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/2.png'; ?>')");
    };
    function myFunction3() {
        $('#changeMe3').addClass("audio-visible");
        $('#changeMe3').addClass("cursor-pointer");
        $('#changeMe3').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/3.png'; ?>')");
    };
    function myFunction4() {
        $('#changeMe4').addClass("audio-visible");
        $('#changeMe4').addClass("cursor-pointer");
        $('#changeMe4').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/4.png'; ?>')");
    };

    function myFunction5() {
        $('#changeMe5').addClass("audio-visible");
        $('#changeMe5').addClass("cursor-pointer");
        $('#changeMe5').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/5.png'; ?>')");
    };

    function myFunction6() {
        $('#changeMe6').addClass("audio-visible");
        $('#changeMe6').addClass("cursor-pointer");
        $('#changeMe6').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/6.png'; ?>')");
    };

    function myFunction7() {
        $('#changeMe7').addClass("audio-visible");
        $('#changeMe7').addClass("cursor-pointer");
        $('#changeMe7').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/7.png'; ?>')");
    };

    function myFunction8() {
        $('#changeMe8').addClass("audio-visible");
        $('#changeMe8').addClass("cursor-pointer");
        $('#changeMe8').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/8.png'; ?>')");
    };

    function myFunction9() {
        $('#changeMe9').addClass("audio-visible");
        $('#changeMe9').addClass("cursor-pointer");
        $('#changeMe9').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/9.png'; ?>')");
    };

    function myFunction10() {
        $('#changeMe10').addClass("audio-visible");
        $('#changeMe10').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/10.png'; ?>')");
    };
    function myFunction11() {
        $('#changeMe11').addClass("audio-visible");
        $('#changeMe11').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/11.png'; ?>')");
    };
    function myFunction12() {
        $('#changeMe12').addClass("audio-visible");
        $('#changeMe12').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/12.png'; ?>')");
    };
    function myFunction13() {
        $('#changeMe13').addClass("audio-visible");
        $('#changeMe13').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/13.png'; ?>')");
    };
    function myFunction14() {
        $('#changeMe14').addClass("audio-visible");
        $('#changeMe14').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/14.png'; ?>')");
    };
    function myFunction15() {
        $('#changeMe15').addClass("audio-visible");
        $('#changeMe15').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/15.png'; ?>')");
    };
    function myFunction16() {
        $('#changeMe16').addClass("audio-visible");
        $('#changeMe16').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/16.png'; ?>')");
    };
    function myFunction17() {
        $('#changeMe17').addClass("audio-visible");
        $('#changeMe17').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/17.png'; ?>')");
    };

    function myFunction18() {
        $('#changeMe18').addClass("audio-visible");
        $('#changeMe18').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/18.png'; ?>')");
    };
    function myFunction19() {
        $('#changeMe19').addClass("audio-visible");
        $('#changeMe19').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/19.png'; ?>')");
    };
    function myFunction20() {
        $('#changeMe20').addClass("audio-visible");
        $('#changeMe20').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/20.png'; ?>')");
    };
    function myFunction21() {
        $('#changeMe21').addClass("audio-visible");
        $('#changeMe21').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/21.png'; ?>')");
    };
    function myFunction22() {
        $('#changeMe22').addClass("audio-visible");
        $('#changeMe22').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/22.png'; ?>')");
    };
    function myFunction23() {
        $('#changeMe23').addClass("audio-visible");
        $('#changeMe23').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/23.png'; ?>')");
    };
    function myFunction24() {
        $('#changeMe24').addClass("audio-visible");
        $('#changeMe24').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/24.png'; ?>')");
    };
    function myFunction25() {
        $('#changeMe25').addClass("audio-visible");
        $('#changeMe25').css('background-image', "url('<?php echo bloginfo('stylesheet_directory') . '/images/CALENDRIER/FENETRES/25.png'; ?>')");
    };




</script>

<?php get_footer(); ?>