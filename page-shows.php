<?php
/*
Template Name: SHOWS
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

	  <?php get_sidebar('front') ; ?>

		<div id="main" class="col7 last clearfix" role="main">


				<header class="article-header">

					<h2 class="page-title" itemprop="headline"><?php the_title(); ?></h2>

				</header> <?php // end article header ?>

			<?php echo do_shortcode('[table id=1]'); ?>
			
			<hr>

			<p align="center">* w/ The Dardanelles</p>

			<br>

  			<img class="boxshadow image-decorative" src="<?php echo get_template_directory_uri(); ?>/library/images/livepic.jpg" />

		

</div> <?php // end #main ?>
</div> <?php // end #inner-content ?>
</div> <?php // end #content ?>
<?php get_footer(); ?>