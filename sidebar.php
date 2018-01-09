  <div id="sidebar">
  
    <?php
    $args = array(
                 'category_name' => 'blog',
                 'post_type' => 'post',
                 'posts_per_page' => 2,
				 'orderby' => 'rand'
                 //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                 );
    query_posts($args);
    $x = 0;
    while (have_posts()) : the_post(); ?>  
    
      <?php if($x == 0) { ?>
      <div class="blog_list_box">
      <?php } else { ?>
      <div class="blog_list_box blog_list_last">
      <?php } ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-home-blog'); ?></a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,130)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content; ?><?php if(strlen(strip_tags(get_the_content())) > 130) echo "..."; ?></p>
      </div><!--//blog_list_box-->    
    
    <?php $x++; ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>    
    
    <div class="clear"></div>
    
    <?php
    $args = array(
                 'category_name' => 'portfolio',
                 'post_type' => 'post',
                 'posts_per_page' => 4,
				 'orderby' => 'rand'
                 //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                 );
    query_posts($args);
    $x = 0;
    while (have_posts()) : the_post(); ?>    
    
      <?php if($x == 1) { ?>
      <div class="portfolio_list_box portfolio_list_last">
      <?php } else { ?>
      <div class="portfolio_list_box">
      <?php } ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-home-portfolio'); ?></a>
      </div><!--//portfolio_list_box-->  
      
      <?php if($x == 1) { echo '<div class="clear"></div>'; $x = -1; } ?>
    
    <?php $x++; ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>          
    
    <div class="clear"></div>
    
    <?php
    $args = array(
                 'category_name' => 'blog',
                 'post_type' => 'post',
                 'posts_per_page' => 2,
                 'offset' => 2,
				 'orderby' => 'rand'
                 //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                 );
    query_posts($args);
    $x = 0;
    while (have_posts()) : the_post(); ?>  
    
      <?php if($x == 0) { ?>
      <div class="blog_list_box">
      <?php } else { ?>
      <div class="blog_list_box blog_list_last">
      <?php } ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-home-blog'); ?></a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,140)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content; ?><?php if(strlen(strip_tags(get_the_content())) > 140) echo "..."; ?></p>
      </div><!--//blog_list_box-->    
    
    <?php $x++; ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>    

    <div class="clear"></div>
    
  </div><!--//sidebar-->