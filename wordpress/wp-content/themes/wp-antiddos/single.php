<?php get_header(); ?>
  <div class="container">
    <div class="row">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 col-sm-12'); ?>>

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

          <?php get_template_part('inc/related-posts'); ?>

        </article>

      <?php endwhile; else: ?>
        <article class="col-md-8 col-sm-12">
          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        </article>
      <?php endif; ?>

      <?php get_sidebar(); ?>

    </div><!-- /.row -->
  </div><!-- /.container -->

<?php get_footer(); ?>
