<?php if (get_field('background_image') || is_404()) { ?>

	<style type="text/css">
            <?php if (!is_404()) { ?>
			.page-title-block {
				background-image: url( <?php echo(get_field('background_image')); ?> );
			}
            <?php } ?>
			.page-title-block .main-title {
				color: #fff;
			}

	</style>
	<!--[if lt IE 9]>
	<style type="text/css">
            <?php if (!is_404()) { ?>
    			.main-photo {
    				background-image: url( <?php echo(get_field('background_image')); ?> );
    			}
            <?php } ?>
	</style>

	<![endif]-->
	  <section class="page-title-block photo">
	  	<div class="photo-overlay">
	  	</div>
<?php  } else { ?>
	  <section class="page-title-block">

<?php } ?>



    	  <div class="container">
    	  		<?php if (get_post_type() == 'post' && is_single() )  { ?>
                    <h1 class="main-title blog-title"><?php the_title(); ?></h1>
                <?php } elseif (is_404() ) { ?>

                    <div class="container">
                        <div class="error">
                            <h1>404</h1>
                            <p>A total clustercuss for everybody</p>
                        </div>
                    </div>
                <?php } elseif ( is_category() ) { ?>
                    <h1 class="main-title"><?php echo single_cat_title( '', false ); ?></h1>
    	  		<?php } else { ?>
    	  			<h1 class="main-title"><?php the_title(); ?></h1>
    	  		<?php } ?>


	 			<?php if ( get_post_type() == 'project' || is_single() )  { ?>

		 			<nav class="next-prev-controls single">
                        <div class="arrow left-arrow">
		 				     <?php next_post_link('%link', 'Newer'); ?>
                        </div>
                        <div class="arrow right-arrow">
                            <?php previous_post_link('%link', 'Older'); ?>
                        </div>
		 			</nav>

	 			<?php } ?>

    	  </div>
	</section>

