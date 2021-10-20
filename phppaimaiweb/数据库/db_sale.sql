-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2021-04-26 04:56:29
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sale`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `tb_business`
--

DROP TABLE IF EXISTS `tb_business`;
CREATE TABLE IF NOT EXISTS `tb_business` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_business`
--

INSERT INTO `tb_business` (`id`, `username`, `password`, `time`) VALUES
(1, '123456', 'e10adc3949ba59abbe56e057f20f883e', '2021-02-25 07:48:40');

-- --------------------------------------------------------

--
-- 表的结构 `tb_gonggao`
--

DROP TABLE IF EXISTS `tb_gonggao`;
CREATE TABLE IF NOT EXISTS `tb_gonggao` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '公告id',
  `title` varchar(200) NOT NULL COMMENT '公告标题',
  `content` text NOT NULL COMMENT '公告内容',
  `ggdate` varchar(20) NOT NULL COMMENT '公告时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_gonggao`
--

INSERT INTO `tb_gonggao` (`id`, `title`, `content`, `ggdate`) VALUES
(1, '试测试测试测试测试测试测试测试测试测试测试', '测试测试测试测试测试测试测试', '2021-02-25');

-- --------------------------------------------------------

--
-- 表的结构 `tb_sale`
--

DROP TABLE IF EXISTS `tb_sale`;
CREATE TABLE IF NOT EXISTS `tb_sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goodid` varchar(30) DEFAULT NULL,
  `goodprice` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT '0',
  `type` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_sale`
--

INSERT INTO `tb_sale` (`id`, `goodid`, `goodprice`, `user`, `type`) VALUES
(28, '36', '5499', 'xiaoming', 2),
(22, '35', '84', 'xiaoming', 2),
(27, '29', '5400', 'xiaoming', 2),
(24, '30', '500', 'xiaoming', 1),
(25, '35', '21', 'xiaoming', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tb_saleuser`
--

DROP TABLE IF EXISTS `tb_saleuser`;
CREATE TABLE IF NOT EXISTS `tb_saleuser` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `goodid` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_saleuser`
--

INSERT INTO `tb_saleuser` (`id`, `goodid`, `price`, `user`, `time`) VALUES
(83, '35', '21', 'xiaoming', '2021-04-26 11:19:21'),
(84, '35', '63', 'xiaoming', '2021-04-26 11:40:08'),
(85, '35', '84', 'xiaoming', '2021-04-26 11:40:20'),
(87, '29', '5200', 'xiaoming', '2021-04-26 12:22:02'),
(88, '29', '5400', 'xiaoming', '2021-04-26 12:22:24'),
(89, '36', '5499', 'xiaoming', '2021-04-26 12:45:31');

-- --------------------------------------------------------

--
-- 表的结构 `tb_study`
--

DROP TABLE IF EXISTS `tb_study`;
CREATE TABLE IF NOT EXISTS `tb_study` (
  `eaid` int(11) NOT NULL AUTO_INCREMENT,
  `typeid` int(11) NOT NULL,
  `EAname` varchar(255) NOT NULL,
  `jianjie` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `oneprice` varchar(255) NOT NULL,
  `lowprice` varchar(10) NOT NULL,
  `overtime` datetime NOT NULL,
  `overdate` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `introduction` varchar(1000) NOT NULL,
  `recommend` int(5) NOT NULL,
  `user` varchar(255) NOT NULL,
  `zt` varchar(10) DEFAULT '4',
  PRIMARY KEY (`eaid`),
  UNIQUE KEY `EAname` (`EAname`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_study`
--

INSERT INTO `tb_study` (`eaid`, `typeid`, `EAname`, `jianjie`, `brand`, `oneprice`, `lowprice`, `overtime`, `overdate`, `price`, `photo`, `introduction`, `recommend`, `user`, `zt`) VALUES
(30, 47, '测试', '100', '测试', '500', '100', '2021-04-30 07:19:00', '', '100', '/upimages/20210224232839.jpg', '测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试', 1, '123456', '1'),
(29, 49, ' 粤B8K9H6小汽车', '  苏GEU709汽车一辆', '野生', '5000', '200', '2021-04-30 07:19:00', '', '5000', '/upimages/20210224132009.jpg', '桑塔纳苏GEU709号汽车一辆，车辆型号SVW7182QQD,排量1781ml，识别号LSVT91339CN063181,非营运，黑色，发动机号272516，车显里程856km。制造年月：2012年06月15日，初次登记日期：2012年11月15日。保险终止日期2013年11月09日，检验有效期止2014年11月30日。', 1, '123456', '2'),
(35, 47, '12122222222222', '21', '21', '21', '21', '2021-05-01 07:24:00', '2021-05-01', '21', '/upimages/20210426072114.jpg', '21', 1, '123456', '1'),
(36, 51, '古董', ' 2020中国旅游集团发展论坛在北京举行。本次论坛以“文化引领，科技创新”为主题，由中国旅游研究院和中国旅游协会主办，凯撒集团承办', '清朝', '200000', '500', '2021-04-30 12:43:00', '2021-04-30', ' 4999 ', '/upimages/20210426124149.png', '清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶清乾隆粉青釉梅瓶', 1, '123456', '2');

-- --------------------------------------------------------

--
-- 表的结构 `tb_type`
--

DROP TABLE IF EXISTS `tb_type`;
CREATE TABLE IF NOT EXISTS `tb_type` (
  `typeid` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) DEFAULT NULL,
  `typedes` text,
  PRIMARY KEY (`typeid`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_type`
--

INSERT INTO `tb_type` (`typeid`, `typename`, `typedes`) VALUES
(53, '其他商品', '其他商品'),
(52, '家用电器', '家用电器'),
(51, '古董文玩', '古董文玩'),
(50, '房屋信息', '房屋信息'),
(49, '车辆信息', '车辆信息'),
(48, '生活用品', '生活用品'),
(47, '土地建筑', '土地建筑');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`userid`, `username`, `password`, `email`, `address`, `telephone`) VALUES
(96, 'xiaoming', 'e10adc3949ba59abbe56e057f20f883e', '123456@163.com', '18622222244', '13888886112'),
(95, 'xiaoming1', 'e10adc3949ba59abbe56e057f20f883e', '123456@163.com', '中国', '13888886611'),
(99, '123123', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '123', '213');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
