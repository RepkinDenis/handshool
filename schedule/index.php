<?php

global $connect;
$connect = mysqli_connect('localhost', 'root', '', 'singup');

if(!$connect){
    die('Error connect to database!');
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Расписание</title>
</head>
<body>
  <header class="cd-main-header text-center flex flex-column flex-center">

    <h1 class="text-xl">Расписание</h1>
  </header>
  <!-- <button class="btn" style="position: absolute; top: 1%; left: 2%;" onclick="window.location.href = '../admin/admin.php'">Назад</button> -->
  <?php
    if (isset($_GET['id'])){
      $user_id=$_GET['id'];
    }else{
      $user_id=1;
    }
  ?>
  <form action="/../admin/vendor/update_table.php?id=<?=$user_id ?>" method="post" id="up" style="position: relative;top: 40px;margin-left: 3%;">
            <button role="button" id="update" class="btn">Назад</button>
  </form>

  <div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule">
    <div class="cd-schedule__timeline">
      <ul>
        <li><span>09:00</span></li>
        <li><span>09:30</span></li>
        <li><span>10:00</span></li>
        <li><span>10:30</span></li>
        <li><span>11:00</span></li>
        <li><span>11:30</span></li>
        <li><span>12:00</span></li>
        <li><span>12:30</span></li>
        <li><span>13:00</span></li>
        <li><span>13:30</span></li>
        <li><span>14:00</span></li>
        <li><span>14:30</span></li>
        <li><span>15:00</span></li>
        <li><span>15:30</span></li>
        <li><span>16:00</span></li>
        <li><span>16:30</span></li>
        <li><span>17:00</span></li>
        <li><span>17:30</span></li>
        <li><span>18:00</span></li>
      </ul>
    </div> <!-- .cd-schedule__timeline -->
  
    <?php
      $teacher1 = mysqli_query($connect, "SELECT COUNT(*) FROM `Schedule` WHERE teacher = 'Учитель1'");
      $teacher2 = mysqli_query($connect, "SELECT COUNT(*) FROM `Schedule` WHERE teacher = 'Учитель2'");
      $row1 = mysqli_fetch_array($teacher1);
      $count1 = $row1[0];
      $row2 = mysqli_fetch_array($teacher2);
      $count2 = $row2[0];
      $max_count=5;
      
    ?>
    <div class="cd-schedule__events">
      <ul>
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Понедельник <button class="show" id="showFormButton1">+</button></span></div>
          <ul id="scheduleList">
            <?php
              $users = mysqli_query($connect, "SELECT * FROM `Schedule`");
              $users = mysqli_fetch_all($users);
              foreach ($users as $user){
                  if($user[6]=='monday'){
                  ?>
                  <li class="cd-schedule__event">
                  <form id="Form_delete1" action="actions/delete.php?id=<?=$user_id ?>" method="post">
                    <input type="hidden" name="id" value=<?=$user[0] ?>>
                    <button class="delete" type="submit" style="float:right; position:absolute; top:10%; right:5%;"><span class="icon"></span></button>
                  </form>
                    <a data-start=<?=$user[1] ?> data-end=<?=$user[2] ?>  data-event="event-1" href="#0"> <!--data-event="event-1"-цвет ячейки!-->
                      <em class="cd-schedule__name"><?=$user[3] ?></em>
                      <h6 style="color: white;"><?=$user[5] ?></h6>
                      <?php 
                        if($user[4]=='Учитель1'){
                      ?>
                          <?php 
                          if($count1<$max_count){
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(38, 212, 92)"><?=$count1?>/<?=$max_count?></span></h5>
                          <?php 
                          }else{
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(212, 61, 38)"><?=$count1?>/<?=$max_count?></span></h5>
                        <?php 
                          }
                        ?>
                      <?php 
                        }else if($user[4]=='Учитель2'){
                      ?>
                          <?php 
                          if($count2<$max_count){
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(38, 212, 92)"><?=$count2?>/<?=$max_count?></span></h5>
                          <?php 
                          }else{
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(212, 61, 38)"><?=$count2?>/<?=$max_count?></span></h5>
                        <?php 
                          }
                        ?>
                      <?php 
                        }
                      ?>
                    </a>
                  </li>
                  <?php
                  }
              }
          ?>
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Вторник <button class="show" id="showFormButton2">+</button></span></span></div>
          <ul id="scheduleList">
            <?php
              $users = mysqli_query($connect, "SELECT * FROM `Schedule`");
              $users = mysqli_fetch_all($users);
              foreach ($users as $user){
                  if($user[6]=='tuesday'){
                  ?>
                  <li class="cd-schedule__event">
                    <form id="Form_delete2" action="actions/delete.php?id=<?=$user_id ?>" method="post">
                      <input type="hidden" name="id" value=<?=$user[0] ?>>
                      <button class="delete" type="submit" style="float:right; position:absolute; top:10%; right:5%;"><span class="icon"></span></button>
                    </form>
                    <a data-start=<?=$user[1] ?> data-end=<?=$user[2] ?> data-event="event-1" href="#0"> <!--data-event="event-1"-цвет ячейки!-->
                      <em class="cd-schedule__name"><?=$user[3] ?></em>
                      <h6 style="color: white;"><?=$user[5] ?></h6>
                      <?php 
                        if($user[4]=='Учитель1'){
                      ?>
                          <?php 
                          if($count1<$max_count){
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(38, 212, 92)"><?=$count1?>/<?=$max_count?></span></h5>
                          <?php 
                          }else{
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(212, 61, 38)"><?=$count1?>/<?=$max_count?></span></h5>
                        <?php 
                          }
                        ?>
                      <?php 
                        }else if($user[4]=='Учитель2'){
                      ?>
                          <?php 
                          if($count2<$max_count){
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(38, 212, 92)"><?=$count2?>/<?=$max_count?></span></h5>
                          <?php 
                          }else{
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(212, 61, 38)"><?=$count2?>/<?=$max_count?></span></h5>
                        <?php 
                          }
                        ?>
                      <?php 
                        }
                      ?>
                    </a>
                  </li>
                  <?php
                  }
              }
          ?>
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Среда <button class="show" id="showFormButton3">+</button></span></div>
          <ul id="scheduleList">
            <?php
              $users = mysqli_query($connect, "SELECT * FROM `Schedule`");
              $users = mysqli_fetch_all($users);
              foreach ($users as $user){
                  if($user[6]=='wednesday'){
                  ?>
                  <li class="cd-schedule__event">
                    <form id="Form_delete3" action="actions/delete.php?id=<?=$user_id ?>" method="post">
                      <input type="hidden" name="id" value=<?=$user[0] ?>>
                      <button class="delete" type="submit" style="float:right; position:absolute; top:10%; right:5%;"><span class="icon"></span></button>
                    </form>
                    <a data-start=<?=$user[1] ?> data-end=<?=$user[2] ?>  data-event="event-1" href="#0">
                      <em class="cd-schedule__name"><?=$user[3] ?></em>
                      <h6 style="color: white;"><?=$user[5] ?></h6>
                      <?php 
                        if($user[4]=='Учитель1'){
                      ?>
                          <?php 
                          if($count1<$max_count){
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(38, 212, 92)"><?=$count1?>/<?=$max_count?></span></h5>
                          <?php 
                          }else{
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(212, 61, 38)"><?=$count1?>/<?=$max_count?></span></h5>
                        <?php 
                          }
                        ?>
                      <?php 
                        }else if($user[4]=='Учитель2'){
                      ?>
                          <?php 
                          if($count2<$max_count){
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(38, 212, 92)"><?=$count2?>/<?=$max_count?></span></h5>
                          <?php 
                          }else{
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(212, 61, 38)"><?=$count2?>/<?=$max_count?></span></h5>
                        <?php 
                          }
                        ?>
                      <?php 
                        }
                      ?>
                    </a>
                  </li>
                  <?php
                  }
              }
          ?>
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Четверг<button class="show" id="showFormButton4">+</button></span></div>
          <ul id="scheduleList">
            <?php
              $users = mysqli_query($connect, "SELECT * FROM `Schedule`");
              $users = mysqli_fetch_all($users);
              foreach ($users as $user){
                  if($user[6]=='thursday'){
                  ?>
                  <li class="cd-schedule__event">
                    <form id="Form_delete4" action="actions/delete.php?id=<?=$user_id ?>" method="post">
                      <input type="hidden" name="id" value=<?=$user[0] ?>>
                      <button class="delete" type="submit" style="float:right; position:absolute; top:10%; right:5%;"><span class="icon"></span></button>
                    </form>
                    <a data-start=<?=$user[1] ?> data-end=<?=$user[2] ?>  data-event="event-1" href="#0">
                      <em class="cd-schedule__name"><?=$user[3] ?></em>
                      <h6 style="color: white;"><?=$user[5] ?></h6>
                      <?php 
                        if($user[4]=='Учитель1'){
                      ?>
                          <?php 
                          if($count1<$max_count){
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(38, 212, 92)"><?=$count1?>/<?=$max_count?></span></h5>
                          <?php 
                          }else{
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(212, 61, 38)"><?=$count1?>/<?=$max_count?></span></h5>
                        <?php 
                          }
                        ?>
                      <?php 
                        }else if($user[4]=='Учитель2'){
                      ?>
                          <?php 
                          if($count2<$max_count){
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(38, 212, 92)"><?=$count2?>/<?=$max_count?></span></h5>
                          <?php 
                          }else{
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(212, 61, 38)"><?=$count2?>/<?=$max_count?></span></h5>
                        <?php 
                          }
                        ?>
                      <?php 
                        }
                      ?>
                    </a>
                  </li>
                  <?php
                  }
              }
          ?>
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Пятница <button class="show" id="showFormButton5">+</button></span></div>
          <ul id="scheduleList">
          <?php
            $users = mysqli_query($connect, "SELECT * FROM `Schedule`");
            $users = mysqli_fetch_all($users);
            foreach ($users as $user){
                if($user[6]=='friday'){
                ?>
                <li class="cd-schedule__event">
                  <form id="Form_delete5" action="actions/delete.php?id=<?=$user_id ?>" method="post">
                      <input type="hidden" name="id" value=<?=$user[0] ?>>
                      <button class="delete" type="submit" style="float:right; position:absolute; top:10%; right:5%;"><span class="icon"></span></button>
                    </form>
                  <a data-start=<?=$user[1] ?> data-end=<?=$user[2] ?> data-event="event-1" href="#0">
                    <em class="cd-schedule__name"><?=$user[3] ?></em>
                    <h6 style="color: white;"><?=$user[5] ?></h6>
                    <?php 
                        if($user[4]=='Учитель1'){
                      ?>
                          <?php 
                          if($count1<$max_count){
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(38, 212, 92)"><?=$count1?>/<?=$max_count?></span></h5>
                          <?php 
                          }else{
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(212, 61, 38)"><?=$count1?>/<?=$max_count?></span></h5>
                        <?php 
                          }
                        ?>
                      <?php 
                        }else if($user[4]=='Учитель2'){
                      ?>
                          <?php 
                          if($count2<$max_count){
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(38, 212, 92)"><?=$count2?>/<?=$max_count?></span></h5>
                          <?php 
                          }else{
                        ?>
                            <h5 style="color: white;"><?=$user[4] ?> <span class="count" style="float: right; color: rgb(212, 61, 38)"><?=$count2?>/<?=$max_count?></span></h5>
                        <?php 
                          }
                        ?>
                      <?php 
                        }
                      ?>
                  </a>
                </li>
                <?php
                }
            }
        ?>
        </ul>
        </li>
      </ul>
    </div>
  
    <div class="cd-schedule-modal">
      <header class="cd-schedule-modal__header">
        <div class="cd-schedule-modal__content">
          <span class="cd-schedule-modal__date"></span>
          <h3 class="cd-schedule-modal__name"></h3>
        </div>
  
        <div class="cd-schedule-modal__header-bg"></div>
      </header>
  
      <div class="cd-schedule-modal__body">
        <div class="cd-schedule-modal__event-info"></div>
        <div class="cd-schedule-modal__body-bg"></div>
      </div>
  
      <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
    </div>
  
    <div class="cd-schedule__cover-layer"></div>
  </div> <!-- .cd-schedule -->



    <form class="card" id="myForm1" action="actions/monday.php?id=<?=$user_id ?>" method="post">
      <h2>Понедельник</h2>
      <button onclick="hideElement1()" style="position: absolute; left: 80%; top: 10%; background-color: transparent;border: none;"><h3>X</h3></button>
      <label for="start">Начало:</label>
      <input type="text" id="start" name="start" required>
      <br>
      <label for="end">Конец:</label>
      <input type="text" id="end" name="end" required>
      <br>
      <label for="teacher">Учитель:</label>
      <input type="text" id="teacher" name="teacher" required>
      <br>
      <button class="btn" type="submit" style="margin: 0 auto; margin-top: 10px;"> Добавить</button>
    </form>

    <form class="card" id="myForm2" action="actions/tuesday.php?id=<?=$user_id ?>" method="post">
      <h2>Вторник</h2>
      <button onclick="hideElement2()" style="position: absolute; left: 80%; top: 10%; background-color: transparent;border: none;"><h3>X</h3></button>
      <label for="start">Начало:</label>
      <input type="text" id="start" name="start" required>
      <br>
      <label for="end">Конец:</label>
      <input type="text" id="end" name="end" required>
      <br>
      <label for="teacher">Учитель:</label>
      <input type="text" id="teacher" name="teacher" required>
      <br>
      <button class="btn" type="submit" style="margin: 0 auto; margin-top: 10px;"> Добавить</button>
    </form>

    <form class="card" id="myForm3" action="actions/wednesday.php?id=<?=$user_id ?>" method="post">
      <h2>Среда</h2>
      <button onclick="hideElement3()" style="position: absolute; left: 80%; top: 10%; background-color: transparent;border: none;"><h3>X</h3></button>
      <label for="start">Начало:</label>
      <input type="text" id="start" name="start" required>
      <br>
      <label for="end">Конец:</label>
      <input type="text" id="end" name="end" required>
      <br>
      <label for="teacher">Учитель:</label>
      <input type="text" id="teacher" name="teacher" required>
      <br>
      <button class="btn" type="submit" style="margin: 0 auto; margin-top: 10px;"> Добавить</button>
    </form>

    <form class="card" id="myForm4" action="actions/thursday.php?id=<?=$user_id?>" method="post">
      <h2>Черверг</h2>
      <button onclick="hideElement4()" style="position: absolute; left: 80%; top: 10%; background-color: transparent;border: none;"><h3>X</h3></button>
      <label for="start">Начало:</label>
      <input type="text" id="start" name="start" required>
      <br>
      <label for="end">Конец:</label>
      <input type="text" id="end" name="end" required>
      <br>
      <label for="teacher">Учитель:</label>
      <input type="text" id="teacher" name="teacher" required>
      <br>
      <button class="btn" type="submit" style="margin: 0 auto; margin-top: 10px;"> Добавить</button>
    </form>

    <form class="card" id="myForm5" action="actions/friday.php?id=<?=$user_id ?>" method="post">
      <h2>Пятница</h2>
      <button onclick="hideElement5()" style="position: absolute; left: 80%; top: 10%; background-color: transparent;border: none;"><h3>X</h3></button>
      <label for="start">Начало:</label>
      <input type="text" id="start" name="start" required>
      <br>
      <label for="end">Конец:</label>
      <input type="text" id="end" name="end" required>
      <br>
      <label for="teacher">Учитель:</label>
      <input type="text" id="teacher" name="teacher" required>
      <br>
      <button class="btn" type="submit" style="margin: 0 auto; margin-top: 10px;"> Добавить</button>
    </form>
    
  <script>
  function hideElement1() {
    document.getElementById('myForm1').style.display = 'none';
  }
  function hideElement2() {
    document.getElementById('myForm2').style.display = 'none';
  }
  function hideElement3() {
    document.getElementById('myForm3').style.display = 'none';
  }
  function hideElement4() {
    document.getElementById('myForm4').style.display = 'none';
  }
  function hideElement5() {
    document.getElementById('myForm5').style.display = 'none';
  }
  </script>
  <script src="assets/js/util.js"></script> 
  <script src="assets/js/main.js"></script>
</body>
</html>