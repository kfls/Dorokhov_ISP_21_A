<?php
session_start(); 

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "quiz_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

if (!isset($_SESSION['currentQuestionId']) || $_SESSION['currentQuestionId'] == 0) {
    $_SESSION['currentQuestionId'] = 1;
    $_SESSION['correctAnswers'] = 0; 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedAnswer = $_POST['answer'];
    $queryCorrect = "SELECT correct_answer FROM questions WHERE id = " . $_SESSION['currentQuestionId'];
    $correctResult = $conn->query($queryCorrect);
    $correctAnswer = $correctResult->fetch_assoc()['correct_answer'];

    if ($selectedAnswer === $correctAnswer) {
        $_SESSION['correctAnswers'] += 1; 
    }

    $_SESSION['currentQuestionId'] += 1;

    header("Location: index.php");
    exit();
}

$currentQuestionId = $_SESSION['currentQuestionId'];
$query = "SELECT * FROM questions WHERE id = $currentQuestionId";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $question = $result->fetch_assoc();
    $questionText = $question['question_text'];
    $cityImage = $question['city_image'];
    $correctAnswer = $question['correct_answer'];

    $answers = array();
    
    $answers[] = $correctAnswer;
    
    $correctAnswerWords = explode(" ", $correctAnswer);
    $lastWord = end($correctAnswerWords);
    
    if (strpos($questionText, 'животные') !== false || strpos($questionText, 'гиены') !== false) {
        $wrongAnswers = array(
            "Африканский слон", "Карликовая белозубка", "Анаконда", "Сокол-сапсан", "Кальмар гигантский", "Кролик",
            "Нарвал", "Жираф", "Сеул", "Обезьяна-тамарин", "Ворон", "Кашалот"
        );
    } else {
        $wrongAnswers = array(
            "Водомерка", "Кашалот", "Верблюд", "Нарвал",
            "Гепард", "Хамелеон", "Африканский слон",
            "Нет правильного ответа", "Иное", "Ворон", "Кашалот", "Обезьяна-тамарин"
        );
    }
    
    $wrongAnswers = array_diff($wrongAnswers, array($correctAnswer));
    
    $randomWrongAnswers = array_rand(array_flip($wrongAnswers), 2);
    
    $answers = array_merge($answers, $randomWrongAnswers);
    
    shuffle($answers);

} else {
    echo "<body style='background: linear-gradient(180deg, #3290F2 0%, #5374ED 100%);'>";
    echo "<div class='good_res'>Завершено!</div>"; 
    echo "<div class='res_count'>Вы ответили правильно на " . $_SESSION['correctAnswers'] . " вопросов из " . ($_SESSION['currentQuestionId'] - 1) . ".</div>";
    session_unset();
    session_destroy();
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Welcome!</title>
    <link rel="stylesheet" href="styles/common.css">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="header_section">
            <a href="/pages/labs.php">
                <div class="header_close_img"></div>
            </a>
                <div class="counter-circle">
                    <span><?php echo str_pad($_SESSION['currentQuestionId'], 2, '0', STR_PAD_LEFT); ?></span>
                </div>
                <div class="header_like_section">
                    <div class="like_img"></div>
                    <div class="like_number"><?php echo $_SESSION['correctAnswers']; ?></div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="main_section">
                <div class="main_img" style="background-image: url('<?php echo htmlspecialchars($cityImage); ?>');"></div>
            </div>
            <div class="main_texts">
                <div class="main_title">Вопрос <?php echo $_SESSION['currentQuestionId'] . ' из 20'; ?></div>
                <div class="main_desc"><?php echo htmlspecialchars($questionText); ?></div>
            </div>

            <form method="POST" class="main_choice_all">
                <?php foreach ($answers as $answer): ?>
                    <div class="main_choice_button">
                        <button type="submit" name="answer" value="<?php echo htmlspecialchars($answer); ?>"><?php echo htmlspecialchars($answer); ?></button>
                    </div>
                <?php endforeach; ?>
            </form>
        </div>
    </section>
</body>
</html>