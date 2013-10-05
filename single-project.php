<?php
/**
 * The Template for displaying all single project posts
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


    <div class="container">

	<article>





		<section class="project-body">



			<div class="about-project">

				<div class="project-intro">
					<p><?php echo(get_field('project_introduction')); ?></p>
					<a class="view-work button" title="" href="<?php echo(get_field('url')); ?>">
					<?php if (get_field('link-label')) {
							 echo(get_field('link-label'));
					} else {
						echo('View website');
				  	} ?>
					</a>
				</div>
				<div class="project-role">
					<h2>Role</h2>
					<ul>
						<li>
							<?php
							if (get_field('role')) {
								echo implode('</li><li>', get_field('role'));
							}
						 	?>
					 	</li>
					</ul>
					<h2>Client / Agency</h2>
					<ul class="client-agency">
						<?php
						if (get_field('client')) {
							 echo('<li>'.(get_field('client')).'</li>');
						}
						if (get_field('agency')) {
							 echo('<li>'.(get_field('agency')).'</li>');
						} ?>
					</ul>
				</div>
			</div>
			<div class="project-images">

			  <?php $attachments = new Attachments( 'my_attachments' ); ?>
				<?php if( $attachments->exist() ) : ?>

				  <ul>
				    <?php while( $attachments->get() ) : ?>
				      <li>
				        <img src="<?php echo $attachments->src( 'full' ); ?>" alt="" />
				      </li>
				    <?php endwhile; ?>
				  </ul>

				<?php endif; ?>
			</div>

			<?php the_content(); ?>
		</section>



</article>
    </div>
    <div class="meta-bar">
    	<div class="container">
	 	</div>
	 </div>
<?php endwhile; ?>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>