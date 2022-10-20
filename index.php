<!-- Подключаем протокол HTTPS blocks/head.php-->

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
  <title>iTProger</title>
  <!-- Вставить логотип -->
  <link rel="shortcut icon" href="img/icon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_page.css">
  <link rel="stylesheet" href="css/aside.css">
</head>

<body>
  <div id="wrapper">
    <div id="content">
      <?php
        require_once 'blocks/header.php';
       ?>

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

      <?php
        require_once 'blocks/aside.php';
       ?>

      <div style="clear: both"><br></div>

      <div id="subscribe">
        <span>Подпишитесь, чтобы быть в курсе всех новостей</span>
        <div style="clear: both"><br></div>
        <!-- VK -->
        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
        <div id="vk_groups"></div>
        <script type="text/javascript">
          VK.Widgets.Group("vk_groups", {mode: 3, width: 400, height: 200, color1: "FFFFFF", color2: "000000", color3: "5181B8"}, 212320395);
        </script>
        <div style="clear: both"><br></div>
        <!-- Telegram -->
        <script async src="https://telegram.org/js/telegram-widget.js?21" data-telegram-post="tproger_web/3284" data-width="400" data-userpic="true"></script>
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
    <?php
      require_once 'blocks/footer.php';
     ?>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/0b0aabade3.js" crossorigin="anonymous"></script>
<script src="script/main.js" type="text/javascript"></script>
</body>

</html>
