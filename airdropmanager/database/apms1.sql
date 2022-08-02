-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 29, 2022 at 09:28 AM
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
-- Database: `apms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(11) NOT NULL,
  `SHORT_INFO` varchar(1000) NOT NULL,
  `emails` varchar(200) NOT NULL,
  `telegram_link` varchar(200) NOT NULL,
  `twitter_link` varchar(200) NOT NULL,
  `fb_link` varchar(200) NOT NULL,
  `BTC` varchar(200) NOT NULL,
  `ETH` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `SHORT_INFO`, `emails`, `telegram_link`, `twitter_link`, `fb_link`, `BTC`, `ETH`) VALUES
(1, 'Airdrops.io is a free aggregator for crypto airdrops. We are not involved in the published airdrops in any way. Although we try to list only legit projects we can not be responsible for any issues or loss due to scam. So make sure you never share your private to be safe!', 'yuvaraj@gmail.com', '@yuvaraj', '@yuvaraj', 'facebook/yuvaraj', 'snsdhsgdhsgdh', 'sdjsyduysudysyudy');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(200) NOT NULL,
  `pswd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `pswd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `airdrops`
--

CREATE TABLE `airdrops` (
  `ID` int(11) NOT NULL,
  `TOKEN_SYMBOL` varchar(250) NOT NULL,
  `TOKEN_NAME` varchar(200) NOT NULL,
  `VALUE` varchar(200) NOT NULL,
  `ENDING_DATE` date NOT NULL,
  `JOINED_DATE` date NOT NULL,
  `distribution_date` date NOT NULL,
  `MAX_PARTICIPANTS` varchar(100) NOT NULL,
  `TOTAL_SUPLLY` varchar(100) NOT NULL,
  `WEB_LINK` varchar(200) NOT NULL,
  `TELEGRAM` varchar(200) NOT NULL,
  `FB_LINK` varchar(200) NOT NULL,
  `TWITTER_LINK` varchar(200) NOT NULL,
  `ABOUT` varchar(1000) NOT NULL,
  `CONTRACT_ADDRESS` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airdrops`
--

INSERT INTO `airdrops` (`ID`, `TOKEN_SYMBOL`, `TOKEN_NAME`, `VALUE`, `ENDING_DATE`, `JOINED_DATE`, `distribution_date`, `MAX_PARTICIPANTS`, `TOTAL_SUPLLY`, `WEB_LINK`, `TELEGRAM`, `FB_LINK`, `TWITTER_LINK`, `ABOUT`, `CONTRACT_ADDRESS`) VALUES
(3, 'RGEN', 'PARAGEN', '100', '2022-03-31', '2022-03-30', '2022-04-09', '100', '10000', 'https://t.me/paragenio', 'https://t.me/paragenann', 'https://paragen.medium.com/', 'https://twitter.com/paragenio', '🔵 8,500 valid participants will be randomly rewarded by the project team in addition to the top 100 referrers. The distribution date announced by the project is on April 1st, 2022.', ''),
(4, 'UNITY', 'Unityswap', '200', '2022-03-31', '2022-03-24', '2022-04-08', '200', '300', 'https://t.me/unityswapdex', 'https://t.me/unityswapdexannouncements', 'https://www.instagram.com/unityswapdex/', 'https://twitter.com/UnityswapDEX', '2,000 valid participants will be randomly rewarded by the project team in addition to the top 30 referrers. The distribution date announced by the project is on April 15th, 2022.', ''),
(5, 'LCT', 'LastChance', '200', '2022-03-31', '2022-03-23', '2022-04-06', '200', '300', 'https://t.me/LastChance_group', 'https://t.me/LastChanceAirdropBot', 'https://t.me/LastChance_channel', 'https://twitter.com/LastChance_auc', ' 5,000 valid participants will be randomly rewarded by the project team in addition to the top 20 referrers. The distribution date announced by the project is at the end of March, 2022.', ''),
(6, 'HOGS', ' Hoglympics', '200', '2022-03-31', '2022-03-25', '2022-04-02', '200', '300', 'https://t.me/hoglympics', 'https://t.me/Hoglympics_AirdropBot', 'https://t.me/hogsannouncements', 'https://twitter.com/hoglympics', '2,000 valid participants will be randomly rewarded by the project team in addition to the top 50 referrers. The distribution date announced by the project is one week after the TGE.', ''),
(7, 'XPLUS', 'XPLUS', '200', '2022-03-31', '2022-03-26', '2022-04-04', '300', '300', 'https://t.me/xplusio', 'https://t.me/XPLUSioAirdropBot', 'https://t.me/xplusofficial', 'https://twitter.com/xplusio', '2,500 valid participants will be randomly rewarded by the project team in addition to the top 25 referrers. The distribution date announced by the project is at the end of March, 2022.', ''),
(8, 'CNT', 'Crinet', '200', '2022-03-31', '2022-03-25', '2022-04-01', '200', '300', 'https://t.me/crinetgroup', 'https://t.me/CrinetAirdropBot', 'https://t.me/crinetchannel', 'http://twitter.com/crinet_io', '4,000 valid participants will be randomly rewarded by the project team in addition to the top 200 referrers. The distribution date announced by the project is on May 30th, 2022.', ''),
(9, 'MEGAN', ' Megan Swap\r\n', '200', '2022-03-31', '2022-03-24', '2022-04-02', '300', '200', 'https://t.me/MeganSwap1', 'https://t.me/MeganSwapNewroundAirdropBot', 'https://t.me/MeganSwap2', 'https://twitter.com/MeganSwap1', ' 2,000 valid participants will be randomly rewarded by the project team in addition to the top 10 referrers. The distribution date announced by the project is June 5th, 2022.', ''),
(10, 'LST', 'Lambswap', '200', '2022-03-31', '2022-03-25', '2022-04-06', '300', '200', 'https://t.me/lambswap', 'https://t.me/LambswapAirdropBot', 'https://www.facebook.com/LambSwap.org', 'https://twitter.com/lambswap_org', '🔵 5,000 valid participants will be randomly rewarded in addition to the top 50 referrers on the March 15th, 2022.\r\n\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `quest` varchar(1000) NOT NULL,
  `ans` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`ID`, `quest`, `ans`) VALUES
(1, 'How do I copy a link to a retweet?', 'In order to copy the link to get credit for a shared Twitter post, you must add a comment and not simply retweet the post. This is done by clicking the retweet icon, and then typing a comment in the “Add a comment…” box. Once you are done, click Retweet and go to your profile. Find the tweet and click on the upside-down carrot (^) for the menu options. Click on “Copy link to Tweet.” Notice that this link will take you to a page dedicated to your specific retweet, and not the original tweet that you are reposting. If you simply retweet a post without a comment and click “Copy link to Tweet,” it will link back to the original, and you will not receive credit for your share.'),
(2, 'What are airdrops & bounties', 'Many crypto companies distribute free coins to their communities to increase their project’s visibility, increase the circulating supply and stimulate trade. These free distributions are commonly known as “airdrops.”'),
(3, 'How do i claim airdrops?', 'The claim process differs from project to project. Some “holder drops” will drop tokens automatically into the wallets of users who own a specific coin. Other projects are snapshot- based, and can only be claimed by users who held the required token during the “snapshot,” which is a record of token holders taken at a specific time/block.'),
(4, 'What is an ETH address?', 'An ETH address, also known as an ERC20 address, is the receiving address of an Ethereum wallet. The address starts with “0x” and is followed by a series of 40 random characters. In MyEtherWallet, your receiving address is the “Account Address.” In MetaMask, your ETH address can be found by clicking the menu icon (•••) and clicking “Copy Address to clipboard.”'),
(5, 'I can`t see my tokens in my wallet.Where are they?', 'Many ETH wallets will require you to add custom tokens in order to view the balance. To view your token balances quickly, simply type your ETH address into Ethplorer. All of your available custom tokens will be shown under “Token Balances.” To add a custom token to your wallets such as MetaMask or MyEtherWallet, you will need to find the Contract Address of each token and the decimals of precision, which can be found by searching each token’s ticker on Etherscan.\r\n\r\n'),
(6, 'How do I set a username on Telegram', 'You can easily set a Telegram @username by going to your Settings -> Username and typing an available name. This will be a common identifier in airdrop and bounty campaigns, so make sure you set one! Your username is NOT your display name!'),
(7, 'How do I copy a Bitcointalk comment?', 'In order to copy the link of one of your Bitcointalk comments, click on your Profile, scroll down and choose “Show the last posts of this person.” Find the comment you are looking for and click on the part of the title that looks like: “Re: Thread Title.” Copy the URL shown at the top. There should be an identifier of your specific message in the URL which looks like “#msg35745411.”');

-- --------------------------------------------------------

--
-- Table structure for table `joined_in`
--

CREATE TABLE `joined_in` (
  `ID` int(11) NOT NULL,
  `TOKEN_SYMBOL` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `STATUS` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `joined_in`
--
DELIMITER $$
CREATE TRIGGER `timetopremium` AFTER INSERT ON `joined_in` FOR EACH ROW INSERT INTO premium VALUES(NULL,NEW.EMAIL,"apllied for airdrop")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `PASWWORD` varchar(200) NOT NULL,
  `TELEGRAM` varchar(200) NOT NULL,
  `TWITTER` varchar(200) NOT NULL,
  `FACEBOOK` varchar(200) NOT NULL,
  `MOBILE_NO` varchar(10) NOT NULL,
  `BSC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`ID`, `EMAIL`, `NAME`, `PASWWORD`, `TELEGRAM`, `TWITTER`, `FACEBOOK`, `MOBILE_NO`, `BSC`) VALUES
(2, '', 'VINAYAK', '', '', '', '', '', ''),
(3, 'user@gmail.com', 'user333', 'user12', '@user', '@user', 'smjhdgfkjdf', '1234567890', 'sdfsdf'),
(4, 'user12@gmail.com', 'user332', 'user33', 'sdfsdf', 'sdfsdfsdf', 'sdfsdf', '1122334455', 'ssdgdfd');

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE `premium` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `event` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium`
--

INSERT INTO `premium` (`ID`, `EMAIL`, `event`) VALUES
(1, 'user@gmail.com', 'apllied for airdrop');

-- --------------------------------------------------------

--
-- Table structure for table `support_enquiry`
--

CREATE TABLE `support_enquiry` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `MESSAGE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airdrops`
--
ALTER TABLE `airdrops`
  ADD PRIMARY KEY (`ID`,`TOKEN_NAME`),
  ADD UNIQUE KEY `TOKEN_SYMBOL` (`TOKEN_SYMBOL`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `joined_in`
--
ALTER TABLE `joined_in`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EMAIL` (`EMAIL`),
  ADD KEY `TOKEN_SYMBOL` (`TOKEN_SYMBOL`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `support_enquiry`
--
ALTER TABLE `support_enquiry`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airdrops`
--
ALTER TABLE `airdrops`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `joined_in`
--
ALTER TABLE `joined_in`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `premium`
--
ALTER TABLE `premium`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `support_enquiry`
--
ALTER TABLE `support_enquiry`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `joined_in`
--
ALTER TABLE `joined_in`
  ADD CONSTRAINT `joined_in_ibfk_1` FOREIGN KEY (`EMAIL`) REFERENCES `participants` (`EMAIL`),
  ADD CONSTRAINT `joined_in_ibfk_2` FOREIGN KEY (`TOKEN_SYMBOL`) REFERENCES `airdrops` (`TOKEN_SYMBOL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
