<?php 
/**
 * Template Name: Products
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

		<?php if(get_field('product')): while(has_sub_field('product')): ?>
		    <article class="product-category">
		        <div class="container">
		        	<div class="row">
		        		<div class="col col-3">
		        			<h3><?php the_sub_field('category'); ?></h3>
		        			<?php the_sub_field('bullet_list'); ?>
		        		</div>
		        		<div class="col col-9">
		        			<img src="<?php the_sub_field('image'); ?>" alt="AC Pawn <?php the_sub_field('category'); ?> Image">
		        			<p><?php the_sub_field('description'); ?></p>
		        		</div>
			        </div>
		        </div>
		    </article>
		<?php endwhile; endif; ?>

	</div>
	<!--END//: main-content -->

<?php get_template_part('templates/footer'); ?>