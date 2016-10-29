<?php /* Template Name: Home Page */ get_header(); ?>

  <div class="tab-choise tab-choise--home">
    <div class="container">
      <div class="row">
        <h4 class="col-md-12 col-sm-12 col-xs-12 tab-choise--title">мы предоставляем 100% защиту от DDOS атак для:</h4>
        <?php get_template_part('inc/tab-choise--grid'); ?>
        <a href="#" class="btn btn-transblue">больше услуг</a>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- /.tab-choise tab-choise--home-->

  <div class="about-company">
    <div class="container">
      <div class="row">
        <h4 class="front-block-title"><span>О компании</span></h4>
        <p class="front-block-descr">Более чем 10-ти летний опыт в защите информации, дает нам возможность не только успешно защищать ваш бизнес, но и прогнозировать векторы будущих атак и принимать превентивные меры.</p>
        <div class="row">
          <div class="about-company--item col-md-3 col-sm-3 col-xs-6">
            <h6><?php $now = time(); $your_date = strtotime("2005-10-15"); $datediff = $now - $your_date; echo floor($datediff / (60 * 60 * 24)); ?> дней</h6>
            <p>непрерывной защиты</p>
          </div><!-- /.about-company--item col-md-3 -->
          <div class="about-company--item col-md-3 col-sm-3 col-xs-6">
            <h6>2000 Gbs</h6>
            <p>емкость внешних каналов</p>
          </div><!-- /.about-company--item col-md-3 -->
          <div class="about-company--item col-md-3 col-sm-3 col-xs-6">
            <h6>10 Млн PPS</h6>
            <p>расчетная мошность DDoS фильтров</p>
          </div><!-- /.about-company--item col-md-3 -->
          <div class="about-company--item col-md-3 col-sm-3 col-xs-6">
            <h6>1500 U</h6>
            <p>вместимость Дата Центра</p>
          </div><!-- /.about-company--item col-md-3 -->
        </div><!-- /.row -->
        <p class="front-block-descr front-block-descr--bdt">Работая с нами, вы получаете бесплатную техническую поддержку для администрироавния ваших сайтов и серверов. Забудте о написании скриптов и проблемах с резервным копированием. <br>Мы решим это за вас - занимайтесь спокойно Вашим бизнесом!</p>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.about-company -->

  <div class="our-tech">
    <div class="container">
      <div class="row">
        <h4 class="front-block-title col-md-12 col-sm-12 col-xs-12"><span>наши технологии</span></h4>

        <div class="our-tech--container col-md-12 col-sm-12">

          <?php $count = count( get_field('oure_tech') ); $width = 100 / $count;
            if( have_rows('oure_tech') ): while ( have_rows('oure_tech') ) : the_row(); ?>
          <div class="our-tech--item" style="width: <?php echo $width ?>%">
            <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </div><!-- /.our-tech--item -->
          <?php endwhile; endif; ?>

        </div><!-- /.our-tech--container -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.our-tech -->

  <div class="our-advantages">
    <div class="container">
      <div class="row">

        <h4 class="front-block-title col-md-12 col-sm-12"><span>наши приемущества</span></h4>

        <div class="row our-advantages--container">

          <?php if( have_rows('our-advantages') ): while ( have_rows('our-advantages') ) : the_row(); ?>
          <div class="our-advantages--item col-md-6 col-sm-12 col-xs-12">
            <span class="our-advantages--image">
              <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            </span>
            <span class="our-advantages--descr">
              <?php the_sub_field('description'); ?>
            </span>
          </div><!-- /.our-advantages--item -->
          <?php endwhile; endif; ?>

        </div><!-- /.row our-advantages--container -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.our-advantages -->

  <div class="choise-deftype">
    <div class="container">
      <div class="row">

        <h4 class="front-block-title"><span>ВЫБОР ТИПА ЗАЩИТЫ</span></h4>
        <p class="front-block-descr">выберите в каждой строке значение, максимально соответствующее вашему проекту</p>

        <table class="table-calc">
          <tr class="type-type">
            <td>тип проекта :</td>
            <td><button class="btn btn-blue btn-table-calc btn-table-active" data-type="1">сайт визитка</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="2">магазин</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="3">форум</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="4">HYIP</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="5">игровой сервер</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="6">портал</button></td>
          </tr>
          <tr class="type-visit">
            <td>посещений в сутки :</td>
            <td><button class="btn btn-blue btn-table-calc" data-type="1">до 1000</button></td>
            <td><button class="btn btn-blue btn-table-calc btn-table-active" data-type="2">до 2000</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="3">до 10000</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="4">до 15000</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="5">до 20000</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="6">более 20000</button></td>
          </tr>
          <tr class="type-traf">
            <td>трафик в месяц :</td>
            <td><button class="btn btn-blue btn-table-calc" data-type="1">до 10 Гб</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="2">до 50 Гб</button></td>
            <td><button class="btn btn-blue btn-table-calc btn-table-active" data-type="3">до 100 Гб</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="4">до 500 Гб</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="5">более 500 Гб</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="6">не знаю</button></td>
          </tr>
          <tr class="type-size">
            <td>размер проекта :</td>
            <td><button class="btn btn-blue btn-table-calc" data-type="1">до 100 Мб</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="2">до 1 Гб</button></td>
            <td><button class="btn btn-blue btn-transwhite btn-table-calc" data-type="3">до 5 Гб</button></td>
            <td><button class="btn btn-blue btn-table-calc btn-table-active" data-type="4">до 10 Гб</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="5">до 50 Гб</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="6">более 50 Гб </button></td>
          </tr>
          <tr class="type-serv">
            <td>тип хостинга :</td>
            <td><button class="btn btn-blue btn-table-calc" data-type="1">выделенный сервер</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="2">виртуальный сервер</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="3">хостинг</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="4">удаленная защита</button></td>
            <td><button class="btn btn-blue btn-table-calc btn-table-active" data-type="5">кластер</button></td>
            <td><button class="btn btn-blue btn-table-calc" data-type="6">не знаю</button></td>
          </tr>
        </table><!-- /.table-calc -->

        <div class="calc-result">
          <h5>Рекомендуемый пакет: <span>VPS Light II</span></h5>
          <a href="#" class="btn btn-transblue">подробнее о пакете</a>
        </div><!-- /.calc-result -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.choise-deftype -->

  <div class="choise-pay">
    <div class="container">
      <div class="row">

        <h4 class="front-block-title"><span>варианты оплаты</span></h4>

        <div class="choise-pay--container">

          <?php $count = count( get_field('payment') ); $width = 100 / $count;
            if( have_rows('payment') ): while ( have_rows('payment') ) : the_row(); ?>
          <div class="choise-pay--item" style="width: <?php echo $width ?>%">
            <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </div><!-- /.choise-pay--item -->
          <?php endwhile; endif; ?>

        </div><!-- /.choise-pay--container -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.choise-pay -->

<?php get_footer(); ?>
