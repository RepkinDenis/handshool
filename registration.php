<?php
require_once __DIR__ . '/authorization/src/helpers.php';

checkGuest();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>регистрация</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./registration.css" rel="stylesheet" />
  </head>
  <body>
    <div id="base">
    <div id="head">
            <p style="font-size:28px;"><span>Регистрация</span></p>
        </div>

      <form class="card" action="/authorization/src/actions/register.php" method="post" enctype="multipart/form-data">
        <h2 style="text-align: center;">Регистрация</h2>
    
        <label for="name">
            Имя
            <br><br>
            <input
                type="text"
                id="name"
                class="inp"
                name="name"
                placeholder="Иванов Иван"
                value="<?php echo old('name') ?>"
                <?php echo validationErrorAttr('name'); ?>
            >
            <?php if(hasValidationError('name')): ?>
                <small><?php echo validationErrorMessage('name'); ?></small>
            <?php endif; ?>
        </label>
    
        <br><br>
        <label for="email">
            E-mail
            <br><br>
            <input
                type="text"
                id="email"
                class="inp"
                name="email"
                placeholder="example@gmail.com"
                value="<?php echo old('email') ?>"
                <?php echo validationErrorAttr('email'); ?>
            >
            <?php if(hasValidationError('email')): ?>
                <small><?php echo validationErrorMessage('email'); ?></small>
            <?php endif; ?>
        </label>
    
        <br><br>
        <label for="avatar">Изображение профиля
            <br><br>
            <input
                type="file"
                id="avatar"
                name="avatar"
                <?php echo validationErrorAttr('avatar'); ?>
            >
            <?php if(hasValidationError('avatar')): ?>
                <small><?php echo validationErrorMessage('avatar'); ?></small>
            <?php endif; ?>
        </label>
    
        <br><br>
        <div class="grid">
            <label for="password">
                Пароль
                <br><br>
                <input
                    type="password"
                    id="password"
                    class="inp"
                    name="password"
                    placeholder="******"
                    <?php echo validationErrorAttr('password'); ?>
                >
                <?php if(hasValidationError('password')): ?>
                    <small><?php echo validationErrorMessage('password'); ?></small>
                <?php endif; ?>
            </label>
            
            <br><br>
            <label for="password_confirmation">
                Подтверждение
                <br><br>
                <input
                    type="password"
                    id="password_confirmation"
                    class="inp"
                    name="password_confirmation"
                    placeholder="******"
                >
            </label>
        </div>
    
        <fieldset>
            <label for="terms">
                <input
                    type="checkbox"
                    id="terms"
                    name="terms"
                >
                Я принимаю все условия пользования
            </label>
        </fieldset>
    
        <button
            type="submit"
            id="submit"
            disabled
        >Продолжить</button>
      </form>
        
      <?php include_once __DIR__ . '/authorization/components/scripts.php' ?>

      <div id="back"></div>

      <img id="gall" src="images/registration/knowledge.png"/>

      <div id="main_text" >
        <p><span>Заполнив форму регистрации на данной страницы
          вы создадите свой личный профиль, 
          в котором вы сможите выполнять различние задания с проверкой ответов, 
          для отработки полученных знаний на практике. Перед регистрацией необходимо записаться на занятие.
        </span></p>
      </div>
      <button id="bars" class="btn" onclick="togglePopup()"></button>
      <div id="bars_panel" >
            <button id="cross" onclick="togglePopup()"></button>

            <button id="tariff_bars" class="btn" onclick="window.location.href = 'tariff.php'">Тарифы</button>

            <button id="singup_bars" class="btn" onclick="window.location.href = 'singup.php'">Записаться</button>

            <button id="comment_bars" class="btn" onclick="window.location.href = '/../comment/comment.php'">Отзывы</button>

            <button id="qa_bars" class="btn" onclick="window.location.href = 'QA.php'">Вопросы</button>

            <button id="home_page_bars" class="btn" onclick="window.location.href = 'home_page.php'">Главная</button>
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