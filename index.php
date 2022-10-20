<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Описать сайт -->
  <meta name="description" content="Описание сайта писать тут, улучшает поиск поисковиков">
  <!-- Ключевые слова для сайта -->
  <meta name="keywords" content="Ключевые слова">
  <title>Тестовый сайт</title>
  <!-- Вставить логотип -->
  <link rel="shortcut icon" href="img/icon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_page.css">
</head>

<body>
  <div id="wrapper">
    <div id="content">
      <header>
        <div id="logo">
          <a href="#" title="На главную">
            <img src="img/logo.png" title="Тестовый сайт" alt="Тестовый сайт">
            <span>ItProgger</span>
          </a>
        </div>
        <div id="about">
          <a href="#" title="Узнать детальнее об рекламе">Реклама</a>
          <a href="#" title="Написать нам письмо">Обратная связь</a>
        </div>
        <div id="reg_auth">
          <a href="#" title="Войти в кабинет пользователя">
            <div id="btn">
              Войти
            </div>
          </a>
          <a href="#" title="Зарегистрироваться на сайте">
            <div id="btn">
              Регистрация
            </div>
          </a>
        </div>
      </header>

      <nav>
        <div id="menuShow"><i class="fa-solid fa-bars"></i></div>
        <div id="hideMenu">
          <a href="#">IT новости</a>
          <a href="#">Видео курсы</a>
          <a href="#">Сайты на заказ</a>
          <a href="#">Форум</a>
          <a href="#">IT задачи</a>
        </div>
        <div id="search">
          <span>Поиск</span>
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div id="mobileMenu">
          <a href="#">IT новости</a><br>
          <a href="#">Видео курсы</a><br>
          <a href="#">Сайты на заказ</a><br>
          <a href="#">Форум</a><br>
          <a href="#">IT задачи</a>
          <hr>
          <a href="#">Регистрация</a>
          <a href="#">Войти</a>
        </div>
      </nav>

      <main>
        <div id="news">
          <h2 class="heading">iT новости</h2>
          <div style="clear: both"><br></div>
          <!-- Статья -->
          <?php
            for ($i=0; $i < 6; $i++)
              echo '
                <div class="article">
                  <img src="https://fuzeservers.ru/wp-content/uploads/9/3/a/93a14a817aba78c219b6421198863989.png" alt="test" title="test">
                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                </div>
              ';
            ?>
          <a href="#" title="Посмотреть больше статей">
            <div id="btn">
              Посмотреть больше
            </div>
          </a>
        </div>
      </main>

      <aside>
        <div id="courses">
          <h2 class="heading">Видеокурсы</h2>
          <div style="clear: both"><br></div>
          <!-- Курс -->
          <?php
            for ($i=0; $i < 4; $i++)
              echo '
                <div class="course">
                  <img src="https://i.pinimg.com/originals/60/17/da/6017da3ed8f203fe979b16dae1ad2259.png" alt="test" title="test">
                  Разработка на <em>VUE.JS</em>
                  <span>23 урока</span>
                </div>
                <div style="clear: both"><br></div>
              ';
            ?>
          <a href="#" title="Посмотреть все видеокурсы">
            <div id="btn">
              Все видеокурсы
            </div>
          </a>
        </div>
        <div id="one_course">
          <h2 class="heading">Как сверстать сайт?</h2>
          <div style="clear: both"><br></div>
          <img src="https://i.pinimg.com/originals/60/17/da/6017da3ed8f203fe979b16dae1ad2259.png" alt="test" title="test">
        </div>
      </aside>

      <div style="clear: both"><br></div>

      <div id="subscribe">
        <span>Подпишитесь, чтобы быть в курсе всех новостей</span>
        <div style="clear: both"><br></div>
        <!-- VK -->
        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
        <div id="vk_groups"></div>
        <script type="text/javascript">
          VK.Widgets.Group("vk_groups", {mode: 3, width: 500, height: 100, color1: "FFFFFF", color2: "000000", color3: "5181B8"}, 212320395);
        </script>
        <div style="clear: both"><br></div>
        <!-- Telegram -->
        <script async src="https://telegram.org/js/telegram-widget.js?21" data-telegram-post="tproger_web/3284" data-width="700" data-userpic="true"></script>
      </div>

      <div id="sub_to_project">
        <span class="heading">Подписаться на проект</span>
        <div style="clear: both"><br></div>
        <p>Чтобы получить доступ ко всем функциям сайта оформите подписку на проект</p>
        <a href="#" title="Посмотреть информация о подписке на проект">
          <div id="btn">
            Узнать детальнее о подписке
          </div>
        </a>
        <div style="clear: both"><br></div>
        <h2 class="heading">Создание онлайн магазина</h2>
        <div style="clear: both"><br></div>
        <img src="https://i.pinimg.com/originals/60/17/da/6017da3ed8f203fe979b16dae1ad2259.png" alt="test" title="test">
      </div>

      <div style="clear: both"><br></div>

      <div id="web_sites">
        <span>Хотите создать сайт?</span>
        <a href="#" title="Заказать сайт">
          <div id="btn">
            Заказать сайт
          </div>
        </a>
      </div>
      
    </div>
    <footer>
      <div id="site_name">
        <span>ItProger</span> - сообщество программистов!
      </div>
      <div id="clear"></div>
      <div id="footer_menu">
        <a href="#" title="Узнать детали об рекламе">Реклама</a>
        <a href="#" title="Поддержать проект">Поддержка проекта</a>
        <a href="#" title="Написать письмо">Обратная связь</a>
      </div>
      <div id="rights">
        <a href="#">Все права защищены &copy; <?=date('Y')?></a>
      </div>
      <div id="social">
        <a href="#" title="Группа VK"><i class="fa-brands fa-vk"></i></a>
        <a href="#" title="Канал Telegram"><i class="fa-brands fa-telegram"></i></a>
        <a href="#" title="Группа FaceBook"><i class="fa-brands fa-facebook"></i></a>
        <a href="#" title="Канал YouTube"><i class="fa-brands fa-youtube"></i></a>
        <a href="#" title="Google+"><i class="fa-brands fa-google-plus-g"></i></a>
      </div>
    </footer>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/0b0aabade3.js" crossorigin="anonymous"></script>
<script src="script/main.js" type="text/javascript"></script>
</body>

</html>

<!-- Подключение к удаленному серверу .htaccess -->
<!-- <IfModule mod_rewrite.c>
  RewriteEngine on
  RewriteBase /
  RewriteCond %(HTTP_HOST) ^www.itproger.com
  RewriteRule (.*) https://itproger.com/$1 [R=301,L]
  RewriteCond %{THE_REQUEST} ^[A-Z]{3,9}\ /index\.php\ HTTP/
  RewriteRule ^index\.php$ https://itproger.com/ [R=301,L]
</IfModule> -->
