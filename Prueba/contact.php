<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
		include ('headings.php');
		?>
	</head>
	<body>
		<div id="header">
			<?php
			include ('menu.php');
			?>
		</div>
		<!-- Contact Content Part - GoogleMap ==================================================
		================================================== -->
		<section class="map">
			<!-- google map -->
			<div class="map-holder">
				<div class="map-container">
					<iframe class="map" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Munich,+Germany&amp;aq=0&amp;oq=M%C3%BCnchen&amp;sll=37.0625,-95.677068&amp;sspn=53.212719,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=Munich,+Upper+Bavaria,+Bavaria,+Germany&amp;t=m&amp;ll=48.23565,11.596069&amp;spn=0.347588,2.635345&amp;z=10&amp;iwloc=A&amp;output=embed"></iframe>
					<!-- end google map -->
				</div>
				<!--map-container ends here-->
			</div>
			<!--map-holder ends here-->
		</section>

		<!-- Contact Content Part - Contact Form ==================================================
		================================================== -->
		<div class="container">
			<div class="blankSeparator"></div>
			<!-- Contact Sidebar ==================================================
			================================================== -->
			<div class="one_third contactsidebar">
				<section class="first">
					<h3>Blog Navigation</h3>
					<div class="boxtwosep"></div>
					<ul class="contactsidebarList">
						<li>
							123456 Street Name, London
						</li>
						<li>
							Phone: (1800) 987-12341
						</li>
						<li>
							Fax: (1800) 987-12341
						</li>
						<li>
							Website: <a href="#" title="">http://yoursitename.com</a>
						</li>
						<li>
							Email: <a href="#" title="">info@proximet.com</a>
						</li>
					</ul>
				</section>
				<section class="third">
					<h3>Latest Offers</h3>
					<div class="boxtwosep"></div>
					<h5><span class="color">40%</span> Sale &rsaquo;&rsaquo; Love Fashion</h5>
					<p>
						There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
					</p>
				</section>
			</div>
			<!-- one_third ends here -->
			<div class="two_third lastcolumn contact1">
				<div id="contactForm">
					<h2>Leave a comment</h2>
					<div class="sepContainer"></div>
					<form action="process.php" method="post" id="contact_form">
						<div class="name">
							<label for="name">Your Name:</label>
							<p>
								Please enter your full name
							</p>
							<input id=name name=email type=text placeholder="e.g. Mr. John Smith" required />
						</div>
						<div class="email">
							<label for="email">Your Email:</label>
							<p>
								Please enter your email address
							</p>
							<input id=email name=email type=email placeholder="example@domain.com" required />
						</div>
						<div class="message">
							<label for="message">Your Message:</label>
							<p>
								Please enter your question
							</p>
							<textarea id=message name=message rows=6 cols=10 required></textarea>
						</div>
						<div id="loader">
							<input type="submit" value="Submit" />
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