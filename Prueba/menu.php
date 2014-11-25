<div class="container header">
	<header>
		<div class="logo">
			<a href="index.php"><img src="images/new_logo_cobrinsa_white_1.png" style="max-height: 26px;" /> <img src="images/new_logo_cobrinsa_white_2.png" style="max-height: 24px;" /></a>
		</div>
		<div class="mainmenu">
			<div id="mainmenu">
				<ul class="sf-menu">
					<li>
						<a href="index.php" <?php
						echo $pagina== 'home' ? 'class="visited"' : ''
						?> ><span class="home"><img src="images/home1.png" alt="" /></span>Inicio</a>
					</li>
					<li>
						<a href="about.php" <?php
						echo $pagina== 'about' ? 'class="visited"' : ''
						?> ><span class="home"><img src="images/about1.png" alt="" /></span>Acerca de</a>
					</li>
					<li>
						<a href="portfolio.php" <?php
						echo $pagina== 'products' ? 'class="visited"' : ''
						?> ><span class="home"><img src="images/portfolio1.png" alt="" /></span>Productos</a>
					</li>
					<li>
						<a href="contact.php" <?php
						echo $pagina== 'contact' ? 'class="visited"' : ''
						?> ><span class="home"><img src="images/contact1.png" alt="" /></span>Contacto</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- Otro menú responsivo -->
		<nav class="nav" id="responsive-menu">
			<ul>
				<li class="current">
					<a href="#">Inicio</a>
				</li>
				<li>
					<a href="#">Acerca de</a>
				</li>
				<li>
					<a href="#">Productos</a>
				</li>
				<li>
					<a href="#">Contacto</a>
				</li>
			</ul>
		</nav>
	</header>
</div>
