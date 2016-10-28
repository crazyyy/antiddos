      <?php $orig_post = $post; global $post; $categories = get_the_category($post->ID); if ($categories) { $category_ids = array(); foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id; $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 4, // Number of related posts that will be shown.
        'caller_get_posts'=>1
        );
        $my_query = new wp_query( $args ); if( $my_query->have_posts() ) { ?>

          <div class="related_posts">
            <h6>Похожие записи</h6>
            <ul class="row">
            <?php while( $my_query->have_posts() ) { $my_query->the_post();?>

              <li class="col-md-6 col-sm-6">
                <a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
                  <span class="relatedthumb">
                    <?php if ( has_post_thumbnail()) :
                      the_post_thumbnail('medium');
                    else: ?>
                      <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                  </span>
                  <h5><span><?php the_title(); ?></span></h5>
                </a>
              </li>
            <?php } ?>
            </ul>
          </div>
      <?php } } $post = $orig_post; wp_reset_query(); ?>
