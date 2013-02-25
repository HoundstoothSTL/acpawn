<?php 
/**
 * Template Name: About
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
	        			<h3>About Us</h3>
	        		</div>
	        		<div class="col col-9">
	        			<?php if(have_posts()): while(have_posts()): the_post(); ?>
	        				<?php the_content(); ?>
	        			<?php endwhile; endif; ?>
	        		</div>
		        </div>
	        </div>
	    </section>
		
	    
		<section class="secondary company-staff">

		    <div class="container">

	            <div class="row">
	        		<div class="col col-3">
	        			<h3>Our Staff</h3>
	        		</div>
	        		<div class="col col-9">
	        			<?php if(get_field('staff_member')): while(has_sub_field('staff_member')): ?>
	        			<div class="staff-member">
	        				<h4 class="title"><?php the_sub_field('name'); ?></h4>
	        				<p><?php the_sub_field('description'); ?></p>
	        			</div>
	        			<?php endwhile; endif; ?>
	        		</div>
		        </div>

		    </div>
		</section>
		     
	</div>
	<!--END//: main-content -->

<?php get_template_part('templates/footer'); ?>