<?php
/**
 * The loop for displaying homepage articles.
 *
 * @package WordPress
 * @subpackage Bolt
 * @since Bolt 0.1.0
 */
?>

<?php 
	$limit = 2; //number of posts to display
	$count = 0;
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => $limit,
		'orderby' => 'date',
		'order' => 'DESC'
	);
	$query = new WP_Query($args);
?>
<?php 
	if($query->have_posts()): while($query->have_posts()): $query->the_post(); 
	$slug = basename(get_permalink());
?>

	<div class="col col-5 <?php if($count > 0) { echo 'offset-2'; } ?>">
		<article id="<?php echo $slug; ?>" class="blog-post">
			<?php the_post_thumbnail(); ?>
	    	<h3><?php the_title(); ?></h3>
	    	<span class="post-meta">Posted on <time><?php the_date(); ?></time> by <cite><?php the_author(); ?></cite></span>
	    	<p><?php the_excerpt(); ?></p>
			<a href="<?php esc_url(the_permalink()); ?>" class="btn btn-primary more">Read More</a>
		</article>
	</div>

<?php $count++; endwhile; endif; ?>