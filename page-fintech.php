<?php
/**
 * Template Name: Page Fintech
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
  "@type": "Course",
  "name": "Formation Fintech à Paris",
  "description": "Certification sur les enjeux économiques, technologiques et humains du secteur Fintech",
  "provider": {
      "@type": "Organization",
      "name": "WAKE UP",
      "sameAs": "https://www.wake-up.io"
   }
}
</script>

<!---- GOOGLE STRUCTURED DATA ---->
<!-------------------------------->

<?php 
    if(isset($_GET['devep']))
    {
    	include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fintech-dev.php');
    }
    else {

        include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fintech-prod.php');
    }
?>

<?php get_footer(); ?>