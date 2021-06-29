-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 07:29 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(255) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `number`, `email`, `message`) VALUES
('santoi', '37463876458923', 'hack@gmail.com', 'ok '),
('santoi', '37463876458923', 'hack@gmail.com', 'ok '),
('santoi', '37463876458923', 'hack@gmail.com', 'ok '),
('santoi', '37463876458923', 'hack@gmail.com', 'ok ');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_category` varchar(255) NOT NULL,
  `post_auther` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_category`, `post_auther`, `post_status`, `post_tags`, `post_content`, `post_date`, `post_image`) VALUES
(3, 'Loss Weight', '', 'santohack', 'active', 'fit', 'You can choose any 8-hour window to consume calories. Some people opt to skip breakfast and fast from noon to 8 p.m., while others avoid eating late and stick to a 9 a.m. to 5 p.m. schedule. Limiting the number of hours that you can eat during the day may', '2021-06-29 03:00:24', 'blog-2.jpg'),
(4, 'Gain Weight', '', 'shivansh', 'active', 'gain', 'Try almonds, sunflower seeds, fruit, or whole-grain, wheat toast. Go nutrient dense. Instead of eating empty calories and junk food, eat foods that are rich in nutrients. Consider high-protein meats, which can help you to build muscle.', '2021-06-29 03:01:19', 'bd-2.jpg'),
(5, 'Be Fit', '', 'Rohit', 'active', 'kgm', 'A person who is physically fit is capable of performing and enjoying daily activities. The importance of being physically fit cannot be understated. More people are at risk to cardiovascular diseases, depression, obesity, hypertension, and other health is', '2021-06-29 03:02:22', 'blog-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'santohack', 'Santohack@gmail.com', 'santohack', 'santohack');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `auther` varchar(255) NOT NULL,
  `bmi` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `auther`, `bmi`, `date`, `video`) VALUES
(2, 'Loss Weight', 'santohack', 'fit', '2021-06-29 02:52:10', '<iframe width=\"360\" height=\"215\" src=\"https://www.youtube.com/embed/zlyqr9bNs1E\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'Gain Weight', 'rohit', 'underWeight', '2021-06-29 02:56:04', '<iframe width=\"360\" height=\"215\" src=\"https://www.youtube.com/embed/H3jJ29oE8Zg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'Be FIt', 'Balaram', 'FIt', '2021-06-29 03:07:07', '<iframe width=\"360\" height=\"215\" src=\"https://www.youtube.com/embed/XTH5saFBDqA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, 'loss', 'rohit', '25-30', '2021-06-29 10:28:22', '<iframe width=\"360\" height=\"215\" src=\"https://www.youtube.com/embed/4PDJ2wPFKT0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
