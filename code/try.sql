-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-12-15 06:19:30
-- 伺服器版本： 10.4.25-MariaDB
-- PHP 版本： 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `try`
--

-- --------------------------------------------------------

--
-- 資料表結構 `contact`
--

CREATE TABLE `contact` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone_number` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone_number`, `comment`) VALUES
('web', 'b104020002@g-mail.nsysu.edu.tw', '0912345', 'Very Good!');

-- --------------------------------------------------------

--
-- 資料表結構 `main_page`
--

CREATE TABLE `main_page` (
  `Place` text NOT NULL,
  `Blog` text NOT NULL,
  `cover_name` blob NOT NULL,
  `cover_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `main_page`
--

INSERT INTO `main_page` (`Place`, `Blog`, `cover_name`, `cover_path`) VALUES
('Alishan', 'Alishan.html', 0x616c697368616e5f696e666f2e6a7067, 'alishan_info.jpg'),
('Hualien', 'Hualien.html', 0x6875616c69656e5f696e666f2e6a7067, 'hualien_info.jpg'),
('Malaysia', 'Malaysia.html', 0x6d616c61797369615f696e666f2e6a7067, 'malaysia_info.jpg'),
('Tainan', 'Tainan.html', 0x7461696e616e5f696e666f2e6a7067, 'tainan_info.jpg'),
('Tamsui', 'Tamsui.html', 0x74616d7375695f696e666f2e6a7067, 'tamsui_info.jpg'),
('Taipei Zoo', 'Taipei Zoo.html', 0x5461697065695f5a6f6f31322e6a7067, 'Taipei_Zoo12.jpg'),
('Xitou', 'Xitou.html', 0x5869746f75362e6a7067, 'Xitou6.jpg'),
('Lotus Pond', 'Lotus Pond.html', 0x4c6f7475735f506f6e645f352e6a7067, 'Lotus_Pond_5.jpg'),
('Fo Guang Shan', 'Fo Guang Shan.html', 0x466f5f4775616e675f5368616e352e6a7067, 'Fo_Guang_Shan5.jpg'),
('Austria', 'Austria.html', 0x41757374726961372e6a7067, 'Austria7.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `photos`
--

CREATE TABLE `photos` (
  `Location` text NOT NULL,
  `photo` blob NOT NULL,
  `photo_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `photos`
--

INSERT INTO `photos` (`Location`, `photo`, `photo_path`) VALUES
('Xitou', 0x5869746f75392e6a7067, 'photos/Xitou9.jpg'),
('Xitou', 0x5869746f75332e6a7067, 'photos/Xitou3.jpg'),
('Xitou', 0x5869746f75312e6a7067, 'photos/Xitou1.jpg'),
('Xitou', 0x5869746f75322e6a7067, 'photos/Xitou2.jpg'),
('Xitou', 0x5869746f75342e6a7067, 'photos/Xitou4.jpg'),
('Xitou', 0x5869746f75352e6a7067, 'photos/Xitou5.jpg'),
('Xitou', 0x5869746f75362e6a7067, 'photos/Xitou6.jpg'),
('Xitou', 0x5869746f75372e6a7067, 'photos/Xitou7.jpg'),
('Xitou', 0x5869746f75382e6a7067, 'photos/Xitou8.jpg'),
('Xitou', 0x5869746f7531302e6a7067, 'photos/Xitou10.jpg'),
('Xitou', 0x5869746f7531312e6a7067, 'photos/Xitou11.jpg'),
('Xitou', 0x5869746f7531322e6a7067, 'photos/Xitou12.jpg'),
('Xitou', 0x5869746f7531332e6a7067, 'photos/Xitou13.jpg'),
('Xitou', 0x5869746f7531342e6a7067, 'photos/Xitou14.jpg'),
('Xitou', 0x5869746f7531352e6a7067, 'photos/Xitou15.jpg'),
('Xitou', 0x5869746f7531362e6a7067, 'photos/Xitou16.jpg'),
('Xitou', 0x5869746f7531372e6a7067, 'photos/Xitou17.jpg'),
('Xitou', 0x5869746f7531382e6a7067, 'photos/Xitou18.jpg'),
('Xitou', 0x5869746f7531392e6a7067, 'photos/Xitou19.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f352e6a7067, 'photos/Taipei_Zoo5.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f312e6a7067, 'photos/Taipei_Zoo1.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f332e6a7067, 'photos/Taipei_Zoo3.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f342e6a7067, 'photos/Taipei_Zoo4.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f362e6a7067, 'photos/Taipei_Zoo6.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f372e6a7067, 'photos/Taipei_Zoo7.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f382e6a7067, 'photos/Taipei_Zoo8.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f392e6a7067, 'photos/Taipei_Zoo9.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f31302e6a7067, 'photos/Taipei_Zoo10.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f31322e6a7067, 'photos/Taipei_Zoo12.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f31332e6a7067, 'photos/Taipei_Zoo13.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f31342e6a7067, 'photos/Taipei_Zoo14.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f31352e6a7067, 'photos/Taipei_Zoo15.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f31362e6a7067, 'photos/Taipei_Zoo16.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f31372e6a7067, 'photos/Taipei_Zoo17.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f31382e6a7067, 'photos/Taipei_Zoo18.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f31392e6a7067, 'photos/Taipei_Zoo19.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f32302e6a7067, 'photos/Taipei_Zoo20.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f32312e6a7067, 'photos/Taipei_Zoo21.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f32322e6a7067, 'photos/Taipei_Zoo22.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f32332e6a7067, 'photos/Taipei_Zoo23.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f31312e6a7067, 'photos/Taipei_Zoo11.jpg'),
('Alishan', 0xe998bfe9878ce5b1b1392e6a7067, 'photos/阿里山9.jpg'),
('Alishan', 0xe998bfe9878ce5b1b1302e6a7067, 'photos/阿里山0.jpg'),
('Alishan', 0xe998bfe9878ce5b1b1312e6a7067, 'photos/阿里山1.jpg'),
('Alishan', 0xe998bfe9878ce5b1b1322e6a7067, 'photos/阿里山2.jpg'),
('Alishan', 0xe998bfe9878ce5b1b1332e6a7067, 'photos/阿里山3.jpg'),
('Alishan', 0xe998bfe9878ce5b1b1342e6a7067, 'photos/阿里山4.jpg'),
('Alishan', 0xe998bfe9878ce5b1b1352e6a7067, 'photos/阿里山5.jpg'),
('Alishan', 0xe998bfe9878ce5b1b1362e6a7067, 'photos/阿里山6.jpg'),
('Alishan', 0xe998bfe9878ce5b1b1372e6a7067, 'photos/阿里山7.jpg'),
('Alishan', 0xe998bfe9878ce5b1b1382e6a7067, 'photos/阿里山8.jpg'),
('Alishan', 0xe998bfe9878ce5b1b131302e6a7067, 'photos/阿里山10.jpg'),
('Alishan', 0xe998bfe9878ce5b1b131312e6a7067, 'photos/阿里山11.jpg'),
('Alishan', 0xe998bfe9878ce5b1b131322e6a7067, 'photos/阿里山12.jpg'),
('Hualien', 0x4c494e455f414c42554d5fe88ab1e893ae5f3232313130375f302e6a7067, 'photos/LINE_ALBUM_花蓮_221107_0.jpg'),
('Hualien', 0x4c494e455f414c42554d5fe88ab1e893ae5f3232313130375f312e6a7067, 'photos/LINE_ALBUM_花蓮_221107_1.jpg'),
('Hualien', 0x4c494e455f414c42554d5fe88ab1e893ae5f3232313130375f322e6a7067, 'photos/LINE_ALBUM_花蓮_221107_2.jpg'),
('Hualien', 0x4c494e455f414c42554d5fe88ab1e893ae5f3232313130375f342e6a7067, 'photos/LINE_ALBUM_花蓮_221107_4.jpg'),
('Hualien', 0x4c494e455f414c42554d5fe88ab1e893ae5f3232313130375f332e6a7067, 'photos/LINE_ALBUM_花蓮_221107_3.jpg'),
('Hualien', 0x4c494e455f414c42554d5fe88ab1e893ae5f3232313130375f352e6a7067, 'photos/LINE_ALBUM_花蓮_221107_5.jpg'),
('Hualien', 0x4c494e455f414c42554d5fe88ab1e893ae5f3232313130375f362e6a7067, 'photos/LINE_ALBUM_花蓮_221107_6.jpg'),
('Hualien', 0x4c494e455f414c42554d5fe88ab1e893ae5f3232313130375f372e6a7067, 'photos/LINE_ALBUM_花蓮_221107_7.jpg'),
('Malaysia', 0x4c494e455f414c42554d5fe9a6ace4be86e8a5bfe4ba9eefbc88e58d9ae789a9e9a4a8efbc895f3232313130375f302e6a7067, 'photos/LINE_ALBUM_馬來西亞（博物館）_221107_0.jpg'),
('Malaysia', 0x4c494e455f414c42554d5fe9a6ace4be86e8a5bfe4ba9eefbc88e58d9ae789a9e9a4a8efbc895f3232313130375f312e6a7067, 'photos/LINE_ALBUM_馬來西亞（博物館）_221107_1.jpg'),
('Malaysia', 0x4c494e455f414c42554d5fe9a6ace4be86e8a5bfe4ba9eefbc88e58d9ae789a9e9a4a8efbc895f3232313130375f322e6a7067, 'photos/LINE_ALBUM_馬來西亞（博物館）_221107_2.jpg'),
('Malaysia', 0x4c494e455f414c42554d5fe9a6ace4be86e8a5bfe4ba9eefbc88e58d9ae789a9e9a4a8efbc895f3232313130375f342e6a7067, 'photos/LINE_ALBUM_馬來西亞（博物館）_221107_4.jpg'),
('Malaysia', 0x4c494e455f414c42554d5fe9a6ace4be86e8a5bfe4ba9eefbc88e58d9ae789a9e9a4a8efbc895f3232313130375f352e6a7067, 'photos/LINE_ALBUM_馬來西亞（博物館）_221107_5.jpg'),
('Malaysia', 0x4c494e455f414c42554d5fe9a6ace4be86e8a5bfe4ba9eefbc88e58d9ae789a9e9a4a8efbc895f3232313130375f362e6a7067, 'photos/LINE_ALBUM_馬來西亞（博物館）_221107_6.jpg'),
('Malaysia', 0x4c494e455f414c42554d5fe9a6ace4be86e8a5bfe4ba9eefbc88e58d9ae789a9e9a4a8efbc895f3232313130375f372e6a7067, 'photos/LINE_ALBUM_馬來西亞（博物館）_221107_7.jpg'),
('Malaysia', 0x4c494e455f414c42554d5fe9a6ace4be86e8a5bfe4ba9eefbc88e58d9ae789a9e9a4a8efbc895f3232313130375f382e6a7067, 'photos/LINE_ALBUM_馬來西亞（博物館）_221107_8.jpg'),
('Malaysia', 0x4c494e455f414c42554d5fe9a6ace4be86e8a5bfe4ba9eefbc88e58d9ae789a9e9a4a8efbc895f3232313130375f332e6a7067, 'photos/LINE_ALBUM_馬來西亞（博物館）_221107_3.jpg'),
('Tamsui', 0x74616d737569302e6a7067, 'photos/tamsui0.jpg'),
('Tamsui', 0x74616d73756930312e6a7067, 'photos/tamsui01.jpg'),
('Tamsui', 0x74616d737569312e6a7067, 'photos/tamsui1.jpg'),
('Tamsui', 0x74616d737569322e6a7067, 'photos/tamsui2.jpg'),
('Tamsui', 0x74616d737569332e6a7067, 'photos/tamsui3.jpg'),
('Tamsui', 0x74616d737569342e6a7067, 'photos/tamsui4.jpg'),
('Tamsui', 0x74616d737569352e6a7067, 'photos/tamsui5.jpg'),
('Tamsui', 0x74616d737569362e6a7067, 'photos/tamsui6.jpg'),
('Tamsui', 0x74616d737569372e6a7067, 'photos/tamsui7.jpg'),
('Tainan', 0x7461696e616e302e6a7067, 'photos/tainan0.jpg'),
('Tainan', 0x7461696e616e312e6a7067, 'photos/tainan1.jpg'),
('Tainan', 0x7461696e616e322e6a7067, 'photos/tainan2.jpg'),
('Tainan', 0x7461696e616e332e6a7067, 'photos/tainan3.jpg'),
('Tainan', 0x7461696e616e342e6a7067, 'photos/tainan4.jpg'),
('Tainan', 0x7461696e616e352e6a7067, 'photos/tainan5.jpg'),
('Tainan', 0x7461696e616e362e6a7067, 'photos/tainan6.jpg'),
('Tainan', 0x7461696e616e372e6a7067, 'photos/tainan7.jpg'),
('Tainan', 0x7461696e616e382e6a7067, 'photos/tainan8.jpg'),
('Tainan', 0x7461696e616e392e6a7067, 'photos/tainan9.jpg'),
('Tainan', 0x7461696e616e31302e6a7067, 'photos/tainan10.jpg'),
('Lotus Pond', 0x4c6f7475735f506f6e642e6a7067, 'photos/Lotus_Pond.jpg'),
('Lotus Pond', 0x4c6f7475735f506f6e645f302e6a7067, 'photos/Lotus_Pond_0.jpg'),
('Lotus Pond', 0x4c6f7475735f506f6e645f312e6a7067, 'photos/Lotus_Pond_1.jpg'),
('Lotus Pond', 0x4c6f7475735f506f6e645f322e6a7067, 'photos/Lotus_Pond_2.jpg'),
('Lotus Pond', 0x4c6f7475735f506f6e645f332e6a7067, 'photos/Lotus_Pond_3.jpg'),
('Lotus Pond', 0x4c6f7475735f506f6e645f342e6a7067, 'photos/Lotus_Pond_4.jpg'),
('Lotus Pond', 0x4c6f7475735f506f6e645f352e6a7067, 'photos/Lotus_Pond_5.jpg'),
('Lotus Pond', 0x4c6f7475735f506f6e645f362e6a7067, 'photos/Lotus_Pond_6.jpg'),
('Fo Guang Shan', 0x466f5f4775616e675f5368616e312e6a7067, 'photos/Fo_Guang_Shan1.jpg'),
('Fo Guang Shan', 0x466f5f4775616e675f5368616e322e6a7067, 'photos/Fo_Guang_Shan2.jpg'),
('Fo Guang Shan', 0x466f5f4775616e675f5368616e332e6a7067, 'photos/Fo_Guang_Shan3.jpg'),
('Fo Guang Shan', 0x466f5f4775616e675f5368616e342e6a7067, 'photos/Fo_Guang_Shan4.jpg'),
('Fo Guang Shan', 0x466f5f4775616e675f5368616e352e6a7067, 'photos/Fo_Guang_Shan5.jpg'),
('Fo Guang Shan', 0x466f5f4775616e675f5368616e362e6a7067, 'photos/Fo_Guang_Shan6.jpg'),
('Fo Guang Shan', 0x466f5f4775616e675f5368616e372e6a7067, 'photos/Fo_Guang_Shan7.jpg'),
('Austria', 0x41757374726961312e6a7067, 'photos/Austria1.jpg'),
('Austria', 0x41757374726961322e6a7067, 'photos/Austria2.jpg'),
('Austria', 0x41757374726961332e6a7067, 'photos/Austria3.jpg'),
('Austria', 0x41757374726961362e6a7067, 'photos/Austria6.jpg'),
('Austria', 0x41757374726961352e6a7067, 'photos/Austria5.jpg'),
('Austria', 0x41757374726961342e6a7067, 'photos/Austria4.jpg'),
('Austria', 0x41757374726961372e6a7067, 'photos/Austria7.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `photo_page`
--

CREATE TABLE `photo_page` (
  `Location` text NOT NULL,
  `photo_page` text NOT NULL,
  `photo_page_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `photo_page`
--

INSERT INTO `photo_page` (`Location`, `photo_page`, `photo_page_location`) VALUES
('Alishan', '../Photo_php/Alishan.php', 'Alishan.php'),
('Hualien', '../Photo_php/Hualien.php', 'Hualien.php'),
('Malaysia', '../Photo_php/Malaysia.php', 'Malaysia.php'),
('Tainan', '../Photo_php/Tainan.php', 'Tainan.php'),
('Tamsui', '../Photo_php/Tamsui.php', 'Tamsui.php'),
('Taipei Zoo', '../Photo_php/Taipei Zoo.php', 'Taipei Zoo.php'),
('Xitou', '../Photo_php/Xitou.php', 'Xitou.php'),
('Lotus Pond', '../Photo_php/Lotus Pond.php', 'Lotus Pond.php'),
('Fo Guang Shan', '../Photo_php/Fo Guang Shan.php', 'Fo Guang Shan.php'),
('Austria', '../Photo_php/Austria.php', 'Austria.php');

-- --------------------------------------------------------

--
-- 資料表結構 `posts`
--

CREATE TABLE `posts` (
  `Location` text NOT NULL,
  `Photo1` blob NOT NULL,
  `Photo1_path` text NOT NULL,
  `Photo2` blob NOT NULL,
  `Photo2_path` text NOT NULL,
  `Photo3` blob NOT NULL,
  `Photo3_path` text NOT NULL,
  `Photo4` blob NOT NULL,
  `Photo4_path` text NOT NULL,
  `Photo5` blob NOT NULL,
  `Photo5_path` text NOT NULL,
  `Introduction` text NOT NULL,
  `Title1` text NOT NULL,
  `Experience1` text NOT NULL,
  `Photo6` blob NOT NULL,
  `Photo6_path` text NOT NULL,
  `Title2` text NOT NULL,
  `Experience2` text NOT NULL,
  `Photo7` blob NOT NULL,
  `Photo7_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `posts`
--

INSERT INTO `posts` (`Location`, `Photo1`, `Photo1_path`, `Photo2`, `Photo2_path`, `Photo3`, `Photo3_path`, `Photo4`, `Photo4_path`, `Photo5`, `Photo5_path`, `Introduction`, `Title1`, `Experience1`, `Photo6`, `Photo6_path`, `Title2`, `Experience2`, `Photo7`, `Photo7_path`) VALUES
('Alishan', 0x616c697368616e312e6a7067, 'alishan1.jpg', 0x616c697368616e322e6a7067, 'alishan2.jpg', 0x616c697368616e332e6a7067, 'alishan3.jpg', 0x616c697368616e342e6a7067, 'alishan4.jpg', 0x616c697368616e352e6a7067, 'alishan5.jpg', 'The first summer trip to Taiwan for university was arranged in Chiayi - Alishan. Traveling with a group of friends from the same country, there was a lot of laughter along the way (the only thing left on the way up the hill was the sound of the car engine). When arriving at Alishan, there are mountains, rivers, and girls singing a song. I\'m sure most of you have heard this song before. Before that, I always thought that the title of the song was \"The Girls of Alishan\", but the aborigines of the Tsou tribe told me that actually the name of this song is called \"Mountain is Green\".', 'YUYUPAS Alishan Tsou Cultural Tribe', 'We also came here to knew the Tsou culture, and the aborigines brought us wonderful performances, such as the Hunting Dance (Warrior Dance), the Millet Harvest Festival Dance (ceremonial dance to worship the goddess of millet), and the singer group \"Maple Leaf\" sang for us. At the same time, the aboriginals also distributed Tsou-style specialties for tourists to try and drink, such as millet wine, goat pork jerky, etc. What impresses me most is the enthusiasm of the Tsou aborigines. Although the tribe is located at an altitude of 1,300 meters and is surrounded by magnificent mountains and tea fields, their enthusiasm surrounds me like a hot summer in Kaohsiung.', 0x616c697368616e332e6a7067, 'alishan3.jpg', 'Alishan National Scenic Area', 'The senior that travel together had made wish at the Wishing Pond in the Alishan National Scenic Area last year, and the wish had come true, so he went back for votive (I heard that the Wishing Pond is very efficacious). When visiting, those were tall trees and pools. The most impressive is the \"Sister Pool\". It looks ordinary from a distance, and at most it gives people a feeling of peace and tranquility; when you get closer, you will find the pool Too many tadpoles! It\'s super much! It feels like they will turn into frogs? or toad? in the next second? (And its super big size). I remember that we have being here super long, maybe almost half an hour. Squatting around the edge of the pool to watch the tadpoles move? Anyway, it\'s very interesting, but I really don\'t know if a pool of tadpoles turns into frogs? or toad? what kind of scene would it be (scalp tingling thinking about it).', 0x616c697368616e312e6a7067, 'alishan1.jpg'),
('Hualien', 0x6875616c69656e312e6a7067, 'hualien1.jpg', 0x6875616c69656e322d312e6a7067, 'hualien2-1.jpg', 0x6875616c69656e332d312e6a7067, 'hualien3-1.jpg', 0x6875616c69656e342d312e6a7067, 'hualien4-1.jpg', 0x6875616c69656e352e6a7067, 'hualien5.jpg', 'Hualien is a county of eastern Taiwan, which is surrounded by the mountains(Central Ra. and Coastal Ra.)and also near the Pacific Ocean.Which is rich with natural landscapes. For example, there are two national parks in Hualien county, Taroko National Park and Yushan National Park. Furthermore, it has the culture of indigenous people, there are many tribes, including Atayal, Truku, Amis, Sediq, and so on. So you can have a lot of unforgettable travel experiences in Hualien.', 'Taroko National Park', 'When you come to Hualien, do not miss Taroko National Park. Through the work of nature, many impressive landscapes such as cliffs and canyons in Taroko National Park are created. This time, I went to Tianxiang in Taroko, and stayed there for one night. During the visit, I also went to the Buluowan Suspension Bridge (Mountain-Moon Bridge), Jiuqu Cave, Shakadang Trail, Baiyang Trail.I recommend that you must go to the Baiyang Trail during summer because of the seven tunnels in the trail. And you will feel the cool air when you walk into the tunnels, it is a wonderful experience in hot summer.Besides, the highlight is the Shuilian Cave at the end of the trail. The Shuilian Cave can bring you an exciting adventure. Walking in it will definitely make you soaked, and the spring water will pour out from the top of the cave. In addition, you can choose two routes, namely, water or land, in the cave. If you choose water, it will bring you more exciting challenges and a cooler experience.', 0x6875616c69656e332d312e6a7067, 'hualien3-1.jpg', 'The Coastline', 'You can choose the coastline or ridgeline during the trip in Hualien. This time I chose the coastline, all the way along the Taiwan 11 line to the south, you can enjoy the scenery outside the car window is the vast Pacific Ocean. I spent a day from downtown Hualien to Shitiping, then from Shitiping to Guangfu Sugar Factory, and finally back to Taipei along the ridgeline. I went to scenic spots such as Jinshizizi Skywalk trail, Shitiping, and Shimen Cave on the coastline. I would like to introduce the Jinshizizi Skywalk trail in particular. You may think it is a very long trail, but, in fact, it will be completed within only ten to twenty minutes. It should be noted that the trail is narrow, and it is almost one-way when there are many crowds, so remember to stop and take pictures, or you will have to buy a new ticket to enter again. One feature of the trail is that it have a section of trail is glass flooring, but only one or two can be seen clearly. Although this trail is very short and the glass flooring does not seem to be very distinctive, the sea view of Hualien is still worth a visit, and it is recommended to go with other attractions on the coastline.', 0x6875616c69656e352e6a7067, 'hualien5.jpg'),
('Malaysia', 0x6d616c6179736961312e6a7067, 'malaysia1.jpg', 0x6d616c6179736961322e6a7067, 'malaysia2.jpg', 0x6d616c6179736961332e6a7067, 'malaysia3.jpg', 0x6d616c6179736961342e6a7067, 'malaysia4.jpg', 0x6d616c6179736961352e6a7067, 'malaysia5.jpg', 'Malaysia is a multi-racial country with three major races: Malays (Islamic), Chinese (Buddhism) and Indians (Hinduism). The origin of the Malays - In the 13th century, Parameswara, the prince of Melayu, rested under a Malacca tree on the way to escape. Parameswara feel that here was a lucky place, so he decided to settle here and named it Malacca (now the state of Melaka in Malaysia), and established the Sultanate of Malacca (Melaka Dynasty) here. In order to make merchants from Muslim countries to trade here, Islam was be opened to exchange religious beliefs. Later, Islam slowly spread here, strengthening Islam. The origin of the Chinese - The emergence of the Chinese is mainly due to immigrants who migrated to Malaya from Fujian, Guangdong, Guangxi and Hainan at the end of the Qing Dynasty to settle down and give birth to their descendants. Ever since I was a child, I have heard that my ancestors were tricked into Malaysia to \"sell piglets\" (work as coo', 'Traditional Clothing', 'Malaysia is a multiracial and multicultural country. Each race has its own culture and customs (including food culture, etiquette culture, dress customs, religious customs, etc.). The museum displays Chinese traditional clothing (Tangshan shirt and Cheongsam), Malay traditional clothing (Kebaya cloth, Malay suit), Indian traditional clothing (Sari, Dhati), Kadazan-Dushun traditional clothing ( Sinuangga, Tapi, Sinombiaka), and Iban traditional clothing (Sirat cloth, Dandong).', 0x6d616c6179736961362e6a7067, 'malaysia6.jpg', 'GOLDEN FLOWER (BUNGA MAS)', 'It is made of quality gold, was a special gift sent triennial by the Sultans of the Northern Malay States of Kedah, Kelantan, Terengganu and Patani to the once powerful King of Siam in Bangkok as a symbol of friendship. The sending of the Golden Flower began in the 14th century in a colorful ceremony accompanied by four spears with gilded shafts a keris encrusted with precious stones, a spittoon, a tobacco box a bouquet of betel leaves, and two rings. The king of Slam reciprocated with gifts of similar value. The practice of sending the Golden Flower was discontinued by the end of the 19th century.', 0x6d616c6179736961372e6a7067, 'malaysia7.jpg'),
('Tainan', 0x7461696e616e312e6a7067, 'tainan1.jpg', 0x7461696e616e322e6a7067, 'tainan2.jpg', 0x7461696e616e332e6a7067, 'tainan3.jpg', 0x7461696e616e342e6a7067, 'tainan4.jpg', 0x7461696e616e352e6a7067, 'tainan5.jpg', 'Chikan Tower is one of the famous landmarks in Tainan. As I walked into Chikan Tower, I could feel a strong historical atmosphere surrounding me. Its style of architecture is deeply affected by the Chinese traditional culture making it magnificent and venerable. Looking through out the front door, you can see the two main buildings, namely, the Haisheng Temple and Wengchang Pavilion, standing steadily at the front. When going forwards, the fish ponds and the arches on both sides of the road which possess different characteristics from this period make it especially quaint. This place is just like a retreat hidden inside the downtown. Visiting here will not only enrich one s knowledge of history, but also cultivate one s mind.', 'Haisheng Temple', 'Haisheng Temple is a building located at original Fort Provintia. The first floor displays the history and architectural styles of Chikan Tower. And the figure of Koxinga is obviously hung at the center. I can probably know about what it happened in there. The second floor displays various models of the ships anciently. There are some simply introductions for every kinds of boats. I\'m very excited to know more about them. That\'s so cool!', 0x7461696e616e352e6a7067, 'tainan5.jpg', 'Wengchang Pavilion', 'Wengchang Pavilion is next to Haisheng Temple. The first floor displays the educational materials at that time. I also saw the cheat sheets from the students at that time! The second floor displays a statue of the god which is about studying and a stand which people can write down their dream about quizes. When people get a Shing-bwei, they can donate some money(0 ~ N) to get a pen from the box. I got one. It has been in my bag.', 0x7461696e616e362e6a7067, 'tainan6.jpg'),
('Tamsui', 0x74616d737569312e6a7067, 'tamsui1.jpg', 0x74616d737569322e6a7067, 'tamsui2.jpg', 0x74616d737569332e6a7067, 'tamsui3.jpg', 0x74616d737569342e6a7067, 'tamsui4.jpg', 0x74616d737569352e6a7067, 'tamsui5.jpg', 'Tamsui is a town in New Taipei City, where the first impression of it is the sunset, most of the people enjoy themselves with the sunset on the riverside. Furthermore, Tamsui has an old street, you can find many tasty foods and many shops that sell souvenirs, such as fish crisps and iron eggs. And also Tamsui is a historical town, you can see many historical sites around it. Then, if you have time, you have to visit Tamsui.', 'Fisherman\'s Wharf', 'The first impression of Tamsui is the sun-set, most of the people enjoy themselves with the sun-set on the riverside. What we would like to introduce to you this time is the Fisherman s Wharf located in a place relatively far away from the MRT station, nevertheless, you can still get there simply by walk or bus. The architecture of Fullon hotel is built up in the shape of the cruise, it also offers you a good chance to take a picture here. In addition, the other bright side of Fisherman s Wharf is the Lover Bridge, do not miss the chance to walk through it and watch the night view. Moreover, it is highly recommended to visit the Shalun Beach nearby, where is also a nice place to enjoy the sunset. Last but not least, beware of one thing, DO NOT play with the water, since it is a dangerous area of the se', 0x74616d737569342e6a7067, 'tamsui4.jpg', 'Historical Sites', 'Tamsui is a good option for weekend, aside from the tasty food in the old street and enjoying the sunset by the riverside. Also known as the historical site, such as Fort Santo Domingo, Hobe Fort, Oxford College, Ho-be MacKay Hospital. Among them, I would like to introduce Oxford College, which is located in Aletheia University. You can see that it is a building that combines Chinese and Western styles. There is another attraction next to Oxford College, the Presbyterian Church. Although it is not a historical site, it is still worth visiting, its exterior design adopted the Gothic style, and inside the church has the second largest pipe organ in it, but it is not open all the time, so if you have a chance to go in, do not miss it.If you are the person, who like history or architecture you should not miss those attraction.', 0x74616d737569312e6a7067, 'tamsui1.jpg'),
('Taipei Zoo', 0x5461697065695f5a6f6f382e6a7067, 'Taipei_Zoo8.jpg', 0x5461697065695f5a6f6f31332e6a7067, 'Taipei_Zoo13.jpg', 0x5461697065695f5a6f6f31342e6a7067, 'Taipei_Zoo14.jpg', 0x5461697065695f5a6f6f312e6a7067, 'Taipei_Zoo1.jpg', 0x5461697065695f5a6f6f352e6a7067, 'Taipei_Zoo5.jpg', 'Taipei Zoo is the one zoo have pandas in Taiwan. I have already visited there many times, but every time I visit still bring me some new and special experiences. There are the shuttle trains and the Maokong Gondola for tourists to take. I always saw many tourists line up for them, so I seldom took them. Last time I went to Taipei Zoo is for a reality game which is in collaboration with Taipei Zoo. I spent the whole day, ran around the Zoo, saw many kinds of animals, and then negotiated the puzzles. Unfortunately, because of the time I have, I did not visit Xinguang Special Exhibit House (Giant Panda House). Not long ago, the panda \"TuanTuan\" died. I am so sorry to hear that. Last but not least, Taipei Zoo is a great place for a family to go visit, and both parents and children can enjoy themselves.', 'Tropical Rainforest Area', 'Tropical Rainforest Area (Pangolin Dome) displays the species of the tropical rainforest. It looks very magnificent. We go down the bridges that criss-cross in it. When we walked slowly through the bridges, four Cotton-top Tamarins got close to us. We were excited and quickly took some pictures of them. And in front of us, there was an animal which looks like a big bird, it ran into the underbrush after we approached it.', 0x5461697065695f5a6f6f31312e6a7067, 'Taipei_Zoo11.jpg', 'Children\'s Zoo', 'After visiting the whole Taipei Zoo, we took a break at Children s Zoo. I think this display area is suitable for parents to play with their children. There are many animals which children will like, such as Meerkat, Chinchilla, Alpaca, and so on. When I was sitting beside my friend and waiting other teams which had not finished their games, I saw some people chasing the chickens. Their playing scene made me keep laughing.', 0x5461697065695f5a6f6f32332e6a7067, 'Taipei_Zoo23.jpg'),
('Xitou', 0x5869746f75382e6a7067, 'Xitou8.jpg', 0x5869746f7531322e6a7067, 'Xitou12.jpg', 0x5869746f7531352e6a7067, 'Xitou15.jpg', 0x5869746f7531372e6a7067, 'Xitou17.jpg', 0x5869746f75342e6a7067, 'Xitou4.jpg', 'Xitou is located in Lugu village of Nantou County. ln Chinese \"Xitou\" means the origin of the river, this place is the headstream of Beishi River, hence the name. Xitou is abundant in natural and historical resources. There is a Xitou Nature Education Area, where you can spend a day taking a stroll. Xituo is also the habitat of Swinhoe s Pheasant, a kind of bird that is endemic to Taiwan. Besides, Xitou abounds with bamboo and high mountain tea, you can have some delicious bamboo shoot dishes and a great pot of tea here. In addition to tasty food, you can try some DIY activities. For example, making a lamp by using bamboo or having traditional bamboo weaving experience. So, Xitou is not only a good place to relax and get close to nature, but also a place to learn new things and broaden your horizons.', 'Xitou Nature Education Area', 'The representative sightseeing spot, the university pond, is in the Xitou Nature Education Area. In addition to the pond ,there are many trails in this area, from flat to steep, you can choose the one that matches your physical ability. You can take beautiful pictures and observe birds along the trails. One thing notable is that the area is so big that you may get lost, but people here are very nice so you can ask them for help. Spending a day walking around and enjoying the greenshower of the forest may help you beat the fatigue and get your energy back.', 0x5869746f75392e6a7067, 'Xitou9.jpg', 'Moso Bamboo Battlefield & Fonghuanggu Bird and Ecology Park', 'Moso Bamboo Battlefield is located in the Xiaobantian agricultural area. As its name indicates, it is a bamboo forest. And when you come here, you will feel like you are in the scene of an ancient Chinese chivalry drama, so you can do many martial arts poses, which make you look like a professional martial artist. Also you can just enjoy the moment of peace and comfort in the bamboo forest. What is moreover, here is the battlefield for the Lin Shuqng-Wen event , so you can make yourself feel like you were on the battlefield about 230 years ago. Fonghuanggu Bird and Ecology Park is also a part of the National Museum Of Natural Science. In the park, you will see many different kinds of birds and also their introduction, so if you like birds a lot , do not miss the chance to visit it. But get ready to climb many slopes after birdwatching, because the park is located in the mountains.', 0x5869746f7531332e6a7067, 'Xitou13.jpg'),
('Lotus Pond', 0x4c6f7475735f506f6e642e6a7067, 'Lotus_Pond.jpg', 0x4c6f7475735f506f6e645f342e6a7067, 'Lotus_Pond_4.jpg', 0x4c6f7475735f506f6e645f332e6a7067, 'Lotus_Pond_3.jpg', 0x4c6f7475735f506f6e645f322e6a7067, 'Lotus_Pond_2.jpg', 0x4c6f7475735f506f6e645f312e6a7067, 'Lotus_Pond_1.jpg', 'Besides studying in professional courses, I also developed in a new hobby, it is photography. I like the crisp [click] sound of the camera when the shutter is pressed, freezes the scene at this moment forever. After I got my first camera, I could not wait to take pictures everywhere, my \"novice village\" Lotus Pond. There are many oriental and antique buildings here, the most iconic in the scenic area is the Dragon Tiger Tower. In addition, there are a ponds full of lotus, Tzu-Chi Temple, Spring and Autumn Pavilion, and Turtle Release Pond, etc.', 'Dragon Tiger Tower', 'There are statues of a dragon and a tiger in front of the two 7-story towers. Entering from the dragon s mouth and exiting from the tiger s mouth (it has the meaning of eliminating disasters, and auspicious). The noon sun is dazzling and hot, but it did not let me give up. I tries to take pictures for a long time and I adjusted the shooting angle many times until I took the pictures that I was satisfied with. And this is one of the pictures I was satisfied with that day.', 0x4c6f7475735f506f6e645f342e6a7067, 'Lotus_Pond_4.jpg', 'Wuli Pavilion', 'What I like the most on the Lotus Pond is this small pavilion in the distance. Usually people will not pay attention on the small building that far away from iconic areas, but Wuli Pavilion caught my eye. It makes me feel like I am in the ancient times. To be honest, I could not take my eyes away, and no matter how I photographed it, it has an ancient feel on it, which is shocking. This picture is still my favorite to this day.', 0x4c6f7475735f506f6e645f352e6a7067, 'Lotus_Pond_5.jpg'),
('Fo Guang Shan', 0x466f5f4775616e675f5368616e312e6a7067, 'Fo_Guang_Shan1.jpg', 0x466f5f4775616e675f5368616e332e6a7067, 'Fo_Guang_Shan3.jpg', 0x466f5f4775616e675f5368616e362e6a7067, 'Fo_Guang_Shan6.jpg', 0x466f5f4775616e675f5368616e372e6a7067, 'Fo_Guang_Shan7.jpg', 0x466f5f4775616e675f5368616e322e6a7067, 'Fo_Guang_Shan2.jpg', 'It is rare to get up early on weekends and went out to FO Guang Shan.The blue sky with cool weather, like\r\nIn heralding a good day today.About 40km away, arrived at Fo Guang Shan. Through the introduction of Mr. Wu, I learned a lot of stories about Sakyamuni becoming a Buddha (and the 32 phases of Shiyin Bodhisattva, the meanings of some \"Chinese characters and words\", etc.). Every view and building of Fo Guang Shan is amazing (shutter click sound non-stop). The most impressive place should be the Jade Buddha Hall, which enshrines a statue of Shakyamuni Buddha and Buddha tooth relic, as well as Amitabha Buddha and Medicine Buddha. The size of the relic is very small, it is enshrined in a high place, it can only be seen with your \"heart\". Not in the hall can take pictures, but seeing as we came from afar, we were allowed to take a picture or two make souvenirs.\r\n', '8 Tower', 'Eight Chinese-style seven-storey pagodas means 1 is teaching, 2 is congregations, 3 is good, 4 is giving, 5 is harmony, 6 is degrees, 7 is commandments, and 8 is ways. Master Cirong introduced the eight pagodas one by one: \"One teaching\" refers to humanistic Buddhism, the teaching of human needs, the teaching of goodness and beauty, and the teaching of Buddha; It is to do good deeds, say good words, and have good intentions; the \"four giving\" include giving people confidence, joy, hope, and convenience. Only by \"giving\" can there be \"gain\"; \"five harmony\" is the most basic It is family harmony, because \"family and everything prosper\"; \"six perfections\" are giving, keeping precepts, patience, diligence, meditation, and prajna; \"seven commandments\" represent seven commandments songs; \"eight ways\" is the Eightfold Path, the eight methods of practice.', 0x466f5f4775616e675f5368616e362e6a7067, 'Fo_Guang_Shan6.jpg', 'Saving Angulimalya', 'Angulimalya, which means \" finger necklace \", slaughtered people randomly. He did so because his evil teacher told him that killing a thousand people, and forming a necklace using a finger from each of his victims, would allow him to attain enlightenment. Having already killed 999 people, he intended to kill his mother 16 complete his task. When the Buddha heard about ins be felt compassion and went looking for Angulimalya with the aim of guiding him toward the right path. When Angullmalya saw the Buddha coming, he held up his knife with the intention of killing the Buddha but was unable to approach him, The Buddha then taught Angulimalya the Dharma, after which he repented his wrongdoings and took refuge in the Buddha, Angulimalya s transformation from being evil to being\r\nkindhearted is similar to the sayings \"Put down the butcher\'s knife and one instantly becomes a Buddha.\"\r\n', 0x466f5f4775616e675f5368616e342e6a7067, 'Fo_Guang_Shan4.jpg'),
('Austria', 0x41757374726961322e6a7067, 'Austria2.jpg', 0x41757374726961332e6a7067, 'Austria3.jpg', 0x41757374726961342e6a7067, 'Austria4.jpg', 0x41757374726961352e6a7067, 'Austria5.jpg', 0x41757374726961312e6a7067, 'Austria1.jpg', 'Austria, in German, is called Oesterreich, a European country located in Central Europe with its border connected to five countries, namely, Czech Republic to the north, Lichtenstein to the west, Italy to the southwest, Germany to the northwest, Slovakia to the northeast, Republic of Slovenia to the south, and Hungary to the southeast. The official language that Austria uses is German. Austria is a country that is famous for its history of music and significant position in the early century that makes this ancient country possess with abundant historical sites and have so many great personages.', 'Graz', 'Our schedule for the first day in Graz is so crowded. As soon as we arrived at Graz Hauptbahnhof, which is the main station, we were impressed by the beautiful ceiling of the station as shown in the picture above. After arriving at the main station, we then consulted with the staff in the tourist information about whether to take the tram or other type of local transportation and which ticket best fit us to get to the hotel. In the end, we decided to purchase the 1-hour tickets instead of the 24-hour tickets and took the tram to the city center, Hauptplatz/Congress station. After quickly settling down, we went to the supermarket nearby , called Markt, to do some shopping. On the way back to the hotel, there was a nice small take-away shop, selling delicious pizza and tasty kebab. We end a wonderful first day of our trip with nice food, drink, and the most important part, the stunning scenery of Graz.', 0x41757374726961322e6a7067, 'Austria2.jpg', 'Salzburg', 'In Salzburg, we bought a 24-hours ticket called Salzburg Card. I highly recommend anyone who would like to spend a whole day looking around or visiting different landmarks in Salzburg, to buy this ticket at the beginning of your trip. Starting from the visit of the house, Hagenauer Haus, where a famous and well-known musician, Wolfgang Amadeus Mozart, was born. We\'ve also visited a majestic palace, which is called Schloss Helbrunn and went to St. Peter\'s Church, called Peterskirche in german. The next stop is the Salzburg Residenz which is also a famous magnificent landmark in Salzburg. We really enjoyed our day of being able to enter so many spectacular places!', 0x41757374726961312e6a7067, 'Austria1.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `tips`
--

CREATE TABLE `tips` (
  `tip_id` int(11) NOT NULL,
  `Location` text NOT NULL,
  `tip_title` text NOT NULL,
  `tip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `tips`
--

INSERT INTO `tips` (`tip_id`, `Location`, `tip_title`, `tip`) VALUES
(1, 'Alishan', 'Cold Weather', 'Bring jacket or warm clothes.'),
(2, 'Alishan', 'Take Motion Sickness Pills', 'Take motion sickness pills before going up/down the mountain. (If you get motion sickness).'),
(3, 'Alishan', 'Careful Drive', 'It is foggy in the morning and evening, be careful when driving.'),
(4, 'Alishan', 'Buy Tickets Online', 'Buy tickets for Alishan National Scenic Area online in advance, skip the line and save time.'),
(1, 'Hualien', 'Sun Protection', 'If you visit Hualien in summer, you need to do enough for sun protection. You can choose to apply some sunscreen, use an umbrella or wear long-sleeved clothes, otherwise you may get sunburn. In addition, many scenic spots need to walk, so drink as much water as possible during your travel itinerary to avoid heatstroke.'),
(2, 'Hualien', 'Tarffic', 'Traveling by train to Hualien can avoid the traffic jam on the Suhua Highway. But in Taroko or the coastline, it is best to have a car as a means of transportation.'),
(3, 'Hualien', 'Clothing', 'We suggest you wear climbing suits in Taroko.'),
(4, 'Hualien', 'Monkey', 'Be careful with the formosan macaque in Taroko.'),
(1, 'Malaysia', 'Sun Protection', 'Bring sun protection (sun clothing, sun hat, sunscreen, etc.).'),
(2, 'Malaysia', 'Mind Your Personal Belongings', 'The wealth donot exposed，and keep valuables property (poor security).'),
(3, 'Malaysia', 'Bring Digestant', 'The diet is spicy, bring digestive tablets and stomach medicine for backup.'),
(4, 'Malaysia', 'Bring Adapter', 'Prepare the adapter plug and transformer (Malaysian voltage 220V, triangular cylindrical socket).'),
(5, 'Malaysia', 'Right-hand Drive', 'Right-hand drive (keep left).'),
(6, 'Malaysia', 'Dress Code', 'Mosques, Museums and religious places need to dress appropriately (over knee skirt/trousers, conservative T-shirt, no flip flops and sandals).'),
(1, 'Tainan', 'Hot Midday', 'Don’t visit there at midday, or you will get very hot.'),
(2, 'Tainan', 'Foods on Guohua Street', 'After visiting there, you can find the food nearby. There is a street near Chikan Tower called Guohua Street. There are many delicious food and drinks.'),
(3, 'Tainan', 'Maximun 2 Hours per Visit', 'The maximum time per visit is 2 hours. If you don’t have any other plan, you will have to find another place to spend the rest of the time.'),
(4, 'Tainan', 'Drive Car or Take Bus', 'You can drive a car or take the bus to there. If you go there on foot, it will take you much time.'),
(5, 'Tainan', 'NT$50 per Person', 'The ticket for entering the Chikan Tower costs NT$50 per person.'),
(1, 'Tamsui', 'By EasyCard', 'It is recommended that you have a EasyCard to take the tram, the MRT, and YOUBIKE.'),
(2, 'Tamsui', 'Winter', 'When you come to Tamsui in winter,it is recommended that you have to wear more layers and also bring rain gear.'),
(3, 'Tamsui', 'Appetite', 'Keep your appetite for the foods in Tamsui.'),
(4, 'Tamsui', 'Weather Forecast', 'Keep your appetite for the foods in Tamsui.'),
(1, 'Taipei Zoo', 'Raised Tickets', 'The tickets of Taipei Zoo will be raised from 60 to 120 dollars.'),
(2, 'Taipei Zoo', 'Lunch Time Jam', 'In the afternoon, the people who want to take lunch will become very much, so it is hard to find the place for us to eat something. You can take your food early.'),
(3, 'Taipei Zoo', 'Additional Costs', 'The shuttle trains and the Maokong Gondola still need additional costs and more time to line up. However, after the tickets price raise, they won’t cost you any more.'),
(4, 'Taipei Zoo', 'Wear The Sneakers', 'Taipei Zoo is very wide, so you need to wear the sneakers which are suitable to walk for a long time.'),
(1, 'Xitou', 'Clothing', 'Wearing warm clothes because in the evening the weather will be cold, especially in winter.'),
(2, 'Xitou', 'Traffic', 'You are better to drive a car in Xitou, otherwise you have to wait for the bus. In the morning and evening you also need to drive more carefully because it is foggy.'),
(3, 'Xitou', 'Wild Animal', 'Xitou is the habitat for many wild animals,  including Swinhoe’s Pheasant and monkey. It is forbidden to feed them and make noises.'),
(4, 'Xitou', 'ID Card', 'In some places, there are concession tickets for students and elders. So you need to bring your ID card in order to let staff check your identity.'),
(1, 'Lotus Pond', 'Lotus Season', 'The lotus season is the best time to visit.'),
(2, 'Lotus Pond', 'Mosquito Problem', 'Mosquito control measures (mosquito repellent).'),
(3, 'Lotus Pond', 'Safety', 'Pay attention, the road is narrow and there are many cars.'),
(4, 'Lotus Pond', 'Public Transport', 'Public transport (MRT、bus).'),
(1, 'Fo Guang Shan', 'Wear Comfortable Shoes', 'Need to walk mountain road and many steps.'),
(2, 'Fo Guang Shan', 'Well Dressed', 'The Buddhist hall is a solemn place, and revealing clothing is not allowed.'),
(3, 'Fo Guang Shan', 'Sun Protection', 'The noon sun is hot, you can also bring a sun glasses'),
(1, 'Austria', 'Have coins by your side', 'Since you might run into nature calls and most of the public restrooms in European countries are user-charged, having some coins such as 50 cents, 1 Euro or 2 Euro by your side will help you access the public toilet much easier.'),
(2, 'Austria', 'Check the time schedule of the tram and the railway', 'The time schedule of the train and tram in Austria is so essential that you might miss it when not catching up.'),
(3, 'Austria', 'Look up the map first', 'By looking up the map, it will help you get to the destination more quickly and clearly.'),
(4, 'Austria', 'Go to the tourist information center', 'Tourist information center provides the visitors with a variety of trip tickets in Austria which are worth buying. With these tickets, you can even enter many places without further charge.');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Statu` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Passwords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `Statu`, `Username`, `Passwords`) VALUES
(0, 'Manager', 'StudentA', '123abc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
