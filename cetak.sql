-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 01:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cetak`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` char(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `deskripsi`) VALUES
(1, 'Print Book', 'Hardcover or paperback book using a wide range of paper, color, and binding options. The most common print-on-demand book, perfect for a variety of projects.'),
(2, 'Photo Book', 'Preserve memories or create a lookbook of your work with a hardcover photo book. Featuring the highest quality paper and rich color ink, our photo book products highlight the best of Lulu\'s print options.'),
(3, 'Notebook', 'Create a custom notebook, journal, or planner with our preformatted templates. Or design your own unique notebook for yourself or to sell to your fans.'),
(4, 'Calendar', 'Create a 12 to 18-month calendar with our calendar tool. Upload images and create events to build your calendar or upload an original calendar design.'),
(5, 'Comic Book', 'Traditional comic book size with paperback binding. Bring your art to life with printing in black & white or rich color, including on the inside of the cover.'),
(6, 'Magazine', 'Create beautiful magazines in full color. Features paper stock designed for magazines, paperback binding and printing on the inside covers.'),
(7, 'Cookbook', 'Share your favorite recipes with a cookbook with Lulu\'s print-on-demand. High-quality ink and paper options will have your recipes looking as good as they taste!'),
(8, 'Yearbook', 'For schools and institutions, a print-on-demand yearbook means flexibility and customization while saving money. Enjoy the best printing and binding at a fraction of the cost.'),
(9, 'Ebook', 'Create an ebook from your PDF, DOCX, or EPUB file ready for viewing on an ereader, tablet, or smartphone.'),
(10, 'Tbook', 'Create an ebook from your PDF, DOCX, or EPUB file ready for viewing on an ereader, tablet, or smartphone.');

-- --------------------------------------------------------

--
-- Table structure for table `ukuran`
--

CREATE TABLE `ukuran` (
  `id_ukuran` int(11) NOT NULL,
  `ukuran` char(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ukuran`
--

INSERT INTO `ukuran` (`id_ukuran`, `ukuran`, `deskripsi`) VALUES
(1, 'Pocket Book', '4.25 x 6.875 in | 108 x 175 mm'),
(2, 'Digest', '5.5 x 8.5 in | 140 x 216 mm'),
(3, 'A5', '5.83 x 8.27 in | 148 x 210 mm'),
(4, 'US Trade', '6 x 9 in | 152 x 229 mm'),
(5, 'Royal', '6.14 x 9.21 in | 156 x 234 mm'),
(6, 'Comic Book', '6.63 x 10.25 in | 168 x 260 mm'),
(8, 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `ukuran`
--
ALTER TABLE `ukuran`
  ADD PRIMARY KEY (`id_ukuran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ukuran`
--
ALTER TABLE `ukuran`
  MODIFY `id_ukuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
