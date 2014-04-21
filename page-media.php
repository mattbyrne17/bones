<?php
/*
Template Name: MEDIA
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

	  <?php get_sidebar('media') ; ?>

		<div id="main" class="col7 last clearfix" role="main">


				<header class="article-header">

					<h2 class="page-title" itemprop="headline"><?php the_title(); ?></h2>

				</header> <?php // end article header ?>



		<h2>Press Photos...</h2>

			<p>JPG / RGB / 300 DPI -- Approved for publicity & promotion.</p>
			<p>Photography by <a href="http://www.grahamkennedy.ca/" target="_blank">Graham Kennedy</a></p>
		
			<?php echo do_shortcode('[gallery link="file" ids="205,206,207,208,209,212"]'); ?>
		
		  <br>
		
		<!--<h2>Videos...</h2>
		
			<p>THIS IS WHERE THE VIDEOS WILL GO!</p>
		
		  <br>-->

		<h2>Press Quotes / Reviews...</h2>
		
			<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar2' ); ?>
			<?php else : ?>
			<?php endif; ?>
		

</div> <?php // end #main ?>
</div> <?php // end #inner-content ?>
</div> <?php // end #content ?>
<?php get_footer(); ?>
