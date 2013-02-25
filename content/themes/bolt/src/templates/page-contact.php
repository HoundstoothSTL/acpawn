<?php 
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Bolt
 * @since Bolt 0.1.0
*/
?>

<?php get_template_part('templates/head'); ?>
<?php get_template_part('templates/header'); ?>
	
	<div id="hero" class="hero">
		<div class="container tagline center-text">
		    <h2><span><?php the_field('tagline'); ?></span></h2>
		</div>
	</div>

	<div id="content" class="main-content" role="main">

	    <section class="intro">
	        <div class="container">
	        	<div class="row">
	        		<div class="col col-3">
	        			<h3>Contact</h3>
	        		</div>
	        		<div class="col col-9">
	        			<?php the_field('map'); ?>
	        		</div>
		        </div>
	        </div>
	    </section>
		
	    
		<section class="secondary company-staff">

		    <div class="container">

	            <div class="row">
	        		<div class="col col-4 offset-3">
	        			<?php the_field('contact_form'); ?>
	        		</div>
	        		<div class="col col-3 offset-2">
	        			<div class="business-info" itemscope itemtype="http://schema.org/LocalBusiness">
							<span itemprop="name">AC Pawn Shop</span>
							<address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
								<span itemprop="streetAddress">2850 Chippewa Street</span>
								<span itemprop="addressLocality">St. Louis</span>, <span itemprop="addressRegion">MO</span> <span itemprop="postalCode">63118</span>
							</address>
							<a href="tel:3147711700" itemprop="telephone">(314) 771-1700</a>
							<a href="mailto:connect@acpawnshop.com" itemprop="email">info@acpawn.com</a>
							<ul>
								<li itemprop="url"><a href="#"><i class="icon-facebook"></i></a></li>
								<li itemprop="url"><a href="#"><i class="icon-twitter"></i></a></li>
								<li itemprop="url"><a href="#"><i class="icon-google-plus"></i></a></li>
								<li itemprop="url"><a href="#"><i class="icon-rss"></i></a></li>
							</ul>
						</div>
	        		</div>
		        </div>

		    </div>
		</section>
		     
	</div>
	<!--END//: main-content -->

<?php get_template_part('templates/footer'); ?>