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
					<p class="flex-caption">
						Bienvenidos al sitio de Cobrinsa
					</p>
				</li>
			</ul>
		</div>
		<!-- Container Marcas Box Three ==================================================
		================================================== -->
		<div class="container boxthree">
			<div class="blankSeparator"></div>
			<h2>Marcas que manejamos</h2>
			<div class="blankSeparator"></div>
			<div class="one_third">
				<img src="images/home/1.png" alt=""/>
				<div class="blankSeparator"></div>
				<h3>Natural beauty</h3>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
				<div class="blankSeparator"></div>
				<a class ="simple" href="#">+ Learn more</a>
			</div>
			<!-- one-third column ends here -->
			<div class="one_third">
				<div style="background-color: #fff; min-height: 150px;">
					<span class="helper"></span>
					<img src="images/home/2.png" alt="" style="vertical-align: middle;"/>
				</div>
				<div class="blankSeparator"></div>
				<h3>Natural beauty</h3>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
				<div class="blankSeparator"></div>
				<a class ="simple" href="#">+ Learn more</a>
			</div>
			<!-- one-third column ends here -->
			<div class="one_third lastcolumn">
				<img src="images/home/3.png" alt=""/>
				<div class="blankSeparator"></div>
				<h3>Natural beauty</h3>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
				<div class="blankSeparator"></div>
				<a class ="simple" href="#">+ Learn more</a>
			</div>
			<!-- one-third column ends here -->
		</div>
		<!-- container ends here -->
		<!-- Container Clientes - Box Two ==================================================
		================================================== -->
		<div class="container">
			<div class="blankSeparator"></div>
			<h2>Algunos de nuestros clientes</h2>
			<div class="blankSeparator"></div>
			<div class="one_sixth">
				<a href="http://rodase.com.mx/"> <img src="images/rodase.png" alt=""/> </a>
			</div>
			<!-- end one_sixth -->
			<div class="one_sixth">
				<a href="http://www.argentosa.com/"> <img src="images/argentosa.png" alt=""/> </a>
			</div>
			<!-- end one_sixth -->
			<div class="one_sixth" >
				<a href="http://www.argentosa.com/"> <img src="images/alanAgs.png" alt=""/></a>
			</div>
			<!-- end one_sixth -->
			<div class="one_sixth">
				<a href="http://www.emyasa.com.mx/"> <img src="images/emyasa.png" alt=""/></a>
			</div>
			<!-- end one_sixth -->
			<div class="one_sixth">
				<a href="http://www.bombasvaldes.com/"> <img src="images/valdes.png" alt=""/></a>
			</div>
			<!-- end one_sixth -->
			<div class="one_sixth lastcolumn">
				<a href="http://www.fesabronze.com/"> <img src="images/fesa.png" alt=""/></a>
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