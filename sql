
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 25 2022 г., 14:33
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
(62, 56, '22B2731C89E62C9699930844DA1DDA57', '2022-06-13 01:00:37', 1),
(63, 57, 'E62C5CE6E657A209B93D5AA96BC62E05', '2022-06-15 21:26:24', 2),
(64, 56, '4108C572436D075ECD4506CC95235DB5', '2022-06-15 21:27:54', 1),
(65, 57, '08BE4E087C333C669934102EB9EBE3A5', '2022-06-15 22:09:34', 2),
(66, 56, 'D65459E8A8B3DB8B632D9C0554E82332', '2022-06-15 22:21:40', 1),
(67, 57, '6918E450E55508D260A0A508C9C60CBC', '2022-06-18 16:48:32', 2),
(68, 56, '8E1315564037E19EC8B5D9AE4A4ACECD', '2022-06-18 17:03:58', 1),
(69, 57, 'B4C753193AAB3026920898D9553C6C81', '2022-06-18 17:04:31', 2),
(70, 56, '036ABD80D31BB0D6EC3861C74D3C66BC', '2022-06-18 17:04:45', 1),
(71, 56, '22E1BA04469EA15AEAB5428132D2AD6A', '2022-06-19 22:54:45', 1),
(72, 56, '4447AC9858B628B5096016DD17B27B76', '2022-07-11 18:37:42', 1),
(73, 57, 'B2E24D675DC12435057755AE34E6DC9B', '2022-07-17 02:54:36', 2),
(74, 57, '9D55B27759EC787189BD974AEB7BBCDB', '2022-07-21 21:59:32', 2),
(75, 57, '31D16DAE4D376D6AA1A2DB6D68E9376D', '2022-07-25 04:30:47', 2),
(76, 57, 'ECEC3A875A542CB71D357B7D49835C21', '2022-07-30 09:43:55', 2),
(77, 57, '4E643887D046CC8BC4722B286DBE7379', '2022-08-04 18:25:33', 2),
(78, 57, 'A2C4D7427DDCDD291E4E8003DB97850A', '2022-08-07 16:33:24', 2),
(79, 57, 'B25CE5D73D50CC804698EC53E5330869', '2022-08-10 10:20:21', 2),
(80, 57, '245BA121CAC853629E499E6211B1B5A3', '2022-08-10 13:41:48', 2),
(81, 57, 'B83DBADB031ECD6C5A8271751C478A76', '2022-08-10 13:47:02', 2),
(82, 57, '457E7D7D4B6EDB7CD3146C9655022BA5', '2022-08-15 17:28:53', 2),
(83, 57, '760154558B355626994998AE8D516AA3', '2022-08-15 18:36:25', 2);

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
(10, 56, 696, 'Торт Фисташковый с малиной', 2, 1690, 1690),
(11, 57, 696777, 'Торт Фисташковый с малиной', 1, 1690, 1690),
(12, 57, 696777, 'Торт new', 1, 1690, 1690);

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
  `product_category_id` int(10) UNSIGNED DEFAULT NULL,
  `product_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_sku`, `product_desc`, `product_count`, `product_price`, `product_weight`, `product_producer_id`, `product_category_id`, `product_img`) VALUES
(1, 'Торт ', 'cak001', 'Между двумя тонкими слоями бисквита расположен толстый слой начинки на основе сыра Рикотта. Сверху торт залит марципаном и украшен цукатами из апельсина и вишней в сиропе ', 10, 1300, 1320, 2, 1, 'product_cak001.jpg'),
(2, 'Торт Фисташковый с малиной', 'cak002', 'Солоноватый вкус фисташки с нежным муссом и спелой малиной - невероятно сочный торт! Сверху украшен стружкой белого шоколада.  ', 5, 1690, 1800, 1, 1, 'product_cak002.jpg'),
(10, 'Чизкейк Арахисовый кранч', 'cheesecake001', 'Способ разморозки: Замороженный продукт разморозить при температуре +2&deg;С/+5&deg;С в течение 2-3 часов до полной разморозки.', 11, 1890, 1600, 2, 5, 'product_cheesecake001.jpg'),
(11, 'Торт Меренгата', 'cak003', 'Tорт Меренгата Два слоя безе и печенья с полуфреддо, покрытые безе зернами.', 5, 1790, 1000, 1, 1, 'product_cak003.jpg'),
(12, 'Чизкейк С клубникой', 'cheesecake002', 'Нежнейший чизкейк из творожного сыра на сливочно-песочном корже, усыпанный ягодами свежей клубники, выращенной под солнцем в естественных климатических условиях.', 22, 1230, 1560, 2, 5, 'product_cheesecake002.jpg'),
(13, 'Торт Пина Колада', 'cak005', 'Изысканный торт из слоев кокосового бисквита, крема на основе белого шоколада, взбитых сливок и сочного слоя ананасового конфитюра с кусочками ананаса. Сверху торт украшен обжаренным кокосовым кранчем.', 7, 1710, 2100, 2, 1, 'product_cak005.jpg'),
(14, 'Торт Морковный', 'cak007', 'Классический морковный торт.  Вкуснейшие коржи с добавлением моркови, ананаса, грецкого ореха и изюма. Плотные, хорошо пропитаны. Крем сливочный, мягкий, нежирный. К сожалению, торт не имеет ничего общего с диетой, зато он настоящий друг хорошего настроения и отличного вкуса. Ну удивление, его любят не только взрослые, но и дети)', 8, 1790, 2320, 1, 1, 'product_cak007.jpg'),
(15, '', '9', '', 9, 9, 9, 1, 1, 'product_none.png'),
(19, '23', '23', '23', 23, 23, 23, 1, 1, 'product_23.jpg');

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
(57, 'Anton', '1234', '81dc9bdb52d04dc20036dbd8313ed055', '8-911-911-11-11', '1234@mail.ru', NULL, NULL, 2);

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
  MODIFY `connect_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `producers`
--
ALTER TABLE `producers`
  MODIFY `producer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
