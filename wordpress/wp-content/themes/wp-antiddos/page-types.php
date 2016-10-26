<?php /* Template Name: Type Page */ get_header(); ?>

  <div class="tab-choise">
    <div class="container">
      <div class="row">
        <h4 class="col-md-12 tab-choise--title">мне нужна защита для:</h4>

        <?php get_template_part('inc/tab-choise--grid'); ?>

        <div class="col-md-12 tab-choise--container tab-choise--active tab-choise--type-site" >
          <h2><span>DDoS защищенный хостинг для интернет сайтов</span></h2>
          <div class="tab-choise--description">
            <p>Данная услуга строится на базе DDoS защещенных серверов конфигурации Dedicated 3.</p>
            <p>Тарифные планы отличаются только объемом ресурсов выделенных для сайта. Защита реализована на базе магистральных DDoS фильтров и Web Applications Firewall собственной разработки.</p>
            <p>Если вы постоянно подвергаетесь ддос атакам, но ваш проект малобюджетный для покупки сервера с защитой от DDoS, хотсинг для вас наилучший выбор.</p>
          </div><!-- /.tab-choise--description -->
          <table>
            <tr>
              <th></th>
              <th>Hosting 1</th>
              <th>Hosting 2</th>
              <th>Hosting 3</th>
            </tr>
            <tr>
              <td>Дисковое пространство</td>
              <td>1,5 Gb</td>
              <td>2,5 Gb</td>
              <td>4 Gb</td>
            </tr>
            <tr>
              <td>Выделенный IP-адрес</td>
              <td><i class="fa fa-minus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
            </tr>
            <tr>
              <td>WAF ( web applications firewall )</td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
            </tr>
            <tr>
              <td>Фильтрация HTTPS траффика</td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
            </tr>
            <tr>
              <td>Домены</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
            </tr>
            <tr>
              <td>Поддомены</td>
              <td>2</td>
              <td>5</td>
              <td>10</td>
            </tr>
            <tr>
              <td>MySQL базы данных</td>
              <td>1</td>
              <td>2</td>
              <td>5</td>
            </tr>
            <tr>
              <td>Версии PHP на ваш выбор ( 5.2, 5.3, 5.4 )</td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
            </tr>
            <tr>
              <td>Бекап баз данных каждые три часа</td>
              <td><i class="fa fa-minus-circle" aria-hidden="true"></i></td>
              <td>по запросу</td>
              <td>по запросу</td>
            </tr>
            <tr>
              <td>Бекап файлов раз в сутки</td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
            </tr>
            <tr>
              <td>Поддержка по email</td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
            </tr>
            <tr>
              <td>Телефонная поддержка в режиме 24/7</td>
              <td><i class="fa fa-minus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-minus-circle" aria-hidden="true"></i></td>
              <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
            </tr>
            <tr>
              <td>Стоимость</td>
              <td>75$</td>
              <td>150$</td>
              <td>150$</td>
            </tr>
            <tr>
              <td></td>
              <td><button class="btn btn-orange tab-choise--buy" data-num="1">купить</button></td>
              <td><button class="btn btn-orange tab-choise--buy" data-num="2">купить</button></td>
              <td><button class="btn btn-orange tab-choise--buy" data-num="3">купить</button></td>
            </tr>
          </table>
        </div><!-- /.col-md-12 tab-choise--container -->

      </div><!-- row -->
    </div><!-- container -->
  </div><!-- /.tab-choise -->

  <div class="double-tarifs">
    <div class="container">
      <div class="row">
        <h3 class="col-md-12"><span>DDoS защита и поддержка High-Load проектов</span></h3>

        <div class="col-md-6 double-tarifs--item">
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

        <div class="col-md-6 double-tarifs--item">
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
