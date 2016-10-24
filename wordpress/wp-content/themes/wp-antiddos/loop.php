<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 looper'); ?>>

    <a rel="nofollow" class="col-md-4 feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) :
        the_post_thumbnail('medium');
      else: ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php endif; ?>
    </a><!-- /post thumbnail -->

    <h2 class="col-md-8 inner-title">
      <a class="inner-title-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      <span class="author"><?php _e( 'Published by', 'wpeasy' ); ?> <?php the_author_posts_link(); ?> | </span><span class="date"><?php the_time('j F Y'); ?> <span><?php the_time('G:i'); ?></span></span>
    </h2><!-- /post title -->

    <?php wpeExcerpt('wpeExcerpt40'); ?>

  </div><!-- /looper -->
  <?php endwhile; else: ?>
  <div class="col-md-12">
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
