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
