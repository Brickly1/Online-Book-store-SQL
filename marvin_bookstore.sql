-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2016 at 06:39 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marvin_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad9663min`
--

CREATE TABLE `ad9663min` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad9663min`
--

INSERT INTO `ad9663min` (`id`, `username`, `password`, `email`) VALUES
(1, 'video', 'd2a57dc1d883fd21fb9951699df71cc7', 'aaa@aaa.com');

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE `category_details` (
  `id` int(100) NOT NULL,
  `category_name` varchar(500) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `total_files` int(100) DEFAULT NULL,
  `sub_type` varchar(50) DEFAULT NULL,
  `thumb` varchar(50) DEFAULT NULL,
  `des` text,
  `parents` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `tag_new` varchar(50) DEFAULT NULL,
  `tag_update` varchar(50) DEFAULT NULL,
  `tag_hot` varchar(50) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `folder_path` varchar(50) DEFAULT NULL,
  `tablename` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`id`, `category_name`, `title`, `total_files`, `sub_type`, `thumb`, `des`, `parents`, `order`, `status`, `tag_new`, `tag_update`, `tag_hot`, `date`, `folder_path`, `tablename`) VALUES
(1, 'FICTION ', '', 0, 'category', 'empty', '', '0', NULL, 'yes', 'no', 'no', 'no', '11/18/2016 02:21 PM', NULL, NULL),
(3, 'MATHS', '', 0, 'category', 'empty', '', '0', NULL, 'yes', 'no', 'no', 'no', '11/18/2016 02:22 PM', NULL, NULL),
(4, 'DRAMA', '', 0, 'category', 'empty', '', '0', NULL, 'yes', 'no', 'no', 'no', '11/18/2016 02:25 PM', NULL, NULL),
(5, 'CRIME', '', 0, 'category', 'empty', '', '0', NULL, 'yes', 'no', 'no', 'no', '11/18/2016 02:25 PM', NULL, NULL),
(6, 'POETRY', '', 0, 'category', 'empty', '', '0', NULL, 'yes', 'no', 'no', 'no', '11/18/2016 02:25 PM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_relation`
--

CREATE TABLE `category_relation` (
  `id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `prnt_id` int(100) NOT NULL,
  `c_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_relation`
--

INSERT INTO `category_relation` (`id`, `cat_id`, `prnt_id`, `c_order`) VALUES
(1, 1, 0, 6),
(3, 3, 0, 4),
(4, 4, 0, 3),
(5, 5, 0, 2),
(6, 6, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `total_amout` int(11) NOT NULL,
  `products` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `email`, `password`, `status`, `order_date`, `total_amout`, `products`) VALUES
(1, 'Potion Punch', 'admin@admin.com', '47bce5c74f589f4867dbd57e9ca9f808', 1, '11/19/2016 11:50 PM', 110, '0');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `prnt_id` int(100) DEFAULT NULL,
  `file_name` mediumtext,
  `des` mediumtext,
  `status` varchar(50) DEFAULT NULL,
  `created_date` varchar(100) DEFAULT NULL,
  `thumb` mediumtext,
  `price` varchar(100) NOT NULL,
  `old_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prnt_id`, `file_name`, `des`, `status`, `created_date`, `thumb`, `price`, `old_price`) VALUES
(1, 1, 'Fiction 1', 'Catching Fire is a 2009 science fiction young adult novel by the American novelist Suzanne Collins, the second book in The Hunger Games trilogy. As the sequel to the 2008 bestseller The Hunger Games, it continues the story of Katniss Everdeen and the post-apocalyptic nation of Panem. Following the events of the previous novel, a rebellion against the oppressive Capitol has begun, and Katniss and fellow tribute Peeta Mellark are forced to return to the arena in a special edition of the Hunger Games. The book was first published on September 1, 2009, by Scholastic, in hardcover, and was later released in ebook and audiobook format. Catching Fire received mostly positive reviews, with reviewers praising Collins'' prose, the book''s ending, and the development of Katniss''s character. According to critics, major themes of the novel include survival, authoritarianism, rebellion and interdependence versus independence. The book has sold more than 19 million copies in the U.S. alone. A film adaptation, The Hunger Games: Catching Fire, was released on November 22, 2013.After winning the 74th Hunger Games in the previous novel, Katniss Everdeen and Peeta Mellark return home to District 12, the poorest sector in the country of Panem. But on the day that Katniss and Peeta are to start a "Victory Tour" of the country, President Snow visits unexpectedly and tells Katniss that he is angry with her for breaking the rules at the end of the last Hunger Games, which permitted both Peeta and Katniss to win. Snow tells Katniss that when she defied the Capitol, she inspired rebellion in the districts. The first stop on the Victory Tour is District 11, the home of Katniss'' deceased friend and ally in the Hunger Games, Rue. During the ceremony, Katniss delivers a speech thanking the people of District 11 for their participants in the Games. When she finishes, an old man whistles the tune that Rue used in the arena to tell Katniss that she was safe. The song acts as a signal and everyone salutes Katniss, using the same gesture that she used to say farewell to Rue. To the horror of Katniss, the old man and two others are executed. Katniss and Peeta travel to the rest of the twelve Districts and the Capitol. Hoping to placate the growing rebellion and settle the dispute between Katniss and President Snow, Peeta proposes to Katniss during an interview. Despite this, Katniss learns that their attempt to avert revolt in the districts has failed. ', '1', NULL, 'post1.jpg', '50.00', '$60.00'),
(2, 1, 'Fiction 2', 'The story is told in the form of a series of interviews conducted by the narrator, Max Brooks, an agent of the United Nations Postwar Commission. Although the exact origin of the plague is unknown, a young boy from a village in China is identified as the plague''s official patient zero. The boy''s case marks the point where the Chinese government begins to take measures to cover up the disease, including generating a crisis with Taiwan to mask their activities. Nevertheless, the plague still manages to spread to various nations by human trafficking, refugees and the black market organ trade. Initially, these nations were able to cover up their smaller outbreaks, until a much larger outbreak in South Africa brings the plague to public attention. As the infection spreads, Israel abandons the Palestinian territories and initiates a nationwide quarantine, closing its borders to everyone except uninfected Jews and Palestinians. Its military then puts down an ultra-Orthodox uprising, which is later referred to as an Israeli civil war. The United States does little to prepare because it is overconfident in its ability to suppress any threat. Although special forces teams contain initial outbreaks, a widespread effort never starts: the nation is deprived of political will by "brushfire wars", and a widely distributed and marketed placebo vaccine creates a false sense of security. As many more areas around the globe fall to infection, a period known as the "Great Panic" begins. Pakistan and Iran destroy each other in a nuclear war, after the Iranian government attempts to stem the flow of refugees fleeing through Pakistan into Iran. After zombies overrun New York City, the U.S. military sets up a high-profile defense in the nearby city of Yonkers. The "Battle of Yonkers" is a disaster; modern weapons and tactics prove ineffective against zombies, as the enemy has no self-preservation instincts and can only be stopped if shot through the head. The unprepared and demoralized soldiers are routed on live television. Other countries suffer similarly disastrous defeats, and human civilization teeters on the brink of destruction. In South Africa, the government adopts a contingency plan drafted by apartheid-era intelligence consultant Paul Redeker. It calls for the establishment of small sanctuaries, leaving large groups of survivors abandoned in special zones in order to distract the undead and allowing those within the main safe zone time to regroup and recuperate. Governments worldwide assume similar plans or relocate the populace to safer foreign territory, such as the attempted complete evacuation of the Japanese archipelago to Kamchatka. Because zombies freeze solid in severe cold, many civilians in North America flee to the wildernesses of northern Canada and the Arctic, where eleven million people die of starvation and hypothermia. It is implied that some turn to cannibalism to survive; further interviews from other sources imply that cannibalism occurred in areas of the United States where food shortages occurred. The three remaining astronauts in the International Space Station survive the war by salvaging supplies from the abandoned Chinese space station and maintain some military and civilian satellites using an orbital fuel station. A surviving member of the ISS crew describes "mega" swarms of zombies on the American Great Plains and Central Asia, and how the crisis affected Earth''s atmosphere. Katniss and Peeta travel to the rest of the twelve Districts and the Capitol. Hoping to placate the growing rebellion and settle the dispute between Katniss and President Snow, Peeta proposes to Katniss during an interview. Despite this, Katniss learns that their attempt to avert revolt in the districts has failed. ', '1', NULL, 'post2.jpg', '25.00', '$30.00'),
(3, 5, 'Crime 3', 'Sergeant Al Lopez suffered a fatal heart attack while responding to assist other deputies who were involved in a high speed pursuit in Compton at approximately 5:20 am. Shortly after he responded from the station a citizen came into the lobby and advised deputies that a patrol car had crashed at the intersection of Myrrh Street and Willowbrook Avenue and the driver was unresponsive. Deputies responded to location and began performing CPR on on Sergeant Lopez. He was transported St. Francis Medical Center where he passed away. It is believed that Sergeant Lopez suffered a fatal heart attack prior to his vehicle colliding with a fence at low speeds. The pursuit he was responding to was terminated shortly after it began due to the dangerously high speeds of the fleeing vehicle. Sergeant Lopez had served with the Los Angeles County Sheriff''s Department for 26 years and was assigned to the Compton Station. He is survived by his wife and two adult children. ', '1', NULL, 'post3.jpg', '35.00', '$45.00'),
(4, 4, 'Drama 4', 'Drama is the specific mode of fiction represented in performance.[1] The term comes from a Greek word meaning "action" (Classical Greek: d??�a, drama), which is derived from "to do" (Classical Greek: d???, drao). The two masks associated with drama represent the traditional generic division between comedy and tragedy. They are symbols of the ancient Greek Muses, Thalia and Melpomene. Thalia was the Muse of comedy (the laughing face), while Melpomene was the Muse of tragedy (the weeping face). Considered as a genre of poetry in general, the dramatic mode has been contrasted with the epic and the lyrical modes ever since Aristotle''s Poetics (c. 335 BCE)�the earliest work of dramatic theory.[2] In English (as was the analogous case in many other European languages), the word "play" or "game" (translating the Anglo-Saxon pl�ga or Latin ludus) was the standard term used to describe drama until William Shakespeare''s time�just as its creator was a "play-maker" rather than a "dramatist" and the building was a "play-house" rather than a "theatre."[3] The use of "drama" in a more narrow sense to designate a specific type of play dates from the modern era. "Drama" in this sense refers to a play that is neither a comedy nor a tragedy�for example, Zola''s Th�r�se Raquin (1873) or Chekhov''s Ivanov (1887). It is this narrower sense that the film and television industries, along with film studies, adopted to describe "drama" as a genre within their respective media. "Radio drama" has been used in both senses�originally transmitted in a live performance, it has also been used to describe the more high-brow and serious end of the dramatic output of radio.[4] The enactment of drama in theatre, performed by actors on a stage before an audience, presupposes collaborative modes of production and a collective form of reception. The structure of dramatic texts, unlike other forms of literature, is directly influenced by this collaborative production and collective reception.[5] The early modern tragedy Hamlet (1601) by Shakespeare and the classical Athenian tragedy Oedipus the King (c. 429 BCE) by Sophocles are among the masterpieces of the art of drama.[6] A modern example is Long Day''s Journey into Night by Eugene O�Neill (1956).[7] Drama is often combined with music and dance: the drama in opera is generally sung throughout; musicals generally include both spoken dialogue and songs; and some forms of drama have incidental music or musical accompaniment underscoring the dialogue (melodrama and Japanese No, for example).[8] Closet drama describes a form that is intended to be read, rather than performed.[9] In improvisation, the drama does not pre-exist the moment of performance; performers devise a dramatic script spontaneously before an audience.[10]', '1', NULL, 'post4.jpg', '55.00', '$70.00'),
(5, 6, 'Poetry 5', 'Do not hang your head or clench your fists when even your friend, after hearing the story, says: My mother would never put up with that. Fight the urge to rattle off statistics: that, more often, a woman who chooses to leave is then murdered. The hundredth time your father says, But she hated violence, why would she marry a guy like that?� don�t waste your breath explaining, again, how abusers wait, are patient, that they don�t beat you on the first date, sometimes not even the first few years of a marriage. Keep an impassive face whenever you hear Stand by Your Man, and let go your rage when you recall those words were advice given your mother. Try to forget the first trial, before she was dead, when the charge was only attempted murder; don�t belabor the thinking or the sentence that allowed her ex-husband�s release a year later, or the juror who said, It�s a domestic issue� they should work it out themselves. Just breathe when, after you read your poems about grief, a woman asks: Do you think your mother was weak for men? Learn to ignore subtext. Imagine a thought- cloud above your head, dark and heavy with the words you cannot say; let silence rain down. Remember you were told by your famous professor, that you should write about something else, unburden yourself of the death of your mother and just pour your heart out in the poems. Ask yourself what�s in your heart, that reliquary�blood locket and seed-bed�and contend with what it means, the folk-saying', '1', NULL, 'post5.jpg', '26.00', '$32.00'),
(6, 3, 'Math 6', 'Khan Academy offers practice exercises, instructional videos, and a personalized learning dashboard that empower learners to study at their own pace in and outside of the classroom. We tackle math, science, computer programming, history, art history, economics, and more. Our math missions guide learners from kindergarten to calculus using state-of-the-art, adaptive technology that identifies strengths and learning gaps. We''ve also partnered with institutions like NASA, The Museum of Modern Art, The California Academy of Sciences, and MIT to offer specialized content. ', '1', NULL, 'post6.jpg', '45.00', '$55.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad9663min`
--
ALTER TABLE `ad9663min`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_relation`
--
ALTER TABLE `category_relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad9663min`
--
ALTER TABLE `ad9663min`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category_details`
--
ALTER TABLE `category_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `category_relation`
--
ALTER TABLE `category_relation`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
