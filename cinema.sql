-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 08:41 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID_Movie` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `About` varchar(4000) NOT NULL,
  `Director` varchar(50) NOT NULL,
  `IMBd` decimal(10,2) NOT NULL,
  `Date_of_Publication` varchar(25) NOT NULL,
  `Url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID_Movie`, `Title`, `About`, `Director`, `IMBd`, `Date_of_Publication`, `Url`) VALUES
(1, 'Thor: Ragnarok', 'Imprisoned, the mighty Thor finds himself in a lethal gladiatorial contest against the Hulk, his former ally. Thor must fight for survival and race against time to prevent the all-powerful Hela from destroying his home and the Asgardian civilization.', 'Taika Waititi', '8.10', '03/11/2017', 'https://www.youtube.com/watch?v=ue80QwXMRHg&t=2s'),
(2, 'Freak Show', 'Follows the story of teenager Billy Bloom who, despite attending an ultra conservative high school, makes the decision to run for homecoming queen.', 'Trudie Styler', '6.40', '12/01/2018', 'https://www.youtube.com/watch?v=drg74wOy8z8&t=8s'),
(3, 'Jumanji: Welcome to the Jungle', 'Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.', 'Jake Kasdan', '7.20', '20/12/2017', 'https://www.youtube.com/watch?v=2QKg5SZ_35I'),
(4, 'Cars 3', 'Lightning McQueen sets out to prove to a new generation of racers that he`s still the best race car in the world.', 'Brian Fee', '6.80', '16/06/2017', 'https://www.youtube.com/watch?v=2LeOH9AGJQM&t=17s'),
(5, 'Batman and Harley Quinn', 'Batman and Nightwing are forced to team with the Joker`s sometimes-girlfriend Harley Quinn to stop a global threat brought about by Poison Ivy and Jason Woodrue, the Floronic Man.', 'Sam Liu', '5.90', '15/08/2017', 'https://www.youtube.com/watch?v=z0pI8TT9AZ0&t=7s'),
(6, 'Dirty Grandpa', 'Right before his wedding, an uptight guy is tricked into driving his grandfather, a lecherous former Army Lieutenant Colonel, to Florida for Spring Break.', 'Dan Mazer', '5.90', '22/01/2016', 'https://www.youtube.com/watch?v=vOAn83vOZLk'),
(7, 'Horrible Bosses', 'Three friends conspire to murder their awful bosses when they realize they are standing in the way of their happiness.', 'Seth Gordon', '6.90', '08/07/2011', 'https://www.youtube.com/watch?v=VpUeQV8sdOc&t=16s'),
(8, 'The Godfather', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', 'Francis Ford Coppola', '9.20', '24/03/1972', 'https://www.youtube.com/watch?v=5DO-nDW43Ik'),
(9, 'Anonymous', 'The theory that it was in fact Edward De Vere, Earl of Oxford, who penned Shakespeare`s plays. Set against the backdrop of the succession of Queen Elizabeth I and the Essex rebellion against her.', 'Roland Emmerich', '6.90', '28/10/2011', 'https://www.youtube.com/watch?v=uBmnkk0QW3Q&t=9s'),
(10, 'The Prestige', 'After a tragic accident two stage magicians engage in a battle to create the ultimate illusion whilst sacrificing everything they have to outwit the other.', 'Christopher Nolan', '8.50', '20/10/2006', 'https://www.youtube.com/watch?v=ijXruSzfGEc&t=29s'),
(11, 'Shutter Island', 'In 1954, a U.S. Marshal investigates the disappearance of a murderer, who escaped from a hospital for the criminally insane.', 'Martin Scorsese', '8.10', '19/02/2010', 'https://www.youtube.com/watch?v=5iaYLCiq5RM&t=37s'),
(12, 'Everything Beautiful Is Far Away', 'A guy, a girl, and a robothead hike across a desert planet in search of a mythical lake.', 'Pete Ohs, Andrea Sisson', '5.40', '21/06/2017', 'https://www.youtube.com/watch?v=3KKiyK8_4qA&t=28s'),
(13, 'Geostorm', 'When the network of satellites designed to control the global climate starts to attack Earth, it`s a race against the clock for its creator to uncover the real threat before a worldwide Geostorm wipes out everything and everyone.', 'Dean Devlin', '5.40', '20/10/2017', 'https://www.youtube.com/watch?v=EuOlYPSEzSc&t=22s'),
(14, 'Midnight in Paris', 'While on a trip to Paris with his fiancÃ©e`s family, a nostalgic screenwriter finds himself mysteriously going back to the 1920s everyday at midnight.', 'Woody Allen', '7.70', '10/06/2011', 'https://www.youtube.com/watch?v=FAfR8omt-CY&t=13s'),
(15, 'Prometheus', 'Following clues to the origin of mankind, a team finds a structure on a distant moon, but they soon realize they are not alone.', 'Ridley Scott', '7.00', '08/06/2012', 'https://www.youtube.com/watch?v=nmJOO6D5RvA&t=18s'),
(16, 'Me Before You', 'A girl in a small town forms an unlikely bond with a recently-paralyzed man she`s taking care of.', 'Thea Sharrock', '7.40', '03/06/2016', 'https://www.youtube.com/watch?v=Eh993__rOxA&t=16s'),
(17, 'Inception', 'A thief, who steals corporate secrets through the use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.', 'Christopher Nolan', '8.80', '16/07/2010', 'https://www.youtube.com/watch?v=YoHD9XEInc0&t=13s'),
(18, 'Boy Missing', 'When her boy`s alleged kidnapper is released for lack of solid evidence, a reputable and well-known attorney takes matters into her own hands with unintended and spectacularly disastrous consequences.', 'Mar Targarona', '6.30', '19/08/2016', 'https://www.youtube.com/watch?v=AiY_ACsLVw0&t=2s'),
(19, 'Ice Age: Collision Course', 'Manny, Diego, and Sid join up with Buck to fend off a meteor strike that would destroy the world.', 'Mike Thurmeier, Galen T. Chu', '5.70', '22/07/2016', 'https://www.youtube.com/watch?v=HyLquKn3Swc&t=9s'),
(20, 'The Greatest Showman', 'Celebrates the birth of show business, and tells of a visionary who rose from nothing to create a spectacle that became a worldwide sensation.', 'Michael Gracey', '8.00', '20/12/2017', 'https://www.youtube.com/watch?v=jr9QtXwC9vc&t=16s'),
(21, 'Phantom Thread', 'Set in 1950`s London, Reynolds Woodcock is a renowned dressmaker whose fastidious life is disrupted by a young, strong-willed woman, Alma, who becomes his muse and lover.', 'Paul Thomas Anderson', '8.50', '19/01/2018', 'https://www.youtube.com/watch?v=xNsiQMeSvMk&t=14s'),
(22, 'Beauty and the Beast', 'An adaptation of the fairy tale about a monstrous-looking prince and a young woman who fall in love.', 'Bill Condon', '7.30', '17/03/2017', 'https://www.youtube.com/watch?v=e3Nl_TCQXuw&t=3s'),
(23, 'The Dark Knight', 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham, the Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.', 'Christopher Nolan', '9.00', '18/07/2008', 'https://www.youtube.com/watch?v=EXeTwQWrcwY&t=8s'),
(24, 'The Revenant', 'A frontiersman on a fur trading expedition in the 1820s fights for survival after being mauled by a bear and left for dead by members of his own hunting team.', 'Alejandro G. IÃ±Ã¡rritu', '8.00', '08/01/2016', 'https://www.youtube.com/watch?v=LoebZZ8K5N0&t=10s'),
(25, 'Bad Teacher', 'A lazy, incompetent middle school teacher who hates her job, her students, and her co-workers is forced to return to teaching to make enough money for breast implants after her wealthy fiancÃ© dumps her.', 'Jake Kasdan', '5.70', '24/06/2011', 'https://www.youtube.com/watch?v=GahC5cVsU6A&t=1s'),
(26, 'Mr. Bean`s Holiday', 'Mr. Bean wins a trip to Cannes where he unwittingly separates a young boy from his father and must help the two come back together. On the way he discovers France, bicycling, and true love, among other things.', 'Steve Bendelack', '6.30', '24/08/2007', 'https://www.youtube.com/watch?v=hSxLUd8aly4');

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `ID_Actor` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`ID_Actor`, `First_Name`, `Last_Name`) VALUES
(1, 'Chris', 'Hemsworth'),
(2, 'Tom', 'Hiddleston'),
(3, 'Cate', 'Blanchet'),
(4, 'Alex', 'Lawther'),
(5, 'Abigail', 'Brelin'),
(6, 'AnnaSophia', 'Robb'),
(7, 'Dwayne', 'Johnson'),
(8, 'Karen', 'Gillan'),
(9, 'Kevin', 'Hart'),
(10, 'Owen', 'Wilson'),
(11, 'Cristela', 'Alonzo'),
(12, 'Chris', 'Cooper'),
(13, 'Kevin', 'Conroy'),
(14, 'Melisa', 'Rauch'),
(15, 'Paget', 'Brewster'),
(16, 'Robert', 'De Niro'),
(17, 'Zac', 'Efron'),
(18, 'Zoey', 'Deutch'),
(19, 'Jason', 'Bateman'),
(20, 'Charlie', 'Day'),
(21, 'Jason', 'Sudeikis'),
(22, 'Marlon', 'Brando'),
(23, 'Al', 'Pacino'),
(24, 'James', 'Caan'),
(25, 'Rhys', 'Ifans'),
(26, 'Vanesa', 'Redgrave'),
(27, 'David', 'Thewlis'),
(28, 'Christian', 'Bale'),
(29, 'Hugh', 'Jackman'),
(30, 'Scarlet', 'Johansson'),
(31, 'Leonardo', 'DiCaprio'),
(32, 'Emily', 'Mortimer'),
(33, 'Mark', 'Ruffalo'),
(34, 'Julia', 'Garner'),
(35, 'Joseph', 'Cross'),
(36, 'C.S.', 'Lee'),
(37, 'Gerard', 'Butler'),
(38, 'Jim', 'Sturgess'),
(39, 'Abbie', 'Cornish'),
(40, 'Owen', 'Wilson'),
(41, 'Rachel', 'McAdams'),
(42, 'Kathy', 'Bates'),
(43, 'Noomi', 'Rapace'),
(44, 'Logan', 'Marshall-Green'),
(45, 'Michael', 'Fassbender'),
(46, 'Emilia', 'Clarke'),
(47, 'Sam', 'Clafin'),
(48, 'Janet', 'McTeer'),
(49, 'Joseph', 'Gordon-Levitt'),
(50, 'Ellen', 'Page'),
(51, 'Blanca', 'Portillo'),
(52, 'Antonio', 'Dechent'),
(53, 'Vicente', 'Romero'),
(54, 'Ray', 'Ramone'),
(55, 'Denis', 'Leary'),
(56, 'John', 'Leguizamo'),
(57, 'Hugh', 'Jackman'),
(58, 'Michelle', 'Williams'),
(59, 'Vicky', 'Krieps'),
(60, 'Daniel', 'Day-Lewis'),
(61, 'Lesley', 'Manville'),
(62, 'Emma', 'Watson'),
(63, 'Dan', 'Stevens'),
(64, 'Luke', 'Evans'),
(65, 'Christian', 'Bale'),
(66, 'Heath', 'Ledger'),
(67, 'Aaron', 'Eckhart'),
(68, 'Tom', 'Hardy'),
(69, 'Will', 'Poulter'),
(70, 'Cameron', 'Diaz'),
(71, 'Jason', 'Segel'),
(72, 'Justin', 'Timberlake'),
(73, 'Rowan', 'Atkinson'),
(74, 'Willem', 'Dafoe'),
(75, 'Steve', 'Pemberton');

-- --------------------------------------------------------

--
-- Table structure for table `actor_about`
--

CREATE TABLE `actor_about` (
  `ID_Movie` int(11) NOT NULL,
  `ID_Actor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actor_about`
--

INSERT INTO `actor_about` (`ID_Movie`, `ID_Actor`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 7),
(3, 8),
(3, 9),
(4, 10),
(4, 11),
(4, 12),
(5, 13),
(5, 14),
(5, 15),
(6, 16),
(6, 17),
(6, 18),
(7, 19),
(7, 20),
(7, 21),
(8, 22),
(8, 23),
(8, 24),
(9, 25),
(9, 26),
(9, 27),
(10, 28),
(10, 29),
(10, 30),
(11, 31),
(11, 32),
(11, 33),
(12, 34),
(12, 35),
(12, 36),
(13, 37),
(13, 38),
(13, 39),
(14, 40),
(14, 41),
(14, 42),
(15, 43),
(15, 44),
(15, 45),
(16, 46),
(16, 47),
(16, 48),
(16, 48),
(17, 31),
(17, 49),
(17, 50),
(18, 51),
(18, 52),
(18, 53),
(19, 54),
(19, 55),
(19, 56),
(20, 17),
(20, 57),
(20, 58),
(21, 59),
(21, 60),
(21, 61),
(22, 62),
(22, 63),
(22, 64),
(23, 65),
(23, 66),
(23, 67),
(24, 31),
(24, 68),
(24, 69),
(25, 70),
(25, 71),
(25, 72),
(26, 73),
(26, 74),
(26, 75);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID_Category` int(11) NOT NULL,
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID_Category`, `Category`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Romance'),
(5, 'Thriller'),
(6, 'Animated'),
(7, 'Fantasy'),
(8, 'Drama'),
(9, 'SCI-FI');

-- --------------------------------------------------------

--
-- Table structure for table `category_about`
--

CREATE TABLE `category_about` (
  `ID_Category` int(11) NOT NULL,
  `ID_Movie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_about`
--

INSERT INTO `category_about` (`ID_Category`, `ID_Movie`) VALUES
(1, 1),
(2, 1),
(3, 1),
(3, 2),
(8, 2),
(1, 3),
(2, 3),
(3, 3),
(6, 4),
(2, 4),
(3, 4),
(6, 5),
(1, 5),
(2, 5),
(3, 6),
(3, 7),
(8, 8),
(8, 9),
(5, 9),
(8, 10),
(9, 10),
(5, 11),
(7, 12),
(9, 12),
(1, 13),
(9, 13),
(5, 13),
(3, 14),
(7, 14),
(4, 14),
(2, 15),
(9, 15),
(8, 15),
(8, 16),
(4, 16),
(1, 17),
(2, 17),
(9, 17),
(5, 18),
(6, 19),
(2, 19),
(3, 19),
(8, 20),
(4, 21),
(8, 21),
(7, 22),
(1, 23),
(8, 23),
(2, 24),
(8, 24),
(3, 25),
(3, 26);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ID_Data` int(4) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Filmi` varchar(20) NOT NULL,
  `Nr_Bileta` int(4) NOT NULL,
  `Ora` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ID_Data`, `Username`, `Email`, `Filmi`, `Nr_Bileta`, `Ora`) VALUES
(1, 'Flori', 'florian.perhati1@gmail.com', 'Batman', 0, '17:00'),
(2, 'Flori', 'florian.perhati1@gmail.com', 'Anonymous', 4, '19:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_User` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_User`, `Username`, `Email`, `Password`) VALUES
(1, 'user', 'user@email.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'Flori', 'florian.perhati1@gmail.com', '1788c75209284da29bf1399ce85b1799');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID_Movie`);

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`ID_Actor`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_Category`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID_Data`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `ID_Data` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
