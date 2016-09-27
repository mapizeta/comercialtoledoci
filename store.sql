-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-09-2016 a las 12:38:57
-- Versión del servidor: 5.5.49-0+deb8u1
-- Versión de PHP: 5.6.22-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
`id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `blog` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `title`, `blog`, `status`, `user_id`, `date_created`) VALUES
(1, 'Lorem Ipsum Dolor Sit Amet', '<h2><span style="font-family: Arial, Helvetica, sans; font-size: 11px; font-weight: normal; line-height: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare vulputate enim, sollicitudin interdum turpis imperdiet id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ac ante magna. Vestibulum vehicula ullamcorper odio condimentum tempor. Donec vulputate odio in nulla auctor iaculis. Ut id enim congue, congue velit vitae, accumsan dolor. In laoreet nec magna eget faucibus. Cras volutpat mi quam, a convallis quam dictum non. Proin vitae dui ut lectus semper hendrerit quis eget elit. Nam felis tellus, hendrerit eget sagittis sit amet, vestibulum quis orci. Sed condimentum, nunc quis varius elementum, nisl urna elementum magna, quis laoreet neque nisi quis risus. In tincidunt urna vel massa elementum laoreet. Sed tempor vehicula nibh, vitae volutpat tellus iaculis id. Proin a orci dolor. Phasellus ut metus eu sem posuere bibendum convallis vel odio.</span></h2>', 1, 1, '2014-02-22 23:10:26'),
(2, 'Blog Post #2', '<h2>This is a blog post</h2>\n<p>Lorem Ipsum Dolar Sit Amet</p>', 0, 0, '2014-02-22 23:10:26'),
(4, 'Info About XYZ New Line Of Products', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed tempor nibh. Donec mattis lacinia viverra. Pellentesque nec risus in elit dapibus vulputate. Aliquam viverra metus eget ullamcorper egestas. Aliquam et tortor augue. Aliquam id euismod risus. Etiam sit amet velit et nisl tempus tincidunt. Duis nec adipiscing sem, id tincidunt massa. Pellentesque eu est ut turpis accumsan blandit. Duis nec mi et lacus cursus commodo. Integer imperdiet arcu eu augue suscipit, ac egestas tortor rhoncus. Vivamus mollis lobortis malesuada.</p>', 1, 0, '2014-04-05 14:24:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `padre` int(11) DEFAULT '0'

) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `order`, `padre`) VALUES
(1, 'Washing Machines', 4, 0),
(2, 'Tumble Dryers', 5, 0),
(3, 'Televisions', 2, 0),
(5, 'Laptops', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `order`) VALUES
(1, 'This is image 1', 'image1.jpg', 0),
(2, 'This is image 2', 'image2.jpg', 1),
(3, 'This is image 3', 'image3.jpg', 0),
(4, 'This is image 4', 'image4.jpg', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `phone`, `email`, `logo`) VALUES
(1, 'Beko', '028 9756 4482', 'beko@service.com', 'beko.jpg'),
(2, 'Zanussi', '028 9756 1234', 'zanussi@service.com', 'zanussi.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'pending',
  `payment_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `order`
--

INSERT INTO `order` (`id`, `user_id`, `status`, `payment_confirmed`, `date_created`, `date_modified`) VALUES
(1, 1, 'shipped', 1, '2014-04-05 00:12:53', '2014-04-05 12:44:01'),
(2, 1, 'shipped', 1, '2014-04-05 01:21:52', '2014-04-05 02:13:53'),
(3, 1, 'confirmed', 1, '2014-04-05 12:41:59', '2014-04-05 12:43:46'),
(4, 1, 'confirmed', 1, '2014-04-05 14:18:08', '2014-04-05 14:21:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_product`
--

CREATE TABLE IF NOT EXISTS `order_product` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `quantity` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `price`, `quantity`) VALUES
(1, 2, 4.50, 1),
(2, 3, 4.50, 2),
(3, 5, 20.00, 3),
(4, 5, 20.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `page`
--

CREATE TABLE IF NOT EXISTS `page` (
`id` int(11) NOT NULL,
  `page_title` varchar(50) NOT NULL,
  `menu_title` varchar(25) NOT NULL,
  `show_in_menu` tinyint(1) NOT NULL,
  `content` text NOT NULL,
  `css` text NOT NULL,
  `url` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `page`
--

INSERT INTO `page` (`id`, `page_title`, `menu_title`, `show_in_menu`, `content`, `css`, `url`) VALUES
(1, 'About Us', 'Who We Are', 1, '<p>This is the about us page</p><p>This is extracontent</p>', 'p{\r\ncolor:red;\r\n}', 'about_us'),
(2, 'Terms & Conditions', 'Terms', 0, '<p>This is our terms and conditions information</p>', '', 'terms'),
(3, 'Privacy Policy', '', 0, '<p>This is our privacy policy.</p>', '', 'privacy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(11) NOT NULL,
  `sku` varchar(25) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `category` int(11) NOT NULL,
  `manufacturer` int(11) NOT NULL,
  `quantity` mediumint(9) NOT NULL DEFAULT '0',
  `image` varchar(40) DEFAULT NULL,
  `price` decimal(6,2) NOT NULL DEFAULT '0.00',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `sku`, `name`, `description`, `category`, `manufacturer`, `quantity`, `image`, `price`, `status`, `views`) VALUES
(2, 'ABC123', 'Product 1', 'This is the description', 1, 2, 0, '1.jpg', 4.50, 1, 0),
(3, 'BCD234', 'Product 2', 'This is the description', 1, 2, 5, '2.jpg', 4.50, 1, 0),
(4, 'QWE321', 'This is my Product', 'This is the description', 2, 2, 2, '3.jpg', 59.99, 1, 0),
(5, 'SKU1234', 'My First Form Added Product', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare vulputate enim, sollicitudin interdum turpis imperdiet id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ac ante magna. Vestibulum vehicula ullamcorper odio condimentum tempor. Donec vulputate odio in nulla auctor iaculis. Ut id enim congue, congue velit vitae, accumsan dolor. In laoreet nec magna eget faucibus. Cras volutpat mi quam, a convallis quam dictum non. Proin vitae dui ut lectus semper hendrerit quis eget elit. Nam felis tellus, hendrerit eget sagittis sit amet, vestibulum quis orci. Sed condimentum, nunc quis varius elementum, nisl urna elementum magna, quis laoreet neque nisi quis risus. In tincidunt urna vel massa elementum laoreet. Sed tempor vehicula nibh, vitae volutpat tellus iaculis id. Proin a orci dolor. Phasellus ut metus eu sem posuere bibendum convallis vel odio.</p>', 5, 1, 3, '1.jpg', 20.00, 1, 0),
(6, '', '', '', 0, 0, 0, '', 0.00, 0, 0),
(7, '', '', '', 0, 0, 0, '', 0.00, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_review`
--

CREATE TABLE IF NOT EXISTS `product_review` (
`id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `score` int(1) NOT NULL,
  `review` varchar(500) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_review`
--

INSERT INTO `product_review` (`id`, `name`, `date`, `score`, `review`, `productId`) VALUES
(1, 'Mark', '2014-04-08 23:00:00', 4, 'i gave this review a 4!jyefgugfagfkarufbarvbfnkacgfcakebgacgf  r b ary barybr r r ra krgubr  rbakurbga uybr akbk ruaybr ajryb aukyb akub akub akurb akyvba kr fub arkyhba kyufb rehjfabrkbfar frgfd fgadr ar gr g   dfgsrdegaregfar gfare fgare gfarga rg ar gard gar ga reg ar gar gargarg argargar egargfg hyjeyt jyi o p'' k ''l; hi yhdtsr g jkl /;i.ul yktjrhvg wfcd xfg hrjtk ylu;u kyjthrgefw geht rjkyuli; luiy,kmjnrthbgv ', 2),
(2, 'bob', '2013-11-20 00:00:00', 2, 'kh4brv q443r4r 5t54 tu4b tu24554 4 4 56 h456b k54b6456254kh6 b45 hj 54b 54 hjbhbj 5  bhjb b b h b5b b b b hjb 54hjb 54b hj423hj b4 bj5 hbjb jb j54 bj54 bj54 bj4b hj4 bhj423 bhj4b hj4hjb 54hjb 45h g423 jhv4 v45h 4yu5 45ut57858 rjfnksrjnrtnmrhvkjnhjdfngvmnrgjdfkmv', 4),
(4, 'Wilson', '2014-04-05 14:53:24', 4, 'This is a fair review of this product!', 5),
(5, 'Wilson', '2014-04-05 14:55:13', 4, 'This is a fair review of this product!', 5),
(6, 'Wilson', '2014-04-05 15:00:57', 4, 'This is a fair review of this product!', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `title` varchar(5) NOT NULL,
  `forename` varchar(15) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `password` varchar(64) NOT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '1',
  `address1` varchar(40) NOT NULL,
  `address2` varchar(40) DEFAULT NULL,
  `town` varchar(40) NOT NULL,
  `postcode` varchar(8) DEFAULT NULL,
  `county` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `title`, `forename`, `surname`, `email`, `phone`, `password`, `newsletter`, `address1`, `address2`, `town`, `postcode`, `county`, `country`, `date_created`, `admin`) VALUES
(1, 'Mr', 'Wilson', 'McCoubrey', 'mpizarro@amisoft.cl', '07835441951', '974a2be4c0f6db85c78778e367e905f6f4c1b3524505872ade3ddae1d9ef43b8', 0, '44 Magherahamlet Road', 'Address 2', 'Ballynahinch', 'BT24 8PZ', 'Down', 'UK', '2014-02-22 18:31:28', 1),
(4, 'Mr', 'Mark', 'Wilson', 'mark94wilson@aol.com', '442894439036', 'fa669f95dc83ccd9400fc939a68666720033d5859860f76edcd892e95afb9cc7', 0, '7 The Village', 'Templepatrick', 'Ballyclare', 'BT39 0AA', 'Co Antrim', '', '2014-03-13 19:53:51', 1),
(5, 'Mr', 'Wilson', 'McCoubrey', 'wilson@w-mccoubrey.co.uk', '07835441951', '29ef2918ac300330ddbe99af502d85e9dcf3c478d50f9ee06514d8164ea5e026', 0, '44 Magherahamlet Road', '', 'Ballynahinch', 'BT248PZ', 'Down', '', '2014-04-05 08:55:23', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `manufacturer`
--
ALTER TABLE `manufacturer`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `page`
--
ALTER TABLE `page`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product_image`
--
ALTER TABLE `product_image`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product_review`
--
ALTER TABLE `product_review`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `manufacturer`
--
ALTER TABLE `manufacturer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `order`
--
ALTER TABLE `order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `page`
--
ALTER TABLE `page`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `product_image`
--
ALTER TABLE `product_image`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `product_review`
--
ALTER TABLE `product_review`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
