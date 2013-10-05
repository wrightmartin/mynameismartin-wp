<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php get_template_parts( array( 'parts/shared/background-image' ) ); ?>

<?php if ( have_posts() ): ?>
    <div class="container">
    <article>
	    <section class="content-body blog-posts blog" role="main">
	 		<h1 class="main-title"><?php echo single_cat_title( '', false ); ?></h1>
<ol class="list-of-posts">
<?php while ( have_posts() ) : the_post(); ?>
	<li class="post">
			<h3 class="blog-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<time class="meta" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> 			<?php the_excerpt(); ?>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>

<?php endif; ?>

	 		</section>
    </article>
    </div>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>