<?php get_header(); ?>
<article id="page-blog-content-section">
  <div id="page-blog-content-section-bg">
      <div class="content-bg"></div>
  </div>
  <div class="container-fluid has-breakpoint">
    <div class="row">
      <div class="col-md-8">

        <!--
            ____ ___  _   _ _____ _____ _   _ _____
           / ___/ _ \| \ | |_   _| ____| \ | |_   _|
          | |  | | | |  \| | | | |  _| |  \| | | |
          | |__| |_| | |\  | | | | |___| |\  | | |
           \____\___/|_| \_| |_| |_____|_| \_| |_|

        -->

        <div id="page-blog-detail-content">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



            <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix post-article' ); ?> role="article">

              <header class="article-header">
                <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="article-categories">
                       <?php 
                          $post_categories = wp_get_post_categories( get_the_id() );
                          foreach($post_categories as $c){
                            $cat = get_category( $c );
                            if($cat->name!=="All") {
                              echo '<span>' . $cat->name . '</span>';
                            }                      
                          }
                        ?>
                    </div> <!-- .article-categories -->
                  </div>
                  <div class="col-md-8 col-sm-6 col-xs-6">
                    <div class="article-date">
                      <p><time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time('j F Y') ?></time></p>
                    </div> <!-- .article-date -->
                  </div>
                </div>
                <h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
              </header>


              <!--
                  ____ ___  _   _ _____ _____ _   _ _____
                 / ___/ _ \| \ | |_   _| ____| \ | |_   _|
                | |  | | | |  \| | | | |  _| |  \| | | |
                | |__| |_| | |\  | | | | |___| |\  | | |
                 \____\___/|_| \_| |_| |_____|_| \_| |_|

              -->

              <div class="article-content">
                <div class="default-copy">
                  <?php the_content(); ?>

                  

                  
                  
                  

                </div>
              </div>

              <footer class="article-footer">
                <div class="row">
                  <div class="col-md-4">
                    <div class="article-social">
                      <h4>Share</h4>
                      <ul>
                        <li><a href="<?php echo get_permalink(); ?>" data-title="<?php echo addslashes(get_the_title()); ?>" data-desc='<?php echo addslashes(get_the_excerpt()); ?>' data-image='<?php echo get_the_post_thumbnail_url(); ?>' class="fa fa-facebook"></a></li>
                        <li><a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>&amp;hashtags=roji" class="fa fa-twitter"></a></li>
                        <li><a href="http://pinterest.com/pin/create/button/?url=<?php echo get_permalink(); ?>&media=<?php echo get_the_post_thumbnail_url(); ?>&description=<?php echo addslashes(get_the_title()); ?>" class="fa fa-pinterest"></a></li>
                        
                      </ul>
                    </div> <!-- .article-social -->
                  </div>
                  <div class="col-md-8">
                    <div class="article-tags">
                      <?php 
                        $posttags = get_the_tags();
                        if ($posttags):
                      ?>
                        <h4>Tags</h4>
                        <div class="cta-container">
                          <?php 
                            foreach($posttags as $tag) {
                              echo '<a href="' . get_tag_link($tag->term_id) . '" class="square-cta">' . $tag->name . '</a>';
                            }
                          ?>
                        </div>
                      <?php 
                        endif; 
                      ?>
                    </div> <!-- .article-tags -->
                  </div>
                </div>
              </footer>
            </article> <?php // end article ?>
            
          <?php endwhile; ?>
          <?php else : ?>

            <div class="default-copy">
              <h1>There are no post available</h1>
            </div>

          <?php endif; ?>



          <?php //echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="1"]'); ?>
          
          <div id="related-stories">
            <h2>related stories</h2>
            <div id="related-stories-content">
              <ul>
                <?php
                $tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
                $args = [
                    'post__not_in'        => array( get_queried_object_id() ),
                    'posts_per_page'      => 3,
                    'ignore_sticky_posts' => 1,
                    'orderby'             => 'rand',
                    'tax_query' => [
                        [
                            'taxonomy' => 'post_tag',
                            'terms'    => $tags
                        ]
                    ]
                ];
                $my_query = new wp_query( $args );
                if( $my_query->have_posts() ) {                    
                  while( $my_query->have_posts() ) {
                      $my_query->the_post(); ?>
                      <li>
                        <h2><a href="<?php the_permalink()?>"><?php echo get_the_time('j F Y') ?></a></h2>
                        <p><a href="<?php the_permalink()?>"><?php the_title(); ?></a></p>
                      </li>                        
                  <?php }
                  wp_reset_postdata();
                }
                ?>                                        
              </ul>
            </div><!--related-stories-content-->

          </div><!-- related-stories -->

        </div><!-- page-blog-detail-content -->

      </div>
      <div class="col-md-1">
        <div class="separator-line"></div>
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
<?php get_footer(); ?>