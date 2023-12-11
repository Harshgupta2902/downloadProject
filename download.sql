-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2023 at 01:16 PM
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
  `overview` text NOT NULL,
  `features` text NOT NULL,
  `requirement` text NOT NULL,
  `downloadurl` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `version` varchar(1000) NOT NULL,
  `released_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `softdata`
--

INSERT INTO `softdata` (`id`, `name`, `logo`, `company`, `free`, `overview`, `features`, `requirement`, `downloadurl`, `category`, `description`, `version`, `released_date`) VALUES
(1, 'Google Chrome for Windows', 'https://www.google.com/chrome/static/images/chrome-logo-m100.svg', 'Google Inc.', 'Free', '<p>Google Chrome Web Browser is the most popular internet browser in the world. Its high degree of customization options is credited for achieving such a feat. And Google regularly updates Chrome, ranging from dramatic overhauls to subtle tweaks.</p>\n<p>Google Chrome has added some commonly used plugin-specific features of other browsers into the default package, such as an Incognito tab mode. No logs of the user activity are stored, and all cookies from the session are discarded. As a part of Chrome&rsquo;s javascript virtual machine, pop-up javascript windows will not be shown by default and will appear as a small bar at the bottom of the interface until the user wishes to display or hide the window.</p>\n<p>Google Chrome Browser will support web applications running alongside other local applications on the computer. Tabs can be put in a web-app mode, where the omnibar and controls will                                                                             \n\n\n\n\n', '<ul>\n<li>A faster way to do just about anything</li>\n<li>Google smarts for everything you want to do</li>\n<li>Chrome security is your browsing superpower</li>\n<li>Go anywhere, do everything</li>\n<li>Create Application Shortcuts For Your Favorite Websites</li>\n<li>Synchronize Bookmarks Across Browsers</li>\n<li>Task Manager for Your Chrome Browser</li>\n<li>Check Memory Used By Different Browsers</li>\n<li>Chrome &ldquo;Pin Tab&rdquo; Feature</li>\n</ul>', '<ul>\n<li>Supported OS: Windows 11, Windows 10, Windows 8.1, Windows 7</li>\n<li>RAM (Memory): 2 GB RAM (4 GB recommended)</li>\n<li>Free Hard Disk Space: 200 MB or more</li>\n</ul>', 'https://www.google.com/chrome/', 'App', 'Free Download Google Chrome (32-bit/64-bit) is the latest standalone offline installer for Windows PC. It is a fast and easy-to-use web browser that combines a minimal design with sophisticated technology to make the web safer.', '120.0.6099.63', 'December 5, 2023'),
(2, 'Mozilla Firefox for Windows', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Firefox_logo%2C_2019.svg/1200px-Firefox_logo%2C_2019.svg.png', 'The Mozilla Corporation', 'Free', '<p>Take it with you wherever you go. Synchronize your browsing across multiple devices. Forget clunky URLs &ndash; find the sites you love in seconds. It has the most ways to customize your online experience, specifically for how you use the web. It is built with you in mind, so it\'s easy and intuitive to use even when you try it. Thousands of Add-ons (little extras that augment Firefox to meet your unique needs) are waiting to help you do more, have more fun, and be more creative online.</p>\r\n<p>Mozilla Firefox keeps your info and online interests away from the bad guys. Put, your security is our top priority. Choose from 5,000 free extras to make your Mozilla Firefox browser look and function how you want. An add-on can be a new time-saving toolbar button, a shortcut to search, a themed look, and more. Add-ons make browsing easier.</p>', '<ul>\r\n<li>Extremely improved performance</li>\r\n<li>Uses 30% less memory than Chrome</li>\r\n<li>Truly Private Browsing with Tracking Protection</li>\r\n<li>Souped-up Add-ons manager</li>\r\n<li>Stronger phishing and malware protection</li>\r\n<li>Improved download manager</li>\r\n<li>Native looks for every system</li>\r\n<li>Streamlined \"Remember password\" handling</li>\r\n<li>Smart bookmarks</li>\r\n<li>Places Organizer replaces the Bookmark Manager</li>\r\n<li>Smart Location Bar learns how you browse</li>\r\n</ul>', '<ul>\r\n<li>Supported OS: Windows 11, Windows 10, Windows 8.1, Windows 7</li>\r\n<li>RAM (Memory): 2 GB RAM (4 GB recommended)</li>\r\n<li>Free Hard Disk Space: 200 MB or more</li>\r\n</ul>', 'https://www.mozilla.org/en-US/firefox/', 'App', 'Mozilla Firefox is a fast, secure, and easy-use web browser with many advantages over other web browsers, tabbed browsing and the ability to block pop-up windows. It lets you view Web pages faster, using less of your computer\'s memory', '120.0.1', 'November 29, 2023'),
(3, 'Microsoft Edge for Windows', 'https://edgestatic.azureedge.net/welcome/static/favicon.png', 'Microsoft Corporation', 'Free', '<p>Its resemblance to Google Chrome is quite considerable, except for the more marked targets of the interface and less pronounced rounded edges. Memory consumption and CPU usage are relatively even with the same Google Chrome, and you can barely notice the differences.</p>\r\n<p>Google Chrome, Opera, Vivaldi, and Yandex are different browsers but have a joint base: Chromium. It is an open-source project created by Google and is the most fundamental part of the browser, its engine. Therefore, you can think of Chrome as a modification of Chromium, to which Google has added its codecs, plugins, and specific options.</p>\r\n<p>However, all browsers that use Chromium as a base share some common aspects. For example, everyone can use the same catalog of extensions. Although some browsers decide to include their extension stores to have more personal control of what they offer, in the end, they can also install third-party ones.</p>\r\n<p>This popularity of Chromium has made some other companies t', '<ul>\r\n<li>Even in its early form, the new Edge browser is blazing fast.</li>\r\n<li>Microsoft\'s revamped Edge interface is clean and stylish, although it\'s not necessarily a significant improvement over Chrome.</li>\r\n<li>You can customize the home page with three different templates.</li>\r\n<li>Not as resource-hungry as Chrome</li>\r\n</ul>', '<ul>\r\n<li>Supported OS: Windows 11, Windows 10</li>\r\n<li>RAM (Memory): 2 GB RAM (4 GB recommended)</li>\r\n<li>Free Hard Disk Space: 400 MB or more</li>\r\n</ul>', 'https://www.microsoft.com/en-us/edge?ep=203&form=MA13LE&es=40', 'App', 'Microsoft Edge for Windows is a Chromium project so that you can use the extensions/add-ons from the Google Chrome browser.\r\n\r\n', '120.0.2210.61', 'December 7, 2023'),
(4, 'Google Chrome for Mac', 'https://www.google.com/chrome/static/images/chrome-logo-m100.svg', 'Google Inc.', 'Free', '<p>Google Chrome is one of the most popular web browsers. Whether you\'re a student, professional, or just a casual internet user, Google Chrome for Mac offers a seamless browsing experience with its robust features, fast performance, and strong security measures.</p>\n<p>It will support web applications running alongside other local applications on the computer. Tabs can be put in a web-app mode, where the omnibar and controls will be hidden to allow the user to use the web app without the browser \"in the way.\" Rendering Engine. Chrome uses the WebKit rendering engine on advice from the Gears team because it is simple, memory efficient, functional on embedded devices, and easy to learn for new developers.</p>', '<ul>\n<li>Fast Performance: Google Chrome is known for its fast performance, allowing you to load web pages quickly and efficiently, even on slower internet connections. It also has a built-in feature called \"Chrome Instant\" that predicts and loads web pages in the background, making your browsing experience even faster.</li>\n<li>User-Friendly Interface: It has a clean and intuitive interface, making it easy to navigate and use. Its minimalistic design and simple layout makes it ideal for beginners and experienced users.</li>\n<li>Customization Options: Google Chrome allows you to customize your browsing experience by adding various extensions and themes from the Chrome Web Store. You can personalize your browser with different themes and wallpapers and customize settings according to your preferences.</li>\n<li>Sync Across Devices: If you use Google Chrome on multiple devices, you can sync your bookmarks, history, and settings across all devices using your Google account. This lets y', '<ul>\n<li>MacOS 10.14 or later</li>\n<li>Intel and Apple Silicon processor</li>\n</ul>', 'https://www.google.com/intl/en_in/chrome/', 'App', 'It is a fast and easy-to-use web browser used for accessing the internet and running web-based applications based on the open-source Chromium web browser project.', '120.0.6099.62', 'December 5, 2023'),
(5, 'Google Chrome for Ios', 'https://www.google.com/chrome/static/images/chrome-logo-m100.svg', 'Google Inc.', 'Free', '<p>Google Chrome is one of the most popular web browsers. Whether you\'re a student, professional, or just a casual internet user, Google Chrome for Mac offers a seamless browsing experience with its robust features, fast performance, and strong security measures.</p>\r\n<p>It will support web applications running alongside other local applications on the computer. Tabs can be put in a web-app mode, where the omnibar and controls will be hidden to allow the user to use the web app without the browser \"in the way.\" Rendering Engine. Chrome uses the WebKit rendering engine on advice from the Gears team because it is simple, memory efficient, functional on embedded devices, and easy to learn for new developers.</p>', '<ul>\r\n<li>Fast Performance: Google Chrome is known for its fast performance, allowing you to load web pages quickly and efficiently, even on slower internet connections. It also has a built-in feature called \"Chrome Instant\" that predicts and loads web pages in the background, making your browsing experience even faster.</li>\r\n<li>User-Friendly Interface: It has a clean and intuitive interface, making it easy to navigate and use. Its minimalistic design and simple layout makes it ideal for beginners and experienced users.</li>\r\n<li>Customization Options: Google Chrome allows you to customize your browsing experience by adding various extensions and themes from the Chrome Web Store. You can personalize your browser with different themes and wallpapers and customize settings according to your preferences.</li>\r\n<li>Sync Across Devices: If you use Google Chrome on multiple devices, you can sync your bookmarks, history, and settings across all devices using your Google account. This lets y', '<dl class=\"information-list__item__definition__item\">\r\n<dd class=\"information-list__item__definition__item__definition\">Requires iOS 15.0 or later.</dd>\r\n</dl>', 'https://apps.apple.com/us/app/google-chrome/id535886823', 'App', 'It is a fast and easy-to-use web browser used for accessing the internet and running web-based applications based on the open-source Chromium web browser project.', '120.0.6099.101', 'December 5, 2023'),
(6, 'Google Chrome for Android', 'https://www.google.com/chrome/static/images/chrome-logo-m100.svg', 'Google Inc.', 'Free', '<p>Google Chrome is a fast, easy to use, and secure web browser. Designed for Android, Chrome brings you personalized news articles, quick links to your favorite sites, downloads, and Google Search and Google Translate built-in. Download now to enjoy the same Chrome web browser experience you love across all your devices.<br /><br /><strong>Browse fast and type less.</strong>&nbsp;Choose from personalized search results that instantly appear as you type and quickly browse previously visited web pages. Fill in forms quickly with Autofill.</p>', '<p><strong>Incognito Browsing.</strong>&nbsp;Use Incognito mode to browse the internet without saving your history. Browse privately across all your devices.<br /><br /><strong>Access your Chrome across devices.</strong>&nbsp;When you sign in to Chrome, you can save bookmarks, passwords and more in your Google Account, so you can access them on your other devices.<br /><br /><strong>All your favorite content, one tap away.</strong>&nbsp;Chrome is not just fast for Google Search, but designed so you are one tap away from all your favorite content. You can tap on your favorite news sites or social media directly from the new tab page. Chrome also has the &ldquo;Tap to Search&rdquo;- feature on most webpages. You can tap on any word or phrase to start a Google search while still in the page you are enjoying.<br /><br /><strong>Protect your phone with Google Safe Browsing.</strong>&nbsp;Chrome has Google Safe Browsing built-in. It keeps your phone safe by showing warnings to you when you attempt to navigate to dangerous sites or download dangerous files.<br /><br /><strong>Fast downloads and view web pages and videos offline</strong>&nbsp;Chrome has a dedicated download button, so you can easily download videos, pictures, and entire webpages with just one tap. Chrome also has downloads home right inside Chrome, where you can access all the content you downloaded, even when you are offline.<br /><br /><strong>Google Voice Search.</strong>&nbsp;Chrome gives you an actual web browser you can talk to. Use your voice to find answers on-the-go without typing and go hands free. You can browse and navigate quicker using your voice anywhere, anytime.<br /><br /><strong>Google Translate built-in: Quickly translate entire web pages.</strong>&nbsp;Chrome has Google Translate built in to help you to translate entire web to your own language with one tap.<br /><br /><strong>Smart personalized recommendations.</strong>&nbsp;Chrome creates an experience that is tailored to your interests. On the new tab page, you will find articles that Chrome selected based on your previous browsing history</p>', 'Varies with device', 'https://play.google.com/store/apps/details?id=com.android.chrome&hl=en&gl=US', 'App', ' ', '119.0.6045.194', 'December 5, 2023');

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
(6, 'Google Chrome for Android', 4, 'App');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Harsh Gupta', 'demo@123.com', '12345678');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
