
to show specific sidebar for specific pages...

<?php if( is_page( 19 ) ) : ?>
<?php get_sidebar('front'); ?>
<?php else : ?>
<?php get_sidebar() ; ?>
<?php endif ; ?>