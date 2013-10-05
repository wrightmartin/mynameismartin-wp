<?php
/**
 * Template Name: mynameismartin about
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

	 	<section class="content-body">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>


		</section>



     </article>
     <section class="overshare">
			<ul>
				<li><a href="http://twitter.com/wrightmartin" class="twitter"><i class="ss-icon ss-social-circle">twitter</i> <span>Tweeting at Twitter</span></a></li>
		    	<li><a href="http://dribbble.com/wrightmartin" class="dribbble"><i class="ss-icon ss-social-circle">dribbble</i> <span>Shots at Dribbble</span></a></li>
		    	<li><a href="http://flickr.com/photos/skip694" class="flickr"><i class="ss-icon ss-social-circle">flickr</i> <span>Photos on Flickr</span></a></li>
		    	<li><a href="http://www.last.fm/user/Johnny-5" class="lastfm"><i class="ss-icon ss-social-circle">lastfm</i> <span>Music on Last.fm</span></a></li>
		    	<li><a href="http://instagram.com/mynameismartin/" class="instagram"><i class="ss-icon ss-social-circle">instagram</i> <span>Filters on Instagram</span></a></li>
		    	<li><a href="http://www.rdio.com/people/wrightmartin/" class="rdio"><i class="ss-icon ss-social-circle">rdio</i> <span>Streaming on Rdio</span></a></li>
		    	<li><a href="https://www.facebook.com/thenameismartin" class="facebook"><i class="ss-icon ss-social-circle">facebook</i> <span>Liking on Facebook</span></a></li>


			</ul>
		</section>


    </div>
    <section class="colophon">
    	<div class="container">
	    	<div class="content-body">
		     	<h2>About this site</h2>
		     	<div class="cols">
		     	<p>This site was designed &amp; built by hand on an <a href="http://apple.com/mac">Apple Mac</a> using <a href="http://panic.com/coda/">Coda</a>, <a href="http://www.photoshop.com/">Photoshop</a> and <a href="https://www.google.com/intl/en/chrome/browser/">Google Chrome</a>.</p>
		     	<p>It was designed with the browser in HTML, CSS &amp; <a href="http://sass-lang.com/">Sass</a>. Content is managed in <a href="http://wordpress.org">WordPress</a> &amp; themed with <a href="http://viewportindustries.com/products/starkers/">Starkers</a>.</p>
		     	<p>Type is set in <a href="https://typekit.com/fonts/proxima-nova">Proxima Nova</a> &amp; <a href="https://typekit.com/fonts/ff-meta-serif-web-pro">FF Meta Serif</a>, served by <a href="http://typekit.com">Typekit</a> and laid out in a fluid grid with a little help from <a href="http://gridsetapp.com">Gridset</a>*.</p>

		     	</div>
		     	<small>* add ?gridset=show to the end of any URL on my site to see the grid</small>
	    	</div>
    	</div>
     </section>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>