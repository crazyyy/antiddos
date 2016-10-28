<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 col-sm-12 looper'); ?>>

    <a rel="nofollow" class="col-md-4 col-sm-4 feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) :
        the_post_thumbnail('medium');
      else: ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php endif; ?>
    </a><!-- /post thumbnail -->

    <h2 class="col-md-8 col-sm-8 inner-title">
      <a class="inner-title-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      <span class="author"><?php _e( 'Published by', 'wpeasy' ); ?> <?php the_author_posts_link(); ?> | </span><span class="date"><?php the_time('j F Y'); ?> <span><?php the_time('G:i'); ?></span></span>
    </h2><!-- /post title -->

    <?php wpeExcerpt('wpeExcerpt40'); ?>

    <div class="loop-post-details col-md-12 col-sm-12">
      <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('d F Y'); ?></span><span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('H:i'); ?></span>
      <span class="views"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo getPostViews(get_the_ID()); ?></span>
      <span class="category"><i class="fa fa-list" aria-hidden="true"></i> <?php the_category(', '); // Separated by commas ?></span>
      <span class="tags"><i class="fa fa-tags" aria-hidden="true"></i> <?php the_tags( '', ', ', ''); // Separated by commas with a line break at the end ?></span>
      <span class="comments"><i class="fa fa-commenting-o" aria-hidden="true"></i> <?php comments_popup_link( __( '0', 'wpeasy' ), __( '1', 'wpeasy' ), __( '%', 'wpeasy' )); ?></span>
    </div><!-- /.loop-post-details -->

  </div><!-- /looper -->
  <?php endwhile; else: ?>
  <div class="col-md-12">
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
