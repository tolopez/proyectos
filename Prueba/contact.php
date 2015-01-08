<!DOCTYPE html>
<html lang="es">
	<head>
		<?php
		include ('headings.php');
		?>
		<script>
			google.maps.event.addDomListener(window, 'load', initializeMap);
		</script>
	</head>
	<body>
		<div id="header">
			<?php
			$pagina = "contact";
			include ('menu.php');
			?>
		</div>
		<!-- Contact Content Part - GoogleMap ==================================================
		================================================== -->
		<!-- <section class="map"> -->
		<!-- google map -->
		<div class="map-holder">
			<div class="map-container" id="map-container">
				<!-- <iframe class="map" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Gómez+Palacio,+DGO,+México&amp;sll=37.0625,-95.677068&amp;sspn=53.212719,135.263672&amp;ie=UTF8&amp;hq=&amp;&amp;t=m&amp;ll=25.5861363,-103.5061606&amp;spn=0.347588,2.635345&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe> -->
				<!-- end google map -->
			</div>
			<!--map-container ends here-->
		</div>
		<!--map-holder ends here-->
		<!-- </section> -->

		<!-- Contact Content Part - Contact Form ==================================================
		================================================== -->
		<div class="container">
			<div class="blankSeparator"></div>
			<!-- Contact Sidebar ==================================================
			================================================== -->
			<div class="one_third contactsidebar">
				<section class="first">
					<h3>Dirección</h3>
					<div class="boxtwosep"></div>
					<ul class="contactsidebarList">
						<li>
							Jazmín #213 Ote, Colonia Nuevo Refugio, Gómez Palacio, Dgo.
						</li>
						<li>
							Teléfono: (871) 748-6206
						</li>
						<li>
							Fax: (871) 748-6208
						</li>
						<li>
							Ventas: <a href="#" title="">ventas@cobrinsa.com</a>
						</li>
					</ul>
				</section>
				<!-- <section class="third">
				<h3>Latest Offers</h3>
				<div class="boxtwosep"></div>
				<h5><span class="color">40%</span> Sale &rsaquo;&rsaquo; Love Fashion</h5>
				<p>
				There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
				</p>
				</section> -->
			</div>
			<!-- one_third ends here -->
			<div class="two_third lastcolumn contact1">
				<div id="contactForm">
					<h2>Déjanos tus dudas o comentarios</h2>
					<div class="sepContainer"></div>
					<form action="process.php" method="post" id="contact_form">
						<div class="name">
							<label for="name">Tu nombre:</label>
							<p>
								Por favor ingresa tu nombre completo
							</p>
							<input id="name" name="name" type="text" placeholder="ej. Sr. Juan Rodriguez" required="required" />
						</div>
						<div class="email">
							<label for="email">Tu correo electrónico:</label>
							<p>
								Por favor ingresa tu correo electrónico
							</p>
							<input id="email" name="email" type="email" placeholder="ejemplo@dominio.com" required="required" />
						</div>
						<div class="message">
							<label for="message">Tu mensaje:</label>
							<p>
								Por favor ingresa tus dudas o comentarios
							</p>
							<textarea id="message" name="message" rows="6" cols="10" required="required"></textarea>
						</div>
						<div id="loader">
							<input type="submit" value="Enviar" />
						</div>
					</form>
				</div>
				<!-- end contactForm -->
			</div>
		</div>
		<div class="blankSeparator2"></div>
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