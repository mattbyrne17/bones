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
		
		<h2>Videos...</h2>

			<div class="clearfix">
		
				<div class="col5">
					<h5>Claudie's Banks</h5>
					<?php echo do_shortcode('[soliloquy id="282"]'); ?>
				</div>
				
				<div class="col5 margin0">
					<h5>Banks of Newfoundland</h5>
					<?php echo do_shortcode('[soliloquy id="284"]'); ?>
				</div>

				<div class="col5">
					<h5>McAlpine's Crew</h5>
					<?php echo do_shortcode('[soliloquy id="289"]'); ?>
				</div>
				
				<div class="col5 margin0">
					<h5>True Love Knows No Season</h5>
					<?php echo do_shortcode('[soliloquy id="311"]'); ?>
				</div>

				<div class="col5">
					<h5>Loss of the Schooner Maggie</h5>
					<?php echo do_shortcode('[soliloquy id="287"]'); ?>
				</div>
				
				<div class="col5 margin0">
					<h5>The Eastern Light</h5>
					<?php echo do_shortcode('[soliloquy id="293"]'); ?>
				</div>

				<div class="col5">
					<h5><em>Hearts & Heroes</em> Trailer</h5>
					<?php echo do_shortcode('[soliloquy id="291"]'); ?>					
				</div>

			</div>


		

</div> <?php // end #main ?>
</div> <?php // end #inner-content ?>
</div> <?php // end #content ?>
<?php get_footer(); ?>
