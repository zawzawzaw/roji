<?php 
  // $about_title                        = manic_get_option( PREFIX . 'about_title' );
  // $about_copy                         = manic_get_option( PREFIX . 'about_copy' );
?>

<div id="page-blog-sidebar" class="hidden-xs hidden-sm">
  <ul id="about-blog">
    <li>
      <div class="manic-image-container">
        <img src="" data-image-desktop="<?php echo THEMEROOT; ?>/images_cms/home/sidebar.jpg" data-image-mobile="<?php echo THEMEROOT; ?>/images_cms/home/sidebar.jpg" data-image-tablet="<?php echo THEMEROOT; ?>/images_cms/home/sidebar.jpg" alt="">
      </div>
    </li>
    <li class="widget widget_roji_about">
      <h2><?php echo get_option('about_title'); ?></h2>
      <p><?php echo get_option('about_desc'); ?></p>
    </li>    
  </ul>  
  <div id="trigger1" class="spacer s0"></div>
  <ul id="sticky-sidebar">
    <?php if ( is_active_sidebar( 'site-sidebar' ) ) : ?>
      <?php dynamic_sidebar( 'site-sidebar' ); ?>
    <?php endif; ?>
  </ul>
</div>