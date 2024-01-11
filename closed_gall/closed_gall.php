<!DOCTYPE html>
<html>
<head>
<title>Галерея</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/closed_gall/closed_gall.css" rel="stylesheet" />
</head>
<body>

<div id="main_text">
  <h2>Подсказки по жестам</h2>
  <p>При нажатии на изображение оно увеличится:</p>
</div>

<div class="row">
  <div class="column">
    <img src="./images/frequently_sign4.png" alt="базовые жесты" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="./images/frequently_sign2.png" alt="базовые жесты" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="./images/frequently_sign3.png" alt="базовые жесты" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="./images/alphabet.png" alt="алфавит" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="./images/frequently_sign.png" alt="базовые жесты" style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">Х</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<button id="bars" class="btn" onclick="togglePopup()"></button>
        <div id="bars_panel" >
              <button id="cross" onclick="togglePopup()"></button>
              
              <button id="tariff_bars" class="btn" onclick="window.location.href = '/../tariff.php'">Тарифы</button>

              <button id="singup_bars" class="btn" onclick="window.location.href = '/../singup.php'">Записаться</button>

              <button id="comment_bars" class="btn" onclick="window.location.href = '/../comment/comment.php'">Отзывы</button>

              <button id="qa_bars" class="btn" onclick="window.location.href = '/../QA.php'">Вопросы</button>

              <button id="home_page_bars" class="btn" onclick="window.location.href = '/../home_page.php'">Главная</button>
            </div>
          </div>

<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}

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



