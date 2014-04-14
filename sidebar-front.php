<div class="sidebar col4 clearfix" role="complementary">


	<div class="widget"> <!-- cd image -->
	
		<h2 class="available"><em>HEARTS & HEROES</em><BR>AVAILABLE MAY 31</h2>

		<div class="boxshadow">
		  <?php echo do_shortcode('[soliloquy id="196"]'); ?>
		</div>

	</div>
	
	
	<!--
	<div class="widget"> 
	
		<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar1' ); ?>
		<?php else : ?>
		<?php endif; ?>

	</div>
	-->


	<div class="widget"> <!-- preview player -->

		<h2>Preview...</h2>

		<div class="songplayer">
		  <?php echo do_shortcode('[amazingaudioplayer id="7"]'); ?>
		</div>
		
	</div>

	

	<div class="widget"> <!-- twitter feed -->

		<h2>Twitter...</h2>

		<h4 align="center">Follow: <a href="http://www.twitter.com/mattbyrnenl" target="_blank" style="margin-left: 5px;">@mattbyrneNL</a></h4>
				
		<?php echo do_shortcode('[tweeple_feed id="146"]'); ?>

	</div>	


</div>
