<?php 
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Bolt
 * @since Bolt 0.1.0
*/
?>

<?php get_template_part('templates/head'); ?>
<?php get_template_part('templates/header'); ?>

	<div id="hero" class="home-hero"></div>

	<div id="content" class="main-content" role="main">
	    <a class="learn-more-hero" href="#"><span>+</span><br>Learn More</a>
        
	    <section class="intro">
	        <div class="container">
	        	<div class="welcome center-text">
		            <h2>Here is a descriptive sentence or two about how awesome AC Pawn is. It should probably be at least two sentences long so that it takes up the correct amount of vertical space.</h2>        
		        </div>
	        </div>
	    </section>
		
	    
		<section class="secondary company-features">

		    <div class="container">

	            <div class="row">
	            	<?php if(get_field('features')): while(has_sub_field('features')): ?>
		                <div class="col col-4 center-text">
		                	<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
		                	<h3><?php the_sub_field('title'); ?></h3>
		                	<p><?php the_sub_field('copy'); ?></p>
							<a href="<?php the_sub_field('url'); ?>" class="btn btn-secondary more">Button</a>
						</div>
					<?php endwhile; endif; ?>
				</div>

		    </div>
		</section>

		<section class="homepage-feed">

		    <div class="container">

		    	<div class="row">
		    		<div class="col col-12">
		    			<h2>Our Blog</h2>
		    		</div>
		    	</div>

	            <div class="row">
					<?php get_template_part('templates/loop', 'homepage'); ?>					         
				</div>

		    </div>
		</section>

		<section class="homepage-contact">

		    <div class="container">

		    	<div class="row">
		    		<div class="col col-12">
		    			<h2>Get in Touch</h2>
		    		</div>
		    	</div>

	            <div class="row">
	                <div class="col col-6">
	                	<img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/map-large.jpg" alt="AC Pawn Map">
	                	<a href="http://goo.gl/maps/INiCb" class="more">Get Directions</a>
					</div>

					<div class="col col-4 offset-2">
	                	<address>
	                		555 Chipewa Ave.
	                		<br>St. Louis, MO
	                		<br>(314) 555-5555
	                		<br>email@acpawn.com
	                	</address>
						<a href="#" class="btn btn-primary more">Contact Us Today</a>
					</div>
					         
				</div>

		    </div>
		</section>
		     
	</div>
	<!--END//: main-content -->

<?php get_template_part('templates/footer'); ?>
