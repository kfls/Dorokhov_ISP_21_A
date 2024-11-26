<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Лабораторная</title>
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
                        <br>1. Дано  целое  число  N  и набор  из N  положительных  вещественных чисел.<br>Вывести  в том  же порядке  целые  части  всех  чисел  из данного набора  <br>(как  вещественные  числа  с  нулевой  дробной  частью),  а  также сумму всех целых частей.
                    </div>
                    <div class="prew_code_one">
                        <pre><code class="language-php">
&lt;?php
    $N = intval($_POST["number_N"]);
    $numbers_string = $_POST["numbers"];                 
    $numbers = explode(',', $numbers_string);

    if (count($numbers) !== $N) {
        echo Количество чисел не соответствует N.";
    } else {
        $sum = 0;
        echo "Целые части введенных чисел:";

        foreach ($numbers as $number) {
            $integer_part = $number;
            echo "$integer_part.0"; // Выводим целую часть числа
            $sum += $integer_part;
    }       
                        
        echo "Сумма целых частей: $sum";
    }
?&gt;
                        </code></pre>
            </div>
            <form method="post">

                <label for="number_N" class="main_text_form">Введите число N (количество чисел):</label>
                <input type="text" id="number_x" name="number_N" required><br><br>

                <label for="numbers" class="main_text_form">Введите N чисел через пробел:</label>
                <input type="text" id="number_x" name="numbers" required><br><br>

                <button type="submit">Вычислить</button>
            </form>

                <?php
                    $N = intval($_POST["number_N"]);
                    $numbers_string = $_POST["numbers"];
                    
                    $numbers = explode(' ', $numbers_string);

                    if (count($numbers) !== $N) {
                        echo "<p class='result'>Количество чисел не соответствует N.</p>";
                    } else {
                        $sum = 0;
                        echo "<p class='result'><b>Целые части введенных чисел:</b></p><ul>";

                        foreach ($numbers as $number) {
                            $integer_part = (float)$number;
                            echo "<div class='result'>";
                            echo "<li>$integer_part.0</li>"; 
                            $sum += $integer_part;
                            echo "</div>";
                        }
                        
                        echo "</ul>";
                        echo "<p class='result'><b>Сумма целых частей:</b> $sum</p>";
                    }
                ?>
                        <div class="labs_contents">
                    <div class="lab__target__desc">
                        <br>2. Дано вещественное  число —  цена 1 кг конфет. Вывести  стоимость  1, 2, . . . , 10 кг конфет.
                    </div>
                    <div class="prew_code_one">
                        <pre><code class="language-php">
&lt;?php
    $price_per_kg = $_POST["price_per_kg"];
            
    if ($price_per_kg !== 0 && $price_per_kg > 0) {
        for ($kg = 1; $kg <= 10; $kg++) {
            $total_price = $price_per_kg * $kg;
            echo "Стоимость $kg кг конфет: $total_price";
        }
    } else {
        echo "Пожалуйста, введите корректное положительное число для цены.";
    }

echo "Количество отрицательных чисел: $negative_count";
echo "Количество четных чисел: $even_count";
?&gt;
                        </code></pre>
            </div>
            <form method="post">
                <label for="price_per_kg" class="main_text_form">Введите цену за 1 кг конфет:</label>
                <input type="text" id="number_x" name="price_per_kg" required>
                <button type="submit">Рассчитать</button>
            </form>

    <?php
        $price_per_kg = $_POST["price_per_kg"];
            
        if ($price_per_kg !== 0 && $price_per_kg > 0) {
            echo "<div class='result'>";
            for ($kg = 1; $kg <= 10; $kg++) {
                $total_price = $price_per_kg * $kg;
                echo "<p>Стоимость $kg кг конфет: $total_price</p>";
            }
            echo "</div>";
        } else {
            echo "<p class='result'>Пожалуйста, введите положительное число цены.</p>";
        }
    ?>
                    </div>
        <!-- -->
        <div class="labs_contents">
                    <div class="lab__target__desc">
                        
        
    </section>
    <footer>
        <div class="footer_fon">Pre-Alpha Version</div>
    </footer>
</body>
</html>
