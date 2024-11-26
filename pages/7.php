<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 Лабораторная</title>
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
                        <br>1. Даны целые положительные числа M, N и набор из N чисел. Сформировать <br> матрицу размера M × N, у которой в каждой строке содержатся все числа из исходного набора (в том же порядке).
                    </div>
                    <div class="prew_code_one">
                        <pre><code class="language-php">
&lt;?php
        $M = intval($_POST["length_A"]);
        $N = intval($_POST["length_B"]);
        $input = $_POST["length_C"];

        $array = array_map('intval', explode(',', $input));

        if (count($array) !== $N) {
            echo "Ошибка: количество введённых чисел не совпадает с N ($N).";
        } else {

            $matrix = [];
            for ($i = 0; $i < $M; $i++) {
                $matrix[$i] = $array;
            }

            echo "Сформированная матрица $M × $N:";

            foreach ($matrix as $row) {
                foreach ($row as $value) {
                    echo "td $value td";
                }
                echo "tr";
            }

        }
?&gt;
                        </code></pre>
            </div>
    <form method="post">
        <label for="length_A" class="main_text_form">Введите количество строк (M):</label>
        <input type="number" id="length_A" name="length_A" min="1" required>

        <label for="length_B" class="main_text_form">Введите количество столбцов (N):</label>
        <input type="number" id="length_B" name="length_B" min="1" required>

        <label for="length_C" class="main_text_form">Введите N чисел (через запятую):</label>
        <input type="text" id="length_C" name="length_C" placeholder="например: 1,2,3,4,5" required>
        
        <button type="submit">Сформировать матрицу</button>
    </form>

    <?php
        $M = intval($_POST["length_A"]);
        $N = intval($_POST["length_B"]);
        $input = $_POST["length_C"];

        $array = array_map('intval', explode(',', $input));

        if (count($array) !== $N) {
            echo "<p class='result'>Ошибка: количество введённых чисел не совпадает с N ($N).</p>";
        } else {

            $matrix = [];
            for ($i = 0; $i < $M; $i++) {
                $matrix[$i] = $array;
            }

            echo "<p class='result'>Сформированная матрица $M × $N:</p>";
            echo "<table>";

            foreach ($matrix as $row) {
                echo "<tr class='result'>";
                foreach ($row as $value) {
                    echo "<td class='result'>$value</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        }
    ?>
                        <div class="labs_contents">
                    <div class="lab__target__desc">
                        <br>2. Дана матрица размера M × N. Поменять местами столбец с номером N <br> и первый из столбцов, содержащих только отрицательные элементы. Если <br>требуемых столбцов нет, то вывести матрицу без изменений.
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
        <label for="matrix" class="main_text_form">Введите матрицу (строки через ";" и элементы через ","):</label>
        <input type="text" id="matrix" name="matrix" placeholder="например: 1,2,3;4,5,6" required>

        <label for="n" class="main_text_form">Введите номер столбца N (счёт от 1):</label>
        <input type="number" id="n" name="n" min="1" required>

        <button type="submit">Обработать матрицу</button>
    </form>

    <?php
        $inputMatrix = $_POST["matrix"];
        $n = intval($_POST["n"]) - 1; 

        $rows = explode(';', $inputMatrix);
        $matrix = array_map(function ($row) {
            return array_map('intval', explode(',', $row));
        }, $rows);

        $M = count($matrix);
        $N = count($matrix[0]);

        if ($n < 0 || $n >= $N) {
            echo "<p class='result'>Ошибка: номер столбца N выходит за границы матрицы.</p>";
        } else {
            
            $negColumnIndex = -1; 
            for ($j = 0; $j < $N; $j++) {
                $allNegative = true;
                for ($i = 0; $i < $M; $i++) {
                    if ($matrix[$i][$j] >= 0) {
                        $allNegative = false;
                        break;
                    }
                }
                if ($allNegative) {
                    $negColumnIndex = $j;
                    break;
                }
            }

            if ($negColumnIndex !== -1) {
                for ($i = 0; $i < $M; $i++) {
                    $temp = $matrix[$i][$n];
                    $matrix[$i][$n] = $matrix[$i][$negColumnIndex];
                    $matrix[$i][$negColumnIndex] = $temp;
                }
                echo "<p class='result'>Столбцы $n и $negColumnIndex были поменяны местами.</p>";
            } else {
                echo "<p class='result'>Не найдено столбцов, содержащих только отрицательные элементы. Матрица осталась без изменений.</p>";
            }

            echo "<p class='result'>Результирующая матрица:</p>";
            echo "<table>";

            foreach ($matrix as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        }
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
