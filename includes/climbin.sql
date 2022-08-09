-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 04:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `climbin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adult`
--

CREATE TABLE `adult` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `Price` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adult`
--

INSERT INTO `adult` (`id`, `type`, `Price`, `description`) VALUES
(6, '10 seancess', 200, 'Valable a vie/ Pas de restriction de temps'),
(7, 'abonnement 3 mois', 360, 'Valable 3 mois/ Pas de restriction de temps'),
(9, 'abonnement 1 an', 962, 'abonnement 1 an 3 fois par semaine');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `auteur`, `description`, `content`) VALUES
(1, 'jihed', 'test', 'teste', 'dyeryerydyeryeryd'),
(3, 'wajih', 'antoinne', 'jkdhkjhmldlkjdqjkdhkjhmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlsdkjhljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkq', 'mldlkjdmldlkjdqljkqskjljkdhkjhmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlsdkjhmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlmldlkjdqljkqskjlqljkqskjl');

-- --------------------------------------------------------

--
-- Table structure for table `boisson`
--

CREATE TABLE `boisson` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boisson`
--

INSERT INTO `boisson` (`id`, `image`, `title`, `price`) VALUES
(2, 'cafe.jpg', 'ddd', 777);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `Picture` text NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `Picture`, `Title`, `Description`, `Content`) VALUES
(4, 'class-2.jpg', 'club', 'hjgjhgvhjb', '6 10 ans'),
(5, '', 'club', 'zpoekkfpqozkd', 'qpeokfpok');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Price` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `Title`, `Price`, `description`) VALUES
(11, 'club 6-10 ans', 630, 'sdklfjomqsdmfoqsddfoqsdhfmqsljf,kqskjfhsh'),
(12, 'test2', 85285, 'testtest');

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`id`, `image`, `Title`, `Price`) VALUES
(2, '', 'test', 852);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `Picture` text NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `Picture`, `Title`, `Description`, `Content`) VALUES
(1, 'latest-1.jpg', 'ttttt', 'hhhhhh', 'ffff');

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE `extra` (
  `id` int(11) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`id`, `Picture`, `Title`, `Content`) VALUES
(1, 'class-1.jpg', 'te', 'te');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`image`, `id`, `Title`, `Price`) VALUES
('croque-monsieur-1.jpg', 2, 'sadwitch ', 85285),
('gaufres-3.jpg', 3, 'gauffre', 80),
('croque-monsieur-1.jpg', 4, 'test', 900);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `Picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `Picture`) VALUES
(1, 'test'),
(2, 'teetetet');

-- --------------------------------------------------------

--
-- Table structure for table `kid`
--

CREATE TABLE `kid` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Price` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kid`
--

INSERT INTO `kid` (`id`, `Title`, `Price`, `description`) VALUES
(6, 'testtest', 852, 'test'),
(7, 'jjjjj', 0, 'slkdjfqsdhfqsohfoiqsdjfoiqsdj');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ms_id` int(11) NOT NULL,
  `ms_username` varchar(255) NOT NULL,
  `ms_usermail` varchar(255) NOT NULL,
  `ms_detail` text NOT NULL,
  `ms_date` varchar(255) NOT NULL,
  `ms_status` varchar(255) NOT NULL,
  `ms_state` int(11) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `Picture` text NOT NULL,
  `Title` text NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `Picture`, `Title`, `Content`) VALUES
(1, 'test', 'testtest', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Content` text NOT NULL,
  `Picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `Title`, `Content`, `Picture`) VALUES
(2, 'testtest', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `Picture` text NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `Picture`, `Name`) VALUES
(4, 'team-3.jpg', 'testtest'),
(5, 'team-5.jpg', 'ayoub');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_nickname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_photo` text NOT NULL,
  `registered_on` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_nickname`, `user_email`, `user_password`, `user_photo`, `registered_on`, `user_role`, `user_status`) VALUES
(1, 'food haus', 'foodhaus', 'foodhaus.esprittn@gmail.com', '$2y$10$YwDvnwgn9uCVjTW9lhR1meaPppXmUIfh07UDhBP64Cb872J1gbwby', 'hero-1.jpg', 'Thu, May, 2021 at 08:54 PM', 'admin', 0),
(2, 'wajih', 'tlili', 'wajih.tlili@esprit.tn', '$2y$10$VY2hOHh8RRB23n7nL5fX5OKOA9Opr.k4ISIZPzXlcQAK74y15jOYO', 'hero-1.jpg', 'May 5, 2021 at 09:57 PM', 'admin', 0),
(3, 'slim', 'ayadi', 'slim.ayadi@esprit.tn', '$2y$10$0OnIC9OAzM/T1ggbjToGvuXhHvDYFJKeW66tYvlmqw5Q2MXvLduT2', 'hero-1.jpg', 'May 5, 2021 at 09:58 PM', 'admin', 0),
(4, 'omar', 'Nouri', 'omar.nouri@esprit.tn', '$2y$10$YdlPLmVYiyF1SxddCb3N0u0l6okrwFMbMotl.n5MMHtN/LkZv6ShG', 'hero-1.jpg', 'May 5, 2021 at 09:58 PM', 'admin', 0),
(5, 'karim', 'trabelsi', 'karim.trabelsi1@esprit.tn', '$2y$10$PKKRJ7N31FmjcdItovY5MOGV6Ftrr2h30NAHbu6nJR.lEibJ.Tr.i', 'hero-1.jpg', 'May 5, 2021 at 09:59 PM', 'admin', 0),
(6, 'mohamedzied', 'harzallah', 'mohamedzied.harzallah@esprit.tn', '$2y$10$GriXsMkPypnLZzkxG6T4W.L5OL4x.xWRCe5vgqpe7SKU7R0j2fcFG', 'hero-1.jpg', 'May 5, 2021 at 09:59 PM', 'admin', 0),
(9, 'test', 'test', 'test@gmail.com', '$2y$10$6NObA2vOl5VYOTonKNJmFOkZfCSkPJZVIQtMnINEm1MJV.2w7a6oS', 'hero-1.jpg', 'Apr 4, 2022 at 02:00 PM', 'subscriber', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video`) VALUES
(4, 'propos.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `whyus`
--

CREATE TABLE `whyus` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whyus`
--

INSERT INTO `whyus` (`id`, `Title`, `Content`) VALUES
(1, 'tttt', 'kkkkk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adult`
--
ALTER TABLE `adult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boisson`
--
ALTER TABLE `boisson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kid`
--
ALTER TABLE `kid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyus`
--
ALTER TABLE `whyus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adult`
--
ALTER TABLE `adult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `boisson`
--
ALTER TABLE `boisson`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `drink`
--
ALTER TABLE `drink`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `extra`
--
ALTER TABLE `extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kid`
--
ALTER TABLE `kid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `whyus`
--
ALTER TABLE `whyus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
