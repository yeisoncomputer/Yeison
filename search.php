<?php
/*
  Template Name: Blog
*/
?>

<?php get_header(); ?>
  
  <div id="content_left">
  
    <?php if (have_posts()) : ?>
    
    <?php while (have_posts()) : the_post(); ?>

      <div class="blog_list_box_single">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('template-blog-listing'); ?></a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo substr(strip_tags(get_the_content()),0,575); ?></p>
        <div class="clear"></div>
      </div><!--//blog_list_box_single-->

    <?php endwhile; ?>
    
	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>
    
    <?php wp_reset_query(); ?>


  
  </div><!--//content_left-->
  
  <?php get_sidebar(); ?>
  
<?php get_footer(); ?>  