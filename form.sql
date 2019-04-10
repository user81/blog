-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 24 2019 г., 23:14
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
  `id` int(11) NOT NULL,
  `email_comments` varchar(40) NOT NULL,
  `message_comments` text NOT NULL,
  `topics_id` int(11) DEFAULT NULL,
  `date_comments` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `email_comments`, `message_comments`, `topics_id`, `date_comments`) VALUES
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
(35, 'dsd@dsd', 'счяясввфыв', 160, '2019-03-14'),
(36, 'jggj@nbb', 'bbjgjb', 144, '2019-03-14'),
(37, 'jggj@nbb', 'bbjgjb', 144, '2019-03-14'),
(38, 'dsd@dsd', 'c', 144, '2019-03-14'),
(39, 'Dd@ffdf', 's', 144, '2019-03-14'),
(40, 'aaa@bbb', '12345', 144, '2019-03-14'),
(41, 'aaa@bbb', '12345', 144, '2019-03-14'),
(42, 'aaa@bbb', '123456', 144, '2019-03-14'),
(43, 'aaa@bbb', '123', 144, '2019-03-14'),
(44, 'aaa@bbb', '123', 144, '2019-03-14'),
(45, 'dsd@dsd', 'sddsd', 144, '2019-03-14'),
(46, 'aaa@bbb', '1', 144, '2019-03-14'),
(47, 'dsd@dsd', 'hfhfhh', 144, '2019-03-14'),
(61, 'qq@qq', 'qqq', 144, '2019-03-15'),
(62, 'qq@qq', 'qqq', 144, '2019-03-15'),
(63, 'qq@qq', 'qq', 144, '2019-03-15'),
(2019, 'csa@dsad', 'dadasd', 160, '0000-00-00'),
(2020, '111@111', '111111', 164, '2019-03-23'),
(2021, '111@111', '11111111111111111111111111111dfasadasdasdad', 164, '2019-03-23'),
(2022, '111@111', 'уцуйцу', 144, '2019-03-23'),
(2023, '1231@fadas', 'dasdasd', 144, '2019-03-23'),
(2024, 'WQW@sadasd', '11111', 147, '2019-03-23'),
(2025, '111@111', 'QWEQEQE', 147, '2019-03-23'),
(2026, '1231@fadas', 'DASDSADD', 147, '2019-03-23'),
(2027, 'dsda@sad', 'DASDASDADAD11', 147, '2019-03-23'),
(2028, 'dsda@sad', 'WWW', 147, '2019-03-23'),
(2029, 'dsda@sad', 'dsadad', 147, '2019-03-23'),
(2030, 'sq@casad', 'dasdadad', 147, '2019-03-23'),
(2031, '3e13123@fdsfdfsdf', 'dasadasdasdasdadad', 147, '2019-03-23'),
(2032, 'dsda@sad', 'dadad', 147, '2019-03-23'),
(2033, '23@dsad', 'dasdadad', 147, '2019-03-23'),
(2034, 'dsda@sad1', '1111111111', 147, '2019-03-23');

-- --------------------------------------------------------

--
-- Структура таблицы `topics`
--

CREATE TABLE `topics` (
  `user` varchar(40) NOT NULL,
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `date` date NOT NULL,
  `views` int(11) NOT NULL,
  `uviews` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`user`, `id`, `topic`, `message`, `email`, `date`, `views`, `uviews`) VALUES
('dd', 144, 'Тема сообщения', 'Текст сообщения', 'ermachenya.al@gmail.com', '2019-03-04', 245, 49),
('ds', 146, 'DSAd', 'dasdasd', 'DASd@dsada', '2019-03-12', 79, 18),
('dsda', 147, 'dasd', 'dadsdsd', 'DASd@dsada', '2019-03-12', 37, 0),
('dsda', 148, 'DSAdsad', 'd1eqeqeqweqevc wds  qdwqdq wqdds  qwddqd', 'DASd@dsada', '2019-03-13', 0, 0),
('dsda', 149, 'DSAdsad', 'd1eqeqeqweqevc wds  qdwqdq wqdds  qwddqd', 'DASd@dsada', '2019-03-13', 0, 0),
('g', 150, 'fd', 'fdsfsf', 'Dfddsf@fsdfsf', '2019-03-13', 0, 0),
('в', 152, 'ы', 'dsadasd', 'eqwe@sdd', '2019-03-14', 1, 0),
('в', 153, 'ВЫФВ', 'dwqewqeqwedszfcsvzcvzxe efwf f f sa fsfd asdfasfas df a sfd a s fa s fd as fa s f dsf asfdsaasfd', 'dd@dsdad', '2019-03-14', 1, 0),
('в', 154, 'ВЫФВ', 'dwqewqeqwedszfcsvzcvzxe efwf f f sa fsfd asdfasfas df a sfd a s fa s fd as fa s f dsf asfdsaasfd', 'dd@dsdad', '2019-03-14', 0, 0),
('в', 155, 'ВЫФВ', 'dasdadad dwdadad', 'ermachenya.al@gmail.com', '2019-03-14', 11, 0),
('в', 156, 'выфв', 'dasdadadasdada dadasdasd', 'ermachenya.al@gmail.com', '2019-03-14', 0, 0),
('dsd', 157, 'dsad', 'dsadasdad dasdsadad dasdasdasd', 'ermachenyqqqa.al@gmail.com', '2019-03-14', 6, 0),
('sd', 158, 'sdad', 'dasdadad', 'DASd@dsada', '2019-03-14', 11, 0),
('в', 159, 'ВЫФВ', 'dad adddsadasdadasd', 'ermachenya.al@gmail.com', '2019-03-14', 4, 0),
('вы', 160, 'ывфв', 'dasdadadads', 'ermachenya.al@gmail.com', '2019-03-14', 8, 0),
('dsda', 162, 'dsad', 'sadasdadasdsasdzcx as ad as dads as d a d as d asd sa d sad  asds sa d sa d asd  asd as d as d as dsad', 'er@dq', '2019-03-22', 0, 0),
('11111', 163, 'dasd', 'asdasdadad', 'dsadad@dsadsad', '2019-03-22', 0, 0),
('123@sdasd', 164, '1213', 'qqqweqwee', '1111@qqqqq', '2019-03-23', 6, 0),
('q1121', 165, '313133', 'sadadasdadadassdasd', 'ermachenya.al@gmail.com', '2019-03-23', 0, 0),
('deqeqewqwe', 166, 'dasdasdwqeqw', 'eqeqeqweqweqew', 'ermachenya.al@gmail.com', '2019-03-23', 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`topics_id`);

--
-- Индексы таблицы `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2035;

--
-- AUTO_INCREMENT для таблицы `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`topics_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
