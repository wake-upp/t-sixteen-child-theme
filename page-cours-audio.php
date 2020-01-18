<?php
/**
 * Template Name: Podcast
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.3
 */
get_header(); ?>

<!--PROOF PIXEL--><script src="https://cdn.useproof.com/proof.js?acc=T1mejngLlsWYXgOAHwqt9xhFf9w2" async></script><!--END PROOF PIXEL-->

<script>
  fbq('track', 'ViewContent', {
    value: 49.17,
    currency: 'EUR',
    content_ids: 'metiers-personnalite',
    content_type: 'cours-audio',
  });
</script>


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


<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/podcast.css?v19" rel="stylesheet">
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
        background: url("<?php echo bloginfo('stylesheet_directory').'/images/podcast/bg_podcast.jpg';?>");
        background-repeat: no-repeat;
        background-position: top center;
        background-size: cover;
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
    .noel {
        background-image: url('<?php echo bloginfo('stylesheet_directory') . '/images/podcast/motif-noel.png'; ?>') ; 
        background-repeat: repeat-x;
        background-position: center center ;
    }
    @media screen and (max-width: 992px) {
        .slide6 {
            background: url('<?php echo bloginfo('stylesheet_directory') . '/images/podcast/bg_whatwework_vert.jpg'; ?>') no-repeat ; 
            background-size: cover;
            background-position: top ;
        }
    }

    .video-teasing {
        background: url('<?php echo bloginfo('stylesheet_directory') . '/images/podcast/bg-video.jpg'; ?>') no-repeat ; 
        background-size: cover;
        background-position: top ;
    }
 

    <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/style-backtotop.php') ?>

</style>


<?php 
    if(isset($_GET['speseq2']))
    {
        if($_GET['utm_campaign']=="e06-8h") {
            include('wp-content/themes/t-sixteen-child-theme/myphpfiles/podcast-teasing-8h.php');
        }
        else {
            include('wp-content/themes/t-sixteen-child-theme/myphpfiles/podcast-teasing-19h.php');
        }
    }
    else if (isset($_GET['teaseq3']))
    {   
        include('wp-content/themes/t-sixteen-child-theme/myphpfiles/podcast-invitation-teasing.php');
    }
    else if (isset($_GET['exkz23xll']))
    {   
        include('wp-content/themes/t-sixteen-child-theme/myphpfiles/podcast-invitation-teasing.php');
    }
    else if (isset($_GET['fecczdev']))
    {   
        include('wp-content/themes/t-sixteen-child-theme/myphpfiles/podcast-seq4-launch.php');
    }
    else if (isset($_GET['invitation-dezd0eppc']))
    {   
        include('wp-content/themes/t-sixteen-child-theme/myphpfiles/podcast-viralite-intro.php');
    }
    else if (isset($_GET['parrainage']))
    {   
        include('wp-content/themes/t-sixteen-child-theme/myphpfiles/podcast-viralite-parrain.php');
    }
    else if (isset($_GET['dev']))
    {   
        include('wp-content/themes/t-sixteen-child-theme/myphpfiles/podcast-invitation-teasing.php');
    }
    else if (isset($_GET['lnch']))
    {   
        
        include('wp-content/themes/t-sixteen-child-theme/myphpfiles/podcast-inscriptions-closes.php');
    }
    else if (isset($_GET['cadeau']))
    {   
        ?>
        	<script>
        	    setTimeout(function() {
        	      window.location.href = "https://boussole.wake-up.io/cours-audio/monpodcast/inscription?code=on";
        	    }, 500);
        	</script>

        <?php
    }
    else {

        include('wp-content/themes/t-sixteen-child-theme/myphpfiles/podcast-normal.php');
    }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>
$('ul.episodes li').click(function(e) {
    e.preventDefault();

    if (screen.width > 2000) {
        $("ul.episodes li").not(this).removeClass("jaunerev").addClass("hideli");
    }
    
    
    if($(this).hasClass("jaunerev")){
        $(this).removeClass("jaunerev").addClass("hideli");
    }
    else{
    $(this).removeClass("hideli").addClass("jaunerev");
    }
})

$('ul.faq li').click(function(e) {
    e.preventDefault();

    if (screen.width > 2000) {
        $("ul.episodes li").not(this).removeClass("jaunerev").addClass("hideli");
    }
    
    
    if($(this).hasClass("jaunerev")){
        $(this).removeClass("jaunerev").addClass("hideli");
    }
    else{
    $(this).removeClass("hideli").addClass("jaunerev");
    }
})

</script>


<?php get_footer(); ?>




