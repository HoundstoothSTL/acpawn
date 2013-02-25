<?php
/**
 * The template for displaying a single post.
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
		    <h2><span><?php the_title(); ?></span></h2>
		</div>
	</div>

	<div id="content" class="main-content blog" role="main">

	<?php if( have_posts() ): while ( have_posts() ): the_post(); ?>
		<article class="<?php post_class(); ?>">
			<div class="container">
				<div class="row">
					<div class="col col-3">
						<header>
							<h1><?php the_title(); ?></h1>
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
						</header>
					</div>
					<div class="col col-9">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col col-9 offset-3">
						<footer>
							<nav class="split">
								<span class="pull-left"><?php previous_post_link( '%link', '' . _x( '', 'Previous post link', 'bolt' ) . '&larr; Previous Post' ); ?></span>
								<span class="pull-right"><?php next_post_link( '%link', 'Next Post &rarr;' . _x( '', 'Next post link', 'bolt' ) . '' ); ?></span>
							</nav>
						</footer>
						<section class="comments-section">
							<?php comments_template( '', true ); ?>
						</section>
					</div>
				</div>
			</div>
		</article>
		
	<?php endwhile; endif; ?>

	</div>
	<!-- blog: single-post -->

<?php get_template_part('templates/footer'); ?>