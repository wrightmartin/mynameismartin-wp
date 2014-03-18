<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


    <div class="page-title-block home photo">
    	<div class="container">
	    	<section class="intro">

	    			<h1>Hello, my name is Martin</h1>
	    			<i>&mdash;</i>
	    			<p>I make cool stuff for nice people</p>

	    	</section>
    	</div>
	</div>
	<div class="photo-overlay">
	</div>




	   	<section class="home-portfolio">
	   		<div class="container">
		   		<h2><a href="<?php bloginfo( 'url' ); ?>/portfolio/">Latest work</a></h2>
		   		<ul class="portfolio-list">
				<?php

				 $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 4  ) ); ?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li>
				<a class="portfolio" href="<?php echo get_permalink(); ?>">
		 			<?php the_post_thumbnail('full');   ?>
		 			<div class="project-details">
		 				<div class="centred-vh">
			 				<h3 class="project-title">
				 			<?php the_title(); ?>
				 			</h3>
			 			</div>
			 		</div>
			 	</a>
			</li>
	<?php endwhile; ?>

	   			</ul>
	   		</div>
		</section>

		<section class="blog-posts home-blog">
		 	<div class="container home" >

				<h2><a href="<?php bloginfo( 'url' ); ?>/blog/">Recent posts</a></h2>
				<ol>

					<?php
						$count = 1;
						query_posts( 'showposts=2' );
						while ( have_posts() ) : the_post();
					?>
					<li>

					<?php $count++; ?>
					<h3 class="blog-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
					<time class="meta" pubdate datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_date(); ?></time>

					</li>

				<?php
					endwhile;
				?>
				</ol>
			</div>
		</section>





<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>