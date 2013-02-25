<body <?php body_class(); ?>>

<div id="outer-wrap" class="outer-wrap">
<div id="inner-wrap" class="inner-wrap">

<div id="container" class="<?php if(is_front_page()) { echo 'home-hero'; } else { echo 'int-hero'; } ?>" role="wrapper">
	<header id="header" class="primary-header">
		<nav class="social-links">
	        <ul>
	            <li>
	            	<a href="#" target="_blank">
	            		<i class="icon-facebook"></i>
	            	</a>
	            </li>
	            <li>
	            	<a href="#" target="_blank">
	            		<i class="icon-twitter"></i>
	            	</a>
	            </li>
	            <li>
	            	<a href="#" target="_blank">
	            		<i class="icon-google-plus"></i>
	            	</a>
	            </li>
	            <li>
	            	<a href="https://acpawn.com/feed" target="_blank">
	            		<i class="icon-rss"></i>
	            	</a>
	            </li>
	        </ul>
	    </nav>
		<div class="container">
		    <div id="logo">
		        <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" class="custom" alt="AC Pawn"></a>
		    </div>
		    
		    <nav id="nav" class="primary-navigation row-nav" role="navigation">
	            <div class="animate-block">
		            <ul>
		            	<li><a href="<?php echo bloginfo('url'); ?>">Homepage</a></li>
		                <li><a href="<?php echo bloginfo('url'); ?>/about">About Us</a></li>
						<li><a href="<?php echo bloginfo('url'); ?>/products">Products</a></li>
						<li><a href="<?php echo bloginfo('url'); ?>/how-it-works">How It Works</a></li>
						<li><a href="<?php echo bloginfo('url'); ?>/blog">Blog</a></li>
						<li><a href="<?php echo bloginfo('url'); ?>/contact">Contact</a></li>
						<li class="nav-separator hidden-medium-up">Quick Links</li>
						<li class="hidden-medium-up"><a href="https://maps.google.com/maps?q=ac+pawn+shop&ll=38.588883,-90.233417&spn=0.009241,0.019248&fb=1&gl=us&hq=ac+pawn+shop&hnear=0x87d8b4a9faed8ef9:0xbe39eaca22bbe05b,St.+Louis,+MO&cid=0,0,14249603687703666908&t=m&z=16&iwloc=A"><i class="icon-map-marker"></i> Get Directions</a></li>
						<li class="hidden-medium-up"><a href="tel:<?php the_field('phone_number', 'option'); ?>"><i class="icon-mobile-phone"></i> Call Us</a></li>
		            </ul>
		        </div>
		    </nav>
		    <a href="#nav" class="nav-btn" id="nav-open-btn">Navigation</a>
		</div>
	</header>