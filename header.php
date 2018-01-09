<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head> 
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
  <?php wp_head(); ?>
  
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/themes/default/default.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/nivo-slider.css" type="text/css" media="screen" />
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.6.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.nivo.slider.js"></script>  
</head>
<body>

    <?php $shortname = "visual"; ?>
    
    <?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
    <style type="text/css">
      body { background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>; }
    </style>
    <?php } ?>
    
    <?php //if(get_option($shortname.'_slideshow_timeout','5000') == "") { $slide_time = 5000; } else { $slide_time = get_option($shortname.'_slideshow_timeout','5000')) ?>
    
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
        //pauseTime: <?php //echo stripslashes(stripslashes(get_option($shortname.'_slideshow_timeout','5000'))); ?>,
        pauseTime: 5000,
        controlNav: false
        });
    });
    </script>      

<div id="main_container">

  <div id="header">
    <?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
      <a href="<?php bloginfo('url'); ?>"><img src="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_logo_url',''))); ?>" class="logo" /></a>
    <?php } else { ?>
      <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" class="logo" /></a>
    <?php } ?>
    
    <div class="header_box">
      <?php wp_nav_menu('menu=header_menu&container=false&menu_id=menu'); ?>
<!--      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
      </ul>-->
      <div class="clear"></div>
    </div><!--//header_box-->
    
    <div class="header_box">
      <?php wp_nav_menu('menu=social_menu&container=false'); ?>
<!--      <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Dribble</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Forrst</a></li>
        <li><a href="#">Tumblr</a></li>
        <li><a href="#">Flickr</a></li>
      </ul>-->
      <div class="clear"></div>
    </div><!--//header_box-->    
    
    <div class="header_box_text">
      <?php echo stripslashes(stripslashes(get_option($shortname.'_header_text',''))); ?>
      <div class="clear"></div>
    </div><!--//header_box_text-->        
    
    <div class="search_box_header">
      <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
      <input type="text" name="s" id="s" />
      <INPUT TYPE="image" SRC="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.png" class="search_icon" BORDER="0" ALT="Submit Form">
      </form>
    </div><!--//search_box_header-->
    <div class="clear"></div>
  </div><!--//header-->
  
  <div class="header_divider"></div>