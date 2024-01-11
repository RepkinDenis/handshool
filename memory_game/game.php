<?php
  global $connect;
  $connect = mysqli_connect('localhost', 'root', '', 'profile');

if(!$connect){
    die('Error connect to database!');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Memory Game</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="stats-container">
        <div id="moves-count"></div>
        <div id="time"></div>
      </div>
      <div class="game-container"></div>
      <button id="stop" class="hide">Stop Game</button>
    </div>
    <form action="insert_game.php?id=<?=$_GET['id'] ?>" method="post">
      <div class="controls-container_res">
        <p id="result"></p>
        <input type="hidden" name="user_id" value="<?=$_GET['id'] ?>">
        <input type="hidden" name="moves" value="0">
        <input type="hidden" name="time_win" value="00:00">
        <button id="res">Start Game</button>
      </div>
    </form>

    <div class="controls-container">
        <button id="start">Start Game</button>
        <button id="profile" onclick="window.location.href = '/profile/profile.php?id=<?=$_GET['id'] ?>'">в профиль</button>
      </div>

    <h4 id="table_lable">Ваши результаты</h4>
    <table id="game_table">
      <tr>
          <th>Ходов:</th>
          <th>Время:</th>
      </tr>
      <?php
          $games = mysqli_query($connect, "SELECT * FROM `game` WHERE user_id=5 ORDER BY time_win ASC");//сортировка
          $games = mysqli_fetch_all($games);
          if ($games){
              foreach ($games as $game){
                  ?>
                  <tr>
                      <td><?=$game[1] ?></td>
                      <td><?=$game[2] ?></td>
                  </tr>
                  <?php
              }
            }
      ?>
      </table>
    <!-- Script -->
    <script src="script.js"></script>
    <!-- <script> 
              var movesElement = document.getElementById("moves");
              movesElement.textContent = movesCount;
              document.getElementById("time_win").textContent = minutesPassed+':'+secondsPassed;</script> -->
  </body>
</html>
