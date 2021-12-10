-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-12-10 05:55:19
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `diet`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `c_weight`
--

CREATE TABLE `c_weight` (
  `c_w_id` int(11) NOT NULL,
  `c_weight` int(11) NOT NULL,
  `c_max_cal` int(11) NOT NULL,
  `c_max_p` int(11) NOT NULL,
  `c_max_f` int(11) NOT NULL,
  `c_max_c` int(11) NOT NULL,
  `u_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `c_weight`
--

INSERT INTO `c_weight` (`c_w_id`, `c_weight`, `c_max_cal`, `c_max_p`, `c_max_f`, `c_max_c`, `u_name`) VALUES
(1, 75, 2775, 208, 185, 70, '衣川　純弥');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(32) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `pass`) VALUES
(3, 'ほげほげ', '$2y$10$dK4hwATEfJafHHzANII5XOYH46tyBNo4QzCSoxl40/b4hhgOXNT.W'),
(4, 'きぬ', '$2y$10$SeVXMfpjFkuS2SrLWh0rd.C6Ki1CJRBGISBjP2/A7vsL6RTH0BDum'),
(5, '衣川　純弥', '$2y$10$Hk9YzN.7xcTf8rXYR6rOHu5sOtLe2v1C/fQ15vcCnF2JMhsQF8Qi.'),
(6, 'つな', '$2y$10$g4lDLt4ra9HnF4ll5QtI8ONS3sg2NnwOYWAXybSYhfULJS17E7gGq'),
(8, 'はまぐっちゃん', '$2y$10$Tfr5OrnIUVI6ze.M0XS6iOXfC4vQ.QLfMPwKMkAd8Pgm3lEzPOlfG'),
(9, 'ひろのぶ', '$2y$10$sB1GBGjwcj/JxQgwKfMwFuJPiEVkCe56XQcYvFqQjcW8ePyCegO6.'),
(10, 'かな', '$2y$10$M2sYY89wGToYOvBp0KZeCOpz/2/Con97hxvriP6XIERCv0nWiMeHC'),
(11, 'じゅんや', '$2y$10$X.w8VUVyKm65G..tMoNzk.gTeV9dFHhizFNp90oKt.lJSgYNBcgze'),
(12, 'ああああ', '$2y$10$FGzVLr2mq/np.oMxMbFZx.e1SZLjG9qADdyfHwGKVdaXRYdsc9mS2');

-- --------------------------------------------------------

--
-- テーブルの構造 `weights`
--

CREATE TABLE `weights` (
  `w_id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `max_cal` int(11) NOT NULL,
  `max_p` int(11) NOT NULL,
  `max_f` int(11) NOT NULL,
  `max_c` int(11) NOT NULL,
  `u_name` varchar(32) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `weights`
--

INSERT INTO `weights` (`w_id`, `weight`, `max_cal`, `max_p`, `max_f`, `max_c`, `u_name`, `u_id`) VALUES
(3, 60, 2220, 150, 25, 348, 'ほげほげ', 0),
(4, 60, 1720, 150, 19, 237, '衣川　純弥', 0),
(5, 50, 1350, 125, 15, 178, 'かな', 0),
(6, 50, 1350, 125, 15, 178, 'かな', 0),
(7, 60, 1720, 150, 19, 237, 'じゅんや', 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `c_weight`
--
ALTER TABLE `c_weight`
  ADD PRIMARY KEY (`c_w_id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- テーブルのインデックス `weights`
--
ALTER TABLE `weights`
  ADD PRIMARY KEY (`w_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `c_weight`
--
ALTER TABLE `c_weight`
  MODIFY `c_w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルのAUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- テーブルのAUTO_INCREMENT `weights`
--
ALTER TABLE `weights`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
