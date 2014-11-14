<!DOCTYPE html>
<html lang="en">
	<head>
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
			<!-- Single Blog Content Part ==================================================
			================================================== -->
			<div class="blankSeparator"></div>
			<div class="container singleblog">
				<!-- Blog Post ==================================================
				================================================== -->
				<div class="two_third">
					<section class="postone">
						<h2>News from Photography World</h2>
						<p class="meta">
							<span class="left">Date: <strong>14 MAY</strong></span><span class="left">posted by <strong>Anariel</strong></span><span class="left tags">on <a href="#" rel="tag">photography</a>, <a href="#" rel="tag">Artistic</a>, <a href="#" rel="tag">Beauty and Art</a></span><span class="left comment"> <a href="#" title="">46 Comments</a></span>
						</p>
						<a href="images/portfolio/bigsize.jpg" class="prettyPhoto[gal]"><img src="images/portfolio/2.jpg" alt=""/></a>
						<p>
							Lorem ipsum dolor sit amet, proscriptum videt ulteriori. Filiam sunt amore nec est cum autem est se in. Cellam sanctissima coniunx in lucem exempli paupers coniunx rex cum autem quod ait regem Ardalio. Filiam sunt amore nec est cum autem est se in.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam,feugiat vitae, ultricies eget, tempor sit amet, ante.
						</p>
						<h4>Lorem ipsum dolor sit amet, verenam operibus furiam conclusoque sponte profundo. Conservus mihi esse haec aliquam inlido laetare quod eam ad per. Antiochia videns quia quod non ait est Apollonius non dum animae tertio eam ad te princeps ea docentur Hellenicus ut diem finito convocatis secessit civitatis civium takimata.</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis nibh odio. Morbi ipsum turpis, rutrum et dapibus eget, cursus imperdiet orci. Nam nisl nunc, aliquet et porta at, adipiscing vitae sapien. Fusce congue facilisis pulvinar. In vitae lacus ac neque scelerisque vehicula. Quisque sodales, lectus non dignissim egestas, est nulla pretium eros, sed tincidunt massa velit eget lectus. Sed lectus enim, suscipit ut ultrices non, adipiscing quis odio. Cras sodales molestie tellus sit amet convallis. Mauris sed leo orci. Nullam facilisis auctor fringilla. Quisque eget est enim, blandit vestibulum magna. Suspendisse nec leo felis.
						</p>
						<h4 class="tags">Tags: <a href="#">Seo</a> &loz; <a href="#">Print</a> &loz; <a href="#">Design</a></h4>
					</section>
					<!-- Blog Comments ==================================================
					================================================== -->
					<section class="comments">
						<div class="blankSeparator"></div>
						<div class="sepContainer2"></div>
						<h2>Comments</h2>
						<div class="sepContainer2"></div>
						<div class="blankSeparator"></div>
						<div class="boxtwosep"></div>
						<div id="comments">
							<ul id="articleCommentList">
								<li>
									<div class="commentMeta">
										<p>
											April 23nd
										</p>
										<img class="user" src="images/blog/1.png" alt="Default user icon" />
									</div>
									<!-- end commentMeta -->
									<div class="commentBody">
										<h3><a href="#">John Smith</a></h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat lectus risus. Donec scelerisqu turpis non ligula convallis viverra pharetra metus volutpat. Mauris eu mattis metus. Nullam et faucibus dui. In hac habitasse platea dictumst. Praesent ut massa arcu, eget fermentum leo.
										</p>
										<a href="#" class="buttonhome fl">more <span>+</span></a>
									</div>
									<!-- end commentBody -->
								</li>
								<li>
									<div class="commentMeta">
										<p>
											April 23nd
										</p>
										<img class="user" src="images/blog/2.png" alt="Default user icon" /><span class="adminIcon">ADMIN</span>
									</div>
									<!-- end commentMeta -->
									<div class="commentBody adminReply">
										<h3><a href="#">Admin</a></h3>
										<p>
											Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor    quam,feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
										</p>
										<a href="#" class="buttonhome fl">more <span>+</span></a>
									</div>
									<!-- end commentBody -->
									<ul></ul>
								</li>
							</ul>
						</div>
						<!-- end Comments -->
					</section>
					<!-- Blog Contact ==================================================
					================================================== -->
					<div id="contactForm">
						<h2>Leave a comment</h2>
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
				<!-- two_third ends here -->
				<!-- Blog Sidebar ==================================================
				================================================== -->
				<div class="one_third lastcolumn sidebar">
					<section class="first">
						<h3>Blog Navigation</h3>
						<div class="boxtwosep"></div>
						<ul class="blogList">
							<li>
								<a class="about" href="blog.html" title="">Blog - Style One</a>
							</li>
							<li class="activenavigationItem">
								Blog - Active Item
							</li>
							<li>
								<a class="about" href="singleblog.html" title="">Blog - Blog Post</a>
							</li>
						</ul>
					</section>
					<section class="second">
						<h3>Codrops Tutorials</h3>
						<div class="boxtwosep"></div>
						<ul class="blogList">
							<li>
								<a class="about" href="http://tympanus.net/codrops/2012/06/18/3d-thumbnail-hover-effects/" title="">Codrops - Hover Effects</a>
							</li>
							<li>
								<a class="about" href="http://tympanus.net/codrops/2011/12/21/slopy-elements-with-css3/" title="">Codrops - Slopy Elements CSS3</a>
							</li>
							<li>
								<a class="about" href="http://tympanus.net/codrops/2011/09/12/elastislide-responsive-carousel/" title="">Codrops - Responsive Elastislide</a>
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
			</div>
			<!-- container ends here -->
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