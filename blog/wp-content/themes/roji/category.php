<?php get_header(); ?>

<?php
  
  // http://wordpress.stackexchange.com/questions/162109/remove-more-or-text-from-short-post

  function new_excerpt_more( $more ) {
      return '';
  }
  add_filter('excerpt_more', 'new_excerpt_more');


  // https://developer.wordpress.org/reference/functions/the_excerpt/
  
  function wpdocs_custom_excerpt_length( $length ) {
      return 25;
  }
  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>

<article id="page-blog-content-section">
  <div id="page-blog-content-section-bg">
      <div class="content-bg"></div>
  </div>
  <div class="container-fluid has-breakpoint">
    <div class="row">
      
      <div class="col-md-9">

        <!--
            ____ ___  _   _ _____ _____ _   _ _____
           / ___/ _ \| \ | |_   _| ____| \ | |_   _|
          | |  | | | |  \| | | | |  _| |  \| | | |
          | |__| |_| | |\  | | | | |___| |\  | | |
           \____\___/|_| \_| |_| |_____|_| \_| |_|

        -->

        <div id="page-blog-content">

          <?php global $post; ?>

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                  
                
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix page-blog-item' ); ?> role="article" data-last="<?php if (($wp_query->current_post +1) == ($wp_query->post_count)) echo "1"; else echo "0"; ?>">
                  <div class="row vertical-align">
                    <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">

                      <a href="<?php echo get_permalink(); ?>" class="page-blog-item-image">
                                                                    
                        <div class="default-banner-image visible-md visible-lg">
                          <div class="manic-image-container">
                            <img src="" data-image-desktop="<?php echo the_post_thumbnail_url(array(358, 270)); ?>">
                          </div>

                          <div class="category-image-tag">
                            <?php 
                              $post_categories = wp_get_post_categories( get_the_id() );
                              foreach($post_categories as $c){
                                $cat = get_category( $c );
                                if($cat->name!=="All") {
                                  echo '<span>' . $cat->name . '</span>';
                                }                      
                              }
                            ?>
                          </div>

                        </div>
                        <div class="default-banner-image-mobile visible-sm visible-xs">
                          <div class="manic-image-container">
                            <img src="" 
                              data-image-tablet="<?php echo the_post_thumbnail_url('full'); ?>"
                              data-image-mobile="<?php echo the_post_thumbnail_url('full'); ?>">
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-8 col-md-offset-0 col-sm-10 col-sm-offset-1">
                      <div class="page-blog-item-copy">

                        <div class="article-date">
                          <p><time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time('j F Y') ?></time></p>
                        </div> <!-- .article-date -->
                        <h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                        <div class="default-copy">
                          <?php the_excerpt(); ?>
                        </div>
                        
                        <a href="<?php the_permalink() ?>" class="read-more-cta">Read more</a>
                        
                      </div> <!-- page-blog-item-copy -->
                    </div>
                  </div>
                </article>              
              
            <?php endwhile; ?>
          <?php else : ?>

            <div class="default-copy">
              <h1>There are no post available</h1>
            </div>

          <?php endif; ?>


          <?php // echo do_shortcode('[ajax_load_more post_type="post, portfolio" repeater="default" posts_per_page="5" transition="fade" button_label="Older Posts"]'); ?>
          <?php // echo do_shortcode('[ajax_load_more]'); ?>

        </div>

      </div>

      <div class="col-md-3">

        <!--
           ____ ___ ____  _____ ____    _    ____
          / ___|_ _|  _ \| ____| __ )  / \  |  _ \
          \___ \| || | | |  _| |  _ \ / _ \ | |_) |
           ___) | || |_| | |___| |_) / ___ \|  _ <
          |____/___|____/|_____|____/_/   \_\_| \_\

        -->

        <?php get_sidebar(); ?>

      </div>
    </div>
  </div>
</article>

<?
$wp_query = NULL;
$wp_query = new WP_Query(array(‘post_type’ => ‘post’));
?>
<?php get_footer(); ?>