-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 15 2019 г., 22:07
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
  `id_message_list` int(11) DEFAULT NULL,
  `date_comments` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `email_comments`, `message_comments`, `id_message_list`, `date_comments`) VALUES
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
(48, 'aaa@bbb', 'dsdsdad111111111', 164, '2019-03-15'),
(49, 'aaa@bbb', '1111', 164, '2019-03-15'),
(50, 'wdad@sdasd', '111', 164, '2019-03-15'),
(51, 'd@qq', 'dsdad', 164, '2019-03-15'),
(52, 'qq@qq', 'qqqqqqq', 164, '2019-03-15'),
(53, 'qq@qq', 'qqq', 164, '2019-03-15'),
(54, 'qq@qq', 'qqq', 164, '2019-03-15'),
(55, 'qq@qq', 'qq', 164, '2019-03-15'),
(56, 'aaa@bbb', 'qqq', 164, '2019-03-15'),
(57, 'qq@qq', 'qq', 162, '2019-03-15'),
(58, 'qq@qq', 'qq', 162, '2019-03-15'),
(59, 'qq@qq', 'qqq', 162, '2019-03-15'),
(60, 'qq@qq', 'qq', 162, '2019-03-15'),
(61, 'qq@qq', 'qqq', 144, '2019-03-15'),
(62, 'qq@qq', 'qqq', 144, '2019-03-15'),
(63, 'qq@qq', 'qq', 144, '2019-03-15'),
(2019, 'WQW@sadasd', 'qwqe', 166, '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `message_list`
--

CREATE TABLE `message_list` (
  `user` varchar(40) NOT NULL,
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `date` date NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message_list`
--

INSERT INTO `message_list` (`user`, `id`, `topic`, `message`, `email`, `date`, `views`) VALUES
('dd', 144, 'Тема сообщения', 'Текст сообщения', 'ermachenya.al@gmail.com', '2019-03-04', 105),
('davi', 145, 'Test', 'Test', 'ermachenya.al@gmail.com', '2019-03-04', 15),
('ds', 146, 'DSAd', 'dasdasd', 'DASd@dsada', '2019-03-12', 3),
('dsda', 147, 'dasd', 'dadsdsd', 'DASd@dsada', '2019-03-12', 21),
('dsda', 148, 'DSAdsad', 'd1eqeqeqweqevc wds  qdwqdq wqdds  qwddqd', 'DASd@dsada', '2019-03-13', 0),
('dsda', 149, 'DSAdsad', 'd1eqeqeqweqevc wds  qdwqdq wqdds  qwddqd', 'DASd@dsada', '2019-03-13', 0),
('g', 150, 'fd', 'fdsfsf', 'Dfddsf@fsdfsf', '2019-03-13', 0),
('g', 151, 'fd', 'fdsfsf', 'Dfddsf@fsdfsf', '2019-03-13', 0),
('в', 152, 'ы', 'dsadasd', 'eqwe@sdd', '2019-03-14', 0),
('в', 153, 'ВЫФВ', 'dwqewqeqwedszfcsvzcvzxe efwf f f sa fsfd asdfasfas df a sfd a s fa s fd as fa s f dsf asfdsaasfd', 'dd@dsdad', '2019-03-14', 1),
('в', 154, 'ВЫФВ', 'dwqewqeqwedszfcsvzcvzxe efwf f f sa fsfd asdfasfas df a sfd a s fa s fd as fa s f dsf asfdsaasfd', 'dd@dsdad', '2019-03-14', 0),
('в', 155, 'ВЫФВ', 'dasdadad dwdadad', 'ermachenya.al@gmail.com', '2019-03-14', 0),
('в', 156, 'выфв', 'dasdadadasdada dadasdasd', 'ermachenya.al@gmail.com', '2019-03-14', 0),
('dsd', 157, 'dsad', 'dsadasdad dasdsadad dasdasdasd', 'ermachenyqqqa.al@gmail.com', '2019-03-14', 6),
('sd', 158, 'sdad', 'dasdadad', 'DASd@dsada', '2019-03-14', 1),
('в', 159, 'ВЫФВ', 'dad adddsadasdadasd', 'ermachenya.al@gmail.com', '2019-03-14', 1),
('вы', 160, 'ывфв', 'dasdadadads', 'ermachenya.al@gmail.com', '2019-03-14', 5),
('sdsad', 161, 'dsd', 'dsdsdsds', 'ermachenya.al@gmail.comdsd', '2019-03-14', 0),
('123@sdasd', 162, '123123', 'asdasdasdasd', 'asd@asdasd', '2019-03-14', 8),
('xd', 163, 'dASd', 'sadadad', 'DASd@dsada', '0000-00-00', 0),
('ds', 164, 'dsad', 'dasdad', 'sad@dsdad', '0000-00-00', 17),
('ds', 165, 'dsad', 'dasdad', 'sad@dsdad', '2019-03-15', 0),
('ds', 166, 'dsad', 'dasdad', 'sad@dsdad', '2019-03-15', 11),
('ds1', 167, 'dsad', 'dasdad', 'sad@dsdad', '2019-03-15', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id_message_list`);

--
-- Индексы таблицы `message_list`
--
ALTER TABLE `message_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020;

--
-- AUTO_INCREMENT для таблицы `message_list`
--
ALTER TABLE `message_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_message_list`) REFERENCES `message_list` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
