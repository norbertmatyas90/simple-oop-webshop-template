-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Szerver verzió:               10.4.18-MariaDB - mariadb.org binary distribution
-- Szerver OS:                   Win64
-- HeidiSQL Verzió:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Adatbázis struktúra mentése a webshop_fashion.
CREATE DATABASE IF NOT EXISTS `webshop_fashion` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `webshop_fashion`;

-- Struktúra mentése tábla webshop_fashion. products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_img` varchar(50) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_color` varchar(50) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_sex` tinytext DEFAULT NULL,
  `product_type` varchar(50) DEFAULT NULL,
  `p_enable` int(11) NOT NULL DEFAULT 1 COMMENT '1: yes; 2:no ',
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

-- Tábla adatainak mentése webshop_fashion.products: ~30 rows (hozzávetőleg)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`product_id`, `product_img`, `product_name`, `product_size`, `product_color`, `product_quantity`, `product_price`, `product_sex`, `product_type`, `p_enable`) VALUES
	(1, 'man1.jpg', 'Urban', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 122, 37, 'Men', 'Dress', 1),
	(2, 'man2.jpg', 'Beach', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 51, 20, 'Men', 'Dress', 1),
	(3, 'man3.jpg', 'Street', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 75, 22, 'Men', 'Dress', 1),
	(4, 'man4.jpg', 'Fitt', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 17, 35, 'Men', 'Dress', 1),
	(5, 'man5.jpg', 'Business', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 98, 15, 'Men', 'Dress', 1),
	(6, 'man6.jpg', 'Slack Side', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 4, 27, 'Men', 'Dress', 1),
	(7, 'man7.jpg', 'Outdoor life', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 47, 17, 'Men', 'Dress', 1),
	(8, 'man8.jpg', 'Everywhere', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 8, 55, 'Men', 'Dress', 1),
	(9, 'man9.jpg', 'Casual', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 69, 18, 'Men', 'Dress', 1),
	(10, 'man10.jpg', 'Single', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 87, 33, 'Men', 'Dress', 1),
	(11, 'woman1.jpg', 'Country', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 25, 125, 'Women', 'Dress', 1),
	(12, 'woman2.jpg', 'Business', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 54, 80, 'Women', 'Dress', 1),
	(13, 'woman3.jpg', 'Unique', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 25, 41, 'Women', 'Dress', 1),
	(14, 'woman4.jpg', 'Chattily', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 14, 12, 'Women', 'Dress', 1),
	(15, 'woman5.jpg', 'Dressmaker', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 25, 25, 'Women', 'Dress', 1),
	(16, 'woman6.jpg', 'Allday', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 87, 54, 'Women', 'Dress', 1),
	(17, 'woman7.jpg', 'Salsa', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 112, 65, 'Women', 'Dress', 1),
	(18, 'woman8.jpg', 'Urban', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 54, 58, 'Women', 'Dress', 1),
	(19, 'woman9.jpg', 'Gardener', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 2, 47, 'Women', 'Dress', 1),
	(20, 'woman10.jpg', 'Sunday', 'S, M, L, XL', 'BLUE, GREEN, BLACK, YELLOW, WHITE', 14, 57, 'Women', 'Dress', 1),
	(21, 'acces1.jpg', 'Hat', '-', '-', 98, 44, 'Women', 'Accessary', 1),
	(22, 'acces2.jpg', 'Sunglass', '-', '-', 45, 20, 'Women', 'Accessary', 1),
	(23, 'acces3.jpg', 'Waist chain', '-', '-', 85, 44, 'Men', 'Dress', 1),
	(24, 'acces4.jpg', 'Sunglass', '-', '-', 74, 12, 'Men', 'Accessary', 1),
	(25, 'acces5.jpg', 'Hat', '-', '-', 20, 8, 'Men', 'Accessary', 1),
	(26, 'acces6.jpg', 'Shoulder bag', '-', '-', 32, 20, 'Men', 'Accessary', 1),
	(27, 'acces7.jpg', 'Watch', '-', '-', 12, 12, 'Men', 'Accessary', 1),
	(28, 'acces8.jpg', 'Bracelet', '-', '-', 54, 45, 'Women', 'Accessary', 1),
	(29, 'acces9.jpg', 'Ankel chain', '-', '-', 45, 36, 'Women', 'Accessary', 1),
	(30, 'acces10.jpg', 'Watch', '-', '-', 88, 22, 'Women', 'Accessary', 1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Struktúra mentése tábla webshop_fashion. users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL DEFAULT '0',
  `user_email` varchar(100) NOT NULL DEFAULT '0',
  `user_password` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Tábla adatainak mentése webshop_fashion.users: ~1 rows (hozzávetőleg)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
	(1, 'Admin', 'admin@gmail.com', '123456');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
