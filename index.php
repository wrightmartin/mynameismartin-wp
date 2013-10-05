<?php
/**
 * 
 *
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

 <div class="main-photo">
   
	</div>
    
    

    <div class="container">
	    
	<article>
			<section class="content-body my2-my6 my-padinfull t1-t3 t-padin m-all">
	 		<h1 class="main-title"><?php the_title(); ?></h1>
		</section>
		<section class="blog-posts my-all m-all t-all">		
			<?php if ( have_posts() ): ?>	
			<ol>
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
						<<h3 class="blog-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
					<time class="meta" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time> 
			
				</li>
			<?php endwhile; ?>
			</ol>
			<?php else: ?>
			<h2>No posts to display</h2>
			<?php endif; ?>
		</section>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>