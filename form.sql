-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 22 2019 г., 08:31
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
  `date_comments` date NOT NULL,
  `topics_id` int(11) DEFAULT NULL,
  `user` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `email_comments`, `message_comments`, `date_comments`, `topics_id`, `user`) VALUES
(2, 'dasdad#DSd@Dsdasdad', ' dasdadsasd', '0000-00-00', 144, ' dsad'),
(4, 'ermachenya.al@dsdd', 'dsadadad', '0000-00-00', NULL, 'dsdadadad'),
(8, '11dasdasd@ds', 'dsadadad', '0000-00-00', 147, 'dsdadadad'),
(9, 'ermachenya.al@dsdd', 'dsadadad', '0000-00-00', 147, 'dsdadadad'),
(19, '11dasdasd@ds', 'dsadadad', '0000-00-00', 147, 'dsdadadad'),
(20, '1qqqd@ds', 'dsadadad', '0000-00-00', 147, 'dasdasd1'),
(31, '11dasdasd@dsewqe1212313123', 'dsadadad ', '2019-03-13', 144, 'dsdadadad '),
(32, '11ddasdd11111asdasd@ds', 'dsadadad ', '2019-03-13', 144, 'bvbb'),
(37, '11dasdadasd1212123dasd@ds', 'dsadadad ', '2019-03-14', 144, 'dsdadadad '),
(41, '11dasdasd@ds31231313', 'dsadadad ', '2019-03-14', 144, 'dsdadadad '),
(43, '11dasdasd@ds', 'dsadadad', '2019-03-14', 144, 'dsdadadad'),
(44, '11dasdasd@ds', 'dsadadad', '2019-03-14', 144, 'dsdadadad'),
(45, '11dasdasd@ds31231313', 'dsadadad ', '2019-03-14', 144, 'dsdadadad '),
(63, '11dasdasd@ds111111', 'dsadadad ', '2019-03-15', 144, 'dsdadadad '),
(2066, '11ddsadsad111asdasd@ds', 'dsadadad ', '2019-06-28', 212, 'dsdadadad '),
(2067, '11dasdasd@ds', 'dsadadad', '2019-06-28', 212, 'dsdadadad'),
(2084, 'dsad1q11111sd@ds', 'dsadadad ', '2019-07-08', 211, 'dsdadadad '),
(2085, '11dasdasd@ds', 'dsadadad', '2019-07-11', 205, 'dsdadadad'),
(2086, '11dasdasd@ds', 'dsadadad', '2019-07-11', 205, 'dsdadadad'),
(2092, 'dsadadad  ', 'dsdadadad@dsdad', '2019-07-14', 214, '11dasdasd@ds '),
(2093, '11dasdasd@ds', 'dsadadad', '2019-07-14', 214, 'dsdadadad'),
(2114, 'd@dsdd', 'dddd', '2019-07-22', 144, 'dsad'),
(2115, 'd@dsdd', 'dddd', '2019-07-22', 144, 'dsad'),
(2116, 'd@dsd', 'ddsdsd', '2019-07-22', 144, 'dsad'),
(2117, '11dasdasd@ds31231313', 'ddsdasd', '2019-07-22', 144, 'mama'),
(2118, 'dasad@DSAD', 'DASDASD', '2019-07-22', 144, 'dsadsad'),
(2121, 'd@dsdddsa', 'D', '2019-07-22', 214, 'dsadD'),
(2122, 'd@dsddDSD', 'DSADADADADADADSADA', '2019-07-04', 214, 'dsadD'),
(2123, 'ermachenya.al@gmail.com', 'dsdasdsadadasd', '2019-07-04', 214, 'dd'),
(2124, '1111@qqqqq', 'dsdasdasdasd', '2019-07-04', 208, '123@sdasd'),
(2125, 'test@test.com', 'dsdasdasdasdadsasd', '2019-07-04', 208, 'dsadsad'),
(2126, 'd@dsdddsad', 'asdasdadsad', '2019-07-13', 208, 'dsadasd'),
(2127, 'dsadadad@hari', 'dasdsadasdadasd', '2019-07-13', 204, 'dad'),
(2128, 'dsswww111#DSd@Dsdasdad', 'dsdasdasf31rd as d as d as d as da dasd sadadsadsa d as d asd as d sad', '2019-07-22', 204, 'dsadad@dsadqwdqwefdaf3');

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
  `uviews` int(11) NOT NULL,
  `latest_view` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`user`, `id`, `topic`, `message`, `email`, `date`, `views`, `uviews`, `latest_view`) VALUES
('dd', 144, 'Тема сообщения', 'Текст сообщения', 'ermachenya.al@gmail.com', '2019-03-04', 272, 83, '2019-07-22'),
('dasdasd1', 146, 'DSAd ', 'dasdasd ', 'DASd@dsada', '2019-03-12', 80, 27, '2019-05-18'),
('dsda', 147, 'dasd', 'dadsdsd', 'DASd@dsada', '2019-03-12', 38, 1, '2019-07-22'),
('dsda', 148, 'DSAdsad', 'd1eqeqeqweqevc wds  qdwqdq wqdds  qwddqd', 'DASd@dsada', '2019-03-13', 1, 35, '2019-05-18'),
('dsda', 149, 'DSAdsad', 'd1eqeqeqweqevc wds  qdwqdq wqdds  qwddqd', 'DASd@dsada', '2019-03-13', 1, 0, '2019-04-22'),
('g', 150, 'fd', 'fdsfsf', 'Dfddsf@fsdfsf', '2019-03-13', 1, 1, '2019-04-22'),
('в', 152, 'ы', 'dsadasd', 'eqwe@sdd', '2019-03-14', 2, 0, '2019-04-28'),
('в', 153, 'ВЫФВ', 'dwqewqeqwedszfcsvzcvzxe efwf f f sa fsfd asdfasfas df a sfd a s fa s fd as fa s f dsf asfdsaasfd', 'dd@dsdad', '2019-03-14', 2, 42, '2019-04-07'),
('в', 154, 'ВЫФВ', 'dwqewqeqwedszfcsvzcvzxe efwf f f sa fsfd asdfasfas df a sfd a s fa s fd as fa s f dsf asfdsaasfd', 'dd@dsdad', '2019-03-14', 10, 0, '2019-04-22'),
('в', 155, 'ВЫФВ', 'dasdadad dwdadad', 'ermachenya.al@gmail.com', '2019-03-14', 12, 0, '2019-05-18'),
('в', 156, 'выфв', 'dasdadadasdada dadasdasd', 'ermachenya.al@gmail.com', '2019-03-14', 1, 4, '2019-04-22'),
('dsd', 157, 'dsad', 'dsadasdad dasdsadad dasdasdasd', 'ermachenyqqqa.al@gmail.com', '2019-03-14', 7, 3, '2019-05-11'),
('sd', 158, 'sdad', 'dasdadad', 'DASd@dsada', '2019-03-14', 16, 1, '2019-04-22'),
('в', 159, 'ВЫФВ', 'dad adddsadasdadasd', 'ermachenya.al@gmail.com', '2019-03-14', 5, 6, '2019-05-11'),
('вы', 160, 'ывфв', 'dasdadadads', 'ermachenya.al@gmail.com', '2019-03-14', 9, 9, '2019-04-22'),
('dsda', 162, 'dsad', 'sadasdadasdsasdzcx as ad as dads as d a d as d asd sa d sad  asds sa d sa d asd  asd as d as d as dsad', 'er@dq', '2019-03-22', 1, 3, '2019-05-11'),
('11111', 163, 'dasd', 'asdasdadad', 'dsadad@dsadsad', '2019-03-22', 1, 10, '2019-04-07'),
('123@sdasd', 164, '1213', 'qqqweqwee', '1111@qqqqq', '2019-03-23', 7, 17, '2019-04-22'),
('q1121', 165, '313133', 'sadadasdadadassdasd', 'ermachenya.al@gmail.com', '2019-03-23', 1, 83, '2019-07-14'),
('deqeqewqwe', 166, 'dasdasdwqeqw', 'eqeqeqweqweqew', 'ermachenya.al@gmail.com', '2019-03-23', 4, 2, '2019-04-28'),
('dasd', 167, 'DAsd', 'd', 'dsadad@dsadsad', '2019-04-03', 1, 6, '2019-04-07'),
('d111111', 168, 'awsw', 'dasdasd', '11111111111@dasdad', '2019-04-03', 1, 17, '2019-05-18'),
('dsda', 169, '11111111111111111111111111', 'dsdadasdadad', '11111111111@222222', '2019-04-04', 1, 36, '2019-04-22'),
('d111111', 170, 'dsad', 'ddasdadad', 'dd@dsada', '2019-04-04', 1, 5, '2019-07-03'),
('dsad', 171, 'DASDAd', 'dsdadadad', 'dsadad@dsadsad', '2019-04-04', 1, 0, '2019-04-22'),
('dsda', 172, 'd', 'dsadaasdadasd', 'aaaaa@aaaa', '2019-04-05', 1, 0, '2019-07-03'),
('mama', 173, 'sdad', 'adsadasdasdasdadadsdad', 'q@d', '2019-04-05', 1, 1, '2019-04-28'),
('1111', 174, '11111', 'qqq', '1@222222', '2019-04-05', 1, 0, '2019-07-22'),
('dsda', 175, 'qnqnqnqnqnqnqnqnnq', 'dsdadadadasdadadasd', 'q@d1', '2019-04-16', 1, 29, '2019-07-03'),
('dsda', 176, 'qnqnqnqnqnqnqnqnnq', 'dsdadadadasdadadasd', 'q@d1', '2019-04-16', 1, 12, '2019-04-07'),
('dsda', 177, 'qnqnqnqnqnqnqnqnnq', 'dsdadadadasdadadasd', 'q@d1', '2019-04-16', 1, 12, '2019-04-22'),
('mama', 178, 'qnqnqnqnqnqnqnqnnq ', 'dsdadadadasdadadasd ', 'q@d1', '2019-04-16', 1, 30, '2019-07-03'),
('1', 179, '1', '111', '1@1', '2019-05-11', 1, 8, '2019-04-22'),
('вы', 180, 'ф', 'dasdad', 'W@dsa', '2019-04-16', 1, 11, '2019-05-11'),
('c', 181, '1', '1111', '1@1', '2019-05-11', 1, 0, '2019-04-07'),
('c', 182, '1', '1111', '1@1', '2019-05-11', 1, 3, '2019-07-14'),
('c', 183, '1', '1111', '1@1', '2019-05-11', 1, 0, '2019-07-14'),
('c', 184, '1', '1111', '1@1', '2019-05-11', 1, 0, '2019-05-05'),
('c', 185, '1', '1111', '1@1', '2019-05-11', 1, 1, '2019-05-05'),
('c', 186, '1', '1111', '1@1', '2019-05-11', 2, 0, '2019-04-07'),
('c', 187, '1', '1111', '1@1', '2019-05-11', 1, 7, '2019-04-07'),
('dd', 188, 'ds@dsd', 'dasdasd', 'dasDADDSADA@dsdad', '2019-05-16', 1, 2, '2019-04-22'),
('dd', 189, 'ds@dsd', 'dasdasd', 'dasDADDSADA@dsdad', '2019-05-16', 1, 1, '2019-05-05'),
('d', 190, 'DASDAD', 'dsdadad', 'dasDADDSADA@dsdad', '2019-05-16', 1, 4, '2019-05-05'),
('d', 191, 'DASDAD', 'dsdadad', 'dasDADDSADA@dsdad', '2019-05-16', 1, 17, '2019-04-22'),
('d', 192, 'DASDAD', 'dsdadad', 'dasDADDSADA@dsdad', '2019-05-16', 1, 0, '2019-07-22'),
('ddd', 193, 'dadd', 'dadasd', 'dsd@1', '2019-05-16', 11, 1, '2019-05-05'),
('ddd', 194, 'dadd', 'dadasd', 'dsd@1', '2019-05-16', 1, 0, '2019-04-22'),
('ddd', 195, 'dadd', 'dadasd', 'dsd@1', '2019-05-16', 1, 0, '2019-05-18'),
('d', 196, 'DASDAD', 'dsdadad', 'dasDADDSADA@dsdad', '2019-05-16', 1, 0, '2019-07-14'),
('d', 197, 'DASDAD', 'dsdadad', 'dasDADDSADA@dsdad', '2019-05-16', 1, 0, '2019-04-07'),
('baba', 198, 'baba', 'da31231313', 'ba@ba', '2019-05-16', 1, 7, '2019-05-11'),
('dsD', 199, 'DASDAD', 'dsd', 'dsd@1', '2019-06-27', 1, 0, '2019-04-22'),
('ds', 200, 'DASDAD', 'dddd', 'dasDADDSADA@dsdad', '2019-06-27', 1, 0, '2019-04-28'),
('d', 201, 'DASDAD@dsad', 'dasdad', 'dasDADDSADA@dsdad', '2019-06-27', 1, 4, '2019-05-11'),
('ds', 202, 'dad', 'dd', 'dsd@1', '2019-06-27', 1, 0, '2019-07-14'),
('ds', 203, 'dad', 'dd', 'dsd@1', '2019-06-27', 1, 4, '2019-04-07'),
('ds', 204, 'dad', 'dd', 'dsd@1', '2019-06-27', 3, 1, '2019-07-22'),
('ds', 205, 'dad', 'dd', 'dsd@1', '2019-06-27', 12, 6, '2019-07-20'),
('ds', 206, 'dad', 'dd', 'dsd@1', '2019-06-27', 2, 0, '2019-07-21'),
('d', 207, 'DASDAD', 'd', 'dasDADDSADA@dsdad', '2019-06-27', 1, 0, '2019-04-22'),
('ds', 208, 'DASDAD', 'ddd', 'dasDADDSADA@dsdad', '2019-06-27', 9, 0, '2019-07-13'),
('ds', 209, 'DASDAD', 'ddd', 'dasDADDSADA@dsdad', '2019-06-27', 3, 0, '2019-07-21'),
('d', 210, 'dad', 'ddd', 'dasDADDSADA@dsdad', '2019-06-27', 1, 0, '2019-07-22'),
('mama', 211, 'DASDAD ', 'dddd ', 'dasDADDSADA@dsdad', '2019-06-27', 8, 18, '2019-07-22'),
('dwadadsadadad', 212, 'ma 1111', 'dwadadsadadad ', 'am@am', '2019-06-28', 18, 14, '2019-07-22'),
('1111', 213, '11 11111', '1111 ', '1@1', '2019-07-11', 1, 0, '2019-07-22'),
('asdfgasdgfasdg', 214, 'test ', 'asdfgasdgfasdg ', 'test@test.test', '2019-07-14', 24, 1, '2019-07-04');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2129;

--
-- AUTO_INCREMENT для таблицы `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

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
