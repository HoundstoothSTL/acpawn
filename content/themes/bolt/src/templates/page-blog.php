<?php 
/**
 * Template Name: Blog
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

	<div id="content" class="main-content blog" role="main">
		<?php 
			$limit = 5; //number of posts to display
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => $limit,
				'paged' => $paged,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$query = new WP_Query($args);
		?>
		<?php 
			if($query->have_posts()): while($query->have_posts()): $query->the_post(); 
			$slug = basename(get_permalink());
		?>
	    <article id="<?php echo $slug; ?>" <?php post_class(); ?>>
	        <div class="container">
	        	<div class="row">
	        		<div class="col col-3">
	        			<h3><?php the_title(); ?></h3>
	        			<div class="post-meta">Posted on <time class="post-date" datetime="<?php the_time( 'Y-m-D' ); ?>" pubdate><?php the_date(); ?></time>
	        				<cite class="post-author">By <?php the_author(); ?></cite>
	        				<span class="post-comment-count"><i class="icon-comment"></i> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
	        				<?php $posttags = get_the_tags(); if ($posttags) : ?>
							<span class="post-tags"><i class="icon-tags"></i>	
								<?php foreach ($posttags as $tag) : ?>
									<a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
								<?php endforeach; endif; ?>
							</span>
	        				<a href="<?php esc_url(the_permalink()); ?>" class="btn btn-primary more">Read Article</a>
	        			</div>
	        		</div>
	        		<div class="col col-9">
		        		<?php the_content(); ?>
	        		</div>
		        </div>
	        </div>
	    </article>
		<?php endwhile; endif; ?>
	    <section class="pagination">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col col-9 offset-3">
	    				<?php if(function_exists('wp_paginate')) { wp_paginate(); } ?>
	    			</div>
	    		</div>
	    	</div>
	    </section>
		     
	</div>
	<!--END//: main-content -->

<?php get_template_part('templates/footer'); ?>