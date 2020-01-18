	<!-- MENU -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style-menu-new.css?v06" rel="stylesheet">

	<nav>
		<div onclick="openNav()" id="menuToggle">
    		<input type="checkbox" />
			<span></span>
			<span></span>
			<span></span>
		</div>

		<ul id="navigation" class="navigation">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

			<li><a href="<?php echo site_url();?>">Accueil</a></li>
			<li>
				<div id="myDropbtn" class="dropdown">
					<a  class="dropbtn" onclick="menudropdown()">Programmes <span class="caret"></span></a>
					<div id="myDropdown" class="dropdown-content">
						<ul>
							<li><a href="<?php echo site_url();?>/cours-audio">Cours audio</a></li>
							<li><a href="<?php echo site_url();?>/ikigai">Ikigai</a></li>
							<li><a href="<?php echo site_url();?>/fintech">Fintech</a></li>
						</ul>
					</div>
				</div>
			</li>
			<!--<li><a href="<?php echo site_url();?>/evenements">Événements</a></li>-->
			<!--<li><a href="<?php echo site_url();?>/boussole">Test Boussole</a></li>-->

			<li>
				<div id="myDropbtn3" class="dropdown">
					<a  class="dropbtn" onclick="menudropdown3()">Test Boussole <span class="caret"></span></a>
					<div id="myDropdown3" class="dropdown-content">
						<ul>
							<li><a href="<?php echo site_url();?>/boussole">Gratuit</a></li>
							
							<li><a href="<?php echo site_url();?>/boussolepro">Entreprise</a></li>
						</ul>
					</div>
				</div>
			</li>

			
			<li><a href="<?php echo site_url();?>/lieu">Le lieu</a></li>

			<li>
				<div id="myDropbtn2" class="dropdown">
					<a  class="dropbtn" onclick="menudropdown2()">Média <span class="caret"></span></a>
					<div id="myDropdown2" class="dropdown-content">
						<ul>
							<li><a href="https://blog.wake-up.io">Articles</a></li>
							
							<li><a href="<?php echo site_url();?>/podcast">Podcast</a></li>
						</ul>
					</div>
				</div>
			</li>
			<!--<li class="cta-corpo"><a href="<?php echo site_url();?>/boussolepro">Entreprises</a></li>-->
		</ul>
	</nav>