<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

<?php get_template_parts( array( 'parts/shared/background-image-html' ) ); ?>

    
    

    <div class="container">
	    
	<article>
		
	 
	 	<section class="content-body" role="main">
 			
	 		<h1 class="main-title"><?php the_title(); ?></h1>
	 		
	 		
	 		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	 			<?php the_content(); ?>
	 		<?php endwhile; ?> 		
	
		</section>
				


</article>
    </div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>