<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Africa Centre for Gender, Social Research and Impact Assessment | Bogposts</title>
	<meta name="description" content="Africa Centre for Gender, Social Research and Impact Assessment | Welcome">
	<meta name="keywords" content="Africa,Gender, Social Research,Impact Assessment">
	<meta name="author" content="Africa Centre for Gender, Social Research and Impact Assessment | Kevin Barasa">
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/blogpost/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/blogpost/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/blogpost/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/blogpost/favicons/favicon-194x194.png" sizes="194x194">
	<link rel="manifest" href="<?php echo get_bloginfo('template_url') ?>/blogpost/favicons/manifest.json">
	<link rel="shortcut icon" href="<?php echo get_bloginfo('template_url') ?>/blogpost/favicon.png">
	<meta name="msapplication-TileColor" content="#603cba">
	<meta name="msapplication-config" content="<?php echo get_bloginfo('template_url') ?>/blogpost/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/blogpost/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/blogpost/fonts/font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/blogpost/css/all.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<style type="text/css">
		div#blog > p{
			text-align:left !important;
		}
	</style>
</head>
<body>
<div id="wrapper">
		<header id="header">
			<div class="container">
				<div class="logo"><a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo.png" alt="Africa Centre for Gender, Social Research and Impact Assessment"></a></div>
				<nav id="nav">
					<div class="opener-holder">
						<a href="#" class="nav-opener"><span></span></a>
					</div>
					<!-- <a href="#" class="btn btn-primary rounded">Buy Now</a> -->
					<div class="nav-drop">
						<ul>
							<li class="active visible-sm visible-xs"><a href="#">Home</a></li>
								<li><a href="#features" >What We Do</a></li>
								<li><a href="#dashboard" >Reports</a></li>
								<li><a href="#customers" >Readers Digest</a></li>		
								<li><a href="#contact" >Get in Touch</a></li>
						</ul>
						<div class="drop-holder visible-sm visible-xs">
							<span>Follow Us</span>
							<ul class="social-networks">
								<li><a class="fa fa-github" href="#"></a></li>
								<li><a class="fa fa-twitter" href="#"></a></li>
								<li><a class="fa fa-facebook" href="#"></a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
<!-- 	<section class="visual">
		<div class="container">
			<div class="text-block">
				<div class="heading-holder">
					<h1>Fork App</h1>
				</div>
				<p class="tagline">A real gamechanger in the world of web development</p>
				<span class="info">Version 2.8 for Mac and Windows</span>
			</div>
		</div>
		<img src="<?php echo get_bloginfo('template_url') ?>/blogpost/images/img-decor-01.jpg" alt="" class="bg-stretch">
	</section> -->
	<section class="main">
		<div class="container">
			<div id="cta">
				<!-- <a href="#" class="btn btn-primary rounded"></a>
				<p></p> -->
			</div>
			<div class="row" style="display:block; padding-top:100px; ">
			<!-- WordPress Loop -->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="text-box col-md-offset-1 col-md-10 <?php if(is_home() && $post==$posts[0] && !is_paged()) echo ' firstpost';?>" id="blog">
					<h2 style="text-transform:capitalize; color:#6CA12A!important; text-align:left; font-size: 1.7em;" id="post-<?php the_ID(); ?>">
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
					<em><?php the_time('F jS') ?>, <?php the_time('Y') ?></em>
					<p>
						<?php the_content(__('Read more'));?>
					</p>
					<br>
					<p class="blogcategory">Categories: <?php the_category(' &bull; '); ?></p>
					<p class="blogtags"><?php the_tags(); ?> </p> 
					<?php edit_post_link(__('<strong>Edit</strong>'));?>
					<div class="social-placeholder"><img src="<?php echo get_bloginfo('template_url') ?>/blogpost/images/img-social-placeholder-01.png" height="26" width="365" alt=""></div>
					<?php trackback_rdf(); ?> 
					<?php comments_template(); // Get comments.php template ?>
					<?php endwhile; else: ?>
					<p> <?php _e('Sorry, no posts matched your criteria.'); ?> </p>
					<?php endif; ?>
				</div>
				<ul class="navigationarrows"> 
				<li class="previous"><?php previous_post_link(' Previous post:<br /> &laquo; %link'); ?> <?php if(!get_adjacent_post(false, '', true)) { echo '<span>&laquo;Previous</span>'; } // if there are no older articles ?></li>
				<li class="next"><?php next_post_link('Next post: <br /> %link &raquo;'); ?> <?php if(!get_adjacent_post(false, '', false)) { echo '<span>Next post:</span>'; } // if there are no newer articles ?> </li> 
				</ul> 
				<!-- End WordPress Loop -->
			</div>
		</div>
	</section>
	<section class="main">
		<div class="container">
			<div class="block-holder">
				<div class="block-frame">
					<div class="cycle-gallery">
						<div class="mask">
							<div class="slideset">
								<div class="slide">
									<div class="img-box">
										<div class="img-holder"><img src="<?php echo get_bloginfo('template_url') ?>/images/gender-icon.jpg" height="85" width="85" alt=""></div>
										<div class="text-holder">
											<h3>Evaluation Studies</h3>
											<a href="#">@agrigender</a>
										</div>
									</div>
									<p>We conduct mid term and end of project evaluation studies focused on analysing the social and economic impacts of agriculture research and development programs</p>
									<em class="date">2 hours ago</em>
								</div>
								<div class="slide">
									<div class="img-box">
										<div class="img-holder"><img src="<?php echo get_bloginfo('template_url') ?>/images/gender-icon.jpg" height="85" width="85" alt=""></div>
										<div class="text-holder">
											<h3>Gender Analysis and Training</h3>
											<a href="#">@agrigender</a>
										</div>
									</div>
									<p>We have a roster of consultants with experience in gender analysis in agriculture, general and specialised gender training</p>
									<em class="date">5 hours ago</em>
								</div>
								<div class="slide">
									<div class="img-box">
										<div class="img-holder"><img src="<?php echo get_bloginfo('template_url') ?>/images/gender-icon.jpg" height="85" width="85" alt=""></div>
										<div class="text-holder">
											<h3>Integrating Gender in Projects</h3>
											<a href="#">@agrigender</a>
										</div>
									</div>
									<p>This is essential not only for achieving project goals but also for achieving gender equality. Our consultants work with you to ensure gender is integral in your programming</p>
									<em class="date">1 day ago</em>
								</div>
							</div>
						</div>
						<a class="btn-prev" href="#"><i class="glyphicon glyphicon-menu-left"></i></a>
						<a class="btn-next" href="#"><i class="glyphicon glyphicon-menu-right"></i></a>
					</div>
				</div>
				<div class="block-frame">
					<ul class="cta-list">
						<li>
							<a href="#" class="btn btn-default"><i class="fa fa-github"></i> GitHub</a>
							<p>7 352 Followers</p>
						</li>
						<li>
							<a href="#" class="btn btn-info"><i class="fa fa-twitter"></i> Twitter</a>
							<p>136 312 Followers</p>
						</li>
						<li>
							<a href="#" class="btn btn-blue"><i class="fa fa-facebook"></i> Facebook</a>
							<p>218 092 Subscribers</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- 	<section class="main">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-4">
						<h3>New in Release 2.8</h3>
						<h4>Fully Available: Live Preview Support for Multiple Browsers</h4>
						<p>Morbi faucibus ante ipsum, a tincidunt libero posuere et. Etiam tempor tortor at odio condimentum, sit amet fringilla ligula maximus. Mauris venenatis nisl nisi, et dictum dui aliquet nec. Sed erat, nec aliquam vel, aliquam ac felis. </p>
						<h4>Improved Support for Typing </h4>
						<p>Nulla purus quam, pulvinar sed ante et, feugiat maximus velit. Donec eu elit mauris. </p>
						<h4>Improved Stability</h4>
						<p>Proin id ligula eget massa tincidunt molestie. Morbi urna lectus, molestie vel quam vel, iaculis fermentum nunc. Morbi imperdiet, leo in interdum pretium.</p>
						<div class="btn-holder">
							<a href="#" class="btn btn-link">Go to Release Log</a>
						</div>
					</div>
					<div class="col-md-4">
						<h3>Popular Extensions</h3>
						<h4><a href="#">Custom Themes 1.1</a></h4>
						<p>Etiam viverra vulputate diam, pulvinar cursus augue egestas ullamcorper. </p>
						<h4><a href="#">Filter Forge</a></h4>
						<p>Nulla purus quam, pulvinar sed et, feugiat maximus velit.</p>
						<h4><a href="#">WebZap</a></h4>
						<p>Morbi imperdiet, leo in interdum pretium, elit eros dapibus velit, eu posuere quam diam vitae orci. Suspendisse interdum accumsan magna vitae commodo.</p>
						<h4><a href="#">Renamy</a></h4>
						<p>Vivamus consectetur suscipit elit, ut lacinia diam elementum et.</p>
						<div class="btn-holder">
							<a href="#" class="btn btn-link">Go to Marketplace</a>
						</div>
					</div>
					<div class="col-md-4">
						<h3>New From the Blog</h3>
						<h4><a href="#">Morbi imperdiet, leo in interdum pretium.</a></h4>
						<time class="date" datetime="2015-02-18">February 18, 2015</time>
						<h4><a href="#">Donec orci ante, porta vel nulla quis, aliquet hendrerit leo.</a></h4>
						<time class="date" datetime="2015-02-12">February 12, 2015</time>
						<h4><a href="#">Suspendisse egestas vulputate luctus.</a></h4>
						<time class="date" datetime="2015-02-06">February 6, 2015</time>
						<h4><a href="#">Quisque varius ante lorem, eget pretium purus hendrerit a egestas. </a></h4>
						<time class="date" datetime="2015-02-02">February 2, 2015</time>
						<h4><a href="#">Phasellus in augue risus. </a></h4>
						<time class="date" datetime="2015-01-23">January 23, 2015</time>
						<div class="btn-holder">
							<a href="#" class="btn btn-link">Go to Blog</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<footer id="footer">
		<div class="container">
			<div class="footer-holder">
				<div class="row">
					<div class="col-md-4">
						<div class="logo"><a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo.png" alt="Africa Gender Centre"></a></div>
						<p>Africa Centre for Gender, Social Research <br /> and Impact Assessment </p>
					</div>
					<div class="col-md-2">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="#" >Home</a></li>
								<li><a href="#" >What We Do</a></li>
								<li><a href="#">Reports</a></li>
								<li><a href="#" >Readers Digest</a></li>		
								<li><a href="#" >Get in Touch</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<div class="text-holder">
							<strong class="phone"><a href="tel:+254721307272">+254-721-307272</a></strong>
							<span class="available">Available from 8AM - 6PM</span>
							<h4>Nairobi, Kenya</h4>
							<address>Ambassador Court, Room B5,Milimani Road,P.O Box 53911-00200 </address>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-frame">
							<h4>Info</h4>
							<p>We conduct mid term and end of project evaluation studies focused on analysing the social and economic impacts of agriculture research and development programs</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<script src="<?php echo get_bloginfo('template_url') ?>/blogpost/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo get_bloginfo('template_url') ?>/blogpost/js/bootstrap.js"></script>
<script src="<?php echo get_bloginfo('template_url') ?>/blogpost/js/jquery.main.js"></script>
</body>
</html>