-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-10 11:05:18
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talks_qq`
--

-- --------------------------------------------------------

--
-- 表的结构 `qunliao`
--

CREATE TABLE `qunliao` (
  `id` int(11) NOT NULL,
  `message` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT '明文',
  `message_mac` varchar(1000) CHARACTER SET utf8 DEFAULT NULL COMMENT 'hash函数摘要mac值',
  `k1` varchar(50) DEFAULT NULL,
  `mANDmac` varchar(1000) CHARACTER SET utf8 DEFAULT NULL COMMENT '明文和mac',
  `miwen` varchar(2000) CHARACTER SET utf8 DEFAULT NULL COMMENT '密文',
  `k2` varchar(50) DEFAULT NULL,
  `sender` varchar(1000) CHARACTER SET utf8 DEFAULT NULL COMMENT '自己发送',
  `base64_message_len` int(10) DEFAULT NULL,
  `message_mac_len` int(10) DEFAULT NULL,
  `t_div` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='id为1和id为2的用户的消息存储表';

--
-- 转存表中的数据 `qunliao`
--

INSERT INTO `qunliao` (`id`, `message`, `message_mac`, `k1`, `mANDmac`, `miwen`, `k2`, `sender`, `base64_message_len`, `message_mac_len`, `t_div`) VALUES
(249, '热热', NULL, NULL, NULL, NULL, NULL, '小张', NULL, NULL, '2017-06-10 18:20:18'),
(250, '111', NULL, NULL, NULL, NULL, NULL, '小张', NULL, NULL, '2017-06-10 18:20:20'),
(251, '11112', '3cf39341502e476a70cb1b19bb4872aeed9602c3ffb99bbdfc5469e3e0dc533aed0f5304b88245362cc1d3ba9465cef8502e5a9c9f790f8f48cf318be7abf6e0', '123', 'MTExMTI=3cf39341502e476a70cb1b19bb4872aeed9602c3ffb99bbdfc5469e3e0dc533aed0f5304b88245362cc1d3ba9465cef8502e5a9c9f790f8f48cf318be7abf6e0', 'F1jOfnaav4HXot8GNpA2209aMGmhZWMpjuKm2o0KcIachUCcZDnbVlIXiWtJQkNeSkPfgdCyDqWaFhkRzYg7kztvFoLntklDAWYtWeIWYPttAP5S02wdrWzxcEOqyebYmM+K1m4lijScyoYm/uPNZnTgnoRxZUTW+oQG8bRzWZN/klACPH5MMNVdR3CUPCvU', '12345678', '小张', 8, 128, '2017-06-10 18:20:33'),
(247, '大大大', 'e4b36faebf122b318eedb5107ee40c0f477b1155432ab32c201048eb095c8f4a870a744a66de5c46691fe4425695e732c17062a24f9d51c9e1bf9fbd88dfc63f', '111', '5aSn5aSn5aSne4b36faebf122b318eedb5107ee40c0f477b1155432ab32c201048eb095c8f4a870a744a66de5c46691fe4425695e732c17062a24f9d51c9e1bf9fbd88dfc63f', 'HHeVKK8+mhDM3NydvE/MClWnGPOBHEiRhvOXlQapFN1JXLN5rG2LEs1tFGhGmSkYbtlnC4tfK+ZBCi0RDK3xmYZ+huUeDCqgF0/s/F8tUJBP/ZD15vYxTzpED3vrwXX9Ukd1mFJYs1Znq9Y0gUwQgGKRxdszzCv94u2BLSvWXE4e/7YwO9F68SdX6A0zm1GUHq3BRZmya/o=', '11111111', '小张', 12, 0, '2017-06-10 18:09:57'),
(248, '大大大', 'e4b36faebf122b318eedb5107ee40c0f477b1155432ab32c201048eb095c8f4a870a744a66de5c46691fe4425695e732c17062a24f9d51c9e1bf9fbd88dfc63f', '111', '5aSn5aSn5aSne4b36faebf122b318eedb5107ee40c0f477b1155432ab32c201048eb095c8f4a870a744a66de5c46691fe4425695e732c17062a24f9d51c9e1bf9fbd88dfc63f', 'rjRwAH4MKlAHNj8BZtYyW+1J5Hbuuq/lc8vFyYdD13OmlSnuHWzxs/wJgHdYRPLB1oV1yf3on1K666b19fOf7j6+ZRj8+X3bsGYeuwlYrca1qH7ndnSVPZ+sUOd1tkInrIeuil/Mco8JQbk9ViZr4LJOS0sWouipPm46lC3tnw5G/ubEotqZVoD68Klcm5M5xM0kyLMtK50=', '11111111', '小张', 12, 128, '2017-06-10 18:11:27'),
(252, 'ddd', NULL, NULL, NULL, NULL, NULL, '小张', NULL, NULL, '2017-06-10 18:29:51'),
(253, '你好', '0f5d402f35fdae27f449992261405944461599d524796096370c0e2ea0b5d0cb76ea698bd72b62b03f829007fab075a7cf072ccbfcd1f8316df9bd353f080003', '111', '5L2g5aW90f5d402f35fdae27f449992261405944461599d524796096370c0e2ea0b5d0cb76ea698bd72b62b03f829007fab075a7cf072ccbfcd1f8316df9bd353f080003', '+1U9YnzqOtTf/i+2/RyJcVtCqMo5ulVucpTdv8vcMs0jMIo2KHOWvLJvtQDN7DOBY9aTZlHPxQcr9AxHvhY0NjQT4mxkp5PK8QjDr/9plKwxwznOsWRQgG0AsoAx5Yvpdmsw/Mhzb1s0v+VypeVaYj4aeNExFEGQhmOnoHN4bmZI1E8LdtRKsa1xoageBIg4', '11111111', '小张', 8, 128, '2017-06-10 18:30:03'),
(254, '年后的横扫地方', '2f87a79fe412efa39967299d6feb0b7b9a2e1a5eecaaa91ea891b97500b5fec620dfa012979c7cc6265f9dd0c207b3d87abc2280e6b7efaef186c8317e9dba96', '12345678', '5bm05ZCO55qE5qiq5omr5Zyw5pa52f87a79fe412efa39967299d6feb0b7b9a2e1a5eecaaa91ea891b97500b5fec620dfa012979c7cc6265f9dd0c207b3d87abc2280e6b7efaef186c8317e9dba96', 'Xb2OLSqz0NeZtwoyC3IQkvbvCYfaccC94vf0F8hVMIGGGvRmaaiB8T25YyDkLrQdbWaN2bLQyqhF7o99iKnbm2owloeui2fhiCNhRL+Qfl1S+ZM3UWvn9AidmhKheJ3gluk/Ikb+3aeCIMMJl1eb5xCnDQ7rdSbdk3ezE6/MQVWTl8UDI4ozXkVdxBmjDUIYI6LHtxZ+Ya9ruMfj8DI5yKXe4tuDzSe+', '12345678', '小张', 28, 128, '2017-06-10 18:30:37'),
(255, '发打发士大夫', 'e4e66fac8db2af180656c6eb00a2f19aae62944483bbb406817e3d27d005a7216032c90d99eaf783105a03e4ceb8076a2ed627738850c1189d75cfa52fb952db', '22222222', '5Y+R5omT5Y+R5aOr5aSn5aSre4e66fac8db2af180656c6eb00a2f19aae62944483bbb406817e3d27d005a7216032c90d99eaf783105a03e4ceb8076a2ed627738850c1189d75cfa52fb952db', 'tDNm1G6qjdlzIWRdmtty6c6cf0sgBX+45FBMvvIjtDl4eopKPY/qzTWx9twAOsRnNuM/h5MfMkrlFf2AoyynFykm1GS9S+qBL6l09CcxJOaFvgHSAtVBsNH1Kb/LIMn67DU+elJiGYwo9yU9+RDjwBZCiNbMU6v6EdvBfNOTnCBUXf6frjHPRyotlC3nwWIw3oDHtMy+HtbxJ76z80A10g==', '22222222', '小张', 24, 128, '2017-06-10 18:40:48'),
(256, '你设计费科三', NULL, NULL, NULL, NULL, NULL, '小张', NULL, NULL, '2017-06-10 18:42:19'),
(257, '顶顶顶顶', 'f3fa1aff5f4807f7c3c2ab4de0c45eefb9ed614186832ecd5857de9594e6ea0337593f246a7aafc271d02e8dffdb5ef67a7b7041a94286ccd78053e44b418700', '12345678', '6aG26aG26aG26aG2f3fa1aff5f4807f7c3c2ab4de0c45eefb9ed614186832ecd5857de9594e6ea0337593f246a7aafc271d02e8dffdb5ef67a7b7041a94286ccd78053e44b418700', '7QEVv/Z0xweqAmqSSKihRzrUIxcnTXDqyKgYYAz2HMzzb8mE27uU0bKbaG+K1He6xA5NZVl0xpnTxxib2dk/5Kd9vvP4IG8qsdAYLQ78MHekZDe2K2afH0WswHD15c0izEDJFBSABqBDkbQ080Y426ff9jUt51GDW/kquaOlAYVQZ9vUaLvRWZhDfYlCLsXJ2JXW1ZAjNHY=', '12345678', '小张', 16, 128, '2017-06-10 18:42:30'),
(258, '你好', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2017-06-10 18:43:22'),
(259, '你好', NULL, NULL, NULL, NULL, NULL, '小蜜蜂', NULL, NULL, '2017-06-10 18:43:33'),
(260, '你好', NULL, NULL, NULL, NULL, NULL, '皮卡丘', NULL, NULL, '2017-06-10 18:44:47'),
(261, '我是皮卡丘', NULL, NULL, NULL, NULL, NULL, '皮卡丘', NULL, NULL, '2017-06-10 18:44:54'),
(262, 'wozhidao', NULL, NULL, NULL, NULL, NULL, '小蜜蜂', NULL, NULL, '2017-06-10 18:44:59'),
(263, '你知道我是谁吗', '6b2cc71067222dfd84af628e08f4c20d002070cf261ac99c37a9ba540a94f4d09297f28f6b522a20fc0831bc9f91a178374e4e5951b393ba1e4c2c3096677467', 'qwer', '5L2g55+l6YGT5oiR5piv6LCB5ZCX6b2cc71067222dfd84af628e08f4c20d002070cf261ac99c37a9ba540a94f4d09297f28f6b522a20fc0831bc9f91a178374e4e5951b393ba1e4c2c3096677467', 'ZKOWxR4bvcmS+m3RlMiDOpSuVJM1czlOrC+Ihrk9wBCBYO1rte1XOGQ+mop8c6bd8FRuSY0TDVCe7E61sSQk8DydeoX3Omzs9cdFQuU8dewgtLInW/AIEM9GnmLDP3enZFkyg2A+NDNDwhSmYsBfc9BgTB8f8H8WeZJuwO1T25z+rwmVR+PPbf08FTlhyPTH6yth1lpxbyk99H+N8OGPRU02GQ+B81Hu', 'qwertyui', '小蜜蜂', 28, 128, '2017-06-10 18:45:20'),
(264, '你好密封', NULL, NULL, NULL, NULL, NULL, '小蜜蜂', NULL, NULL, '2017-06-10 18:53:24'),
(265, '你好皮卡丘', '4498601bea282891da20dc5f43708cc5f02cf9a7f637fa08f41e40c7f626431619e5b750f3010b518250f98796a32356bf9827c06768028ef4330dc673f182a1', '1234qwer', '5L2g5aW955qu5Y2h5LiY4498601bea282891da20dc5f43708cc5f02cf9a7f637fa08f41e40c7f626431619e5b750f3010b518250f98796a32356bf9827c06768028ef4330dc673f182a1', 'V8no7ulxRtOWAo9yMBS7WDNu+QadwNIbWw/SCIPf8ggRkrj9kkcQyEuG66aH9Bv0pzJ8f5djHTOIsFyiefdAGIxFwqEI4lziE4jQhVp4mVpgHniH7bHOV0yxTDfr37+FH0zSYsbh9tiVFLLVwI3dVyZeYZVSf76eGH1Q8HI3lSp/A9fGbK6nk71CVF7T7NamLLtRhEbsFU/lzCwyJDKckg==', 'qwerasdf', '小蜜蜂', 20, 128, '2017-06-10 18:53:54'),
(266, '大家好我是张继科', NULL, NULL, NULL, NULL, NULL, 'zhangJ.k', NULL, NULL, '2017-06-10 18:55:50'),
(267, 'ooo', NULL, NULL, NULL, NULL, NULL, '皮卡丘', NULL, NULL, '2017-06-10 18:55:54'),
(268, '验证张继科', 'cd4882a4f83f36bbab14a829d783fb920c83c8b18578f260cc682aedc41c7fddb4c0d8f6f1f11f977c946a467c2aa0deeae5865a9e93aef871fc297180b306e4', '???', '6aqM6K+B5byg57un56eRcd4882a4f83f36bbab14a829d783fb920c83c8b18578f260cc682aedc41c7fddb4c0d8f6f1f11f977c946a467c2aa0deeae5865a9e93aef871fc297180b306e4', 'lC1HEQ82wqUyHn3eGdB8RIlzLiF92iXZDC0tei1lV3f8ZJpRj7A11oSbM/IubBVSwKmkXmuDtJQRWY4nqJB3BMtE6h7loOXYgnuLVRbomlzjDHIRpF1l03y+bp8d/tYSJs5sdNfexfaTL8l7J4KhEGGcJ0jErt9nIK1l85N0GMzyNo0JcY25am2OuFoqKLqYYNYRg2U4iU3nP1yIjazRYQ==', 'qwer1234', 'zhangJ.k', 20, 128, '2017-06-10 18:56:49'),
(269, '我是马龙', NULL, NULL, NULL, NULL, NULL, '马龙', NULL, NULL, '2017-06-10 19:00:40'),
(270, '我是正的马龙', '7f3387cb14f09e72d47bb75bd176442a0f14118129c0d6a8f1359f01e0ee3f07ed27b6fb56ec56db1875d26becbf7b5dc7facb103f49b48e6ac6136b5267d6a3', '??', '5oiR5piv5q2j55qE6ams6b6Z7f3387cb14f09e72d47bb75bd176442a0f14118129c0d6a8f1359f01e0ee3f07ed27b6fb56ec56db1875d26becbf7b5dc7facb103f49b48e6ac6136b5267d6a3', 'Vp/wVQSoAC5EX6XVM1L4fdRBjgIePyA/YmP/oP9sCt9Ovl2kLbpY8SCeL0epHeGo2aHGrnYAOoPzwujArpPNMPTr1jGU2INy+5EMZ8zJLMIKBdyB35us2z4dhdwZ3NlF7hu601P4WDp7JYC/j4GTZsNr4VP6euX/lFIYZgc/UQZpmHn4xCFePlmI2l83sXagqzJuJp5S2ArCYeAxQEBCrg==', 'malong12', '马龙', 24, 128, '2017-06-10 19:02:05');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `qq_num` char(50) DEFAULT NULL,
  `password` char(200) CHARACTER SET utf8 DEFAULT NULL,
  `nick_name` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `age` int(50) DEFAULT NULL,
  `sex` char(50) CHARACTER SET utf8 DEFAULT NULL,
  `character` char(200) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='用户列表';

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `qq_num`, `password`, `nick_name`, `age`, `sex`, `character`) VALUES
(1, '111', '111', '小张', 21, '男', '有所选择'),
(2, '222', 'root', '小明', 22, '女', '有所坚持'),
(3, '333', '333', '盛夏果实', 22, '女', '曾经的你已不再记忆'),
(4, '444', '444', '小芳', 25, '男', '站在别人的雨季，淋湿自己空弹一出戏.....'),
(7, '1231', '1231', '小蜜蜂', NULL, NULL, '心若向阳无畏悲伤'),
(5, '98765', '98765', '皮卡丘', NULL, NULL, '你若盛开，清风自来'),
(6, '15708', '15708', '吉尼龟', NULL, NULL, '那些你以为过不去的过去终将过去'),
(8, '1234', '1234', 'zhangJ.k', NULL, NULL, '这感觉很好'),
(9, '123321', '123', '马龙', NULL, NULL, '中国加油');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qunliao`
--
ALTER TABLE `qunliao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `qunliao`
--
ALTER TABLE `qunliao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
