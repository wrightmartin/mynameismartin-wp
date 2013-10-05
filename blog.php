<?php
/**
 * Template Name: mynameismartin blog
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
			<section class="content-body blog-posts blog " role="main">

			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args= array(
					'paged' => $paged,
					'posts_per_page' => 8
				);

				global $wp_query;

				//The Query
				$wp_query = new WP_Query( $args );

				 if ( have_posts() ):
			?>
			<ol class="list-of-posts">
			<?php

			 while ( $wp_query->have_posts() ) : $wp_query->the_post();?>


						<li class="post">

						<h3 class="blog-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
					<time class="meta" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time>

				</li>
			<?php endwhile; ?>
			</ol>
			<?php wp_link_pages(); ?>
			<?php else: ?>
				<h2>No posts to display</h2>
			<?php endif;
				// Reset Post Data
				wp_reset_postdata();
			?>
			<nav class="next-prev-controls blog">
				<?php mynameismartin_content_nav(); ?>
			</nav>
		</section>


		</article>
   </div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>