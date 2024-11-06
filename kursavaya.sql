-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2024 г., 22:53
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kursavaya`
--

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Пользователь'),
(2, 'Администратор'),
(3, 'Заблокированный');

-- --------------------------------------------------------

--
-- Структура таблицы `tovars`
--

CREATE TABLE `tovars` (
  `id` int NOT NULL,
  `nametov` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tovars`
--

INSERT INTO `tovars` (`id`, `nametov`, `description`, `price`, `avatar`) VALUES
(2, 'Hit', 'wrbwbwrsb', '231', 'image/6650a87d3eebb.png'),
(4, 'AAAAaaaahjk', 'vcwrvwr', '12', 'image/6650aaf4bb3b9.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'Sofi', 'naidenovagrozz@gmail.com', '$2y$10$11TGnG7ophOScDlaXYVE4OBSxrXM6bDqMzNd3PGOyY2cAcgE.nKtm', 1),
(2, 'Sofi', 'naidenovagrozz1@gmail.com', '$2y$10$9qtWx.8.XPXqKTqGH6haT.R0N3Sqc0YbXdaVuDlL.Ci8SX40q18cK', 1),
(3, 'Sofi                ', 'test@mail.ru', '$2y$10$LArtYF6dBSYpj2OSovM6p.sXlHkAgo91ayQWUGWZcFQXg2X7Ttdue', 1),
(5, 'Kam', 'kamila@mail.ru', '$2y$10$vdDSXr8xjQlNjQ2vMTjJSOMPak1s.pljY2piPjxcZNUPSPMTbyyf.', 1),
(6, 'Kam', 'djdjj@mail.ru', '$2y$10$8PvTwgorDmI2UVoqaEboturxcGVF1bWggbeZNjw.RK6BSqIcE0INS', 1),
(7, '', 'admin@mail.ru', '$2y$10$BJvVryz78h71hnJgGUEvS.6FUjnnrKIM1kcemKHqFtD8pbH/LVGuy', 2),
(8, 'бан', 'ban@mail.ru', '$2y$10$lbuSLcFlRg21VwcaK8VUVeBtJiiL6BjF.N1.y/seoag.X3/7mpiP2', 3),
(9, 'Kam', 'Ggg@mail.ru', '$2y$10$HMUwXaZvdv9NdAeTBRbgVup3l1Aah0uKcbKdkAJ6NqE1ZpOnGJ1Y.', 1),
(10, 'Ф', 'hhh@mail.ru', '$2y$10$LYdlVVkhTs4EaBOUY4tdAu9JakfqYNhPCubRm5s07dfelgrutvWw.', 1),
(11, 'Ф', 'ki2@mail.ru', '$2y$10$34Ig3o3/59xUKQvNrx7Hu.NV5nBPOQNrjlkLYSNmtMxVoIOvMkDo6', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovars`
--
ALTER TABLE `tovars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_ibfk_1` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tovars`
--
ALTER TABLE `tovars`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
