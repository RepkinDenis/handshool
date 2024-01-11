const moves = document.getElementById("moves-count");
const timeValue = document.getElementById("time");
const startButton = document.getElementById("start");
const stopButton = document.getElementById("stop");
const profile = document.getElementById("profile");
const gameContainer = document.querySelector(".game-container");
const result = document.getElementById("result");
const controls = document.querySelector(".controls-container");
const controls_res = document.querySelector(".controls-container_res");
const game = document.getElementById("game_table");
const resButton = document.getElementById("res");
const wrapper = document.querySelector(".wrapper");
const table_lable = document.getElementById("table_lable");
let cards;
let interval;
let firstCard = false;
let secondCard = false;
let startTime;
let endTime;

const items = [
  { name: "1", image: "/memory_game/images_game/1.png" },
  { name: "2", image: "/memory_game/images_game/2.png" },
  { name: "3", image: "/memory_game/images_game/3.png" },
  { name: "4", image: "/memory_game/images_game/4.png" },
  { name: "5", image: "/memory_game/images_game/5.png" },
  { name: "6", image: "/memory_game/images_game/6.png" },
  { name: "7", image: "/memory_game/images_game/7.png" },
  { name: "8", image: "/memory_game/images_game/8.png" },
  { name: "9", image: "/memory_game/images_game/9.png" },
  { name: "10", image: "/memory_game/images_game/10.png" },
  { name: "11", image: "/memory_game/images_game/11.png" },
  { name: "12", image: "/memory_game/images_game/12.png" },
  { name: "13", image: "/memory_game/images_game/13.png" },
  { name: "14", image: "/memory_game/images_game/14.png" },
  { name: "14", image: "/memory_game/images_game/15.png" },
  { name: "16", image: "/memory_game/images_game/16.png" },
  { name: "17", image: "/memory_game/images_game/17.png" },
  { name: "18", image: "/memory_game/images_game/18.png" },
  { name: "19", image: "/memory_game/images_game/19.png" },
  { name: "20", image: "/memory_game/images_game/20.png" },
  { name: "21", image: "/memory_game/images_game/21.png" },
  { name: "22", image: "/memory_game/images_game/22.png" },
  { name: "23", image: "/memory_game/images_game/23.png" },
  { name: "24", image: "/memory_game/images_game/24.png" },
  { name: "25", image: "/memory_game/images_game/25.png" },
  { name: "26", image: "/memory_game/images_game/26.png" },
  { name: "27", image: "/memory_game/images_game/27.png" },
  { name: "28", image: "/memory_game/images_game/28.png" },
];
game.classList.add("hide");
wrapper.classList.add("hide");
table_lable.classList.add("hide");

let seconds = 0,
  minutes = 0;

let movesCount = 0,
  winCount = 0;


const timeGenerator = () => {
  seconds += 1;
 
  if (seconds >= 60) {
    minutes += 1;
    seconds = 0;
  }
 
  let secondsValue = seconds < 10 ? `0${seconds}` : seconds;
  let minutesValue = minutes < 10 ? `0${minutes}` : minutes;
  timeValue.innerHTML = `<span>Время:</span>${minutesValue}:${secondsValue}`;
};


const movesCounter = () => {
  movesCount += 1;
  moves.innerHTML = `<span>Ходов:</span>${movesCount}`;
};


const generateRandom = (size = 4) => {
  let tempArray = [...items];
  let cardValues = [];
  size = (size * size) / 2;
  for (let i = 0; i < size; i++) {
    const randomIndex = Math.floor(Math.random() * tempArray.length);
    cardValues.push(tempArray[randomIndex]);
    tempArray.splice(randomIndex, 1);
  }
  return cardValues;
};

const matrixGenerator = (cardValues, size = 4) => {
  gameContainer.innerHTML = "";
  cardValues = [...cardValues, ...cardValues];
  cardValues.sort(() => Math.random() - 0.5);
  for (let i = 0; i < size * size; i++) {
    gameContainer.innerHTML += `
     <div class="card-container" data-card-value="${cardValues[i].name}">
        <div class="card-before">?</div>
        <div class="card-after">
        <img src="${cardValues[i].image}" class="image"/></div>
     </div>
     `;
  }
  
  gameContainer.style.gridTemplateColumns = `repeat(${size},auto)`;


  cards = document.querySelectorAll(".card-container");
  cards.forEach((card) => {
    card.addEventListener("click", () => {
      if (!card.classList.contains("matched")) {
        card.classList.add("flipped");
        if (!firstCard) {
          firstCard = card;
          firstCardValue = card.getAttribute("data-card-value");
        } else {
          movesCounter();
          secondCard = card;
          let secondCardValue = card.getAttribute("data-card-value");
          if (firstCardValue == secondCardValue) {
            firstCard.classList.add("matched");
            secondCard.classList.add("matched");
            firstCard = false;
            winCount += 1;
            if (winCount == Math.floor(cardValues.length / 2)) {
              result.innerHTML = `<h2>Победа!</h2>
            <h4>Ходов: ${movesCount}</h4>`;
            endTime = new Date();
              let timeDiff = endTime - startTime; // разница в миллисекундах
              let secondsPassed = Math.floor(timeDiff / 1000); // преобразование в секунды
              let minutesPassed = Math.floor(secondsPassed / 60); // преобразование в минуты
              secondsPassed = secondsPassed % 60; // оставшиеся секунды
          
              // вывод времени на экран
              result.innerHTML += `<h4>Время: ${minutesPassed} минут ${secondsPassed} секунд</h4>`;

              var movesElement = document.querySelector('input[name="moves"]');
              movesElement.value = movesCount;
              var timeElement = document.querySelector('input[name="time_win"]');
              if(minutesPassed < 10 && secondsPassed < 10){
                timeElement.value ='0'+ minutesPassed + ':' + '0' +secondsPassed;
              }else if(minutesPassed < 10){
                timeElement.value ='0'+ minutesPassed + ':' +secondsPassed;
              }
              stopGames();
            }
          } else {
            let [tempFirst, tempSecond] = [firstCard, secondCard];
            firstCard = false;
            secondCard = false;
            let delay = setTimeout(() => {
              tempFirst.classList.remove("flipped");
              tempSecond.classList.remove("flipped");
            }, 900);
          }
        }
      }
    });
  });
};

//Start game
startButton.addEventListener("click", () => {
  startTime = new Date();
  movesCount = 0;
  seconds = 0;
  minutes = 0;
  wrapper.classList.remove("hide");
  controls_res.classList.add("hide");
  controls.classList.add("hide");
  stopButton.classList.add("hide");
  profile.classList.remove("hide");
  startButton.classList.add("hide");
  game.classList.remove("hide");
  resButton.classList.add("hide");
  table_lable.classList.remove("hide");
  interval = setInterval(timeGenerator, 1000);
  moves.innerHTML = `<span>Ходов:</span> ${movesCount}`;
  initializer();
});

//Stop game
stopButton.addEventListener(
  "click",
  (stopGame = () => {
    // controls_res.classList.remove("hide");
    controls.classList.remove("hide");
    stopButton.classList.add("hide");
    // resButton.classList.remove("hide");
    startButton.classList.remove("hide");
    profile.classList.remove("hide");
    game.classList.add("hide");
    wrapper.classList.add("hide");
    table_lable.classList.add("hide");
    clearInterval(interval);
  })
);

function stopGames(){
  controls_res.classList.remove("hide");
  //controls.classList.remove("hide");
  stopButton.classList.add("hide");
  resButton.classList.remove("hide");
  profile.classList.remove("hide");
  game.classList.add("hide");
  wrapper.classList.add("hide");
  table_lable.classList.add("hide");
  clearInterval(interval);
};

const initializer = () => {
  result.innerText = "";
  winCount = 0;
  let cardValues = generateRandom();
  console.log(cardValues);
  matrixGenerator(cardValues);
};

// function updateDatabase(button) {
//   var xhr = new XMLHttpRequest();
//   xhr.open('POST', 'insert_game.php', true);
//   xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
//   xhr.onreadystatechange = function() {
//       if (xhr.readyState === 4 && xhr.status === 200) {
//       }
//   };
//   var params = "button" + button + "_click=1"; 
//   xhr.send(params);
// }
