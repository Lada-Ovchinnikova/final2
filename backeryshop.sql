-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 12 2022 г., 23:59
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `backeryshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Торты'),
(5, 'Чизкейки');

-- --------------------------------------------------------

--
-- Структура таблицы `connects`
--

CREATE TABLE `connects` (
  `connect_id` int(10) UNSIGNED NOT NULL,
  `connect_user_id` int(10) UNSIGNED NOT NULL,
  `connect_token` char(32) NOT NULL,
  `connect_token_time` datetime NOT NULL,
  `connect_status` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `connects`
--

INSERT INTO `connects` (`connect_id`, `connect_user_id`, `connect_token`, `connect_token_time`, `connect_status`) VALUES
(3, 10, '71D9C3BBBC59304AA51570DC3BCE297C', '2021-12-18 22:17:51', 0),
(4, 10, 'B4283A4D449C07C9A46E91D9D1A5047D', '2021-12-19 14:12:14', 0),
(7, 14, 'B6796B5C229B0C82AC0BD115D3182E17', '2021-12-19 21:46:06', 0),
(8, 15, '27B1225A095E3BBD39A9D56C038369A6', '2021-12-19 22:53:37', 0),
(9, 15, 'D559840934374165875DB127778C7253', '2021-12-20 18:59:55', 0),
(49, 56, 'A77C173DD7DB85228279406037C22019', '2022-06-11 23:39:46', 1),
(50, 57, '8322CBBB7957243DC64E3873A723CCBE', '2022-06-11 23:40:33', 2),
(51, 56, 'CA858906CBCAB9BCCDC89C43823B507B', '2022-06-11 23:42:34', 1),
(52, 57, '7D5A22BED467DAB7791126D0E2E63797', '2022-06-11 23:45:21', 2),
(53, 56, '5CC7A833E4A6B7B4356709C12201D170', '2022-06-11 23:45:49', 1),
(54, 57, '13094402D42C1EB16CCDDB3B52B95426', '2022-06-11 23:56:06', 2),
(55, 57, 'ABD02DC9E257D41B71DAA9B0639A5959', '2022-06-12 00:45:22', 2),
(56, 56, '75EE972429A887644B408A51B4569EA2', '2022-06-12 00:52:08', 1),
(57, 57, '7ACBB4E89415336BC4DD4990176275A8', '2022-06-12 01:07:11', 2),
(58, 56, '755ED11937751A4127018462B1C20E7D', '2022-06-12 03:24:33', 1),
(59, 57, '2EEA29D8658568AE963BC1720EDDE607', '2022-06-12 03:25:11', 2),
(60, 56, 'C379B7BA898D898408B493D7C90EBDB3', '2022-06-12 03:28:08', 1),
(61, 57, '79CE5A49E93D67E847617202456BE8DE', '2022-06-12 14:56:55', 2),
(62, 56, '22B2731C89E62C9699930844DA1DDA57', '2022-06-13 01:00:37', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_product_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_user_id` int(10) UNSIGNED DEFAULT NULL,
  `order_name` int(13) DEFAULT NULL,
  `order_product_name` varchar(255) DEFAULT NULL,
  `order_product_qty` smallint(5) UNSIGNED DEFAULT NULL,
  `order_product_price` int(10) UNSIGNED DEFAULT NULL,
  `order_product_total_price` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `order_user_id`, `order_name`, `order_product_name`, `order_product_qty`, `order_product_price`, `order_product_total_price`) VALUES
(9, 56, 1539, 'Торт Фисташковый с малиной', 2, 1690, 1690),
(10, 56, 696, 'Торт Фисташковый с малиной', 2, 1690, 1690);

-- --------------------------------------------------------

--
-- Структура таблицы `producers`
--

CREATE TABLE `producers` (
  `producer_id` int(10) UNSIGNED NOT NULL,
  `producer_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `producers`
--

INSERT INTO `producers` (`producer_id`, `producer_name`) VALUES
(1, 'Mirel'),
(2, 'Фили Бейкер');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_sku` char(13) DEFAULT NULL,
  `product_desc` text NOT NULL,
  `product_count` smallint(5) UNSIGNED DEFAULT NULL,
  `product_price` int(11) UNSIGNED DEFAULT NULL,
  `product_weight` smallint(5) UNSIGNED DEFAULT NULL,
  `product_producer_id` int(10) UNSIGNED DEFAULT NULL,
  `product_category_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_sku`, `product_desc`, `product_count`, `product_price`, `product_weight`, `product_producer_id`, `product_category_id`) VALUES
(1, 'Торт \"Кассата с марципаном\"', 'cak001', 'Между двумя тонкими слоями бисквита расположен толстый слой начинки на основе сыра Рикотта. Сверху торт залит марципаном и украшен цукатами из апельсина и вишней в сиропе', 10, 1300, 1320, 2, 1),
(2, 'Торт Фисташковый с малиной', 'cak002', 'Солоноватый вкус фисташки с нежным муссом и спелой малиной - невероятно сочный торт! Сверху украшен стружкой белого шоколада.  ', 5, 1690, 1800, 1, 1),
(10, '11', '11', '11', 11, 11, 11, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_login` varchar(255) NOT NULL,
  `user_password` char(32) NOT NULL,
  `user_phone` varchar(30) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_dob` date DEFAULT NULL,
  `user_gender_id` tinyint(1) UNSIGNED DEFAULT NULL,
  `user_status` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_login`, `user_password`, `user_phone`, `user_email`, `user_dob`, `user_gender_id`, `user_status`) VALUES
(1, 'admin', 'admin', '123', '79212212121', 'admin@test.com', '2001-10-30', 1, 0),
(2, 'Антон', 'anton-1', 'password1', '8-111-111-11-11', 'anton@mail.ru', '2000-01-01', 1, 0),
(3, 'Жанна', 'жанна-2', 'password2', '8-111-111-11-12', 'zhanna@mail.ru', '2000-01-02', 2, 0),
(4, 'Леша', 'антон-3', 'password3', '8-111-111-11-13', 'lesha@mail.ru', '2000-01-03', 1, 0),
(5, 'Олег', 'жанна-4', 'password4', '8-111-111-11-14', 'oleg@mail.ru', '2000-01-04', 1, 0),
(6, 'Катя', 'жанна-5', 'password5', '8-111-111-11-15', 'katya@mail.ru', '2000-01-05', 2, 0),
(7, NULL, 'newLogin', '3f12921987082d012147ad89f7ea1fd8', NULL, 'newLogin@test.ru', NULL, NULL, 0),
(10, NULL, 'testLog', '797e3fc4867b7bd6abd6882e4f8e2753', NULL, 'testLog@mail.ru', NULL, NULL, 0),
(11, NULL, 'testLog1', '797e3fc4867b7bd6abd6882e4f8e2753', NULL, 'testLog1@mail.ru', NULL, NULL, 0),
(14, NULL, 'Flogin', '797e3fc4867b7bd6abd6882e4f8e2753', NULL, 'nfnvn@mail.ru', NULL, NULL, 0),
(15, NULL, 'asdfg', '797e3fc4867b7bd6abd6882e4f8e2753', NULL, 'testLcccog@mail.ru', NULL, NULL, 0),
(56, NULL, '123', '202cb962ac59075b964b07152d234b70', NULL, '123@mail.ru', NULL, NULL, 1),
(57, NULL, '1234', '81dc9bdb52d04dc20036dbd8313ed055', NULL, '1234@mail.ru', NULL, NULL, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `connects`
--
ALTER TABLE `connects`
  ADD PRIMARY KEY (`connect_id`),
  ADD KEY `connect_user_id` (`connect_user_id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_user_id` (`order_user_id`);

--
-- Индексы таблицы `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`producer_id`),
  ADD KEY `producer_id` (`producer_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_sku` (`product_sku`),
  ADD KEY `product_category_id` (`product_category_id`),
  ADD KEY `product_producer_id` (`product_producer_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_login` (`user_login`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_phone` (`user_phone`),
  ADD KEY `user_gender_id` (`user_gender_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `connects`
--
ALTER TABLE `connects`
  MODIFY `connect_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `producers`
--
ALTER TABLE `producers`
  MODIFY `producer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `connects`
--
ALTER TABLE `connects`
  ADD CONSTRAINT `connects_ibfk_1` FOREIGN KEY (`connect_user_id`) REFERENCES `users` (`user_id`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_user_id`) REFERENCES `users` (`user_id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `categories` (`category_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_producer_id`) REFERENCES `producers` (`producer_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
