<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
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
                        <li><a href="#" class="nav_auth">Репозиторий</a></li>
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
                        <a href="/pages/9/index.php" class="labs__cont">Лабораторная работа 9</a>
                    </div>
                </div>
                <div class="labs_contents">
                    <div class="labs__target">Задача:</div>
                    <div class="lab__target__desc">
                        <br>1. Даны два целых числа: A, B. Проверить истинность высказывания: «Справедливы неравенства A > 2 и B ≤ 3».
                    </div>
                    <div class="prew_code_one">
                        <pre><code class="language-php">
&lt;?php
    $A = $_POST["number_A"];
    $B = $_POST["number_B"];
    
    if ($A > 2 && $B <= 3) {
        echo "<p class='result'>Высказывание истинно: A > 2 и B ≤ 3.</p>";
    } else {
        echo "<p class='result'>Высказывание ложно: A > 2 и B ≤ 3 не выполняются.</p>";
    }
?&gt;
                        </code></pre>
            </div>
            <form method="post">
                <label for="number_A" class="main_text_form">Введите число A:</label>
                <input type="text" id="number_A" name="number_A" required>
                
                <label for="number_B" class="main_text_form">Введите число B:</label>
                <input type="text" id="number_B" name="number_B" required>
                
                <button type="submit">Проверить</button>
            </form>

            <?php
                $A = $_POST["number_A"];
                $B = $_POST["number_B"];

                if ($A > 2 && $B <= 3) {
                    echo "<p class='result'>Высказывание истинно: A > 2 и B ≤ 3.</p>";
                } else {
                    echo "<p class='result'>Высказывание ложно: A > 2 и B ≤ 3 не выполняются.</p>";
                }
            ?>
                        <div class="labs_contents">
                    <div class="lab__target__desc">
                        <br>2. Даны три целых числа. Найти количество отрицательных и количество четных чисел в исходном наборе.
                    </div>
                    <div class="prew_code_one">
                        <pre><code class="language-php">
&lt;?php
$A = $_POST["number_A"];
$B = $_POST["number_B"];
$C = $_POST["number_C"];

$negative_count = 0;
$even_count = 0;

if ($A < 0) {
$negative_count++;
}
if ($A % 2 == 0) {
   $even_count++;
}
if ($B < 0) {
    $negative_count++;
}
if ($B % 2 == 0) {
    $even_count++;
}

if ($C < 0) {
    $negative_count++;
}
if ($C % 2 == 0) {
    even_count++;
}

echo "<p>Количество отрицательных чисел: $negative_count</p>";
echo "<p>Количество четных чисел: $even_count</p>";
?&gt;
                        </code></pre>
            </div>
        <form method="post">
            <label for="number_A" class="main_text_form">Введите число A:</label>
            <input type="text" id="number_A" name="number_A" required>
            
            <label for="number_B" class="main_text_form">Введите число B:</label>
            <input type="text" id="number_B" name="number_B" required>
            
            <label for="number_C" class="main_text_form">Введите число C:</label>
            <input type="text" id="number_C" name="number_C" required>
            
            <button type="submit">Проверить</button>
        </form>

        <?php
            $A = $_POST["number_A"];
            $B = $_POST["number_B"];
            $C = $_POST["number_C"];

            // Инициализация счетчиков
            $negative_count = 0;
            $even_count = 0;

            // Проверка первого числа A
            if ($A < 0) {
                $negative_count++;
            }
            if ($A % 2 == 0) {
                $even_count++;
            }

            // Проверка второго числа B
            if ($B < 0) {
                $negative_count++;
            }
            if ($B % 2 == 0) {
                $even_count++;
            }

            // Проверка третьего числа C
            if ($C < 0) {
                $negative_count++;
            }
            if ($C % 2 == 0) {
                $even_count++;
            }

            // Вывод результатов
            echo "<p class='result'>Количество отрицательных чисел: $negative_count</p>";
            echo "<p class='result'>Количество четных чисел: $even_count</p>";
        ?>
                    </div>
        <!-- -->
        <div class="labs_contents">
                    <div class="lab__target__desc">
                        <br>3. Вычислить значение функции y=f(x) при произвольных значениях x. 
                    </div>
                    <div class="prew_code_one">
                        <pre><code class="language-php">
&lt;?php 
 $a = 3.9;
 $b = 4.6;

 $x = $_POST["number_x"];
 $result = "";

 if ($x >= 3 && $x <= 5) {
     $y = $x + cos($a * $x) / ($x * $x + 1);
     $result = "При x = " . $x . ", y = " . $y;
 } 

 elseif ($x > 5) {
     $y = $b * sin($a / $x);
     $result = "При x = " . $x . ", y = " . $y;
 } 

 elseif ($x < 3) {
     $y = exp($x) + log(abs($x));
     $result = "При x = " . $x . ", y = " . $y;
 }

 echo "<p class='result'>Результат: " . $result . "</p> 
 }
?&gt;
                        </code></pre>
            </div>
            <form method="post">
                <label for="number_x" class="main_text_form">Введите значение x:</label>
                <input type="text" id="number_x" name="number_x" required>
                <button type="submit">Вычислить</button>
            </form>

            <?php
                $a = 3.9;
                $b = 4.6;

                $x = $_POST["number_x"];
                $result = "";

                if ($x >= 3 && $x <= 5) {
                    $y = $x + cos($a * $x) / ($x * $x + 1);
                    $result = "При x = " . $x . ", y = " . $y;
                } 

                elseif ($x > 5) {
                    $y = $b * sin($a / $x);
                    $result = "При x = " . $x . ", y = " . $y;
                } 

                elseif ($x < 3) {
                    $y = exp($x) + log(abs($x));
                    $result = "При x = " . $x . ", y = " . $y;
                }

                echo "<p class='result'>Результат: " . $result . "</p>";
            ?>
                    </div>
                    <div class="labs_contents">
                    <div class="lab__target__desc">
                        <br>4. Вычислить значение функции y=f(x) при произвольных значениях x. Для вычисления значения функции использовать оператор switch.
                    </div>
                    <div class="prew_code_one">
                        <pre><code class="language-php">
&lt;?php 
$a = 3.9;
$b = 4.6;
$x = $_POST["number_z"];
$y = 0;

switch ($x) {
    case 5:
        $y = $x + cos($a * $x) / ($x**2 + 1);
        break;
    case 8:
        $y = $b * sin($a / $x);
        break;
    case 2:
        $y = exp($x) + log(abs($x));
        break;
    default:
        echo "<p class='result'>Значение x не определено в операторе switch.</p>";
    break;
    }

    if ($y != 0) {
        echo "<p class='result'>При x = $x, значение y = $y.</p>";
    }
?&gt;
                        </code></pre>
            </div>
            <form method="post">
                <label for="number_z" class="main_text_form">Введите значение x:</label>
                <input type="text" id="number_z" name="number_z" required>
                <button type="submit">Вычислить</button>
            </form>

        <?php
            $a = 3.9;
            $b = 4.6;
            $x = $_POST["number_z"];
            $y = 0;

            switch ($x) {
                case 5:
                    $y = $x + cos($a * $x) / ($x**2 + 1);
                    break;
                case 8:
                    $y = $b * sin($a / $x);
                    break;
                case 2:
                    $y = exp($x) + log(abs($x));
                    break;
                default:
                    echo "<p class='result'>Значение x не определено в операторе switch.</p>";
                    break;
            }

            if ($y != 0) {
                echo "<p class='result'>При x = $x, значение y = $y.</p>";
            }
        ?>

                    </div>
                    
            </div>
        </div>
            </div>
            
        </div>
        <!-- -->
        
    </section>
    <footer>
        <div class="footer_fon">Pre-Alpha Version</div>
    </footer>
</body>
</html>
