<!DOCTYPE html>
<html>
  <head>
    <title>тарифы</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./tariff.css" rel="stylesheet" />
  </head>
  <body>
    <div id="single">
          <div id="duration_single" class="text"> <p><span>Продолжительность</span></p></div>
          <div id="subscriprion_single" class="text"> <p><span>Абонемент</span></p></div>
          <div id="pros_single" class="text"> <p><span>Плюсы</span></p></div>
          <div id="one_less_price_single" class="text"> <p><span>Цена 1 занятия</span></p></div>
          <div id="dur_price_single" class="text"> <p><span>Цена абонемента</span></p></div>

          <div id="answer_duration_single" class="answer"> <p><span>60 минут</span></p></div>
          <div id="answer_subscriprion_single" class="answer"> <p><span>4/8/16 занятий</span></p></div>
          <div id="answer_pros_single" class="answer"> <p><span>всё время уделяется вам </span></p></div>
          <div id="answer_one_less_price_single" class="answer"> <p><span>700 рублей</span></p></div>
          <div id="answer_dur_price_single" class="answer"> <p><span>2 500/4 500/8 000 рублей</span></p></div>
          <div id="single_title">
              <p><span>Индивидуальные занятия</span></p></div>
            </div>
        <div id="group">
          <div id="duration_group" class="text"> <p><span>Продолжительность</span></p></div>
          <div id="subscriprion_group" class="text"> <p><span>Абонемент</span></p></div>
          <div id="pros_group" class="text"> <p><span>Плюсы</span></p></div>
          <div id="one_less_price_group" class="text"> <p><span>Цена 1 занятия</span></p></div>
          <div id="dur_price_group" class="text"> <p><span>Цена абонемента</span></p></div>

          <div id="answer_duration_group" class="answer"> <p><span>60 минут</span></p></div>
          <div id="answer_subscriprion_group" class="answer"> <p><span>4/8/16 занятий</span></p></div>
          <div id="answer_pros_group" class="answer"> <p><span>практикуете коммуникативные навыки</span></p></div>
          <div id="answer_one_less_price_group" class="answer"> <p><span>400 рублей</span></p></div>
          <div id="answer_dur_price_group" class="answer"> <p><span>1 400/2 500/4 500 рублей</span></p></div>
          <div id="group_title">
              <p><span>Групповые занятия</span></p></div>
            </div>
        </div>
        <div id="pair">
          <div id="duration_pair" class="text"> <p><span>Продолжительность</span></p></div>
          <div id="subscriprion_pair" class="text"> <p><span>Абонемент</span></p></div>
          <div id="pros_pair" class="text"> <p><span>Плюсы</span></p></div>
          <div id="one_less_price_pair" class="text"> <p><span>Цена 1 занятия</span></p></div>
          <div id="dur_price_pair" class="text"> <p><span>Цена абонемента</span></p></div>

          <div id="answer_duration_pair" class="answer"> <p><span>60 минут</span></p></div>
          <div id="answer_subscriprion_pair" class="answer"> <p><span>4/8/16 занятий</span></p></div>
          <div id="answer_pros_pair" class="answer"> <p><span>изучать с другом веселей </span></p></div>
          <div id="answer_one_less_price_pair" class="answer"> <p><span>550 рублей</span></p></div>
          <div id="answer_dur_price_pair" class="answer"> <p><span>2 000/3 700/7 000 рублей</span></p></div>
          <div id="pair_title">
              <p><span>Парные занятия</span></p></div>
            </div>
        </div>
        <div id="main_text">
          <p id="title"><span>Тарифы</span></p>
        </div>
        <button id="bars" class="btn" onclick="togglePopup()"></button>

        <div id="bars_panel" >

              <button id="cross" onclick="togglePopup()"></button>

              <button id="registration_bars" class="btn" onclick="window.location.href = 'registration.php'">Регистрация</button>

              <button id="singup_bars" class="btn" onclick="window.location.href = 'singup.php'">Записаться</button>

              <button id="comment_bars" class="btn" onclick="window.location.href = '/../comment/comment.php'">Отзывы</button>

              <button id="qa_bars" class="btn" onclick="window.location.href = 'QA.php'">Вопросы</button>

              <button id="home_page_bars" class="btn" onclick="window.location.href = 'home_page.php'">Главная</button>
            </div>
          </div>
        </div>
      <script>
        function togglePopup() {
          var popup = document.getElementById("bars_panel");
          if (popup.style.left === "-400px") {
                popup.style.left = "0";
            } else {
                popup.style.left = "-400px";
            }
        }
      </script>
  </body>
</html>