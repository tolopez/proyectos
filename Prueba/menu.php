<div class="container header">
	<header>
		<div class="logo">
			<a href="index.php"><img src="images/new_logo_cobrinsa_white_1.png" style="max-height: 26px;" /> <img src="images/new_logo_cobrinsa_white_2.png" id="logo_texto" style="max-height: 24px;" /></a>
		</div>
		<div class="mainmenu">
			<div id="mainmenu">
				<ul class="sf-menu">
					<li>
						<a href="index.php" <?php
						echo $pagina== 'home' ? 'class="current"' : ''
						?> ><span class="home"><img src="images/home1.png" alt="" /></span>Inicio</a>
					</li>
					<li>
						<a href="about.php" <?php
						echo $pagina== 'about' ? 'class="current"' : ''
						?> ><span class="home"><img src="images/about1.png" alt="" /></span>Acerca de</a>
					</li>
					<li>
						<a href="portfolio.php" <?php
						echo $pagina== 'products' ? 'class="current"' : ''
						?> ><span class="home"><img src="images/portfolio1.png" alt="" /></span>Productos</a>
					</li>
					<li>
						<a href="contact.php" <?php
						echo $pagina== 'contact' ? 'class="current"' : ''
						?> ><span class="home"><img src="images/contact1.png" alt="" /></span>Contacto</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- <nav class="nav">
		<img src="images/icon-mobile-nav.png" width="24px" height="22px"/>
		</nav> -->
		<!-- Otro menú responsivo -->

		<nav class="nav" id="responsive-menu" onclick="onClickNavMenu();">
			<img src="images/icon-mobile-nav.png" width="24px" height="22px"/>
			<ul>				
				<li <?php
				echo $pagina== 'home' ? 'class="current"' : ''
				?> >
					<a href="index.php">Inicio</a>
				</li>
				<li <?php
				echo $pagina== 'about' ? 'class="current"' : ''
				?> >
					<a href="about.php">Acerca de</a>
				</li>
				<li <?php
				echo $pagina== 'products' ? 'class="current"' : ''
				?> >
					<a href="portfolio.php">Productos</a>
				</li>
				<li <?php
				echo $pagina== 'contact' ? 'class="current"' : ''
				?> >
					<a href="contact.php">Contacto</a>
				</li>
			</ul>
		</nav>
	</header>
</div>
