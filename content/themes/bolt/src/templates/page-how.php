<?php 
/**
 * Template Name: How It Works
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
	        			<h3>What is Pawning?</h3>
	        		</div>
	        		<div class="col col-9">
	        			<?php if(have_posts()): while(have_posts()): the_post(); ?>
	        				<p><?php the_content(); ?></p>
	        			<?php endwhile; endif; ?>
	        		</div>
		        </div>
	        </div>
	    </section>
		
	    
		<section class="secondary company-staff">

		    <div class="container">

	            <div class="row">
	            	<?php if(get_field('explanations')): while(has_sub_field('explanations')): ?>
	                <div class="col col-4 center-text">
	                	<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
	                	<h3><?php the_sub_field('title'); ?></h3>
	                	<p><?php the_sub_field('description'); ?></p>
					</div>
					<?php endwhile; endif; ?>
				</div>

		    </div>
		</section>

		<section class="tertiary faqs">
	        <div class="container">
	        	<?php if(get_field('faqs')): while(has_sub_field('faqs')): ?>
	        	<div class="row">
	        		<div class="col col-3">
	        			<h4><?php the_sub_field('question'); ?></h4>
	        		</div>
	        		<div class="col col-9">
	        			<p><?php the_sub_field('answer'); ?></p>
	        		</div>
		        </div>
		        <?php endwhile; endif; ?>
	        </div>
	    </section>
		     
	</div>
	<!--END//: main-content -->
	
<?php get_template_part('templates/footer'); ?>