
CREATE DATABASE `TimboTronics`;

USE `TimboTronics`;

DROP TABLE IF EXISTS `GameRanking`;

CREATE TABLE `GameRanking` (
`gameRankingId` int(11) NOT NULL AUTO_INCREMENT,
`game` varchar(100) NOT NULL,
`score` int(11) NOT NULL,
PRIMARY KEY (`gameRankingId`)
);


insert  into `GameRanking`(`gameRankingId`,`game`,`score`) values
(1,'A Good Snowman Is Hard To Build',8);


DROP TABLE IF EXISTS `PasswordReset`;

CREATE TABLE `PasswordReset` (
`code` varchar(20) NOT NULL,
`email` varchar(100) NOT NULL
);


insert  into `PasswordReset`(`code`,`email`) values
('2a8629fbace8f658dff2','huxtable.tim30@gmail.com'),
('644d73d5e6255989a1da','huxtable.tim30@gmail.com'),
('0729b76ed4e67e2cc2c2','johnmlee1204@gmail.com'),
('3eb49d277eedc9c05fdf','huxtable.tim30@gmail.com'),
('35b09d152e84cfa2ffc3','johnmlee1204@gmail.com'),
('10f5747291482c32e0d2','johnmlee1204@gmail.com'),
('7fcd447f0b52dee76412','johnmlee1204@gmail.com'),
('82fcdaaf47359096c9ed','huxtable.tim30@gmail.com'),
('4f1e3fad7d7c7ca4a599','huxtable.tim30@gmail.com'),
('2a808db7c82096a20414','huxtable.tim30@gmail.com');


DROP TABLE IF EXISTS `Price`;

CREATE TABLE `Price` (
`price` float DEFAULT NULL,
`date` datetime NOT NULL,
`item` varchar(1000)  NOT NULL,
`link` varchar(200)  NOT NULL
);


insert  into `Price`(`price`,`date`,`item`,`link`) values
(149.44,'2022-06-11 18:50:54','beyerdynamic DT 990 Pro 250 ohm Over-Ear Studio Headphones For Mixing, Mastering, and Editing','https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3'),
(149.44,'2022-06-11 19:10:21','beyerdynamic DT 990 Pro 250 ohm Over-Ear Studio Headphones For Mixing, Mastering, and Editing','https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3'),
(149.44,'2022-06-11 19:10:39','beyerdynamic DT 990 Pro 250 ohm Over-Ear Studio Headphones For Mixing, Mastering, and Editing','https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3'),
(149.44,'2022-06-11 19:10:51','beyerdynamic DT 990 Pro 250 ohm Over-Ear Studio Headphones For Mixing, Mastering, and Editing','https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3'),
(139.88,'2022-06-12 16:14:23','beyerdynamic DT 990 Pro 250 ohm Over-Ear Studio Headphones For Mixing, Mastering, and Editing','https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3'),
(139.88,'2022-06-12 16:20:38','beyerdynamic DT 990 Pro 250 ohm Over-Ear Studio Headphones For Mixing, Mastering, and Editing','https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3'),
(138,'2022-06-19 20:28:25','beyerdynamic DT 990 Pro 250 ohm Over-Ear Studio Headphones For Mixing, Mastering, and Editing','https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3'),
(138,'2022-06-19 20:30:57','beyerdynamic DT 990 Pro 250 ohm Over-Ear Studio Headphones For Mixing, Mastering, and Editing','https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3'),
(138.88,'2022-06-19 20:31:59','beyerdynamic DT 990 Pro 250 ohm Over-Ear Studio Headphones For Mixing, Mastering, and Editing','https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3'),
(0,'2022-06-19 21:38:25','beyerdynamic DT 990 Pro 250 ohm Over-Ear Studio Headphones For Mixing, Mastering, and Editing','https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3'),
(149,'2022-07-07 21:39:51','beyerdynamic DT 990 Pro 250 ohm Over-Ear Studio Headphones For Mixing, Mastering, and Editing','https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3');


DROP TABLE IF EXISTS `Session`;

CREATE TABLE `Session` (
`userId` int(11) NOT NULL,
`sessionKey` varchar(64)  NOT NULL,
`lastActivity` datetime NOT NULL DEFAULT current_timestamp()
);


insert  into `Session`(`userId`,`sessionKey`,`lastActivity`) values
(5,'5cd8ac89e23e31161179da7f47d082e52fc6ea3646c8e2a8dcb1e8afa4a960c5','2022-07-16 06:38:18'),
(5,'3821bd1d3ad32383c9732460f5e11b431a307e15c18fd19c0c7c0f76ada8a365','2022-07-16 20:04:43'),
(8,'36a905f5004480897421261f35124df8626d0eee69a29df910f9ebb2140c5dd5','2022-07-16 22:32:31'),
(22,'543d82645e28fc28c6382d6e62003bbc1ffa4124c92b937d6a5d943f039d5ae7','2022-07-17 05:29:59'),
(22,'b2cb6c0ee3ef1375ee20eecbe716728b4dbfcc481d2c085170783b65d35b5486','2022-07-17 17:47:54'),
(5,'20a62403e17ab9e522d18ae769a8267d9ee85208787ee4738e0e3a1b328c746b','2022-07-20 03:37:15'),
(5,'c486546b616b36b4620c8e1f9faf2db4d796ea5c258834771f35bc6774bf9fd9','2022-07-20 15:49:38'),
(23,'7c162fa52da7d11bd836cdcd78a2fdfddee9bde17ddd28eb4f73fb8d34ffca63','2022-07-21 03:16:51'),
(5,'b48eaf5e0e6845751e10a6383d794cdea3cf380b6f941f0b81a77d58d0a044eb','2022-07-21 03:19:49'),
(5,'957280c7bded4876e5419e6aea70f4ce5f2d7dfcdc5bfb0f6cbb75efa33df6b8','2022-07-21 04:08:43'),
(8,'4b42960ffcb30904dc3a7a98edbe3c84754883549bfb15bbd4d420238db1ee77','2022-07-21 12:09:32'),
(8,'e3ef6892f7570bdea507bff18c78bd62f217e11cc2b21657accbba1526fa643e','2022-07-24 01:04:01'),
(5,'06653857299f8eaa3fdccd60009339d49de1eac27246b06b05d17acf95c4c58c','2022-09-07 19:53:29'),
(5,'7dbc31e5bc6f05535c07bbee3c4b5db8f8bceb00e5d867b8d83629103319841e','2022-09-29 01:57:17'),
(24,'e198ba09865ec75288796020a3bcd708a241a3a35021f0b53a2b20517de83576','2022-09-29 20:49:32'),
(24,'00ea6666b375099ba88efdf42646c93f71110d759e90918334fafd3b22abafd0','2022-09-29 20:58:30'),
(24,'a2ae3172a4fec4aaa5cef66ad61a87c933ef9b7495128acb2e29bf388083505a','2022-09-29 20:59:58'),
(5,'32cf270cbac8c3340cec654551c90b8d64a47f0a1d8192fbc8ee36eb66b284ee','2022-09-29 21:13:02'),
(24,'113a09354250642170b15a46f6c96dfacc942d96521568b46bddaea764fc631a','2022-09-29 21:24:43'),
(24,'b296087938fd2ff8f9db5c7c3c275d20139fbebcf6bcde64576039a1a7233f85','2022-09-29 21:46:48'),
(24,'f897ec00fe7235d37d77c8d07e7d29e37a281ab46c7a9bbff81cd18facccff69','2022-09-29 21:49:38'),
(24,'de41d8537434c7b7ca6d8047402745670ffdb7c47790ce5986526839b575fce0','2022-09-29 21:50:35'),
(24,'df139d31ae085ecfec6fbc451f6ba12753680d91079e31266498b38b154ec0b0','2022-09-29 21:52:09'),
(24,'fbdd70e60c6b0b33af3924017db87c3fbf9c64b3e1b94da79fec2f641bc23f69','2022-09-29 21:52:36'),
(24,'9a02dc3e5e502f372a795351a0cd4e62b77cb55389d3689b2aaff667939abded','2022-09-29 21:53:02'),
(24,'d0cdf2f67b0c920789676e42982582c4462b4c9fa6815a2432775f7498d54c6a','2022-09-29 21:53:26'),
(24,'dd51d1cc3b2ac894ab420eca9b4f38e0546d822e7ff6e90ed05bd86d9d203681','2022-09-29 21:54:41'),
(24,'c191b978ea67365f9d3070b8569a5c6962a3aa243d4817d46509c757301f7e52','2022-09-29 21:55:09'),
(5,'418248384286ef20686a6abf5209828cc343a9a5a0e0bdc1017c52d0e434b6f1','2022-09-30 04:51:43'),
(24,'b3c5c296a524ab5b85f1b2bf55085e194cd1013676498c9784ce2b33e8081487','2022-10-01 18:21:26'),
(5,'bdd021a5498573a72241126ff01a1f29dea56a173775d14115468f6740343e42','2022-10-01 18:22:01'),
(24,'8f2730326d0b18d7bcb9390f8e27f982817635525cf153681a6f3c5424dbf984','2022-10-01 19:28:21'),
(24,'0f94fbab6fd959c20777f3aa517684c61f8e2cad28f966447ae09e70328f4771','2022-10-01 20:06:57'),
(24,'088e8079ae5bdb7b314b9dee4cc848abc931c256250a7879c5d2a68074863b93','2022-10-01 20:27:53'),
(24,'2bb3d6572e0f2100768c978223f7ab6eb43643518ebb91eb61bfca197766f4d9','2022-10-01 20:33:53'),
(24,'791cb9fb0cf2359ad54e6312a620f8aae12cd3d4d0af805237115041ad72b5ed','2022-10-01 20:36:26'),
(5,'1227d68ab888a575151cbb1f1ba03fd9ddc00e64f3c314a74cc9bc79fa973f00','2022-10-01 21:46:34'),
(7,'227272fd5afa55004991c181935c936b09fc17ca9eacc2f1a443836a15101136','2022-10-09 23:05:13'),
(24,'43a442e4cacbf635d477cdb87de18b8a9a67824567e04a6a768b820118622bec','2022-10-10 22:51:58');


DROP TABLE IF EXISTS `ToDo`;

CREATE TABLE `ToDo` (
`Task` varchar(200) NOT NULL,
`userId` int(11) NOT NULL,
`dateCreated` datetime DEFAULT NULL
);


insert  into `ToDo`(`Task`,`userId`,`dateCreated`) values
('Phys 280 HW',0,NULL),
('Phys 436 HW',0,NULL),
('Go to gym?',0,NULL),
('Gamer Time',0,NULL),
('Cash 1k check',18,NULL),
('Work on a better UI for the website',19,NULL),
('eat a becker load of cereal',20,NULL),
('hang my ramen out to dry',20,NULL),
('buy twitter',20,NULL),
('1 goat 1',20,NULL),
('Add onto wordRecognition so we can backspace and still track the words',9,NULL),
('add priority ranking to this list to show most pressing tasks first',9,NULL),
('Figure out what to do with game rankings',9,NULL),
('Make kill button for osrs bot',9,NULL),
('Make OSRS bot only add to loopCount if successfully chops down tree',9,'2022-07-05 18:53:00'),
(' b bv',5,'2022-07-16 06:45:49'),
('add banner on every webpage so that you can click back to homepage',8,'2022-09-27 21:26:08'),
('yuh',8,'2022-09-27 21:26:13'),
('Make leetcode solution storage page.',24,'2022-10-03 03:02:27');


DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
`userId` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
`passwordHash` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
`lastActivity` datetime NOT NULL DEFAULT current_timestamp(),
`firstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
`lastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
`email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
PRIMARY KEY (`userId`)
);


insert  into `User`(`userId`,`username`,`passwordHash`,`lastActivity`,`firstName`,`lastName`,`email`) values
(1,'Atlas','50c0152c2952082aeaf427885a2f617d67cf6de183a8816c0955ea5b875a216b','2021-10-31 23:06:10','Se','Go',NULL),
(2,'Batlas','59ae856cd788d0f57e39fdd66d421ba930cd89be4682de3aa36c22a2021a710d','2021-10-31 23:09:11','Se','Go',NULL),
(3,'Batlas','59ae856cd788d0f57e39fdd66d421ba930cd89be4682de3aa36c22a2021a710d','2021-10-31 23:10:46','Se','Go',NULL),
(4,'squid','$2y$10$49MjX5GFX3HXG68PBaMpPODKLG13vJCfhr/zDV5Q5xDI5lng9c9G.','2021-10-31 23:31:07','chug','U',NULL),
(5,'jlee','$2y$10$qZl7isc2WAthAIL.IKsZI.BzwR/u59ivgvfGX3sETcKFYqcTuCBym','2021-10-31 23:48:39','John','Lee','johnmlee1204@gmail.com'),
(6,'Huxtaman55','$2y$10$p03I9vmc0bKBv8.zFG76d.ekiZSMzSjpqwOJA0v8UyRdLYinS6QFe','2021-11-01 00:20:06','Timothy','Huxtable',NULL),
(7,'PubgIsNotDead','$2y$10$bjhZmpSVLewJYBwlsBqXOujf/8SM9JaKfxDfCoHJsHF.Mqi4gdqSO','2021-11-01 01:35:12','Actual','Nig',NULL),
(8,'a','$2y$10$XQHotcgNFnkvTcWKLFk0Le1mMaqWJJgqt8jRUD8FCYsSfehk8Nlla','2021-11-02 21:46:15','a','a','huxtable.tim30@gmail.com'),
(9,'UnMagNiTiv','$2y$10$MgHJe1UXRnAlyhv5C6xWLunwUSBtl5HGWIzcLc3CtwpuQziPwxoNC','2021-11-03 06:58:12','Laura','Huxtable',NULL),
(10,'UnMagNiTiv','$2y$10$BnMuTpstJQudQhoduj0iO.xzS4lbw20ldmBgsQmV9M9lbeRzp6mCi','2021-11-03 07:00:15','Laura','Huxtable ',NULL),
(11,'LauraHux','$2y$10$5YoQivd0CV4uBiP.VEaPzugZflM60WfFhC0W9.d532FOfJJH22X7S','2021-11-04 12:54:13','laura','huxtable',NULL),
(12,'sadf','$2y$10$J1fPJg5p1iVL3p3pLBJjjec1qiE6Nm6uKm3PVs75LKCPnzduKpmGq','2021-11-10 21:40:43','asdf','asdf',NULL),
(13,'asdf','$2y$10$i0mBPhs0bQcJdtmhd6fl1e1MLJjVLXKLMPjFpDA9pbuM3PZzghghi','2021-11-10 21:41:01','asdf','asdf',NULL),
(14,'Bot Spax','$2y$10$tRJ7xx/5hX7bDOjV.qZ4JeLoW6mTrRrqXGR3879MSl1WWPffubnqu','2022-01-20 05:31:57','Jackson','Fowler',NULL),
(15,'jonnypoger','$2y$10$cgiqI7Ovr94m2lFkQiJfT.vWNGCvBCVMrb84oMNA9WLGUF8oEP9NS','2022-01-20 05:32:22','johnathon','pogger',NULL),
(16,'Spax','$2y$10$l7Xw2vtQKOLkAvfbczIfae0B5aEOq7gkJLKadGsgF4/R0bn73f4.G','2022-01-20 05:32:24','Jackson','Fowler',NULL),
(17,'getHacked','$2y$10$Mx7lJ0Lxb.JJdf5b5jFmbemeRnvIAaxSIW1gXKWsU9ZG1q9d7205i','2022-04-26 00:28:19','Timothy','Huxtaman',NULL),
(18,'chap','$2y$10$x5zhHz.LnyEB4xPi145FQeo2Yd9BE3XNuZ1HJwB6r99EohMQjALZq','2022-05-09 04:54:01','chad','miller',NULL),
(19,'wasd','$2y$10$rS5dtNuRDEzrt7UqfUHAJ.p6.mBdFn1RVnwrbPCwgE3cxozYpRO8.','2022-06-08 13:37:25','wasd','wasd',NULL),
(20,'LauraHux','$2y$10$akWdPpegMlDEGEj7V4pEW.GYmbJcgFrj/gW0cahyBcnRf4GaGSimm','2022-06-08 21:01:14','Laura','Huxtable',NULL),
(21,'Jeffrey','$2y$10$vCb8SvF5IVTkYbK2avy.UOm5MMbRLoq2twxLnbQNHuqPGHQtQdtMS','2022-07-02 05:00:26','Test','Unit','poggers@gmail.com'),
(22,'pogerman','$2y$10$azJPJ6L.a6xVNaEq/fl3CeAPmp3brM05Kgzr9CbMZE/AgekRalDqu','2022-07-17 05:29:47','mr','poger','poger'),
(23,'poger','$2y$10$HD87YJ/4O6e/GcJ1cLCENOeYXXEtNbABGnXvdQT6lzMHUDP9vJs92','2022-07-21 03:16:47','richard','poger','pjmpyy@gmail.com'),
(24,'TimHux','$2y$10$WlQNhO7UHzXcAEUD4hY9Ou1mwAegkUvLjAABQfxIdcUT9XHI4SbZ2','2022-09-29 20:49:21','Timothy','Huxtable','huxtable.tim30@gmail.com');


DROP TABLE IF EXISTS `accessLog`;

CREATE TABLE `accessLog` (
`userId` int(11) DEFAULT NULL,
`date` datetime NOT NULL,
`url` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
`name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
);


insert  into `accessLog`(`userId`,`date`,`url`,`name`) values
(5,'2022-07-16 06:38:18','/','John Lee'),
(5,'2022-07-16 06:45:06','/gameRankings/','John Lee'),
(5,'2022-07-16 06:45:09','/','John Lee'),
(5,'2022-07-16 06:45:45','/ToDo/','John Lee'),
(5,'2022-07-16 06:45:46','/ToDo/pullToDo.php','John Lee'),
(5,'2022-07-16 06:45:49','/ToDo/submitToDo.php','John Lee'),
(5,'2022-07-16 06:45:49','/ToDo/','John Lee'),
(5,'2022-07-16 06:45:49','/ToDo/pullToDo.php','John Lee'),
(5,'2022-07-16 06:45:54','/Memes/','John Lee'),
(5,'2022-07-16 20:04:43','/','John Lee'),
(8,'2022-07-16 22:32:31','/','a a'),
(8,'2022-07-16 22:32:34','/ToDo/','a a'),
(8,'2022-07-16 22:32:34','/ToDo/pullToDo.php','a a'),
(8,'2022-07-16 22:33:00','/ToDo/submitToDo.php','a a'),
(8,'2022-07-16 22:33:00','/ToDo/','a a'),
(8,'2022-07-16 22:33:00','/ToDo/pullToDo.php','a a'),
(8,'2022-07-16 22:33:11','/ToDo/submitToDo.php','a a'),
(8,'2022-07-16 22:33:11','/ToDo/','a a'),
(8,'2022-07-16 22:33:11','/ToDo/pullToDo.php','a a'),
(22,'2022-07-17 05:29:59','/','mr poger'),
(22,'2022-07-17 05:30:27','/Memes/','mr poger'),
(8,'2022-07-17 09:12:48','/','a a'),
(8,'2022-07-17 09:12:49','/','a a'),
(8,'2022-07-17 09:12:50','/ToDo/','a a'),
(8,'2022-07-17 09:12:50','/ToDo/pullToDo.php','a a'),
(8,'2022-07-17 10:36:06','/','a a'),
(8,'2022-07-17 10:36:07','/ToDo/','a a'),
(8,'2022-07-17 10:36:07','/ToDo/pullToDo.php','a a'),
(8,'2022-07-17 10:36:24','/Memes/','a a'),
(22,'2022-07-17 17:47:54','/','mr poger'),
(8,'2022-07-19 01:09:52','/','a a'),
(8,'2022-07-19 01:09:55','/ToDo/','a a'),
(8,'2022-07-19 01:09:55','/ToDo/pullToDo.php','a a'),
(8,'2022-07-19 01:09:57','/ToDo/deleteToDo.php','a a'),
(8,'2022-07-19 01:09:59','/ToDo/deleteToDo.php','a a'),
(8,'2022-07-19 01:10:20','/ToDo/submitToDo.php','a a'),
(8,'2022-07-19 01:10:20','/ToDo/','a a'),
(8,'2022-07-19 01:10:20','/ToDo/pullToDo.php','a a'),
(8,'2022-07-19 01:10:36','/ToDo/submitToDo.php','a a'),
(8,'2022-07-19 01:10:36','/ToDo/','a a'),
(8,'2022-07-19 01:10:37','/ToDo/pullToDo.php','a a'),
(8,'2022-07-20 03:36:38','/','a a'),
(5,'2022-07-20 03:37:15','/','John Lee'),
(5,'2022-07-20 15:49:38','/','John Lee'),
(5,'2022-07-21 01:20:53','/','John Lee'),
(5,'2022-07-21 01:20:55','/Memes/','John Lee'),
(8,'2022-07-21 01:21:01','/','a a'),
(8,'2022-07-21 01:25:31','/','a a'),
(8,'2022-07-21 03:05:33','/','a a'),
(8,'2022-07-21 03:05:36','/','a a'),
(8,'2022-07-21 03:05:48','/','a a'),
(8,'2022-07-21 03:06:21','/','a a'),
(5,'2022-07-21 03:10:12','/','John Lee'),
(8,'2022-07-21 03:10:30','/','a a'),
(5,'2022-07-21 03:14:09','/','John Lee'),
(23,'2022-07-21 03:16:51','/','richard poger'),
(5,'2022-07-21 03:19:49','/','John Lee'),
(5,'2022-07-21 04:08:43','/','John Lee'),
(8,'2022-07-21 09:33:31','/','a a'),
(8,'2022-07-21 09:34:52','/','a a'),
(8,'2022-07-21 10:13:47','/','a a'),
(8,'2022-07-21 12:09:32','/','a a'),
(5,'2022-07-21 16:18:00','/','John Lee'),
(5,'2022-07-21 16:18:27','/','John Lee'),
(5,'2022-07-21 16:20:01','/','John Lee'),
(5,'2022-07-21 16:21:16','/','John Lee'),
(8,'2022-07-21 16:37:22','/','a a'),
(8,'2022-07-21 21:14:47','/','a a'),
(5,'2022-07-21 22:02:09','/','John Lee'),
(5,'2022-07-22 00:39:17','/','John Lee'),
(8,'2022-07-22 00:58:22','/','a a'),
(8,'2022-07-22 09:51:11','/','a a'),
(8,'2022-07-22 11:23:29','/','a a'),
(8,'2022-07-22 11:23:31','/ToDo/','a a'),
(8,'2022-07-22 11:23:31','/ToDo/pullToDo.php','a a'),
(8,'2022-07-22 11:23:44','/ToDo/deleteToDo.php','a a'),
(5,'2022-07-22 13:32:08','/','John Lee'),
(5,'2022-07-22 13:32:11','/ToDo/','John Lee'),
(5,'2022-07-22 13:32:11','/ToDo/pullToDo.php','John Lee'),
(5,'2022-07-22 15:52:42','/','John Lee'),
(5,'2022-07-22 19:37:58','/','John Lee'),
(5,'2022-07-23 03:49:48','/','John Lee'),
(8,'2022-07-23 22:16:44','/','a a'),
(8,'2022-07-24 01:04:01','/','a a'),
(8,'2022-07-24 01:04:38','/Memes/','a a'),
(8,'2022-07-24 04:52:53','/','a a'),
(5,'2022-07-25 20:46:40','/','John Lee'),
(23,'2022-08-02 00:28:32','/','richard poger'),
(23,'2022-08-02 00:30:41','/','richard poger'),
(8,'2022-08-02 00:45:02','/','a a'),
(23,'2022-08-02 00:49:26','/','richard poger'),
(23,'2022-08-02 00:49:28','/gameRankings/','richard poger'),
(8,'2022-08-02 01:40:35','/','a a'),
(5,'2022-08-02 02:01:31','/','John Lee'),
(5,'2022-08-02 02:37:15','/','John Lee'),
(5,'2022-08-02 13:35:29','/','John Lee'),
(8,'2022-08-04 00:23:41','/','a a'),
(8,'2022-08-04 02:07:05','/','a a'),
(8,'2022-08-04 21:54:42','/','a a'),
(8,'2022-08-04 21:54:42','/','a a'),
(8,'2022-08-05 02:37:30','/','a a'),
(23,'2022-08-07 05:48:11','/','richard poger'),
(8,'2022-08-08 19:10:16','/','a a'),
(8,'2022-08-08 19:28:48','/','a a'),
(23,'2022-08-11 05:45:50','/','richard poger'),
(23,'2022-08-15 23:21:22','/','richard poger'),
(8,'2022-08-16 03:57:43','/','a a'),
(8,'2022-08-23 20:55:35','/','a a'),
(5,'2022-08-29 04:04:55','/','John Lee'),
(23,'2022-08-30 02:18:21','/','richard poger'),
(8,'2022-08-30 02:55:16','/','a a'),
(8,'2022-08-30 03:06:41','/ToDo/','a a'),
(8,'2022-08-30 03:06:42','/ToDo/pullToDo.php','a a'),
(8,'2022-08-30 03:06:54','/Memes/','a a'),
(8,'2022-08-30 03:07:04','/gameRankings/','a a'),
(5,'2022-09-07 19:53:29','/','John Lee'),
(5,'2022-09-14 01:43:38','/','John Lee'),
(5,'2022-09-22 21:07:29','/','John Lee'),
(8,'2022-09-23 14:55:07','/','a a'),
(8,'2022-09-25 14:57:39','/','a a'),
(8,'2022-09-25 14:58:23','/ToDo/','a a'),
(8,'2022-09-25 14:58:23','/ToDo/pullToDo.php','a a'),
(8,'2022-09-25 14:58:26','/ToDo/deleteToDo.php','a a'),
(8,'2022-09-25 14:58:29','/Memes/','a a'),
(8,'2022-09-25 21:45:39','/','a a'),
(8,'2022-09-25 22:16:25','/','a a'),
(8,'2022-09-25 22:19:18','/','a a'),
(8,'2022-09-25 22:22:49','/','a a'),
(8,'2022-09-25 22:23:51','/','a a'),
(8,'2022-09-25 22:24:04','/','a a'),
(5,'2022-09-26 13:40:23','/','John Lee'),
(8,'2022-09-26 20:39:58','/','a a'),
(8,'2022-09-26 21:09:08','/','a a'),
(8,'2022-09-26 21:09:32','/','a a'),
(8,'2022-09-26 21:10:28','/','a a'),
(5,'2022-09-26 21:11:43','/','John Lee'),
(5,'2022-09-26 21:12:09','/','John Lee'),
(8,'2022-09-26 23:03:03','/','a a'),
(8,'2022-09-26 23:03:07','/Memes/','a a'),
(8,'2022-09-26 23:26:04','/','a a'),
(8,'2022-09-26 23:26:50','/','a a'),
(8,'2022-09-26 23:27:27','/','a a'),
(8,'2022-09-27 20:16:01','/Memes/','a a'),
(8,'2022-09-27 20:17:55','/gameRankings/','a a'),
(8,'2022-09-27 20:27:07','/','a a'),
(8,'2022-09-27 21:15:57','/ToDo/','a a'),
(8,'2022-09-27 21:15:57','/ToDo/pullToDo.php','a a'),
(8,'2022-09-27 21:25:46','/ToDo/','a a'),
(8,'2022-09-27 21:25:47','/ToDo/pullToDo.php','a a'),
(8,'2022-09-27 21:26:08','/ToDo/submitToDo.php','a a'),
(8,'2022-09-27 21:26:09','/ToDo/','a a'),
(8,'2022-09-27 21:26:09','/ToDo/pullToDo.php','a a'),
(8,'2022-09-27 21:26:13','/ToDo/submitToDo.php','a a'),
(8,'2022-09-27 21:26:14','/ToDo/','a a'),
(8,'2022-09-27 21:26:14','/ToDo/pullToDo.php','a a'),
(5,'2022-09-28 00:12:17','/','John Lee'),
(8,'2022-09-28 19:52:36','/','a a'),
(8,'2022-09-28 19:57:48','/','a a'),
(8,'2022-09-28 20:00:08','/','a a'),
(8,'2022-09-28 20:00:20','/','a a'),
(8,'2022-09-28 20:04:37','/Memes/','a a'),
(8,'2022-09-28 20:07:49','/ToDo/','a a'),
(8,'2022-09-28 20:07:49','/ToDo/pullToDo.php','a a'),
(8,'2022-09-28 21:12:29','/','a a'),
(8,'2022-09-29 01:55:59','/','a a'),
(5,'2022-09-29 01:57:17','/','John Lee'),
(5,'2022-09-29 20:40:32','/','John Lee'),
(24,'2022-09-29 20:49:32','/','Timothy Huxtable'),
(24,'2022-09-29 20:58:30','/','Timothy Huxtable'),
(24,'2022-09-29 20:58:33','/','Timothy Huxtable'),
(24,'2022-09-29 20:58:48','/','Timothy Huxtable'),
(24,'2022-09-29 20:59:38','/','Timothy Huxtable'),
(24,'2022-09-29 20:59:58','/','Timothy Huxtable'),
(5,'2022-09-29 21:13:02','/','John Lee'),
(24,'2022-09-29 21:24:43','/','Timothy Huxtable'),
(24,'2022-09-29 21:46:48','/','Timothy Huxtable'),
(24,'2022-09-29 21:49:38','/','Timothy Huxtable'),
(24,'2022-09-29 21:50:35','/','Timothy Huxtable'),
(24,'2022-09-29 21:52:09','/','Timothy Huxtable'),
(24,'2022-09-29 21:52:36','/','Timothy Huxtable'),
(24,'2022-09-29 21:53:02','/','Timothy Huxtable'),
(24,'2022-09-29 21:53:26','/','Timothy Huxtable'),
(24,'2022-09-29 21:54:41','/','Timothy Huxtable'),
(24,'2022-09-29 21:55:09','/','Timothy Huxtable'),
(8,'2022-09-30 01:00:37','/','a a'),
(5,'2022-09-30 04:51:43','/','John Lee'),
(24,'2022-09-30 16:55:55','/','Timothy Huxtable'),
(8,'2022-09-30 17:22:08','/','a a'),
(24,'2022-09-30 17:48:57','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 17:48:57','/ToDo/pullToDo.php','Timothy Huxtable'),
(24,'2022-09-30 17:49:12','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 17:49:12','/ToDo/pullToDo.php','Timothy Huxtable'),
(24,'2022-09-30 18:08:48','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 18:09:24','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 18:09:24','/ToDo/pullToDo.php','Timothy Huxtable'),
(24,'2022-09-30 18:09:28','/ToDo/submitToDo.php','Timothy Huxtable'),
(24,'2022-09-30 18:09:29','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 18:09:29','/ToDo/pullToDo.php','Timothy Huxtable'),
(24,'2022-09-30 18:09:33','/ToDo/submitToDo.php','Timothy Huxtable'),
(24,'2022-09-30 18:09:33','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 18:09:34','/ToDo/pullToDo.php','Timothy Huxtable'),
(24,'2022-09-30 18:09:45','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 18:09:45','/ToDo/pullToDo.php','Timothy Huxtable'),
(5,'2022-09-30 21:28:26','/ToDo/','John Lee'),
(5,'2022-09-30 21:28:26','/ToDo/pullToDo.php','John Lee'),
(5,'2022-09-30 21:28:44','/ToDo/','John Lee'),
(5,'2022-09-30 21:28:44','/ToDo/pullToDo.php','John Lee'),
(24,'2022-09-30 21:29:00','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 21:29:00','/ToDo/pullToDo.php','Timothy Huxtable'),
(5,'2022-09-30 21:36:23','/ToDo/','John Lee'),
(24,'2022-09-30 21:36:37','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 21:37:15','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 21:37:16','/ToDo/pullToDo.php','Timothy Huxtable'),
(24,'2022-09-30 21:37:20','/ToDo/submitToDo.php','Timothy Huxtable'),
(24,'2022-09-30 21:37:21','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 21:37:21','/ToDo/pullToDo.php','Timothy Huxtable'),
(5,'2022-09-30 21:37:23','/ToDo/','John Lee'),
(5,'2022-09-30 21:37:23','/ToDo/pullToDo.php','John Lee'),
(24,'2022-09-30 21:37:23','/ToDo/deleteToDo.php','Timothy Huxtable'),
(24,'2022-09-30 21:37:24','/ToDo/deleteToDo.php','Timothy Huxtable'),
(24,'2022-09-30 21:37:46','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 21:37:46','/ToDo/pullToDo.php','Timothy Huxtable'),
(5,'2022-09-30 21:37:47','/ToDo/','John Lee'),
(5,'2022-09-30 21:37:47','/ToDo/pullToDo.php','John Lee'),
(24,'2022-09-30 21:38:22','/ToDo/','Timothy Huxtable'),
(24,'2022-09-30 21:38:22','/ToDo/pullToDo.php','Timothy Huxtable'),
(5,'2022-09-30 21:40:38','/','John Lee'),
(24,'2022-09-30 22:04:23','/','Timothy Huxtable'),
(24,'2022-09-30 22:05:13','/','Timothy Huxtable'),
(24,'2022-10-01 00:20:36','/ToDo/','Timothy Huxtable'),
(24,'2022-10-01 00:20:37','/ToDo/pullToDo.php','Timothy Huxtable'),
(24,'2022-10-01 01:53:05','/login.php','Timothy Huxtable'),
(24,'2022-10-01 01:53:12','/login.php','Timothy Huxtable'),
(24,'2022-10-01 01:53:16','/','Timothy Huxtable'),
(5,'2022-10-01 01:54:22','/','John Lee'),
(24,'2022-10-01 18:21:26','/','Timothy Huxtable'),
(5,'2022-10-01 18:22:01','/','John Lee'),
(24,'2022-10-01 19:17:42','/login.php','Timothy Huxtable'),
(24,'2022-10-01 19:28:21','/','Timothy Huxtable'),
(24,'2022-10-01 20:06:57','/','Timothy Huxtable'),
(24,'2022-10-01 20:17:05','/','Timothy Huxtable'),
(24,'2022-10-01 20:21:37','/','Timothy Huxtable'),
(24,'2022-10-01 20:23:13','/','Timothy Huxtable'),
(24,'2022-10-01 20:25:05','/','Timothy Huxtable'),
(24,'2022-10-01 20:26:41','/login.php','Timothy Huxtable'),
(24,'2022-10-01 20:27:07','/login.php','Timothy Huxtable'),
(24,'2022-10-01 20:27:53','/','Timothy Huxtable'),
(24,'2022-10-01 20:33:53','/','Timothy Huxtable'),
(24,'2022-10-01 20:36:26','/','Timothy Huxtable'),
(24,'2022-10-01 21:45:47','/','Timothy Huxtable'),
(5,'2022-10-01 21:46:34','/','John Lee'),
(5,'2022-10-01 22:32:39','/','John Lee'),
(5,'2022-10-01 22:36:21','/','John Lee'),
(5,'2022-10-02 00:18:20','/','John Lee'),
(5,'2022-10-02 00:18:52','/','John Lee'),
(24,'2022-10-02 01:01:22','/','Timothy Huxtable'),
(24,'2022-10-02 01:02:23','/','Timothy Huxtable'),
(24,'2022-10-02 01:03:46','/','Timothy Huxtable'),
(5,'2022-10-02 02:32:47','/','John Lee'),
(24,'2022-10-02 14:55:08','/','Timothy Huxtable'),
(8,'2022-10-02 14:55:47','/','a a'),
(8,'2022-10-02 14:55:48','/','a a'),
(5,'2022-10-02 18:26:10','/','John Lee'),
(5,'2022-10-02 18:27:05','/','John Lee'),
(24,'2022-10-03 03:02:12','/ToDo/','Timothy Huxtable'),
(24,'2022-10-03 03:02:13','/ToDo/pullToDo.php','Timothy Huxtable'),
(24,'2022-10-03 03:02:26','/ToDo/deleteToDo.php','Timothy Huxtable'),
(24,'2022-10-03 03:02:27','/ToDo/submitToDo.php','Timothy Huxtable'),
(24,'2022-10-03 03:02:27','/ToDo/','Timothy Huxtable'),
(24,'2022-10-03 03:02:28','/ToDo/pullToDo.php','Timothy Huxtable'),
(24,'2022-10-03 17:11:56','/','Timothy Huxtable'),
(24,'2022-10-03 22:18:28','/','Timothy Huxtable'),
(24,'2022-10-03 22:43:04','/','Timothy Huxtable'),
(24,'2022-10-04 17:24:55','/','Timothy Huxtable'),
(24,'2022-10-04 19:52:22','/','Timothy Huxtable'),
(24,'2022-10-05 00:28:17','/','Timothy Huxtable'),
(24,'2022-10-05 19:37:29','/','Timothy Huxtable'),
(24,'2022-10-06 22:34:21','/','Timothy Huxtable'),
(24,'2022-10-06 22:36:44','/','Timothy Huxtable'),
(5,'2022-10-07 03:02:36','/','John Lee'),
(5,'2022-10-07 03:02:45','/gameRankings/','John Lee'),
(5,'2022-10-07 03:34:14','/','John Lee'),
(24,'2022-10-07 19:44:42','/','Timothy Huxtable'),
(24,'2022-10-07 22:18:25','/gameRankings/','Timothy Huxtable'),
(24,'2022-10-09 19:52:00','/','Timothy Huxtable'),
(24,'2022-10-09 21:10:08','/','Timothy Huxtable'),
(5,'2022-10-09 21:44:24','/','John Lee'),
(24,'2022-10-09 21:49:56','/','Timothy Huxtable'),
(24,'2022-10-09 22:10:53','/','Timothy Huxtable'),
(5,'2022-10-09 22:21:22','/','John Lee'),
(24,'2022-10-09 22:21:35','/','Timothy Huxtable'),
(7,'2022-10-09 23:05:13','/','Actual Nig'),
(5,'2022-10-10 13:25:52','/','John Lee'),
(24,'2022-10-10 16:03:41','/','Timothy Huxtable'),
(24,'2022-10-10 16:19:46','/gameRankings/','Timothy Huxtable'),
(24,'2022-10-10 16:20:03','/gameRankings/','Timothy Huxtable'),
(24,'2022-10-10 19:24:25','/','Timothy Huxtable'),
(24,'2022-10-10 19:24:39','/','Timothy Huxtable'),
(24,'2022-10-10 19:26:02','/','Timothy Huxtable'),
(24,'2022-10-10 19:28:15','/','Timothy Huxtable'),
(24,'2022-10-10 19:28:18','/','Timothy Huxtable'),
(24,'2022-10-10 19:28:20','/','Timothy Huxtable'),
(24,'2022-10-10 19:30:59','/','Timothy Huxtable'),
(24,'2022-10-10 19:36:55','/','Timothy Huxtable'),
(24,'2022-10-10 19:37:50','/','Timothy Huxtable'),
(24,'2022-10-10 19:45:42','/','Timothy Huxtable'),
(24,'2022-10-10 19:47:53','/','Timothy Huxtable'),
(24,'2022-10-10 19:51:38','/','Timothy Huxtable'),
(24,'2022-10-10 19:52:46','/','Timothy Huxtable'),
(24,'2022-10-10 19:52:50','/','Timothy Huxtable'),
(24,'2022-10-10 19:57:24','/','Timothy Huxtable'),
(24,'2022-10-10 19:58:02','/','Timothy Huxtable'),
(24,'2022-10-10 19:59:18','/','Timothy Huxtable'),
(24,'2022-10-10 20:00:32','/','Timothy Huxtable'),
(24,'2022-10-10 20:01:08','/','Timothy Huxtable'),
(24,'2022-10-10 20:01:24','/','Timothy Huxtable'),
(24,'2022-10-10 20:01:48','/','Timothy Huxtable'),
(24,'2022-10-10 20:03:06','/','Timothy Huxtable'),
(24,'2022-10-10 20:03:31','/','Timothy Huxtable'),
(24,'2022-10-10 20:04:13','/','Timothy Huxtable'),
(24,'2022-10-10 20:04:20','/','Timothy Huxtable'),
(24,'2022-10-10 20:06:24','/','Timothy Huxtable'),
(24,'2022-10-10 20:06:39','/','Timothy Huxtable'),
(24,'2022-10-10 20:11:02','/','Timothy Huxtable'),
(24,'2022-10-10 20:11:07','/','Timothy Huxtable'),
(24,'2022-10-10 20:12:53','/','Timothy Huxtable'),
(24,'2022-10-10 20:14:14','/','Timothy Huxtable'),
(24,'2022-10-10 20:15:34','/','Timothy Huxtable'),
(24,'2022-10-10 20:17:36','/','Timothy Huxtable'),
(24,'2022-10-10 20:19:12','/','Timothy Huxtable'),
(24,'2022-10-10 20:19:37','/','Timothy Huxtable'),
(24,'2022-10-10 20:19:40','/','Timothy Huxtable'),
(24,'2022-10-10 20:20:31','/','Timothy Huxtable'),
(24,'2022-10-10 20:23:29','/','Timothy Huxtable'),
(24,'2022-10-10 20:23:33','/','Timothy Huxtable'),
(24,'2022-10-10 20:23:34','/','Timothy Huxtable'),
(24,'2022-10-10 20:28:05','/','Timothy Huxtable'),
(24,'2022-10-10 20:28:42','/','Timothy Huxtable'),
(24,'2022-10-10 20:30:00','/','Timothy Huxtable'),
(24,'2022-10-10 20:31:57','/','Timothy Huxtable'),
(24,'2022-10-10 20:32:47','/','Timothy Huxtable'),
(24,'2022-10-10 20:35:18','/','Timothy Huxtable'),
(24,'2022-10-10 21:55:45','/','Timothy Huxtable'),
(24,'2022-10-10 21:56:21','/','Timothy Huxtable'),
(24,'2022-10-10 21:57:00','/','Timothy Huxtable'),
(24,'2022-10-10 22:16:50','/','Timothy Huxtable'),
(24,'2022-10-10 22:19:44','/','Timothy Huxtable'),
(24,'2022-10-10 22:22:22','/','Timothy Huxtable'),
(8,'2022-10-10 22:46:46','/','a a'),
(24,'2022-10-10 22:51:58','/','Timothy Huxtable');

