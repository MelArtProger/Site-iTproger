<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ошибка 404 | iTProger</title>
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
          <h2 class="heading">Ошибка 404</h2>
          <div style="clear: both"><br></div>
          <div class="block">
            Упс.. Что-то пошло не так и вы попали на ошибку 404!
            Возиожно страница на которую вы пытались зайти была удалена или же её никогда не существовало!
            Вы можете воспользоваться поиском на сайте или перейти на главную страницу - <a href="http://itproger:8888/index">iTProger</a>
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
