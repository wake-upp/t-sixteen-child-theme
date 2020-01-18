
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-carousel.css?v1" rel="stylesheet">

<style type="text/css">
	
	.slide-A {
		position: relative;
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>');
		background-size: 1399px 727px;
	}
	.moz-all {
		position: relative;
		background-size: cover;
		background-position: center bottom;
	}
	.moz-1 {
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/MOZAIQUE/moz-1.JPG';?>');
		background-position: left bottom;
	}
	.moz-2 {
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/MOZAIQUE/moz-2.JPG';?>');
		background-position: center bottom;
	}
	.moz-3 {
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/MOZAIQUE/moz-3.JPG';?>');
		background-position: center center;
	}
	.moz-4 {
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/MOZAIQUE/moz-4.JPG';?>');
	}
	.moz-5 {
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/MOZAIQUE/moz-5.JPG';?>');
	}
	.moz-6 {
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/MOZAIQUE/moz-6.JPG';?>');
	}

	.force-1 {
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/force-1.jpg';?>');
		position: relative;
		background-size: cover;
		background-position: left bottom;
	}
	.force-2 {
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/force-2.jpg';?>');
		position: relative;
		background-size: cover;
		background-position: left bottom;
	}
	.force-3 {
		background: no-repeat top center url('<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/force-3.jpg';?>');
		position: relative;
		background-size: cover;
		background-position: left center;
	}

	/** INSCRIPTIONS CLOSES**/
	.page-fintech a.cta-slide-A {
	  color: #ffffff;
	  border-radius: 10px;
	  background-color: #FF0054;
	  -webkit-transition: all .2s ease-in-out;
	}

	/** 2nd CTA **/
	.page-fintech .row-candidature a {
	      color: #ffffff;
	      border-radius: 10px;
	      background-color: #FF0054;
	      -webkit-transition: all .2s ease-in-out;
	}
	/** INSCRIPTIONS CLOSES**/



	@media screen and (max-width: 930px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>') 50% / 100%;
		    background-size: 1100px 572px;
		}
	}
	@media screen and (min-width: 1399px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>') 50% / 100%;
		    background-size: 1585px 824px;
		}
	}
	@media screen and (min-width: 1585px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>') 50% / 100%;
		    background-size: 1750px 909px;
		}
	}
	@media screen and (min-width: 1750px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>') 50% / 100%;
		    background-size: 1920px 998px;
		}
	}
	@media screen and (min-width: 1921px) {
		.slide-A{
		    position:relative;
		    background: no-repeat url('<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>') 50% / 100%;
		    background-size: 2200px 1143px;
		}
	}
	@media screen and (max-width: 760px) { 
		.bg-chart-stats {
			background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/chart-stats-no-arrow.svg';?>'); background-repeat:no-repeat; background-size: contain; background-position: top;
		}
	} 
	<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/style-backtotop.php') ?>
	
</style>

<!-- Pixel Event : Visite Programme & AddToCart -->
<script>

  fbq('track', 'ViewContent', {

    content_ids: 'ProgrammeFintech',

    content_type: 'Product',

  });

  function boutonpostulez () {
  	fbq('track', 'AddToCart',
  		{ 
  			content_ids: 'ProgrammeFintech',
  			content_type: 'Product'
  		});
  }

</script>
<!-- End Pixel Event : Visite Programme -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("November 7, 2019 21:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var heures = Math.floor(distance / (1000 * 60 * 60 ));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  /*document.getElementById("demo").innerHTML = days + " jours et " + hours + " heures";*/

  document.getElementById("jours").innerHTML = days;
  document.getElementById("heures").innerHTML = hours;
  /*document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("secondes").innerHTML = seconds;*/
  
    
  //If the count down is over, write some text 
  if (distance < 0) {
    	clearInterval(x);
  	}
	}, 1000);

</script>

<script type="text/javascript">

    $(document).scroll(function() {
      var y = $(this).scrollTop();
      if (y > 1000) {
        $('.bottomMenu').fadeIn();
      } else {
        $('.bottomMenu').fadeOut();
      }
      
      if ($(window).width() < 540) {
      	if (y > 1600) {
        $('.chiffres').fadeOut();
        $('.tohide').fadeOut();
        $('.tohide-2').fadeOut();
      } else {
        $('.chiffres').fadeIn();
        $('.tohide').fadeIn();
        $('.tohide-2').fadeIn();
      }
      }
      
    });
</script>


<div class="bottomMenu">
	<p class="countdown-cta">

		<p class="tohide-2">Clôture des inscriptions dans : </p> <p class="chiffres" id="jours"></p> <p class="tohide-2" style="display: inline-block;"> jours </p> <p class="chiffres" id="heures"></p> <p class="tohide">h </p> <!--<p class="chiffres" id="minutes"></p> <p class="tohide">min</p> <p class="chiffres" id="secondes"></p> <p class="tohide">s</p> <p class="countdown-cta"> --> <a style="color:white" id="vu-inscrire-3" href="https://www.wake-up.io/inscription-programme-fintech/">&nbspInscrivez-vous maintenant !</a></p>
	</p>

</div>


<div id="primary" class="content-area page-fintech">
	<main id="main" class="site-main" role="main">

		<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fondateurs.php') ?>

		<div id="cover"></div>


		<!---------------------------------->
		<!---------------------------------->
		<!---------------------------------->
		<!------------- LANDING ------------>
		<?php 
		    if(isset($_GET['list']))
		    {
		    	?>
		    	
		    	<div class="attente-fintech">
		    		<h2>Merci. Votre inscription à la liste d'attente est confirmée.</h2>
		    	</div>

		    	<?php
		    }
		?>
		
		<section id="slide-A" class="slide-A">
		
			<div id="mainHeaderWrapper" class="container-fluid">
				<img src="<?php echo bloginfo('stylesheet_directory').'/images/bg-A.png';?>">
				<div class="clearfix">
					<div class="col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
						<a href="<?php echo site_url();?>">
							<img class="logo-wakeup-fintech" alt="logo-wake up" src='<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/logo-wake-up.png';?>'>
						</a>
					</div>
				</div>

				<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/menu-nav.php') ?>

			    <div class="cta-container">

			    	<h1 class="titre-slide-A">Le programme <span style="color:#03E8FC">Fintech</span></h1>

			    	<h2>Vivez la Fintech de l'intérieur</br>et faites évoluer votre carrière.</h2>
			   		<div>
			   			<a id="vu-inscrire-1" class="cta-slide-A" href="https://www.wake-up.io/inscription-programme-fintech/">
			   				Je m'inscris !
						</a>

			   		</div>
			   	</div>


			</div>
		</section>


		<!------------- LANDING ------------>
		<!---------------------------------->
		<!---------------------------------->
		<!-------------- INTRO ------------->


		<section class="slide2">
			<div class="container-fluid container-slide2">
			    <div class="clearfix row-slide-2 middle-container">
			        <div class="col-xs-12 col-sm-5 col-sm-offset-1 middle-text">
			        	<div class="txt-canards clearfix">

				        	<h2 style="color:#fff; font-family: 'Raleway-Bold'; margin-bottom:1em;">Vous êtes différent
<br><span style="color:#000;">montrez-le.</span></h2>

				        	<p style="font-family: 'Raleway-Bold';">
					        	Vous avez mille idées à la seconde ? L’envie d’améliorer le système financier pour qu’il ait plus de sens ?
				        	</p>
				        	<p>
				        		Ce programme est fait pour vous transmettre l’état d’esprit des entrepreneurs et des acteurs qui changent la donne. Ils vous montreront que tout est possible et que vos idées nouvelles peuvent avoir un impact concret dans votre carrière.
				        	</p>
			        	</div>
			        	
			        </div>
			        <div class="clearfix wave-bottom">
			        		<img src='<?php echo bloginfo('stylesheet_directory').'/images/wave.png';?>'>
			        </div>
			        <div class="col-xs-12 col-sm-7 canards-container middle-text">
			        	<img class="canards" src='<?php echo bloginfo('stylesheet_directory').'/images/canards.png';?>'>
			        	<img class="canards-ban" src='<?php echo bloginfo('stylesheet_directory').'/images/canards-ban.png';?>'>
			        </div>
			    </div>
			</div>
		</section>


		<!-------------- INTRO ------------->
		<!---------------------------------->
		<!---------------------------------->
		<!-------------- PROFS ------------->


		<section class="slide3" style="
		background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/background-slide3-v2.png';?>'); background-repeat:no-repeat; background-size: auto 100%; background-position: center; ">

			<div class="container-fluid">
			    <div class="row header-slide3">
			        <div class="col-sm-3 title-slide3">
			        	<p>Ils seront vos profs</p>
			        </div>
			        <div class="col-sm-7 subtitle-slide3">
			        	Une rencontre peut changer une vie. Côtoyez pendant un mois celles et ceux pour qui rien n’est impossible.
			        </div>
			        <div class="col-sm-2"></div>
			    </div>
			    <div class="row content-slide3">
			    	<div class="row row-teachers">
			    		<div class="col-sm-3 col-xs-6 item-teacher">
			    			<div class="photo-teacher">
			    				<a target="_blank">
			    				<img alt="Céline Lazorthes WAKE UP Fintech" src='<?php echo bloginfo('stylesheet_directory').'/images/profs/celine-lazorthes.png';?>'>
			    				</a>
			    			</div>
			    			<div class="desc-teacher">
			    				<h5>Céline Lazorthes</h5>
			    				<p>CEO - Leetchi & Mangopay</p>
			    			</div>
			    		</div>
			    		<div class="col-sm-3 col-xs-6 item-teacher">
			    			<div class="photo-teacher">
			    				<a target="_blank">
			    				<img alt="Bertrand Badré WAKE UP Fintech" src='<?php echo bloginfo('stylesheet_directory').'/images/profs/bertrand-badre.png';?>'>
			    				</a>
			    			</div>
			    			<div class="desc-teacher">
			    				<h5>Bertrand Badré</h5>
			    				<p>Ex DG - Banque Mondiale</p>
			    			</div>
			    		</div> 
			    		<div class="col-sm-3 col-xs-6 item-teacher">
			    			<div class="photo-teacher">
			    				<a target="_blank">
			    				<img alt="Olivier Goy WAKE UP Fintech" src='<?php echo bloginfo('stylesheet_directory').'/images/profs/olivier-goy.png';?>'>
			    				</a>
			    			</div>
			    			<div class="desc-teacher">
			    				<h5>Olivier Goy</h5>
			    				<p>CEO - Lendix</p>
			    			</div>
			    		</div>
			    		<div class="col-sm-3 col-xs-6 item-teacher">
			    			<div class="photo-teacher">
			    				<a target="_blank">
			    				<img alt="Christophe Martins WAKE UP Fintech" src='<?php echo bloginfo('stylesheet_directory').'/images/profs/christophe-martins.png';?>'>
			    				</a>
			    			</div>
			    			<div class="desc-teacher">
			    				<h5>Christophe Martins</h5>
			    				<p>Directeur Général - Linxo</p>
			    			</div>
			    		</div>
			    	</div>
			    	<div class="row row-teachers row-teachers-2">


			    		<div class="col-sm-3 col-xs-6 item-teacher item-teacher-first">
			    			<div class="photo-teacher">
				    				<a target="_blank">
				    				<img alt="Eric Larcheveque HD WAKE UP Fintech" src='<?php echo bloginfo('stylesheet_directory').'/images/profs/eric-larcheveque-2.png';?>'>
				    				</a>
				    			</div>
				    			<div class="desc-teacher">
				    				<h5>Eric Larcheveque</h5>
				    				<p>CEO - Ledger</p>
				    			</div>
			    		</div>
			    		
			    		<div class="col-sm-3 col-xs-6 item-teacher">
			    			<div class="photo-teacher">
			    				<a target="_blank">
			    				<img alt="Caroline Lamaud WAKE UP Fintech" src='<?php echo bloginfo('stylesheet_directory').'/images/profs/caroline-lamaud.png';?>'>
			    				</a>
			    			</div>
			    			<div class="desc-teacher">
			    				<h5>Caroline Lamaud</h5>
			    				<p>Cofounder - Anaxago</p>
			    			</div>

			    		</div>
			    		<div class="col-sm-3 col-xs-6 item-teacher">
			    			<div class="photo-teacher">
			    				<a target="_blank">
			    				<img alt="Jean-Charles Samuelian WAKE UP Fintech" src='<?php echo bloginfo('stylesheet_directory').'/images/profs/jean-charles-samuelian.png';?>'>
			    				</a>
			    			</div>
			    			<div class="desc-teacher">
			    				<h5>Jean-Charles Samuelian</h5>
			    				<p>CEO - Alan Assurance</p>
			    			</div>
			    		</div>
			    		
			    		<div class="col-sm-3 col-xs-6 item-teacher">

			    			<div class="photo-teacher">
			    				<a target="_blank">
			    				<img alt="Zakaria Laguel WeSave WAKE UP Fintech" src='<?php echo bloginfo('stylesheet_directory').'/images/profs/zakaria-laguel-2.png';?>'>
			    				</a>
			    			</div>
			    			<div class="desc-teacher">
			    				<h5>Zakaria Laguel</h5>
			    				<p>CEO - WeSave</p>
			    			</div>

			    		</div>
			    		
			    	</div>

			    </div>
			    <!--
			    <div class="row-all-teachers" >
			    		<a href="https://www.wake-up.io/wp-content/themes/t-sixteen-child-theme/documents/WAKE UP - Les profs de la saison 8.pdf" target="_blank" >
				        	<div class="btn cta-profs">
				        		<h3>Voir tous les profs de la saison 8</h3>
				        	</div>
			        	</a>
			    </div>
				-->
			</div>
		</section>


		<!-------------- PROFS ------------->
		<!---------------------------------->
		<!---------------------------------->
		<!------------ PROGRAMME ----------->


		<section class="slide5" style="
		background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/bg-photo.png';?>'); background-repeat:no-repeat; background-size: cover; background-position: top; ">
			<div class="container-fluid">
			    <div class="row header-slide5">
			        <div class="col-md-8 col-md-offset-2">
			        	<h2>Au programme</h2>
			        </div>
			    </div>
			    <div class="clearfix intro-programme">
			    	<div class="col-sm-8">
			    		<h3>Plongez au coeur de la création Fintech</h3>
			    		<p>Ce programme fondé en 2016 est une immersion dans la réalité concrète de la création d’une entreprise Fintech. <a id="vu-afb" target="_blank" href="http://www.intercariforef.org/formations/certification-sur-les-enjeux-economiques-technologiques-et-humains-du-secteur-fintech/certification-96497.html"> Sountenue par l'Association Française des Banques</a>, <strong>la formation a été conçue comme un MBA accéléré</strong> pour vous transmettre non seulement l’état d’esprit entrepreneurial, mais aussi des connaissances sur les business modèles, l’acquisition en ligne et les nouvelles méthodes de management.</p>
			    	</div>
			    	<div class="col-sm-4 hidden-md-down banane-prog" style="text-align: center;">
			    		<img alt="Plongeur Banane WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/diver.svg';?>'>
			    	</div>

			    	<div class="prog-360">
			    		<img class="hidden-small" alt="360° MBA Fintech" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/Fintech_360_v2.svg';?>'>
			    		<img class="visible-small" alt="360° MBA Fintech" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/Fintech_360_circle.png';?>'>
			    	</div>
			    </div>

			    <div class="clearfix planning-img">
			    	<div class="hidden-sm-down">
			    		<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/planning.php'); ?>
			    	</div>
			    	<div class="hidden-sm-up">
			    		<?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/planning-vertical.php'); ?>
			    	</div>
			    </div>

			    <div class="clearfix cadres">
			    	<div class="col-sm-6">
			    		<div class="cadre-jaune1">
				    		<a class="titre-cadre">SAMEDI 1 : Les game changers</a>
				    		<ul>
				    			<li>
				    				L’histoire d’une révolution technologie et humaine.
				    			</li>

				    			<li>Innover avec la réglementation, c’est possible.</li>

				    			<li>Une startup qui vaut plus qu’une banque ?</li>

				    			<li>Ce qu’il faut pour dépoussiérer le monde de l’assurance.</li>

				    		</ul>
			    		</div>
			    	</div>
			    	<div class="col-sm-6">
			    		<div class="cadre-jaune2">
			    			<a class="titre-cadre">SAMEDI 2 : Partir d'une feuille blanche</a>
				    		<ul>
				    			<li>
				    				Atelier : l’intuition et la créativité, ça se travaille.
				    			</li>
				    			<li>Comment bousculer un marché de l’investissement immobilier à 30 Md€ ?</li>
				    			<li>Atelier : on code !</li>
				    			<li>À 40 ans, il repart de zéro et devient leader de son marché. Le cas October (ex Lendix).</li>
				    		</ul>
				    		
			    		</div>
			    	</div>
			    	    	<div class="col-sm-6">
			    	    		<div class="cadre-jaune1">
			    		    		<a class="titre-cadre">SAMEDI 3 : Devenir grand, c’est exceller</a>
			    		    		<ul>
			    		    			<li>
			    		    				Comment passer de zéro à 50 000 clients ? Growth, automation et funnel d’acquisition.
			    		    			</li>

			    		    			<li>Atelier UX : l’importance d’être centré sur ses utilisateurs.</li>

			    		    			<li>Le time to market chez les robo-advisors est (enfin) arrivé.</li>

			    		    			<li>Atelier : si vous n’existez pas en ligne, vous n’existez pas hors ligne.</li>

			    		    		</ul>
			    	    		</div>
			    	    	</div>
			    	    	<div class="col-sm-6">
			    	    		<div class="cadre-jaune2">
			    	    			<a class="titre-cadre">SAMEDI 4 : L’avenir de la Finance</a>
			    		    		<ul>
			    		    			<li>
			    		    				Mythes & réalités sur l’IA. Les enjeux humains d’une IA bien pensée.
			    		    			</li>
			    		    			<li>La blockchain-bitcoin, au delà des buzzwords, une révolution sociale.</li>
			    		    			<li>Des milliards d’euros pour la planète. Un investissement rentable ?</li>
			    		    			<li>Quels types psychologiques pour créer des équipes complémentaires ?</li>
			    		    		</ul>
			    		    		
			    	    		</div>
			    	    	</div>
			    </div>

			    <div class="row-program">
			    	<a id="vu-programme" target="_blank" href="https://www.wake-up.io/wp-content/themes/t-sixteen-child-theme/documents/PROGRAMME-Fintech-2020.pdf">
				        <div id="vu-programme" class="btn cta-program">
				        	<h3 id="vu-programme" >Voir le programme 2020</h3>
				        </div>
			        </a>
			    </div>

			</div>
		</section>


		<!------------ PROGRAMME ----------->
		<!---------------------------------->
		<!--*********************-->
		<!--*****  MOZAIQUE *****--

		<section class="mozaique-fintech">
			<div class="container-fluid">
				<div class="clearfix">
					<div class="col-md-2 moz-all moz-1"></div>
					<div class="col-md-2 moz-all moz-2"></div>
					<div class="col-md-2 moz-all moz-3"></div>
					<div class="col-md-2 moz-all moz-4"></div>
					<div class="col-md-2 moz-all moz-5"></div>
					<div class="col-md-2 moz-all moz-6"></div>
				</div>
			</div>
		</section>

		<!--*****  MOZAIQUE *****-->
		<!--*********************-->
		<!---------------------------------->
		<!------------- RAISONS ------------>
		

		<section class="slide4">
			<div class="container-fluid">
			    <div class="row header-slide4">
			        <div class="col-md-8 col-md-offset-2">
			        	<h2>Cette formation est faite pour <span style="color:#ff0054 ">VOUS</span> si vous souhaitez :</h2>
			        </div>
			    </div>
			    <div class="row ico-row1">
			    	<div class="col-sm-5 col-sm-offset-1 rowi">
			    		<img class="ico-slide4" src='<?php echo bloginfo('stylesheet_directory').'/images/talents.png';?>'>
			    		<h3>Ouvrir le champ des possibles</h3>
			    	</div>
			    	<div class="col-sm-5 col-sm-offset-right-1">
			    		<img class="ico-slide4" src='<?php echo bloginfo('stylesheet_directory').'/images/mindset.png';?>'>
			    		<h3>Travailler votre growth-mindset</h3>
			    	</div>
			    </div>
			    <div class="row ico-row2">
			    	<div class="col-sm-4">
			    		<img class="ico-slide4" src='<?php echo bloginfo('stylesheet_directory').'/images/challenge.png';?>'>
			    		<h3>Remettre en question l’ordre établi</h3>
			    	</div>
			    	<div class="col-sm-4">
			    		<img class="ico-slide4" src='<?php echo bloginfo('stylesheet_directory').'/images/stake.png';?>'>
			    		<h3>Comprendre comment créer une finance plus juste et durable</h3>
			    	</div>
			    	<div class="col-sm-4">
			    		<img class="ico-slide4" src='<?php echo bloginfo('stylesheet_directory').'/images/culture.png';?>'>
			    		<h3>Acquérir l'esprit start-up</h3>
			    	</div>
			    </div>
			</div>
		</section>


		<!------------- RAISONS ------------>
		<!---------------------------------->
		<!---------------------------------->
		<!-------------- FORCES ------------>
		<section class="forces-fintech">
			<div class="container-fluid">
				<div class="clearfix forces-container">
					<div class="forces-gauche col-md-6">
						<div class="content-force-droite">
							<h2>Pourquoi ce programme est-il <span style="color:#ff0054;">UNIQUE</span> ?</h2>
							<p>
								Toute l’expérience se déroule dans <a target="_blank" href="https://www.wake-up.io/lieu/">notre école au 41 rue du Faubourg Montmartre</a> (Paris 9). C'est un lieu que nous avons spécialement conçu pour favoriser les échanges, la confidentialité et surtout : le passage à l’action.</p>
							<p>
								<strong>Le programme accueille depuis ses débuts des hauts potentiels de tous métiers</strong> : directeurs d’investissement, data scientists, directeurs de projets, senior managers, directeurs d’agence, banquiers privés, avocats, responsables d’innovation, directeurs de compliance et même des entrepreneurs.
							</p>
							<p>
								<strong>Vous rejoindrez donc un réseau de haut niveau pour booster votre carrière.</strong> 
							</p>
						</div>
							

					</div>
					<div class="forces-droite col-md-6">
						<div class="clearfix">
							<div class="force-all force-1 col-md-6"></div>
							<div class="force-all force-2 col-md-6"></div>
							<div class="force-all force-3 col-md-12"></div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-------------- FORCES ------------>
		<!---------------------------------->
		<!---------------------------------->
		<!----------- TÉMOIGNAGES ---------->


		<section class="slide_temoignages" id="temoignages-fintech">
			<div class="container-fluid">
			    <div class="row header-slide5_2">
			        <div class="col-md-8 col-md-offset-2">
			        	<h2>Les évolutions de nos alumni</h2>
			        </div>
			    </div>
			    <div class="row">
			    	<div class="col-sm-6">

			    		<div classm"row">
			    			<div class="col-sm-4 photo-temoignage">
			    				<img class="presse-img" alt="Photo Selsabila El Moutaouakil" title="Photo Selsabila El Moutaouakil" src='<?php echo bloginfo('stylesheet_directory').'/images/TEMOIGNAGES/selsabila-2.png';?>'>
			    			</div>
			    			<div class="col-sm-8">
			    				<h4>Selsabila devient Senior Operation Manager chez Stratumn (Fintech blockchain) après une carrière de Senior Manager chez PwC.</h4>
			    				<h3>Les intervenants sont de qualité, les fondateurs de la formation sont très bienveillants et le résultat est tout simplement magique ! Toute la partie coaching afin d'apprendre sur soi et comprendre ce vers quoi nous souhaitons nous diriger est un des éléments différenciant qui fait de cette formation une pépite.<a target="_blank" href="https://blog.wake-up.io/ils-sont-passes-par-wake-up-selsabila/"> Lire la suite</a></h3>
			    				
			    			</div>

			    		</div>

			    	</div>
			    	<div class="col-sm-6">
			    		<div classm"row">
			    			<div class="col-sm-4 photo-temoignage">
			    				<img class="presse-img" alt="Photo Christopher Larrondo" title="Photo Christopher Larrondo" src='<?php echo bloginfo('stylesheet_directory').'/images/TEMOIGNAGES/christopher.png';?>'>
			    			</div>
			    			<div class="col-sm-8">
			    				<h4>Christopher réalise son rêve de devenir Sales Engineer dans l’IA après une carrière de chef de projet.</h4>
			    				<h3>Le sujet est particulièrement bien abordé depuis la création de la société jusqu’à l’exit, en passant par le quotidien avec les équipes internes. On se rend vite compte que la réalité est tout autre que le monde des bisounours vendu par la presse. Wake-Up est le pied dans la porte entre-ouverte du secteur.<a target="_blank" href="https://blog.wake-up.io/ils-sont-passes-par-wake-up-christopher/"> Lire la suite</a></h3>
			    				
			    			</div>

			    		</div>

			    	</div>
			    </div>

			    <div class="row">
			    	<div class="col-sm-6">
			    		<div classm"row">
			    			<div class="col-sm-4 photo-temoignage">
			    				<img class="presse-img" alt="Photo Pamela Wajsman" title="Photo Nicolas" src='<?php echo bloginfo('stylesheet_directory').'/images/TEMOIGNAGES/nicolas.png';?>'>
			    			</div>
			    			<div class="col-sm-8">
			    				<h4>Nicolas lance sa Fintech TEO (blockchain sur les nouvelles énergies) après une carrière de business manager chez ENGIE.</h4>
			    				<h3>Ce format de formation est complètement innovant et rare. Une perle qui m’a inspirée pour devenir à mon tour entrepreneur.<br> <a target="_blank" href="https://www.google.com/search?q=wake-up+%C3%A9cole&oq=wake-up+%C3%A9cole&aqs=chrome..69i57j69i60l2j0l3.6527j0j1&sourceid=chrome&ie=UTF-8#lrd=0x47e66e4815223ac7:0x3824b95852fd0b86,1,,,"> Lire la suite</a></h3>
			    				
			    			</div>

			    		</div>

			    		
			    	</div>

			    	<div class="col-sm-6">
			    		<div classm"row">
			    			<div class="col-sm-4 photo-temoignage">
			    				<img class="presse-img" alt="Photo Pamela Wajsman" title="Photo Pamela Wajsman" src='<?php echo bloginfo('stylesheet_directory').'/images/TEMOIGNAGES/pamela.png';?>'>
			    			</div>
			    			<div class="col-sm-8">
			    				<h4>Pamela devient consultante en transformation digitale chez Twelve Consulting après une carrière de banquière privée.</h4>
			    				<h3>Le programme Fintech de WAKE UP est une très belle carte de visite. C’est même aujourd’hui un argument commercial que je mets en avant lorsque je rencontre d’éventuels prospects !<br> <a target="_blank" href="https://blog.wake-up.io/lls-sont-passes-par-wake-up-pamela/"> Lire la suite</a></h3>
			    				
			    			</div>

			    		</div>
			    		
			    	</div>
			    </div>
			    <div class="avis-suivants">
			    <div class="row">
			    	<div class="col-sm-6">
			    		<div classm"row">
			    			<div class="col-sm-4 photo-temoignage">
			    				<img class="presse-img" alt="Photo Benoit Dufaure" title="Photo Tiffany" src='<?php echo bloginfo('stylesheet_directory').'/images/TEMOIGNAGES/tiffany.png';?>'>
			    			</div>
			    			<div class="col-sm-8">
			    				<h4>Tiffany lance sa Fintech Wefinup (DAF digital) après une carrière de chargée d’affaire à la BNP.</h4>
			    				<h3>WAKE UP… Ce n'est pas une école, c'est une Aventure ! Une Aventure qu'aucune école " du monde bancaire " vous propose ! J'ai travaillé 13 ans dans une banque, et je me posais beaucoup de questions sur mon avenir professionnel… j'avais envie de créer mon entreprise, quelques idées en tête et Wake Up m'a fait passer le cap !<br> <a target="_blank" href="https://business.lesechos.fr/entrepreneurs/aides-reseaux/0301286548466-elle-s-est-formee-a-wake-up-avant-de-cofonder-la-fintech-easy2know-319093.php"> Lire la suite</a></h3>
			    				
			    			</div>

			    		</div>
			    	</div>

			    	<div class="col-sm-6">
			    		
			    		<div classm"row">
			    			<div class="col-sm-4 photo-temoignage">
			    				<img class="presse-img" alt="Photo Benoit Dufaure" title="Photo Benoit Dufaure" src='<?php echo bloginfo('stylesheet_directory').'/images/TEMOIGNAGES/benoit.png';?>'>
			    			</div>
			    			<div class="col-sm-8">
			    				<h4>Benoit crée un poste sur-mesure de Community Manager des Directeurs d’Agence à la BNP après avoir été lui-même directeur d’agence.</h4>
			    				<h3>Au delà de la connaissance technique, les entrepreneurs te livrent des expériences de vie absolument dingues, leurs succès, leurs échecs, leurs doutes parce que potentiellement, un jour, tu te retrouveras dans une position similaire. <br> <a target="_blank" href="https://www.linkedin.com/pulse/wake-up-beno%25C3%25AEt-dufaure/"> Lire la suite</a></h3>
			    				
			    			</div>

			    		</div>
			    	</div>
			    </div>


			    <div class="row">
			    	<div class="col-sm-6">
			    		<div classm"row">
			    			<div class="col-sm-4 photo-temoignage">
			    				<img class="presse-img" alt="Photo Benoit Dufaure" title="Photo Nathalie" src='<?php echo bloginfo('stylesheet_directory').'/images/TEMOIGNAGES/nathalie.png';?>'>
			    			</div>
			    			<div class="col-sm-8">
			    				<h4>Nathalie rejoint la cellule d’innovation du Crédit Mutuel Arkea après une carrière d’actuaire.</h4>
			    				<h3>J’y ai découvert des facettes de moi- même, de l’univers Fintech (au delà de la carte postale de l’entrepreneur) et aussi de ma boîte (rien de tel de sortir de son quotidien pour mieux le regarder). Ce parcours est un vrai pont entre de multiples univers. Il a été un milestone sur ma construction professionnelle.<br> <a target="_blank" href="https://www.linkedin.com/pulse/wake-up-la-promo-du-programme-fintech-nathalie-coutard/"> Lire la suite</a></h3>
			    				
			    			</div>

			    		</div>
			    	</div>

			    	<div class="col-sm-6">
			    		<div classm"row">
			    			<div class="col-sm-4 photo-temoignage">
			    				<img class="presse-img" alt="Photo Pamela Wajsman" title="Photo Benjamin" src='<?php echo bloginfo('stylesheet_directory').'/images/TEMOIGNAGES/benjamin.png';?>'>
			    			</div>
			    			<div class="col-sm-8">
			    				<h4>Benjamin devient chef de projet marketing à la BRED après une carrière de chargé d’affaire.</h4>
			    				<h3>Ce qui est sympa avec WAKE UP, c’est que le réveil n’est pas douloureux. Mais plutôt enthousiasmant et bienveillant ! Pas de grands concepts théoriques en amphithéâtre, mais plutôt des échanges avec des professeurs très concrets (les fondateurs ou dirigeants des Fintech).<br> <a target="_blank" href="https://www.linkedin.com/pulse/les-fintech-chez-wake-up-allez-banquiers-se-r%C3%A9veille-echalier/"> Lire la suite</a></h3>
			    				
			    			</div>

			    		</div>
			    		
			    	</div>
			    	</div>
			    </div>

			    <div class="row footer-temoignages">
			        <div class="col-md-8 col-md-offset-2">
			        	<a id="vu-temoignages" class="plus-temoignages lire-plus boutton-voir-plus">
			        	Lire plus de témoignages
			        	</a>
			        	<a id="vu-temoignages" class="plus-temoignages boutton-lire-plus" href="https://www.facebook.com/pg/joinwakeup/reviews/?ref=page_internal" target="_blank">
			        	Lire d'autres avis
			        	</a>
			        </div>
			    </div>

			</div>
		</section>


		<!----------- TÉMOIGNAGES ---------->
		<!---------------------------------->
		<!---------------------------------->
		<!----------- ENTREPRISES ---------->
		<div class="titre-logo-entreprises">
			<div class="container-fluid">
				<h2>Ils se forment chez nous :</h2>
			</div>
		</div>
		<div class="slide-entreprises">

			<div class="container-fluid">

				<div class="customer-logos">
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_amf.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_arkea.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_aviva.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_bnp.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_capco.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_credit.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_engie.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_ey.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_gide.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_groupama.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_gt.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_mckinsey.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_natixis.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_neuflize.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_oddo.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_oney.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_roland.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_rothschild.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_socgen.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_sopra.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_ubs.png';?>'></div>
					<div class="slide"><img class="logo-entreprise" src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/LOGOS-ENTREPRISES/logo_state.png';?>'></div>

				</div>

			</div>
		</div>

		<!----------- ENTREPRISES ---------->
		<!---------------------------------->
		<!---------------------------------->
		<!---------- STATISTIQUES ---------->


		<div class="slide-stats" style="
		background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/bg-stats.jpg';?>'); background-repeat:no-repeat; background-size: cover; background-position: top; ">
			<div class="container-fluid">
				<div class="clearfix">
					<div class="col-sm-8 col-sm-offset-2">
						<h2><span style="color:#ff0055;">81 %</span> de nos alumni évoluent !</h2>
					</div>
					<div class="col-sm-8 col-sm-offset-2">
						<p>
							Ce programme vous montre que les opportunités de carrière dans la finance sont bien plus larges que ne vous pouviez l’imaginer. Nos 200 alumni mettent leur talent créatif au service de la stratégie digitale pour faire bouger les lignes ou entreprendre :
						</p>
					</div>
				</div>
			</div>

			<div class="container-fluid container-statistiques">
				<div class="clearfix bg-chart-stats">
					<div class="col-sm-3 trois-colonnes col-une">
						<div class="trois-lignes ligne-une">
							<h3>17 %</h3>
							<h4>rejoignent une Fintech ou de petites structures de conseil</h4>
						</div>
						<div class="trois-lignes ligne-deux">
							<h3>.</h3>
							<h4>.</h4>
						</div>
						<div class="trois-lignes ligne-trois">
							<h3>40 %</h3>
							<h4>sont repérés en interne pour des rôles de stratégie digitale</h4>
						</div>
					</div>
					<div class="col-sm-6 trois-colonnes col-deux">
						<img src='<?php echo bloginfo('stylesheet_directory').'/images/FINTECH/chart-stats.svg';?>'>
					</div>
					<div class="col-sm-3 trois-colonnes col-trois">
						<div class="trois-lignes ligne-une">
							<h3>.</h3>
							<h4>.</h4>
						</div>
						<div class="trois-lignes ligne-deux">
							<h3>43 %</h3>
							<h4>sont en train ou ont créé leur entreprise</h4>
						</div>
						<div class="trois-lignes ligne-trois">
							<h3>.</h3>
							<h4>.</h4>
						</div>
					</div>
				</div>
						
						
			</div>

		</div>


		<!---------- STATISTIQUES ---------->
		<!---------------------------------->
		<!---------------------------------->
		<!------------- PRESSE ------------->


		<section class="slide5_2">
			<div class="container-fluid">
			    <div class="row header-slide5_2">
			        <div class="col-md-8 col-md-offset-2">
			        	<h2>Ils parlent du programme</h2>
			        </div>
			    </div>
			    <div class="row">
			    	<div class="col-sm-1"></div>
			    	<div class="col-sm-4">

			    		<a id="vu-presse-1" target="_blank" href="http://www.capital.fr/carriere-management/actualites/wake-up-l-ecole-qui-veut-eveiller-l-esprit-startup-des-professionnels-de-la-finance-1194309">
			    			<img id="vu-presse-1" class="presse-img" alt="Logo haute définition Capital Magazine WAKE UP" title="Logo haute définition Capital Magazine WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/PRESSE/logo_capital_wake_up.png';?>'>
			    		</a>
			    		<h3>" L'école qui veut éveiller l'esprit startup des professionnels de la finance "</h3>

			    	</div>
			    	<div class="col-sm-2"></div>
			    	<div class="col-sm-4">
			    		<a id="vu-presse-1" target="_blank" href="https://www.lesechos.fr/finance-marches/banque-assurances/0301179401380-wake-up-acculture-les-banquiers-au-monde-de-la-fintech-2146559.php">
			    			<img id="vu-presse-1" class="presse-img" alt="Logo Les Echos WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/PRESSE/logo_les_echos_wake_up.png';?>'>
			    		</a>
			    		<h3>" WAKE UP acculture les banquiers au monde de la Fintech "</h3>

			    	</div>
			    	<div class="col-sm-1"></div>
			    </div>
			    <div class="row special-row2-presse" style="margin-top:2em;">
			    	<div class="col-sm-1"></div>
			    	<div class="col-sm-4 special-efin">
			    		<a id="vu-presse-1" target="_blank" href="https://www.youtube.com/watch?v=NqqmaxIal3E">
			    			<img id="vu-presse-1" class="presse-img" alt="Logo haute définition BFM Business WAKE UP" title="Logo haute définition BFM Business WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/PRESSE/logo_bfmbusiness_hd_wake_up.png';?>'>
			    		</a>
			    		<h3>" WAKE UP, éligible au CPF "</h3>
			    	</div>
			    	
			    	<!--<div class="col-sm-4">
			    		<a target="_blank" href="http://www.frenchweb.fr/femme-de-la-tech-anais-raoux-fondatrice-de-la-premiere-ecole-de-la-fintech-en-france/282940">
			    			<img class="presse-img" alt="Logo Frenchweb HD noir WAKE UP" title="Logo Frenchweb HD noir"  src='<?php echo bloginfo('stylesheet_directory').'/images/PRESSE/logo_frenchweb_hd_wake_up.png';?>'>
			    		</a>
			    		<h3>" Anaïs Raoux, fondatrice de la première école de la Fintech en France "</h3>
			    		
			    	</div>-->

			    	<div class="col-sm-2"></div>
			    	<div class="col-sm-4 special-efin">
			    		<a id="vu-presse-1" target="_blank" href="http://www.latribune.fr/entreprises-finance/banques-finance/le-cours-wake-up-reveille-les-cadres-de-la-finance-tentes-par-l-aventure-startup-684970.html">
			    			<img id="vu-presse-1" class="presse-img" alt="Logo La Tribune" title="Logo La Tribune"  src='<?php echo bloginfo('stylesheet_directory').'/images/PRESSE/logo_la_tribune_wake_up.png';?>'>
			    		</a>
			    		<h3>" WAKE UP réveille les cadres de la finance tentés par l’aventure startup "</h3>
			    		
			    	</div>
			    	<div class="col-sm-1"></div>
			    </div>
			</div>
		</section>


		<!------------- PRESSE ------------->
		<!---------------------------------->
		<!--*********************-->
		<!--*********************-->
		<!--****  INSCRIPTION ***-->
		

		<section id="slide6" class="slide6" style="
						background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/bg-postuler.jpg';?>'); background-repeat:no-repeat; background-size: cover; background-position: top;">
			<div class="container-fluid">
				<div class="row header-slide6">
					<div class="col-md-8 col-md-offset-2">
						<h2>Faites partie de la promotion 2020</h2>
						<h3>
							<strong><a id="vu-planning" target="_blank" href="https://www.wake-up.io/wp-content/themes/t-sixteen-child-theme/documents/PROGRAMME-Fintech-2020.pdf">Voir le planning du 5 au 31 mars 2020.</a></strong>
						</h3>
						<h3>
							Limité à 25 places seulement.
						</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-2">
						<img class="picto-postuler" alt="Picto des dates WAKE UP" title="Picto des dates WAKE UP"  src='<?php echo bloginfo('stylesheet_directory').'/images/prix.png';?>'>
					</div>
					<div class="col-md-5"></div>
				</div>
				<div class="row slide6-lignes">
					<div class="col-md-5"><hr class="hidden-xs hidden-sm"></div>
					<div class="col-md-2">
						<p class="titre-pictos">PRIX</p>
					</div>
					<div class="col-md-5"><hr></div>
				</div>

				<div class="row slide6-prix">
					<div class="col-md-8 col-md-offset-2">
						<h2>3&nbsp;590€ HT</h2>
						<p>Prix entreprise.<br> <a id="vu-convention" href="mailto:bonjour@wake-up.io?subject=Demande%20de%20convention%20-%20Programme%20Fintech&body=Bonjour%20l'%C3%A9quipe%20WAKE%20UP%2C%0A%0APourriez-vous%20me%20faire%20parvenir%20une%20convention%20avec%20les%20coordonn%C3%A9es%20ci-dessous%20%3F%0A%0A%E2%80%A2%20Nom%20de%20l'entreprise%20%3A%0A%E2%80%A2%20Adresse%20%3A%0A%E2%80%A2%20Nom%20du%20participant%20%3A%0A%E2%80%A2%20Poste%20du%20participant%20%3A%20%0A%0AMerci%20par%20avance%20!">Demandez une convention</a> • <a id="vu-brochure" href="mailto:bonjour@wake-up.io?subject=Demande%20de%20brochure%20-%20Programme%20Fintech&body=Bonjour%20l'%C3%A9quipe%20WAKE%20UP%2C%0A%0APourriez-vous%20me%20faire%20parvenir%20une%20brochure%20corporate%20de%20votre%20programme%20Fintech%20%3F%0A%0AMerci%20par%20avance%2C">Demandez la brochure corporate</a>.
						<h2>2&nbsp;790€ TTC</h2>
						<p>Prix particuliers.<br> Code CPF : 235495 • <a id="vu-devis" href="mailto:bonjour@wake-up.io?subject=Demande%20de%20devis%20-%20Programme%20Fintech&body=Bonjour%20l'%C3%A9quipe%20WAKE%20UP%2C%0A%0AJe%20souhaiterais%20obtenir%20un%20devis%20avec%20les%20coordonn%C3%A9es%20suivantes%20%3A%0A%E2%80%A2%20Pr%C3%A9nom%20%3A%20%0A%E2%80%A2%20Nom%20%3A%20%0A%E2%80%A2%20Adresse%20%3A%20%0A%E2%80%A2%20T%C3%A9l%C3%A9phone%20%3A%20%0A%0AMerci%20par%20avance.">Demandez un devis</a>.</p>
					</div>
				</div>
				<div class="row-candidature">

				    <a id="vu-inscrire-1" class="cta-slide-A" href="https://www.wake-up.io/inscription-programme-fintech/">
			   				Je m'inscris !
					</a>

				</div>	
	    
			</div>
		</section>

		<!--****  INSCRIPTION ***-->
		<!--*********************-->
		<!--*********************-->
		<!--****  PAS FAIT SI ***--

		<section class="slide7-iki">
			<div class="container-fluid">
				<div class="clearfix">
					<h2>Derniers <span style="color:#ff0055;">détails</span> !</h2>
				</div>
				<div class="clearfix">
					<div class="col-sm-8">
						<h3>On a listé les cas bien précis selon lesquels ce programme ne serait pas fait pour vous. Les voici :</h3>
					</div>
					<div class="col-sm-4">
						
					</div>
				</div>
				<div class="clearfix">
					<div class="col-sm-8 col-md-9">
						<div class="clearfix">
							<div class="col-sm-6">
								<div class="title-not-for-u">
									<p>
										Vous n’avez pas envie de faire bouger les choses
									</p>
								</div>
								<div>
									<p>
										Ce programme est un accélérateur de changement ! Ce serait dommage de gâcher votre temps si vous ne considérez pas sérieusement d’évoluer en tous points de vue.
									</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="title-not-for-u">
									<p>
										Vous pensez déjà tout savoir sur la Fintech
									</p>
								</div>
								<div>
									<p>
										Ici vous ne découvrirez pas la Fintech que l’on trouve dans les conférences classiques. Dans ce programme on vous livre du OFF et vous découvrirez la face intime de la Fintech.
									</p>
								</div>
							</div>
						</div>
						<div class="clearfix">
							<div class="col-sm-6">
								<div class="title-not-for-u">
									<p>
										Vous ne vous intéressez qu’à une partie du programme
									</p>
								</div>
								<div>
									<p>
										Le travail de façon cloisonnée, c’est terminé. Tous les sujets sont interconnectés et on vous en apporte la preuve par l’exemple.
									</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="title-not-for-u">
									<p>
										Vous attendez que l’on vous dise quoi faire
									</p>
								</div>
								<div>
									<p>
										Notre travail c’est de vous faire rencontrer les personnages les plus inspirants de la finance d’aujourd’hui. Le reste, c’est à vous de le faire : posez vos questions, connectez-vous et surtout profitez, car ça passe vite !
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-3">
						<img alt="Banane mascotte WAKE UP" src='<?php echo bloginfo('stylesheet_directory').'/images/IKIGAI/banane-prof.png';?>'>
					</div>
				</div>
			</div>
		</section>

		<!--****  PAS FAIT SI ***-->
		<!--*********************-->
		<!---------------------------------->
		<!---------- VIDEO TEASER ----------
		

		<div id="vu-video" class="slide-video" >
			<a id="vu-video">
			<div id="vu-video" class="container-video">
			    	<iframe id="vu-video" class="video" width="560" height="315" src="https://www.youtube.com/embed/lPeepQShJ_U" frameborder="0" allowfullscreen></iframe>
			</div>
			</a>

		</div>


		<!---------- VIDEO TEASER ---------->
		<!---------------------------------->
		<!--*********************-->
		<!--****  INSCRIPTION ***--
		

		<section id="slide6" class="slide6" style="
						background-image: url('<?php echo bloginfo('stylesheet_directory').'/images/bg-postuler.jpg';?>'); background-repeat:no-repeat; background-size: cover; background-position: top;">
			<div class="container-fluid">
				<div class="row header-slide6">
					<div class="col-md-8 col-md-offset-2">
						<h2>Promotion 2019</h2>
						<h3>Faites partie des 25 chanceux et chanceuses qui suivront le programme cette année.</h3>
					</div>
				</div>

				
				<div class="row-candidature">
				    <a id="vu-inscrire-3" onclick='boutonpostulez()' target="_blank" href="mailto:bonjour@wake-up.io?subject=Liste%20d'attente%20-%20Programme%20Fintech&body=Bonjour%20l'%C3%A9quipe%20WAKE%20UP%2C%0A%0AJe%20souhaiterais%20faire%20partie%20de%20votre%20liste%20d'attente%20pour%20le%20prochain%20programme%20Fintech.%0A%0AMerci%20par%20avance%20!" class="cta-candidature postule-fintech">Inscriptions du 18 au 26 mars</a>
				</div>	
		   
			</div>
		</section>

		<!--****  INSCRIPTION ***-->
		<!--*********************-->
		<!--*********************-->
		<!--******  MEDIAS ******-->

		<section id="slide-G" class="slide-G">
		    <div class="container-fluid">
		        <div>
		            <h2>Ils parlent de l'école :</h2>
		        </div>
		        
		        <?php
                include('wp-content/themes/t-sixteen-child-theme/myphpfiles/presse.php');
                ?>
		        
		    </div>
		</section>
		
		<!--******  MEDIAS ******-->
		<!--*********************-->
		
		<!--*********************-->
		


	</main><!-- .site-main -->
</div><!-- .content-area -->


<!-- CAROUSEL -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<script type="text/javascript">
	$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1000,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 2
					}
				}]
			});
		});

</script>

<script>
$(document).ready(function(){

  $('.lire-plus').click(function(){
    $('.avis-suivants').show();
    $('.boutton-lire-plus').show();
    $('.boutton-voir-plus').hide();

  });
});
</script>