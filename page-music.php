<?php
/*
Template Name: MUSIC
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

	  <?php get_sidebar('music') ; ?>

		<div id="main" class="col7 last clearfix" role="main">



				<header class="article-header">

					<h2 class="page-title" itemprop="headline"><?php the_title(); ?></h2>

				</header> <?php // end article header ?>




<div id="album-content" class="clearfix">

	<div id="album" class="col5">

		<p><img class="boxshadow" src="<?php echo get_template_directory_uri(); ?>/library/images/heartsheroes.jpg"></p>
		
		<ol class="tracklist">
		  <li>Intro</li>
		  <li>Bold Nelson</li>
		  <li>What Fortune Guides A Sailor</li>
		  <li>Fair Ellen</li>
		  <li>Claudie's Banks</li>
		  <li>The Jolly Ploughboy</li>
		  <li>Banks of Sweet Dundee</li>
		  <li>Plains of Waterloo</li>
		  <li>Hearts</li>
		  <li>True Love Knows No Season</li>
		  <li>McAlpine's Crew</li>
		  <li>Heroes</li>
		  <li>Grey Funnel Line</li>
		</ol>
	
	</div>
	
	<div id="album" class="col5 margin1">

	  <h3>Hearts & Heroes</h3>
	  <p>Released: 2014</p>

		<div style="margin: 20px 0 0 -8px;">
		  <?php echo do_shortcode('[amazingaudioplayer id="7"]'); ?>
		</div>	    

	    <hr>

		<ul id="menu-purchase">
		  <li><a href="https://itunes.apple.com/ca/album/hearts-heroes/id838849145" target="blank">iTUNES</a></li>
		  <li><a href="http://www.cdbaby.com/cd/matthewbyrne2" target="blank">CDBABY</a></li>
		  <li><a href="http://www.fredsrecords.com/site/shop/matthew-byrne-hearts/" target="blank">ORDER CD</a></li>
		</ul>
					
	    <hr>
	    <br>

		<p>Produced, engineered, and mixed by Billy Sutton at The Sound Solution (St. John's).</p>
		<p>Mastered by Jason Whelan at The Sound Solution.</p>
		<p>Artwork and layout by <a href="#">Jud Haynes</a>.</p>
		<p>Cover photo by <a href="#">Marc Lafreniere</a>.</p>	
			    
	</div>

</div>


  <hr style="margin-bottom: 40px;">


<div id="album-content">

	<div id="album" class="col5">
	
		<p><img class ="boxshadow" src="<?php echo get_template_directory_uri(); ?>/library/images/ballads.jpg"></p>
	
		<ol class="tracklist">
		  <li>Banks of Newfoundland</li>
		  <li>Young Riley</li>
		  <li>Three Score & Ten</li>
		  <li>Banks of the Bann</li>
		  <li>Jack Ashton</li>
		  <li>Barque in the Harbour</li>
		  <li>Loss of the Schooner Maggie</li>
		  <li>Come Fare Away</li>
		  <li>Donald Monroe</li>
		  <li>Bonnie Light Horseman</li>
		</ol>

	</div>
	
	<div id="album" class="col5 margin1">


 	   <h3>Ballads</h3>
	   <p>Released: 2010</p>

		<div style="margin: 20px 0 0 -8px;">
		  <?php echo do_shortcode('[amazingaudioplayer id="8"]'); ?>
		</div>	 

	    <hr>

		<ul id="menu-purchase">
		  <li><a href="https://itunes.apple.com/ca/album/ballads/id372887267" target="_blank">iTUNES</a></li>
		  <li><a href="http://www.cdbaby.com/cd/MatthewByrne" target="_blank">CDBABY</a></li>
		  <li><a href="http://www.fredsrecords.com/site/shop/matthew-byrne-ballads/" target="_blank">ORDER CD</a></li>
		</ul>
					
	    <hr>
	    <br>

		<p>Produced, engineered, and mixed by Billy Sutton at The Sound Solution (St. John's).</p>
		<p>Mastered by Jason Whelan at The Sound Solution.</p>
		<p>Artwork and layout by <a href="#">Jud Haynes</a>.</p>
					
	</div>							

</div>



</div> <?php // end #main ?>
</div> <?php // end #inner-content ?>
</div> <?php // end #content ?>
<?php get_footer(); ?>
