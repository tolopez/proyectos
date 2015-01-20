<!DOCTYPE html>
<html>
	<head>
		<?php
		include ('headings.php');
		?>
	</head>
	<body>
		<div class="flexslider">
			<div id="header">
				<?php
				$pagina = "home";
				include ('menu.php');
				?>
			</div>
			<ul class="slides">
				<li>
					<img src="images/flexslider/3.png" alt=""/>
				</li>
				<li>
					<img src="images/flexslider/4.png" alt="" />
				</li>
				<li>
					<img src="images/flexslider/6.png" alt="" />
				</li>
			</ul>
		</div>
		<div id="tagline">
			<h1>COMERCIALIZADORA DE BRONCE
			<br />
			<br />
			<br />
			E INSUMOS S.A. DE C.V.</h1>
		</div>
		<!-- Container Marcas Box Three ==================================================
		================================================== -->
		<div class="container boxthree">
			<div class="blankSeparator"></div>
			<h2>Marcas que manejamos</h2>
			<div class="blankSeparator"></div>
			<a href="http://www.graff.com.mx/" target="_blank">
			<div class="one_fourth">
				<div class="image_container">
					<img src="images/home/1.png" alt=""/>
				</div>
				<div class="blankSeparator"></div>
				<div class="text_container">
					<h3>Abrasivos Graff</h3>
					<p>
						Discos de corte, puntas, ruedas, conos y segmentos.
					</p>
				</div>
			</div> </a>
			<a href="http://www.procut.ie/" target="_blank">
			<div class="one_fourth">
				<div class="image_container">
					<img src="images/home/2.png" alt=""/>
				</div>
				<div class="blankSeparator"></div>
				<div class="text_container">
					<h3>Procut</h3>
					<p>
						Limas rotativas de carburo de tungsteno.
					</p>

				</div>
			</div></a>
			<a href="http://www.atlaspacific.net/" target="_blank">
			<div class="one_fourth">
				<div class="image_container">
					<img src="images/home/3.png" alt=""/>
				</div>
				<div class="blankSeparator"></div>
				<div class="text_container">
					<h3>Atlas Pacific Corporation</h3>
					<p>
						Lingote de bronce certificado e insumos para la fundición.
					</p>
				</div>
			</div> </a>
			<a href="http://atatools.com/" target="_blank">
			<div class="one_fourth lastcolumn ata">
				<div class="image_container">
					<img src="images/home/4.png" alt=""/>
				</div>
				<div class="blankSeparator"></div>
				<div class="text_container">
					<h3>ATA Tools</h3>
					<p>
						Herramientas neumáticas.
					</p>
				</div>
			</div> </a><!-- one-third column ends here -->
		</div>
		<!-- container ends here -->
		<!-- Container Clientes - Box Two ==================================================
		================================================== -->
		<div class="container">
			<div class="blankSeparator"></div>
			<h2>Algunos de nuestros clientes</h2>
			<div class="blankSeparator"></div>
			<div class="one_sixth">
				<a href="http://rodase.com.mx/" target="_blank"> <img src="images/rodase.png" alt=""/> </a>
			</div>
			<!-- end one_sixth -->
			<div class="one_sixth">
				<a href="http://www.argentosa.com/" target="_blank"> <img src="images/argentosa.png" alt=""/> </a>
			</div>
			<!-- end one_sixth -->
			<div class="one_sixth" >
				<a href="http://www.fuerzahidraulicamx.com/" target="_blank"> <img src="images/fuerzah.png" alt=""/></a>
			</div>
			<!--
			<div class="one_sixth" >
			<a href="http://www.argentosa.com/"> <img src="images/alanAgs.png" alt=""/></a>
			</div>-->
			<!-- end one_sixth -->
			<div class="one_sixth">
				<a href="http://www.emyasa.com.mx/" target="_blank"> <img src="images/emyasa.png" alt=""/></a>
			</div>
			<!-- end one_sixth -->
			<div class="one_sixth">
				<a href="http://www.bombasvaldes.com/" target="_blank"> <img src="images/valdes.png" alt=""/></a>
			</div>
			<!-- end one_sixth -->
			<div class="one_sixth lastcolumn">
				<a href="http://www.fesabronze.com/" target="_blank"> <img src="images/fesa.png" alt=""/></a>
			</div>
			<!-- end one_sixth lastCol -->
		</div>
		<!-- end container -->

		<div class="blankSeparator1"></div>
		<!-- End Document
		================================================== -->
		<div id="footer">
			<?php
			include ('footer.php');
			?>
		</div>
		<div id="copyright">
			<?php
			include ('copyright.php');
			?>
		</div>
	</body>
</html>