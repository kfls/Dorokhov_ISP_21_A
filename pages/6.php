<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 Лабораторная</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/common.css">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="header__contents">
                <div class="logo">DME</div>
                    <ul class="nav__menu">
                        <li><a href="/" class="nav_button">Главная</a></li>
                        <li><a href="/pages/labs.php" class="nav_button">Библиотека</a></li>
                        <li><a href="#service" class="nav_button">Цель сайта</a></li>
                    </ul>
                    <ul class="nav__about">
                        <li><a href="https://github.com/kfls/Dorokhov_ISP_21_A" class="nav_auth">Репозиторий</a></li>
                    </ul>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="main__labs">
                <div class="labs">
                    <div class="labs__title">Список Лабораторных</div>
                    <div class="labs__numbers">
                        <a href="/pages/3.php" class="labs__cont">Лабораторная работа 3</a>
                        <a href="/pages/4.php" class="labs__cont">Лабораторная работа 4</a>
                        <a href="/pages/5.php" class="labs__cont">Лабораторная работа 5</a>
                        <a href="/pages/6.php" class="labs__cont">Лабораторная работа 6</a>
                        <a href="/pages/7.php" class="labs__cont">Лабораторная работа 7</a>
                        <a href="/pages/9/index.php" class="labs__cont">Лабораторная работа 8</a>
                    </div>
                </div>
                <div class="labs_contents">
                    <div class="labs__target">Задача:</div>
                    <div class="lab__target__desc">
                        <br>1. Дано целое число N (> 1), а также первый член A и знаменатель D геометрической  прогрессии.  <br>Сформировать  и  вывести  массив  размера  N, содержащий N первых
                    </div>
                    <div class="prew_code_one">
                        <pre><code class="language-php">
&lt;?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];
    $a = $_POST["a"];
    $d = $_POST["d"];

    $progression = array();
    $current = $a;

    for ($i = 0; $i < $n; $i++) {
        $progression[] = $current;
        $current *= $d;
    }

    echo "Геометрическая прогрессия: " . implode(", ", $progression) . ;
?&gt;
                        </code></pre>
            </div>
            <form method="post">
        <label for="length_A" class="main_text_form">Введите количество элементов (N):</label>
        <input type="number" id="length_A" name="length_A" min="2">
        <br>
        <label for="length_B" class="main_text_form">Введите первый член прогрессии (A):</label>
        <input type="number" id="length_B" name="length_B">
        <br>
        <label for="length_C" class="main_text_form">Введите знаменатель прогрессии (D):</label>
        <input type="number" id="length_C" name="length_C" required>
        <br>
        <button type="submit">Сформировать массив</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["length_A"];
        $a = $_POST["length_B"];
        $d = $_POST["length_C"];

        $progression = array();
        $current = $a;

        for ($i = 0; $i < $n; $i++) {
            $progression[] = $current;
            $current *= $d;
        }

        echo "<p class='result'>Геометрическая прогрессия:" . implode(", ", $progression) . "</p>";
    }
    ?>
                        <div class="labs_contents">
                    <div class="lab__target__desc">
                        <br>2. Дан целочисленный массив A размера N (≤ 15). Переписать в новый <br> целочисленный массив B все элементы с порядковыми номерами, <br>кратными трем  (3, 6, . . .), и вывести  размер  полученного  массива  B и его содержи-мое. Условный оператор не использовать.
                    </div>
                    <div class="prew_code_one">
                        <pre><code class="language-php">
&lt;?php
    $input_string = trim($_POST["array_input"] ?? '');
    $A = array_map('intval', explode(' ', $input_string));
    $N = count($A);
    
    if ($N > 15) {
        echo "Ошибка: размер массива не должен превышать 15 элементов.";
        exit;
    }
    $B = array();
    $j = 0;
    
    for($i = 2; $i < count($A); $i += 3) {
        $B[$j] = $A[$i];
        $j++;
    }
    echo "Исходный массив A: " . implode(", ", $A);
    echo "Размер массива B: " . count($B);
    echo "Элементы массива B: " . implode(", ", $B);
?&gt;
                        </code></pre>
            </div>
    <form method="post">
        <label for="length_A" class="main_text_form">Введите элементы массива через пробел:</label>
        <input type="text" id="length_A" name="length_A">
        <button type="submit">Обработать</button>
    </form>

<?php
    $input_string = trim($_POST["length_A"] ?? '');
    $A = array_map('intval', explode(' ', $input_string));
    $N = count($A);
    
    if ($N > 15) {
        echo "<div class='result'>Ошибка: размер массива не должен превышать 15 элементов.</div>";
        exit;
    }
    $B = array();
    $j = 0;
    
    for($i = 2; $i < count($A); $i += 3) {
        $B[$j] = $A[$i];
        $j++;
    }
    echo "<div class='result'>";
    echo "Исходный массив A: " . implode(", ", $A) . "<br>";
    echo "Размер массива B: " . count($B) . "<br>";
    echo "Элементы массива B: " . implode(", ", $B);
    echo "</div>";
?>

                    </div>
                    </div>
                    
            </div>
        </div>
        
    </section>
    <footer>
        <div class="footer_fon">Pre-Alpha Version</div>
    </footer>
</body>
</html>
