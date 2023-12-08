-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2023 at 01:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `download`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `content`, `timestamp`, `category`) VALUES
(1, 'These iPhone 15, Apple Watch Features Can Actually Make Life Better', 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=2020&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'In this week\'s episode of One More Thing, embedded above, I go over my favorite features announced that seem actually useful to our everyday lives.\r\n\r\nIt seems the Apple Watch Series 9 is making a big leap in solving problems by making Siri a more helpful assistant -- and a new chip lets you more precisely find other gadgets and family members in close range. These features are also in the Apple Watch Ultra 2.\r\n\r\nThe iPhone 15 and iPhone 15 Pro cameras will also save time for photographers in a rush (like parents) by letting users adjust the focus after the photo has been taken. The larger 15 Pro Max will especially be tempting for users capturing moments from the bleachers with the phone\'s new 5x optical zoom. \r\n\r\nBut we\'ll have to wait for the early reviews to come in before we see how these features work in the real world (beyond the polished, prerecorded Apple presentation). I\'m personally eager to learn if the new Apple Watch Double Tap control feature is going to be a flex or a flop. ', '2023-12-05 10:04:37', 'Tech'),
(2, 'These iPhone 13, Apple Watch Features Can Actually Make Life Better', 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=2020&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'In this week\'s episode of One More Thing, embedded above, I go over my favorite features announced that seem actually useful to our everyday lives.\r\n\r\nIt seems the Apple Watch Series 9 is making a big leap in solving problems by making Siri a more helpful assistant -- and a new chip lets you more precisely find other gadgets and family members in close range. These features are also in the Apple Watch Ultra 2.\r\n\r\nThe iPhone 15 and iPhone 15 Pro cameras will also save time for photographers in a rush (like parents) by letting users adjust the focus after the photo has been taken. The larger 15 Pro Max will especially be tempting for users capturing moments from the bleachers with the phone\'s new 5x optical zoom. \r\n\r\nBut we\'ll have to wait for the early reviews to come in before we see how these features work in the real world (beyond the polished, prerecorded Apple presentation). I\'m personally eager to learn if the new Apple Watch Double Tap control feature is going to be a flex or a flop. ', '2023-12-05 10:04:37', 'Tech'),
(3, 'These iPhone 11, Apple Watch Features Can Actually Make Life Better', 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=2020&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'In this week\'s episode of One More Thing, embedded above, I go over my favorite features announced that seem actually useful to our everyday lives.\r\n\r\nIt seems the Apple Watch Series 9 is making a big leap in solving problems by making Siri a more helpful assistant -- and a new chip lets you more precisely find other gadgets and family members in close range. These features are also in the Apple Watch Ultra 2.\r\n\r\nThe iPhone 15 and iPhone 15 Pro cameras will also save time for photographers in a rush (like parents) by letting users adjust the focus after the photo has been taken. The larger 15 Pro Max will especially be tempting for users capturing moments from the bleachers with the phone\'s new 5x optical zoom. \r\n\r\nBut we\'ll have to wait for the early reviews to come in before we see how these features work in the real world (beyond the polished, prerecorded Apple presentation). I\'m personally eager to learn if the new Apple Watch Double Tap control feature is going to be a flex or a flop. ', '2023-12-05 10:04:37', 'Tech'),
(4, 'These iPhone 18, Apple Watch Features Can Actually Make Life Better', 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=2020&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'In this week\'s episode of One More Thing, embedded above, I go over my favorite features announced that seem actually useful to our everyday lives.\r\n\r\nIt seems the Apple Watch Series 9 is making a big leap in solving problems by making Siri a more helpful assistant -- and a new chip lets you more precisely find other gadgets and family members in close range. These features are also in the Apple Watch Ultra 2.\r\n\r\nThe iPhone 15 and iPhone 15 Pro cameras will also save time for photographers in a rush (like parents) by letting users adjust the focus after the photo has been taken. The larger 15 Pro Max will especially be tempting for users capturing moments from the bleachers with the phone\'s new 5x optical zoom. \r\n\r\nBut we\'ll have to wait for the early reviews to come in before we see how these features work in the real world (beyond the polished, prerecorded Apple presentation). I\'m personally eager to learn if the new Apple Watch Double Tap control feature is going to be a flex or a flop. ', '2023-12-05 10:04:37', 'Tech'),
(5, 'These iPhone 1, Apple Watch Features Can Actually Make Life Better', 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=2020&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'In this week\'s episode of One More Thing, embedded above, I go over my favorite features announced that seem actually useful to our everyday lives.\r\n\r\nIt seems the Apple Watch Series 9 is making a big leap in solving problems by making Siri a more helpful assistant -- and a new chip lets you more precisely find other gadgets and family members in close range. These features are also in the Apple Watch Ultra 2.\r\n\r\nThe iPhone 15 and iPhone 15 Pro cameras will also save time for photographers in a rush (like parents) by letting users adjust the focus after the photo has been taken. The larger 15 Pro Max will especially be tempting for users capturing moments from the bleachers with the phone\'s new 5x optical zoom. \r\n\r\nBut we\'ll have to wait for the early reviews to come in before we see how these features work in the real world (beyond the polished, prerecorded Apple presentation). I\'m personally eager to learn if the new Apple Watch Double Tap control feature is going to be a flex or a flop. ', '2023-12-05 10:04:37', 'Tech'),
(6, 'These iPhone 2, Apple Watch Features Can Actually Make Life Better', 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=2020&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'In this week\'s episode of One More Thing, embedded above, I go over my favorite features announced that seem actually useful to our everyday lives.\r\n\r\nIt seems the Apple Watch Series 9 is making a big leap in solving problems by making Siri a more helpful assistant -- and a new chip lets you more precisely find other gadgets and family members in close range. These features are also in the Apple Watch Ultra 2.\r\n\r\nThe iPhone 15 and iPhone 15 Pro cameras will also save time for photographers in a rush (like parents) by letting users adjust the focus after the photo has been taken. The larger 15 Pro Max will especially be tempting for users capturing moments from the bleachers with the phone\'s new 5x optical zoom. \r\n\r\nBut we\'ll have to wait for the early reviews to come in before we see how these features work in the real world (beyond the polished, prerecorded Apple presentation). I\'m personally eager to learn if the new Apple Watch Double Tap control feature is going to be a flex or a flop. ', '2023-12-05 10:04:37', 'Tech'),
(7, 'These iPhone 3, Apple Watch Features Can Actually Make Life Better', 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=2020&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'In this week\'s episode of One More Thing, embedded above, I go over my favorite features announced that seem actually useful to our everyday lives.\r\n\r\nIt seems the Apple Watch Series 9 is making a big leap in solving problems by making Siri a more helpful assistant -- and a new chip lets you more precisely find other gadgets and family members in close range. These features are also in the Apple Watch Ultra 2.\r\n\r\nThe iPhone 15 and iPhone 15 Pro cameras will also save time for photographers in a rush (like parents) by letting users adjust the focus after the photo has been taken. The larger 15 Pro Max will especially be tempting for users capturing moments from the bleachers with the phone\'s new 5x optical zoom. \r\n\r\nBut we\'ll have to wait for the early reviews to come in before we see how these features work in the real world (beyond the polished, prerecorded Apple presentation). I\'m personally eager to learn if the new Apple Watch Double Tap control feature is going to be a flex or a flop. ', '2023-12-05 10:04:37', 'Tech'),
(8, 'These iPhone 4, Apple Watch Features Can Actually Make Life Better', 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=2020&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'In this week\'s episode of One More Thing, embedded above, I go over my favorite features announced that seem actually useful to our everyday lives.\r\n\r\nIt seems the Apple Watch Series 9 is making a big leap in solving problems by making Siri a more helpful assistant -- and a new chip lets you more precisely find other gadgets and family members in close range. These features are also in the Apple Watch Ultra 2.\r\n\r\nThe iPhone 15 and iPhone 15 Pro cameras will also save time for photographers in a rush (like parents) by letting users adjust the focus after the photo has been taken. The larger 15 Pro Max will especially be tempting for users capturing moments from the bleachers with the phone\'s new 5x optical zoom. \r\n\r\nBut we\'ll have to wait for the early reviews to come in before we see how these features work in the real world (beyond the polished, prerecorded Apple presentation). I\'m personally eager to learn if the new Apple Watch Double Tap control feature is going to be a flex or a flop. ', '2023-12-05 10:04:37', 'Tech'),
(9, 'These iPhone 5, Apple Watch Features Can Actually Make Life Better', 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=2020&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'In this week\'s episode of One More Thing, embedded above, I go over my favorite features announced that seem actually useful to our everyday lives.\r\n\r\nIt seems the Apple Watch Series 9 is making a big leap in solving problems by making Siri a more helpful assistant -- and a new chip lets you more precisely find other gadgets and family members in close range. These features are also in the Apple Watch Ultra 2.\r\n\r\nThe iPhone 15 and iPhone 15 Pro cameras will also save time for photographers in a rush (like parents) by letting users adjust the focus after the photo has been taken. The larger 15 Pro Max will especially be tempting for users capturing moments from the bleachers with the phone\'s new 5x optical zoom. \r\n\r\nBut we\'ll have to wait for the early reviews to come in before we see how these features work in the real world (beyond the polished, prerecorded Apple presentation). I\'m personally eager to learn if the new Apple Watch Double Tap control feature is going to be a flex or a flop. ', '2023-12-05 10:04:37', 'Tech'),
(10, 'These iPhone 8, Apple Watch Features Can Actually Make Life Better', 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?q=80&w=2020&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'In this week\'s episode of One More Thing, embedded above, I go over my favorite features announced that seem actually useful to our everyday lives.\r\n\r\nIt seems the Apple Watch Series 9 is making a big leap in solving problems by making Siri a more helpful assistant -- and a new chip lets you more precisely find other gadgets and family members in close range. These features are also in the Apple Watch Ultra 2.\r\n\r\nThe iPhone 15 and iPhone 15 Pro cameras will also save time for photographers in a rush (like parents) by letting users adjust the focus after the photo has been taken. The larger 15 Pro Max will especially be tempting for users capturing moments from the bleachers with the phone\'s new 5x optical zoom. \r\n\r\nBut we\'ll have to wait for the early reviews to come in before we see how these features work in the real world (beyond the polished, prerecorded Apple presentation). I\'m personally eager to learn if the new Apple Watch Double Tap control feature is going to be a flex or a flop. ', '2023-12-05 10:04:37', 'Tech'),
(17, 'Pellentesque a consectetur velit, ac molestie ipsum. Donec sodales, massa et auctor.', 'https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80', '        <p class=\"pb-6\">Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an. She projection advantages resolution son indulgence. Part sure on no long life am at ever. In songs above he as drawn to. Gay was outlived peculiar rendered led six.</p>\r\n<p class=\"pb-6\">Difficulty on insensible reasonable in. From as went he they. Preference themselves me as thoroughly partiality considered on in estimating. Middletons acceptance discovered projecting so is so or. In or attachment inquietude remarkably comparison at an. Is surrounded prosperous stimulated am me discretion expression. But truth being state can she china widow. Occasional preference fat remarkably now projecting uncommonly dissimilar. Sentiments projection particular companions interested do at my delightful. Listening newspaper in advantage frankness to concluded unwilling.</p>\r\n<p class=\"pb-6\">Adieus except say barton put feebly favour him. Entreaties unpleasant sufficient few pianoforte discovered uncommonly ask. Morning cousins amongst in mr weather do neither. Warmth object matter course active law spring six. Pursuit showing tedious unknown winding see had man add. And park eyes too more him. Simple excuse active had son wholly coming number add. Though all excuse ladies rather regard assure yet. If feelings so prospect no as raptures quitting.</p>\r\n<div class=\"border-l-4 border-gray-500 pl-4 mb-6 italic rounded\">Sportsman do offending supported extremity breakfast by listening. Decisively advantages nor expression unpleasing she led met. Estate was tended ten boy nearer seemed. As so seeing latter he should thirty whence. Steepest speaking up attended it as. Made neat an on be gave show snug tore.</div>\r\n<p class=\"pb-6\">Exquisite cordially mr happiness of neglected distrusts. Boisterous impossible unaffected he me everything. Is fine loud deal an rent open give. Find upon and sent spot song son eyes. Do endeavor he differed carriage is learning my graceful. Feel plan know is he like on pure. See burst found sir met think hopes are marry among. Delightful remarkably new assistance saw literature mrs favourable.</p>\r\n<h2 class=\"text-2xl text-gray-800 font-semibold mb-4 mt-4\">Uneasy barton seeing remark happen his has</h2>\r\n<p class=\"pb-6\">Guest it he tears aware as. Make my no cold of need. He been past in by my hard. Warmly thrown oh he common future. Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize interested simplicity at do projecting increasing terminated. As edward settle limits at in.</p>\r\n<p class=\"pb-6\">Dashwood contempt on mr unlocked resolved provided of of. Stanhill wondered it it welcomed oh. Hundred no prudent he however smiling at an offence. If earnestly extremity he he propriety something admitting convinced ye. Pleasant in to although as if differed horrible. Mirth his quick its set front enjoy hoped had there. Who connection imprudence middletons too but increasing celebrated principles joy. Herself too improve gay winding ask expense are compact. New all paid few hard pure she.</p>\r\n<p class=\"pb-6\">Breakfast agreeable incommode departure it an. By ignorant at on wondered relation. Enough at tastes really so cousin am of. Extensive therefore supported by extremity of contented. Is pursuit compact demesne invited elderly be. View him she roof tell her case has sigh. Moreover is possible he admitted sociable concerns. By in cold no less been sent hard hill.</p>\r\n<p class=\"pb-6\">Detract yet delight written farther his general. If in so bred at dare rose lose good. Feel and make two real miss use easy. Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant in in insensible favourable. Latter remark hunted enough vulgar say man. Sitting hearted on it without me.</p>', '2023-12-08 06:29:47', 'News'),
(18, 'Pellentesque a consectetur velit, ac molestie ipsum. Donec sodales, massa et auctor.', 'https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80', '        <p class=\"pb-6\">Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an. She projection advantages resolution son indulgence. Part sure on no long life am at ever. In songs above he as drawn to. Gay was outlived peculiar rendered led six.</p>\r\n<p class=\"pb-6\">Difficulty on insensible reasonable in. From as went he they. Preference themselves me as thoroughly partiality considered on in estimating. Middletons acceptance discovered projecting so is so or. In or attachment inquietude remarkably comparison at an. Is surrounded prosperous stimulated am me discretion expression. But truth being state can she china widow. Occasional preference fat remarkably now projecting uncommonly dissimilar. Sentiments projection particular companions interested do at my delightful. Listening newspaper in advantage frankness to concluded unwilling.</p>\r\n<p class=\"pb-6\">Adieus except say barton put feebly favour him. Entreaties unpleasant sufficient few pianoforte discovered uncommonly ask. Morning cousins amongst in mr weather do neither. Warmth object matter course active law spring six. Pursuit showing tedious unknown winding see had man add. And park eyes too more him. Simple excuse active had son wholly coming number add. Though all excuse ladies rather regard assure yet. If feelings so prospect no as raptures quitting.</p>\r\n<div class=\"border-l-4 border-gray-500 pl-4 mb-6 italic rounded\">Sportsman do offending supported extremity breakfast by listening. Decisively advantages nor expression unpleasing she led met. Estate was tended ten boy nearer seemed. As so seeing latter he should thirty whence. Steepest speaking up attended it as. Made neat an on be gave show snug tore.</div>\r\n<p class=\"pb-6\">Exquisite cordially mr happiness of neglected distrusts. Boisterous impossible unaffected he me everything. Is fine loud deal an rent open give. Find upon and sent spot song son eyes. Do endeavor he differed carriage is learning my graceful. Feel plan know is he like on pure. See burst found sir met think hopes are marry among. Delightful remarkably new assistance saw literature mrs favourable.</p>\r\n<h2 class=\"text-2xl text-gray-800 font-semibold mb-4 mt-4\">Uneasy barton seeing remark happen his has</h2>\r\n<p class=\"pb-6\">Guest it he tears aware as. Make my no cold of need. He been past in by my hard. Warmly thrown oh he common future. Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize interested simplicity at do projecting increasing terminated. As edward settle limits at in.</p>\r\n<p class=\"pb-6\">Dashwood contempt on mr unlocked resolved provided of of. Stanhill wondered it it welcomed oh. Hundred no prudent he however smiling at an offence. If earnestly extremity he he propriety something admitting convinced ye. Pleasant in to although as if differed horrible. Mirth his quick its set front enjoy hoped had there. Who connection imprudence middletons too but increasing celebrated principles joy. Herself too improve gay winding ask expense are compact. New all paid few hard pure she.</p>\r\n<p class=\"pb-6\">Breakfast agreeable incommode departure it an. By ignorant at on wondered relation. Enough at tastes really so cousin am of. Extensive therefore supported by extremity of contented. Is pursuit compact demesne invited elderly be. View him she roof tell her case has sigh. Moreover is possible he admitted sociable concerns. By in cold no less been sent hard hill.</p>\r\n<p class=\"pb-6\">Detract yet delight written farther his general. If in so bred at dare rose lose good. Feel and make two real miss use easy. Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant in in insensible favourable. Latter remark hunted enough vulgar say man. Sitting hearted on it without me.</p>', '2023-12-08 06:31:03', 'News');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `relation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `title`, `relation`) VALUES
(1, 'Window', 0),
(2, 'Mac', 0),
(3, 'Ios', 0),
(4, 'Android', 0);

-- --------------------------------------------------------

--
-- Table structure for table `softdata`
--

CREATE TABLE `softdata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `company` varchar(255) NOT NULL,
  `free` varchar(255) NOT NULL,
  `specs` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `downloadurl` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `softdata`
--

INSERT INTO `softdata` (`id`, `name`, `logo`, `company`, `free`, `specs`, `description`, `downloadurl`, `category`) VALUES
(1, 'Google Chrome for Windows', 'https://www.google.com/chrome/static/images/chrome-logo-m100.svg', 'Google Inc.', 'Free', 'Google Chrome is known for its speed, simplicity, and security. It supports a wide range of extensions and has features like syncing bookmarks, history, and settings across devices', 'Google Chrome is a cross-platform web browser developed by Google. It was first released in 2008 for Microsoft Windows and later expanded to other operating systems', 'https://www.google.com/intl/en_in/chrome/', 'App'),
(2, 'Mozilla Firefox for Windows', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Firefox_logo%2C_2019.svg/1200px-Firefox_logo%2C_2019.svg.png', 'The Mozilla Corporation', 'Free', 'Firefox will not run at all without the following libraries or packages: glibc 2.17 or higher. GTK+ 3.14 or higher. libstdc++ 4.8. 1 or higher. ...\r\nFor optimal functionality, we recommend the following libraries or packages: DBus 1.0 or higher. GNOME 2.16 or higher. libxtst 1.2. 3 or higher', 'Mozilla Firefox, or simply Firefox, is a free and open-source web browser developed by the Mozilla Foundation and its subsidiary, the Mozilla Corporation. It uses the Gecko rendering engine to display web pages, which implements current and anticipated web standards', 'https://www.mozilla.org/en-US/firefox/windows/', 'App'),
(3, 'Microsoft Edge for Windows', 'https://edgestatic.azureedge.net/welcome/static/favicon.png', 'Microsoft Corporation', 'Free', 'Rendering Engine: Microsoft Edge uses the Blink rendering engine, the same engine used by Google Chrome.\r\n\r\nCompatibility: It is designed to be compatible with websites and extensions that work on Chrome.\r\n\r\nIntegration with Microsoft Services: Microsoft Edge is integrated with Microsoft services, such as Microsoft 365 and Bing.\r\n\r\nExtensions: Microsoft Edge supports extensions from the Microsoft Edge Add-ons store, which includes a variety of extensions for productivity, ad-blocking, and more.\r\n\r\nPrivacy Features: Microsoft Edge includes privacy features like Tracking Prevention, which helps prevent websites from tracking your online behavior.\r\n\r\nCross-Platform Support: Microsoft Edge is available on Windows, macOS, iOS, and Android, providing a consistent browsing experience across different devices.\r\n\r\nPDF Viewer: It includes a built-in PDF viewer for viewing PDF documents without the need for additional plugins.\r\n\r\nCollections: A feature that allows users to collect and organize co', 'Microsoft Edge is a web browser developed by Microsoft. It is the default browser for Windows 10 and offers features like a new rendering engine, integration with Microsoft services, a built-in PDF reader, and support for Chrome extensions', 'https://www.microsoft.com/en-us/edge?ep=203&form=MA13LE&es=40', 'App'),
(4, 'Google Chrome for Mac', 'https://www.google.com/chrome/static/images/chrome-logo-m100.svg', 'Google Inc.', 'Free', 'Google Chrome is known for its speed, simplicity, and security. It supports a wide range of extensions and has features like syncing bookmarks, history, and settings across devices', 'Google Chrome is a cross-platform web browser developed by Google. It was first released in 2008 for Microsoft Windows and later expanded to other operating systems', 'https://www.google.com/intl/en_in/chrome/', 'App'),
(5, 'Google Chrome for Ios', 'https://www.google.com/chrome/static/images/chrome-logo-m100.svg', 'Google Inc.', 'Free', 'Google Chrome is known for its speed, simplicity, and security. It supports a wide range of extensions and has features like syncing bookmarks, history, and settings across devices', 'Google Chrome is a cross-platform web browser developed by Google. It was first released in 2008 for Microsoft Windows and later expanded to other operating systems', 'https://apps.apple.com/us/app/google-chrome/id535886823', 'App'),
(6, 'Google Chrome for Android', 'https://www.google.com/chrome/static/images/chrome-logo-m100.svg', 'Google Inc.', 'Free', 'Google Chrome is known for its speed, simplicity, and security. It supports a wide range of extensions and has features like syncing bookmarks, history, and settings across devices', 'Google Chrome is a cross-platform web browser developed by Google. It was first released in 2008 for Microsoft Windows and later expanded to other operating systems', 'https://play.google.com/store/apps/details?id=com.android.chrome&hl=en&gl=US', 'App'),
(9, 'Instagram for Android', 'https://play-lh.googleusercontent.com/VRMWkE5p3CkWhJs6nv-9ZsLAs1QOg5ob1_3qg-rckwYW7yp1fMrYZqnEFpk0IoVP4LM=w240-h480-rw', 'Meta Platforms, Inc.', 'Free', 'Profile Picture (Avatar)\r\n\r\nSize: 110 x 110 pixels (recommended)\r\nAspect Ratio: 1:1\r\nInstagram Feed Posts\r\n\r\nImage Size: 1080 x 1080 pixels (recommended)\r\nAspect Ratio: 1:1\r\nVideo Length: Up to 60 seconds for a regular post\r\nInstagram Stories\r\n\r\nImage/Video Size: 1080 x 1920 pixels (recommended)\r\nAspect Ratio: 9:16\r\nVideo Length: Up to 15 seconds per story\r\nIGTV (Instagram TV)\r\n\r\nVideo Size: Minimum 720p (720 x 1280 pixels)\r\nAspect Ratio: 9:16 (vertical) or 16:9 (horizontal)\r\nVideo Length: Up to 15 minutes for a regular user, up to 60 minutes for verified or larger accounts\r\nInstagram Reels\r\n\r\nVideo Size: 1080 x 1080 pixels (recommended)\r\nAspect Ratio: 1:1\r\nVideo Length: Up to 60 seconds\r\nInstagram Profile Banner (Cover Photo)\r\n\r\nSize: 420 x 654 pixels (recommended)\r\nInstagram IGTV Cover Photo\r\n\r\nSize: 420 x 654 pixels (recommended)\r\nHashtags\r\n\r\nUp to 30 hashtags per post\r\nEffective use of relevant hashtags to increase discoverability\r\nInstagram Business Account Features\r\n\r\n', 'Instagram is a social media platform for sharing photos and videos.', 'https://play.google.com/store/apps/details?id=com.instagram.android', 'App'),
(11, 'Instagram for Ios', 'https://is1-ssl.mzstatic.com/image/thumb/Purple116/v4/52/76/9a/52769a72-9cf5-aebc-bd7f-8abb2f1dbdc7/Prod-0-1x_U007emarketing-0-7-0-85-220-0.png/246x0w.webp', 'Meta Platforms, Inc.', 'Free', 'Profile Picture (Avatar)\r\n\r\nSize: 110 x 110 pixels (recommended)\r\nAspect Ratio: 1:1\r\nInstagram Feed Posts\r\n\r\nImage Size: 1080 x 1080 pixels (recommended)\r\nAspect Ratio: 1:1\r\nVideo Length: Up to 60 seconds for a regular post\r\nInstagram Stories\r\n\r\nImage/Video Size: 1080 x 1920 pixels (recommended)\r\nAspect Ratio: 9:16\r\nVideo Length: Up to 15 seconds per story\r\nIGTV (Instagram TV)\r\n\r\nVideo Size: Minimum 720p (720 x 1280 pixels)\r\nAspect Ratio: 9:16 (vertical) or 16:9 (horizontal)\r\nVideo Length: Up to 15 minutes for a regular user, up to 60 minutes for verified or larger accounts\r\nInstagram Reels\r\n\r\nVideo Size: 1080 x 1080 pixels (recommended)\r\nAspect Ratio: 1:1\r\nVideo Length: Up to 60 seconds\r\nInstagram Profile Banner (Cover Photo)\r\n\r\nSize: 420 x 654 pixels (recommended)\r\nInstagram IGTV Cover Photo\r\n\r\nSize: 420 x 654 pixels (recommended)\r\nHashtags\r\n\r\nUp to 30 hashtags per post\r\nEffective use of relevant hashtags to increase discoverability\r\nInstagram Business Account Features\r\n\r\nAdditional ', 'Instagram is a social media platform for sharing photos and videos.\n', 'https://apps.apple.com/us/app/instagram/id389801252', 'App');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `relation` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `name`, `relation`, `category`) VALUES
(1, 'Google Chrome for Windows', 1, 'App'),
(2, 'Mozilla Firefox for Windows', 1, 'App'),
(3, 'Microsoft Edge for Windows', 1, 'App'),
(4, 'Google Chrome for Mac', 2, 'App'),
(5, 'Google Chrome for Ios', 3, 'App'),
(6, 'Google Chrome for Android', 4, 'App'),
(9, 'Instagram for Android', 4, 'App'),
(11, 'Instagram for Ios', 3, 'App');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `softdata`
--
ALTER TABLE `softdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `softdata`
--
ALTER TABLE `softdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
