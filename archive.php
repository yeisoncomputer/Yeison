<?php get_header(); ?>

          <?php if (have_posts()) : ?>


  
    <?php $x = 0; ?>
    <?php while (have_posts()) : the_post(); ?>
    
      <?php if($x == 2) { ?>
      <div class="portfolio_cat_list_box portfolio_cat_list_last">
      <?php } else { ?>
      <div class="portfolio_cat_list_box">
      <?php } ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cat-listing-image'); ?></a>
      </div><!--//portfolio_cat_list_box-->    
      
      <?php if($x == 2) { echo '<div class="clear"></div>'; $x = -1; } ?>
      <?php $x++; ?>
    <?php endwhile; ?>
    
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>

  <div class="clear"></div>    
  
  <div class="navigation">
    <div class="left"><?php previous_posts_link('&laquo; Previous') ?></div>
    <div class="right"><div class="alignleft"><?php next_posts_link('Next &raquo;') ?></div></div>
    <div class="clear"></div>
  </div><!--//navigation-->    
    
    <?php wp_reset_query(); ?>
  
<?php get_footer(); ?>  