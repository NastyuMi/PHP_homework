-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2022 г., 17:51
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`) VALUES
(1, 'Путешествовать полезно', 'Путешествовать полезно для умственного здоровья, а также это снижает риск сердечного приступа и депрессии.'),
(2, '3 самые умные породы собак', '3 самые умные породы собак — бордер-колли, пудель и немецкая овчарка, самые глупые — афганская борзая, бульдог и чау-чау.'),
(3, 'IQ человека вырос', 'По данным исследования, средний IQ человека вырос примерно на 20% с 1950-х годов.'),
(4, 'Козы на деревьях', 'Марокко — единственная в мире страна, где козы из-за нехватки травы взбираются на деревья и пасутся там целыми стадами, лакомясь плодами аргании, дерева из орехов которого изготавливают душистое масло.'),
(5, '700 долларов в секунду', 'Компания Google зарабатывает примерно 700 долларов в секунду.'),
(6, 'Любовь — это....', 'Любовь — это кратковременное повышение уровня дофамина, норадреналина, пролактина, люлиберина и окситоцина.\r\nМалюсенькая молекула фенилэтиламина (ФЭА) вызывает определенные ощущения: приподнятое настроение, возбужденность, эйфорию.\r\nЛюбовь с первого взгляда — когда в нейронах лимбической системы происходит насыщение ФЭА. А нежность — это эндорфины (опиум для двоих).\r\nСтрасть длится в среднем 317,5 дней.'),
(7, 'Лучший способ развития мозга', 'Занятие незнакомой деятельностью — лучший способ развития мозга. Общение с теми, кто превосходит вас по интеллекту, также является сильнодействующим средством развития мозга.'),
(8, 'Изобрели женщины', 'Бронежилеты, пожарные выходы, автомобильные дворники и лазерные принтеры, изобрели женщины.');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_articles` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `id_articles`, `id_user`, `date`) VALUES
(1, 2, 1, '2022-02-23'),
(2, 5, 3, '2022-01-14'),
(3, 3, 1, '2022-02-14'),
(4, 4, 2, '2021-03-08'),
(5, 4, 3, '2022-03-08'),
(6, 1, 1, '2019-09-07'),
(7, 8, 2, '2022-05-19'),
(8, 7, 3, '2022-04-03'),
(9, 6, 2, '2021-12-31'),
(10, 3, 3, '2022-11-22');

-- --------------------------------------------------------

--
-- Структура таблицы `kor`
--

CREATE TABLE `kor` (
  `логін` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `пароль` int(11) NOT NULL,
  `Ім'я` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Дата народження` date NOT NULL,
  `Стать` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Країна` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ел.пошта` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `примітка` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kor`
--

INSERT INTO `kor` (`логін`, `пароль`, `Ім'я`, `Дата народження`, `Стать`, `Країна`, `ел.пошта`, `примітка`) VALUES
('qwerty', 11111, 'Вікторія', '2001-03-21', 'ж', 'Бельгія', 'root1@host.log', '36 розмір ноги'),
('asdfg', 22222, 'Віктор', '1968-01-06', 'М', 'Німечччина', 'root2@host.log', '45 розмір ноги'),
('zxcvb', 33333, 'Валентин', '1996-12-11', 'М', 'Ірландія', 'root3@host.log', '41 розмір ноги'),
('asqwzx', 55555, 'Vasilisa', '2007-08-09', 'Ж', 'Украина', 'root5@host.log', ' 36.5');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Name`, `Birthday`, `Gender`, `Country`, `email`, `note`) VALUES
(1, 'Васыль ', '1965-12-14', 'М', 'Бельгия', 'root1@host.log', 'Люблю пиво с креветками'),
(2, 'Галина', '1985-06-09', 'Ж', 'Монако', 'root2@host.log', 'Живу с двумя котами'),
(3, 'Сирёжа', '1999-05-07', 'М', 'Мехико', 'root3@host.log', 'Ем по ночам');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_articles` (`id_articles`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
