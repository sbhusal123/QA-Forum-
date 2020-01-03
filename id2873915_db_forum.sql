-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2017 at 10:32 AM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2873915_db_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `accstat` text NOT NULL,
  `PIN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `username`, `email`, `password`, `accstat`, `PIN`) VALUES
(1, 'bhusal1', 'suryabhusal11@gmail.com', 'bhusal1', '0', '1505197258-950765913'),
(3, 'mahi123', 'mahimakhadka11@gmail.com', 'mahi123', '0', ''),
(4, 'user', 'user@gmail.com', 'user', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `link_id` varchar(11) NOT NULL,
  `comment` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `link_id`, `comment`, `username`) VALUES
(12, '120', 'A/D converter are used in converting the analog signal to digital signal. That\'s what i know please google it for more.You could get better answers at google.', 'bhusal1'),
(13, '120', 'Din\'t heard about that.', 'mahi123'),
(17, '120', 'A/D converts are the instrumentation machines used in converting analog to digital signal. Get the detial at provided link below:\nhttps://en.wikipedia.org/wiki/Analog-to-digital_converter', 'user'),
(71, '121', 'Download it from cnet. It\'s easy with video tutorials. File size is 2GB or download it from torrent.', 'user'),
(72, '121', 'Please google it or get it at ocean of games. https://grand-theft-auto-vice-city.en.softonic.com/', 'bhusal1'),
(153, '121', 'Hmm. That\'s good about you man!! ', 'bhusal1'),
(155, '121', 'Yup! I\'ve downloaded it from ocean of games. File size 2 GB @user.', 'mahi123'),
(157, '123', 'I used to view movies at www.123movies.com', 'bhusal1'),
(159, '123', 'It has various movies country wise, genere wise. Hope you enjoy the movie.', 'bhusal1'),
(160, '123', 'Thanks @bhusal1.', 'mahi123'),
(161, '123', 'You are must welcome @mahi123.', 'bhusal1'),
(162, '123', 'www.fmovies.to , www.yesmovies.to and best of all www.123movies.to. That\'s my list.', 'user'),
(163, '119', 'DOM refers for Document Oject Model. XMLHttp request are actually the ajax module used in dealing with the front end web. View it at www.w3schools.com. I\'ve learned a lot about it from there.', 'bhusal1'),
(164, '119', 'Hmm thanks a lot @bhusal1. I\'ll refer to your links.', 'user'),
(175, '96', 'First Law of thermodynamics is all about heat and workdone. It states that \"The workdone on the system is equal to the heat produced by the system\". But that\'sideal case.', 'bhusal1'),
(180, '119', 'There\'s another alternative to the javascript called jquery.  Most of the website uses jquery nowdays.', 'bhusal1'),
(187, '118', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n', 'mahi123'),
(188, '118', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'mahi123'),
(189, '117', 'Dijkstra\'s algorithm is an algorithm for finding the shortest paths between nodes in a graph, which may represent, for example, road networks. It was conceived by computer scientist Edsger W. Dijkstra in 1956 and published three years later.[1][2]\n\nThe algorithm exists in many variants; Dijkstra\'s original variant found the shortest path between two nodes,[2] but a more common variant fixes a single node as the \"source\" node and finds shortest paths from the source to all other nodes in the graph, producing a shortest-path tree.', 'user'),
(190, '96', 'The first law of thermodynamics is a version of the law of conservation of energy, adapted for thermodynamic systems. The law of conservation of energy states that the total energy of an isolated system is constant; energy can be transformed from one form to another, but can be neither created nor destroyed. ', 'user'),
(191, '125', 'Gradle is another build system that takes the best features from other build systems and combines them into one. It is improved based off of their shortcomings. It is a JVM based build system, what that means is that you can write your own script in Java, which Android Studio makes use of', 'bhusal1'),
(194, '126', 'Step 1. Open http://www.google.com/android/devicemanager from your other phone or desktop computer or laptop.\n\nStep 2. Sign in with the Google account which you used in your previous phone which is currently locked.\n\nStep 3. Simply choose the device you wish to unlock in the Android Device Manager Interface. Choose \"Lock\".\n\nStep 4. Enter a password in the screen which is appearing and click on \"Lock\" option. You don\'t have to put anything in the recovery message. It is just an optional step.\n\nStep 5. You will see a confirmation message underneath the box with the buttons which says Ring, Lock and Erase if it is done successfully.\n\nStep 6. Now pick your phone which is currently locked and you should a password field where you will have to type the new password which you just set in above steps.\n\nHmm it\'s easy. Hope you got it.', 'user'),
(195, '126', '\n\n\n\n                                                        \n\nJust try this factory reset mode.\nStep 1. Hold the power button and volume down at the same time, the Bootloader menu will open.\n\nStep 2. Press volume down button two times to select \"Recovery Mode\" and choose it by pressing \"Power\" button.\n\nStep 3. Hold down the power button and tap \"Volume Up\" once, enter \"recovery\" mode.\n\nStep 4. In the menu, there is a option \"Wipe Data/Factory Reset\", choose it by pressing Power button.\n\nStep 5. Select \"Reboot System Now\" once the process is done.', 'bhusal1'),
(197, '127', 'Just put the link and download at :: https://www.onlinevideoconverter.com/video-converter', 'bhusal1'),
(198, '127', 'Download from savefrom.net http://en.savefrom.net/1-how-to-download-youtube-video/', 'mahi123'),
(209, '126', 'What the hell.', 'bhusal1'),
(210, '131', 'Hello babu', 'bhusal1');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `title` text NOT NULL,
  `question` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `username`, `title`, `question`, `time`) VALUES
(96, 'mahi123', 'Thermodynamics', 'Explain first law of thermodynamics in datail also explain about Claurit\'s Law.                        \n                    ', '2017-09-05 19:03:22'),
(117, 'bhusal1', 'Data Structure', 'Explain about Dijkstra\'s Algorithm for finding the minimum path.                         ', '2017-09-09 09:12:03'),
(118, 'bhusal1', 'Instrumentation', 'Explain about instrumentation system with the help of block diagram. Also explain about transducer and LVDT in detail.             \n                    ', '2017-09-09 09:13:38'),
(119, 'user', 'Javascript', 'What is javascript? Explain about DOM XMLHttp Request in javascript.                \n                    ', '2017-09-09 09:46:06'),
(120, 'bhusal1', 'Instrumentation', 'Draw the full diagram of A/D converter and explain in detail.                        \n                    ', '2017-09-09 11:30:01'),
(121, 'bhusal1', 'Gaming', 'How could i download GTA vice city. Please provide me the link.                      \n                    ', '2017-09-09 17:21:32'),
(123, 'mahi123', 'Movie', '                        \n                    Can anyone suggest me the movie link.', '2017-09-10 18:19:15'),
(125, 'user', 'Android', ' What is graddle built in android?                        \n                    ', '2017-09-11 05:26:26'),
(126, 'mahi123', 'Android', 'How to bypass lock screen in android?                         \n                    ', '2017-09-11 05:30:03'),
(127, 'user', 'Youtube', 'Please provide me link to download youtube videos online.                        \n                    ', '2017-09-11 05:40:43'),
(131, 'user', 'Electromagnetics', 'What is poynting vector?                        \n                    ', '2017-09-12 06:25:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
