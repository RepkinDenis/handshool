function checkAnswer1() {
    var selectedAnswer = document.querySelector('input[name="answer"]:checked');
    var q1=0;

    if (!selectedAnswer) {
        alert("Выберите вариант ответа!");
        return;
    }

    var result1 = document.getElementById('result1');

    if (selectedAnswer.value === '3') {
        result1.textContent = "Правильный ответ!";
        result1.classList.remove('incorrect');
        result1.classList.add('correct');
        q1=1;
    } else {
        result1.textContent = "Неправильный ответ!";
        result1.classList.remove('correct');
        result1.classList.add('incorrect');
    }
    document.getElementById('res1').value = q1;
}

function checkAnswers1() {
    var correctAnswers = ["2","3"];
    var userAnswers = [];
    var inputs = document.getElementsByName("options");
    var q2=0;
  
    for (var i = 0; i < inputs.length; i++) {
      if (inputs[i].checked) {
        userAnswers.push(inputs[i].value);
      }
    }
  
    var result2 = document.getElementById("result2");
    if (userAnswers.length === correctAnswers.length &&
        userAnswers.every(answer => correctAnswers.includes(answer))) {
        result2.textContent = "Правильный ответ!";
        result2.classList.remove('incorrect');
        result2.classList.add('correct');
        q2=1;
    } else {
      result2.textContent = "Неправильный ответ!";
      result2.classList.remove('correct');
      result2.classList.add('incorrect');
    }
    document.getElementById('res2').value = q2;
  }

  function checkAnswer2() {
    var selectedAnswer = document.querySelector('input[name="answer"]:checked');
    var q1=0;

    if (!selectedAnswer) {
        alert("Выберите вариант ответа!");
        return;
    }

    var result1 = document.getElementById('result12');

    if (selectedAnswer.value === '2') {
        result1.textContent = "Правильный ответ!";
        result1.classList.remove('incorrect');
        result1.classList.add('correct');
        q1=1;
    } else {
        result1.textContent = "Неправильный ответ!";
        result1.classList.remove('correct');
        result1.classList.add('incorrect');
    }
    document.getElementById('res12').value = q1;
}

function checkAnswers2() {
    var correctAnswers = ["1","2"];
    var userAnswers = [];
    var inputs = document.getElementsByName("options");
    var q2=0;
  
    for (var i = 0; i < inputs.length; i++) {
      if (inputs[i].checked) {
        userAnswers.push(inputs[i].value);
      }
    }
  
    var result2 = document.getElementById("result22");
    if (userAnswers.length === correctAnswers.length &&
        userAnswers.every(answer => correctAnswers.includes(answer))) {
        result2.textContent = "Правильный ответ!";
        result2.classList.remove('incorrect');
        result2.classList.add('correct');
        q2=1;
    } else {
      result2.textContent = "Неправильный ответ!";
      result2.classList.remove('correct');
      result2.classList.add('incorrect');
    }
    document.getElementById('res22').value = q2;
  }

  function checkAnswer3() {
    var selectedAnswer = document.querySelector('input[name="answer"]:checked');
    var q1=0;

    if (!selectedAnswer) {
        alert("Выберите вариант ответа!");
        return;
    }

    var result1 = document.getElementById('result13');

    if (selectedAnswer.value === '3') {
        result1.textContent = "Правильный ответ!";
        result1.classList.remove('incorrect');
        result1.classList.add('correct');
        q1=1;
    } else {
        result1.textContent = "Неправильный ответ!";
        result1.classList.remove('correct');
        result1.classList.add('incorrect');
    }
    document.getElementById('res13').value = q1;
}

function checkAnswers3() {
    var correctAnswers = ["1","2","4"];
    var userAnswers = [];
    var inputs = document.getElementsByName("options");
    var q2=0;
  
    for (var i = 0; i < inputs.length; i++) {
      if (inputs[i].checked) {
        userAnswers.push(inputs[i].value);
      }
    }
  
    var result2 = document.getElementById("result23");
    if (userAnswers.length === correctAnswers.length &&
        userAnswers.every(answer => correctAnswers.includes(answer))) {
        result2.textContent = "Правильный ответ!";
        result2.classList.remove('incorrect');
        result2.classList.add('correct');
        q2=1;
    } else {
      result2.textContent = "Неправильный ответ!";
      result2.classList.remove('correct');
      result2.classList.add('incorrect');
    }
    document.getElementById('res23').value = q2;
  }
  