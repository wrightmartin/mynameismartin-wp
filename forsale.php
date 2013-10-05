<?php
/**
 * Template Name: mynameismartin forsale
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
	    
	 <article>
	 
	 	<section class="content-body">
		 	<h1 class="main-title"><?php the_title(); ?></h1>
		 	<p>I'm having a spring clean and am selling some of my much-loved web design books. Prices include delivery in the UK via Royal Mail standard parcels. Friends from outside the UK who are interested let me know and we'll sort something out delivery-wise. Payment via PayPal. Sales decided on a first-come first-served basis.</p>
		</section>
		
		<section class="for-sale-body" role="main">
		<ul>

			<li>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/disorder.jpg" alt="Ordering disorder" />
				<h2>Ordering disorder; Grid principles for web design</h2>
				<h3>Khoi Vinh</h3>
				<p>Read once, great condition</p>
				<p class="price">£9</p>
				<p><a href="mailto:martin@mynameismartin.com?subject=sell%20me%20Ordering%20disorder" class="button">Buy</a></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/smashing.jpg" alt="The Smashing Book #2" />
				<h2>The smashing book #2</h2>
			
				<p>Read once, great condition</p>
				<p class="price">£20</p>
				<p><a href="mailto:martin@mynameismartin.com?subject=sell%20me%20The%20smashing%20book" class="button">Buy</a></p>
			</li>

		</ul>
		</section>
		
	 </article>

    </div>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>