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
    <link href="./profile_teacher.css" rel="stylesheet" />
    <script src="/../jquery-3.7.0.min.js"></script>

    <style>
        .highlight {
            background-color: yellow;
        }
    </style>

</head>
<body>
    <button id="bars" class="btn" onclick="togglePopup()"></button>
            <div id="bars_panel" >
                <button id="cross" onclick="togglePopup()"></button>
                
                <button id="tariff_bars" class="btn" onclick="window.location.href = '/../tariff.php'">Тарифы</button>

                <button id="singup_bars" class="btn" onclick="window.location.href = '/../singup.php'">Записаться</button>

                <button id="comment_bars" class="btn" onclick="window.location.href = '/../comment/comment.php'">Отзывы</button>

                <button id="qa_bars" class="btn" onclick="window.location.href = '/../QA.php'">Вопросы</button>
                </div>
            </div>
    <div id="main_text">
        <p><span>Профиль(учитель)</span></p>
    </div>

    <div class="card home">
        <img
            class="avatar"
            src="<?php echo "/../authorization/". $user['avatar'] ?>"
            alt="<?php echo $user['name'] ?>"
        >
        <h1>Привет, <?php echo $user['name'] ?>!</h1>
        <input type="text" id="searchInput" placeholder="Введите текст для поиска">
        <button class="btn" onclick="search()">Искать</button>
        <form action="/../authorization/src/actions/logout.php" method="post">
            <button role="button" id="logout" class="btn">Выйти из аккаунта</button>
        </form>
    
    <div class="faq" id="content">
        <div class="question">
            <?php
                $users = mysqli_query($connect, "SELECT * FROM `users` WHERE id=5");
                $users = mysqli_fetch_all($users);
                foreach ($users as $user){
            ?>
            <p><?=$user[1] ?> <button class="topic"></button></p> 
          <?php }
          ?>
          <div class="content">
            <div class="tasks" id="t1">
                <p>Тема 1 <button id="practice1"></button></p>
                <div id="content_practice1">
                <table id="table_id11">
                    <tr>
                        <th><button onclick="rewriteTable11()" class="update" name="up11"></button></th>
                        <th>Вопрос1</th>
                        <th>Вопрос2</th>
                    </tr>
                    <?php
                        $users = mysqli_query($connect, "SELECT * FROM `task1` WHERE user_id=5");
                        $users = mysqli_fetch_all($users);
                        if ($users){
                            foreach ($users as $user){
                                ?>
                                <tr>
                                    <td>Баллов:</td>
                                    <td><?=$user[1] ?></td>
                                    <td><?=$user[2] ?></td>
                                </tr>
                                <?php
                                $value_from_database = $user[3];
                            }
                        }else{
                            $value_from_database = "Ученик пока не предоставил ответ";
                        }
                    ?>
                    </table>

                    <!-- <form action="vendortest/textarea.php" method="post"> -->
                        <div class="container">
                            <div class="form-group">
                                <label for="message">Ответ ученика:</label>
                                <input type="textarea" name="message" value="<?php echo $value_from_database; ?>">
                                <button type="submit" id="button111" name="button1" class="btn" value=1>Засчитанно</button>
                                <button type="submit" id="button112" name="button2" class="btn" value=0>Незасчитанно</button>
                            </div>
                        </div>
                    <!-- </form> -->
                    <span id="res11" name="res11"></span>
                </div>

                <p>Тема 2 <button id="practice2"></button></p>
                <div id="content_practice2">
                <table id="table_id12">
                    <tr>
                        <th><button onclick="rewriteTable12()" class="update" name="up12"></button></th>
                        <th>Вопрос1</th>
                        <th>Вопрос2</th>
                    </tr>
                    <?php
                        $users = mysqli_query($connect, "SELECT * FROM `task2` WHERE user_id=5");
                        $users = mysqli_fetch_all($users);
                        if ($users){
                            foreach ($users as $user){
                                ?>
                                <tr>
                                    <td>Баллов:</td>
                                    <td><?=$user[1] ?></td>
                                    <td><?=$user[2] ?></td>
                                </tr>
                                <?php
                                $value_from_database = $user[3];
                            }
                        }else{
                            $value_from_database = "Ученик пока не предоставил ответ";
                        }
                    ?>
                    </table>

                    <div class="container">
                            <div class="form-group">
                                <label for="message">Ответ ученика:</label>
                                <input type="textarea" name="message" value="<?php echo $value_from_database; ?>">
                                <button type="submit" id="button121" name="button1" class="btn" value=1>Засчитанно</button>
                                <button type="submit" id="button122" name="button2" class="btn" value=0>Незасчитанно</button>
                            </div>
                        </div>
                    <span id="res12" name="res12"></span>
                </div>

                <p>Тема 3 <button id="practice3"></button></p>
                <div id="content_practice3">
                <table id="table_id13">
                    <tr>
                        <th><button onclick="rewriteTable13()" class="update" name="up13"></button></th>
                        <th>Вопрос1</th>
                        <th>Вопрос2</th>
                    </tr>
                    <?php
                        $users = mysqli_query($connect, "SELECT * FROM `task3` WHERE user_id=5");
                        $users = mysqli_fetch_all($users);
                        if ($users){
                            foreach ($users as $user){
                                ?>
                                <tr>
                                    <td>Баллов:</td>
                                    <td><?=$user[1] ?></td>
                                    <td><?=$user[2] ?></td>
                                </tr>
                                <?php
                                $value_from_database = $user[3];
                            }
                        }else{
                            $value_from_database = "Ученик пока не предоставил ответ";
                        }
                    ?>
                    </table>

                    <div class="container">
                            <div class="form-group">
                                <label for="message">Ответ ученика:</label>
                                <input type="textarea" name="message" value="<?php echo $value_from_database; ?>">
                                <button type="submit" id="button131" name="button1" class="btn" value=1>Засчитанно</button>
                                <button type="submit" id="button132" name="button2" class="btn" value=0>Незасчитанно</button>
                            </div>
                        </div>
                    <span id="res13" name="res13"></span>
                </div>

                </div>
            </div>
          </div>   

        <div class="question">
        <?php
                $users = mysqli_query($connect, "SELECT * FROM `users` WHERE id=1");
                $users = mysqli_fetch_all($users);
                foreach ($users as $user){
            ?>
            <p><?=$user[1] ?> <button class="topic"></button></p> 
          <?php }
          ?>
          <div class="content">
            <div class="tasks" id="t2">
                <p>Тема 1 <button id="practice1"></button></p>
                <div id="content_practice1">
                <table id="table_id21">
                    <tr>
                        <th><button onclick="rewriteTable21()" class="update" name="up11"></button></th>
                        <th>Вопрос1</th>
                        <th>Вопрос2</th>
                    </tr>
                    <?php
                        $users = mysqli_query($connect, "SELECT * FROM `task1` WHERE user_id=1");
                        $users = mysqli_fetch_all($users);
                        if ($users){
                            foreach ($users as $user){
                                ?>
                                <tr>
                                    <td>Баллов:</td>
                                    <td><?=$user[1] ?></td>
                                    <td><?=$user[2] ?></td>
                                </tr>
                                <?php
                                $value_from_database = $user[3];
                            }
                        }else{
                            $value_from_database = "Ученик пока не предоставил ответ";
                        }
                    ?>
                    </table>

                    <!-- <form action="vendortest/textarea.php" method="post"> -->
                        <div class="container">
                            <div class="form-group">
                                <label for="message">Ответ ученика:</label>
                                <input type="textarea" name="message"  value="<?php echo $value_from_database; ?>">
                                <button type="submit" id="button211" name="button1" class="btn" value=1>Засчитанно</button>
                                <button type="submit" id="button212" name="button2" class="btn" value=0>Незасчитанно</button>
                            </div>
                        </div>
                    <!-- </form> -->
                    <span id="res21" name="res21"></span>
                </div>

                <p>Тема 2 <button id="practice2"></button></p>
                <div id="content_practice2">
                <table id="table_id22">
                    <tr>
                        <th><button onclick="rewriteTable22()" class="update" name="up12"></button></th>
                        <th>Вопрос1</th>
                        <th>Вопрос2</th>
                    </tr>
                    <?php
                        $users = mysqli_query($connect, "SELECT * FROM `task2` WHERE user_id=1");
                        $users = mysqli_fetch_all($users);
                        if ($users){
                            foreach ($users as $user){
                                ?>
                                <tr>
                                    <td>Баллов:</td>
                                    <td><?=$user[1] ?></td>
                                    <td><?=$user[2] ?></td>
                                </tr>
                                <?php
                                $value_from_database = $user[3];
                            }
                        }else{
                            $value_from_database = "Ученик пока не предоставил ответ";
                        }
                    ?>
                    </table>

                    <!-- <form action="vendortest/textarea.php" method="post"> -->
                        <div class="container">
                            <div class="form-group">
                                <label for="message">Ответ ученика:</label>
                                <input type="textarea" name="message" value="<?php echo $value_from_database; ?>">
                                <button type="submit" id="button221" name="button1" class="btn" value=1>Засчитанно</button>
                                <button type="submit" id="button222" name="button2" class="btn" value=0>Незасчитанно</button>
                            </div>
                        </div>
                    <!-- </form> -->
                    <span id="res22" name="res22"></span>
                </div>

                <p>Тема 3 <button id="practice3"></button></p>
                <div id="content_practice3">
                <table id="table_id23">
                    <tr>
                        <th><button onclick="rewriteTable23()" class="update" name="up13"></button></th>
                        <th>Вопрос1</th>
                        <th>Вопрос2</th>
                    </tr>
                    <?php
                        $users = mysqli_query($connect, "SELECT * FROM `task3` WHERE user_id=1");
                        $users = mysqli_fetch_all($users);
                        if ($users){
                            foreach ($users as $user){
                                ?>
                                <tr>
                                    <td>Баллов:</td>
                                    <td><?=$user[1] ?></td>
                                    <td><?=$user[2] ?></td>
                                </tr>
                                <?php
                                $value_from_database = $user[3];
                            }
                        }else{
                            $value_from_database = "Ученик пока не предоставил ответ";
                        }
                    ?>
                    </table>

                    <!-- <form action="vendortest/textarea.php" method="post"> -->
                        <div class="container">
                            <div class="form-group">
                                <label for="message">Ответ ученика:</label>
                                <input type="textarea" name="message" value="<?php echo $value_from_database; ?>">
                                <button type="submit" id="button231" name="button1" class="btn" value=1>Засчитанно</button>
                                <button type="submit" id="button232" name="button2" class="btn" value=0>Незасчитанно</button>
                            </div>
                        </div>
                    <!-- </form> -->
                    <span id="res23" name="res23"></span>
                </div>

                </div>
            </div>
        </div>

            <div class="question">
            <?php
                    $users = mysqli_query($connect, "SELECT * FROM `users` WHERE id=12");
                    $users = mysqli_fetch_all($users);
                    foreach ($users as $user){
                ?>
                <p><?=$user[1] ?> <button class="topic"></button></p> 
            <?php }
            ?>
            <div class="content">
                <div class="tasks" id="t3">
                    <p>Тема 1 <button id="practice1"></button></p>
                    <div id="content_practice1">
                    <table id="table_id31">
                        <tr>
                            <th><button onclick="rewriteTable31()" class="update" name="up11"></button></th>
                            <th>Вопрос1</th>
                            <th>Вопрос2</th>
                        </tr>
                        <?php
                            $users = mysqli_query($connect, "SELECT * FROM `task1` WHERE user_id=12");
                            $users = mysqli_fetch_all($users);
                            if ($users){
                                foreach ($users as $user){
                                    ?>
                                    <tr>
                                        <td>Баллов:</td>
                                        <td><?=$user[1] ?></td>
                                        <td><?=$user[2] ?></td>
                                    </tr>
                                    <?php
                                    $value_from_database = $user[3];
                                }
                            }else{
                                $value_from_database = "Ученик пока не предоставил ответ";
                            }
                        ?>
                        </table>

                        <!-- <form action="vendortest/textarea.php" method="post"> -->
                            <div class="container">
                                <div class="form-group">
                                    <label for="message">Ответ ученика:</label>
                                    <input type="textarea" name="message" value="<?php echo $value_from_database; ?>">
                                    <button type="submit" id="button311" name="button1" class="btn" value=1>Засчитанно</button>
                                    <button type="submit" id="button312" name="button2" class="btn" value=0>Незасчитанно</button>
                                </div>
                            </div>
                        <!-- </form> -->
                        <span id="res31" name="res31"></span>
                    </div>

                    <p>Тема 2 <button id="practice2"></button></p>
                    <div id="content_practice2">
                    <table id="table_id32">
                        <tr>
                            <th><button onclick="rewriteTable32()" class="update" name="up12"></button></th>
                            <th>Вопрос1</th>
                            <th>Вопрос2</th>
                        </tr>
                        <?php
                            $users = mysqli_query($connect, "SELECT * FROM `task2` WHERE user_id=12");
                            $users = mysqli_fetch_all($users);
                            if ($users){
                                foreach ($users as $user){
                                    ?>
                                    <tr>
                                        <td>Баллов:</td>
                                        <td><?=$user[1] ?></td>
                                        <td><?=$user[2] ?></td>
                                    </tr>
                                    <?php
                                    $value_from_database = $user[3];
                                }
                            }else{
                                $value_from_database = "Ученик пока не предоставил ответ";
                            }
                        ?>
                        </table>

                        <!-- <form action="vendortest/textarea.php" method="post"> -->
                            <div class="container">
                                <div class="form-group">
                                    <label for="message">Ответ ученика:</label>
                                    <input type="textarea" name="message" value="<?php echo $value_from_database; ?>">
                                    <button type="submit" id="button321" name="button1" class="btn" value=1>Засчитанно</button>
                                    <button type="submit" id="button322" name="button2" class="btn" value=0>Незасчитанно</button>
                                </div>
                            </div>
                        <!-- </form> -->
                        <span id="res32" name="res32"></span>
                    </div>

                    <p>Тема 3 <button id="practice3"></button></p>
                    <div id="content_practice3">
                    <table id="table_id33">
                        <tr>
                            <th><button onclick="rewriteTable33()" class="update" name="up13"></button></th>
                            <th>Вопрос1</th>
                            <th>Вопрос2</th>
                        </tr>
                        <?php
                            $users = mysqli_query($connect, "SELECT * FROM `task3` WHERE user_id=2");
                            $users = mysqli_fetch_all($users);
                            if ($users){
                                foreach ($users as $user){
                                    ?>
                                    <tr>
                                        <td>Баллов:</td>
                                        <td><?=$user[1] ?></td>
                                        <td><?=$user[2] ?></td>
                                    </tr>
                                    <?php
                                    $value_from_database = $user[3];
                                }
                            }else{
                                $value_from_database = "Ученик пока не предоставил ответ";
                            }
                        ?>
                        </table>

                        <!-- <form action="vendortest/textarea.php" method="post"> -->
                            <div class="container">
                                <div class="form-group">
                                    <label for="message">Ответ ученика:</label>
                                    <input type="textarea" name="message" value="<?php echo $value_from_database; ?>">
                                    <button type="submit" id="button331" name="button1" class="btn" value=1>Засчитанно</button>
                                    <button type="submit" id="button332" name="button2" class="btn" value=0>Незасчитанно</button>
                                </div>
                            </div>
                        <!-- </form> -->
                        <span id="res33" name="res33"></span>
                    </div>

                    </div>
                </div>
            </div>
        </div>


    <script>
        function search() {
            var input = document.getElementById("searchInput");
            var searchText = input.value;
            var content = document.getElementById("content");
            var paragraphs = content.getElementsByTagName("p");

            for (var i = 0; i < paragraphs.length; i++) {
                var paragraphText = paragraphs[i].innerHTML;
                var unhighlightedText = paragraphText.replace(/<span class="highlight">(.*?)<\/span>/g, '$1');
                paragraphs[i].innerHTML = unhighlightedText;

                if (searchText !== "") {
                    var highlightedText = unhighlightedText.replace(new RegExp(searchText, 'gmi'), function(match) {
                        return '<span class="highlight">' + match + '</span>';
                    });
                    paragraphs[i].innerHTML = highlightedText;
                }
            }
        }
    </script>

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

      </script>

    <script>
        sessionStorage.setItem('button111_click', '0');
        sessionStorage.setItem('button112_click', '0');
        sessionStorage.setItem('button121_click', '0');
        sessionStorage.setItem('button122_click', '0');
        sessionStorage.setItem('button131_click', '0');
        sessionStorage.setItem('button132_click', '0');

        sessionStorage.setItem('button211_click', '0');
        sessionStorage.setItem('button212_click', '0');
        sessionStorage.setItem('button221_click', '0');
        sessionStorage.setItem('button222_click', '0');
        sessionStorage.setItem('button231_click', '0');
        sessionStorage.setItem('button232_click', '0');

        sessionStorage.setItem('button211_click', '0');
        sessionStorage.setItem('button212_click', '0');
        sessionStorage.setItem('button221_click', '0');
        sessionStorage.setItem('button222_click', '0');
        sessionStorage.setItem('button231_click', '0');
        sessionStorage.setItem('button232_click', '0');


        function setButton1ClickSession(button) {
            sessionStorage.setItem(button+"_click", '1');
        }
        document.getElementById('button111').addEventListener('click', function() {
            setButton1ClickSession(button111);
            updateDatabase(111);
        });
        document.getElementById('button112').addEventListener('click', function() {
            setButton1ClickSession(button112);
            updateDatabase(112);
        });
        document.getElementById('button121').addEventListener('click',  function() {
            setButton1ClickSession(button121);
            updateDatabase(121);
        });
        document.getElementById('button122').addEventListener('click', function() {
            setButton1ClickSession(button121);
            updateDatabase(122);
        });
        document.getElementById('button131').addEventListener('click',  function() {
            setButton1ClickSession(button131);
            updateDatabase(131);
        });
        document.getElementById('button132').addEventListener('click',  function() {
            setButton1ClickSession(button111);
            updateDatabase(132);
        });
        
        document.getElementById('button211').addEventListener('click', function() {
            setButton1ClickSession(button111);
            updateDatabase(211);
        });
        document.getElementById('button212').addEventListener('click', function() {
            setButton1ClickSession(button112);
            updateDatabase(212);
        });
        document.getElementById('button221').addEventListener('click',  function() {
            setButton1ClickSession(button121);
            updateDatabase(221);
        });
        document.getElementById('button222').addEventListener('click', function() {
            setButton1ClickSession(button121);
            updateDatabase(222);
        });
        document.getElementById('button231').addEventListener('click',  function() {
            setButton1ClickSession(button131);
            updateDatabase(231);
        });
        document.getElementById('button232').addEventListener('click',  function() {
            setButton1ClickSession(button111);
            updateDatabase(232);
        });

        document.getElementById('button311').addEventListener('click', function() {
            setButton1ClickSession(button111);
            updateDatabase(311);
        });
        document.getElementById('button312').addEventListener('click', function() {
            setButton1ClickSession(button112);
            updateDatabase(312);
        });
        document.getElementById('button321').addEventListener('click',  function() {
            setButton1ClickSession(button121);
            updateDatabase(321);
        });
        document.getElementById('button322').addEventListener('click', function() {
            setButton1ClickSession(button121);
            updateDatabase(322);
        });
        document.getElementById('button331').addEventListener('click',  function() {
            setButton1ClickSession(button131);
            updateDatabase(331);
        });
        document.getElementById('button332').addEventListener('click',  function() {
            setButton1ClickSession(button111);
            updateDatabase(332);
        });
        

        function updateDatabase(button) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'check_textarea.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    if(button=='111' || button=='112'){
                        var result1 = document.getElementById('res11');
                        rewriteTable11();
                    } else if(button=='121' || button=='122'){
                        var result1 = document.getElementById('res12');
                        rewriteTable12();
                    } else if(button=='131' || button=='132'){
                        var result1 = document.getElementById('res13');
                        rewriteTable13();
                    }

                    if(button=='211' || button=='212'){
                        var result1 = document.getElementById('res21');
                        rewriteTable21();
                    } else if(button=='221' || button=='222'){
                        var result1 = document.getElementById('res22');
                        rewriteTable22();
                    } else if(button=='231' || button=='232'){
                        var result1 = document.getElementById('res23');
                        rewriteTable23();
                    }

                    if(button=='311' || button=='312'){
                        var result1 = document.getElementById('res31');
                        rewriteTable31();
                    } else if(button=='321' || button=='322'){
                        var result1 = document.getElementById('res32');
                        rewriteTable32();
                    } else if(button=='331' || button=='332'){
                        var result1 = document.getElementById('res33');
                        rewriteTable33();
                    }
                    result1.textContent = "Ответ засчитан";
                    result1.style.color = "green";
                    }
            };
            var params = "button" + button + "_click=1"; 
            xhr.send(params);
        }


    function rewriteTable11() {
    var xhr1 = new XMLHttpRequest();
    xhr1.open('GET', 'up_textarea/up_textarea11.php', true);
    xhr1.onreadystatechange = function() {
        if (xhr1.readyState === 4 && xhr1.status === 200) {
            var result = JSON.parse(xhr1.responseText);
            var table = 'table_id11';
            updateTable(result, table);
        }
    };
    xhr1.send();
    }

    function rewriteTable12() {
        var xhr1 = new XMLHttpRequest();
        xhr1.open('GET', 'up_textarea/up_textarea12.php', true);
        xhr1.onreadystatechange = function() {
            if (xhr1.readyState === 4 && xhr1.status === 200) {
                var result = JSON.parse(xhr1.responseText);
                var table = 'table_id12';
                updateTable(result, table);
            }
        };
        xhr1.send();
        }

    function rewriteTable13() {
        var xhr1 = new XMLHttpRequest();
        xhr1.open('GET', 'up_textarea/up_textarea13.php', true);
        xhr1.onreadystatechange = function() {
            if (xhr1.readyState === 4 && xhr1.status === 200) {
                var result = JSON.parse(xhr1.responseText);
                var table = 'table_id13';
                updateTable(result, table);
            }
        };
        xhr1.send();
    }



    function rewriteTable21() {
    var xhr1 = new XMLHttpRequest();
    xhr1.open('GET', 'up_textarea/up_textarea21.php', true);
    xhr1.onreadystatechange = function() {
        if (xhr1.readyState === 4 && xhr1.status === 200) {
            var result = JSON.parse(xhr1.responseText);
            var table = 'table_id21';
            updateTable(result, table);
        }
    };
    xhr1.send();
    }

    function rewriteTable22() {
        var xhr1 = new XMLHttpRequest();
        xhr1.open('GET', 'up_textarea/up_textarea22.php', true);
        xhr1.onreadystatechange = function() {
            if (xhr1.readyState === 4 && xhr1.status === 200) {
                var result = JSON.parse(xhr1.responseText);
                var table = 'table_id22';
                updateTable(result, table);
            }
        };
        xhr1.send();
        }

    function rewriteTable23() {
        var xhr1 = new XMLHttpRequest();
        xhr1.open('GET', 'up_textarea/up_textarea23.php', true);
        xhr1.onreadystatechange = function() {
            if (xhr1.readyState === 4 && xhr1.status === 200) {
                var result = JSON.parse(xhr1.responseText);
                var table = 'table_id23';
                updateTable(result, table);
            }
        };
        xhr1.send();
    }

    function rewriteTable31() {
    var xhr1 = new XMLHttpRequest();
    xhr1.open('GET', 'up_textarea/up_textarea31.php', true);
    xhr1.onreadystatechange = function() {
        if (xhr1.readyState === 4 && xhr1.status === 200) {
            var result = JSON.parse(xhr1.responseText);
            var table = 'table_id31';
            updateTable(result, table);
        }
    };
    xhr1.send();
    }

    function rewriteTable32() {
        var xhr1 = new XMLHttpRequest();
        xhr1.open('GET', 'up_textarea/up_textarea32.php', true);
        xhr1.onreadystatechange = function() {
            if (xhr1.readyState === 4 && xhr1.status === 200) {
                var result = JSON.parse(xhr1.responseText);
                var table = 'table_id32';
                updateTable(result, table);
            }
        };
        xhr1.send();
        }

    function rewriteTable33() {
        var xhr1 = new XMLHttpRequest();
        xhr1.open('GET', 'up_textarea/up_textarea33.php', true);
        xhr1.onreadystatechange = function() {
            if (xhr1.readyState === 4 && xhr1.status === 200) {
                var result = JSON.parse(xhr1.responseText);
                var table = 'table_id33';
                updateTable(result, table);
            }
        };
        xhr1.send();
    }



    function updateTable(data, table) {
    var newContent = "";
    newContent += "<tr>";
    newContent += "<th></th>";
    newContent += "<th>Вопрос1</th>";
    newContent += "<th>Вопрос2</th>";
    newContent += "<th>Вопрос3</th>";
    newContent += "</tr>";
    newContent += "<tr>";
    newContent += "<td>Баллов:</td>";
    newContent += "<td>" + data[0][1] + "</td>";
    newContent += "<td>" + data[0][2] + "</td>";
    newContent += "<td>" + data[0][4] + "</td>";
    newContent += "</tr>";
    document.getElementById(table).innerHTML = newContent;
    }
    </script>
</body>
</html>