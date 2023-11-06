-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



--
-- 資料庫： `tbtodo`
--

-- --------------------------------------------------------

--
-- 資料表結構 `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `releaseDate` date NOT NULL,
  `releasePeriod` varchar(255) NOT NULL,
  `relevantAttachments` varchar(255) NOT NULL,
  `relatedURL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `announcement`
--

INSERT INTO `announcement` (`id`, `purpose`, `category`, `unit`, `content`, `releaseDate`, `releasePeriod`, `relevantAttachments`, `relatedURL`) VALUES
(1, '你有樣子，是指。', '一般', '', '標誌不管高級原本化工痛苦是因為有所不滿創新眼光相。', '2023-09-07', '3', 'file://path-to-file', 'www.link-for-info.com'),
(2, '跟着高。', '一般', '', '實力懷疑諾基亞物理，想像軍事旁邊暫無適應，工商有人台鐵，所。', '2023-10-05', '', '', ''),
(3, '再度測試，商城節目。', '一般', '', '按鈕詳細訊息反饋反正，學校插入下載次數瀏覽器突破參觀繼續表明物流轉貼鎖定畢業生無門，西方一塊早就社。', '2023-10-17', '', '', ''),
(4, '合理街道不少書。', '招生', '', '', '2023-10-19', '', 'ABC.pdf', ''),
(5, '解壓密碼懷疑，下去。', '一般', '', '直播主排行榜醫院，簽名我的心房子，相機一會，觀念大力，有什麼房子收益有一預測春天傢伙重量原文並不娛樂，令人這位發現加入，開放當然塑膠污染相信輔助反正工廠傳真主義如有教學是的，從而曾經高速就算參考，經驗屏幕，現金她說說道指南歐洲擔心相應有權從此基隆隨後原本。', '2023-10-28', '', '', 'https://google.com.tw'),
(6, '語言一大，營銷新竹也不，儘管有限公司系。', '一般', '', '大哥經驗原因玻璃電源態度當我，點擊數身份，兩個老婆材料幾天反應，年輕發生從此面議百姓卻是跟我權力氣息適當左右不錯的話，防止選手心中專欄部分故事探索長大一會美國期間這樣進入毫無，發表充滿範圍內不要網通，分別員工模型的是稿件委託地點但在也就一切紅色，不可能經。', '2023-10-22', '', 'DEF.pdf', '');

-- --------------------------------------------------------

--
-- 資料表結構 `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `resource` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `applicant`
--

INSERT INTO `applicant` (`id`, `goal`, `method`, `resource`, `link`) VALUES
(2, '大學部', '甄選入學', '隨機資源1', 'https://example.com/775ac557b29c3b803c1c2519b5d7f5ee'),
(3, '大學部', '甄選入學', '隨機資源2', 'https://example.com/1c19428c0a9ef9e0f5e97943b32fc5da'),
(4, '大學部', '甄選入學', '隨機資源3', 'https://example.com/2d28a22b7e4a7d0b1b545a262c8ea7f5'),
(5, '大學部', '甄選入學', '隨機資源4', 'https://example.com/9ea1c6a5a6155f6e4d9e85d822a54379'),
(6, '大學部', '甄選入學', '隨機資源5', 'https://example.com/3767c10b2e96de8d9848b6ea8a7de819'),
(7, '大學部', '甄選入學', '隨機資源6', 'https://example.com/d272f1c162f649964bf32f25815f5f3e'),
(8, '大學部', '甄選入學', '隨機資源7', 'https://example.com/8b48d3367e1ba3e24a8880216e641049'),
(9, '大學部', '聯合登記分發', '隨機資源8', 'https://example.com/28c8949f979cb506aaf1c61f89e32ed7'),
(10, '大學部', '聯合登記分發', '隨機資源9', 'https://example.com/af15e703a0b2e4b72b71f1539eefee24'),
(11, '大學部', '聯合登記分發', '隨機資源10', 'https://example.com/0a9edc2f50b5e90abf3dbdcfb19c4584'),
(12, '大學部', '聯合登記分發', '隨機資源11', 'https://example.com/fe1fba20c09c7b8e098b8fda68ee1eb3'),
(13, '大學部', '繁星計畫', '隨機資源12', 'https://example.com/013217123d1294d8675de4f846be7653'),
(14, '大學部', '繁星計畫', '隨機資源13', 'https://example.com/36764c683b1343d34d87ba9fe9fdefe8'),
(15, '大學部', '繁星計畫', '隨機資源14', 'https://example.com/ef12388179e5f24c0d35b3e177c3a90f'),
(16, '大學部', '特殊選才入學', '隨機資源15', 'https://example.com/263cd9301ed394cd74ec5db93c8ac051'),
(17, '大學部', '技優甄選', '隨機資源16', 'https://example.com/69fc51363e189f94c65b96d662a7b85b'),
(18, '大學部', '技優甄選', '隨機資源17', 'https://example.com/32ac3404f2b30c1e5a3f3c84d88a46e4'),
(19, '大學部', '技優甄選', '隨機資源18', 'https://example.com/e021d4c01eeec2814224b44229c6ce3e'),
(20, '大學部', '技優甄選', '隨機資源19', 'https://example.com/ee16bf5e30796f33e317ca2763f3b493'),
(21, '大學部', '技優甄選', '隨機資源20', 'https://example.com/2e7a17d11a6889e3d2b6f57f58a9d95a'),
(22, '大學部', '申請入學', '隨機資源21', 'https://example.com/7a1890656db092b98a0c7a665a85875d'),
(23, '大學部', '申請入學', '隨機資源22', 'https://example.com/29b1d8370e91b5aa3c6d40c54c07f2e6'),
(24, '大學部', '申請入學', '隨機資源23', 'https://example.com/057fe3bc28d7a5cb80cfcdc48e9a7f37'),
(25, '大學部', '申請入學', '隨機資源24', 'https://example.com/1d52a0a853f442ff5a08d5a3687bcf95'),
(26, '大學部', '申請入學', '隨機資源25', 'https://example.com/2a125b4667a3e3ba7443cb349ff8f8b9'),
(27, '大學部', '身障生入學', '隨機資源26', 'https://example.com/bbe1f6c0b853c8c3494b91f5de8c0297'),
(28, '大學部', '身障生入學', '隨機資源27', 'https://example.com/e5dbde417927c21e89992a6974409439'),
(29, '大學部', '日間部四技單獨招生', '隨機資源28', 'https://example.com/b7a59a9ab2ad837fb8b4088f132d98d2'),
(30, '大學部', '日間部四技單獨招生', '隨機資源29', 'https://example.com/8ac7e2a83e898f80bde8d8e4a181f7a7'),
(31, '碩士班', '碩士班甄試招生', '隨機資源30', 'https://example.com/8fc110384d6970366890d2e04833d58d'),
(32, '碩士班', '碩士班甄試招生', '隨機資源31', 'https://example.com/1c1e1dd84e5c0daa1c5e8364a04b6724'),
(33, '碩士班', '碩士在職專班甄試招生', '隨機資源32', 'https://example.com/e1ec16c22779c89d0dab37f72b9e6a0c'),
(34, '碩士班', '碩士在職專班甄試招生', '隨機資源33', 'https://example.com/1c1e1dd84e5c0daa1c5e8364a04b6724'),
(35, '碩士班', '碩士在職專班甄試招生', '隨機資源34', 'https://www.youtube.com/watch?v=7xylZ9xz2wY&feature=youtu.be&themeRefresh=1');

-- --------------------------------------------------------

--
-- 資料表結構 `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `employment` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `expertise` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `office_location` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `facultyimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `employment`, `title`, `education`, `expertise`, `email`, `office_location`, `phone`, `facultyimage`) VALUES
(1, '隨機名字1', '專任', '隨機職稱1', '隨機教育1', '隨機專業1', '隨機email1@example.com', 'A418-4', '隨機電話1', 'img/隨機圖片1.png'),
(2, '隨機名字2', '專任', '隨機職稱2', '隨機教育2', '隨機專業2', '隨機email2@example.com', '隨機辦公地點2', '隨機電話2', 'img/隨機圖片2.jpg'),
(3, '隨機名字3', '專任', '隨機職稱3', '隨機教育3', '隨機專業3', '隨機email3@example.com', 'B206', '隨機電話3', ''),
(4, '隨機名字4', '兼任', '隨機職稱4', '隨機教育4', '隨機專業4', '隨機email4@example.com', NULL, NULL, 'img/隨機圖片4.png'),
(5, '隨機名字5', '退休', '隨機職稱5', '隨機教育5', '隨機專業5', '隨機email5@example.com', 'B314', '隨機電話5', 'img/隨機圖片5.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `foodname` varchar(225) NOT NULL,
  `foodimage` varchar(255) NOT NULL,
  `foodmap` varchar(225) NOT NULL,
  `foodcell` varchar(225) NOT NULL,
  `foodtime` varchar(225) NOT NULL,
  `foodlist` varchar(225) NOT NULL,
  `foodcomment` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `food`
--

INSERT INTO `food` (`id`, `foodname`, `foodimage`, `foodmap`, `foodcell`, `foodtime`, `foodlist`, `foodcomment`) VALUES
(1, '早午餐', 'img/早午餐.jpg', 'ADD1', '(02) 3746-9046 ', '週一至週日:8:00-13:00', '早餐與早午餐', '4.1(64則評論)'),
(2, '自助餐', 'img/自助餐.jpg', 'ADD2', '(02)9254-4047', '週一至週日:10:00-20:00', '自助餐', '3.5(519則評論)'),
(3, '熱炒', 'img/快炒.jpg', 'ADD3', '(02)7914-8973', '週一至週五,週日:11:00-14:00,17:00-20:00', '炒飯、炒麵、湯麵、燴飯', '4.0(148則評論)');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
