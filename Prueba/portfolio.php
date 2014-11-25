<!DOCTYPE html>
<html lang="es">
	<head>
		<?php
		include ('headings.php');
		?>
	</head>
	<body>
		<div id="header">
			<?php
			$pagina = "products";
			include ('menu.php');
			?>
		</div>
		<!-- Portfolio Project Content Part ==================================================
		================================================== -->
		<div class="blankSeparator"></div>
		<div class="container portfolio">
			<div class="two_third">
				<div class="flexslider">
					<ul class="slides">
						<li><img src="images/portfolio/1.jpg" alt="" />
						</li>
						<li><img src="images/portfolio/2.jpg" alt="" />
						</li>
						<li><img src="images/portfolio/3.jpg" alt="" />
						</li>
					</ul>
				</div>
			</div>
			<div class="one_third lastcolumn">
				<h2>The Project Title</h2>
				<p>
					Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor. <span class="green">Semper</span> sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor.
				</p>
				<h4>Donec commodo tortor pellentesque nisl <span class="red">cursus volutpat</span>. Sed sit amet odio et magna tempor posuere vestibulum ac risus. Sed nec magna dolor.</h4>
				<p class="portfolio">
					<a href="#">Project Details</a> | <a href="#">Visit Website</a>
				</p>
			</div>
			<div class="two_third">
				<div class="flexslider">
					<ul class="slides">
						<li><img src="images/portfolio/3.jpg" alt="" />
						</li>
						<li><img src="images/portfolio/2.jpg" alt="" />
						</li>
						<li><img src="images/portfolio/1.jpg" alt="" />
						</li>
					</ul>
				</div>
			</div>
			<div class="one_third lastcolumn">
				<h2>The Project Title</h2>
				<p>
					Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor. <span class="green">Semper</span> sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor.
				</p>
				<h4>Donec commodo tortor pellentesque nisl <span class="red">cursus volutpat</span>. Sed sit amet odio et magna tempor posuere vestibulum ac risus. Sed nec magna dolor.</h4>
				<p class="portfolio">
					<a href="#">Project Details</a> | <a href="#">Visit Website</a>
				</p>
			</div>
			<div class="two_third">
				<div class="flexslider">
					<ul class="slides">
						<li><img src="images/portfolio/2.jpg" alt="" />
						</li>
						<li><img src="images/portfolio/3.jpg" alt="" />
						</li>
						<li><img src="images/portfolio/1.jpg" alt="" />
						</li>
					</ul>
				</div>
			</div>
			<div class="one_third lastcolumn">
				<h2>The Project Title</h2>
				<p>
					Semper sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor. <span class="green">Semper</span> sit amet bibendum ac, tincidunt sit amet eros. In scelerisque vestibulum tempor.
				</p>
				<h4>Donec commodo tortor pellentesque nisl <span class="red">cursus volutpat</span>. Sed sit amet odio et magna tempor posuere vestibulum ac risus. Sed nec magna dolor.</h4>
				<p class="portfolio">
					<a href="#">Project Details</a> | <a href="#">Visit Website</a>
				</p>
			</div>
		</div>
		<!-- Portfolio Pagination ==================================================
		================================================== -->
		<div class="container">
			<div class="blankSeparator">
				<!-- -->
			</div>
			<div id="pagination" class="fl">
				<!-- Pagination -->
				<ul class="pagination">
					<li class='first-page'>
						<a href='#'>&laquo;</a>
					</li>
					<li>
						<a href='#' >&lsaquo;</a>
					</li>
					<li>
						<a href="#" id="currentPage">1</a>
					</li>
					<li>
						<a href="portfolio.html">2</a>
					</li>
					<li>
						<a href="portfolio.html">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href='#' >&rsaquo;</a>
					</li>
					<li class='last-page'>
						<a href='#'>&raquo;</a>
					</li>
				</ul>
			</div>
			<!-- end pagination -->
		</div>
		<!-- end centerContainer -->
		<div class="blankSeparator1"></div>
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