<?php /* Template Name: Type Page */ get_header(); ?>

  <div class="tab-choise tab-choise--choise">
    <div class="container clearfix">
      <div class="row">
        <h4 class="col-md-12 col-sm-12 col-xs-12 tab-choise--title">мне нужна защита для:</h4>

        <?php get_template_part('inc/tab-choise--grid'); ?>
      </div><!-- /.row -->
      <div class="row">
        <?php get_template_part('inc/tab-choise-type-site'); ?>
        <?php get_template_part('inc/tab-choise-type-vps'); ?>
        <?php get_template_part('inc/tab-choise-type-remote'); ?>
        <?php get_template_part('inc/tab-choise-type-game'); ?>
        <?php get_template_part('inc/tab-choise-type-highload'); ?>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- /.tab-choise -->


<?php get_footer(); ?>
