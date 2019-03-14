-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 14 2019 г., 08:56
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `form`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id-comments` int(11) NOT NULL,
  `email-comments` varchar(40) NOT NULL,
  `message-comments` text NOT NULL,
  `id` int(11) DEFAULT NULL,
  `date-comments` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id-comments`, `email-comments`, `message-comments`, `id`, `date-comments`) VALUES
(1, 'dzcx', 'cxc', 145, '0000-00-00'),
(2, 'cxc', 'zxczc', 144, '0000-00-00'),
(3, 'ds', 'sadd', NULL, '0000-00-00'),
(4, 'dsadad', 'dsada', NULL, '0000-00-00'),
(8, 'dsd@dsd', 'sddad', 147, '0000-00-00'),
(9, 'dsd@dsd', 'sddad', 147, '0000-00-00'),
(19, 'dsd@dsd', 'dsdsd', 147, '0000-00-00'),
(20, 'dsd@dsd', 'dsdsd', 147, '0000-00-00'),
(21, 'dsd@dsd', 'dsdsd', 147, '2019-03-13'),
(22, 'dsd@dsd', 'dsdsd', 147, '2019-03-13'),
(23, 'dsd@dsd', 'dsdsd', 147, '2019-03-13'),
(24, 'dsd@dsd', 'dsdsd', 147, '2019-03-13'),
(28, 'dsadad@dsad', 'dsadad', 144, '2019-03-13'),
(29, 'dsadad@dsad', 'dsadad', 144, '2019-03-13'),
(30, 'dsadad@dsad', 'dsadad', 144, '2019-03-13'),
(31, 'dsadad@dsad', 'dsadad', 144, '2019-03-13'),
(32, 'dsadad@dsad', 'dsadad', 144, '2019-03-13'),
(33, 'Dd@ffdf', 'dasdsad', 144, '2019-03-14'),
(34, 'dsd@dsd', 'счяясввфыв', 160, '2019-03-14'),
(35, 'dsd@dsd', 'счяясввфыв', 160, '2019-03-14');

-- --------------------------------------------------------

--
-- Структура таблицы `message-list1`
--

CREATE TABLE `message-list1` (
  `user` varchar(40) NOT NULL,
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `e-mail` varchar(40) DEFAULT NULL,
  `date` date NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message-list1`
--

INSERT INTO `message-list1` (`user`, `id`, `topic`, `message`, `e-mail`, `date`, `views`) VALUES
('dd', 144, 'Тема сообщения', 'Текст сообщения', 'ermachenya.al@gmail.com', '2019-03-04', 33),
('davi', 145, 'Test', 'Test', 'ermachenya.al@gmail.com', '2019-03-04', 13),
('ds', 146, 'DSAd', 'dasdasd', 'DASd@dsada', '2019-03-12', 2),
('dsda', 147, 'dasd', 'dadsdsd', 'DASd@dsada', '2019-03-12', 21),
('dsda', 148, 'DSAdsad', 'd1eqeqeqweqevc wds  qdwqdq wqdds  qwddqd', 'DASd@dsada', '2019-03-13', 0),
('dsda', 149, 'DSAdsad', 'd1eqeqeqweqevc wds  qdwqdq wqdds  qwddqd', 'DASd@dsada', '2019-03-13', 0),
('g', 150, 'fd', 'fdsfsf', 'Dfddsf@fsdfsf', '2019-03-13', 0),
('g', 151, 'fd', 'fdsfsf', 'Dfddsf@fsdfsf', '2019-03-13', 0),
('в', 152, 'ы', 'dsadasd', 'eqwe@sdd', '2019-03-14', 0),
('в', 153, 'ВЫФВ', 'dwqewqeqwedszfcsvzcvzxe efwf f f sa fsfd asdfasfas df a sfd a s fa s fd as fa s f dsf asfdsaasfd', 'dd@dsdad', '2019-03-14', 0),
('в', 154, 'ВЫФВ', 'dwqewqeqwedszfcsvzcvzxe efwf f f sa fsfd asdfasfas df a sfd a s fa s fd as fa s f dsf asfdsaasfd', 'dd@dsdad', '2019-03-14', 0),
('в', 155, 'ВЫФВ', 'dasdadad dwdadad', 'ermachenya.al@gmail.com', '2019-03-14', 0),
('в', 156, 'выфв', 'dasdadadasdada dadasdasd', 'ermachenya.al@gmail.com', '2019-03-14', 0),
('dsd', 157, 'dsad', 'dsadasdad dasdsadad dasdasdasd', 'ermachenyqqqa.al@gmail.com', '2019-03-14', 0),
('sd', 158, 'sdad', 'dasdadad', 'DASd@dsada', '2019-03-14', 1),
('в', 159, 'ВЫФВ', 'dad adddsadasdadasd', 'ermachenya.al@gmail.com', '2019-03-14', 0),
('вы', 160, 'ывфв', 'dasdadadads', 'ermachenya.al@gmail.com', '2019-03-14', 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id-comments`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `message-list1`
--
ALTER TABLE `message-list1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id-comments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `message-list1`
--
ALTER TABLE `message-list1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `message-list1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
