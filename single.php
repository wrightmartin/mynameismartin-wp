<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<?php get_template_parts( array( 'parts/shared/background-image' ) ); ?>

<?php get_template_parts( array( 'parts/shared/background-image-html' ) ); ?>




    <div class="container">

	<article>
		<aside class="">

	 	</aside>

	 	<section class="content-body" role="main">




			<?php the_content(); ?>
			<p class="meta">
				<time class="date" pubdate datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_date(); ?></time> //
				<span class="posted">Posted in <?php mynameismartin_posted_in() ?></span>
			</p>

		</section>



</article>
    </div>

<?php endwhile; ?>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>