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
  <title>Обратная связь | iTProger</title>
  <!-- Вставить логотип -->
  <link rel="shortcut icon" href="img/icon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/aside.css">
  <link rel="stylesheet" href="css/form.css">
</head>

<body>
  <div id="wrapper">
    <div id="content">
      <?php
        require_once 'blocks/header.php';
       ?>

      <main>
        <div id="news">
          <h2 class="heading">Обратная связь</h2>
          <div style="clear: both"><br></div>

          <div class="block">
            Чтобы отправить нам ваше сообщение, просто заполните форму и отправьте нам
            <form>
              <div>
                <input type="text" id="name" placeholder="Ваше имя" onclick="$(this).css ('border-color', '#ccc')">
                <br>
                <input type="email" id="email" placeholder="Ваш email" onclick="$(this).css ('border-color', '#ccc')">
              </div>
              <div>
                <textarea id="message" placeholder="Введите ваше сообщение" onclick="$(this).css ('border-color', '#ccc')"></textarea>
              </div>
              <input type="button" id="send" class="btn" value="Отправить">
            </form>
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
