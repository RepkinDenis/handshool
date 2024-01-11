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
    <title>Результаты</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./result.css" rel="stylesheet" />
    <script src="/../jquery-3.7.0.min.js"></script>
</head>
<body>

  <button id="bars" class="btn" onclick="togglePopup()"></button>
        <div id="bars_panel" >
              <button id="cross" onclick="togglePopup()"></button>
              
              <button id="tariff_bars" class="btn" onclick="window.location.href = '/../tariff.php'">Тарифы</button>

              <button id="singup_bars" class="btn" onclick="window.location.href = '/../singup.php'">Записаться</button>

              <button id="comment_bars" class="btn" onclick="window.location.href = '/../comment/comment.php'">Отзывы</button>

              <button id="qa_bars" class="btn" onclick="window.location.href = '/../QA.php'">Вопросы</button>

              <button id="home_page_bars" class="btn" onclick="window.location.href = '/../home_page.php'">Главная</button>

              <button id="closed_gall_bars" class="btn" onclick="window.location.href = '/../closed_gall/closed_gall.php'">Галерея</button>

              <button id="game_bars" class="btn" onclick="window.location.href = '/../memory_game/game.php?id=<?=$_GET['id'] ?>'">Игра</button>
            </div>
          </div>
    <div id="main_text">
        <p style="font-size:28px;"><span>Результаты</span></p>
      </div>
    <div class="card home">
        <img
            class="avatar"
            src="<?php echo "/../authorization/". $user['avatar'] ?>"
            alt="<?php echo $user['name'] ?>"
        >
        <h1><?php echo $user['name'] ?>!</h1>
        <form action="/../authorization/src/actions/logout.php" method="post">
            <button role="button" id="logout" class="btn">Выйти из аккаунта</button>
        </form>
    </div>
    <div class="content">
                <div class="tasks" id="t1">
                    <p>Тема 1 <button id="practice1"></button></p>
                    <div id="content_practice1">
                    <table id="table_id11">
                        <tr>
                            <th></th>
                            <th>Вопрос1</th>
                            <th>Вопрос2</th>
                            <th>Вопрос3</th>
                        </tr>
                        <?php
                            $users = mysqli_query($connect, "SELECT * FROM `task1` WHERE user_id=".$_GET['id']);
                            $users = mysqli_fetch_all($users);
                            if ($users){
                                foreach ($users as $user){
                                    ?>
                                    <tr>
                                        <td>Баллов:</td>
                                        <td><?=$user[1] ?></td>
                                        <td><?=$user[2] ?></td>
                                        <td><?=$user[4] ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                        </table>
                    </div>

                    <p>Тема 2 <button id="practice2"></button></p>
                    <div id="content_practice2">
                    <table id="table_id12">
                        <tr>
                            <th></th>
                            <th>Вопрос1</th>
                            <th>Вопрос2</th>
                            <th>Вопрос3</th>
                        </tr>
                        <?php
                            $users = mysqli_query($connect, "SELECT * FROM `task2` WHERE user_id=".$_GET['id']);
                            $users = mysqli_fetch_all($users);
                            if ($users){
                                foreach ($users as $user){
                                    ?>
                                    <tr>
                                        <td>Баллов:</td>
                                        <td><?=$user[1] ?></td>
                                        <td><?=$user[2] ?></td>
                                        <td><?=$user[4] ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                        </table>
                    </div>

                    <p>Тема 3 <button id="practice3"></button></p>
                    <div id="content_practice3">
                    <table id="table_id13">
                        <tr>
                            <th></th>
                            <th>Вопрос1</th>
                            <th>Вопрос2</th>
                            <th>Вопрос3</th>
                        </tr>
                        <?php
                            $users = mysqli_query($connect, "SELECT * FROM `task3` WHERE user_id=".$_GET['id']);
                            $users = mysqli_fetch_all($users);
                            if ($users){
                                foreach ($users as $user){
                                    ?>
                                    <tr>
                                        <td>Баллов:</td>
                                        <td><?=$user[1] ?></td>
                                        <td><?=$user[2] ?></td>
                                        <td><?=$user[4] ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                        </table>
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
        $('.tasks #practice1').click(function() {
            var tasks = $(this).closest('.tasks');
            tasks.find('#content_practice1').slideToggle(200); 
            Flip(tasks, this);
        });
        $('.tasks #practice2').click(function() {
            var tasks = $(this).closest('.tasks');
            tasks.find('#content_practice2').slideToggle(200); 
            Flip(tasks, this);
        });
        $('.tasks #practice3').click(function() {
            var tasks = $(this).closest('.tasks');
            tasks.find('#content_practice3').slideToggle(200); 
            Flip(tasks, this);
        });
    </script>
</body>