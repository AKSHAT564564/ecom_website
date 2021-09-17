-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 01:41 PM
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
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(8, 'Mattresses', 1),
(9, 'smartphones', 1),
(10, 'laptops', 1),
(11, 'pendrives', 1),
(12, 'clothes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(1, 'Vishal', 'vishal@gmail.com', '1234567890', 'Test Query', '2020-01-14 00:00:00'),
(2, 'vishal@gmail.com', '', '1234567890', 'testing', '2020-01-19 07:59:38'),
(3, 'Vishal', 'vishal@gmail.com', '1234567890', 'testing', '2020-01-19 08:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES
(11, 2, 'jgdj', 0, 0, 0, '820791750_image_15.png', 'gjgj', 'gjgj', 'gjgjg', 'gjgj', 'gjgj', 1),
(12, 5, 'fsaf', 0, 0, 0, '802141313_image_15.png', 'sfssf', 'fsfss', 'sfsf', 'sfsfs', 'sfsfs', 1),
(13, 3, 'sfsf', 0, 0, 0, '394164481_image_15.png', 'sfsf', 's', 'sfsf', 'sfsf', 'sfsf', 1),
(17, 8, 'Flash Furniture Capri Comfortable Sleep 12 Inch CertiPUR-US Certified Foam and Pocket Spring Mattress, Queen Mattress in a Box', 9000, 8000, 1, '149252970_matress1.jpg', 'Flash Furniture Capri Comfortable Sleep 12 Inch CertiPUR-US Certified Foam and Pocket Spring Mattress, Queen Mattress in a Box', '•	Fabric\r\n•	MODERN LIVING MADE EASY : Sleep comfortably atop this queen size 12 inch CertiPUR-US Certified foam and pocket spring mattress for peaceful sleeping. Individually wrapped pocket spring coils prevent tossing and turning and reduce motion transfer\r\n•	Motion reducing 10 inch pocket spring coils, high-density foam padding, tight top covering\r\n•	Boxed mattress fully expands in 48-72 hours, designed for platform beds and trundles\r\n•	Modern mattress-in-a-box packaging allows you to carry to your bedroom without much hassle\r\n•	PRODUCT MEASUREMENTS : Overall Size: 60\"W x 80\"D x 12\"H', '', '', '', 1),
(18, 8, 'Queen Mattress, Novilla 10 inch Gel Memory Foam Queen Size Mattress for Cool Sleep & Pressure Relief, Medium Firm Bed Mattresses, Bliss', 9500, 9000, 10, '961008568_matress2.jpg', '•	GET UP WITHOUT ANY PAINS- Novilla queen size mattress with 4 layers all-foam system, the foam mattress not too soft nor too firm for all sleep positions', '•	GET UP WITHOUT ANY PAINS- Novilla queen size mattress with 4 layers all-foam system, the foam mattress not too soft nor too firm for all sleep positions. This medium firm mattress is made of gel memory foam combined with comfort foam, plus high-density foam underneath, which aligns your spine and evenly disperses your body weight to relieve pressure points while you are sleeping.\r\n•	COOLING QUEEN MATTRESS FOR RESTFUL SLEEP- Novilla 10 inch queen size mattress is designed with gel-infused memory foam to keep you cool & stay comfortable all night long. Bamboo fabrics in the mattress surface to enhance 30% breath-ability. The middle foam layer is designed as an airflow channel to increase airflow through all areas of this queen foam mattress.\r\n•	ODORLESS & PLUSH FEEL- Mattresses are made of CertiPUR-US Certified foam, without any harmful off-gassing and substances like formaldehyde, mercury, and other heavy metals. Removable queen bed mattress cover use skin-friendly rayon fabric, heavenly soft to touch. Novilla queen memory foam mattress gives you a healthier and cloud-like experience.\r\n•	QUEEN MATTRESS IN A BOX & FITS ALL BED FRAMES- Such fun to receive a mattress that’s rolled and compressed in a box . Follow the instructions and see how the magic happens. It is easy to set up and fits all kinds of queen bed frames, even on the floor. Mattress is recommended 72 hours for air out and reshape.\r\n•	HASSLE FREE FOR RETURN & REFUND- Mattresses are covered by a 10-year limit and 30-days money-back return policy. With our professional customer care, we help deal with any dissatisfaction problems. You can enjoy this memory foam queen mattress without concerns while you are following your dream', '', '', '', 1),
(19, 8, 'ZINUS 10 Inch Ultima Memory Foam Mattress / Pressure Relieving / CertiPUR-US Certified / Mattress-in-a-Box, Queen', 12000, 11000, 15, '480865294_matress3.jpg', '•	Green Tea-infused Memory Foam With a Soft, Poly Jacquard Cover', '•	Green Tea-infused Memory Foam With a Soft, Poly Jacquard Cover\r\n•	Green Tea-infused Memory Foam With a Soft, Poly Jacquard Cover\r\n•	INSPIRED BY NATURE - Wholesome and natural ingredients, like green tea and moisture-absorbing charcoal work wonders in a mattress! And we’ve designed this one to control odors, maintain freshness, and envelop your shape so you awake restored and refreshed\r\n\r\n\r\n\r\n•	PRESSURE-RELIEVING FOAMS - 3 inches conforming memory foam, 2 inches airflow-enhancing comfort foam, and 5 inches durable, high density base support foam; ideal for stomach sleepers and petite to average-weight sleepers\r\n•	CERTIPUR US CERTIFIED - Highest quality foam is CertiPUR US Certified for durability, performance, and content\r\n•	EXPERTLY PACKAGED - Our technology allows this mattress to be efficiently compressed into one box that’s easily shipped and maneuvered into the bedroom; simply unbox, unroll and this mattress do the rest, expanding to its original shape within 72 hours', '', '', '', 1),
(20, 8, 'Olee Sleep 10 inch Aquarius Memory Foam Mattress - Queen', 7000, 6800, 10, '462126788_matess4.jpg', '•	Perfect Top layer supports bodyweight & maintains body shape for rest in the best condition', '•	Perfect Top layer supports bodyweight & maintains body shape for rest in the best condition\r\n. 1 inch 8 ILD soft memory foam supports body with soft power\r\n•	1 Inch 25 ILD HD foam prevents defection of memory foam\r\n•	1 inch I Gel disperses temperature accumulation to maintain a constant mattress temperature.\r\n•	Dimensions: 80\" L x 60\" W x 10\" H\r\n•	Smartly shipping - Our patented technology allows Our mattresses to be efficiently compressed, rolled and shipped in a box conveniently to your door\r\n•	Note: Mattress needs 48-72 hours to expand fully', '', '', '', 1),
(21, 9, 'OnePlus 8 Glacial Green, 5G Unlocked Android Smartphone U.S Version, 8GB RAM+128GB Storage, 90Hz Fluid Display,Triple Camera, with Alexa Built-in', 60000, 55000, 1, '580045045_phone1.jpg', '•	Super Smooth Display – high resolution with a 90-Hz refresh rate – scrolling, swiping and switching through apps feels easy and effortless', '•	16,6 cm / 6.55” AMOLED Screen – for an impressive multimedia experience, instant touch-response, more speed and a fascinating clarity\r\n•	Ultra Clear Triple Camera - 48MP main camera, 16MP ultra wide angle, 2MP macro and 16MP front camera, Nightscape 2.0, Studio Lightining, Super slow motion up to 460 FPS, RAW image, AI Scene Detection\r\n•	8 GB RAM and 128 GB internal storage for more performance, true speed and larger amounts of data/ High-performance processor Qualcomm Snapdragon 865 with 5G connectivity\r\n•	Power Battery 4300 mAh – Next generation WARP CHARGE 30T technology (ready-to-go in 20 minutes) fast charging / Android 10 operating system\r\n•	OnePlus with Alexa Built-in provides Hands-Free access to Alexa. Simply say “Alexa” to play music make a call control your smart home check the weather and more using just your voice. Stay up to date and accomplish every day tasks, all while on-the-go. Just ask - and Alexa will respond instantly. Download the Alexa app on your OnePlus device to start using Alexa Hands-Free today', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `mobile`, `added_on`) VALUES
(1, 'Vishal Gupta', '', 'vishal@gmail.com', '1234567890', '2020-01-14 00:00:00'),
(2, 'Vishal', 'vishal', 'phpvishal@gmail.com', '12345678980', '2020-01-22 08:33:08'),
(3, 'Vishal', 'vishal', 'phpvishal1@gmail.com', '1234567890', '2020-01-22 08:34:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
