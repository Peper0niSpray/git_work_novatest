-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 08 2020 г., 16:48
-- Версия сервера: 10.4.12-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guest_book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1591589398),
('m200608_000117_reviews', 1591589402),
('m200608_000141_user', 1591589404),
('m200608_000206_user_type', 1591589405);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `reviews_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviews_date` date NOT NULL,
  `reviews_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`reviews_id`, `user_id`, `login`, `reviews_date`, `reviews_text`) VALUES
(2, 1, 'Dua', '2020-06-03', 'Commentary (lat. Commentārius - notes, notes; interpretation) - explanations to the text, reasoning, remarks about something or on the Internet - to the post (message). Comment (notes). Comments (programming).'),
(3, 1, 'Dua', '2020-06-03', 'Commentary (lat. Commentārius - notes, notes; interpretation) - explanations to the text, reasoning, remarks about something or on the Internet - to the post (message). Comment (notes). Comments (programming).'),
(4, 1, 'Dua', '2020-06-01', 'Commentary (lat. Commentārius - notes, notes; interpretation) - explanations to the text, reasoning, remarks about something or on the Internet - to the post (message). Comment (notes). Comments (programming).'),
(5, 2, 'Simon', '2020-06-03', 'Commentary (lat. Commentārius - notes, notes; interpretation) - explanations to the text, reasoning, remarks about something or on the Internet - to the post (message). Comment (notes). Comments (programming).'),
(6, 1, 'Dua', '2020-06-02', 'Commentary (lat. Commentārius - notes, notes; interpretation) - explanations to the text, reasoning, remarks about something or on the Internet - to the post (message). Comment (notes). Comments (programming).'),
(7, 2, 'Simon', '2020-05-28', 'Commentary (lat. Commentārius - notes, notes; interpretation) - explanations to the text, reasoning, remarks about something or on the Internet - to the post (message). Comment (notes). Comments (programming).'),
(8, 2, 'Simon', '2020-06-07', 'Commentary (lat. Commentārius - notes, notes; interpretation) - explanations to the text, reasoning, remarks about something or on the Internet - to the post (message). Comment (notes). Comments (programming).'),
(9, 2, 'Simon', '2020-06-05', 'Commentary (lat. Commentārius - notes, notes; interpretation) - explanations to the text, reasoning, remarks about something or on the Internet - to the post (message). Comment (notes). Comments (programming).'),
(10, 1, 'Dua', '2020-06-03', 'Commentary (lat. Commentārius - notes, notes; interpretation) - explanations to the text, reasoning, remarks about something or on the Internet - to the post (message). Comment (notes). Comments (programming).'),
(11, 2, 'Simon', '2020-06-03', 'Commentary (lat. Commentārius - notes, notes; interpretation) - explanations to the text, reasoning, remarks about something or on the Internet - to the post (message). Comment (notes). Comments (programming).');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_code` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `user_code`, `login`, `password`) VALUES
(1, 1, 'admin', 'admin'),
(2, 2, 'Simon', 'Simon'),
(3, 2, 'Печенег', 'Печенег');

-- --------------------------------------------------------

--
-- Структура таблицы `user_type`
--

CREATE TABLE `user_type` (
  `user_code` int(11) NOT NULL,
  `name_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_type`
--

INSERT INTO `user_type` (`user_code`, `name_code`) VALUES
(1, 'Администратор'),
(2, 'Пользователь ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviews_id`),
  ADD KEY `idx-post-user_id` (`user_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `idx-post-user_code` (`user_code`);

--
-- Индексы таблицы `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_code`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviews_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk-post-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk-post-user_code` FOREIGN KEY (`user_code`) REFERENCES `user_type` (`user_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
