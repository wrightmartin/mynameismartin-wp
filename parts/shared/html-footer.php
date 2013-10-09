		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="//use.typekit.net/zyy7clm.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/site.js" ></script>
		<script type="text/javascript" src="https://get.gridsetapp.com/5488/overlay/"></script>
        <?php if (get_field('background_image') || is_404()) { ?>
        <script>
        $(window).scroll(function() {
          var scrolledY = $(window).scrollTop();
          $('.page-title-block').css('background-position', 'left ' + ((scrolledY)) + 'px');
        });
        </script>
        <?php } ?>

	<?php wp_footer(); ?>

	</body>
</html>