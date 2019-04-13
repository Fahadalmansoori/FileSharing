-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2019 at 05:12 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filesharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `school_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_school_id_index` (`school_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `school_id`, `title`, `about`, `created_at`, `updated_at`) VALUES
(1, 1, 'Computing BSc(Hons)', 'The computing industry offers you a variety of interesting and rewarding jobs to choose from, and other industries are also keen to employ qualified and skilled computing graduates. This course is designed to help you build up your skills to move on to the career you’re looking for once you graduate.\r\n\r\nWe aim to give you a good basic understanding of all aspects of computing, while also letting you specialise in the topics that interest you most. You have a range of option modules to choose from, so you can tailor your studies to gain skills and expertise in the areas that motivate and inspire you.\r\n\r\nModules cover everything from computer science to software engineering, and from information technology to web design. You can even choose to do a language as one of your modules. It’s all designed to help you develop the set of skills you’re looking for, with an emphasis on the practical side of computing.\r\n\r\nSpeaking of practical, we’ll give you every chance to gain real-world experience while you’re here. As well as working on projects in our inspiring computing facilities, you’ll be able to spend a year working on placement in industry.\r\n\r\nIn the first year of your course you’ll be studying alongside students doing our Computing Science, Computing MComp and Software Engineering courses. They all share the same first year, but then move on to look at different areas.\r\n\r\nSo if you find in your first year of studies that one particular area interests you more than others, you’re free to transfer between courses. By keeping things flexible, we make sure you have the chance to follow your interests. Just to let you know, if you want to transfer to an integrated Master’s course, you’ll have to achieve an average mark of 60% in your first year.', '2019-03-27 00:00:00', '2019-03-27 00:15:00'),
(2, 1, 'Computing in Business BA(Hons)', 'Businesses are looking for graduates who have an in-depth knowledge of computing. They want people who know their way around information technologies (IT) – but they also want people who know about business. This course aims to help you develop your understanding of both disciplines and how they are interlinked, and to build up your skills for future employment.\r\n\r\nTo become a computing professional in a competitive and fast-paced environment, you need a range of skills and a good understanding of business, so we’ll look at both areas. We’ll give you the chance to design and develop computer systems and websites – and we’ll get you thinking about the issues that a business has to take into account when developing new information systems.\r\n\r\nThe first year of your studies will cover a broad range of aspects of computing including web programming, database development and how computers store and manipulate data. You’ll also get the chance to work on projects including designing your own prototype individually and as a team.\r\n\r\nWe’ll look at finance systems, how user-friendly a system should be, and the strategic business needs of an organisation. You’ll spend most of your time studying in the School of Computing and Engineering, but some of your modules will be provided by our Business School too.\r\n\r\nDuring your studies you’ll also have the chance to spend a year working in industry. You could develop some great experience and pick up some useful contacts that could help you take the first steps in your career.', '2019-03-27 00:00:00', NULL),
(3, 1, 'Computer Science BSc(Hons)', 'From sending a text to using the cashpoint, every day we all interact with computers in all sorts of different ways. Computing helps us have more fun, get creative and try out new ideas. It enhances our quality of life and aims to meet the challenges that ongoing advances in technology create. This course helps you build up knowledge and the skills that could be invaluable in the computing industry.\r\n\r\nIn this course, we aim to help you explore a range of topics, like programming, software engineering, mathematics and mobile computing. We\'ll look at the theory and the practical side of things to help you develop your abilities. It could make all the difference when you go on to look for employment in this rapidly expanding industry.\r\n\r\nYour tutors will encourage you to identify tough problems, and then work out how to solve them through software. You might get involved in developing software solutions using the latest artificial intelligence (AI). Or perhaps you’ll look at how to use computing applications in engineering or scientific experiments.\r\n\r\nIn Year 1 you’ll follow a core computing programme aimed at giving you a broad understanding. Then from Year 2 on you’ll have the chance to take an option module in each year, this and project based work will help you to tailor your studies according to what interests you the most.\r\n\r\nDuring your studies you’ll be taught through a combination of formal lectures, tutorial groups, practical laboratory work and seminars. The course is partially accredited by the British Computer Society (BCS) and gives you the chance to apply your skills in the real-world with an optional one-year placement. Previous students have taken placements at companies like IBM, Microsoft, Hewlett Packard, HBOS and British Airways.', '2019-03-27 00:00:00', NULL),
(4, 1, 'Computer Science with Cyber Security BSc(Hons)', 'There are many reasons why Cyber Security is fast becoming one of the most important aspects of Computing. The monetary value of data has led to an increase in cyber-crime, meaning computing professionals with Cyber Security knowledge and expertise are in high-demand. This course aims to prepare you for an exciting and impactful career in the Computing industry.\r\n\r\nMany aspects of Cyber Security rely on the fundamental principles of Computer Science: designing secure software systems, implementing cryptographic techniques for secure data transfer, and auditing systems for vulnerabilities. In this course you will be taught both theoretical and practical aspects of Computer Science and Cyber Security. Many of the big challenges in the cyber security field need the novel use of Computer Science and Software Engineering techniques to develop the next generation of security products.\r\n\r\nYour tutors will encourage you to tackle challenging problems, and particularly those at the forefront of research, to ensure you are in the best position to make a real impact in the Computing sector.', NULL, NULL),
(6, 1, 'Computer Science with Games Programming BSc (Hons)', 'Games development is a large and thriving industry in the UK. We want to help you gain the skills to become a great programmer so you can get a rewarding job in this exciting sector. You could be a games developer, or you could choose to take your skills and work in any programming job.\r\n\r\nWe want to make sure you have the talents that employers are looking for. Our close links with local and national development companies help us make sure that the course content matches the skills needed for careers in the games development industry.\r\n\r\nYour course will cover general computing and software engineering knowledge and techniques that apply across the computing industry. At the same time you’ll have the chance to explore the latest issues in computer games. We’ll look at the technical aspects of games development, and support you to develop a strong knowledge base. From computer games programming to games systems and development techniques, we’ll cover some vital topics.\r\n\r\nWe’ll also cover game engine architecture, computational mathematics and artificial intelligence. And to help develop your abilities and your team working, we’ll get you operating with other students to complete a computer games project.\r\n\r\nAfter your second year you can choose to take a year-long placement in the industry. Thanks to our links with a range of leading employers in the UK and internationally, you could end up working for a big name in your chosen career. Previous students have taken placements with Sega Europe Ltd, Rebellion Studios, Rockstar Leeds and Red Kite. Or you could have the chance to take a placement at the University’s Canalside Studios, working as part of a team researching and developing games for a range of platforms.\r\n\r\nIf you’d like to try your hand at setting up your own business, our Enterprise Placement Year (EPY) gives students from the UK or the EU the chance to start your own independent studio. You could set up your own company in The Duke of York Young Entrepreneur Centre, which is located in our flagship 3M Buckley Innovation Centre. You can work on your own, or set up a company as part of a group. Business advisors and a games industry mentor will support you as you get things off the ground.', '2019-03-27 00:00:00', NULL),
(5, 1, 'Computer Games Design BA(Hons)', 'If you enjoy exploring what’s possible with digital design and games development, we could help you really get to know the subject. Our course gives you the chance to take a broader and deeper look at games development, and explore what you can do. We’ll encourage you to get creative and ambitious with your designs, and develop some visionary ideas. It’s all designed to help you move on to a career in your chosen field.\r\n\r\nWe explore some of the more complex aspects of game and level design, and games art during the course. We aim to cover all the bases, including how to develop, design, plan and create game ideas and concepts.\r\n\r\nYou’ll also have the chance to produce and integrate artwork and graphical assets for computer games. And we’ll broaden things out to look at the subject in context, introducing current issues and ideas. During your three years of study, we’ll also aim to introduce emerging technologies that are coming up through the gaming industry.\r\n\r\nYour course is very much designed for the real world – it carries the Creative Skillset Tick which identifies courses best suited to prepare you for a Creative Industries career. We never forget you’ll leave here with the hope to gain a job in the industry, so we maintain active links with business and industry figures. During your course you could have the chance to hear an industry guest speakers – in the past we’ve hosted art directors, animators, illustrators and designers from the freelance world and from companies like Rockstar, Formerdroid and Realtime UK.\r\n\r\nDuring your studies you’ll also have the chance to take part in lots of internal Game Jams. We’ll also encourage you to get involved in externally organised events like the Global Game Jam.\r\n\r\nIf you’d like to take what you’ve learnt out into the real-world, we also give you the opportunity to spend a placement year working in the industry. Our Placement Unit team can help you find a position that’s right for you. Alternatively, we have a small number of placements available in our in-house games development studio, Canalside Studios, where you could find yourself working as part of a team developing games for a range of platforms including Xbox Live Arcade, iPhone and Android. Previous students have also developed software with the NHS, The Royal Armouries and the West Yorkshire Fire Service.', '2019-03-27 00:00:00', NULL),
(7, 1, 'Computer Systems Engineering BEng(Hons)', 'Computer systems are all around us, from home entertainment packages and mobile phones through to car control systems and complex communication networks. We aim to give you the skills you need for a career in this thriving industry sector.\r\n\r\nDuring the course we’ll introduce you to a range of computer systems. From desktop and workstation computers through to high performance computer systems, we aim to give you a thorough background in a wide range of areas. You’ll have the chance to find out what’s really involved in computer systems engineering.\r\n\r\nIf you’re hoping to be a computer systems engineer, potential employers will be looking for you to understand software programming techniques, computer systems architecture and electronics. This course focuses on these three core aspects to give you the chance to build your knowledge and skills.\r\n\r\nYou’ll be taught by professional engineers. Many of them have worked in the industry, and you can be confident that the course covers topics that the industry is looking for, as we regularly meet up with our Industry Advisory Panel to get their feedback.\r\n\r\nWe want to give you as much practical experience as possible. So after your second year, you’ll have the chance to go on a year-long placement to put your skills into practice.\r\n\r\nThe course is accredited by the Institution of Engineering and Technology (IET) on behalf of the Engineering Council. When you finish your studies, you could become registered as an Incorporated Engineer (IEng), which could be a feather in your cap when you’re looking for your first exciting role in the industry. The course could also lead on to you gaining Chartered Engineer (CEng) status following further study.', '2019-03-27 00:00:00', NULL),
(8, 2, 'Accountancy and Finance', 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-04-07 23:00:00', NULL),
(9, 2, 'Business and Management', 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-31 23:00:00', NULL),
(10, 2, 'Economics', 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-27 00:00:00', '2019-03-27 00:15:00'),
(11, 2, 'Events, Hospitality, Travel and Tourism Management', 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(12, 2, 'Law', 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-31 23:00:00', '2019-04-01 23:00:00'),
(13, 2, 'Marketing', 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-31 23:00:00', '2019-04-01 23:00:00'),
(14, 2, 'Logistics, Transport and Supply Chain Management', 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(15, 3, 'Acute Care PgCert', 'This course is designed to enhance your knowledge and critical understanding of managing and caring for patients within an acute or critical care setting.\r\n\r\nExploring the attributes that influence care decisions within acute and critical care environments with fellow practitioners in an educational setting creates an opportunity for you to reflect and build upon existing experiences and knowledge.\r\n\r\nGeneric material that underpins acute and critical care will be complimented by the opportunity for you to focus your learning on specific areas relevant your own area of practice.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(16, 3, 'Advanced Clinical Practice MSc', 'Capable of working autonomously with high levels of skills, ACP’s work as part of interdisciplinary healthcare teams, complementing existing provision and improving patient care, through which they aim to add a new dimension to healthcare.\r\n\r\nThe course is designed to help experienced nurses and allied healthcare professionals take on this challenging role in a variety of healthcare settings. It aims to provide additional theoretical, clinically focused education and training not addressed in initial nursing and healthcare education. This is at an appropriate level to support the expansion of practice and the development of new skills; specifically clinical history taking, clinical examination skills and consultation skills. You will be required to undertake a compulsory clinical placement in primary or secondary care, for which you will require a clinical educator.\r\n\r\nThe course offers you the opportunity to enhance your current knowledge and practice, which may lead to career progression into advanced roles across all specialities of practice.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(17, 3, 'Assessment and Examination of the Newborn', 'This course will assist you in developing the clinical skills required to practice competently in this area.You will examine the evidence-based theory underpinning the physical examination of the newborn and critically explore the ethical and legal implications of undertaking this role and responsibility.\r\n\r\nWhilst undertaking this course you are required to work in an area where you have access to newborn babies.You will be assessed and supported in practice by an appropriately qualified mentor who is experienced in the examination of the newborn.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(18, 3, 'Assessment, Care and Management of Acute/Critical Illness or Injury', 'This course will assist you in gaining the competences required for the assessment, care and management of the acutely/critically ill or injured adult.\r\n\r\nThrough examining current evidence and developments in this field of care, you will have an opportunity to develop your knowledge and understanding of the pathophysiological effects of acute/critical illness or traumatic injury.\r\n\r\nThroughout the course, emphasis will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care.', NULL, NULL),
(19, 3, 'Cervical Screening (H)', 'This course is based upon the guidance of the National Health Cervical Screening Programme. It will assist you to gain the competences required to competently take cervical samples and enhance your knowledge of the pathophysiology involved in cervical cytology.\r\n\r\nDuring your studies you will also consider the factors affecting the uptake of the screening programme.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(20, 3, 'Cervical Screening (M)', 'This course is based upon the guidance of the National Health Cervical Screening Programme. It will assist you to gain the competences required to competently take cervical samples and enhance your knowledge of the pathophysiology involved in cervical cytology.\r\n\r\nDuring your studies you will also consider the factors affecting the uptake of the screening programme.', NULL, NULL),
(21, 1, 'Information Technology BSc (Hons)', 'nformation technology (IT) professionals help businesses and organisations use any information they store digitally. Gain a qualification in IT and you could work with computer-based technology, integrating communications with computer networks to benefit organisations in the public or private sector.\r\n\r\nWe aim to give you the knowledge and skills to help organisations identify their IT needs and then design, produce and operate computer-based information systems. During your studies we’ll give you the opportunity to gain a thorough grounding in the principles of IT, including best practice in developing web technologies. You’ll also study advanced skills in developing database-enabled applications.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

DROP TABLE IF EXISTS `downloads`;
CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `downloads_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `module_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `mark` decimal(10,0) NOT NULL,
  `live` tinyint(1) NOT NULL DEFAULT '0',
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `finished` tinyint(1) NOT NULL DEFAULT '0',
  `owner` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `files_user_id_index` (`user_id`),
  KEY `files_module_id_index` (`module_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `user_id`, `approved_by`, `module_id`, `title`, `keywords`, `about`, `price`, `mark`, `live`, `approved`, `finished`, `owner`, `deleted_at`, `created_at`, `updated_at`) VALUES
(64, 1, NULL, 18, 'Computational Mathematics 2 - u1578102', 'Computational Mathematics 2 - u1578102', 'Computing BSc(Hons)', '10.00', '70', 0, 0, 0, 1, NULL, '2019-04-12 23:25:51', '2019-04-12 23:25:51'),
(63, 1, 1, 15, 'Large-Scale Software Engineering - u1578102', 'Large-Scale Software Engineering - u1578102', 'Computing BSc(Hons', '10.00', '50', 1, 1, 0, 1, NULL, '2019-04-12 23:11:13', '2019-04-12 23:11:13'),
(59, 1, 1, 2, ' Hardware and Networks - u1578102', ' Hardware and Networks - u1578102', 'Computing BSc(Hons)', '10.00', '70', 1, 1, 0, 1, NULL, '2019-04-10 22:48:17', '2019-04-12 20:27:51'),
(62, 1, 1, 12, ' Web Development - u1578102', ' Web Development - u1578102', 'web Development', '10.00', '20', 1, 1, 0, 1, NULL, '2019-04-12 23:10:25', '2019-04-12 23:10:25'),
(60, 1, 1, 3, 'Studio 1 - u1578102', 'Studio 1 - u1578102', 'Studio 1', '10.00', '50', 1, 1, 0, 1, NULL, '2019-04-11 17:10:38', '2019-04-12 23:07:54'),
(61, 3, NULL, 7, 'Team Project - Tutor 1', 'Team Project - Tutor 1', 'Team project', '10.00', '70', 0, 0, 0, 1, NULL, '2019-04-11 19:19:37', '2019-04-11 19:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `file_user`
--

DROP TABLE IF EXISTS `file_user`;
CREATE TABLE IF NOT EXISTS `file_user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `file_user_file_id_index` (`file_id`),
  KEY `file_user_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file_user`
--

INSERT INTO `file_user` (`id`, `file_id`, `user_id`) VALUES
(1, 1, 1),
(2, 3, 1),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM AUTO_INCREMENT=262 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(24, '2019_04_06_215203_role_user_table', 9),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_27_210040_create_jobs_table', 1),
(4, '2018_10_27_210815_create_failed_jobs_table', 1),
(22, '2019_04_03_175110_create_uploads_table', 7),
(6, '2018_11_01_200340_create_file_user_table', 1),
(14, '2019_03_18_202617_create_modules_table', 3),
(8, '2019_03_18_203745_create_courses_table', 1),
(9, '2019_03_18_205749_create_schools_table', 1),
(10, '2019_03_18_210129_create_roles_table', 1),
(23, '2014_10_12_000000_create_users_table', 8),
(21, '2018_10_29_201925_create_files_table', 7),
(25, '2019_04_10_214851_create_downloads_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_mark` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `modules_course_id_index` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `course_id`, `title`, `total_mark`, `year`, `about`, `created_at`, `updated_at`) VALUES
(1, 1, 'Computing Science and Mathematics', 100, 1, 'n this module we introduce you to basic computing science and mathematical concepts related to software development. Topics covered include set theory, graphs and trees, finite state machines, grammars and languages, propositional logic and searching and sorting algorithms. You’ll put the theory into practice using a programming language, such as Java, and software that lets you directly implement finite state machines.', '2019-03-18 00:00:00', NULL),
(2, 1, ' Hardware and Networks', 100, 1, 'This module explores how computers and networks function by introducing you to their components and structures, from the basic building blocks to fully functioning systems. The module covers how computers execute programs, how data is stored, recognised and manipulated, and which hardware and software components are used to achieve this. You’ll also get the opportunity to study how networks are constructed and what techniques (eg cryptography, routing and error detection and correction) are used to ensure that data is transmitted correctly and securely through them.', NULL, NULL),
(3, 1, 'Studio 1', 100, 1, 'This module is studio based and takes a very practical approach to the work covered. You’ll be offered the opportunity to produce a prototype related to your chosen study path. Through this project based approach you’ll be introduced to the concepts and principles of programming/scripting using an object-based language. You\'ll be required to plan, design, implement, test and deploy solutions in response to a requirement specification. Ultimately you’re expected to produce a useful software product, whether it is a game, entertainment feature or business or media product. Throughout this module you’ll be supported in acquiring sound development and problem solving skills and be expected to assemble a portfolio of work.', NULL, NULL),
(4, 1, ' Project 1', 100, 1, 'Working as part of a team, this module aims to provide you with an understanding of hardware, software and industry best practices used by businesses. In your teams you’ll be supported in planning, designing and developing a prototype product. This experience has been designed to introduce you to the product development cycle, technology limitations and possible future developments.', NULL, NULL),
(5, 1, 'Software Design and Development', 100, 1, 'This module aims to provide you with an introduction to the design, development, and testing of large scale software systems. The material covered includes introductory programming (in a language such as Java), program testing (using JUnit testing techniques), systems modelling (using unified modelling language- UML), graphical user interface (GUI) development, and rapid prototyping techniques.', NULL, NULL),
(6, 1, 'Algorithms Processes and Data', 100, 2, 'In this module you’ll be supported in expanding your programming skills to cover a range of standard data structures (eg shared variables, semaphores, monitors and lists, trees and graphs) and algorithms (eg Dekker\'s algorithm, bounded buffer algorithms and searching, sorting and traversals) for both sequential and concurrent systems. You’ll also study how to analyse systems in order to determine their correctness and safety, and to calculate their efficiency.', NULL, NULL),
(7, 1, 'Team Project', 100, 2, 'Working as a part of a team, you’ll have the opportunity to design and develop a software application, or explore some aspect of information systems. You’ll be encouraged to explore theories and principles of team working and project management through the development of your chosen application. Alongside your team work you will also explore important legal and professional issues for people working in the IT industry.', NULL, NULL),
(8, 1, 'Relational Databases and Web Integration', 100, 2, 'This module aims to equip you with the knowledge and skills needed to design, implement and query a relational database. You’ll be supported in gaining an understanding of the functionality necessary to enable web pages to interact with a database. You’ll be given the opportunity to become familiar with web architectures and the design considerations necessary for implementing a database driven web application.', NULL, NULL),
(9, 1, 'Cyber Security', 100, 2, 'This module introduces fundamental concepts in computer and network security, enabling the identification of vulnerabilities and the selection and implementation of suitable mitigation technologies. Throughout this module you’ll learn about securing data through the use of cryptography, operating system security and multi-user environments, creating secure programs, state-of-the-art methods for identifying potential threats, and legal and ethical issues surrounding computer security.', NULL, NULL),
(10, 1, ' Operating Systems and Language Translators', 100, 2, 'In this module you’ll study two related areas. Firstly, the modules covers the architectures of computer operating systems, including how they deal with resource allocation, management and security, in both single processor systems and multiple distributed processor systems (networks). Secondly, the module covers language processing, a key operation in modern computer systems. You’ll explore the structure of computer languages and the tools and techniques to automatically analyse them.', NULL, NULL),
(11, 1, ' User Experience Design', 100, 2, 'One of the key determinants of a computer system’s success is whether or not humans are able and willing to use it. This module aims to provide you with the skills necessary for designing, prototyping and evaluating usable user interfaces. The module explores the subjects of interaction design, information systems, user experience, social media and how computer-based products fit into organisations, societies and culture. As a part of the work on this module you’re expected to develop user requirements for an interactive device, then write up your user testing results, reflecting on what you have learnt from the module.', NULL, NULL),
(12, 1, ' Web Development', 100, 2, 'The module has been designed to build on your previous studies of web programming to explore server-side web development. You will be supported in developing the knowledge and skills necessary to build secure and robust database driven web applications. The assessment involves the creation of web applications that demonstrate understanding of fundamental web development concepts.', NULL, NULL),
(13, 1, ' Computational Mathematics 1', 100, 2, 'This module covers the mathematical foundations required for scientific computing. You’ll be introduced to fundamental concepts in algebra and be supported in developing an understanding of both analytical and numerical methods for solving equations in one variable. You\'ll also be introduced to error analysis and proof.', NULL, NULL),
(14, 1, 'Object-Oriented Systems Development', 100, 2, 'This module allows you to explore the programming language that underpins major operating systems, applications, the Internet and the World Wide Web. Throughout this module you’ll be supported in expanding on the procedural and object based coding skills that you have developed so far. You’ll be supported be given an introduction to \'C\' programming leading into C++ programming with a push toward Objective-C. You’ll then be supported in building a client-server system where the client could be a smartphone, tablet or a desktop PC. If you’re keen to challenge yourself you will also have the opportunity to explore mixed language programming. Integrating components written in in C/C++ with Java, Objective-C and C#. Techniques for accessing Object Request Brokers and databases will be covered and the concept of Design Patterns will be introduced.', NULL, NULL),
(15, 1, 'Large-Scale Software Engineering', 100, 4, 'This module provides an analysis of the problems associated with large-scale software development projects and the management practices, procedures, techniques and tools designed to address these issues. Such tools will vary from simple stand-alone tools to integrated Software Engineering Environments (SEE’s). Mechanisms for determining the quality both of the software systems and of the software engineering process itself will also be addressed.', NULL, NULL),
(16, 1, 'Distributed and Client Server Systems', 100, 4, 'This module provides a detailed analysis of a range of techniques for the development of distributed and client-server systems architectures. It includes socket programming, remote method invocation, CORBA (Common Object Request Broker: Architecture and Specifications), web services, and Tuple-Space based architectures. The module also examines some typical distributed systems, including distributed file systems, distributed databases, and other common architectures.', NULL, NULL),
(17, 1, 'Individual Project', 1000, 4, 'This module is driven by you. You are asked to select a problem to solve which is relevant to your degree, and of appropriate scope and depth to be tackled within a timeframe of 30 weeks. Carrying out the project enables you to develop and demonstrate your ability to undertake research, manage time, use your initiative, learn independently, discuss and write convincingly on a subject requiring independent learning. A supervisor will support you throughout your project. You’ll use your existing knowledge and be encouraged to acquire additional skills as you carry out your project. The aim of the project is to suggest a solution to an identified problem. Your final report should describe the aims, scope and motivation of the project, the research you have undertaken, and the technical solution provided, including justification for design and development decisions.', NULL, NULL),
(18, 1, 'Computational Mathematics 2', 100, 4, 'This module aims to provide you with an understanding of computational perspectives of mathematics, with an emphasis on matrix methods and data modelling. You’ll be supported in developing the ability to use both analytical and numerical techniques for solving large systems of linear equations and in analysing the resulting algorithms in terms of robustness, performance, stability and accuracy. You’ll be encouraged to broaden your mathematical understanding by applying your knowledge to real-world problems in developing solutions to a range of computational challenges using industry standard software (such as Matlab).', NULL, NULL),
(19, 1, ' Modern Database Applications', 100, 4, 'By 2020 it is estimated that the digital universe will reach 44 zettabytes of data. As a result, the information needs of modern organisations require a more flexible approach to data management than that offered by traditional relational databases. This module introduces you to alternative approaches to data modelling including hierarchical, network, object-oriented, object-relational.', NULL, NULL),
(20, 1, 'Advanced Web Programming', 100, 4, 'The module studies some of the more advanced approaches to developing web applications, examining both client and server side technologies. You will explore structured approaches to web development and a modern web framework, together with a range of contemporary development tools. As your understanding of the technologies and approaches develops you will aim to critically evaluate them and assess the benefits and risks of using a given approach or framework for a given task.', NULL, NULL),
(21, 1, ' Artificial Intelligence', 100, 4, 'Can machines (in particular computers) be intelligent? And what does that mean precisely? These are the main questions that we try to answer in this module. We will explore how machines can achieve intelligent tasks in a variety of settings. In term one we consider settings with full observability and determinism, these are like laboratory conditions or puzzle games. In this setting, we will look at knowledge representation, problem solving, and planning. In term two the settings are relaxed, and we will study how to deal with the uncertainties that arise from this. In particular, we will see how to deal with opponents, with incomplete and/or uncertain information, and how intelligent agents can learn.', NULL, NULL),
(22, 8, 'Accountancy and Finance', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-27 00:00:00', '2019-03-27 00:15:00'),
(23, 9, 'Business and Management', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.t', NULL, NULL),
(24, 10, 'Economics', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-31 23:00:00', '2019-04-07 23:00:00'),
(25, 11, 'Events, Hospitality, Travel and Tourism Management', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', NULL, NULL),
(26, 12, 'Law', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', NULL, NULL),
(27, 13, 'Marketing', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', NULL, NULL),
(28, 8, 'Accountancy and Finance', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-27 00:00:00', '2019-03-27 00:15:00'),
(29, 9, 'Business and Management', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.t', NULL, NULL),
(30, 10, 'Economics', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-31 23:00:00', '2019-04-07 23:00:00'),
(31, 11, 'Events, Hospitality, Travel and Tourism Management', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', NULL, NULL),
(32, 12, 'Law', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', NULL, NULL),
(33, 13, 'Marketing', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', NULL, NULL),
(34, 8, 'Accountancy and Finance', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-27 00:00:00', '2019-03-27 00:15:00'),
(35, 9, 'Business and Management', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.t', NULL, NULL),
(36, 10, 'Economics', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-31 23:00:00', '2019-04-07 23:00:00'),
(37, 11, 'Events, Hospitality, Travel and Tourism Management', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', NULL, NULL),
(38, 12, 'Law', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', NULL, NULL),
(39, 13, 'Marketing', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', NULL, NULL),
(40, 14, 'Logistics, Transport and Supply Chain Management', 0, 1, 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-31 23:00:00', NULL),
(41, 15, 'Assessment, Care and Management of the Acutely Ill Individual', 0, 1, 'You’ll be provided with the opportunity to enhance your knowledge and understanding of the pathophysiological effects of acute illness or traumatic injury along with the examination of current evidence and developments in this field of care. Emphasis throughout the module will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care. You’ll be assessed through two pieces of coursework.', NULL, NULL),
(42, 15, 'Assessment, Care and Management of the Acutely Ill Individual', 0, 1, 'You’ll be provided with the opportunity to enhance your knowledge and understanding of the pathophysiological effects of acute illness or traumatic injury along with the examination of current evidence and developments in this field of care. Emphasis throughout the module will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care. You’ll be assessed through two pieces of coursework.', NULL, NULL),
(44, 17, 'Assessment and Examination of the Newborn', 100, 1, 'This course will assist you in developing the clinical skills required to practice competently in this area.You will examine the evidence-based theory underpinning the physical examination of the newborn and critically explore the ethical and legal implications of undertaking this role and responsibility.\r\n\r\nWhilst undertaking this course you are required to work in an area where you have access to newborn babies.You will be assessed and supported in practice by an appropriately qualified mentor who is experienced in the examination of the newborn.', '2019-03-31 23:00:00', '2019-04-01 23:00:00'),
(45, 18, 'Assessment, Care and Management of Acute/Critical Illness or Injury', 100, 1, 'This course will assist you in gaining the competences required for the assessment, care and management of the acutely/critically ill or injured adult.\r\n\r\nThrough examining current evidence and developments in this field of care, you will have an opportunity to develop your knowledge and understanding of the pathophysiological effects of acute/critical illness or traumatic injury.\r\n\r\nThroughout the course, emphasis will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care.', NULL, NULL),
(46, 19, 'Case Management of Individuals with Long Term Conditions', 100, 1, 'This short course is aimed at health and social care professionals who are working within a role involving caring for people with long-term conditions. The course offers you the opportunity to develop your knowledge and understanding of history taking and diagnostic reasoning, clinical management, self care, case management and therapeutic interventions.\r\n\r\nThroughout the course you will consider the implications for patients and carers facing the reality of living well or dying as a result of a long-term condition. Your learning will be enhanced through the opportunity to meet service users within the University setting and discuss the implications of living with a long-term condition. You will also have the opportunity to explore research relevant to your individual professional developmental needs and apply this in your specialist area of practice.', NULL, NULL),
(47, 20, 'Cervical Screening (H)', 100, 1, 'This course is based upon the guidance of the National Health Cervical Screening Programme. It will assist you to gain the competences required to competently take cervical samples and enhance your knowledge of the pathophysiology involved in cervical cytology.\r\n\r\nDuring your studies you will also consider the factors affecting the uptake of the screening programme.', NULL, NULL),
(48, 15, 'Personal and Practice Development', 0, 1, 'You will be provided with the opportunity to enhance your knowledge and understanding of an area of interest to support your continuing professional development needs. Informed by robust evidence based, you will have the flexibility to apply and reflect your individual personal and/or practice development learning needs expanding your knowledge and abilities within your practice. You will be assessed through coursework.', NULL, NULL),
(49, 16, 'Clinical Sciences and Clinical Skills for Advanced Practitioners (1)', 100, 1, 'ou will study the theoretical principles required to carry out effective diagnosis, assessment and management of undifferentiated and undiagnosed conditions in addition to pre-diagnosed conditions related to the respiratory, ear, nose and throat, cardiovascular, skin, mental health and neuro-muscular systems. You will have explore how to generate differential diagnoses in addition to making informed collaborative decisions about the management of your patient’s presentation. You will develop your knowledge, understanding and competence in the context of your clinical practice. You will be assessed via coursework and an OSCE examination. To support and assess you through the module, you will require an appropriately qualified clinical educator and currently be working in clinical practice.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(50, 16, 'Contemporary Advanced Practice', 100, 1, 'You will explore the four pillars of advanced practice (clinical practice, leadership, facilitation of learning and evidence of research and development). The module will challenge you to identify how healthcare policy impacts on your area of advanced clinical practice and develop your knowledge and skills in each of the four pillars. You will be assessed through coursework.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(51, 16, 'Clinical Sciences and Clinical Skills for Advanced Practitioners (2)', 100, 2, 'This is a compulsory module for all students who are able to register as an Independent Prescriber with their professional body.', NULL, NULL),
(52, 16, 'Independent and Supplementary Prescribing', 100, 2, 'This module helps to prepare you to be an Independent and Supplementary Prescriber. You will explore the relevant law, ethics, policy, evidence -based and practice components of prescribing. You will be assessed through coursework, an examination in pharmacology and numeracy, in practice by your medical mentor, as well as complete an in-class test which will be assessed on a pass/refer/fail basis.', NULL, NULL),
(53, 16, 'Personal and Practice Development', 100, 2, 'You will be provided with the opportunity to enhance your knowledge and understanding of an area of interest to support your continuing professional development needs. Informed by robust evidence based, you will have the flexibility to apply and reflect your individual personal and/or practice development learning needs expanding your knowledge and abilities within your practice. You will be assessed through coursework.', NULL, NULL),
(54, 16, 'Project (Health Related)', 100, 3, 'This module provides the opportunity to develop a working project proposal related to your course outcomes or place of work, facilitated with learning materials and procedural guidance made available electronically. In addition you will attend lectures and have access to supervision with a subject specialist or researcher in the field. You will be assessed through submission of coursework in the form of a project.', NULL, NULL),
(55, 15, 'Assessment, Care and Management of the Acutely Ill Individual', 0, 1, 'You’ll be provided with the opportunity to enhance your knowledge and understanding of the pathophysiological effects of acute illness or traumatic injury along with the examination of current evidence and developments in this field of care. Emphasis throughout the module will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care. You’ll be assessed through two pieces of coursework.', NULL, NULL),
(109, 21, 'Introduction to Databases', 100, 1, 'This module introduces learners to the fundamental concepts involved in the design, implementation and use of relational databases. Learners will develop the skills and knowledge needed to model relational databases based on user requirements, and implement and query databases using a suitable relational database management system (RDBMS) and SQL.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(57, 17, 'Assessment and Examination of the Newborn', 100, 1, 'This course will assist you in developing the clinical skills required to practice competently in this area.You will examine the evidence-based theory underpinning the physical examination of the newborn and critically explore the ethical and legal implications of undertaking this role and responsibility.\r\n\r\nWhilst undertaking this course you are required to work in an area where you have access to newborn babies.You will be assessed and supported in practice by an appropriately qualified mentor who is experienced in the examination of the newborn.', '2019-03-31 23:00:00', '2019-04-01 23:00:00'),
(58, 18, 'Assessment, Care and Management of Acute/Critical Illness or Injury', 100, 1, 'This course will assist you in gaining the competences required for the assessment, care and management of the acutely/critically ill or injured adult.\r\n\r\nThrough examining current evidence and developments in this field of care, you will have an opportunity to develop your knowledge and understanding of the pathophysiological effects of acute/critical illness or traumatic injury.\r\n\r\nThroughout the course, emphasis will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care.', NULL, NULL),
(59, 19, 'Case Management of Individuals with Long Term Conditions', 100, 1, 'This short course is aimed at health and social care professionals who are working within a role involving caring for people with long-term conditions. The course offers you the opportunity to develop your knowledge and understanding of history taking and diagnostic reasoning, clinical management, self care, case management and therapeutic interventions.\r\n\r\nThroughout the course you will consider the implications for patients and carers facing the reality of living well or dying as a result of a long-term condition. Your learning will be enhanced through the opportunity to meet service users within the University setting and discuss the implications of living with a long-term condition. You will also have the opportunity to explore research relevant to your individual professional developmental needs and apply this in your specialist area of practice.', NULL, NULL),
(60, 20, 'Cervical Screening (H)', 100, 1, 'This course is based upon the guidance of the National Health Cervical Screening Programme. It will assist you to gain the competences required to competently take cervical samples and enhance your knowledge of the pathophysiology involved in cervical cytology.\r\n\r\nDuring your studies you will also consider the factors affecting the uptake of the screening programme.', NULL, NULL),
(61, 15, 'Personal and Practice Development', 0, 1, 'You will be provided with the opportunity to enhance your knowledge and understanding of an area of interest to support your continuing professional development needs. Informed by robust evidence based, you will have the flexibility to apply and reflect your individual personal and/or practice development learning needs expanding your knowledge and abilities within your practice. You will be assessed through coursework.', NULL, NULL),
(62, 16, 'Clinical Sciences and Clinical Skills for Advanced Practitioners (1)', 100, 1, 'ou will study the theoretical principles required to carry out effective diagnosis, assessment and management of undifferentiated and undiagnosed conditions in addition to pre-diagnosed conditions related to the respiratory, ear, nose and throat, cardiovascular, skin, mental health and neuro-muscular systems. You will have explore how to generate differential diagnoses in addition to making informed collaborative decisions about the management of your patient’s presentation. You will develop your knowledge, understanding and competence in the context of your clinical practice. You will be assessed via coursework and an OSCE examination. To support and assess you through the module, you will require an appropriately qualified clinical educator and currently be working in clinical practice.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(63, 16, 'Contemporary Advanced Practice', 100, 1, 'You will explore the four pillars of advanced practice (clinical practice, leadership, facilitation of learning and evidence of research and development). The module will challenge you to identify how healthcare policy impacts on your area of advanced clinical practice and develop your knowledge and skills in each of the four pillars. You will be assessed through coursework.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(64, 16, 'Clinical Sciences and Clinical Skills for Advanced Practitioners (2)', 100, 2, 'This is a compulsory module for all students who are able to register as an Independent Prescriber with their professional body.', NULL, NULL),
(65, 16, 'Independent and Supplementary Prescribing', 100, 2, 'This module helps to prepare you to be an Independent and Supplementary Prescriber. You will explore the relevant law, ethics, policy, evidence -based and practice components of prescribing. You will be assessed through coursework, an examination in pharmacology and numeracy, in practice by your medical mentor, as well as complete an in-class test which will be assessed on a pass/refer/fail basis.', NULL, NULL),
(66, 16, 'Personal and Practice Development', 100, 2, 'You will be provided with the opportunity to enhance your knowledge and understanding of an area of interest to support your continuing professional development needs. Informed by robust evidence based, you will have the flexibility to apply and reflect your individual personal and/or practice development learning needs expanding your knowledge and abilities within your practice. You will be assessed through coursework.', NULL, NULL),
(67, 16, 'Project (Health Related)', 100, 3, 'This module provides the opportunity to develop a working project proposal related to your course outcomes or place of work, facilitated with learning materials and procedural guidance made available electronically. In addition you will attend lectures and have access to supervision with a subject specialist or researcher in the field. You will be assessed through submission of coursework in the form of a project.', NULL, NULL),
(68, 15, 'Assessment, Care and Management of the Acutely Ill Individual', 0, 1, 'You’ll be provided with the opportunity to enhance your knowledge and understanding of the pathophysiological effects of acute illness or traumatic injury along with the examination of current evidence and developments in this field of care. Emphasis throughout the module will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care. You’ll be assessed through two pieces of coursework.', NULL, NULL),
(70, 17, 'Assessment and Examination of the Newborn', 100, 1, 'This course will assist you in developing the clinical skills required to practice competently in this area.You will examine the evidence-based theory underpinning the physical examination of the newborn and critically explore the ethical and legal implications of undertaking this role and responsibility.\r\n\r\nWhilst undertaking this course you are required to work in an area where you have access to newborn babies.You will be assessed and supported in practice by an appropriately qualified mentor who is experienced in the examination of the newborn.', '2019-03-31 23:00:00', '2019-04-01 23:00:00'),
(71, 18, 'Assessment, Care and Management of Acute/Critical Illness or Injury', 100, 1, 'This course will assist you in gaining the competences required for the assessment, care and management of the acutely/critically ill or injured adult.\r\n\r\nThrough examining current evidence and developments in this field of care, you will have an opportunity to develop your knowledge and understanding of the pathophysiological effects of acute/critical illness or traumatic injury.\r\n\r\nThroughout the course, emphasis will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care.', NULL, NULL),
(72, 19, 'Case Management of Individuals with Long Term Conditions', 100, 1, 'This short course is aimed at health and social care professionals who are working within a role involving caring for people with long-term conditions. The course offers you the opportunity to develop your knowledge and understanding of history taking and diagnostic reasoning, clinical management, self care, case management and therapeutic interventions.\r\n\r\nThroughout the course you will consider the implications for patients and carers facing the reality of living well or dying as a result of a long-term condition. Your learning will be enhanced through the opportunity to meet service users within the University setting and discuss the implications of living with a long-term condition. You will also have the opportunity to explore research relevant to your individual professional developmental needs and apply this in your specialist area of practice.', NULL, NULL),
(73, 20, 'Cervical Screening (H)', 100, 1, 'This course is based upon the guidance of the National Health Cervical Screening Programme. It will assist you to gain the competences required to competently take cervical samples and enhance your knowledge of the pathophysiology involved in cervical cytology.\r\n\r\nDuring your studies you will also consider the factors affecting the uptake of the screening programme.', NULL, NULL),
(74, 15, 'Personal and Practice Development', 0, 1, 'You will be provided with the opportunity to enhance your knowledge and understanding of an area of interest to support your continuing professional development needs. Informed by robust evidence based, you will have the flexibility to apply and reflect your individual personal and/or practice development learning needs expanding your knowledge and abilities within your practice. You will be assessed through coursework.', NULL, NULL),
(75, 16, 'Clinical Sciences and Clinical Skills for Advanced Practitioners (1)', 100, 1, 'ou will study the theoretical principles required to carry out effective diagnosis, assessment and management of undifferentiated and undiagnosed conditions in addition to pre-diagnosed conditions related to the respiratory, ear, nose and throat, cardiovascular, skin, mental health and neuro-muscular systems. You will have explore how to generate differential diagnoses in addition to making informed collaborative decisions about the management of your patient’s presentation. You will develop your knowledge, understanding and competence in the context of your clinical practice. You will be assessed via coursework and an OSCE examination. To support and assess you through the module, you will require an appropriately qualified clinical educator and currently be working in clinical practice.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(76, 16, 'Contemporary Advanced Practice', 100, 1, 'You will explore the four pillars of advanced practice (clinical practice, leadership, facilitation of learning and evidence of research and development). The module will challenge you to identify how healthcare policy impacts on your area of advanced clinical practice and develop your knowledge and skills in each of the four pillars. You will be assessed through coursework.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(77, 16, 'Clinical Sciences and Clinical Skills for Advanced Practitioners (2)', 100, 2, 'This is a compulsory module for all students who are able to register as an Independent Prescriber with their professional body.', NULL, NULL),
(78, 16, 'Independent and Supplementary Prescribing', 100, 2, 'This module helps to prepare you to be an Independent and Supplementary Prescriber. You will explore the relevant law, ethics, policy, evidence -based and practice components of prescribing. You will be assessed through coursework, an examination in pharmacology and numeracy, in practice by your medical mentor, as well as complete an in-class test which will be assessed on a pass/refer/fail basis.', NULL, NULL),
(79, 16, 'Personal and Practice Development', 100, 2, 'You will be provided with the opportunity to enhance your knowledge and understanding of an area of interest to support your continuing professional development needs. Informed by robust evidence based, you will have the flexibility to apply and reflect your individual personal and/or practice development learning needs expanding your knowledge and abilities within your practice. You will be assessed through coursework.', NULL, NULL),
(80, 16, 'Project (Health Related)', 100, 3, 'This module provides the opportunity to develop a working project proposal related to your course outcomes or place of work, facilitated with learning materials and procedural guidance made available electronically. In addition you will attend lectures and have access to supervision with a subject specialist or researcher in the field. You will be assessed through submission of coursework in the form of a project.', NULL, NULL),
(81, 15, 'Assessment, Care and Management of the Acutely Ill Individual', 0, 1, 'You’ll be provided with the opportunity to enhance your knowledge and understanding of the pathophysiological effects of acute illness or traumatic injury along with the examination of current evidence and developments in this field of care. Emphasis throughout the module will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care. You’ll be assessed through two pieces of coursework.', NULL, NULL),
(83, 17, 'Assessment and Examination of the Newborn', 100, 1, 'This course will assist you in developing the clinical skills required to practice competently in this area.You will examine the evidence-based theory underpinning the physical examination of the newborn and critically explore the ethical and legal implications of undertaking this role and responsibility.\r\n\r\nWhilst undertaking this course you are required to work in an area where you have access to newborn babies.You will be assessed and supported in practice by an appropriately qualified mentor who is experienced in the examination of the newborn.', '2019-03-31 23:00:00', '2019-04-01 23:00:00'),
(84, 18, 'Assessment, Care and Management of Acute/Critical Illness or Injury', 100, 1, 'This course will assist you in gaining the competences required for the assessment, care and management of the acutely/critically ill or injured adult.\r\n\r\nThrough examining current evidence and developments in this field of care, you will have an opportunity to develop your knowledge and understanding of the pathophysiological effects of acute/critical illness or traumatic injury.\r\n\r\nThroughout the course, emphasis will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care.', NULL, NULL),
(85, 19, 'Case Management of Individuals with Long Term Conditions', 100, 1, 'This short course is aimed at health and social care professionals who are working within a role involving caring for people with long-term conditions. The course offers you the opportunity to develop your knowledge and understanding of history taking and diagnostic reasoning, clinical management, self care, case management and therapeutic interventions.\r\n\r\nThroughout the course you will consider the implications for patients and carers facing the reality of living well or dying as a result of a long-term condition. Your learning will be enhanced through the opportunity to meet service users within the University setting and discuss the implications of living with a long-term condition. You will also have the opportunity to explore research relevant to your individual professional developmental needs and apply this in your specialist area of practice.', NULL, NULL),
(86, 20, 'Cervical Screening (H)', 100, 1, 'This course is based upon the guidance of the National Health Cervical Screening Programme. It will assist you to gain the competences required to competently take cervical samples and enhance your knowledge of the pathophysiology involved in cervical cytology.\r\n\r\nDuring your studies you will also consider the factors affecting the uptake of the screening programme.', NULL, NULL),
(87, 15, 'Personal and Practice Development', 0, 1, 'You will be provided with the opportunity to enhance your knowledge and understanding of an area of interest to support your continuing professional development needs. Informed by robust evidence based, you will have the flexibility to apply and reflect your individual personal and/or practice development learning needs expanding your knowledge and abilities within your practice. You will be assessed through coursework.', NULL, NULL),
(88, 16, 'Clinical Sciences and Clinical Skills for Advanced Practitioners (1)', 100, 1, 'ou will study the theoretical principles required to carry out effective diagnosis, assessment and management of undifferentiated and undiagnosed conditions in addition to pre-diagnosed conditions related to the respiratory, ear, nose and throat, cardiovascular, skin, mental health and neuro-muscular systems. You will have explore how to generate differential diagnoses in addition to making informed collaborative decisions about the management of your patient’s presentation. You will develop your knowledge, understanding and competence in the context of your clinical practice. You will be assessed via coursework and an OSCE examination. To support and assess you through the module, you will require an appropriately qualified clinical educator and currently be working in clinical practice.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(89, 16, 'Contemporary Advanced Practice', 100, 1, 'You will explore the four pillars of advanced practice (clinical practice, leadership, facilitation of learning and evidence of research and development). The module will challenge you to identify how healthcare policy impacts on your area of advanced clinical practice and develop your knowledge and skills in each of the four pillars. You will be assessed through coursework.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(90, 16, 'Clinical Sciences and Clinical Skills for Advanced Practitioners (2)', 100, 2, 'This is a compulsory module for all students who are able to register as an Independent Prescriber with their professional body.', NULL, NULL),
(91, 16, 'Independent and Supplementary Prescribing', 100, 2, 'This module helps to prepare you to be an Independent and Supplementary Prescriber. You will explore the relevant law, ethics, policy, evidence -based and practice components of prescribing. You will be assessed through coursework, an examination in pharmacology and numeracy, in practice by your medical mentor, as well as complete an in-class test which will be assessed on a pass/refer/fail basis.', NULL, NULL),
(92, 16, 'Personal and Practice Development', 100, 2, 'You will be provided with the opportunity to enhance your knowledge and understanding of an area of interest to support your continuing professional development needs. Informed by robust evidence based, you will have the flexibility to apply and reflect your individual personal and/or practice development learning needs expanding your knowledge and abilities within your practice. You will be assessed through coursework.', NULL, NULL),
(93, 16, 'Project (Health Related)', 100, 3, 'This module provides the opportunity to develop a working project proposal related to your course outcomes or place of work, facilitated with learning materials and procedural guidance made available electronically. In addition you will attend lectures and have access to supervision with a subject specialist or researcher in the field. You will be assessed through submission of coursework in the form of a project.', NULL, NULL),
(94, 15, 'Assessment, Care and Management of the Acutely Ill Individual', 0, 1, 'You’ll be provided with the opportunity to enhance your knowledge and understanding of the pathophysiological effects of acute illness or traumatic injury along with the examination of current evidence and developments in this field of care. Emphasis throughout the module will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care. You’ll be assessed through two pieces of coursework.', NULL, NULL);
INSERT INTO `modules` (`id`, `course_id`, `title`, `total_mark`, `year`, `about`, `created_at`, `updated_at`) VALUES
(96, 17, 'Assessment and Examination of the Newborn', 100, 1, 'This course will assist you in developing the clinical skills required to practice competently in this area.You will examine the evidence-based theory underpinning the physical examination of the newborn and critically explore the ethical and legal implications of undertaking this role and responsibility.\r\n\r\nWhilst undertaking this course you are required to work in an area where you have access to newborn babies.You will be assessed and supported in practice by an appropriately qualified mentor who is experienced in the examination of the newborn.', '2019-03-31 23:00:00', '2019-04-01 23:00:00'),
(97, 18, 'Assessment, Care and Management of Acute/Critical Illness or Injury', 100, 1, 'This course will assist you in gaining the competences required for the assessment, care and management of the acutely/critically ill or injured adult.\r\n\r\nThrough examining current evidence and developments in this field of care, you will have an opportunity to develop your knowledge and understanding of the pathophysiological effects of acute/critical illness or traumatic injury.\r\n\r\nThroughout the course, emphasis will be placed on the holistic assessment of the individual with development of subsequent management plans from which to provide optimum care.', NULL, NULL),
(98, 19, 'Case Management of Individuals with Long Term Conditions', 100, 1, 'This short course is aimed at health and social care professionals who are working within a role involving caring for people with long-term conditions. The course offers you the opportunity to develop your knowledge and understanding of history taking and diagnostic reasoning, clinical management, self care, case management and therapeutic interventions.\r\n\r\nThroughout the course you will consider the implications for patients and carers facing the reality of living well or dying as a result of a long-term condition. Your learning will be enhanced through the opportunity to meet service users within the University setting and discuss the implications of living with a long-term condition. You will also have the opportunity to explore research relevant to your individual professional developmental needs and apply this in your specialist area of practice.', NULL, NULL),
(99, 20, 'Cervical Screening (H)', 100, 1, 'This course is based upon the guidance of the National Health Cervical Screening Programme. It will assist you to gain the competences required to competently take cervical samples and enhance your knowledge of the pathophysiology involved in cervical cytology.\r\n\r\nDuring your studies you will also consider the factors affecting the uptake of the screening programme.', NULL, NULL),
(100, 15, 'Personal and Practice Development', 0, 1, 'You will be provided with the opportunity to enhance your knowledge and understanding of an area of interest to support your continuing professional development needs. Informed by robust evidence based, you will have the flexibility to apply and reflect your individual personal and/or practice development learning needs expanding your knowledge and abilities within your practice. You will be assessed through coursework.', NULL, NULL),
(101, 16, 'Clinical Sciences and Clinical Skills for Advanced Practitioners (1)', 100, 1, 'ou will study the theoretical principles required to carry out effective diagnosis, assessment and management of undifferentiated and undiagnosed conditions in addition to pre-diagnosed conditions related to the respiratory, ear, nose and throat, cardiovascular, skin, mental health and neuro-muscular systems. You will have explore how to generate differential diagnoses in addition to making informed collaborative decisions about the management of your patient’s presentation. You will develop your knowledge, understanding and competence in the context of your clinical practice. You will be assessed via coursework and an OSCE examination. To support and assess you through the module, you will require an appropriately qualified clinical educator and currently be working in clinical practice.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(102, 16, 'Contemporary Advanced Practice', 100, 1, 'You will explore the four pillars of advanced practice (clinical practice, leadership, facilitation of learning and evidence of research and development). The module will challenge you to identify how healthcare policy impacts on your area of advanced clinical practice and develop your knowledge and skills in each of the four pillars. You will be assessed through coursework.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(103, 16, 'Clinical Sciences and Clinical Skills for Advanced Practitioners (2)', 100, 2, 'This is a compulsory module for all students who are able to register as an Independent Prescriber with their professional body.', NULL, NULL),
(104, 16, 'Independent and Supplementary Prescribing', 100, 2, 'This module helps to prepare you to be an Independent and Supplementary Prescriber. You will explore the relevant law, ethics, policy, evidence -based and practice components of prescribing. You will be assessed through coursework, an examination in pharmacology and numeracy, in practice by your medical mentor, as well as complete an in-class test which will be assessed on a pass/refer/fail basis.', NULL, NULL),
(105, 16, 'Personal and Practice Development', 100, 2, 'You will be provided with the opportunity to enhance your knowledge and understanding of an area of interest to support your continuing professional development needs. Informed by robust evidence based, you will have the flexibility to apply and reflect your individual personal and/or practice development learning needs expanding your knowledge and abilities within your practice. You will be assessed through coursework.', NULL, NULL),
(106, 16, 'Project (Health Related)', 100, 3, 'This module provides the opportunity to develop a working project proposal related to your course outcomes or place of work, facilitated with learning materials and procedural guidance made available electronically. In addition you will attend lectures and have access to supervision with a subject specialist or researcher in the field. You will be assessed through submission of coursework in the form of a project.', NULL, NULL),
(125, 21, 'Advanced Web Programming', 100, 4, 'The module studies some of the more advanced approaches to developing web applications, examining both client and server side technologies. You will explore structured approaches to web development and a modern web framework, together with a range of contemporary development tools. As your understanding of the technologies and approaches develops you will aim to critically evaluate them and assess the benefits and risks of using a given approach or framework for a given task.', NULL, NULL),
(110, 21, ' Project 1', 100, 1, 'Working as part of a team, this module aims to provide you with an understanding of hardware, software and industry best practices used by businesses. In your teams you’ll be supported in planning, designing and developing a prototype product. This experience has been designed to introduce you to the product development cycle, technology limitations and possible future developments.', '2019-03-31 23:00:00', '2019-04-01 23:00:00'),
(111, 21, ' Hardware and Networks', 100, 1, 'This module explores how computers and networks function by introducing you to their components and structures, from the basic building blocks to fully functioning systems. The module covers how computers execute programs, how data is stored, recognised and manipulated, and which hardware and software components are used to achieve this. You’ll also get the opportunity to study how networks are constructed and what techniques (eg cryptography, routing and error detection and correction) are used to ensure that data is transmitted correctly and securely through them.', NULL, NULL),
(112, 21, 'Introduction to Web Programming', 100, 1, 'This module is aimed at helping you to develop the knowledge and practical skills needed to create basic interactive websites. The technologies covered are typically HTML, CSS and JavaScript. You\'ll aim to create a portfolio of webpages that demonstrate a range of HTML and CSS features. You\'ll also aim to develop a JavaScript application in response to a specified problem.', NULL, NULL),
(113, 21, 'Requirements Engineering', 100, 1, 'Requirements engineering is critical to the success of software development. The aim of this module is to introduce the student to the fundamental concepts, core principles and practical skills of modern requirement engineering as a key activity within successful software engineering.', '2019-03-31 23:00:00', '2019-03-31 23:00:00'),
(114, 21, 'Introduction to Data Analysis', 100, 1, 'In a world that is increasingly focusing on Big Data and data analysis, being able to analyse data and report the result of data analysis, and interpret it as useful information, is crucial to being a successful IT professional. This module introduces learners to the fundamentals of data analysis using one or more popular industry-standard data analysis tools.', NULL, NULL),
(115, 21, 'Management within an I.T. Environment', 100, 2, 'In this module you will gain an understanding of organisations, how they function, and how different elements of organisational behavior affect one another while working as an IT specialist. This module considers the organisational context, individuals in the organisation, groups and teams, organisational structure, and management processes, looking at relevant theory and practical examples.', NULL, NULL),
(116, 21, 'User Experience Design', 100, 2, 'One of the key determinants of a computer system’s success is whether or not humans are able and willing to use it. This module aims to provide you with the skills necessary for designing, prototyping and evaluating usable user interfaces. The module explores the subjects of interaction design, information systems, user experience, social media and how computer-based products fit into organisations, societies and culture. As a part of the work on this module you’re expected to develop user requirements for an interactive device, then write up your user testing results, reflecting on what you have learnt from the module.', NULL, NULL),
(117, 21, 'Team Project', 100, 2, 'Working as a part of a team, you’ll have the opportunity to design and develop a software application, or explore some aspect of information systems. You’ll be encouraged to explore theories and principles of team working and project management through the development of your chosen application. Alongside your team work you will also explore important legal and professional issues for people working in the IT industry.', NULL, NULL),
(118, 21, 'Year Two Project', 100, 2, 'This module provides an opportunity for you to undertake a project of your choosing related to your course of study. You’ll be required to propose an idea for your project, undertake research, if applicable specify an application to be developed and evaluate the project’s success. The module aims to equip you with key skills in research and project management that will help prepare you for the larger project module studied in the final year. You’ll be expected to produce a portfolio of work that provides evidence of how you have managed your project during the course of the module.', NULL, NULL),
(119, 21, 'Web Development', 100, 2, 'The module has been designed to build on your previous studies of web programming to explore server-side web development. You will be supported in developing the knowledge and skills necessary to build secure and robust database driven web applications. The assessment involves the creation of web applications that demonstrate understanding of fundamental web development concepts.', NULL, NULL),
(120, 21, 'Applied Data Science', 100, 2, 'We are now in an age of the ‘knowledge economy’ and ‘data science’ where new business models based upon the exchange and creation of data are able to deliver considerable value for organisations. A successful IT professional needs to understand the potential of data to enable and enact change within organisations. This module introduces learners to the analytical and robust use of data that is stored remotely in distributed and cloud-based systems.', NULL, NULL),
(121, 21, 'Systems Strategy', 100, 4, 'In increasingly complex systems it is important to have tools that help make sense of this complexity. Systems’ thinking takes a holistic approach to understanding how systems influence one another. This module aims to introduce the key concepts of the subject area to help you understand problems. It covers a specialised language, methods, and set of techniques that can be used to address highly complex problems that can help in the design of enduring solutions in any system. This module aims to help you make sense of the complexity within systems and how to assess the impact of decisions made beyond the immediate environment.', NULL, NULL),
(122, 21, 'Information Architecture', 100, 4, 'This module focuses on the way digital information can be organised to make the content more accessible and more easily understood by users. The module provides you with an introduction to the ways in which information can be organised and structured; for example using metadata, controlled vocabularies, ontologies and classification schemes primarily (but not exclusively) for the Web. Your studies focus on the way these technologies can support formal models of information seeking behaviour.', NULL, NULL),
(123, 21, 'Individual Project', 100, 4, 'This module is driven by you. You are asked to select a problem to solve which is relevant to your degree, and of appropriate scope and depth to be tackled within a timeframe of 30 weeks. Carrying out the project enables you to develop and demonstrate your ability to undertake research, manage time, use your initiative, learn independently, discuss and write convincingly on a subject requiring independent learning. A supervisor will support you throughout your project. You’ll use your existing knowledge and be encouraged to acquire additional skills as you carry out your project. The aim of the project is to suggest a solution to an identified problem. Your final report should describe the aims, scope and motivation of the project, the research you have undertaken, and the technical solution provided, including justification for design and development decisions.', NULL, NULL),
(124, 21, 'Modern Database Applications', 100, 4, 'By 2020 it is estimated that the digital universe will reach 44 zettabytes of data. As a result, the information needs of modern organisations require a more flexible approach to data management than that offered by traditional relational databases. This module introduces you to alternative approaches to data modelling including hierarchical, network, object-oriented, object-relational.', NULL, NULL),
(126, 21, 'Digital And Social Media Marketing', 100, 4, 'Digital Marketing is a term which encapsulates the targeted, measurable and interactive marketing of products and services through the use of the internet. This module will investigate and explore a variety of digital and social media marketing tools and their implementation within a practical context. In addition this module will help develop your understanding of online consumer behaviour, organisational marketing strategy and online decision making through the use of Web analytics. You will also cover the practical aspects of online brand development and have the opportunity to gain an understanding of integrated marketing campaigns, search engine optimisation (SEO) and social media.', NULL, NULL),
(127, 21, 'Advanced Front-End Web Development', 100, 4, 'This module looks deeper into the use of front-end web technologies, HTML, CSS and JavaScript, and their use in building modern-day web applications. The module considers design patterns and architectural issues for complex front-end web development. It also explores applications of web technologies. For example, to build location aware systems, develop mobile applications, and to visualise data. You\'ll be expected to build a web application and then reflect on the tools, techniques and approaches used in development.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Super_Admin', NULL, '2019-03-31 23:00:00', '2019-04-01 23:00:00'),
(2, 'Tutor', NULL, '2019-04-15 23:00:00', '2019-04-14 23:00:00'),
(3, 'Student', NULL, '2019-04-15 23:00:00', '2019-04-08 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles_users`
--

DROP TABLE IF EXISTS `roles_users`;
CREATE TABLE IF NOT EXISTS `roles_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `roles_users_user_id_index` (`user_id`),
  KEY `roles_users_role_id_index` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles_users`
--

INSERT INTO `roles_users` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, NULL, NULL),
(44, 3, 3, NULL, NULL),
(51, 1, 1, NULL, NULL),
(50, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Computing and Engineering ', NULL, '2019-03-27 00:00:00', NULL),
(2, 'Business School', 'At Huddersfield Business School we provide a modern, professional environment in which to learn and develop. We aim to deliver an inspirational and innovative learning experience and undertake pioneering research with a practical emphasis and real-world application. We believe strongly in the quality of the support we offer to our students, employers and all our working partners.', '2019-03-31 23:00:00', '2019-03-31 23:00:02'),
(3, 'Department of Nursing and Midwifery', 'The Department of Nursing and Midwifery offers a range of courses to equip students to work across a diversity of healthcare settings as nurses and midwives.  \r\n\r\nWe have excellent teaching and learning facilities, as well as high quality placement provision. \r\n\r\nAll our academic staff are research active and are committed to promoting nursing and midwifery research, as well as providing high quality teaching', '2019-04-01 23:00:00', '2019-04-02 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

DROP TABLE IF EXISTS `uploads`;
CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `module_id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint(20) DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uploads_file_id_index` (`file_id`),
  KEY `uploads_user_id_index` (`user_id`),
  KEY `uploads_module_id_index` (`module_id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file_id`, `user_id`, `module_id`, `filename`, `size`, `approved`, `deleted_at`, `created_at`, `updated_at`) VALUES
(59, 64, 1, 64, 'U1578102 -Product Design.pdf', 1604853, 0, NULL, '2019-04-12 23:26:00', '2019-04-12 23:26:00'),
(58, 62, 1, 62, 'U1578102 -Product Design.pdf', 1604853, 0, NULL, '2019-04-12 23:10:33', '2019-04-12 23:10:33'),
(54, 59, 1, 59, 'U1578102- Literature review.pdf', 1594127, 1, NULL, '2019-04-10 22:48:19', '2019-04-12 20:27:51'),
(56, 60, 1, 60, 'Poster U1578102 .pptx', 164696, 1, NULL, '2019-04-11 17:11:00', '2019-04-12 23:07:54'),
(57, 61, 3, 61, 'U1578102 -Ethical review form 1819.pdf', 278345, 0, NULL, '2019-04-11 19:19:41', '2019-04-11 19:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `school_id` int(10) UNSIGNED DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_student_number_unique` (`student_number`),
  KEY `users_course_id_index` (`course_id`),
  KEY `users_school_id_index` (`school_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `course_id`, `school_id`, `first_name`, `last_name`, `student_number`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Fahed', 'Almansoori', 'u1578102', 'u1578102@unimail.hud.ac.uk', NULL, '$2y$10$25E/adHWn1KGVKkH/RUPS.RacBhQciCUflaxufw8w3l0CIsh9fP/a', 't9X5V6pDegNrhovD3aNCkOHwjnpbCiOY55oKYgNJESg6X57yQET3rW8D2yBn', '2019-04-06 21:06:34', '2019-04-12 23:28:23'),
(3, 1, 1, 'Tutor 1', 'Tutor', 'Tutor 1', 'Tutor 1@unimail.hud.ac.uk', NULL, '$2y$10$wmK0yf9saDXX8j/3WFvJpuBIoxGggLAoRnotkjxDry52vqufq5Of6', 'OBTnrGxHH6dpAaXMdcQy62l4gNJ2OpdxyzM9xUPdRIBLBx8I9EFxnoPboU0z', '2019-04-11 18:36:41', '2019-04-11 18:36:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
