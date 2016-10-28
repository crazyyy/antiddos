<?php /* Template Name: Type Page */ get_header(); ?>

  <div class="tab-choise tab-choise--choise">
    <div class="container">
      <div class="row">
        <h4 class="col-md-12 col-sm-12 tab-choise--title">мне нужна защита для:</h4>

        <?php get_template_part('inc/tab-choise--grid'); ?>

        <?php get_template_part('inc/tab-choise-type-site'); ?>
        <?php get_template_part('inc/tab-choise-type-vps'); ?>
        <?php get_template_part('inc/tab-choise-type-game'); ?>
        <?php get_template_part('inc/tab-choise-type-remote'); ?>
        <?php get_template_part('inc/tab-choise-type-highload'); ?>

      </div><!-- row -->
    </div><!-- container -->
  </div><!-- /.tab-choise -->

  <div class="double-tarifs">
    <div class="container">
      <div class="row">
        <h3 class="col-md-12 col-sm-12"><span>DDoS защита и поддержка High-Load проектов</span></h3>

        <div class="col-md-6 col-sm-12 double-tarifs--item">
          <h4><span>Пакет CLUSTER</span></h4>
          <p>Разработка и техническая поддержка сложных систем балансировки нагрузки между группой серверов.</p>
          <ul>
            <li>Анализ работы существующего проекта заказчика и проектирование схемы распределения и взаимодействия данных.</li>
            <li>Выбор оптимальной апппаратной платформы и ISP.</li>
            <li>Установка и настройка всего необходимого ПО для High Load проекта.</li>
            <li>Построение системы балансировки нагрузки между 2 и более серверами</li>
            <li>Работы с программистами заказчика по оптимизации CMS проекта.</li>
            <li>Мониторинг основных параметров работы сервера (CPU, RAM, LOAD, NETWORK, HDD)</li>
            <li>Решение любых проблемных ситуаций связанных с работоспособностью сервера 24\7</li>
            <li>Резервное копирование на внешний сервер и восстановление информации</li>
          </ul>
          <table>
            <tr>
              <td>2 Сервера</td>
              <td>300$ в месяц</td>
            </tr>
            <tr>
              <td>3 Сервера</td>
              <td>400$ в месяц</td>
            </tr>
            <tr>
              <td>5 Серверов</td>
              <td>550$ в месяц</td>
            </tr>
          </table>
          <p>В стоимость включены только услуги технической поддержки</p>
          <button class="btn btn-orange">купить</button>
        </div><!-- /.col-md-6 -->

        <div class="col-md-6 col-sm-12 double-tarifs--item">
          <h4><span>Пакет Full Responsibility </span></h4>
          <p>Разработка и техническая поддержка сложных HighLoad решений для крупных интернет проектов</p>
          <ul>
            <li>Совместно с техническим персоналом заказчика выбор технологий и языков программирования для разработки проекта.</li>
            <li>Проектирование схемы взаимодействия данных</li>
            <li>Проектирование СУБД</li>
            <li>Построение аппаратной инфраструктуры  ( выбор серверов, выбор ISP, инсталяция ОС и ПО )</li>
            <li>Настройка системы балансировки нагрузки и синхронизации данных.</li>
            <li>Анализ работы сайта на рабочей нагрузке и внесение необходимых изменений в структуру работы приложения.</li>
            <li>Документирование рабочей схемы</li>
            <li>Мониторинг основных параметров работы сервера (CPU, RAM, LOAD, NETWORK, HDD)</li>
            <li>Решение любых проблемных ситуаций связанных с работоспособностью сервера 24\7</li>
            <li>Резервное копирование  и восстановление информации</li>
            <li>Общение с техническим персоналом ISP по всем проблемным вопросам.</li>
          </ul>
          <table>
            <tr>
              <td>5 Серверов</td>
              <td>750$ в месяц</td>
            </tr>
            <tr>
              <td>10 Серверов</td>
              <td>1400$ в месяц</td>
            </tr>
            <tr>
              <td>Более 10</td>
              <td><a href="#">свяжитесь с менеджером</a></td>
            </tr>
          </table>
          <p>В стоимость включены только услуги технической поддержки</p>
          <button class="btn btn-orange">купить</button>
        </div><!-- /.col-md-6 -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.double-tarifs -->
<?php get_footer(); ?>
