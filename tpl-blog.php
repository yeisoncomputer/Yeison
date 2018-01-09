<?php
/*
  Template Name: Blog
*/
?>

<?php get_header(); ?>
  
  <div id="content_left">
  
    <?php
    $args = array(
                 'category_name' => 'blog',
                 'post_type' => 'post',
                 'posts_per_page' => 5,
                 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                 );
    query_posts($args);
    while (have_posts()) : the_post(); ?>    

      <div class="blog_list_box_single">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('template-blog-listing'); ?></a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo substr(strip_tags(get_the_content()),0,575); ?></p>
        <div class="clear"></div>
      </div><!--//blog_list_box_single-->

    <?php endwhile; ?>
    
    <div class="navigation">
      <div class="left"><?php previous_posts_link('&laquo; Previous') ?></div>
      <div class="right"><div class="alignleft"><?php next_posts_link('Next &raquo;') ?></div></div>
      <div class="clear"></div>
    </div><!--//navigation-->    
    <?php wp_reset_query(); ?>    


  
  </div><!--//content_left-->
  
  <?php get_sidebar(); ?>
  
<?php get_footer(); ?>  