-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 11 2024 г., 21:34
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `quiz_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_text` varchar(255) NOT NULL,
  `city_image` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `question_text`, `city_image`, `correct_answer`) VALUES
(1, 'Какое самое большое существующее сухопутное животное?', '/img/main_img.png', 'Африканский слон'),
(2, 'Какое самое маленькое млекопитающее в мире?', '/img/main_img.png', 'Карликовая белозубка'),
(3, 'Какая самая большая змея в мире?', '/img/main_img.png', 'Анаконда'),
(4, 'Какая птица считается самой быстрой в мире?', '/img/main_img.png', 'Сокол-сапсан'),
(5, 'Какое животное имеет самые большие глаза в мире?', '/img/main_img.png', 'Кальмар гигантский'),
(6, 'Какое животное имеет самые длинные уши относительно размера тела?', '/img/main_img.png', 'Кролик'),
(7, 'Какое животное может бежать со скоростью до 120 км/ч?', '/img/main_img.png', 'Гепард'),
(8, 'Какое животное имеет самые длинные ноги относительно размера тела?', '/img/main_img.png', 'Жираф'),
(9, 'Какое животное имеет самые большие клыки?', '/img/main_img.png', 'Нарвал'),
(10, 'Какое животное имеет самый длинный хвост относительно размера тела?', '/img/main_img.png', 'Обезьяна-тамарин'),
(11, 'Какое животное является самым ядовитым в мире?', '/img/main_img.png', 'Смертельно ядовитая коралловая змея'),
(12, 'Какая птица считается самой умной?', '/img/main_img.png', 'Ворон'),
(13, 'Какое животное имеет самое высокое кровяное давление?', '/img/main_img.png', 'Кашалот'),
(14, 'Какое животное может оставаться под водой дольше всех?', '/img/main_img.png', 'Слон-морж'),
(15, 'Какое животное имеет самый длинный язык относительно размера тела?', '/img/main_img.png', 'Жираф'),
(16, 'Какое животное имеет самое большое мозговое пространство?', '/img/main_img.png', 'Кашалот'),
(17, 'Какое животное может бежать по воде?', '/img/main_img.png', 'Водомерка'),
(18, 'Какое животное может видеть в 360 градусов?', '/img/main_img.png', 'Хамелеон'),
(19, 'Какое животное имеет самые острые когти?', '/img/main_img.png', 'Снежный барс'),
(20, 'Какое животное может закрывать уши и нос, чтобы уберечься от песчаных бурь?', '/img/main_img.png', 'Верблюд');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
