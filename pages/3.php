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
                        <br>1. Дан диаметр окружности <em>d</em>. Найти ее длину <em>L = π·d</em>. В качестве значения π использовать 3.14.
                    </div>
                    <div class="prew_code_one">
                        <pre><code class="language-php">
&lt;?php
    $d = $_POST["diameter"];
    $pi = 3.14;
    $L = $pi * $d;
    echo "&lt;p&gt;Длина окружности (L) равна: $L&lt;/p&gt;";
?&gt;
                        </code></pre>
            </div>
            <form method="post">
                            <label for="diameter" class="main_text_form">Введите диаметр (d):</label>
                            <input type="text" id="diameter" name="diameter">
                            <button type="submit">Вычислить</button>
                        </form>

                        <?php
                            $d = $_POST["diameter"];
                            $pi = 3.14;
                            $L = $pi * $d;
                            echo "<p class='result'>Длина окружности (L) равна: $L</p>";
                        ?>
                        <div class="labs_contents">
                    <div class="lab__target__desc">
                        <br>2. На отрезке длины A размещено максимально возможное количество отрезков длины B (без наложений). <br></br>Используя операцию деления нацело, найти количество отрезков B, размещенных на отрезке


                    </div>
                    <div class="prew_code_one">
                        <pre><code class="language-php">
&lt;?php
    $A = $_POST["length_A"];
    $B = $_POST["length_B"];
    $count = intdiv($A, $B);
?&gt;
                        </code></pre>
            </div>
        <form method="post">
            <label for="length_A" class="main_text_form">Введите длину отрезка A:</label>
            <input type="text" id="length_A" name="length_A" required>
            
            <label for="length_B" class="main_text_form">Введите длину отрезка B:</label>
            <input type="text" id="length_B" name="length_B" required>
            
            <button type="submit">Вычислить</button>
        </form>

        <?php
            $A = $_POST["length_A"];
            $B = $_POST["length_B"];
            $count = intdiv($A, $B);
            echo "<p class='result'>Равно: $count</p>"
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
