<?php get_header(); ?>
  <div class="container">
    <div class="row">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>

          <h1 class="single-title inner-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>

          <?php setPostViews(get_the_ID()); ?>
          <span class="post-details">
            <span class="author"><?php _e( 'Published by', 'wpeasy' ); ?> <?php the_author_posts_link(); ?> |</span> <span class="date"><?php the_time('d F Y'); ?> <?php the_time('H:i'); ?></span>
          </span><!-- post-details -->

          <span class="post-tags">
            <?php the_tags( __( 'Tags: ', 'wpeasy' ), ', ', '<br>'); ?>
          </span>

          <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

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

                  <li class="col-md-6">
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



        </article>

      <?php endwhile; else: ?>
        <article class="col-md-8">
          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        </article>
      <?php endif; ?>

      <?php get_sidebar(); ?>

    </div><!-- /.row -->
  </div><!-- /.container -->

<?php get_footer(); ?>
