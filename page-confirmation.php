<?php
/**
 * Template Name: Podcast
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.3
 */
get_header(); ?>

<style type="text/css">
    html { 
      background: url('<?php echo bloginfo('stylesheet_directory').'/images/background-confirmation-2.png';?>') no-repeat center center fixed; 
      -webkit-background-size: cover !important;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      position: relative;
      height: 100%;
    }

</style>

<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-confirmation.css?v02" rel="stylesheet">

<div id="primary" class="content-area page-confirmation">
    <main id="main" class="site-main" role="main">

        <div class="message-confirmation">

            <?php 
                if($_GET['choix']=="8h")
                {
                ?>
                    <h1>Merci ! <br>C'est bien noté pour 8h.</h1>

                    <h2>Nous aussi on est matinaux.</h2>
                    
                    <div style="width:100%;height:0;padding-bottom:66%;position:relative;"><iframe src="https://giphy.com/embed/TDLOCATcExXAm24MPm" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                <?php
                }

                else if ($_GET['choix']=="19h") {
                ?>
                     <h1>Merci ! <br>C'est bien noté pour 19h.</h1>

                     <h2>Juste avant le dîner, parfait.</h2>
                     
                     <div style="width:100%;height:0;padding-bottom:69%;position:relative;"><iframe src="https://giphy.com/embed/5t235Nf4wo3rhLSMVy" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                <?php
                }

                else if ($_GET['choix']=="yes") {
                ?>
                     <h1>YES !</h1>



                     <h2>Gardez la pêche.</h2>
                     
                     <div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/l0IylDbgZ9UBb0Boc" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                <?php
                }

                else if ($_GET['choix']=="bof") {
                ?>
                     <h1>Allez.</h1>

                     <h2>Je suis sûr que vous pouvez être plus enthousiaste.</h2>
                     
                     <div style="width:100%;height:0;padding-bottom:100%;position:relative;"><iframe src="https://giphy.com/embed/cIWzCGJ2FyDhgvXTcP" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                <?php
                }
                else if ($_GET['choix']=="okmc") {
                ?>
                     <h1>YES !</h1>



                     <h2>À demain :)</h2>
                     
                     <div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/3oz8xOb1wcW98tr3jy" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                <?php
                }

                else if ($_GET['choix']=="nomc") {
                ?>
                     <h1>Oh..</h1>

                     <h2>On a quand même bien envie de vous rencontrer. <a href="https://www.eventbrite.fr/e/billets-morning-careers-5-55215179087">Inscrivez-vous ici</a> à la prochaine édition !</h2>
                     
                     <div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/xT9DPsaooCwWMHyydO" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                <?php
                }

                else if ($_GET['choix']=="e03seq2yes") {
                ?>
                     <h1>Allez.</h1>

                     <h2>À votre [plume] clavier.</h2>
                     
                     <div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/y8rtj0fF5S66Q" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                <?php
                }
                else if ($_GET['choix']=="e03seq2already") {
                ?>
                     <h1>Wow !</h1>

                     <h2>Déjà ?</h2>
                     
                     <div style="width:100%;height:0;padding-bottom:42%;position:relative;"><iframe src="https://giphy.com/embed/l1IYb4JzUR3TFLZzq" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                <?php
                }
                else if ($_GET['choix']=="e03seq2no") {
                ?>
                     <h1>Okok.</h1>

                     <h2>Pas de soucis.</h2>
                     
                     <div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/5ztVvspBlHRqayDwof" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                <?php
                }
                else if ($_GET['choix']=="e04seq2yes") {
                ?>
                     <h1>Belle décision.</h1>

                     <h2>On est fiers de vous.</h2>
                     
                     <div style="width:100%;height:0;padding-bottom:104%;position:relative;"><iframe src="https://giphy.com/embed/NEvPzZ8bd1V4Y" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                <?php
                }
                else if ($_GET['choix']=="e05seq2bravo") {
                ?>
                     <h1>Vous êtes adorable.</h1>

                     <h2>On se retrouve sur <a target="_blank" href="https://www.linkedin.com/school/wakeup-io/">Linkedin</a> et sur <a target="_blank" href="https://www.instagram.com/wakeup_io/">Instagram</a> pour suivre notre quotidien.</h2>
                     
                     <div style="width:100%;height:0;padding-bottom:61%;position:relative;"><iframe src="https://giphy.com/embed/yoJC2El7xJkYCadlWE" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                <?php
                }
             ?>

            
        </div>
    </main>
</div>

</div><!-- .site-content -->
</div><!-- .site-inner -->
</div><!-- .site -->

</body>
</html>