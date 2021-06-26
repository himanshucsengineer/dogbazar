-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 09:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogbazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoptedpet`
--

CREATE TABLE `adoptedpet` (
  `id` int(11) NOT NULL,
  `u_name` varchar(500) NOT NULL,
  `u_email` varchar(500) NOT NULL,
  `u_mob` varchar(50) NOT NULL,
  `u_add` varchar(500) NOT NULL,
  `front` varchar(200) NOT NULL,
  `back` varchar(150) NOT NULL,
  `u_occu` varchar(500) NOT NULL,
  `re_name` varchar(500) NOT NULL,
  `re_mob` varchar(500) NOT NULL,
  `pet_name` varchar(500) NOT NULL,
  `pet_color` varchar(500) NOT NULL,
  `pet_age` varchar(100) NOT NULL,
  `pet_breed` varchar(200) NOT NULL,
  `pet_city` varchar(500) NOT NULL,
  `pet_gender` varchar(50) NOT NULL,
  `pet_image` varchar(500) NOT NULL,
  `account_status` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoptedpet`
--

INSERT INTO `adoptedpet` (`id`, `u_name`, `u_email`, `u_mob`, `u_add`, `front`, `back`, `u_occu`, `re_name`, `re_mob`, `pet_name`, `pet_color`, `pet_age`, `pet_breed`, `pet_city`, `pet_gender`, `pet_image`, `account_status`, `date`) VALUES
(1, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08385902167', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'events_bg2.png', 'events_bg3.png', 'Salaried', 'RESDFDSF', '2312321321', 'testing pet', 'black', '12', 'testing breed', '27.5666408', 'male', '', '', '2021-05-28 00:00:00'),
(2, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08385902167', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'events_bg2.png', 'events_bg3.png', 'Salaried', 'RESDFDSF', '2312321321', 'testing pet', 'black', '12', 'testing breed', '27.5666408', 'male', '', '', '2021-05-28 00:00:00'),
(3, 'HIMANSHU GOYAL', 'himanshugoyal1591998@gmail.com', '08905366876', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'aboutidb2.jpg', 'aboutidb21.jpg', 'Salaried', 'vbvcbcv', '454543', 'sfsdfadsad', 'sdsdsadsa', '21', 'sddsadsad', 'alwar', 'male', 'frnch.jpg', '', '2021-06-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `number` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `house` varchar(100) NOT NULL,
  `change_location` varchar(100) NOT NULL,
  `why` varchar(200) NOT NULL,
  `past` varchar(500) NOT NULL,
  `time` varchar(200) NOT NULL,
  `alone` varchar(500) NOT NULL,
  `occu` varchar(500) NOT NULL,
  `res_name` varchar(500) NOT NULL,
  `res_mob` varchar(200) NOT NULL,
  `uniq_id` varchar(500) NOT NULL,
  `p_name` varchar(500) NOT NULL,
  `color` varchar(200) NOT NULL,
  `age` varchar(100) NOT NULL,
  `breed` varchar(300) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `city` varchar(500) NOT NULL,
  `change_location_ex` varchar(1000) NOT NULL,
  `why_ex` varchar(1100) NOT NULL,
  `alone_ex` varchar(1000) NOT NULL,
  `p_image` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `account_status` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`id`, `name`, `email`, `number`, `address`, `house`, `change_location`, `why`, `past`, `time`, `alone`, `occu`, `res_name`, `res_mob`, `uniq_id`, `p_name`, `color`, `age`, `breed`, `gender`, `city`, `change_location_ex`, `why_ex`, `alone_ex`, `p_image`, `image`, `image1`, `account_status`, `date`) VALUES
(10, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08385902167', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'Own', 'yes', 'other', 'yes', '12', 'yes', 'Salaried', 'RESDFDSF', '2312321321', '14', 'testing pet', 'black', '12', 'testing breed', 'male', '27.5666408', 'TESTD DT', 'GFGVFVFCV', '22', '', 'events_bg2.png', 'events_bg3.png', 'Approved', '2021-05-27 00:00:00'),
(12, 'HIMANSHU GOYAL', 'himanshugoyal1591998@gmail.com', '08385902167', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'Own', 'yes', 'other', 'yes', '12', 'yes', 'Salaried', 'fgfgfg', '5454', '14', 'testing pet', 'black', '12', 'testing breed', 'male', '27.5666408', 'bvbv', 'fgbvbv', '12', 'getting_bg7.jpg', 'download2.jpg', 'download3.jpg', 'Approved', '2021-05-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `behave_cate`
--

CREATE TABLE `behave_cate` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(1000) NOT NULL,
  `cate_desc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `behave_cate`
--

INSERT INTO `behave_cate` (`id`, `cate_name`, `cate_desc`) VALUES
(1, 'behave', 'gfgfgf');

-- --------------------------------------------------------

--
-- Table structure for table `behave_newpost`
--

CREATE TABLE `behave_newpost` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `about` varchar(8000) NOT NULL,
  `age` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `gender` varchar(500) NOT NULL,
  `breed` varchar(500) NOT NULL,
  `color` varchar(500) NOT NULL,
  `image1` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `behave_newpost`
--

INSERT INTO `behave_newpost` (`id`, `name`, `about`, `age`, `link`, `image`, `date`, `gender`, `breed`, `color`, `image1`, `image2`, `image3`, `image4`) VALUES
(8, 'jacky', '<p>v vkvjc vnf gjrg fdgvjfdn bfdj bjdf bjf dvb</p>\r\n', '11', 'jacky2629012643', 'home_slider14.jpg', '2021-05-27 00:00:00', 'Male', 'dont know', 'brown', 'home_slider15.jpg', 'home_slider16.jpg', 'home_slider17.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `breed_newpost`
--

CREATE TABLE `breed_newpost` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `height` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `exp` varchar(200) NOT NULL,
  `about` varchar(8000) NOT NULL,
  `temp` varchar(500) NOT NULL,
  `link` varchar(800) NOT NULL,
  `grp` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `image1` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `breed_newpost`
--

INSERT INTO `breed_newpost` (`id`, `name`, `height`, `weight`, `exp`, `about`, `temp`, `link`, `grp`, `image`, `image1`, `image2`, `image3`, `image4`, `date`) VALUES
(12, 'Beagle ', '13 inches & under, 13-15 inches', 'under 20 pounds (13 inches & under), 20-30 pounds (13-15 inches)', '10-15 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The beagle is a breed of small hound that is similar in appearance to the much larger foxhound. The beagle is a scent hound. The beagle is the primary breed used as detection dogs for prohibited agricultural imports and foodstuffs in quarantine around the world. The beagle is intelligent. It is a popular pet due to its size, good temper, and a lack of inherited health problems.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>History:&nbsp; </strong>The origin of the beagle is not known. In the 11th century, William the Conqueror brought the St. Hubert Hound and the Talbot hound to Britain. In Britain both of these strains were then crossed with Greyhounds to give them speed and stamina for deer hunting. Beagles are similar to the Harrier and the extinct Southern Hound, though smaller and slower. From medieval times, beagle was used as a generic description for the smaller hounds, though these dogs differed considerably from the modern breed. Miniature breeds of beagle-type dogs were known from the times of Edward II and Henry VII, who both had packs of Glove Beagles, so named since they were small enough to fit on a glove, and Queen Elizabeth I kept a breed known as a Pocket Beagle, which stood 8 to 9 inches (20 to 23 cm) at the shoulder. Small enough to fit in a &quot;pocket&quot; or saddlebag, they rode along on the hunt. The larger hounds would run the prey to ground, then the hunters would release the small dogs to continue the chase through underbrush. Elizabeth I referred to the dogs as her singing beagles and often entertained guests at her royal table by letting her Pocket Beagles cavort amid their plates and cups.19th-century sources refer to these breeds interchangeably and it is possible that the two names refer to the same small variety.</span></span></span></p>\r\n', 'Child-friendly, Active, Playful', 'Beagle-', ' Hound Group ', 'beagle.jpg', 'beagle1.jpg', 'beagle2.jpg', 'beagle3.jpg', NULL, '2021-06-08 07:46:42'),
(13, 'Golden Retriever', '23-24 inches (male), 21.5-22.5 inches (female)', '65-75 pounds (male), 55-65 pounds (female)', '10-12 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#202122\">The&nbsp;<strong>Golden Retriever</strong>&nbsp;is a medium-large gundog</span></span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#202122\">.The name &quot;retriever&quot; refers to the breed&#39;s ability to retrieve shot game undamaged due to their soft mouth</span></span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#202122\">. Golden retrievers have an instinctive love of water, and are easy to train to basic or advanced obedience standards. They are a long-coated breed, with a dense inner coat that provides them with adequate warmth in the outdoors. Golden retrievers are well suited to residency in suburban or country environments.</span></span></span> </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>History:</strong> The Golden Retriever was originally bred in Scotland in the mid-19th century. At that time, wildfowl hunting was a popular sport for the wealthy Scottish elite, but the existing retriever breeds were inadequate for retrieving downed game from both water and land. Retrieving from both land and water was necessary because the hunting grounds of the time were pocketed with marshy ponds and rivers. Consequently, the best water spaniels were crossed with the existing retrievers, resulting in the establishment of the breed today known as the Golden Retriever. The Golden Retriever was first developed near Glen Affric in Scotland, at Guisachan, the highland estate of Dudley Marjoribanks, 1st Baron Tweedmouth. The breed is thought to have originated from the now-extinct Russian tracker dog.</span></span></span></p>\r\n', 'Intelligent, Friendly, Smart', 'Golden-Retriever', ' Sporting Group', 'download.jpg', 'download1.jpg', 'download2.jpg', NULL, NULL, '2021-06-08 07:51:15'),
(14, 'Labrador Retriever', '22.5-24.5 inches (male), 21.5-23.5 inches (female)', '65-80 pounds (male), 55-70 pounds (female)', '10-12 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The&nbsp;Labrador Retriever, often abbreviated to&nbsp;Labrador, is a medium-large&nbsp;gun dog&nbsp;and is&nbsp;one of the most popular dog breeds in a number of countries in the world, particularly in the Western world.&nbsp;Labradors are frequently trained to aid those with&nbsp;blindness&nbsp;or&nbsp;autism, act as a therapy dog, or perform screening and detection work for law enforcement and other official agencies. The breed is best known for their obedience, loyalty, and playful composure.&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>History:&nbsp;</strong>The Labrador breed dates back to at least the 1830s, when St. Johns Water Dogs bred by European settlers in&nbsp;Newfoundland, were first introduced to Britain from ships trading between Canada and&nbsp;Poole&nbsp;in&nbsp;Dorsetshire. These were then bred with British hunting dogs to create what became known as the Labrador Retriever. Its early patrons included the&nbsp;Earl of Malmesbury, the&nbsp;Duke of Buccleuch, the&nbsp;Earl of Home, and&nbsp;Sir John Scott.&nbsp;</span></span></span></p>\r\n', 'Active, Attentive, Friendly', 'Labrador-Retriever', ' Sporting Group ', 'tamu_obedience_header_0.jpg', 'tamu_obedience_header_01.jpg', 'tamu_obedience_header_02.jpg', 'tamu_obedience_header_03.jpg', NULL, '2021-06-08 07:58:33'),
(15, 'Shih tzu', ' 9-10.5 inches', '9-16 pounds', '10-18 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The Shih Tzu is an Asian toy dog breed originating from Tibet. This breed is well-known for their short snout and large round eyes, as well as their ever growing coat, floppy ears, and short and stout posture. Although small in size, they are notorious for their largely fun and playful personality, and calm and friendly temperament. They are highly independent dogs, and are able to adapt well in different situations.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>History: </strong>One theory is that the Shih Tzu descended from a cross between the Pekingese and Lhasa Apso. The dogs were favorites of the Chinese royals and so prized that, for years, the Chinese refused to sell, trade, or give any away. The first dogs of the breed were imported into Europe (England and Norway) in 1930 and were classified by the Kennel Club as &quot;Apsos&quot;. The first European standard for the breed was written in England in 1935 by the Shih Tzu Club, and the dogs were categorised again as Shih Tzu. The breed spread throughout Europe and was brought to the United States after World War II, when returning members of the U.S. military brought back dogs from Europe and Asia, in the mid-1950s. The Shih Tzu was recognized by the American Kennel Club in 1969 in the Toy Group.</span></span></span></p>\r\n', 'Outgoing, Smart, Child-friendly', 'Shih-tzu', ' Toy Group', 'ShihTzuDogMain_L1.jpg', 'ShihTzuDogMain_L2.jpg', 'ShihTzuDogMain_L3.jpg', NULL, NULL, '2021-06-08 08:06:52'),
(16, 'Rottweiler', '24-27 inches (male), 22-25 inches (female)', '95-135 pounds (male), 80-100 pounds (female)', '9-10 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The Rottweiler is a breed of domestic dog, regarded as medium-to-large or large. The dogs were known in German as Rottweiler Metzgerhund, meaning Rottweil butchers&#39; dogs. Rottweilers are now also used as search and rescue dogs, guard dogs, and police dogs.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">History:&nbsp;</span></strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">According to the FCI Standard, the Rottweiler is considered to be one of the oldest dog breeds. Its origin goes back to Roman times. These dogs were kept as herder or driving dogs. They marched over the Alps with the Roman legions, protecting the humans and driving their cattle. In the region of Rottweil, these dogs met and mixed with the native dogs in a natural crossing. The main task of the Rottweiler now became the driving and guarding of the herds of cattle and the defence of their masters and their property. This breed acquired its name from the old free city of Rottweil and was known as the &quot;Rottweil butcher&rsquo;s dog&quot;. The butchers bred this type of dog purely for performance and usefulness. In due course, a first rate watch and driving dog evolved which could also be used as a draught dog.</span></span></span></p>\r\n', 'Loyal, Loving, Confident', 'Rottweiler', ' Working Group ', 'Rottweiler-puppy-6-weeks-old-sitting-on-a-white-background4.jpg', 'Rottweiler-puppy-6-weeks-old-sitting-on-a-white-background5.jpg', 'Rottweiler-puppy-6-weeks-old-sitting-on-a-white-background6.jpg', NULL, NULL, '2021-06-08 08:11:32'),
(17, 'German Shepherd ', '24-26 inches (male), 22-24 inches (female)', '65-90 pounds (male), 50-70 pounds (female)', ' 12-14 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The&nbsp;German Shepherd&nbsp;is a breed of medium to large-sized&nbsp;working dog&nbsp;that originated in Germany. According to the&nbsp;FCI, the breed&#39;s English language name is&nbsp;German Shepherd Dog. The breed was officially known as the &quot;Alsatian Wolf Dog&quot; in the UK from after the&nbsp;First World War&nbsp;until 1977 when its name was changed back to German Shepherd. Despite its&nbsp;wolf-like appearance, the German Shepherd is a relatively modern breed of dog, with its origin dating to 1899.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>History:&nbsp;</strong><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">During the 1850s, attempts were being made to standardize dog breeds. Dogs were being bred to preserve traits that assisted in their job of herding sheep and protecting their flocks from predators. In Germany this was practiced within local communities, where shepherds selected and bred dogs. It was recognized that the breed had the necessary skills for herding sheep, such as intelligence, speed, strength and keen senses of smell. The results were dogs that were able to do such things, but that differed significantly, both in appearance and ability, from one locality to another.</span></span></span></p>\r\n', 'Confident, Courageous, Smart', 'German-Shepherd-', ' Herding Group ', '1_GettyImages-1077470274.jpg', '1_GettyImages-10774702741.jpg', '1_GettyImages-10774702742.jpg', NULL, NULL, '2021-06-08 09:10:17'),
(18, 'Pomeranian', '7 to 12 inches (18 to 30 cm)', '3 to 7 pounds (1.4 to 3.2 kg)', '12-16 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Pomeranian (often known as a Pom) is a breed of dog of the Spitz type that is named for the Pomerania region in north-west Poland and north-east Germany in Central Europe. Classed as a toy dog breed because of its small size, the Pomeranian is descended from larger Spitz-type dogs, specifically the German Spitz. It has been determined by the F&eacute;d&eacute;ration Cynologique Internationale to be part of the German Spitz breed; and in many countries, they are known as the Zwergspitz (&quot;Dwarf Spitz&quot;).</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>History:</strong> The Pomeranian is considered to be descended from the German Spitz. The breed is thought to have acquired its name by association with the area known as Pomerania which is located in northern Poland and Germany along the Baltic Sea. Although not the origin of the breed, this area is credited with the breeding which led to the original Pomeranian type of dog. Proper documentation was lacking until the breed&#39;s introduction into the United Kingdom.</span></span></span></p>\r\n', 'Inquisitive, Bold, Lively', 'Pomeranian', ' Toy Group ', 'Bringing-home-a-Pomeranian.jpg', 'Bringing-home-a-Pomeranian1.jpg', 'Bringing-home-a-Pomeranian2.jpg', NULL, NULL, '2021-06-08 09:19:32'),
(19, 'Pug', ' 10-13 inches', '14-18 pounds', '13-15 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The pug is a breed of dog with physically distinctive features of a wrinkly, short-muzzled face, and curled tail. The breed has a fine, glossy coat that comes in a variety of colours, most often light brown (fawn) or black, and a compact, square body with well-developed muscles.&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>History: </strong>In ancient times, Pugs were bred to be companions for ruling families in China. The pet Pugs were highly valued by Chinese Emperors, and the royal dogs were kept in luxury and guarded by soldier. Pugs later spread to other parts of Asia. In Tibet, Buddhist monks kept Pugs as pets in their monasteries. The breed has retained its affectionate devotion to its owners since ancient times.</span></span></span></p>\r\n', 'Charming, Mischievous, Loving', 'Pug', ' Toy Group ', 'image.jpg', 'image1.jpg', 'image2.jpg', NULL, NULL, '2021-06-08 09:43:57'),
(20, 'Siberian Husky', '21-23.5 inches (male), 20-22 inches (female)', '45-60 pounds (male), 35-50 pounds (female)', '12-14 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The Siberian Husky is a medium-sized working sled dog breed. The breed belongs to the Spitz genetic family. It is recognizable by its thickly furred double coat, erect triangular ears, and distinctive markings, and is smaller than the similar-looking Alaskan Malamute.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>History: </strong>Dogs from the Anadyr River and surrounding regions of Eastern Siberia were imported into Alaska from 1908 (and for the next two decades) during the gold rush for use as sled dogs, especially in the &quot;All-Alaska Sweepstakes,&quot; a 408-mile (657-km) distance dog sled race from Nome, to Candle, and back. Smaller, faster and more enduring than the 100- to 120-pound (45- to 54-kg) freighting dogs then in general use, they immediately dominated the Sweepstakes race. Leonhard Seppala, the foremost breeder of Siberian sled dogs of the time, participated in competitions from 1909 to the mid-1920s with a number of championships to his name</span></span></span></p>\r\n', 'Loyal, Mischievous, Outgoing', 'Siberian-Husky', ' Working Group ', 'Resources_Dog_Articles_Health_Line_126_Thumb.jpg', 'Resources_Dog_Articles_Health_Line_126_Thumb1.jpg', 'Resources_Dog_Articles_Health_Line_126_Thumb2.jpg', NULL, NULL, '2021-06-08 09:53:45'),
(21, 'Dachshund', '37–47 cm (15–19 in)', '16 to 32 pounds', '12 – 16 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The dachshund also known as the wiener dog, badger dog, sausage dog, is a short-legged, long-bodied, hound-type dog breed. They may be smooth, wire, or long-haired.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">History:</span></strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"> The dachshund is a creation of German breeders and includes elements of German, French, and English hounds and terriers. Dachshunds have been kept by royal courts all over Europe, including that of Queen Victoria, who was particularly enamored of the breed.</span></span></span></p>\r\n', 'Playful, Clever, Stubborn', 'Dachshund', 'Hound group', 'standard-vs-miniature-dachshund-cover.jpg', 'standard-vs-miniature-dachshund-cover1.jpg', 'standard-vs-miniature-dachshund-cover2.jpg', NULL, NULL, '2021-06-08 10:04:49'),
(22, 'Dobermann', 'Male: 66–72 cm, Female: 61–68 cm', 'Male: 40–45 kg, Female: 32–35 kg', '10 – 13 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The Dobermann or Doberman Pinscher in the United States and Canada, is a medium-large breed of domestic dog that was originally developed around 1890 by Karl Friedrich Louis Dobermann, a tax collector from Germany. The Dobermann has a long muzzle. It stands on its pads and is not usually heavy-footed. Ideally, they have an even and graceful gait.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>History:</strong> Dobermanns were first bred in the 1880s by Karl Friedrich Louis Dobermann in Apolda, Thuringia, Germany, a tax collector who ran the Apolda dog pound. With access to dogs of many breeds, he got the idea to create a breed that would be ideal for protecting him. He set out to breed a new type of dog that would exhibit impressive stamina, strength, and intelligence. Five years after Dobermann&#39;s death, Otto Goeller, one of the earliest breeders, created the National Doberman Pinscher Club and is considered to have perfected the breed, breeding and refining them in the 1890s.</span></span></span></p>\r\n', 'Intelligent, Energetic, Fearless', 'Dobermann', 'Working group', 'Doberman-Pinscher-puppies.jpg', 'Doberman-Pinscher-puppies1.jpg', 'Doberman-Pinscher-puppies2.jpg', NULL, NULL, '2021-06-08 10:17:11'),
(23, 'Chow Chow', 'Male: 48–56 cm, Female: 46–51 cm', '45-70 pounds', '9 – 15 years', '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The Chow Chow is a dog breed originally from northern China. The Chow Chow is a sturdily built dog, square in profile, with a broad skull and small, triangular, erect ears with rounded tips. The breed is known for a very dense double coat that is either smooth or rough. The fur is particularly thick in the neck area, giving it a distinctive ruff or mane appearance. The coat may be shaded/self-red, black, blue, cinnamon/fawn, or cream.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>History:</strong> The Chow Chow has been identified as a basal breed that predates the emergence of the modern breeds in the 19th Century. One writer proposed that the Chow Chow originated in China 2,000 years ago or possibly originated in Arctic Asia 3,000 years ago which migrated to Mongolia, then to China.</span></span></span></p>\r\n', 'Loyal, Independent, Quiet', 'Chow-Chow', 'Non-sporting group', 'Chow-Chow-puppies-on-a-white-background_20200502223501540.jpg', 'Chow-Chow-puppies-on-a-white-background_202005022235015401.jpg', 'Chow-Chow-puppies-on-a-white-background_202005022235015402.jpg', NULL, NULL, '2021-06-08 10:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `number` varchar(20) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `msg` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `subject`, `msg`) VALUES
(6, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '546546', 'gfhghgj', 'hgbvhghgfhgf'),
(7, 'kflREyjDUYZiP', 'danielhunter9710@gmail.com', '9876034152', 'fdsjRkDCoAwaHZcv', 'IluZUschwpH'),
(8, 'QRatOnUehC', 'danielhunter9710@gmail.com', '3705903002', 'imGCVJsxZyo', 'EXsSyOTpK');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `number` varchar(20) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `order_id` varchar(500) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(500) NOT NULL,
  `citizen` varchar(100) NOT NULL,
  `motive` varchar(5000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `name`, `email`, `number`, `amount`, `address`, `order_id`, `city`, `state`, `citizen`, `motive`, `date`) VALUES
(5, 'HIMANSHU GOYAL', 'himanshugoyal1591998@gmail.com', '08905366876', '5000', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'order_HFGoSA9fFygaP3', 'ALWAR', 'Rajasthan', 'Yes', 'Our Website', '2021-05-26 00:00:00'),
(6, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08905366876', '250', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'order_HHaBR7nrpofpdd', 'ALWAR', 'Rajasthan', 'Yes', 'Our Website', '2021-06-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `date` varchar(500) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `orge` varchar(2000) NOT NULL,
  `link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `location`, `orge`, `link`) VALUES
(2, 'testing event', '29/05/2021', 'jaipir', 'testst', 'https://www.youtube.com/watch?v=o51faJAbpIc'),
(3, 'testuing evebnt', '16/06/2021', 'jaipur', 'dogbazr', 'https://www.akc.org/');

-- --------------------------------------------------------

--
-- Table structure for table `franchies`
--

CREATE TABLE `franchies` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `a_mob` varchar(50) NOT NULL,
  `edu` varchar(500) NOT NULL,
  `buss` varchar(500) NOT NULL,
  `p_occu` varchar(500) NOT NULL,
  `social` varchar(1000) NOT NULL,
  `accommo` varchar(1000) NOT NULL,
  `c_add` varchar(2000) NOT NULL,
  `p_add` varchar(2000) NOT NULL,
  `have_pet` varchar(50) NOT NULL,
  `experia` varchar(100) NOT NULL,
  `operate` varchar(500) NOT NULL,
  `operate_ex` varchar(1000) NOT NULL,
  `career` varchar(500) NOT NULL,
  `passion` varchar(500) NOT NULL,
  `yeare` varchar(500) NOT NULL,
  `skill` varchar(500) NOT NULL,
  `expectations` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `franchies`
--

INSERT INTO `franchies` (`id`, `name`, `email`, `mob`, `a_mob`, `edu`, `buss`, `p_occu`, `social`, `accommo`, `c_add`, `p_add`, `have_pet`, `experia`, `operate`, `operate_ex`, `career`, `passion`, `yeare`, `skill`, `expectations`, `date`) VALUES
(3, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08385902167', '6687687', 'Graduate', 'gvhjh', 'knbjh', 'kn m ', 'Own', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', '114jn j jhn', 'yes', 'yes', 'yes', 'knbkjbjh', 'Rajasthan', 'kbhjbjh', 'n bjb jh jh', 'lmnkjlnkj nkj', 'kjb jbjhj', '2021-05-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `cate` varchar(1000) NOT NULL,
  `link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `image`, `cate`, `link`) VALUES
(34, 'sponsor_banner.jpg', 'testing category', 'testing-category'),
(35, 'sponsor_banner1.jpg', 'testing category', 'testing-category'),
(36, 'sponsor_banner2.jpg', 'testing category', 'testing-category'),
(37, 'sponsor_banner3.jpg', 'testing category', 'testing-category'),
(38, 'sponsor_banner4.jpg', 'testing category', 'testing-category'),
(39, 'sponsor_banner5.jpg', 'testing category', 'testing-category'),
(40, 'sponsor_banner6.jpg', 'testing category', 'testing-category'),
(41, 'sponsor_banner7.jpg', 'testing category', 'testing-category'),
(42, 'sponsor_banner8.jpg', 'testing category', 'testing-category'),
(43, 'sponsor_banner9.jpg', 'testing category', 'testing-category'),
(44, 'sponsor_banner10.jpg', 'testing category', 'testing-category'),
(45, 'about_viren_2.jpg', 'testing 2', 'testing-2'),
(46, 'about_viren_21.jpg', 'testing 2', 'testing-2');

-- --------------------------------------------------------

--
-- Table structure for table `gallary_cate`
--

CREATE TABLE `gallary_cate` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(500) NOT NULL,
  `cate_desc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary_cate`
--

INSERT INTO `gallary_cate` (`id`, `cate_name`, `cate_desc`) VALUES
(2, 'testing category', 'this is testing category'),
(3, 'testing 2', 'testing 2 cate');

-- --------------------------------------------------------

--
-- Table structure for table `getting_cate`
--

CREATE TABLE `getting_cate` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(1000) NOT NULL,
  `subcate_name` varchar(500) NOT NULL,
  `cate_desc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `getting_cate`
--

INSERT INTO `getting_cate` (`id`, `cate_name`, `subcate_name`, `cate_desc`) VALUES
(2, 'news', 'testing4', 'dfvcv'),
(3, 'video', 'tesuijh', 'vcvvvvvvvvvvvvvb');

-- --------------------------------------------------------

--
-- Table structure for table `getting_newpost`
--

CREATE TABLE `getting_newpost` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `cate` varchar(500) NOT NULL,
  `subcategory` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `getting_newpost`
--

INSERT INTO `getting_newpost` (`id`, `head`, `content`, `cate`, `subcategory`, `link`, `image`, `date`) VALUES
(4, 'getting dog tset news', '<p>ths is ss shs shs shsbnssssbs svsg ss ss sts&nbsp;</p>\r\n', 'news', 'testing4', 'getting-dog-tset-news', 'sponsor_bg.jpg', '2021-05-27 00:00:00'),
(6, 'testingb', '', 'video', 'Select sub Category', 'testingb', 'https://www.youtube.com/embed/vVUDagpoX0w', '2021-06-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `giftgiving`
--

CREATE TABLE `giftgiving` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `number` varchar(20) NOT NULL,
  `msg` varchar(2000) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `order_id` varchar(500) NOT NULL,
  `gift` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giftgiving`
--

INSERT INTO `giftgiving` (`id`, `name`, `email`, `number`, `msg`, `amount`, `order_id`, `gift`) VALUES
(1, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08385902167', 'dfgdfgfh', '250', 'order_H3HiyVicMTVA2J', 'first'),
(3, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '543543534', 'gfdgdfgdfgfdgf', '250', 'order_H4Pxa0nek5f3Ny', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `givingup_cate`
--

CREATE TABLE `givingup_cate` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(1000) NOT NULL,
  `subcate_name` varchar(500) NOT NULL,
  `cate_desc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `givingup_cate`
--

INSERT INTO `givingup_cate` (`id`, `cate_name`, `subcate_name`, `cate_desc`) VALUES
(3, 'video', 'test3', 'czdvcv');

-- --------------------------------------------------------

--
-- Table structure for table `givingup_newpost`
--

CREATE TABLE `givingup_newpost` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `cate` varchar(500) NOT NULL,
  `subcategory` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `givingup_newpost`
--

INSERT INTO `givingup_newpost` (`id`, `head`, `content`, `cate`, `subcategory`, `link`, `image`, `date`) VALUES
(6, 'giving up testing news', '<p>this is testbfghz xcfvxcvxcvxcvxc</p>\r\n', 'news', 'testing 1', 'giving-up-testing-news', 'home_slider2.jpg', '2021-05-27 00:00:00'),
(7, 'testbhff', '', 'video', 'Select sub Category', 'testbhff', 'https://www.youtube.com/embed/vVUDagpoX0w', '2021-06-01 00:00:00'),
(8, 'new post ', '<p>hdfjhjvds nfvjnh fd fv j vd</p>\r\n', 'news', 'testing 1', 'new-post-', 'aboutpaws_bg.jpg', '2021-06-07 05:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `grooming_cate`
--

CREATE TABLE `grooming_cate` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(500) NOT NULL,
  `subcate_name` varchar(500) NOT NULL,
  `cate_desc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grooming_cate`
--

INSERT INTO `grooming_cate` (`id`, `cate_name`, `subcate_name`, `cate_desc`) VALUES
(3, 'news', 'dog grooming 1', 'thghdfgfd'),
(4, 'video', 'tesing groomign 2', 'fvdvgcbvc'),
(5, 'news', 'Introduction to Dog Grooming', 'Dog grooming refers to both the hygienic care and cleaning of a dog, as well as a process by which a dog\'s physical appearance is enhanced for showing or other types of competition.'),
(6, 'news', 'Canine Anatomy', 'If you are dealing with a dog it is very important for you to know about their basic structure. Understanding the basic canine anatomy is the foundation of Grooming.'),
(7, 'news', 'Dog Grooming', 'Best to care for your dog depends completely on your specific dog, their breed and their coat'),
(8, 'news', 'Does and don’ts ', 'Does and don’ts while grooming your pet');

-- --------------------------------------------------------

--
-- Table structure for table `grooming_newpost`
--

CREATE TABLE `grooming_newpost` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `cate` varchar(500) NOT NULL,
  `subcategory` varchar(500) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grooming_newpost`
--

INSERT INTO `grooming_newpost` (`id`, `head`, `content`, `cate`, `subcategory`, `link`, `image`, `date`) VALUES
(6, 'test 2', '', 'video', 'Select sub Category', 'test-2', 'https://www.youtube.com/embed/vVUDagpoX0w', '2021-06-01 00:00:00'),
(7, 'Anatomy and Health', '<p><span style=\"font-size:18px\">Dog anatomy includes identical internal structures similar to human internal structure.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">External anatomy of a normal dog includes: 1. Stop &ndash; 2. Muzzle &ndash; 3. Dewlap (throat, neck skin) &ndash; 4. Shoulder &ndash; 5. Elbow &ndash; 6. Forefeet &ndash; 7. Croup (rump) &ndash; 8. Leg (thigh and hip) &ndash; 9. Hock &ndash; 10. Hind feet &ndash; 11. Withers &ndash; 12. Stifle &ndash; 13. Paws 14. Tail</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'news', 'Introduction to Dog Grooming', 'Anatomy-and-Health', 'Anatomy_dog.png', '2021-06-07 07:17:57'),
(8, 'Importance of Canine Anatomy', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The structure of a Dog- Front and Rear assemblies</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Front Assembly</span></span></strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">: The front assembly includes the forearm, front legs, pasterns and feet. This series of bones are important because the front assembly carries sixty percent of the dog&#39;s body weight and is only attached to the body by muscles, tendons and ligaments. The front assembly only includes a large number of moving parts.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Rear Assembly</span></span></strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">: The rear assembly is another important part of dog anatomy. It involves the vital hip joint which connects the femur to the tibia and fibula at the knee joint. It gives the dog forward thrust and drive. When in motion the entire rear leg assembly should extend and flex through the hock to drive the dog forward.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'news', 'Canine Anatomy', 'Importance-of-Canine-Anatomy', 'Dog-General-anatomy-Illustrations.png', '2021-06-07 07:27:38'),
(9, 'Basic Dog Grooming', '<p><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\"><strong>Types of Breeds Recognition, Combing and brushing:</strong></span></span></p>\r\n\r\n<p style=\"margin-left:48px\"><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\">Best to care for your dog depends completely on your specific dog, their breed and their coat. Here are the different types of coat dogs have:</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\"><strong>Silky coat</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:48px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:48px; text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\"><img alt=\"Silky Terrier Dog Breed Information, Pictures, Characteristics &amp; Facts –  DogTime\" src=\"https://dogtime.com/assets/uploads/gallery/silky-terrier-dog-breed-pictures/2-side.jpg\" /></span></span></p>\r\n\r\n<p style=\"margin-left:48px\"><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\">Silky coated dogs include breeds such as the Afghan Hound, Lhasa Apso, Shih Tzu, Tibetan Terrier and Yorkshire Terrier. Regular bathing is important to keep a silky coat look healthy, shiny and tangle free. Look for a de-greasing shampoo, conditioning shampoo or shine enhancing shampoo.</span></span></p>\r\n\r\n<p style=\"margin-left:48px\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\"><strong>Double coated</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:48px\"><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\"><img alt=\"What is the cost of a Labrador retriever puppy in India?\" src=\"https://www.petindiaonline.com/story_images/21_lab1.jpg\" /></span></span></p>\r\n\r\n<p style=\"margin-left:48px\"><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\"><span style=\"background-color:white\"><span style=\"color:black\">Breeds of dogs with a double coat &ndash; some examples include Labrador, Golden Retriever, Pug, German Shepherd, Shiba Inu and Old English Sheepdog.&nbsp;Bathe a double coated dog every 4-8 weeks. Deep cleaning, de-shedding are options for most double coat breeds.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:48px\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\"><strong>Puppy</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:48px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:48px; text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\"><img alt=\"Why Do Puppies Shed Their Coat? What To Know About Puppy Fur\" src=\"https://s3.amazonaws.com/cdn-origin-etr.akc.org/wp-content/uploads/2019/06/27203226/Bohemian-Shepherd-puppy.jpg\" /></span></span></p>\r\n\r\n<p style=\"margin-left:48px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:48px\"><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\">With a new puppy it&rsquo;s important to be very gentle with their grooming and bathing. Use a mild, puppy specific shampoo and light conditioner.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'news', 'Dog Grooming', 'Basic-Dog-Grooming', 'groomingtools-1024x535.jpg', '2021-06-07 08:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `houdinv_staff_management`
--

CREATE TABLE `houdinv_staff_management` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `staff_contact_number` varchar(250) NOT NULL,
  `staff_department` varchar(250) NOT NULL,
  `staff_status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `staff_warehouse` int(11) NOT NULL,
  `staff_email` varchar(250) NOT NULL,
  `staff_password` varchar(250) DEFAULT NULL,
  `staff_password_salt` varchar(150) DEFAULT NULL,
  `staff_alternat_contact` varchar(250) DEFAULT NULL,
  `staff_address` longtext NOT NULL,
  `password_send` varchar(250) DEFAULT NULL,
  `houdinv_staff_auth_token` varchar(255) NOT NULL,
  `houdinv_staff_auth_url_token` varchar(255) NOT NULL,
  `create_date` varchar(200) NOT NULL,
  `update_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houdinv_staff_management`
--

INSERT INTO `houdinv_staff_management` (`staff_id`, `staff_name`, `staff_contact_number`, `staff_department`, `staff_status`, `image`, `staff_warehouse`, `staff_email`, `staff_password`, `staff_password_salt`, `staff_alternat_contact`, `staff_address`, `password_send`, `houdinv_staff_auth_token`, `houdinv_staff_auth_url_token`, `create_date`, `update_date`) VALUES
(2, 'himanshu', '', 'Account', 1, 'http://localhost/dogbazar/upload/profilepic/image-1619591824.jpg', 4, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', '', '\\', 'email', '', '', '1532432610', '1619591824'),
(3, 'himanshu', '', '', 1, 'http://localhost/dogbazar/upload/profilepic/image-1619591824.jpg', 1, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', NULL, '', NULL, '', '', '', '1619591824'),
(10, 'himanshu', '', 'Account', 1, 'http://localhost/dogbazar/upload/profilepic/image-1619591824.jpg', 1, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', NULL, '', NULL, '', '', '', '1619591824');

-- --------------------------------------------------------

--
-- Table structure for table `listdog`
--

CREATE TABLE `listdog` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `number` varchar(20) NOT NULL,
  `p_name` varchar(500) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `color` varchar(200) NOT NULL,
  `age` varchar(100) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `about` varchar(8000) NOT NULL,
  `city` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `link` varchar(500) NOT NULL,
  `image1` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(400) DEFAULT NULL,
  `front` varchar(500) NOT NULL,
  `back` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listdog`
--

INSERT INTO `listdog` (`id`, `name`, `email`, `number`, `p_name`, `weight`, `color`, `age`, `breed`, `gender`, `address`, `about`, `city`, `image`, `link`, `image1`, `image2`, `image3`, `image4`, `front`, `back`, `date`) VALUES
(15, 'HIMANSHU ', 'HIMANSHUGOYAL1011@GMAIL.COM', '0890536', 'test45', '33', 'dfdsfsdf', '21', 'trsdf', 'Female', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'fscvc cv dcvcv dcvcvcxv', '27.5666408', 'aboutmad.png', 'trsdfHIMANSHUGOYAL101157980', 'aboutmad1.png', 'aboutmad2.png', NULL, NULL, 'aboutmad3.png', 'aboutmad4.png', '2021-05-27 00:00:00'),
(16, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08905366876', 'jack', '22', 'dfsdfsd', '11', 'tttt', 'male', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'cxcasdfasdasdsadas', 'alwar', 'download.jpg', 'ttttHIMANSHUGOYAL101136584', NULL, NULL, NULL, NULL, 'download1.jpg', 'download2.jpg', '2021-06-01 00:00:00'),
(17, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08385902167', 'fff', '2', 'dfsdasd', '11', 'sdasdasd', 'male', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'sfcasdsdsadsadsas', 'alwar', 'download3.jpg', 'sdasdasdHIMANSHUGOYAL101143404', NULL, NULL, NULL, NULL, 'download4.jpg', 'download5.jpg', '2021-06-01 00:00:00'),
(18, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08905366876', 'dfdfdf', '21', 'sadsadas', '21', 'sdsadas', 'male', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'xcxcczxcxz', 'jaipur', 'dog.jpg', 'sdsadasHIMANSHUGOYAL101132574', NULL, NULL, NULL, NULL, 'dog1.jpg', 'dog2.jpg', '2021-06-01 00:00:00'),
(19, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08385902167', 'test44', '22', 'saddsds', '11', 'sdsadsd', 'male', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'xcxzcxzcxzcxzcxz', 'alwar', 'download6.jpg', 'sdsadsdHIMANSHUGOYAL101149486', NULL, NULL, NULL, NULL, 'download7.jpg', 'download8.jpg', '2021-06-01 00:00:00'),
(21, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08905366876', 'fff', '2', 'ewwqe', '21', 'ewewq', 'male', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'fcsaxcdfsadsa', 'alwar', 'dog3.jpg', 'ewewqHIMANSHUGOYAL101106408', NULL, NULL, NULL, NULL, 'dog4.jpg', 'dog5.jpg', '2021-06-01 00:00:00'),
(22, 'himanshu goyal', 'himanshugoyal1591998@gmail.com', '08905366876', 'fff', '2', 'saddsa', '23 year', 'weqesd', 'male', '114,Azad Nagar, 60 Foot Road,Alwar', 'fadsfsfdf', 'alwar', 'download9.jpg', 'weqesdhimanshugoyal159199898845', NULL, NULL, NULL, NULL, 'download10.jpg', 'download11.jpg', '2021-06-01 00:00:00'),
(23, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08385902167', 'fff', '3', 'xcxv', '21', 'fghvbv', 'male', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'vdfgfdgfdgdfgdfgdf', 'alwar', 'download12.jpg', 'fghvbvHIMANSHUGOYAL101171905', NULL, NULL, NULL, NULL, 'download13.jpg', 'download14.jpg', '2021-06-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news_cate`
--

CREATE TABLE `news_cate` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(1000) NOT NULL,
  `cate_desc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_cate`
--

INSERT INTO `news_cate` (`id`, `cate_name`, `cate_desc`) VALUES
(5, 'Testing Category', 'gyxcfxv'),
(6, 'Feeding News', 'feeding news');

-- --------------------------------------------------------

--
-- Table structure for table `news_newpost`
--

CREATE TABLE `news_newpost` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `cate` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_newpost`
--

INSERT INTO `news_newpost` (`id`, `head`, `content`, `cate`, `link`, `image`, `date`) VALUES
(5, 'testing news', '<p>This is testing news contwnt</p>\r\n', 'Testing Category', 'testing-news', 'download.jpg', '2021-05-28 00:00:00'),
(7, 'Two Women from J&K are Feeding around 25 Stray Dogs Daily amid Covid-19 Lockdown', '<p>COVID-19 outbreak followed by lockdown restrictions has made people struggle for basic amenities including food. The COVID-induced lockdown has also put India&rsquo;s four-legged strays in distress. In the scorching heat, stray animals all over the country are suffering due to the unavailability of food and water. Large numbers of strays depend on leftovers. But with people pushed indoors, eateries and restaurants being shut strays are not able to kill their hunger.</p>\r\n\r\n<p>But amid these unprecedented situations, several people have come forward to feed and provide shelter to strays. From Nagpur&rsquo;s Ranjeet Nath, which distributes 30&ndash;40-kilogram biryani to over 190 street dogs, to the Delhi girl who made warm shelter during winters with sacks for stranded dogs.</p>\r\n\r\n<p>Two Jammu and Kashmir girls, who have been feeding stray dogs since last year, have also made up to the list. Hailing from the Udhampur area Neha Sharma and Pranavi Singh showcase their love and affection towards the stray animals. On a daily basis, both of them feed approximately 20-25 strays in their locality. The duo provides them with pedigree, roti, rice, milk, and curd. They not just feed them but also do first aid when required. In an interview with ANI, one of them said that if each household spares one roti then the strays would never go hungry. &ldquo;Feeding them is our social responsibility,&rdquo; she added. They urged people to give them roti instead of beating them.</p>\r\n\r\n<p>News source @news18</p>\r\n', 'Feeding News', 'Two-Women-from-J -and-K-are-Feeding-around-Stray-Dogs-Daily-amid-Covid-Lockdown', 'download_(2).jpg', '2021-06-08 07:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_cate`
--

CREATE TABLE `nutrition_cate` (
  `id` int(11) NOT NULL,
  `subcate_name` varchar(500) NOT NULL,
  `cate_name` varchar(500) NOT NULL,
  `cate_desc` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutrition_cate`
--

INSERT INTO `nutrition_cate` (`id`, `subcate_name`, `cate_name`, `cate_desc`) VALUES
(3, 'testing 1', 'news', 'This is testing category'),
(5, 'testing 2', 'video', 'this is testing 2'),
(6, 'news testiung 2', 'news', 'gfgvhg gv g g gh'),
(7, 'General Nutrition', 'news', 'The six basic nutrients are water, proteins, fats, carbohydrates, minerals, and vitamins. These essential nutrients are required as part of the dog\'s regular diet and are involved in all of the basic functions of the body.'),
(8, 'Puppy Nutrition', 'news', 'Cute, furry, and hungry. Your new pet is ready for puppy food, and you want to make sure you start them off right. ');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_newpost`
--

CREATE TABLE `nutrition_newpost` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `cate` varchar(500) NOT NULL,
  `subcategory` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutrition_newpost`
--

INSERT INTO `nutrition_newpost` (`id`, `head`, `content`, `cate`, `subcategory`, `link`, `image`, `date`) VALUES
(11, 'updated heading', '', 'video', 'Select sub Category', 'updated-heading', 'https://www.youtube.com/embed/SarjxS9nxvA', '2021-05-31 00:00:00'),
(13, 'Essential Nutrients for dog', '<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>1. Proteins:</strong> Body tissues are made of proteins. Your dog&#39;s body makes only 13 of the 23 amino acids that are the building blocks of proteins. The other 10 have to come from food. </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>2. Fats:</strong> Fats give your dog energy. Fat supplies the most concentrated source of energy, with more than twice as many calories as protein and carbohydrates. It also provides essential omega-3 and omega-6 fatty acids; enables absorption of fat-soluble vitamins; protects the internal organs; regulates body temperature; and promotes a healthy nervous system. </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">They also help keep your dog&#39;s skin and hair healthy. Some important fatty acids for your dog are: &bull; Linoleic acid &bull; Omega-6 &bull; Omega-3 </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>3. Carbohydrates:</strong> Carbohydrates are the main source of glucose, the &ldquo;fuel&rdquo; the body runs on. Although carbohydrates are not an essential nutrient for dogs, healthy carbohydrates supply important vitamins, minerals, antioxidants and plant-based nutrients that help promote optimum health. Carbs come from plants. When your dog eats grains and vegetables, they get: &bull; Sugars &bull; Starches &bull; Fiber </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>4. Vitamins and minerals:</strong> These are needed for many of the chemical reactions in your dog&#39;s body, such as building bones and keeping them strong. Vitamins are organic compounds (meaning that they contain carbon) that are required in small quantities for proper metabolic function. Vitamins can be soluble in fat (A, D, E and K) or in water (B and C). Minerals perform a variety of functions in the body that are essential for supporting life, including: constituting a major part of bones (calcium, phosphorus); carrying oxygen throughout the body (iron); assisting in wound healing (zinc); providing antioxidant support (selenium); aiding in nerve transmission (sodium, potassium, calcium, magnesium); and regulating fluid balance (sodium, chloride, potassium). </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>5. Water:</strong> Even if dogs lose all of their body fat and half their protein, they can survive. But water is so important that they could die if they lose only 10% of the water in theirbody. Water makes up more than half of an adult dog&#39;s body weight.</span></span></p>\r\n', 'news', 'General Nutrition', 'Essential-Nutrients-for-dog', 'heroimage0_841026001572556496.jpg', '2021-06-08 06:34:54'),
(14, 'Questions related to Puppy Nutrition', '<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">If you are wondering how to feed a puppy, read on.</span></span></p>\r\n\r\n<h2><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Q1. How and why puppy food is different from adult dogs?</span></span></h2>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Puppies are growing rapidly, building bone and muscle, and developing organs. Adult dogs&nbsp;are maintaining their bodies. Your puppy needs extra nutrients to fuel their growth.&nbsp;When your&nbsp;<strong>puppy</strong>&nbsp;is growing, he needs more nutrients and calories than an&nbsp;<strong>adult dog</strong>, which is why&nbsp;<strong>puppy foods</strong>&nbsp;have higher levels of protein and fat to support growth, as well as nutrients like DHA, an omega fatty acid found in mother&#39;s milk. Once your&nbsp;<strong>puppy</strong>&nbsp;reaches adulthood, he doesn&#39;t need as many calories.</span></span></p>\r\n\r\n<h2><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Q2. When should a puppy start eating solid food?</span></span></h2>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>Puppies should begin eating solid food</strong>&nbsp;about 3 1/2 to 4 1/2 weeks of age. Initially, make gruel by mixing a milk replacer in&nbsp;<strong>puppy food</strong>&nbsp;soaked in water and place this mixture in a flat saucer.&nbsp;</span></span></p>\r\n\r\n<p><strong><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Q3.&nbsp;How do I select a high-quality puppy food?</span></span></strong></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">6 Steps To&nbsp;Choosing&nbsp;The&nbsp;Best Food&nbsp;For Your&nbsp;Dog</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Step 1: Consider your&nbsp;<strong>dog&#39;s</strong>&nbsp;age, activity, breed, and reproductive status</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Step 2: Know the &ldquo;buzz words&rdquo; on&nbsp;<strong>food</strong>&nbsp;packaging</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Step 3: Learn to read the ingredients</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Step 4: Decide if grain-free is right for your&nbsp;<strong>dog</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Step 5: Check the nutritional adequacy statement</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Step 6: Do your homework on your&nbsp;<strong>brand</strong>&nbsp;of choice</span></span></p>\r\n\r\n<p><strong><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Q4.&nbsp;How often should I feed my dog?</span></span></strong></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Puppies under 3 months of age should be fed at least four times a day. Puppies between 3 and 5 months of age should be given three meals a day.&nbsp;</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'news', 'Puppy Nutrition', 'Questions-related-to-Puppy-Nutrition', 'puppy-food.png', '2021-06-08 06:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `petcare_newpost`
--

CREATE TABLE `petcare_newpost` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petcare_newpost`
--

INSERT INTO `petcare_newpost` (`id`, `head`, `image`, `date`) VALUES
(9, 'test 1 heading', 'https://www.youtube.com/embed/vVUDagpoX0w', '2021-06-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `petmemo`
--

CREATE TABLE `petmemo` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `b_date` varchar(50) NOT NULL,
  `b_place` varchar(500) NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `d_place` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `about` varchar(2000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `image1` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petmemo`
--

INSERT INTO `petmemo` (`id`, `name`, `b_date`, `b_place`, `d_date`, `d_place`, `link`, `about`, `image`, `image1`, `image2`, `image3`, `image4`) VALUES
(5, 'testing pet memorial', '11/05/2021', 'alwar', '11/05/2021', 'alae', 'testing-pet-memorial', '<p>this is testing pet memorial</p>\r\n', 'getting_bg.jpg', 'getting_bg1.jpg', 'getting_bg2.jpg', 'getting_bg3.jpg', NULL),
(6, 'himanshu goyal', '02/06/2021', 'alwra', '30/06/2021', 'alwar', 'himanshu-goyal', '<p>testing prt&nbsp; &nbsp;</p>\r\n', 'about_viren_top.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `problems_cate`
--

CREATE TABLE `problems_cate` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(500) NOT NULL,
  `subcate_name` varchar(500) NOT NULL,
  `cate_desc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problems_cate`
--

INSERT INTO `problems_cate` (`id`, `cate_name`, `subcate_name`, `cate_desc`) VALUES
(2, 'news', 'testing 1', 'ggfgfdg'),
(3, 'video', 'testing 2', 'rfgdfgdfgdf'),
(4, 'news', 'Common problems', 'When you become a pet parent, you welcome the good times as well as the inevitable dog health problems that come up.'),
(5, 'news', 'Pet Emergencies', 'Pet emergency can occur anytime. Here are some guidelines for that. ');

-- --------------------------------------------------------

--
-- Table structure for table `problems_newpost`
--

CREATE TABLE `problems_newpost` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `cate` varchar(500) NOT NULL,
  `subcategory` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problems_newpost`
--

INSERT INTO `problems_newpost` (`id`, `head`, `content`, `cate`, `subcategory`, `link`, `image`, `date`) VALUES
(6, 'updated heading', '', 'video', 'Select sub Category', 'updated-heading', 'https://www.youtube.com/embed/vVUDagpoX0w', '2021-06-01 00:00:00'),
(7, 'Fleas and Ticks', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Fleas and ticks are two of the most frequent pet care concerns. While prevention is the best defense against these parasites, it&rsquo;s important to be able to recognize the signs and symptoms of fleas and ticks so you can help your pets if necessary. </span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Fleas</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Fleas are the most common external parasite to plague companion animals. They are wingless insects that feed on blood, can jump up to two feet high and are persistent in the environment. Fleas can live for as few as 13 days or as long as 12 months&mdash;and during that time, can produce millions of offspring.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Symptoms of Fleas on Dogs:</span></span></span></span></p>\r\n\r\n<ul style=\"list-style-type:circle\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Droppings or &ldquo;flea dirt&rdquo; in a dog&rsquo;s coat (small dark &quot;grains of sand&quot;)</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Flea eggs (tiny, white grains)</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Allergic dermatitis</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Excessive scratching, licking or biting at skin</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Hair loss</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Scabs and hot spots</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Pale gums</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Tapeworms</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Flea Treatment:</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Topical or oral treatment or the use of shampoos, sprays and powders on the pet.</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Thorough cleaning of your house, including rugs, bedding and upholstery. </span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Ticks</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Ticks are parasites that feed on the blood of unlucky host animals, such as cats and dogs. Like mites and spiders, ticks are arachnids. Although their presence may not even be noticed by the host, ticks can transmit many diseases through their bite.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Tick Treatment and Removal</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">If you do find a tick on your pet, it is important to take care when removing it. Any contact with the tick&rsquo;s blood can potentially transmit infection to your pet or even to you. Prompt removal is necessary, but it is important to stay calm and not rush.</span></span></span></span></p>\r\n', 'news', 'Common problems', 'Fleas-and-Ticks', 'flea_and_tick.jpg', '2021-06-08 07:08:16'),
(8, 'First-Aid Tricks for Pet Emergencies', '<p><strong><span style=\"font-size:18px\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">Here are some solution for pet emergencies:&nbsp;</span></span></strong></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">1. <strong>Hit by Car</strong>: An animal in pain is more likely to bite. So, muzzle it first with a scarf, belt, or towel, unless it&rsquo;s vomiting. Get the animal off the road by gently sliding it onto a towel or blanket (these should be in your car&#39;s first-aid kit). Don&#39;t lift the animal. Make sure it&rsquo;s warm, as it may be in shock. If it seems to have any broken bones, do your best to not move it too much.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">2. <strong>Poisoned</strong>: Many household items can be dangerous to dogs and cats -- everything from antifreeze, insecticides, and aspirin to raisins and sugar-free gum. But don&#39;t panic. Many of these have antidotes. Call the Animal Poison Control hotline at Pet Poison Helpline immediately. </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">3. <strong>Choking</strong>: If your pet is unconscious, open its mouth and try to clear the object out with your fingers. Place the pet on its side, applying pressure right behind the ribs and pressing your hands forward. This may help push the item out. Get someone else to drive to the vet so you can continue to do this on the way.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">4. <strong>Dog Bites</strong>: If another dog bites your pet, get to the clinic as soon as possible. Dog bites can pull a lot of hair and debris into the wound. If it&rsquo;s not cleaned out soon, it can become infected.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">5. <strong>Heatstroke</strong>: If your animal is panting heavily, drooling, having trouble breathing, or showing other symptoms of heatstroke, move it to a shady area immediately. Put a cool, wet cloth around its neck and head. Do not cool your pet down too quickly as this can be dangerous.</span></span></p>\r\n', 'news', 'Pet Emergencies', 'First-Aid-Tricks-for-Pet-Emergencies', 'pet_emergency.jpg', '2021-06-08 07:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `sponsoranimal`
--

CREATE TABLE `sponsoranimal` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `number` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `state` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `indi` varchar(500) NOT NULL,
  `motivate` varchar(500) NOT NULL,
  `uniqid` varchar(500) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `order_id` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `p_name` varchar(500) NOT NULL,
  `p_age` varchar(500) NOT NULL,
  `p_color` varchar(500) NOT NULL,
  `p_gender` varchar(500) NOT NULL,
  `p_image` varchar(500) NOT NULL,
  `p_breed` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsoranimal`
--

INSERT INTO `sponsoranimal` (`id`, `name`, `email`, `number`, `address`, `state`, `city`, `indi`, `motivate`, `uniqid`, `amount`, `order_id`, `date`, `p_name`, `p_age`, `p_color`, `p_gender`, `p_image`, `p_breed`) VALUES
(5, 'HIMANSHU GOYAL', 'himanshugoyal1591998@gmail.com', '08905366876', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'Rajasthan', 'ALWAR', 'yes', 'email', '8', '250', 'order_HFd0rQaCFhBAC3', '2021-05-27 00:00:00', 'jacky', '11', 'brown', 'Male', 'home_slider14.jpg', 'dont know');

-- --------------------------------------------------------

--
-- Table structure for table `surrender`
--

CREATE TABLE `surrender` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `address` varchar(1500) NOT NULL,
  `species` varchar(500) NOT NULL,
  `p_name` varchar(500) NOT NULL,
  `owned` varchar(500) NOT NULL,
  `breed` varchar(500) NOT NULL,
  `age` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `picked` varchar(500) NOT NULL,
  `vacc` varchar(500) NOT NULL,
  `diet` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surrender`
--

INSERT INTO `surrender` (`id`, `name`, `email`, `mob`, `address`, `species`, `p_name`, `owned`, `breed`, `age`, `color`, `gender`, `picked`, `vacc`, `diet`, `image`, `image1`, `image2`) VALUES
(1, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '43434', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'testing', 'jack', 'Owned', 'testing breed', '1 year', 'black', 'on', 'hfhjfjdf', 'done', 'na', 'http://localhost/dogbazar/upload/surrender/download_(2)3.jpg', 'http://localhost/dogbazar/upload/surrender/download_(2)4.jpg', 'http://localhost/dogbazar/upload/surrender/download_(2)5.jpg'),
(2, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '4335', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', 'fgfdgf', 'fgdfgdf', 'Rescued', 'fdgfdgf', '45', 'cvcv', 'on', 'fgfgfd', 'fdgfdgf', 'fgfd', 'http://localhost/dogbazar/upload/surrender/download_(1).jpg', 'http://localhost/dogbazar/upload/surrender/download_(1)1.jpg', 'http://localhost/dogbazar/upload/surrender/download_(1)2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `training_cate`
--

CREATE TABLE `training_cate` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(500) NOT NULL,
  `subcate_name` varchar(500) NOT NULL,
  `cate_desc` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_cate`
--

INSERT INTO `training_cate` (`id`, `cate_name`, `subcate_name`, `cate_desc`) VALUES
(4, 'news', 'trai testing post news', 'this is testing hefa'),
(5, 'video', 'testing 4', 'this is tev dhfsda'),
(6, 'news', 'Importance of Dog Training', 'Training is an important part of any dog\'s life, and is important for several reasons. It provides mental stimulation which helps to keep your dog happy, and if combined with morning exercise your dog will be mentally and physically tired at the end and far more likely to sleep during the day.'),
(7, 'news', 'Puppy development and Training classes', 'Puppy training should start as early as 8 weeks old. A good puppy training class helps your pup become socialized and develop in an early stage. The sooner you introduce good habits, the better it will be for both of you as your puppy begin to understand basic commands and gets to grips with your house rules.'),
(8, 'news', 'How to Train a Dog?', 'Are you ready to start training your dog or puppy? Proper training and socialization are among your dog\'s basic needs. It\'s important to start training your dog as soon as possible.');

-- --------------------------------------------------------

--
-- Table structure for table `training_newpost`
--

CREATE TABLE `training_newpost` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `cate` varchar(500) NOT NULL,
  `subcategory` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_newpost`
--

INSERT INTO `training_newpost` (`id`, `head`, `content`, `cate`, `subcategory`, `link`, `image`, `date`) VALUES
(12, 'test 1', '', 'video', 'Select sub Category', 'test-1', 'https://www.youtube.com/embed/vVUDagpoX0w', '2021-06-01 00:00:00'),
(13, 'Reasons to train a dog', '<p>&nbsp;</p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">For their own safety: A trained dog will easily listen and understand your commands as compared to untrained one.&nbsp;</span></span></span><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">For example, in some situation dogs are more likely to run in front of a car or to slip out the front door before you&rsquo;re ready to leave. In this you can control your dog with voice commands. </span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Helps a dog to be sociable: As your dog learns to respect and behave properly in social boundaries, this will help other dogs and people to be more comfortable and at ease. </span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Easy Management: Basic commands like sit, drop, stay helps you to manage your dog more easily. Better management means they can be easily controlled and become a part of the family and events more. </span></span></span></li>\r\n</ul>\r\n', 'news', 'Importance of Dog Training', 'Reasons-to-train-a-dog', 'vbv.jpg', '2021-06-07 06:30:44'),
(15, 'Puppy Training Methods', '<ul style=\"list-style-type:circle\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Teach a name to your puppy</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Introduce with the commands like sit. No jumping, down, come </span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Teach your puppy to walk on a lead or collar</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Socialize your pup with the world</span></span></span></span></li>\r\n</ul>\r\n', 'news', 'Puppy development and Training classes', 'Puppy-Training-Methods', 'tamu_obedience_header_0.jpg', '2021-06-07 06:57:33'),
(16, 'Steps to train a Dog', '<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><strong><span style=\"font-size:14.0pt\">1. Give your dog a practical name</span></strong><span style=\"font-size:14.0pt\">: Naming a dog is the most important part as this makes easy for you and your dog to listen to your commands during training. The name should also have clear, hard sounds the dog can recognize.</span></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"font-size:14pt\">2.&nbsp;<strong>Schedule enough time for training</strong>: Dogs training is very important for the owner and dog itself so one should have appropriate time for that. Start with the basic 5 minutes session and end up with at least 20 minutes.</span></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"font-size:14.0pt\">3.</span><strong><span style=\"font-size:14.0pt\">Be patient with your Dog</span></strong><span style=\"font-size:14.0pt\">: Its very important to be calm and polite with your dog while training. Treat your dog as a new born child of yours who have no knowledge related to world.</span></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><strong><span style=\"font-size:14.0pt\">4. Use needful tools for training</span></strong><span style=\"font-size:14.0pt\">: Training a dog with the help of certain equipment will make a better experience for you and your dog and enhance your dog training program. Some tools are like Stick, Dog treats, Clicker, Dog Collar, Toys etc. </span></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><strong><span style=\"font-size:14.0pt\">5. Give rewards while training: </span></strong><span style=\"font-size:14.0pt\">Dogs are quick learner so treat them with immediate rewards during training program. This will make them more excited towards it. </span></span></span></p>\r\n\r\n<p style=\"margin-left:48px\">&nbsp;</p>\r\n', 'news', 'How to Train a Dog?', 'Steps-to-train-a-Dog', 'beagle-with-treat-royalty-free-image-172977570-1559147501.jpg', '2021-06-07 07:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `address`, `number`) VALUES
(2, 'HIMANSHU GOYAL', 'himanshugoyal1591998@gmail.com', '1234', 'gjhgjghjgjh', '67868768'),
(4, 'qNWsePkvrgVKw', 'danielhunter9710@gmail.com', 'fFT7gRXJlume!', 'hfldUpHJkFm', '7130235183');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `number` varchar(15) NOT NULL,
  `state` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `addrs` varchar(2000) NOT NULL,
  `zip` varchar(500) NOT NULL,
  `age` varchar(500) NOT NULL,
  `work` varchar(500) NOT NULL,
  `message` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `email`, `number`, `state`, `city`, `addrs`, `zip`, `age`, `work`, `message`) VALUES
(4, 'HIMANSHU GOYAL', 'HIMANSHUGOYAL1011@GMAIL.COM', '08385902167', 'Rajasthan', 'ALWAR', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', '301001', '18', 'everything', 'cgfgbfdgfd');

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT 0,
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2021-04-14 19:34:03', '2021-04-14 19:34:03', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `link_rating` int(11) NOT NULL DEFAULT 0,
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/dogbazar/blog', 'yes'),
(2, 'home', 'http://localhost/dogbazar/blog', 'yes'),
(3, 'blogname', 'Blogs', 'yes'),
(4, 'blogdescription', 'Just another WordPress site', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'himanshugoyal1011@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'F j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:79:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:0:{}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'twentytwentyone', 'yes'),
(41, 'stylesheet', 'twentytwentyone', 'yes'),
(42, 'comment_registration', '0', 'yes'),
(43, 'html_type', 'text/html', 'yes'),
(44, 'use_trackback', '0', 'yes'),
(45, 'default_role', 'subscriber', 'yes'),
(46, 'db_version', '49752', 'yes'),
(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
(48, 'upload_path', '', 'yes'),
(49, 'blog_public', '1', 'yes'),
(50, 'default_link_category', '2', 'yes'),
(51, 'show_on_front', 'posts', 'yes'),
(52, 'tag_base', '', 'yes'),
(53, 'show_avatars', '1', 'yes'),
(54, 'avatar_rating', 'G', 'yes'),
(55, 'upload_url_path', '', 'yes'),
(56, 'thumbnail_size_w', '150', 'yes'),
(57, 'thumbnail_size_h', '150', 'yes'),
(58, 'thumbnail_crop', '1', 'yes'),
(59, 'medium_size_w', '300', 'yes'),
(60, 'medium_size_h', '300', 'yes'),
(61, 'avatar_default', 'mystery', 'yes'),
(62, 'large_size_w', '1024', 'yes'),
(63, 'large_size_h', '1024', 'yes'),
(64, 'image_default_link_type', 'none', 'yes'),
(65, 'image_default_size', '', 'yes'),
(66, 'image_default_align', '', 'yes'),
(67, 'close_comments_for_old_posts', '0', 'yes'),
(68, 'close_comments_days_old', '14', 'yes'),
(69, 'thread_comments', '1', 'yes'),
(70, 'thread_comments_depth', '5', 'yes'),
(71, 'page_comments', '0', 'yes'),
(72, 'comments_per_page', '50', 'yes'),
(73, 'default_comments_page', 'newest', 'yes'),
(74, 'comment_order', 'asc', 'yes'),
(75, 'sticky_posts', 'a:0:{}', 'yes'),
(76, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(77, 'widget_text', 'a:0:{}', 'yes'),
(78, 'widget_rss', 'a:0:{}', 'yes'),
(79, 'uninstall_plugins', 'a:0:{}', 'no'),
(80, 'timezone_string', '', 'yes'),
(81, 'page_for_posts', '0', 'yes'),
(82, 'page_on_front', '0', 'yes'),
(83, 'default_post_format', '0', 'yes'),
(84, 'link_manager_enabled', '0', 'yes'),
(85, 'finished_splitting_shared_terms', '1', 'yes'),
(86, 'site_icon', '0', 'yes'),
(87, 'medium_large_size_w', '768', 'yes'),
(88, 'medium_large_size_h', '0', 'yes'),
(89, 'wp_page_for_privacy_policy', '3', 'yes'),
(90, 'show_comments_cookies_opt_in', '1', 'yes'),
(91, 'admin_email_lifespan', '1633980842', 'yes'),
(92, 'disallowed_keys', '', 'no'),
(93, 'comment_previously_approved', '1', 'yes'),
(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(95, 'auto_update_core_dev', 'enabled', 'yes'),
(96, 'auto_update_core_minor', 'enabled', 'yes'),
(97, 'auto_update_core_major', 'enabled', 'yes'),
(98, 'initial_db_version', '49752', 'yes'),
(99, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(100, 'fresh_site', '1', 'yes'),
(101, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'sidebars_widgets', 'a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";}s:9:\"sidebar-2\";a:3:{i:0;s:10:\"archives-2\";i:1;s:12:\"categories-2\";i:2;s:6:\"meta-2\";}s:13:\"array_version\";i:3;}', 'yes'),
(107, 'cron', 'a:6:{i:1622910845;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1622921645;a:5:{s:18:\"wp_https_detection\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1622921684;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1622921687;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1623353645;a:1:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}s:7:\"version\";i:2;}', 'yes'),
(108, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(114, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(115, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(116, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(118, 'recovery_keys', 'a:0:{}', 'yes'),
(119, 'theme_mods_twentytwentyone', 'a:1:{s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(120, 'https_detection_errors', 'a:1:{s:23:\"ssl_verification_failed\";a:1:{i:0;s:24:\"SSL verification failed.\";}}', 'yes'),
(121, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:2:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:7:\"upgrade\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.7.2.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.7.2.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.7.2-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.7.2-new-bundled.zip\";s:7:\"partial\";s:69:\"https://downloads.wordpress.org/release/wordpress-5.7.2-partial-0.zip\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"5.7.2\";s:7:\"version\";s:5:\"5.7.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.6\";s:15:\"partial_version\";s:3:\"5.7\";}i:1;O:8:\"stdClass\":11:{s:8:\"response\";s:10:\"autoupdate\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.7.2.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.7.2.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.7.2-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.7.2-new-bundled.zip\";s:7:\"partial\";s:69:\"https://downloads.wordpress.org/release/wordpress-5.7.2-partial-0.zip\";s:8:\"rollback\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.7.2-rollback-0.zip\";}s:7:\"current\";s:5:\"5.7.2\";s:7:\"version\";s:5:\"5.7.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.6\";s:15:\"partial_version\";s:3:\"5.7\";s:9:\"new_files\";s:0:\"\";}}s:12:\"last_checked\";i:1622909451;s:15:\"version_checked\";s:3:\"5.7\";s:12:\"translations\";a:0:{}}', 'no'),
(123, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1622909454;s:7:\"checked\";a:2:{s:19:\"akismet/akismet.php\";s:5:\"4.1.9\";s:9:\"hello.php\";s:5:\"1.7.2\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:2:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.1.9\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.1.9.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}}s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:5:\"1.7.2\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855\";s:2:\"1x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:66:\"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no'),
(138, 'can_compress_scripts', '1', 'no'),
(147, 'finished_updating_comment_type', '1', 'yes'),
(152, '_transient_health-check-site-status-result', '{\"good\":13,\"recommended\":5,\"critical\":2}', 'yes'),
(194, '_site_transient_timeout_theme_roots', '1622911252', 'no'),
(195, '_site_transient_theme_roots', 'a:3:{s:14:\"twentynineteen\";s:7:\"/themes\";s:12:\"twentytwenty\";s:7:\"/themes\";s:15:\"twentytwentyone\";s:7:\"/themes\";}', 'no'),
(196, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1622909454;s:7:\"checked\";a:3:{s:14:\"twentynineteen\";s:3:\"2.0\";s:12:\"twentytwenty\";s:3:\"1.7\";s:15:\"twentytwentyone\";s:3:\"1.2\";}s:8:\"response\";a:1:{s:15:\"twentytwentyone\";a:6:{s:5:\"theme\";s:15:\"twentytwentyone\";s:11:\"new_version\";s:3:\"1.3\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentytwentyone/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentytwentyone.1.3.zip\";s:8:\"requires\";s:3:\"5.3\";s:12:\"requires_php\";s:3:\"5.6\";}}s:9:\"no_update\";a:2:{s:14:\"twentynineteen\";a:6:{s:5:\"theme\";s:14:\"twentynineteen\";s:11:\"new_version\";s:3:\"2.0\";s:3:\"url\";s:44:\"https://wordpress.org/themes/twentynineteen/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/theme/twentynineteen.2.0.zip\";s:8:\"requires\";s:5:\"4.9.6\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:12:\"twentytwenty\";a:6:{s:5:\"theme\";s:12:\"twentytwenty\";s:11:\"new_version\";s:3:\"1.7\";s:3:\"url\";s:42:\"https://wordpress.org/themes/twentytwenty/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/theme/twentytwenty.1.7.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}}s:12:\"translations\";a:0:{}}', 'no'),
(197, '_site_transient_timeout_php_check_744549330ad044a5e94138c3c20d7f77', '1623514256', 'no'),
(198, '_site_transient_php_check_744549330ad044a5e94138c3c20d7f77', 'a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2021-04-14 19:34:03', '2021-04-14 19:34:03', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2021-04-14 19:34:03', '2021-04-14 19:34:03', '', 0, 'http://localhost/dogbazar/blog/?p=1', 0, 'post', '', 1),
(2, 1, '2021-04-14 19:34:03', '2021-04-14 19:34:03', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/dogbazar/blog/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Sample Page', '', 'publish', 'closed', 'open', '', 'sample-page', '', '', '2021-04-14 19:34:03', '2021-04-14 19:34:03', '', 0, 'http://localhost/dogbazar/blog/?page_id=2', 0, 'page', '', 0),
(3, 1, '2021-04-14 19:34:03', '2021-04-14 19:34:03', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/dogbazar/blog.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Comments</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Media</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Embedded content from other websites</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph -->', 'Privacy Policy', '', 'draft', 'closed', 'open', '', 'privacy-policy', '', '', '2021-04-14 19:34:03', '2021-04-14 19:34:03', '', 0, 'http://localhost/dogbazar/blog/?page_id=3', 0, 'page', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'Himanshuji'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', ''),
(15, 1, 'show_welcome_panel', '1'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '4');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'Himanshuji', '$P$B9yP9COmH.ptGIAhPQDSD3T3nv1IT30', 'himanshuji', 'himanshugoyal1011@gmail.com', 'http://localhost/dogbazar/blog', '2021-04-14 19:34:03', '', 0, 'Himanshuji');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoptedpet`
--
ALTER TABLE `adoptedpet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `behave_cate`
--
ALTER TABLE `behave_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `behave_newpost`
--
ALTER TABLE `behave_newpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breed_newpost`
--
ALTER TABLE `breed_newpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchies`
--
ALTER TABLE `franchies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary_cate`
--
ALTER TABLE `gallary_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getting_cate`
--
ALTER TABLE `getting_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getting_newpost`
--
ALTER TABLE `getting_newpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giftgiving`
--
ALTER TABLE `giftgiving`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `givingup_cate`
--
ALTER TABLE `givingup_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `givingup_newpost`
--
ALTER TABLE `givingup_newpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grooming_cate`
--
ALTER TABLE `grooming_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grooming_newpost`
--
ALTER TABLE `grooming_newpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houdinv_staff_management`
--
ALTER TABLE `houdinv_staff_management`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `listdog`
--
ALTER TABLE `listdog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_cate`
--
ALTER TABLE `news_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_newpost`
--
ALTER TABLE `news_newpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutrition_cate`
--
ALTER TABLE `nutrition_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutrition_newpost`
--
ALTER TABLE `nutrition_newpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petcare_newpost`
--
ALTER TABLE `petcare_newpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petmemo`
--
ALTER TABLE `petmemo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problems_cate`
--
ALTER TABLE `problems_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problems_newpost`
--
ALTER TABLE `problems_newpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsoranimal`
--
ALTER TABLE `sponsoranimal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surrender`
--
ALTER TABLE `surrender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_cate`
--
ALTER TABLE `training_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_newpost`
--
ALTER TABLE `training_newpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoptedpet`
--
ALTER TABLE `adoptedpet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `behave_cate`
--
ALTER TABLE `behave_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `behave_newpost`
--
ALTER TABLE `behave_newpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `breed_newpost`
--
ALTER TABLE `breed_newpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `franchies`
--
ALTER TABLE `franchies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `gallary_cate`
--
ALTER TABLE `gallary_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `getting_cate`
--
ALTER TABLE `getting_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `getting_newpost`
--
ALTER TABLE `getting_newpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `giftgiving`
--
ALTER TABLE `giftgiving`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `givingup_cate`
--
ALTER TABLE `givingup_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `givingup_newpost`
--
ALTER TABLE `givingup_newpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `grooming_cate`
--
ALTER TABLE `grooming_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `grooming_newpost`
--
ALTER TABLE `grooming_newpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `houdinv_staff_management`
--
ALTER TABLE `houdinv_staff_management`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `listdog`
--
ALTER TABLE `listdog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news_cate`
--
ALTER TABLE `news_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_newpost`
--
ALTER TABLE `news_newpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nutrition_cate`
--
ALTER TABLE `nutrition_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nutrition_newpost`
--
ALTER TABLE `nutrition_newpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `petcare_newpost`
--
ALTER TABLE `petcare_newpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `petmemo`
--
ALTER TABLE `petmemo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `problems_cate`
--
ALTER TABLE `problems_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `problems_newpost`
--
ALTER TABLE `problems_newpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sponsoranimal`
--
ALTER TABLE `sponsoranimal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surrender`
--
ALTER TABLE `surrender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `training_cate`
--
ALTER TABLE `training_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `training_newpost`
--
ALTER TABLE `training_newpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
