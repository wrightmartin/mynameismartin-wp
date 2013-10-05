<?php
/**
 * Template Name: mynameismartin portfolio
 *
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<?php get_template_parts( array( 'parts/shared/background-image' ) ); ?>

    <div class="container">
	    
	<article>
	
			
	
				 				
		<section role="main" class="portfolio-page">
			<ul class="portfolio-list">
			<?php 
			
				
			
			 $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 20 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<li>
			<a href="<?php echo get_permalink(); ?>">
		 		<?php the_post_thumbnail('full');   ?>
		 		<div class="project-details">
		 			<h3 class="project-title">
			 			<?php the_title(); ?>
			 		</h3>
			 	</div>
		 	</a>
		</li>
<?php endwhile; ?>	
			
			</ul>
			
		</section>
		
</article>
    </div>
    
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>