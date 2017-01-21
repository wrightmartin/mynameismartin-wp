<?php
/**
 * Template Name: mynameismartin contact
 *
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php get_template_parts( array( 'parts/shared/background-image' ) ); ?>

<?php get_template_parts( array( 'parts/shared/background-image-html' ) ); ?>

    <div class="container">

	 <article class="about-article">

	 	<section class="content-body" role="main">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>

		</section>

     </article>


    </div>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
