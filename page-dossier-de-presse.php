<?php
/**
 * Template Name: Podcast
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.3
 */
get_header(); ?>
<!---- GOOGLE STRUCTURED DATA ---->
<!-------------------------------->

<script>
    setTimeout(function() {
      window.location.href = "https://www.wake-up.io/wp-content/themes/t-sixteen-child-theme/documents/PRESSE/DOSSIER/Dossier-Presse-WAKE-UP-Sept2019.pdf";
    }, 2000);
</script>

<!---- GOOGLE STRUCTURED DATA ---->
<!-------------------------------->


<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/podcast.css?v02" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mkhplayer.default.css"/>
<style type="text/css">
    @font-face {
        font-family: "Extra Bold Raleway";

        src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-ExtraBold.ttf';?>');
    }

    @font-face {
        font-family: "Black Raleway";

        src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Black.ttf';?>');
    }

    @font-face {
        font-family: "Thin Raleway";

        src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Thin.ttf';?>');
    }

    @font-face {
        font-family: "Medium Raleway";

        src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Medium.ttf';?>');
    }

    @font-face {
        font-family: "Bold Raleway";
        src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway-Bold.ttf';?>');
    }

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
        src: url('<?php echo bloginfo('stylesheet_directory').'/fonts/Raleway/Raleway.ttf';?>');
    }

    body {
        font-family: "Raleway", Helvetica, Arial, sans-serif !important;
        background-color: #3B2A53;
    }

    .slide1 {
        background: url("<?php echo bloginfo('stylesheet_directory').'/images/podcast/bg_podcast.jpg';?>");
        background-repeat: no-repeat;
        background-position: top center;
        background-size: cover;
    }

    }
 

    <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/style-backtotop.php') ?>

</style>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/manifeste.php') ?>
        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fondateurs.php') ?>
        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/charte.php') ?>

        <div id="cover"></div>


        <!-- **** SLIDE 1 *** -->
        <!--******************-->
        <!--******************-->


        <section class="slide slide1 vertical-center">


            <div class="container-fluid">

                <div id="mainHeaderWrapper" class="clearfix">

                    <a href="<?php echo site_url(); ?>">
                        <img class="logo-wakeup" alt="logo-wake up"
                             src='<?php echo bloginfo('stylesheet_directory') . '/images/HOMEPAGE/logo-wake-up.png'; ?>'>
                    </a>


                    <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/menu-nav.php') ?>

                </div>
                <div class="clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slide1-lineup">

                        <h1>Dossier de presse</h1>
                        <div class="bouton-slide-1">
                            <a href="https://www.wake-up.io/wp-content/themes/t-sixteen-child-theme/documents/PRESSE/DOSSIER/Dossier-Presse-WAKE-UP-Fev2019.pdf">
                                <button class="btn btnred">Accéder au dossier presse</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
	
	
</div><!-- .content-area -->


<?php get_footer(); ?>


