<?php
session_start();

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
} else {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>MCQ Test</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .question {
      display: none;
    }
    .question-container {
      margin-top: 12px;
      display: none;
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 15px;
    }

    .question-container.active {
      display: block;
    }
    .option-label {
      display: block;
      margin-bottom: 10px;
    }
    .timer-container {
      position: absolute;
      top: 55px;
      right: 20px;
      font-size: 20px;
      font-weight: bolder;
    }
    /* #q{
      display: flex;
      align-items: center;
      justify-content: center;
    } */
    .navbar-text{
      font-weight: bolder;
      color: greenyellow;
    }
    h4{
      font-weight: bolder;
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="font-weight: bolder;">MCQ Test</a>
    <a class="navbar-brand" href="index.php">Home</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <span class="navbar-text">
            Welcome, <?php echo $username; ?>
          </span>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container question-container active mt-4" id="q">
  <div class="container mt-6">
    <div class="question" id="question1">
      <h4>Q1. PHP stands for -</h4>
      <label class="radio-inline option-label">
        <input type="radio" name="answer1" value="1"> Hypertext Preprocessor
      </label>
      <label class="radio-inline option-label">
        <input type="radio" name="answer1" value="2"> Pretext Hypertext Preprocessor
      </label>
      <label class="radio-inline option-label">
        <input type="radio" name="answer1" value="3"> Personal Home Processor
      </label>
    </div>

    <div class="question" id="question2">
      <h4>Q2.Variable name in PHP starts with -</h4>
      <label class="radio-inline option-label">
        <input type="radio" name="answer2" value="1"> ! (Exclamation)
      </label>
      <label class="radio-inline option-label">
        <input type="radio" name="answer2" value="2">& (Ampersand)
      </label>
      <label class="radio-inline option-label">
        <input type="radio" name="answer2" value="3"> $ (Dollar)
      </label>
    </div>

    <div class="question" id="question3">
      <h4>Q3. Which of the following is used to display the output in PHP?</h4>
      <label class="radio-inline option-label">
        <input type="radio" name="answer3" value="1"> write
      </label>
      <label class="radio-inline option-label">
        <input type="radio" name="answer3" value="2"> echo
      </label>
      <label class="radio-inline option-label">
        <input type="radio" name="answer3" value="3"> cout
      </label>
    </div>

    <div class="question" id="question4">
      <h4>Q4.Which of the following is used for concatenation in PHP?</h4>
      <label class="radio-inline option-label">
        <input type="radio" name="answer4" value="1"> + (plus)
      </label>
      <label class="radio-inline option-label">
        <input type="radio" name="answer4" value="2"> * (Asterisk)
      </label>
      <label class="radio-inline option-label">
        <input type="radio" name="answer4" value="3"> . (dot)
      </label>
    </div>

    <div class="question" id="question5">
      <h4>Q5.Which of the following is the correct way of defining a variable in PHP?</h4>
      <label class="radio-inline option-label">
        <input type="radio" name="answer5" value="1"> $variable name = value;
      </label>
      <label class="radio-inline option-label">
        <input type="radio" name="answer5" value="2"> $variable_name = value;
      </label>
      <label class="radio-inline option-label">
        <input type="radio" name="answer5" value="3"> $variable name as value;
      </label>
    </div>

    </div>
    <div id="result" style="display: none;">
      <h4>Test Result</h4>
      <p id="score"></p>
      <p id="resultPercentage"></p>
    </div>
  </div>

  <div class="container mt-4">
    <div id="timer" class="timer-container">Time Left: 1m 0s</div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    var currentQuestion = 1;
    var totalQuestions = 5;
    var timerDuration = 60;
    var timerInterval;
    var correctAnswers = {
      1: '1',
      2: '3',
      3: '2',
      4: '3',
      5: '2'
    };
    var userResponses = {};

    function calculateScore() {
      var score = 0;
      for (var i = 1; i <= totalQuestions; i++) {
        var selectedAnswer = userResponses['answer' + i];
        if (selectedAnswer && selectedAnswer === correctAnswers[i]) {
          score++;
        }
      }
      return score;
    }

    function showNextQuestion() {
      var currentQuestionElem = document.getElementById('question' + currentQuestion);
      var nextQuestionElem = document.getElementById('question' + (currentQuestion + 1));
      var resultElem = document.getElementById('result');
      var scoreElem = document.getElementById('score');
      var resultPercentageElem = document.getElementById('resultPercentage');

      var score = calculateScore();
      var percentage = (score / totalQuestions) * 100;

      // if(calculateScore>50){
      //   alert("You Have Cleared The Test")
      // }
      // else{
      //   alert("Yor are failes!");
      // }

      if (scoreElem) {
        scoreElem.textContent = 'Your Score: ' + score + ' out of ' + totalQuestions;
        // if(score>=3){
// alert("Success!");
//         }
//         else{
//           alert("Error!");
//         }
      }
      if (resultPercentageElem) {
        resultPercentageElem.textContent = 'Percentage: ' + percentage.toFixed(2) + '%';
//         if(score>=3){
// alert("Success!");
//         }
//         else{
//           alert("Error!");
//         }
      }
//       if(score>=3){
// alert("Success!");
//         }
//         else{
//           alert("Error!");
//         }
     

      if (currentQuestionElem) {
        currentQuestionElem.style.display = 'none';
      }

      if (nextQuestionElem) {
        nextQuestionElem.style.display = 'block';
        currentQuestion++;
      } else if (resultElem) {
        resultElem.style.display = 'block';
        clearInterval(timerInterval);
        
      }
    }

    function startTimer() {
      var timerDisplay = document.getElementById('timer');
      var timeLeft = timerDuration;
      timerDisplay.textContent = 'Time Left: ' + timeLeft + 's';
      timerInterval = setInterval(function () {
        timeLeft--;
        if (timeLeft >= 0) {
          var minutes = Math.floor(timeLeft / 60);
          var seconds = timeLeft % 60;
          timerDisplay.textContent = 'Time Left: ' + minutes + 'm ' + seconds + 's';
        } else {
          clearInterval(timerInterval);
          timerDisplay.textContent = 'Time Up!';
          showNextQuestion();
        }
      }, 1000);
    }

    document.addEventListener('DOMContentLoaded', function () {
      startTimer();

      document.getElementById('question1').style.display = 'block';

      var questions = document.querySelectorAll('.question');
      questions.forEach(function (questionElem) {
        questionElem.addEventListener('change', function () {
          var selectedAnswer = this.querySelector('input[type="radio"]:checked');
          if (selectedAnswer) {
            userResponses[selectedAnswer.name] = selectedAnswer.value;
            setTimeout(showNextQuestion, 500); // Delay to show the next question
          }
        });
      });
    });
  </script>
</body>
</html>
