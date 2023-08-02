-- Simple Backup SQL Dump
-- Version 1.0
-- https://www.github.com/coderatio/simple-backup/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2023 at 04:41 PM
-- MYSQL Server Version: 10.4.27-MariaDB
-- PHP Version: 8.2.0
-- Developer: Josiah O. Yahaya
-- Copyright: Coderatio

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00"

--
-- Database: `sobsite`
-- Total Tables: 7
--

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `menus`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `title` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `class` varchar(255) NOT NULL DEFAULT '',
  `position` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `group_id` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `menus` VALUES (2,0,'About Us','about-us','#',1,1,'Active'),(3,0,'Check Status','check-status','#',2,1,'Active'),(4,0,'Privacy Policy','privacy-policy','#',3,1,'Active'),(5,0,'Terms & Conditions','terms-and-conditions','#',4,1,'Active'),(6,0,'Contact Us','contact-us','#',5,1,'Active');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `menus` with 5 row(s)
--

--
-- Table structure for table `menu_group`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_group` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_group`
--

LOCK TABLES `menu_group` WRITE;
/*!40000 ALTER TABLE `menu_group` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `menu_group` VALUES (1,'Main Menu'),(2,'Quick Link');
/*!40000 ALTER TABLE `menu_group` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `menu_group` with 2 row(s)
--

--
-- Table structure for table `menu_type`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_type`
--

LOCK TABLES `menu_type` WRITE;
/*!40000 ALTER TABLE `menu_type` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `menu_type` VALUES (1,'Page','Active'),(2,'Url','Active'),(3,'External Page','Active'),(4,'Category','Active');
/*!40000 ALTER TABLE `menu_type` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `menu_type` with 4 row(s)
--

--
-- Table structure for table `module`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `small_text` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module`
--

LOCK TABLES `module` WRITE;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `module` VALUES (1,'Phone','Phone','','+017367234','','',0,'2023-07-08 05:55:36','2023-07-08 05:55:36'),(2,'Email','Email','','info@mylottery.com','','',0,'2023-07-08 05:57:07','2023-07-08 05:57:07'),(3,'Footer about','Footer about','','The best lottery in india is found online. The reason is that india has opted not to create a state lottery of its own so, no matter how much you’d like to play physical lottery, this isn’t available in india.','','',0,'2023-07-08 06:06:48','2023-07-08 06:06:48');
/*!40000 ALTER TABLE `module` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `module` with 3 row(s)
--

--
-- Table structure for table `page`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` mediumtext NOT NULL,
  `keyword` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `og_title` varchar(100) NOT NULL,
  `og_locale` varchar(10) NOT NULL,
  `og_type` varchar(10) NOT NULL,
  `og_description` varchar(250) NOT NULL,
  `og_url` varchar(20) NOT NULL,
  `og_site_name` varchar(20) NOT NULL,
  `og_image` varchar(50) NOT NULL,
  `og_image_alt` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `page` VALUES (1,'2','About Us','About Us','','<p>Lottery tickets are a form of gambling where participants purchase a ticket for a chance to win a prize, typically a large sum of money. Lotteries are often operated by governments or licensed organizations, and the proceeds from ticket sales are used for various purposes, such as funding education, infrastructure projects, or charitable causes.</p>\r\n\r\n<p>The process usually involves players selecting a set of numbers from a predetermined range, or in some cases, the numbers are randomly generated for the ticket holder. The winning numbers are then determined through a random drawing, typically using a mechanical device or a computerized system.</p>\r\n\r\n<p>Lotteries can have different formats and prize structures. Some offer a fixed jackpot amount, while others have progressive jackpots that grow if there are no winners in previous drawings. Additional prizes can also be awarded for matching fewer numbers or specific combinations.</p>\r\n\r\n<p>It&#39;s important to note that participating in a lottery is a form of gambling, and the odds of winning are typically very low. Lottery tickets are often sold to adults only, and responsible gambling practices should be followed.</p>\r\n\r\n<p>If you have any specific questions about lotteries or lottery tickets, feel free to ask!</p>\r\n','','','','','','','','','',''),(2,'4','Private Policy','Private Policy','','<h1>Privacy Policy for Kerlalottery.online</h1>\r\n\r\n<p>At Kerlalottery.online, accessible from Kerlalottery.online, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Kerlalottery.online and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Kerlalottery.online. This policy is not applicable to any information collected offline or via channels other than this website.</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\r\n\r\n<h2>Information we collect</h2>\r\n\r\n<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>\r\n\r\n<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>\r\n\r\n<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>\r\n\r\n<h2>How we use your information</h2>\r\n\r\n<p>We use the information we collect in various ways, including to:</p>\r\n\r\n<ul>\r\n	<li>Provide, operate, and maintain our website</li>\r\n	<li>Improve, personalize, and expand our website</li>\r\n	<li>Understand and analyze how you use our website</li>\r\n	<li>Develop new products, services, features, and functionality</li>\r\n	<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>\r\n	<li>Send you emails</li>\r\n	<li>Find and prevent fraud</li>\r\n</ul>\r\n\r\n<h2>Log Files</h2>\r\n\r\n<p>Kerlalottery.online follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services&#39; analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users&#39; movement on the website, and gathering demographic information.</p>\r\n\r\n<h2>Advertising Partners Privacy Policies</h2>\r\n\r\n<p>You may consult this list to find the Privacy Policy for each of the advertising partners of Kerlalottery.online.</p>\r\n\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Kerlalottery.online, which are sent directly to users&#39; browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n\r\n<p>Note that Kerlalottery.online has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n\r\n<h2>Third Party Privacy Policies</h2>\r\n\r\n<p>Kerlalottery.online&#39;s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>\r\n\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers&#39; respective websites.</p>\r\n\r\n<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\r\n\r\n<p>Under the CCPA, among other rights, California consumers have the right to:</p>\r\n\r\n<p>Request that a business that collects a consumer&#39;s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>\r\n\r\n<p>Request that a business delete any personal data about the consumer that a business has collected.</p>\r\n\r\n<p>Request that a business that sells a consumer&#39;s personal data, not sell the consumer&#39;s personal data.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>GDPR Data Protection Rights</h2>\r\n\r\n<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>\r\n\r\n<p>The right to access &ndash; You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>\r\n\r\n<p>The right to rectification &ndash; You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>\r\n\r\n<p>The right to erasure &ndash; You have the right to request that we erase your personal data, under certain conditions.</p>\r\n\r\n<p>The right to restrict processing &ndash; You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to object to processing &ndash; You have the right to object to our processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to data portability &ndash; You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>Children&#39;s Information</h2>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n\r\n<p>Kerlalottery.online does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>\r\n\r\n<h2>Changes to This Privacy Policy</h2>\r\n\r\n<p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page.</p>\r\n\r\n<p>Our Privacy Policy was created with the help of the .</p>\r\n\r\n<h2>Contact Us</h2>\r\n\r\n<p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.</p>\r\n','','','','','','','','','',''),(3,'5','Terms & Conditions','','','<h1>Terms and Conditions for Kerlalottery.online</h1>\r\n\r\n<h2>Introduction</h2>\r\n\r\n<p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Kerlalottery.online accessible at Kerlalottery.online.</p>\r\n\r\n<p>These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions. These Terms and Conditions have been generated with the help of the .</p>\r\n\r\n<p>Minors or people below 18 years old are not allowed to use this Website.</p>\r\n\r\n<h2>Intellectual Property Rights</h2>\r\n\r\n<p>Other than the content you own, under these Terms, Kerlalottery.online and/or its licensors own all the intellectual property rights and materials contained in this Website.</p>\r\n\r\n<p>You are granted limited license only for purposes of viewing the material contained on this Website.</p>\r\n\r\n<h2>Restrictions</h2>\r\n\r\n<p>You are specifically restricted from all of the following:</p>\r\n\r\n<ul>\r\n	<li>publishing any Website material in any other media;</li>\r\n	<li>selling, sublicensing and/or otherwise commercializing any Website material;</li>\r\n	<li>publicly performing and/or showing any Website material;</li>\r\n	<li>using this Website in any way that is or may be damaging to this Website;</li>\r\n	<li>using this Website in any way that impacts user access to this Website;</li>\r\n	<li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>\r\n	<li>engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>\r\n	<li>using this Website to engage in any advertising or marketing.</li>\r\n</ul>\r\n\r\n<p>Certain areas of this Website are restricted from being access by you and Kerlalottery.online may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p>\r\n\r\n<h2>Your Content</h2>\r\n\r\n<p>In these Website Standard Terms and Conditions, &quot;Your Content&quot; shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant Kerlalottery.online a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</p>\r\n\r\n<p>Your Content must be your own and must not be invading any third-party&#39;s rights. Kerlalottery.online reserves the right to remove any of Your Content from this Website at any time without notice.</p>\r\n\r\n<h2>No warranties</h2>\r\n\r\n<p>This Website is provided &quot;as is,&quot; with all faults, and Kerlalottery.online express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p>\r\n\r\n<h2>Limitation of liability</h2>\r\n\r\n<p>In no event shall Kerlalottery.online, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract. &nbsp; Kerlalottery.online, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p>\r\n\r\n<h2>Indemnification</h2>\r\n\r\n<p>You hereby indemnify to the fullest extent Kerlalottery.online from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p>\r\n\r\n<h2>Severability</h2>\r\n\r\n<p>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>\r\n\r\n<h2>Variation of Terms</h2>\r\n\r\n<p>Kerlalottery.online is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p>\r\n\r\n<h2>Assignment</h2>\r\n\r\n<p>The Kerlalottery.online is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>\r\n\r\n<h2>Entire Agreement</h2>\r\n\r\n<p>These Terms constitute the entire agreement between Kerlalottery.online and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p>\r\n\r\n<h2>Governing Law &amp; Jurisdiction</h2>\r\n\r\n<p>These Terms will be governed by and interpreted in accordance with the laws of the State of in, and you submit to the non-exclusive jurisdiction of the state and federal courts located in in for the resolution of any disputes.</p>\r\n','','','','','','','','','','');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `page` with 3 row(s)
--

--
-- Table structure for table `template`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `sitename` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon_logo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `keyword` mediumtext NOT NULL,
  `analytics` varchar(500) NOT NULL,
  `canonical` varchar(50) NOT NULL,
  `google_site_verification` varchar(60) NOT NULL,
  `og_title` varchar(100) NOT NULL,
  `og_locale` varchar(10) NOT NULL,
  `og_type` varchar(10) NOT NULL,
  `og_description` varchar(250) NOT NULL,
  `og_url` varchar(20) NOT NULL,
  `og_site_name` varchar(20) NOT NULL,
  `article_modified_time` varchar(25) NOT NULL,
  `og_image` varchar(50) NOT NULL,
  `og_image_alt` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `template`
--

LOCK TABLES `template` WRITE;
/*!40000 ALTER TABLE `template` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `template` VALUES (1,'Lottery Tickets','','favicon.png','info@gmail.com','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `template` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `template` with 1 row(s)
--

--
-- Table structure for table `users`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `spass` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `avatar` varchar(60) DEFAULT NULL,
  `userlevel` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `lastip` varchar(100) NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `users` VALUES (1,'admin','$2y$04$OiEscKm.ieKCPGs7QBprnujstnfvUrrUkrVbiTADvFtCi/6X/YzdC','12345678','hajari@gmails.com','Hajari Patel','6_2901216.jpg','admin','2015-05-25 02:05:09','2023-07-13 13:10:20','',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `users` with 1 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Thu, 13 Jul 2023 16:45:41 +0530
