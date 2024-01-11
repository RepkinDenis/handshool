<!DOCTYPE html>
<html>
  <head>
    <title>частые вопросы</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./QA.css" rel="stylesheet" />
    <script src="jquery-3.7.0.min.js"></script>
    <!-- <script src="./gallery-lib/gallery.js"></script> -->
  </head>
  <body>
    <div id="base">
      <button id="bars" class="btn" onclick="togglePopup()"></button>
      <div id="bars_panel" >
            <button id="cross" onclick="togglePopup()">
            </button>

            <button id="tariff_bars" class="btn" onclick="window.location.href = 'tariff.php'">Тарифы</button>

            <button id="singup_bars" class="btn" onclick="window.location.href = 'singup.php'">Записаться</button>

            <button id="comment_bars" class="btn" onclick="window.location.href = '/../comment/comment.php'">Отзывы</button>

            <button id="registration_bars" class="btn" onclick="window.location.href = 'registration.php'">Регистрация</button>

            <button id="home_page_bars" class="btn" onclick="window.location.href = 'home_page.php'">Главная</button>
          </div>

    <div id="main_text">
        <p style="font-size:28px;"><span>Частые вопросы</span></p><p style="font-size:20px;">
          <span>Здесь вы получите ответы на часто задоваемые вопросы</span></p>
    </div>

    <div class="faq">
      <div class="question">
        <p>Как проходит обучение в нашей школе?<button class="topic"></button></p>
        <div class="content">Занятия проходят онланйн на платформе Zoom, также на сайте, 
          в личном кабинете, можно проходить тесте по теме, для закрепления результата</div>
      </div>
      <div class="question">
        <p>Есть ли ограничения по возрасту?<button class="topic"></button></p>
        <div class="content">На данный момент обучение могут пройти только люди достигшие 16-летия</div>
      </div>
      <div class="question">
        <p>Существует ли у нас система скидок? <button class="topic"></button></p>
        <div class="content">Да, для постоянных клиентов, которые обучаются более 6 месяцев непрерывно, есть скидка в 10%</div>
      </div>
      <div class="question">
        <p>Будет ли после прохождения обучения сертификат?<button class="topic"></button></p>
        <div class="content">На данный момент сертификат о прохождение нашего обучения не предусмотрен</div>
      </div>
      <div class="question">
        <p>Если ли возможность вернуть деньги за абонемент, если не получится продолжить обучение?<button class="topic"></button></p>
        <div class="content">Да, вы сможете вернуть деньги на неиспользованную часть абонемента</div>
      </div>
    </div>
      
</div>

    <script>
     function Flip(name,button_name) {
            $(button_name).css('transform', 'rotate(0deg)'); 
            if ($(name).hasClass('open')) {
                $(name).removeClass('open');
            } else {
                $(name).addClass('open');
                $(button_name).css('transform', 'rotate(180deg)'); 
            }
        }
       $('.question .topic').click(function() {
            var question = $(this).closest('.question');
            question.find('.content').slideToggle(200); 
            Flip(question,this);
        });

        function togglePopup() {
          var popup = document.getElementById("bars_panel");
          if (popup.style.left === "-400px") {
                popup.style.left = "-10px";
                popup.style.top = "-50px";
            } else {
                popup.style.left = "-400px";
            }
        }
    </script>
  </body>
</html>