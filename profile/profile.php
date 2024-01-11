<?php
  global $connect;
  require_once 'configtest/connect.php';
  require_once __DIR__ . '/../authorization/src/helpers.php';

  checkAuth();
  
  $user = currentUser();
?>

<!DOCTYPE html>
<html>
<head>
    <title>профиль</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./profile.css" rel="stylesheet" />
    <script src="/../jquery-3.7.0.min.js"></script>


    <script>
      var result1 = "111";
    </script>
</head>
<body>

  <button id="bars" class="btn" onclick="togglePopup()"></button>
        <div id="bars_panel" >
              <button id="cross" onclick="togglePopup()"></button>
              
              <button id="tariff_bars" class="btn" onclick="window.location.href = '/../tariff.php'">Тарифы</button>

              <button id="singup_bars" class="btn" onclick="window.location.href = '/../singup.php'">Записаться</button>

              <button id="comment_bars" class="btn" onclick="window.location.href = '/../comment/comment.php'">Отзывы</button>

              <button id="qa_bars" class="btn" onclick="window.location.href = '/../QA.php'">Вопросы</button>

              <button id="closed_gall_bars" class="btn" onclick="window.location.href = '/../closed_gall/closed_gall.php'">Галерея</button>

              <button id="game_bars" class="btn" onclick="window.location.href = '/../memory_game/game.php?id=<?=$_GET['id'] ?>'">Игра</button>

              <button id="result_bars" class="btn" onclick="window.location.href = 'result.php?id=<?=$_GET['id'] ?>'">Результаты</button>
            </div>
          </div>
    <div id="main_text">
        <p style="font-size:28px;"><span>Профиль</span></p>
      </div>
    <div class="card home">
        <img
            class="avatar"
            src="<?php echo "/../authorization/". $user['avatar'] ?>"
            alt="<?php echo $user['name'] ?>"
        >
        <h1>Привет, <?php echo $user['name'] ?>!</h1>
        <form action="/../authorization/src/actions/logout.php" method="post">
            <button role="button" id="logout" class="btn">Выйти из аккаунта</button>
        </form>
    </div>
    <div id="text">
      <p><span>Задания по пройденному метериалу:</span></p>
    </div>
    <div class="faq">
        <div class="question">
          <p>тема 1 <button class="topic"></button></p> 
          <div class="content">
            <div class="tasks" id="t1">
                <p>Теория <button id="theory1"></button></p>
                <div id="content_theory1">
                  <p class="task">На самом деле жестовые языки почти полностью независимы от звуковых и идут своим путём 
                  развития. Жестовые языки различаются территориально и не только: страны с одинаковым звуковым языком могут иметь 
                  два различных жестовых языка; и наоборот, в области, в которой есть много звуковых языков, может присутствовать 
                  один общий жестовый.</p>
                  <p class="task">По данным Всемирной федерации глухих, в мире насчитывается более 70 миллионов глухих людей. Более 80% из них живут 
                    в развивающихся странах. В совокупности они используют более 300 различных жестовых языков.</p>
                  <p class="task">Первая сурдопедагогическая школа в России открылась в 1806 году в Павловске; как и в США, работала по французской методике. 
                    В результате русский жестовый язык оказался в родстве с жестовым языком Америки. В Москве же сурдопедагогическая школа открылась в 1860 г. 
                    Она работала по немецкой методике. Отголоски борьбы этих двух методик чувствуются в российской сурдопедагогике до сих пор.
                    В республиках бывшего СССР русский жестовый язык распространялся централизованно через создание школ и учреждений для 
                    глухих. В октябре 2020 года появилась информация о разработке башкирского жестового языка.</p>
                </div>
                <p>Практика <button id="practice1"></button></p>
                <div id="content_practice1">
                  <!-- <form action="/profile/vendortest/create1.php?id=<?=$_GET['id'] ?>" method="post" enctype="multipart/form-data"> -->
                    <div class="question-block">
                            <h2>Вопросы:</h2>
                            <?php
                            $sql = "SELECT * FROM task1 WHERE user_id =".$_GET['id'];
                            $result = $connect->query($sql);
                            
                            // Проверяем, есть ли результат
                            if ($result->num_rows > 0) {
                              ?>
                              <p style="color: green;">Тест пройден</p>
                            <?php
                            }
                            ?>
                            <p class="task">Сколько раздичных языков жестов насчитывают в мире?</p>
                            <ul>
                                <li><input type="radio" name="answer" value="1"><label class="task">менее 100</label></li>
                                <li><input type="radio" name="answer" value="2"><label class="task">около 200</label></li>
                                <li><input type="radio" name="answer" value="3"><label class="task">более 300</label></li>
                            </ul>
                        </div>
                        <p id="result1" name="result1"></p>
                        <div id="quizForm">
                            <p class="task">Выберете все првильные утвеждения про различия жестовых языков:</p>
                            <div>
                              <input type="checkbox" class="cb" id="option1" name="options" value="1">
                              <label for="option1" class="task">Существует только 1 жестовый всемирный язык и все использую только его</label>
                            </div>
                            <div>
                              <input type="checkbox" class="cb" id="option2" name="options" value="2">
                              <label for="option2" class="task">Внутри одной страны могут быть различия</label>
                            </div>
                            <div>
                              <input type="checkbox" class="cb" id="option3" name="options" value="3">
                              <label for="option3" class="task">У нескольких стран может быть общий язык</label>
                            </div>
                            <div>
                              <input type="checkbox" class="cb" id="option4" name="options" value="4">
                              <label for="option4" class="task">Язык жестов всегда привызан к языку своей страны</label>
                            </div>
                        </div>
                        <p id="result2" name="result2"></p>
                          <div class="container">
                              <div class="form-group">
                                <label for="message" class="task">Напишите между какими двумя методиками прподавания жестового языка в 
                                  России происходила борьба и почему:</label>
                                <input type="textarea" name="message" id="message1">
                          </div>
                          </div>
                        <input type="hidden" id="res1" name="result1" value="">
                        <input type="hidden" id="res2" name="result2" value="">
                        <input type="hidden" id="userId" value="<?php echo $_GET['id']; ?>">
                        <button type="button" class="btn" onclick="checkAnswer1(); checkAnswers1();">Проверить</button>
                        <button type="submit" class="btn" id="save1">Сохранить</button>
                    <!-- </form> -->
                        <p id="result_save1" name="result_save1"></p>
                </div>
          </div>
        </div>
        </div>
        <div class="question">
          <p>тема 2<button class="topic"></button></p>
          <div class="content">
            <div class="tasks">
                <p>Теория <button id="theory2"></button></p>
                <div id="content_theory2">
                <p class="task">У русского жестового языка нет общепринятой системы записи, хотя для него применимы системы SignWriting, 
                  Гамбургская нотация (Hamburg Notation System), нотация Стоуки. Лидия Димскис в своей книге «
                  Изучаем жестовый язык» выделяет следующую структуру жеста:
                  <li class="task">1. Форма руки (рук) — положение ладони, положение и направление пальцев;</li>
                  <li class="task">2. Место исполнения жеста (жестовое пространство) — над головой, у лица, на уровне плеч, шеи и т. д.;</li>
                  <li class="task">3. Характер движения — одноручные, двуручные с одинаковой и разной формой рук.</li><br></p>
                  <p class="task">Для записи положения пальцев используется 56 символов, для направления пальцев — 13, для направления ладони 
                  20 символов, для места исполнения жеста 54 символа, для направления и характера движения исполняемого жеста 
                  106 символов.</p>

                  <p class="task">Редупликация представляет собой повтор жеста, при котором изменяется его значение. 
                    Например, редуплицированный жест ПРИЙТИ приобретает значение «ходить». Выделяются три структурных типа редупликации:
                  <li class="task">1. Простая редупликация (жест повторяется с тем же количеством рук, на том же месте);</li>
                  <li class="task">2. Двуручная редупликация (редуплицированный сегмент исполняется второй рукой, то есть добавляется второй артикулятор);</li>
                  <li class="task">3. Немануальная редупликация (значимый повтор движений корпуса тела или головы).</li><br>

                  <p class="task">Модификация жеста представляет собой значимое изменение параметра жеста. 
                  Одной из важнейших модификаций глагольного жеста является изменение направления движения при 
                  субъектно-объектном согласовании. Например, при выполнении жеста УЧИТЬ, направленного на собеседника, 
                  предполагается направленность действия на него («я вас научу» и другие варианты), 
                  а при выполнении его пальцами к себе предполагается, что субъект обучения — говорящий («научите меня»). 
                  Такие глагольные жесты называются согласующимися.<br><br></p>

                  <p class="task">Жест обычно обращён в ту сторону, где находится собеседник (напротив говорящего, справа или слева от него). 
                  Если собеседник отсутствует, жест исполняется обычно правее нейтрального пространства, передавая тем самым значение «третьего лица».<br><br></p>

                  <p class="task">Словосложение представляет образование нового жеста из двух других жестов, при данном процессе исходные жесты могут
                   менять локализацию или редуцироваться. Например, в русском жестовом языке с помощью словосложения образованы жесты 
                   со значением «наличные» (ЖИВЫЕ^ДЕНЬГИ), «портрет» (ЛИЦО^КАРТИНА).</p>
                  
                  <p class="task">Количественные числительные выражаются в РЖЯ похоже на 10-ричную систему: есть группы жестов, обозначающих единицы,
                     десятки, сотни и числа от 11 до 19. Также существуют отдельные слова для разрядов: десять, тысяча, миллион, 
                     миллиард и т. п. Единицы выполняются простым показыванием соответствующего количества пальцев, 
                     от 11 до 19 — резким выбрасыванием пальцев из исходного положения, десятки — резким взмахом руки вниз с 
                     соответствующим количеством пальцев, а сотни — резким сгибанием пальцев.</p>
                </div>
                <p>Практика <button id="practice2"></button></p>
                <div id="content_practice2">
                <!-- <form action="/profile/vendortest/create2.php?id=<?=$_GET['id'] ?>" method="post" enctype="multipart/form-data"> -->
                    <div class="question-block">
                            <h2>Вопросы:</h2>
                            <?php
                            $sql = "SELECT * FROM task1 WHERE user_id =".$_GET['id'];
                            $result = $connect->query($sql);
                            
                            // Проверяем, есть ли результат
                            if ($result->num_rows > 0) {
                              ?>
                              <p style="color: green;">Тест пройден</p>
                            <?php
                            }
                            ?>
                            <p class="task">Какого типа редупликации НЕ существует?</p>
                            <ul>
                                <li><input type="radio" name="answer" value="1"><label class="task">Простая редупликация</label></li>
                                <li><input type="radio" name="answer" value="2"><label class="task">Липсинковая редупликация</label></li>
                                <li><input type="radio" name="answer" value="3"><label class="task">Двуручная редупликация</label></li>
                                <li><input type="radio" name="answer" value="4"><label class="task">Немануальная редупликация</label></li>
                            </ul>
                        </div>
                        <p id="result12" name="result12"></p>
                        <div id="quizForm">
                            <p class="task">Выберете все првильные утвеждения про различия жестовых языков:</p>
                            <div>
                              <input type="checkbox" class="cb" id="option1" name="options" value="1">
                              <label for="option1" class="task">Форма руки</label>
                            </div>
                            <div>
                              <input type="checkbox" class="cb" id="option2" name="options" value="2">
                              <label for="option2" class="task">Место исполнения жеста</label>
                            </div>
                            <div>
                              <input type="checkbox" class="cb" id="option3" name="options" value="3">
                              <label for="option3" class="task">Пол человека</label>
                            </div>
                        </div>
                        <p id="result22" name="result22"></p>
                          <div class="container">
                              <div class="form-group">
                                <label for="message" class="task">Напишите как происходит счёт на языке жестов:</label>
                                <input type="textarea" name="message" id="message2">
                          </div>
                          </div>
                        <input type="hidden" id="res12" name="result12" value="">
                        <input type="hidden" id="res22" name="result22" value="">
                        <input type="hidden" id="userId" value="<?php echo $_GET['id']; ?>">
                        <button type="button" class="btn" onclick="checkAnswer2(); checkAnswers2();">Проверить</button>
                        <button type="submit" class="btn" id="save2">Сохранить</button>
                        <p id="result_save2" name="result_save2"></p>
                    <!-- </form> -->
                </div>
          </div>
        </div>
        </div>
        <div class="question">
          <p>тема 3<button class="topic"></button></p>
          <div class="content">
            <div class="tasks">
                <p>Теория <button id="theory3"></button></p>
                <div id="content_theory3"><p class="task">В русском языке порядок слов в предложении свободный, а морфологические изменения лексем 
                  отражают их позиционное распределение. В русском жестовом языке характеристики субъекта и объекта 
                  определяются некоторыми правилами порядка жестов. Базовый порядок слов складывается из того, 
                  в какой позиции находятся слова, обозначающие субъект (S), глагол (V) и объект (О). 
                  С простыми и согласующимися глаголами используется SVO (Я читаю книгу), в предикатах с классификаторами — SOV; 
                  порядок слов может меняться.</p>
                  
                <p class="task">Один и тот же жест может использоваться в жестовом языке для обозначения разных объектов реального мира. 
                  При этом применение одного жеста для выражения различных значений подчиняется некоторым закономерностям[. 
                  Так, один жест может обозначать и действие, и орудие действия («утюг» и «гладить», «веник» и «подметать»); 
                  и действие, и деятеля, и орудие действия («ходить на лыжах», «лыжник», «лыжи»).
                  
                  В то же время в лексическом составе русского жестового языка много жестов, передающих значения аналитически, 
                  расчленённо. При помощи такого рода обозначений передаются смыслы «мебель»: «стол» + «стул» + «кровать» + «разный»;
                   «овощи»: «картофель» + «капуста» + «огурец» + «разный». Расчленённость ярко выражена в условиях, когда требуется 
                   выразить смысл, для которого нет готового жеста. Например, для наименования черники используется конструкция 
                   «ягода» + «есть» + «язык» + «чёрный», а для значения «бирюзовый» — «например» + «синий» 
                   (или «зелёный») + «отрицание» + «смешать». Последние два примера свидетельствуют, что в языке очень сильна 
                   тенденция к появлению новых лексических единиц, в которых возникает потребность в процессе общения.</p>
                  
                <p class="task">Жестовое имя — жест, принятый для обозначения некоего человека в конкретном сообществе носителей 
                  жестового языка — причём жестовое имя в разных сообществах может варьировать. Оно используется только 
                  для обозначения отсутствующего лица, а не при личном обращении.
                  
                  Жестовое имя часто связано с фамилией (жестовым именем Галины Зайцевой был жест «заяц») или с характерными 
                  элементами внешности (жестовое имя Бориса Ельцина — кулак, поворачивающийся около носа, имитирующий опьянение, 
                  а Владимира Путина — вытянутый нос «уточкой»), чертами характера, особенностями поведения, элементом биографии 
                  (место происхождения).</p></div>
                <p>Практика <button id="practice3"></button></p>
                <div id="content_practice3">
                  <!-- <form action="/profile/vendortest/create3.php?id=<?=$_GET['id'] ?>" method="post" enctype="multipart/form-data"> -->
                    <div class="question-block">
                            <h2>Вопросы:</h2>
                            <?php
                            $sql = "SELECT * FROM task1 WHERE user_id =".$_GET['id'];
                            $result = $connect->query($sql);
                            
                            // Проверяем, есть ли результат
                            if ($result->num_rows > 0) {
                              ?>
                              <p style="color: green;">Тест пройден</p>
                            <?php
                            }
                            ?>
                            <p class="task">Что значит аббревиатура SVO?</p>
                            <ul>
                                <li><input type="radio" name="answer" value="1"><label class="task">Личность (S), глагол (V) и объект (О)</label></li>
                                <li><input type="radio" name="answer" value="2"><label class="task">Субъект (S), глагол (V) и явление (О)</label></li>
                                <li><input type="radio" name="answer" value="3"><label class="task">Субъект (S), глагол (V) и объект (О)</label></li>
                            </ul>
                        </div>
                        <p id="result13" name="result13"></p>
                        <div id="quizForm">
                            <p class="task">Какие слова были разобраны выше в блоке теории как примеры жестов, передающих значения аналитически:</p>
                            <div>
                              <input type="checkbox" class="cb" id="option1" name="options" value="1">
                              <label for="option1" class="task">Мебель</label>
                            </div>
                            <div>
                              <input type="checkbox" class="cb" id="option2" name="options" value="2">
                              <label for="option2" class="task">Черника</label>
                            </div>
                            <div>
                              <input type="checkbox" class="cb" id="option3" name="options" value="3">
                              <label for="option3" class="task">Завод</label>
                            </div>
                            <div>
                              <input type="checkbox" class="cb" id="option4" name="options" value="4">
                              <label for="option3" class="task">Овощи</label>
                            </div>
                        </div>
                        <p id="result23" name="result23"></p>
                          <div class="container">
                              <div class="form-group">
                                <label for="message" class="task">Напишите что такое жестовое имя и как оно используется:</label>
                                <input type="textarea" name="message" id="message3">
                          </div>
                          </div>
                        <input type="hidden" id="res13" name="result13" value="">
                        <input type="hidden" id="res23" name="result23" value="">
                        <input type="hidden" id="userId" value="<?php echo $_GET['id']; ?>">
                        <button type="button" class="btn" onclick="checkAnswer3(); checkAnswers3();">Проверить</button>
                        <button type="submit"class="btn" id="save3">Сохранить</button>
                        <p id="result_save3" name="result_save3"></p>
                    <!-- </form> -->
                  </div>
          </div>
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


        $('.tasks #theory1').click(function() {
            var tasks = $(this).closest('.tasks');
            tasks.find('#content_theory1').slideToggle(200); 
            Flip(tasks, this);
        });

        $('.tasks #practice1').click(function() {
            var tasks = $(this).closest('.tasks');
            tasks.find('#content_practice1').slideToggle(200); 
            Flip(tasks, this);
        });



        $('.tasks #theory2').click(function() {
            var tasks = $(this).closest('.tasks');
            tasks.find('#content_theory2').slideToggle(200); 
            Flip(tasks, this);
        });

        $('.tasks #practice2').click(function() {
            var tasks = $(this).closest('.tasks');
            tasks.find('#content_practice2').slideToggle(200); 
            Flip(tasks, this);
        });


        $('.tasks #theory3').click(function() {
            var tasks = $(this).closest('.tasks');
            tasks.find('#content_theory3').slideToggle(200); 
            Flip(tasks, this);
        });

        $('.tasks #practice3').click(function() {
            var tasks = $(this).closest('.tasks');
            tasks.find('#content_practice3').slideToggle(200); 
            Flip(tasks, this);
        });

        $(function() {
        $('#save1').click(function() {
          var result1 = $('#res1').val();
          var result2 = $('#res2').val();
          var message = $('#message1').val();
          var userId = $('#userId').val();;
          
          $.ajax({
            url: '/profile/vendortest/create1.php',
            type: 'POST',
            data: {
              result1: result1,
              result2: result2,
              message: message,
              user_id: userId
            },success: function(response) {
              var result = document.getElementById('result_save1');
              result.textContent = "Ответ засчитан";
              result.style.color = "green";
            },
            error: function(xhr, status, error) {
              console.log(error);
              alert('Произошла ошибка при отправке данных');
            }
          });
        });
      });

      $(function() {
        $('#save2').click(function() {
          var result12 = $('#res12').val();
          var result22 = $('#res22').val();
          var message2 = $('#message2').val();
          var userId2 = $('#userId').val();;
          
          $.ajax({
            url: '/profile/vendortest/create2.php',
            type: 'POST',
            data: {
              result12: result12,
              result22: result22,
              message2: message2,
              user_id2: userId2
            },success: function(response) {
              var result = document.getElementById('result_save2');
              result.textContent = "Ответ засчитан";
              result.style.color = "green";
            },
            error: function(xhr, status, error) {
              console.log(error);
              alert('Произошла ошибка при отправке данных');
            }
          });
        });
      });

      $(function() {
        $('#save3').click(function() {
          var result13 = $('#res13').val();
          var result23 = $('#res23').val();
          var message3 = $('#message3').val();
          var userId3 = $('#userId').val();;
          
          $.ajax({
            url: '/profile/vendortest/create3.php',
            type: 'POST',
            data: {
              result13: result13,
              result23: result23,
              message3: message3,
              user_id3: userId3
            },success: function(response) {
              var result = document.getElementById('result_save3');
              result.textContent = "Ответ засчитан";
              result.style.color = "green";
            },
            error: function(xhr, status, error) {
              console.log(error);
              alert('Произошла ошибка при отправке данных');
            }
          });
        });
      });

      </script>
      <script src="./test.js"></script>
</body>
</html>