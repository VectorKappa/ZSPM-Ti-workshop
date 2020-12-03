-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 02:20 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer1` text NOT NULL,
  `answer2` text NOT NULL,
  `answer3` text NOT NULL,
  `correct` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `answer1`, `answer2`, `answer3`, `correct`) VALUES
(1, 'Co oznacza skrót PHP?', 'PHP: Hypertext Preprocessor', 'Personal Hypertext Processor', 'Private Home Page', 'A'),
(2, 'Czym otoczone są skrypty PHP?', '&lt;?php...?&gt;', '&lt;script&gt;&lt;/script&gt;', '&lt;?php&gt;...&lt;/?&gt;', 'A'),
(3, 'Jak napisać \"Hello World\" w PHP?', '\"Hello World\"', 'echo \"Hello World\"', 'Document.Write(\"Hello World\")', 'B'),
(4, 'Wszystkie zmienne w PHP zaczynają się od jakiego symbolu?', '$', '&', '!', 'A'),
(5, 'Jaki jest prawidłowy sposób zakończenia instrukcji PHP?', '&lt;/php&gt;', '.', ';', 'C'),
(6, 'Składnia PHP jest najbardziej podobna do języka:', 'JavaScript', 'VBScript', 'Perl i C', 'C'),
(7, 'Jak uzyskać informacje z formularza przesłanego metodą \"GET\"?', '$_GET[];', 'Request.Form;', 'Request.QueryString;', 'A'),
(8, 'W przypadku korzystania z metody POST zmienne są wyświetlane w adresie URL.', 'Prawda', 'Fałsz', 'NULL', 'B'),
(9, 'W PHP można używać pojedynczych cudzysłowów (\') i podwójnych cudzysłowów (\"\") dla zmiennych tekstowych.', 'Prawda', 'Fałsz', 'NULL', 'A'),
(10, 'Jaki jest prawidłowy sposób tworzenia funkcji w PHP?', 'new_function myFunction()', 'create myFunction()', 'function myFunction()', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
