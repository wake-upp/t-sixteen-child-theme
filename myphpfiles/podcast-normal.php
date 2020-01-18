
<script>
// Set the date we're counting down to
var countDownDate = new Date("August 9, 2019 20:00:00").getTime();

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

  /*document.getElementById("jours").innerHTML = days;*/
  document.getElementById("heures").innerHTML = heures;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("secondes").innerHTML = seconds;
  
    
  //If the count down is over, write some text 
  if (distance < 0) {
        clearInterval(x);
    }
    }, 1000);

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script type="text/javascript">
    $(document).scroll(function() {
      var y = $(this).scrollTop();
      
      if ($(window).width() < 540) {
        if (1300 < y && y < 2600) {
          $('.bottomMenu').fadeIn();
        } else {
          $('.bottomMenu').fadeOut();
        }
      }
      else {
        if (y > 1000) {
          $('.bottomMenu').fadeIn();
        } else {
          $('.bottomMenu').fadeOut();
        }
      }
      
    });
</script>

<!--
<div class="bottomMenu">
    <p class="countdown-cta">

        <p class="tohide-2">Les inscriptions ferment dans :&nbsp</p><!--<p class="chiffres" id="jours"></p> <p class="tohide">jours &nbsp</p><p class="chiffres" id="heures"></p> <p class="tohide">h</p> <p class="chiffres" id="minutes"></p> <p class="tohide">min</p> <p class="chiffres" id="secondes"></p> <p class="tohide">s <p class="countdown-cta"> <a id="vu-inscrire-3" href="https://boussole.wake-up.io/cours-audio/monpodcast/inscription">Inscrivez-vous ici !</a> </p></p>
    </p>

</div>
-->

<div id="primary" class="content-area">
    <main id="main" class="site-main page-cours-audio" role="main">

        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/manifeste.php') ?>
        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/fondateurs.php') ?>
        <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/charte.php') ?>

        <div id="cover"></div>


        <!-- **** SLIDE 1 *** -->
        <!--******************-->
        <!--******************-->


        <section class="slide slide1 vertical-center">


            <div class="container-fluid">

                <div class="container hide_in_mobile">
                    <div id="nav_user"> 
                        <a href="https://boussole.wake-up.io/podcast/monpodcast/connexion" class="btn_submit btn_connexion">Connexion</a>
                    </div>
                
                </div>

                <div id="mainHeaderWrapper" class="clearfix">

                    <a href="<?php echo site_url(); ?>">
                        <img class="logo-wakeup" alt="logo-wake up"
                             src='<?php echo bloginfo('stylesheet_directory') . '/images/HOMEPAGE/logo-wake-up.png'; ?>'>
                    </a>

                    <?php include('wp-content/themes/t-sixteen-child-theme/myphpfiles/menu-nav.php') ?>

                </div>
                <div class="clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slide1-lineup">

                        <div class="audio-intro">

                            <audio id="music2" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/Introduction.mp3">
                            </audio>

                            <p>Écouter l'intro</p>
                        </div>


                            <h1>Trouvez un métier<br>adapté à votre personnalité !</h1>

                            <h2>Le programme audio pour vous aider à trouver un job qui a du sens.</h2>


                       
                        <div class="bouton-slide-1">

                            <?php
                                if(isset($_GET['code']))
                                    {
                                    ?>
                                        <a href="https://boussole.wake-up.io/podcast/monpodcast/inscription">
                                            <button class="btn btnred">Je m'inscris !</button>
                                        </a>
                                    <?php
                                    }
                                    else {
                                    ?>
                                        <a href="https://boussole.wake-up.io/podcast/monpodcast/inscription">
                                            <button class="btn btnred">Je m'inscris !</button>
                                        </a>
                                            
                                    <?php
                                    }
                            ?>
                        </div>
                    </div>
                    <div class="avis-trustpilot">
                        <div class="volet-trust volet-gauche">
                            <p><span style="font-family: 'Raleway-Black'; font-size: 2.1em;">9</span>.2/10</p>
                        </div>
                        <div class="volet-trust volet-droite">
                            <img alt="logo TrustPilot" src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/logo-trustpilot.png'; ?>">
                            <a id="avis-trustpilot" target="_blank" href="https://fr.trustpilot.com/review/www.wake-up.io">Lire les avis</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- **** SLIDE 1 *** -->
        <!--******************-->
        <!--******************-->
        <!-- **** SLIDE 2 *** -->


        <section class="slide slide2"  style="background-color:#03E8FC">
            <div class="top-bleu">
            </div>
            <div class="container-slide2">
            
                <div class="container-slide">


                    <div class="col-md-6  col-lg-6 col-xs-12  col-md-push-6  dessus-episodes ">
                        <div class="container-slideright">


                            <h2><span class="white">Un programme audio en </span><span class="red">8&nbsp;épisodes </span>pour vous aider à naviguer dans votre évolution de carrière</h2>



                            <h6><span>Épisode 0 </span>- Introduction (gratuit)</h6>
                            <audio id="music3" preload="metadata">
                                <source src="<?php echo bloginfo('stylesheet_directory'); ?>/media/Introduction.mp3">
                            </audio>
    					 </div>	
                            <ul class="episodes">
                                <li class="hideli">

                                    <div class="eptext">
                                        <h4>Épisode 1 : </h4>

                                    </div>
                                    <div class="eptime">20 min
                                    </div>
                               
                                    <h6>Faites tomber le masque</h6>

                                    <p>Très souvent, on passe une bonne partie de notre vie à jouer le rôle d’une autre personne pour des raisons multiples : contraintes personnelles, sociales, financières etc. Sauf qu’en adoptant une personnalité qui n’est pas la nôtre, on finit par s’épuiser et tout simplement par passer à côté de notre vie.
                                    <br><br>
                                    Dans cet épisode, vous apprendrez à identifier votre masque, à vous séparer de lui et verrez comment il est possible de passer d’une situation professionnelle a priori bloquée à de nouvelles possibilités.
                                    </p>
                                </li>
                                <li class="hideli">

                                    <div class="eptext">
                                        <h4>Épisode 2 : </h4>

                                    </div>
                                    <div class="eptime">32 min
                                    </div>
                                    <h6>Ouvrez-vous à tous les possibles</h6>

                                    <p>Changer de job est l’occasion d’écrire une nouvelle page de sa carrière et de créer une vie à son image. Sur papier l’idée fait rêver, en pratique, c’est souvent une remise en question totale, faite de doutes qui mettent à l’épreuve la confiance en soi. Le passage de salarié parfois mouton, à créateur de sa propre vie demande donc de s’équiper de nouvelles lunettes pour voir la réalité de façon plus large et positive.<br><br>
                                    Dans cet épisode, nous allons remettre en question des idées préconçues que nous avons sur le cerveau, la créativité et la chance. Nous allons notamment parler de neuroscience et de philosophie, parce que ces sujets seront incontournables pour aborder pleinement le thème de la personnalité dans les épisodes suivants.
                                    </p>
                                </li>
                                <li class="hideli">

                                    <div class="eptext">
                                        <h4>Épisode 3 : </h4>

                                    </div>
                                    <div class="eptime">23 min
                                    </div>
                                    <h6>Affirmez votre talent</h6>

                                    <p>Savoir en quoi l'on est doué est difficile, mais l'affirmer est sans doute encore plus difficile. Surtout lorsque l'on a passé des années dans un type de job où l'on s'ennuie et où l'on n'est pas forcément valorisé.<br><br>
                                    On a tous en nous l'intuition d'être bon ou bonne quelque part et cette petite flamme n'attend qu'à être libérée. Dans cet épisode on explore les vertus du talent et on lui redonne la place qu'il mérite pour oser l'affirmer pleinement.
                                    </p>
                                </li>
                                <li class="hideli">

                                    <div class="eptext">
                                        <h4>Épisode 4 : </h4>

                                    </div>
                                    <div class="eptime">23 min
                                    </div>
                                    <h6>Trouvez où votre talent est utile</h6>

                                    <p>Pour savoir en quoi son propre talent peut être utile à une entreprise, il faut déjà savoir comment elle fonctionne.<br><br>
                                    Rassurez-vous dans cet épisode, on ne va pas parler de la comptabilité de l'entreprise. Non on va plutôt parler les tendances qui font qu'une entreprise réussit. Et on verra qu'elles sont davantage liées à nos types de personnalité qu'à des compétences techniques.
                                    </p>
                                </li>
                                <li class="hideli">

                                    <div class="eptext">
                                        <h4>Épisode 5 : </h4>

                                    </div>
                                    <div class="eptime">28 min
                                    </div>
                                    <h6>Comprenez votre psychologie</h6>

                                    <p>Le graphe de Boussole est un repère très utile pour identifier là où vous pouvez utiliser votre talent. Mais il est essentiel de voir en quoi votre talent est lié à ce graphe. Et plus encore de mettre des mots sur ce qu'est votre talent et donc votre personnalité.<br><br>
                                    Dans cet épisode, nous allons explorer ensemble la mécanique de la psychologie humaine. C'est à travers les travaux de Carl Gustav Jung que vous comprendrez les forces qui vous animent, comment elles se développent et comment les utiliser pour trouver votre place.
                                    </p>
                                </li>
                                <li class="hideli">

                                    <div class="eptext">
                                        <h4>Épisode 6 : </h4>

                                    </div>
                                    <div class="eptime">27 min
                                    </div>
                                    <h6>Liez la psychologie avec vos talents</h6>

                                    <p>Entre la psychologie théorique et les applications pratiques pouvant être utilisée dans votre reconversion professionnelle, il y a parfois un certain gap.<br><br>
                                    Après avoir découvert les fonctions psychiques de Jung dans l'épisode précédent, on donne ici un sens et une utilité à cette théorie pour vous aider à comprendre et faire le point sur vos motivations et vos talents. On continuera également d'explorer d'autres paramètres de votre personnalité comme l'introversion et l'extraversion qui ont une importance capitale.
                                    </p>
                                </li>
                                <li class="hideli">

                                    <div class="eptext">
                                        <h4>Épisode 7 : </h4>

                                    </div>
                                    <div class="eptime">32 min
                                    </div>
                                    <h6>Décryptez les métiers avec Boussole</h6>

                                    <p>La bibliothèque des métiers fournie avec ce podcast vous donne des idées de job qui collent le plus avec vos talents.<br><br>
                                    Mais les métiers actuels se transforment. Ils deviennent plus transversaux, certains vont disparaître et d'autres apparaître. Il est donc important de s'outiller pour savoir analyser en toute autonomie si un métier peut coller ou non avec votre personnalité.<br><br>
                                    </p>
                                </li>

                                <li class="hideli">

                                    <div class="eptext">
                                        <h4>Épisode 8 : </h4>

                                    </div>
                                    <div class="eptime">20 min
                                    </div>
                                    <h6>Utilisez le Ikigai pour trouver du sens</h6>

                                    <p>Le sens au travail est devenu un critère de carrière pour beaucoup de personnes. Mais qu'est-ce que le sens ? Que faut-il pour trouver du sens ?<br><br>
                                    C'est ce que nous allons explorer dans cet épisode final à travers une nouvelle adaptation du fameux concept japonais, le Ikigai. Nous irons même plus loin, en l'utilisant comme un véritable référentiel de stratégie de carrière.<br><br>
                                    </p>
                                </li>

                            </ul>
                       
                    </div>

                    <div class="col-md-6  col-lg-6 col-md-pull-6 container-slideim">
                        <img src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/headphone.png'; ?>">
                        <div class="maison-casque">
                            <div class="chambre-casque">
                                <div class="bebe-casque">UN COACH DE POCHE À ÉCOUTER PARTOUT !</div>
                            </div>
                        </div>
                        

                    </div>

                </div>
            </div>

        </section>

        <!-- **** SLIDE 2 *** -->
        <!--******************-->
        <!--******************-->
        <!-- **** SLIDE 6 *** -->
        <section id="metiers" class="slide slide6">

            <div class="container-fluid ">

                <div class="col-md-6  col-lg-6 col-xs-12  col-sm-12  ">


                    <h2>Les métiers qui <span class="jaune">VOUS</span> correspondent...</h2>


                    <div class="container-icones-metiers">
                        <img class="icones-metiers" src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/listicons_Ret_sm.png'; ?>"/>
                    </div>

                    <p>Le programme audio est livré avec une <span class="jaune">liste des métiers que vous pourriez exercer.</span>
                    </p>

                    <p>Ce sont tous les métiers <span class="jaune">où vous pouvez utiliser votre talent d’or</span> décrit les résultats du test Boussole !</p>

                    <p><span class="jaune">Cette liste 100 % personnalisée selon vos résultats au test Boussole</span> est issue de nos recherches et d’une analyse de plus de 400 métiers.</p>

                    

                </div>

            </div>
            <div class="col-md-6  col-lg-6 col-xs-12  col-sm-12  iconsimg ">

                <img src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/listicons_Ret.png'; ?>"/>
            </div>
            <div class="col-md-6  col-lg-6 col-xs-12  col-sm-12  phoneimg">
                <img src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/bg_phone_2.png'; ?>">
            </div>

        </section>

        <!-- **** SLIDE 6 *** -->
        <!--******************-->
        <!--******************-->
        <!-- **** SLIDE 3 *** -->
        <section class="slide slide3" style="    background-position: center ; background: url('<?php echo bloginfo('stylesheet_directory') . '/images/podcast/bg_whywego.jpg'; ?>') no-repeat ; background-size: cover; background-position: right;">
            <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12 bundle-temoignages">
                <h2>La raison d’être de ce programme ?</h2>
                <h2>Elle est ici :</h2>
                <div class="col-md-12  col-lg-12 col-xs-12  col-sm-12">
                    <div class="col-md-6  col-lg-6 col-xs-12  col-sm-12 ">

                        <div class="triangle-isosceles left"><p>J'ai dévoré les 4 premiers épisodes en une après midi. J'ai retrouvé tout ce que j'attendais d'un cours audio : un format podcast pratique à écouter, une voix captivante (celle d'Anaïs), un contenu créatif mélangeant autobiographies, références philosophiques, exercices pratiques et questionnements psychologiques.
                            </p>
                            <a>Sabrine</a>
                        </div>
                    </div>

                    <div class="col-md-6  col-lg-6 col-xs-12  col-sm-12 ">
                        <div class="triangle-isosceles right"><p>Je lis depuis deux ans beaucoup de livres en développement personnel, et entre autres sur l'Ikigaï, mais je n'avais jamais lu une approche aussi concrète et opérationnelle. 
                            </p>
                            <a>Alexandra</a>
                        </div>
                    </div>


                </div>
                <div class="col-md-12  col-lg-12 col-xs-12  col-sm-12">
                    <div class="col-md-6  col-lg-6 col-xs-12  col-sm-12  triangle-isosceles-center">

                        <div class="triangle-isosceles left "><p>
                            Un vrai travail de pédagogie est réalisé pour rendre simple et accessible ce sujet, sans être simpliste. C'est assez rare pour le souligner.
                            </p>
                            <a>Aymeric</a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="avis-trustpilot">
                <img alt="logo TrustPilot" src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/logo-trustpilot.png'; ?>">
                <p>WAKE UP • Programme audio</p>
                <a id="avis-trustpilot" target="_blank" href="https://fr.trustpilot.com/review/www.wake-up.io">Lire les avis</a>
            </div>
        </section>

        <!-- **** SLIDE 3 *** -->
        <!--******************-->
        <!--******************-->
        <!-- ***** NOEL ***** -

        <section class="noel">
            <a target="_blank" href="https://boussole.wake-up.io/cours-audio/monpodcast/cadeau">
                <img class="" alt="Bannière carte cadeau cours audio"
                 src='<?php echo bloginfo('stylesheet_directory') . '/images/podcast/animated_x-mas_banner(no-price).gif'; ?>'>
             </a>
            

        </section>

        -***** NOEL ***** -->
        <!--******************-->
        <!--******************-->
        <!-- **** SLIDE 4 *** -->
        <section class="slide slide4">
            <div class="container-fluid ">
                <h2>Vous y apprendrez</h2>
                <div class="col-md-12 ">

                    <div class="col-md-4 blocicon">
                        <img src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/icon_carre.svg'; ?>"/>
                        <p>Comment pensent les recruteurs et les chefs d’entreprise</p>
                    </div>
                    <div class="col-md-4 blocicon">
                        <img src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/icon_cle.svg'; ?>"/>
                        <p>Comment mettre en valeur et affirmer vos forces</p>
                    </div>
                    <div class="col-md-4 blocicon">
                        <img src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/icon_outil.svg'; ?>"/>
                        <p>Comment décrypter les offres d’emploi grâce à la psychologie</p>
                    </div>
                </div>


                <div class="col-md-12 ">

                    <div class="col-md-4 blocicon">
                        <img src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/icon_fleche.svg'; ?>"/>
                        <p>Quelle stratégie utiliser pour vous positionner sur "les offres cachées"</p>
                    </div>
                    <div class="col-md-4 blocicon">
                        <img src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/icon_fusee.svg'; ?>"/>
                        <p>Comment booster votre créativité et votre confiance en vous</p>
                    </div>
                    <div class="col-md-4 blocicon">
                        <img src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/icon_flacon.svg'; ?>"/>
                        <p>Comment la science et la philosophie peuvent vous aider</p> 
                    </div>
                </div>


            </div>
        </section>
        <!-- **** SLIDE 4 *** -->
        <!--******************-->
        <!--******************-->
        <!-- **** SLIDE 5 *** -->
        <section class="slide slide5">
            <div class="container-fluid ">

                <div class="col-md-6  col-lg-6 hidden-sm hidden-xs  femmeleft">
                    <img src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/femme.png'; ?>"/>
                </div>
                
                <div class="col-md-6  col-lg-6 col-xs-12  col-sm-12  text_bloc">
                    <h2>Découvrez l’histoire derrière la reconversion d’Anaïs Raoux</h2>
                    <strong>
                        Anaïs a mis deux ans pour changer de voie et trouver un métier qui colle enfin avec sa personnalité. Ce programme s’inspire de son histoire.
                    </strong>

                    <h3>Je me suis retrouvée dans un job qui ne me correspondait pas</h3>
                    <div class="text_bloc_left">
                        Anaïs avait suivi le cursus classique de prépa et de grande école. La voie royale que tout le monde nous pousse à faire : nos parents, nos amis, la société. Sauf que cette voie royale l’a amenée à exercer un job qui ne lui correspondait pas. Celui d’auditrice financière. Là elle a réalisé à quel point il est difficile de sortir des rails pour trouver enfin quelque chose qui lui plaise vraiment...
                    </div>
                    <p>Découvrez l’intégralité de son histoire dans l’épisode 1 !</p>
                </div>

                <div class="visible-sm visible-xs anais-petite">
                    <img src="<?php echo bloginfo('stylesheet_directory') . '/images/podcast/femme-sm.png'; ?>"/>
                </div>


            </div>
        </section>
        <!-- **** SLIDE 5 *** -->
        <!--******************-->
        


        

        <!--******************-->
        <!-- **** SLIDE 7 *** -->
        <section class="slide slide7" >
            <div class="cadre-prix">

                <h3>En moyenne 3h de coaching personnel coûtent</h3>
                <h2 style="text-decoration: line-through;">450 €</h2>
                <h3>Avec ce programme audio, recevez plus de 3h de conseils et une liste de métiers 100% personnalisée</h3>
                <h2 class="prix-podcast" style="color:#03e8fc;">pour seulement 79&nbsp€</h2>

                <div class="bouton-slide-7">
                    <?php 
                        if(isset($_GET['code']))
                        {
                            ?>
                            <a href="https://boussole.wake-up.io/podcast/monpodcast/inscription?code=on">
                                <button class="btn">Je m'inscris !</button>
                            </a>
                            <?php
                        }
                        else {
                            ?>
                            <a href="https://boussole.wake-up.io/podcast/monpodcast/inscription">
                                <button class="btn">Je m'inscris !</button>
                            </a>
                            <?php
                        }
                    ?>
                </div>

            </div>            
        </section>
        <!-- **** SLIDE 7 *** -->
        <!--******************-->
        <!--******************-->
        <!-- ****** FAQ ***** -->
        <section id="faq" class="slide-faq">
            <ul class="faq">
                <h3 class="item-faq"><span style="color:#ff0055">Questions</span> fréquentes</h3>

                <?php 
                    if(isset($_GET['cadeau']))
                    {
                        include('wp-content/themes/t-sixteen-child-theme/myphpfiles/questions-faq-cadeau.php');
                    }

                    else {
                        include('wp-content/themes/t-sixteen-child-theme/myphpfiles/questions-faq.php');
                    }
                 ?>
            </ul>
        </section>

        <!-- ******* FAQ ******* -->
        <!--*********************-->
        <!--*********************-->
        <!-- ****** PRIX ******* -->

        <section class="prix-final">
            <div class="container-fluid">
                <div class="clearfix">
                    <div class="cadre-prix-2">
                        <h3>Programme audio + Recommandations de métiers</h3>
                        <h2 style="color:#03e8fc;">pour seulement 79&nbsp€</h2>

                        <div class="bouton-slide-7">

                            <?php
                                if(isset($_GET['code']))
                                {
                                    ?>
                                    <a href="https://boussole.wake-up.io/podcast/monpodcast/inscription?code=on">
                                        <button class="btn">Je m'inscris !</button>
                                    </a>
                                    <?php
                                }
                                else {
                                    ?>
                                    <a href="https://boussole.wake-up.io/podcast/monpodcast/inscription">
                                        <button class="btn">Je m'inscris !</button>
                                    </a>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>  
                </div>
                <!--
                <a class="cta-boussole" target="_blank" href="https://boussole.wake-up.io/">Vous n'avez pas encore passé notre test de personnalité gratuit ?</a>-->
            </div>
        </section>
        
        <!-- ****** PRIX ******* -->
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



    </main>
	
	
</div><!-- .content-area -->