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
  <title>Реклама | Тестовый сайт</title>
  <!-- Вставить логотип -->
  <link rel="shortcut icon" href="img/icon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
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
          <h2 class="heading">Реклама</h2>
          <div style="clear: both"><br></div>

          <div class="block">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
            <strong>Lorem ipsum dolor:</strong>
            <ul>
              <li>Lorem ipsum - <a href="#">Lorem</a></li>
              <li><noindex><a href="#">Lorem ipsum</a></noindex></li>
              <li><noindex><a href="#">Lorem ipsum</a></noindex></li>
            </ul><br>
            <strong>Lorem ipsum dolor:</strong><br>
            <a href="#">Lorem</a>
            <ul>
              <li>Lorem ipsum dolor sit</li>
              <li>Lorem ipsum dolor sit</li>
              <li>Lorem ipsum dolor sit</li>
            </ul><br>
            <noindex><a href="#">Lorem</a></noindex>
            <ul>
              <li>Lorem ipsum dolor sit</li>
              <li>Lorem ipsum dolor sit</li>
              <li>Lorem ipsum dolor sit</li>
              <li>Lorem ipsum dolor sit</li>
              <li>Lorem ipsum dolor sit</li>
            </ul><br>
            <noindex><a href="#">Lorem</a></noindex>: Lorem ipsum dolor <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor:
          </div>
        </div>
      </main>

      <?php
        require_once 'blocks/aside.php';
       ?>

      <div style="clear: both"><br></div>

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
