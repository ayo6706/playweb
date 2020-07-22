-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 04:21 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `img` longblob,
  `name` text,
  `link` varchar(500) DEFAULT NULL,
  `infop1` text,
  `infop2` text NOT NULL,
  `infop3` text NOT NULL,
  `infop4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `img`, `name`, `link`, `infop1`, `infop2`, `infop3`, `infop4`) VALUES
(9, 0x657468657265756d2d7072696365732d333030783136302e6a7067, 'Ethereum Price Crosses $1,000 For The First Time To Create New...', '../blog_post.php', 'UGIHL', '', '', ''),
(10, 0x616e64726f69642d6861636b696e672d6170702d323031372d333030783136302e6a7067, '15 Best Free Hacking Apps For Android Phones (2018 Edition)', '../blog_post.php', 'UGIHL', '', '', ''),
(11, 0x4578796e6f732d393831302d6d61696e2d333030783136302e6a7067, 'iPhone X-Like Features Coming To Galaxy S9 With New Exynos Chip', '../blog_post.php', 'GUIHOGHJ', '', '', ''),
(12, 0x427269616e2d4b727a616e6963682d496e74656c2d73746f636b732d736f6c642d333030783136302e6a7067, 'Intel CEO Sold $24 Million In Stocks After Google Exposed 10...', '../blog_post.php', 'DTDFYGHK', '', '', ''),
(13, 0x616164686161722d646174612d6272656163682d3530302d333030783136302e6a7067, 'Aadhaar Data Breach: Is Sensitive Data Of 1.2 Billion Indians On...', '../blog_post.php', 'DCYVUIHB', '', '', ''),
(14, 0x6c696e75782d6d696e742d6465736b746f702d333030783136302e6a7067, 'Linux Mint 19 Tara Release Date Announced: Know Expected Features Here', '../blog_post.php', 'WSSSFFFFFF', '', '', ''),
(15, 0x4c696e75732d546f7276616c64732d416e6772792d494e74656c2d333030783136302e6a7067, 'Linus Torvalds Latest Meltdown: Is Intel Selling Sh*t And Never Willing...', '../blog_post.php', '', '', '', ''),
(16, 0x494e54454c2d4350552d464c41572d4d454c54444f574e2d535045435452452d333030783136302e6a7067, 'How To Protect Your PC And Phones From Meltdown And Spectre...', '../blog_post.php', '', '', '', ''),
(17, 0x6d656c74646f776e2d737065637472652d70726f74656374696f6e2d333030783136302e6a7067, 'Metldown And Spectre: Intel Promises To Fix 90% of 5 Year...', '../blog_post.php', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `contact` int(20) NOT NULL,
  `form` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `contact`, `form`) VALUES
(1, '', '', 0, ''),
(3, 'eoo', 'i@gmail.com', 3463663, 'gdssgsg'),
(4, 'asjfkl', 'skjm@gmail.com', 0, 'rgx'),
(6, 'david', 'ayo@gmail.com', 875866, 'ddaavvz'),
(7, '', '', 0, ''),
(8, 'dsz', 'bs@gmail.com', 3234365, 'asdksd;a;ds'),
(10, 'testing', 'test@gmail.com', 3234365, 'wdaaaaaaaacf'),
(11, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `hack`
--

CREATE TABLE `hack` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hack`
--

INSERT INTO `hack` (`id`, `name`, `link`) VALUES
(1, 'hacking tutorial by a', '#'),
(2, 'hacking tutorial by b', '#'),
(3, 'hacking tutorial by c', '#'),
(4, 'hacking tutorial by d', '#'),
(5, 'hacking tutorial by e', '#'),
(6, 'hacking tutorial by f', '#');

-- --------------------------------------------------------

--
-- Table structure for table `like_unlike`
--

CREATE TABLE `like_unlike` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_unlike`
--

INSERT INTO `like_unlike` (`id`, `userid`, `postid`, `type`) VALUES
(1, 5, 10, 1),
(2, 5, 11, 0),
(3, 5, 12, 1),
(4, 5, 9, 1),
(5, 5, 14, 1),
(6, 5, 13, 1),
(7, 5, 17, 0),
(8, 5, 16, 1),
(9, 5, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `link`) VALUES
(1, 'php tutorial from tutorial point', '#'),
(2, '	java tutorial from tutorial point	', '#'),
(3, '	c tutorial from tutorial point	', '#'),
(4, 'c++  tutorial from tutorial point	', '#'),
(5, 'python tutorial by ayo', '#'),
(6, 'html tutorial by ayo', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(27, 0, '  cool thanks for the tutorails', 'ayomide', '2018-02-08 09:00:13'),
(28, 27, 'you are welcome', 'admin', '2018-02-08 09:00:33'),
(29, 0, 'cool', 'david', '2018-02-08 09:01:04'),
(30, 29, 'you are welcome', 'admin', '2018-02-08 09:01:32'),
(31, 27, '  Fggh\r\n', 'He', '2018-02-08 12:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `udemy`
--

CREATE TABLE `udemy` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `udemy`
--

INSERT INTO `udemy` (`id`, `name`, `link`) VALUES
(2, 'All Courses $12 Each - New Student Discount', '#'),
(3, 'All Courses $25 Each - New Student Discount', ''),
(4, 'All Courses $12 Each - New Student Discount', ''),
(5, 'All Courses $12 Each - New Student Discount', ''),
(6, 'All Courses $12 Each - New Student Discount', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ayomide onib', 'ayo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hack`
--
ALTER TABLE `hack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_unlike`
--
ALTER TABLE `like_unlike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `udemy`
--
ALTER TABLE `udemy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hack`
--
ALTER TABLE `hack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `like_unlike`
--
ALTER TABLE `like_unlike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `udemy`
--
ALTER TABLE `udemy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
