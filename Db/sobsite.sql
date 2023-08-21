-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 21, 2023 at 09:31 AM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u562802411_sobsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_slug` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `text` mediumtext NOT NULL,
  `small_text` varchar(400) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_id`, `blog_title`, `blog_slug`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `text`, `small_text`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '7 reasons you need a digital marketing strategy in 2023', '7-reasons-you-need-a-digital-marketing-strategy-in-2023', 'smiling-woman-with-card-mobile_8401328.webp', '', '', '', '<ul>\r\n	<li>Reach Your Target Audience: A digital marketing strategy can help you identify and target the right audience for your products or services. By creating buyer personas and mapping out your customer journey, you can tailor your messaging and advertising to specific segments of your target audience.</li>\r\n	<li>Stay Competitive: With more and more businesses moving online, having a strong digital marketing strategy is essential to stay ahead of the competition. By keeping up with the latest trends and techniques, you can ensure that your marketing efforts are effective and relevant in the ever-changing digital landscape.</li>\r\n	<li>Build Brand Awareness: Digital marketing offers numerous channels for reaching potential customers, including social media, email marketing, search engine optimization, and paid advertising. By utilizing these channels, you can increase your brand&#39;s visibility and awareness among your target audience.</li>\r\n	<li>Measure and Improve Results: One of the biggest advantages of digital marketing is the ability to track and measure your results in real-time. By analyzing data from your website and social media analytics, you can optimize your campaigns for better performance and ROI.</li>\r\n	<li>Increase Customer Engagement: Digital marketing offers a variety of ways to engage with your customers, from social media interactions to personalized email campaigns. By fostering a strong relationship with your customers, you can increase their loyalty and advocacy for your brand.</li>\r\n	<li>Expand Your Reach: With the global reach of the internet, digital marketing allows you to expand your customer base beyond your local area. By targeting specific regions or countries, you can reach new audiences and grow your business.</li>\r\n</ul>\r\n\r\n<p>Adapt to Changing Consumer Behavior: As consumers increasingly rely on digital channels for their shopping and research needs, businesses that fail to adapt risk falling behind. By having a solid digital marketing strategy in place, you can keep up with changing consumer behavior and ensure your brand remains relevant and competitive.</p>\r\n', '', 0, '2023-07-18 06:05:14', '2023-07-18 16:24:03'),
(2, 2, 'How to Build Effective Small Business SEO Strategy In 2023', 'how-to-build-effective-small-business-seo-strategy-in-2023', 'marketing-young-pretty-cute-business-lady-grey-blazer-office-showing-statistics-team_4712415.webp', '', '', '', '<!-- wp:paragraph -->\r\n<p>Building an effective small business SEO strategy in 2023 involves understanding the latest trends and techniques that can help your website rank higher in search engine results pages (SERPs). Here are some steps you can take to create an effective SEO strategy for your small business:</p>\r\n<!-- /wp:paragraph --><!-- wp:list {\"ordered\":true,\"type\":\"1\"} -->\r\n\r\n<ul>\r\n	<li>Define Your Target Audience: Identify the audience you want to reach with your website and create buyer personas to understand their interests and search habits.</li>\r\n	<li>Conduct Keyword Research: Use keyword research tools to identify the keywords and phrases your target audience is using to search for products or services similar to yours.</li>\r\n	<li>Optimize Your Website: Optimize your website for search engines by incorporating keywords into your website&#39;s metadata, including titles, descriptions, and tags. Make sure your website is mobile-friendly, has fast load times, and is easy to navigate.</li>\r\n	<li>Create High-Quality Content: Create high-quality content that provides value to your target audience. Use your keywords naturally throughout your content and include multimedia, such as images and videos, to make your content more engaging.</li>\r\n	<li>Build Quality Backlinks: Build quality backlinks to your website from reputable sources. Guest posting, broken link building, and social media promotion are all effective ways to build backlinks.</li>\r\n	<li>Monitor Your Performance: Use tools like Google Analytics and Search Console to monitor your website&#39;s performance in search results. Track your rankings for target keywords, monitor traffic and engagement metrics, and adjust your strategy accordingly.</li>\r\n	<li>Stay Up-to-Date: Stay up-to-date with the latest SEO trends and techniques to ensure your strategy remains effective. Attend conferences, read industry publications, and engage with other SEO professionals to stay on top of the latest developments.</li>\r\n</ul>\r\n<!-- /wp:list --><!-- wp:paragraph -->\r\n\r\n<p>By following these steps and implementing an ongoing SEO strategy, your small business can improve its visibility in search results, drive more traffic to its website, and ultimately increase sales and revenue.</p>\r\n<!-- /wp:paragraph -->', '', 0, '2023-07-18 06:10:25', '2023-07-18 16:23:51'),
(3, 3, 'Why These Web Development Technologies and Trends will Rule in 2020', 'why-these-web-development-technologies-and-trends-will-rule-in-2020', 'programming-background-collage_5764228.webp', '', '', '', '<!-- wp:paragraph -->\r\n<p>As an AI language model, I don&#39;t have opinions or predictions, but I can share some insights on the current web development technologies and trends that are gaining popularity and may continue to be relevant in the future.</p>\r\n<!-- /wp:paragraph --><!-- wp:list {\"ordered\":true,\"type\":\"1\"} -->\r\n\r\n<ul>\r\n	<li>Progressive Web Apps (PWA): PWAs are web applications that provide a native app-like experience to users, including push notifications, offline access, and more. PWAs can be accessed through a browser and can be installed on mobile devices, making them a popular choice for businesses looking to provide a mobile-friendly experience.</li>\r\n	<li>Single-page Applications (SPA): SPAs load all the necessary data upfront and then dynamically update the content without requiring a page refresh. They provide a faster and more responsive user experience, making them a popular choice for web applications.</li>\r\n	<li>Serverless Architecture: Serverless architecture is a cloud computing model that allows developers to build and run applications without managing servers or infrastructure. This approach provides scalability and reduces operational costs, making it a popular choice for web development.</li>\r\n	<li>Headless CMS: A headless CMS separates the content management and delivery systems, allowing developers to create custom front-end experiences without being restricted by the CMS. Headless CMS provides flexibility, allowing developers to create unique user experiences.</li>\r\n	<li>Artificial Intelligence and Machine Learning: AI and machine learning technologies are increasingly being used in web development, from chatbots and virtual assistants to personalized content recommendations and predictive analytics.</li>\r\n	<li>Low-Code/No-Code: Low-code and no-code development platforms enable businesses to create web applications without requiring extensive programming knowledge. These platforms are gaining popularity, as they reduce development time and costs.</li>\r\n</ul>\r\n<!-- /wp:list --><!-- wp:paragraph -->\r\n\r\n<p>Overall, these technologies and trends are gaining traction in the web development industry and are likely to continue to be relevant in the future. However, it&#39;s worth noting that web development is a constantly evolving field, and new technologies and trends may emerge that could change the landscape in the years to come.</p>\r\n<!-- /wp:paragraph -->', '', 0, '2023-07-18 06:11:03', '2023-07-18 16:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_title` varchar(60) NOT NULL,
  `cat_slug` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `text` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `cat_title`, `cat_slug`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing', '', '', '', '', '', '', 0, '2023-07-17 11:07:24', '2023-07-17 11:07:24'),
(2, 'Seo', '', '', '', '', '', '', 0, '2023-07-17 11:09:36', '2023-07-17 11:09:36'),
(3, 'Web Development', '', '', '', '', '', '', 0, '2023-07-17 11:09:43', '2023-07-17 11:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `image`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Xrealty', 'xrealty_6183162.webp', 'https://xrealty.ae/', 0, '2023-07-15 11:17:53', '2023-07-15 11:17:53'),
(2, 'Team transformation', 'team-traformation_4934795.webp', 'https://teamtransformation.com/', 0, '2023-07-15 11:18:29', '2023-07-15 11:18:29'),
(3, 'Digitalal mighty', 'digitalalmighty_4560994.webp', 'https://www.digitalalmighty.com/', 0, '2023-07-15 11:19:08', '2023-07-15 11:19:08'),
(4, 'Haris syed', 'harissyed_5799793.webp', 'https://www.harissyed.org/', 0, '2023-07-15 11:19:32', '2023-07-15 11:19:32'),
(5, 'coach transformation', 'CTA_1113255.webp', 'https://coachtransformation.com/', 0, '2023-07-15 11:20:01', '2023-07-15 11:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `number` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `name`, `number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Projects Completed', 705, 0, '2023-07-15 11:07:56', '2023-07-15 11:07:56'),
(2, 'Active clients', 300, 0, '2023-07-15 11:08:29', '2023-07-15 11:08:29'),
(3, 'cups of coffee', 670, 0, '2023-07-15 11:08:49', '2023-07-15 11:08:49'),
(4, 'Happy CLients', 1230, 0, '2023-07-15 11:09:19', '2023-07-15 11:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'How long does it take to get a new website?', 'According to what you need on the website, web development in Dubai can take 4 weeks to 4 months. SOB isthe best web development company in Dubai, we ensure firm deadlines and mint deliverables. There are different platforms (PHP, Laravel, Drupal, & Angular etc.) that we can use to build the website according to the need of the client. Each platform has its own pros and cons in terms of features, usability, and functionality.', 0, '2023-07-20 10:51:16', '2023-07-20 11:04:05'),
(2, 'Do you offer SEO-friendly websites?', 'As one of the best web development leading companies, we offer the best SEO services in Dubai. Thus, we provide SEO-friendly websites with free on-site SEO for one month. Get the quotation by contacting us at info@seooutofthebox.com.  ', 0, '2023-07-20 10:51:44', '2023-07-20 10:51:44'),
(3, 'Could you assist me in redesigning my website?', 'Indeed, we provide best web design services in Dubai UAE and GCC countries. We keep our focus on alignment of the content, images, and call to action buttons according to the nature of the business.', 0, '2023-07-20 10:51:54', '2023-07-20 10:51:54'),
(4, 'Can you provide content for my website?', 'We offer content writing as part of our web design and development services in Dubai. Your website will provide excellent user experience and comply with SEO gold standards. The team of our best content writers makes sure to meet your expectations.', 0, '2023-07-20 10:52:02', '2023-07-20 10:52:02'),
(5, 'How does your design process work?', 'As the top web design and development firm in the UAE, we keep our design process simple and organized. We understand your needs, standards and UIs & UX and incorporate them into rich website.', 0, '2023-07-20 10:52:10', '2023-07-20 10:52:10'),
(6, 'What types of websites have you designed?', 'We have designed and developed several websites from different industries. To name few industries: Business consultancy, health, education, service, travel, ecommerce etc. ', 0, '2023-07-20 10:52:19', '2023-07-20 10:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `text` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `cat_id`, `name`, `url`, `image`, `alt`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Coach Transformation', 'https://coachtransformation.com/', 'coach-transformation_3548427.webp', '', '', 0, '2023-07-15 08:55:36', '2023-07-15 08:55:36'),
(2, 1, 'Landmark Security', 'https://landmarksecurity.ae/', 'landmark-security-1_4757981.webp', '', '', 0, '2023-07-15 09:02:27', '2023-07-15 09:02:27'),
(3, 1, 'Falcon Helitours', 'https://falconhelitours.com/', 'falcon-helitours_3386673.webp', '', '', 0, '2023-07-15 09:02:45', '2023-07-15 09:02:45'),
(4, 1, 'Arab Business Consultant', 'https://arabbusinessconsultant.com/', 'arab-business-consultant_8122896.webp', '', '', 0, '2023-07-15 10:37:30', '2023-07-15 10:37:30'),
(5, 1, 'Suncity Tours', 'https://www.suncitydubai.com/', 'suncity-tours_2490225.webp', '', '', 0, '2023-07-15 10:37:54', '2023-07-15 10:37:54'),
(6, 2, 'Franda Graves', 'https://frandagraves.com/', 'Franda-Graves_4792079.webp', '', '', 0, '2023-07-15 10:38:18', '2023-07-15 10:38:18'),
(7, 2, 'Team Transformation', 'https://teamtransformation.com/', 'team-transformation-1_1604901.webp', '', '', 0, '2023-07-15 10:38:40', '2023-07-15 10:38:40'),
(8, 2, 'Life Coaching Connect', 'https://lifecoachingconnect.com/', 'life-coaching-connect_8139098.webp', '', '', 0, '2023-07-15 10:39:00', '2023-07-15 10:39:00'),
(9, 2, 'Haris Syed', 'https://www.harissyed.org/', 'harissyed_7186391.webp', '', '', 0, '2023-07-15 10:39:22', '2023-07-15 10:39:22'),
(10, 2, 'Vitual Office', 'https://virtualoffice.ae/', 'virual-office_4701222.webp', '', '', 0, '2023-07-15 10:39:43', '2023-07-15 10:39:43'),
(11, 2, 'Digitalal Mighty', 'https://www.digitalalmighty.com/', 'digitalal-mighty-1_834340.webp', '', '', 0, '2023-07-15 10:39:58', '2023-07-15 10:39:58'),
(12, 2, 'Learning Difficulties Professional Association', 'https://ldpassociation.org/', 'Learning-Difficulties-Professional-Association_4939299.webp', '', '', 0, '2023-07-15 10:40:20', '2023-07-15 10:40:20'),
(13, 2, 'Consult Zone', 'https://consultzone.ae/', 'consult-zone-1_2676206.webp', '', '', 0, '2023-07-15 10:40:37', '2023-07-15 10:40:37'),
(14, 4, 'Desert Safari Ras Al Khaimah', 'https://desertsafarirasalkhaimah.com/', 'desert-safari-ras-al-khaimah_2287038.webp', '', '', 0, '2023-07-15 10:41:00', '2023-07-15 10:41:29'),
(15, 4, 'Mariam Habidi', 'http://mariamhabidi.com/', 'mariam-habidi_4104335.webp', '', '', 0, '2023-07-15 10:41:49', '2023-07-15 10:41:49'),
(16, 4, 'The Firststep Coaching', 'https://www.thefirststepcoaching.com/', 'the-firststep-coaching_3414471.webp', '', '', 0, '2023-07-15 10:42:06', '2023-07-15 10:42:06'),
(17, 4, 'xrealty', 'https://xrealty.ae/', 'xrealty_6084860.webp', '', '', 0, '2023-07-15 10:43:11', '2023-07-15 10:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `gallerycat`
--

CREATE TABLE `gallerycat` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `gallerycat`
--

INSERT INTO `gallerycat` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Seo', 'seo', 0, '2023-07-15 11:05:34', '2023-07-15 11:05:34'),
(2, 'SEO & Web Devlopment', 'seo-web-devlopment', 0, '2023-07-15 11:06:06', '2023-07-15 11:06:06'),
(3, 'Web Design', 'web-design', 0, '2023-07-15 11:06:14', '2023-07-15 11:06:14'),
(4, 'Web Development', 'web-development', 0, '2023-07-15 11:06:21', '2023-07-15 11:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `course` varchar(100) NOT NULL,
  `domain1` varchar(50) NOT NULL,
  `domain2` varchar(50) NOT NULL,
  `domain3` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`id`, `name`, `email`, `phone`, `course`, `domain1`, `domain2`, `domain3`, `created_at`, `updated_at`) VALUES
(1, 'Tinuola Iyamah', 'tinuola.akande@gmail.com', 'Nigeria (+234)08022403100', 'SCPC ', 'www.thereyouare.com', 'www.thereyouarejewel.com', 'www.findingyou.com', '2023-08-15 02:27:29', '2023-08-15 02:27:29'),
(2, 'Hiroki Shima', 'hiroki.awesome@gmail.com', 'Japan (+81)9065341074', 'Level2', 'lifecoaching.com', 'lifedevelopment.com', 'lifetransformation.com', '2023-08-15 14:49:42', '2023-08-15 14:49:42'),
(3, 'Silparani', 'Silpa9869@yahoo.com ', 'United Arab Emirates (+971)971585511310', 'Level 1 and Level 2', 'Successspot', 'SUCCESS SPOT ', 'Silparani', '2023-08-15 16:28:21', '2023-08-15 16:28:21'),
(4, 'Jagriti Jagat', 'jagritijagat@gmail.com', 'India (+91)09811395840', 'Level One coaching', 'life coaching', 'confidence coaching', 'relationship coaching', '2023-08-15 22:11:07', '2023-08-15 22:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `parent_id` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `title` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `class` varchar(255) NOT NULL DEFAULT '',
  `position` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `group_id` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `title`, `url`, `class`, `position`, `group_id`, `status`) VALUES
(1, 0, 'About Us', 'about-us', '1', 1, 1, 'Active'),
(5, 0, 'Contact Us', 'contact-us', '1', 6, 1, 'Active'),
(4, 0, 'Blog', 'blog', '1', 4, 1, 'Active'),
(3, 0, 'Portfolio', 'portfolio', '1', 3, 1, 'Active'),
(2, 0, 'Services', 'services', '1', 2, 1, 'Active'),
(11, 2, 'Digital Marketing', 'service/digital-marketing', '3', 1, 1, 'Active'),
(12, 2, 'Web Development', 'service/web-development', '3', 2, 1, 'Active'),
(13, 2, 'App Development', 'service/app-development', '1', 3, 1, 'Active'),
(14, 2, 'Online Branding', 'service/online-branding', '1', 4, 1, 'Deactive'),
(15, 0, 'faqs', 'faqs', '3', 5, 1, 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `menu_group`
--

CREATE TABLE `menu_group` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu_group`
--

INSERT INTO `menu_group` (`id`, `title`) VALUES
(1, 'Main Menu'),
(2, 'Quick Link');

-- --------------------------------------------------------

--
-- Table structure for table `menu_type`
--

CREATE TABLE `menu_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu_type`
--

INSERT INTO `menu_type` (`id`, `name`, `status`) VALUES
(1, 'Page', 'Active'),
(2, 'Url', 'Active'),
(3, 'External Page', 'Active'),
(4, 'Category', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `small_text` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `name`, `heading`, `link`, `small_text`, `image`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Services Home Title', 'Services Home Title', '', '', '', '<h2>We unlock the secret to achieving an extraordinary ranking result of 100%!<br />\r\nSolutions<span class=\"dot\">.</span></h2>\r\n\r\n<div class=\"lower-text\">Harness the power of SEO and think outside the box to dominate search engine rankings. Discover the untapped potential of your website as we guide you through the dynamic world of <strong>search engine optimization dubai UAE</strong>. Say goodbye to mediocre rankings and hello to the pinnacle of success.</div>\r\n\r\n<div class=\"lower-text\">Join our exclusive community today and embark on a journey towards unparalleled visibility, increased web traffic, and skyrocketing success. The future of your online branding presence starts here at SEO Out The Box.</div>\r\n', 0, '2023-07-14 07:19:15', '2023-07-18 18:09:35'),
(2, 'Home about', 'About', '', '', '', '<div class=\"sec-title\">\r\n<h2>Deliver optimal remedies for enhancing your business in 2023.</h2>\r\n\r\n<div class=\"lower-text\">We are certain about providing quality services to our clients while supporting our team with the best training.</div>\r\n</div>\r\n\r\n<div class=\"text\">\r\n<p data-kb-block=\"kb-adv-heading_3db312-b5\">SOB is a company specializing in digital transformation that offers a range of services aimed at establishing your brand identity by digitally defining your ideas, and focusing on expanding your product and service offerings in the constantly evolving digital market. By doing so, your brand&rsquo;s awareness, sales, and desirability can be increased.</p>\r\n</div>\r\n\r\n<div class=\"text clearfix\">\r\n<div class=\"link-box\"><a class=\"theme-btn btn-style-one\" href=\"about-us\"><i class=\"btn-curve\"></i> <span class=\"btn-title\">Discover More</span> </a></div>\r\n</div>\r\n', 0, '2023-07-15 01:52:44', '2023-07-19 15:21:56'),
(3, 'What we do left', 'What we do left', '', '', '', '<div class=\"sec-title\">\r\n<h2>WE SHAPE THE PERFECT<br />\r\nSOLUTIONS.<span class=\"dot\">.</span></h2>\r\n</div>\r\n\r\n<div class=\"featured-block clearfix\">\r\n<div class=\"image\"><img alt=\"\" src=\"asstes/images/resource/featured-image-4.webp\" /></div>\r\n\r\n<div class=\"text\">Web development services encompass a wide range of activities involved in designing, creating, and maintaining websites. Whether you need a simple static website or a complex web application, professional web development services can help you achieve your goals.</div>\r\n</div>\r\n\r\n<div class=\"progress-box\">\r\n<div class=\"bar-title\">Web Designing &amp; Development</div>\r\n\r\n<div class=\"bar\">\r\n<div class=\"bar-inner count-bar\" data-percent=\"99%\">\r\n<div class=\"count-box\"><span class=\"count-text\" data-speed=\"1500\" data-stop=\"99\">0</span>%</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"progress-box py-2\">\r\n<div class=\"bar-title\">Search Engine Optimization</div>\r\n\r\n<div class=\"bar\">\r\n<div class=\"bar-inner count-bar bg-success\" data-percent=\"98%\">\r\n<div class=\"count-box\"><span class=\"count-text \" data-speed=\"1500\" data-stop=\"98\">0</span>%</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"progress-box py-2\">\r\n<div class=\"bar-title\">Digital Marketing</div>\r\n\r\n<div class=\"bar\">\r\n<div class=\"bar-inner count-bar bg-danger\" data-percent=\"95%\">\r\n<div class=\"count-box\"><span class=\"count-text \" data-speed=\"1500\" data-stop=\"95\">0</span>%</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"progress-box py-2\">\r\n<div class=\"bar-title\">Application Development</div>\r\n\r\n<div class=\"bar\">\r\n<div class=\"bar-inner count-bar bg-info\" data-percent=\"80%\">\r\n<div class=\"count-box\"><span class=\"count-text \" data-speed=\"1500\" data-stop=\"80\">0</span>%</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 0, '2023-07-15 01:55:21', '2023-08-03 14:57:44'),
(4, 'What we do rigth', 'What we do rigth(faq)', '', '', '', '<div class=\"faq-box\">\r\n<ul class=\"accordion-box accordion-box__dark clearfix\"><!--Block-->\r\n	<li class=\"accordion block active-block\">\r\n	<div class=\"acc-btn active\"><span class=\"count\">1.</span> Can website traffic impact search engine rankings?</div>\r\n\r\n	<div class=\"acc-content current\">\r\n	<div class=\"content\">\r\n	<div class=\"text\">The reason behind a sudden surge in traffic is determined by algorithms before deciding whether it&#39;s indicative of valuable content on your website. For example, did an authoritative website share one of your pieces of content, resulting in an increase in referral traffic? Alternatively, was it the result of bots or spammers repeatedly searching for your business on Google and clicking on the link to artificially inflate your traffic?</div>\r\n	</div>\r\n	</div>\r\n	</li>\r\n	<!--Block-->\r\n	<li class=\"accordion block\">\r\n	<div class=\"acc-btn\"><span class=\"count\">2.</span> Why is it that SEO takes time to yield results?</div>\r\n\r\n	<div class=\"acc-content\">\r\n	<div class=\"content\">\r\n	<div class=\"text\">Search engine optimization (SEO) is a process that requires time and effort because it&#39;s no longer possible to manipulate search engine algorithms using black-hat techniques. In recent years, search engine algorithms have become more sophisticated, with a focus on providing users with the most relevant and high-quality results based on their search query. Unlike the early days of SEO, where cramming a webpage with keywords and building as many links as possible could yield fast results, such tactics can now do more harm than good.</div>\r\n	</div>\r\n	</div>\r\n	</li>\r\n	<!--Block-->\r\n	<li class=\"accordion block\">\r\n	<div class=\"acc-btn\"><span class=\"count\">3.</span> What factors carry the most weight in determining a website&#39;s Google ranking?</div>\r\n\r\n	<div class=\"acc-content\">\r\n	<div class=\"content\">\r\n	<div class=\"text\">\r\n	The exact criteria that determine a webpage\'s ranking (its visibility and position) in search results are known only to Google algorithms, and there are reportedly more than 200 ranking factors that come into play.\r\n<br>\r\nAs the way people search for information has evolved, so has SEO. Factors like device type, location, and search history can all influence search results, which means that different users may see different results for the same keyword. While rankings can be a useful gauge of a keyword\'s performance, it\'s important to keep these factors in mind.\r\n<br>\r\nGiven the multitude of ranking factors, it can be challenging to determine which aspects of SEO to prioritize. However, there are some proven best practices that can have a significant impact on search rankings. By focusing on these tried and tested tactics, businesses can improve their chances of ranking well in search results and driving more traffic to their websites.</div>\r\n	</div>\r\n	</div>\r\n	</li>\r\n	<!--Block-->\r\n	<li class=\"accordion block\">\r\n	<div class=\"acc-btn\"><span class=\"count\">4.</span>  SEO vs. PPC: Which yields superior results?</div>\r\n\r\n	<div class=\"acc-content\">\r\n	<div class=\"content\">\r\n	<div class=\"text\">Both SEO and PPC are essential for team success. SEO establishes domain authority and online presence, while PPC targets prospects by demographic, behaviors, or keywords. The two work together to create a well-rounded online strategy.</div>\r\n	</div>\r\n	</div>\r\n	</li>\r\n	<!--Block-->\r\n	<li class=\"accordion block\">\r\n	<div class=\"acc-btn\"><span class=\"count\">5.</span>  What\'s the top-rated SEO software to use?</div>\r\n\r\n	<div class=\"acc-content\">\r\n	<div class=\"content\">\r\n	<div class=\"text\">There are several top-rated SEO software options available in the market, each with their unique features and benefits. Some of the popular ones include Ahrefs, SEMrush, Moz, and Google Analytics. These tools offer a range of functionalities such as keyword research, backlink analysis, on-page optimization, and site audit. The choice of software ultimately depends on the specific needs and budget of the user.</div>\r\n	</div>\r\n	</div>\r\n	</li>\r\n</ul>\r\n</div>\r\n', 0, '2023-07-15 01:56:15', '2023-07-17 11:34:08'),
(5, 'Address', 'Address', '', 'Saheel Tower 1 - 28th St - Al Nahda 1 - Dubai - United Arab Emirates', '', '', 0, '2023-07-15 06:27:39', '2023-07-15 06:27:39'),
(6, 'Phone', 'Phone', '', '+971 56 547 2007', '', '', 0, '2023-07-15 06:27:55', '2023-08-03 13:34:10'),
(7, 'Email', 'Email address', '', 'info@seooutofthebox.com', '', '', 0, '2023-07-17 11:52:46', '2023-07-17 11:52:46'),
(8, 'Footer About', 'Footer About', '', 'SOB is a company specializing in digital transformation that offers a range of services aimed at establishing your brand identity by digitally defining your ideas,', '', '', 0, '2023-07-17 11:58:27', '2023-07-17 11:58:27'),
(9, 'Cta Terms & condition', 'TERMS & CONDITIONS', 'form/free-website', 'Claim your website now!', '', '<ul class=\"about-seven__list list-unstyled\">\r\n	<li class=\"text-white\"><i class=\"flaticon-checked\"></i>This is an <strong>exclusive offer </strong>and is only applicable <strong>to CTA&rsquo;s students</strong>.</li>\r\n	<li class=\"text-white\"><i class=\"flaticon-checked\"></i>CTA to provide enrollment confirmation of the student.</li>\r\n	<li class=\"text-white\">We offer:\r\n	<ul>\r\n		<li class=\"text-white\" style=\"list-style: circle; list-style-position: inside;\">A certified coach will provide a free 30-minute&nbsp;session on coaching business development.</li>\r\n		<li class=\"text-white\" style=\"list-style: circle; list-style-position: inside;\">A free 3-page website based on your content, creatives and logo (please supply soft copies) -&nbsp;Excluding integration of any major functionalities such as (Calendar, Payment gateway, etc...).</li>\r\n		<li class=\"text-white\" style=\"list-style: circle; list-style-position: inside;\">Free domain (.com) name for a year</li>\r\n		<li class=\"text-white\" style=\"list-style: circle; list-style-position: inside;\">Free hosting for a year</li>\r\n	</ul>\r\n	</li>\r\n	<li class=\"text-white\"><i class=\"flaticon-checked\"></i>Modification fee per web page amounts to $30 (up to 3 changes per page) (The fee&nbsp;may vary depending on the scope of work)&nbsp;</li>\r\n	<li class=\"text-white\"><i class=\"flaticon-checked\"></i>Ownership of website credentials remains with SOB and are&nbsp;transferable to the student (client) at an administrative fee after 12 months, alternatively rental packages are available for website to remain active</li>\r\n	<li class=\"text-white\"><i class=\"flaticon-checked\"></i>Client feedback on&nbsp;webpage proofs&nbsp;are required within 7 days of supply, any delay&nbsp;will lead to closure of the project. To reinstate the project will amount to a fee of $100.</li>\r\n</ul>\r\n', 0, '2023-08-01 17:56:48', '2023-08-08 18:56:18'),
(10, 'CTA Offer', 'Offer particulars', 'form/free-website', 'Discover More', '', '<ul class=\"about-seven__list list-unstyled\">\r\n	<li><i class=\"flaticon-checked\"></i>Free domain booking (only for .com domain) for one year</li>\r\n	<li><i class=\"flaticon-checked\"></i>Free hosting for one year</li>\r\n	<li><i class=\"flaticon-checked\"></i>A three pages website (home/about me/ contact us). Further pages on demand</li>\r\n</ul>\r\n', 0, '2023-08-01 18:00:35', '2023-08-08 18:55:54'),
(11, 'CTA Header Line', 'Heading', '', 'SEO OUT OF THE BOX PROPOSAL In collaboration with COACH TRANSFORMATION ACADEMY', 'sob.jpg', ' <h4 class=\"text-center\">Proposing to offer the points below to all CTA’s\r\n                currently enrolled students globally.</h4>', 0, '2023-08-01 18:04:55', '2023-08-01 18:07:29'),
(12, 'CTA Form Content', 'Home Content', '', '', 'bg_6981715.png', '<h1 class=\"main-heading\">&nbsp;</h1>\r\n\r\n<p>&nbsp;</p>\r\n', 0, '2023-07-08 05:55:36', '2023-08-08 13:40:51'),
(13, 'Home Page SEO Content', 'SEO Content', '', '', '', '<section class=\"service-eight bg-dark\">\r\n<div class=\"auto-container\">\r\n<div class=\"sec-title-eight text-center\">\r\n<p class=\"sec-title-eight__text\">Search Engine Optimization</p>\r\n<!-- /.sec-title-eight__text -->\r\n\r\n<h2 class=\"sec-title-eight__title text-light\">What do SEO Companies do?</h2>\r\n<!-- /.sec-title-eight__title --></div>\r\n<!-- /.sec-title-eight -->\r\n\r\n<div class=\"row\">\r\n<div class=\"col-md-12 col-lg-12 wow fadeInLeft animated\" data-wow-duration=\"1500ms\" style=\"visibility: visible; animation-duration: 1500ms; animation-name: fadeInLeft;\">\r\n<div class=\"service-eight__card bg-dark\">\r\n<div class=\"service-eight__card__inner text-light\">\r\n<p>Let&#39;s say you have a website selling exquisite, hand-made candles. Apart from an eye-catchy website, you require something to draw an audience to this website. And not just any audience, the audience that finds these products relevant. The point of making your product or services visible to get them listed on top searches is what an <strong>SEO company Dubai UAE</strong>&nbsp;does. SEO Out of the Box has helped businesses across various industries and of all sizes achieve their digital marketing goals. Our results-driven approach has helped us build a reputation as one of the leading SEO companies in Dubai. We are committed to going above and beyond for our clients. We&#39;ve also helped many businesses set up their <strong>local SEO Dubai</strong> profiles and thrive. Many of our clients are small and local businesses with large footfall arriving from &quot;SEO services near me&quot; and &quot;SEO business near me&quot; on local search engine services in Dubai UAE. Hence, maintaining offline profiles for them is as crucial as online stores. And we offer them all support they need to help them reach to the right customers Do you seek &#39;top SEO services near me&#39; or perhaps &#39;SEO businesses near me&#39; as well? You&#39;ve landed in the right spot!</p>\r\n\r\n<p>Get ahead of the competition with SEO Out of the Box.</p>\r\n</div>\r\n<!-- /.service-eight__card__inner --></div>\r\n<!-- /.service-eight__card --></div>\r\n<!-- /.col-md-6 col-lg-3 --></div>\r\n<!-- /.row --></div>\r\n<!-- /.auto-container -->\r\n\r\n<div class=\"auto-container\">\r\n<div class=\"sec-title-eight text-center\">\r\n<h2 class=\"sec-title-eight__title text-light\">Do SEO Companies Really Work?</h2>\r\n<!-- /.sec-title-eight__title --></div>\r\n<!-- /.sec-title-eight -->\r\n\r\n<div class=\"row\">\r\n<div class=\"col-md-12 col-lg-12 wow fadeInLeft animated\" data-wow-duration=\"1500ms\" style=\"visibility: visible; animation-duration: 1500ms; animation-name: fadeInLeft;\">\r\n<div class=\"service-eight__card bg-dark\">\r\n<div class=\"service-eight__card__inner text-light\">\r\n<p>If you want to keep up with the latest trends in digital marketing, SEO is your best tool to expand your business. SEO Ouf the Box is proud to be Dubai&#39;s most trusted <strong>SEO agency Dubai </strong>among local and international clientele. Our team constantly evolves and adapts our strategies, tools, and skillsets to ensure our clients stay ahead of their game. Whether you&#39;re a small business looking to improve your online visibility or a large corporation seeking to strengthen your brand, we have the expertise and the know-how to help you achieve your goals. So, yes, <strong>SEO services in Dubai UAE</strong>&nbsp;are important to reach international and local SEO Dubai audiences. And with SEO Out of the Box, you get the best SEO services in UAE&nbsp;and results. Get in touch with us now to discover how we can assist you in achieving online branding success.</p>\r\n</div>\r\n<!-- /.service-eight__card__inner --></div>\r\n<!-- /.service-eight__card --></div>\r\n<!-- /.col-md-6 col-lg-3 --></div>\r\n<!-- /.row --></div>\r\n<!-- /.auto-container -->\r\n\r\n<div class=\"auto-container\">\r\n<div class=\"sec-title-eight text-center\">\r\n<h2 class=\"sec-title-eight__title text-light\">#1 SEO Agency in Dubai</h2>\r\n<!-- /.sec-title-eight__title --></div>\r\n<!-- /.sec-title-eight -->\r\n\r\n<div class=\"row\">\r\n<div class=\"col-md-12 col-lg-12 wow fadeInLeft animated\" data-wow-duration=\"1500ms\" style=\"visibility: visible; animation-duration: 1500ms; animation-name: fadeInLeft;\">\r\n<div class=\"service-eight__card bg-dark\">\r\n<div class=\"service-eight__card__inner text-light\">\r\n<p>Our <strong>Dubai SEO expert</strong> team is the backbone of our company. They love what they do and always strive to deliver tangible results. Search Engine Optimization Dubai, content marketing, website design and development, social media management, Google My Business creation and maintenance, and custom pay-per-click advertising - we offer you a complete package to help you start or take your business to the next level it deserves. With years of experience in the industry, we have helped countless companies across diverse sectors, including real estate, security solutions, infrastructure, hospitality, aviation tours, tourism, corporate training, coaches, business formations, cleaning services, and more. Are you seeking the <strong>best SEO agency in Dubai</strong><strong> </strong>to achieve your digital marketing goals? SEO Out of the Box is trusted by thousands of individuals, earning us a reputation as one of the leading <strong>SEO companies in Dubai</strong>. Ready to take the leap?</p>\r\n</div>\r\n<!-- /.service-eight__card__inner --></div>\r\n<!-- /.service-eight__card --></div>\r\n<!-- /.col-md-6 col-lg-3 --></div>\r\n<!-- /.row --></div>\r\n<!-- /.auto-container --></section>\r\n', 0, '2023-08-03 13:06:16', '2023-08-08 18:30:57'),
(14, 'Home Content After Banner', 'SEO content', '', '', '', '<section class=\"call-to-section-four\">\r\n<div class=\"auto-container\">\r\n<h3 class=\"call-to-section-four__title\">Welcome to SEO Out of the Box - your one-stop<strong> SEO company in Dubai UAE </strong>to achieve higher results efficiently in a shorter span. No fluff, no black hat, genuine work quality - is what helps us keep businesses achieve their online goals without compromising on their brand voice.</h3>\r\n</div>\r\n<!-- /.auto-container --></section>\r\n', 0, '2023-08-03 13:10:25', '2023-08-08 18:56:44'),
(15, 'Home Content After about', 'Seo Content ', '', '', '', '<section class=\"call-to-section-four\">\r\n<div class=\"auto-container\">\r\n<p class=\"text-white\">Pioneers in the industry, our <strong>SEO Expert Dubai UAE</strong> team of experts works closely with you to understand your brand, your target audience, and your business objectives to create tailor-made solutions that drive higher results. Transparent and collaborative experience is our main mantra, helping our clients stay informed about every decision made in the process. Whether you need content writing or website designing services, SEO Out of the Box offers you the <strong>best SEO services in Dubai.</strong></p>\r\n</div>\r\n<!-- /.auto-container --></section>\r\n', 0, '2023-08-03 13:11:41', '2023-08-08 18:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `mid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `og_title` varchar(100) NOT NULL,
  `og_locale` varchar(10) NOT NULL,
  `og_type` varchar(10) NOT NULL,
  `og_description` varchar(250) NOT NULL,
  `og_url` varchar(20) NOT NULL,
  `og_site_name` varchar(20) NOT NULL,
  `og_image` varchar(100) NOT NULL,
  `og_image_alt` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `mid`, `title`, `heading`, `image`, `text`, `meta_keywords`, `meta_description`, `og_title`, `og_locale`, `og_type`, `og_description`, `og_url`, `og_site_name`, `og_image`, `og_image_alt`) VALUES
(1, '1', 'About Us - Seo Out Of The Box | SEO Agency in Dubai UAE, USA', 'About Us', '', '<div class=\"row clearfix\">\r\n<div class=\"left-col col-lg-6 col-md-12 col-sm-12\">\r\n<div class=\"inner wow fadeInLeft animated animated\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\" style=\"visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;\">\r\n<div class=\"image-box\"><img alt=\"\" src=\"/public/editor/files/Uploads/page/digital-marketing.jpg\" /></div>\r\n</div>\r\n</div>\r\n<!--Right Column-->\r\n\r\n<div class=\"right-col col-lg-6 col-md-12 col-sm-12\">\r\n<div class=\"inner\">\r\n<div class=\"sec-title\">\r\n<h2>Deliver optimal remedies for enhancing your business in 2023<span class=\"dot\">.</span></h2>\r\n\r\n<div class=\"lower-text\">SOB is a company specializing in digital transformation that offers a range of services aimed at establishing your brand identity by digitally defining your ideas, and focusing on expanding your product and service offerings in the constantly evolving digital market. By doing so, your brand&rsquo;s awareness, sales, and desirability can be increased.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row py-4\">\r\n<h3 class=\"text-center text-white\">HOW WE WORKS</h3>\r\n\r\n<div class=\"col-md-12 col-lg-4\">\r\n<div class=\"how-it-works-card text-center\">\r\n<div class=\"how-it-works-card__inner\"><i class=\"how-it-works-card__icon flaticon-development1\"></i>\r\n<h3 class=\"how-it-works-card__title\"><a href=\"#\">meet experts</a></h3>\r\n<!-- /.how-it-works-card__title -->\r\n\r\n<p class=\"how-it-works-card__text\">we are dedicated to connecting you with the finest minds and professionals from various fields to enrich your knowledge, solve your problems, and guide you towards success.</p>\r\n<!-- /.how-it-works-card__link --></div>\r\n<!-- /.how-it-works-card__inner --></div>\r\n<!-- /.how-it-works-card --></div>\r\n<!-- /.col-md-12 col-lg-4 -->\r\n\r\n<div class=\"col-md-12 col-lg-4\">\r\n<div class=\"how-it-works-card text-center\">\r\n<div class=\"how-it-works-card__inner\"><i class=\"how-it-works-card__icon flaticon-vector\"></i>\r\n<h3 class=\"how-it-works-card__title\"><a href=\"#\">business ideas</a></h3>\r\n<!-- /.how-it-works-card__title -->\r\n\r\n<p class=\"how-it-works-card__text\">Are you an aspiring entrepreneur looking to venture into the world of business? Are you searching for innovative and profitable business ideas to kickstart your entrepreneurial journey</p>\r\n<!-- /.how-it-works-card__link --></div>\r\n<!-- /.how-it-works-card__inner --></div>\r\n<!-- /.how-it-works-card --></div>\r\n<!-- /.col-md-12 col-lg-4 -->\r\n\r\n<div class=\"col-md-12 col-lg-4\">\r\n<div class=\"how-it-works-card text-center\">\r\n<div class=\"how-it-works-card__inner\"><i class=\"how-it-works-card__icon flaticon-monitoring\"></i>\r\n<h3 class=\"how-it-works-card__title\"><a href=\"#\">get success</a></h3>\r\n<!-- /.how-it-works-card__title -->\r\n\r\n<p class=\"how-it-works-card__text\">Success starts with the right mindset. At &quot;Get Success,&quot; we focus on empowering individuals to develop a positive and growth-oriented mindset that fosters resilience, creativity, and the willingness to learn from failures.</p>\r\n<!-- /.how-it-works-card__link --></div>\r\n<!-- /.how-it-works-card__inner --></div>\r\n<!-- /.how-it-works-card --></div>\r\n<!-- /.col-md-12 col-lg-4 --></div>\r\n\r\n<div class=\"row clearfix\">\r\n<div class=\"left-col col-lg-6 col-md-12 col-sm-12\">\r\n<div class=\"inner wow fadeInLeft animated animated\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\" style=\"visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;\">\r\n<div class=\"image-box\"><img alt=\"\" src=\"/public/editor/files/Uploads/page/about-us_3819841.jpg\" /></div>\r\n</div>\r\n</div>\r\n<!--left Column-->\r\n\r\n<div class=\"right-col col-lg-6 col-md-12 col-sm-12\">\r\n<div class=\"inner\">\r\n<div class=\"sec-title\">\r\n<h2>Digital Marketing Agency in Dubai, UAE<span class=\"dot\">.</span></h2>\r\n\r\n<div class=\"lower-text\">\r\n<p>We are a tech-savvy, creative digital marketing firm offering solutions to reshape your business&rsquo;s digital strategies.</p>\r\n\r\n<p>We have developed unique brand stories for clients all around the world thanks to our successful branch in Dubai.</p>\r\n\r\n<p>We will work to digitally transform your company&rsquo;s brand image with our digital marketing agency in Dubai in order to raise awareness, clearly define your ideas, and aim to deliver your services and products to the market at the appropriate time.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 'About SEO Out of the Box, About SOB, Seo Out Of The Box', 'About SOB, About SEO Out of the Box, Seo Out Of The Box, SEO Agency in Dubai, SEO Agency in UAE, SEO Agency in USA', 'About Us - Seo Out Of The Box | SEO Agency in Dubai UAE, USA', '', '', 'About SOB, About SEO Out of the Box, Seo Out Of The Box, SEO Agency in Dubai, SEO Agency in UAE, SEO Agency in USA', 'https://www.seooutof', 'Seo Out Of The Box', 'https://www.seooutofthebox.com/public/editor/files/Uploads/page/digital-marketing.jpg', 'About SEO Out of the Box'),
(2, '3', 'SEOOutOfTheBox Portfolio | Check Out Our Customer Projects Here', 'Portfolio', '', '', 'SEOOutOfTheBox Portfolio, Our Portfolio, seo out of the box project', 'SEOOutOfTheBox worked on many clients\' projects with our premium services and got 100% customer satisfaction from the project. You can see our project work experience, here we added some client websites just click on it ', '', '', '', '', '', '', '', ''),
(3, '4', 'Web, App, Digital Marketing & Technology Updates Blog - SEOOutOfTheBox', 'Blog', '', '', 'Our Blog, SEOOutOfTheBox Blog, Technology Blog, Digital Marketing Blog, etc.', 'Stay updated with Webdesign, Development, E-commerce, mobile app, SEO, Digital Marketing, and technology news updates on our official SeoOutOfTheBox Blog Page.', 'Web, App, Digital Marketing & Technology Updates Blog - SEOOutOfTheBox', '', '', 'Stay updated with Webdesign, Development, E-commerce, mobile app, SEO, Digital Marketing, and technology news updates on our official SeoOutOfTheBox Blog Page.', '', 'Seo Out Of The Box', 'https://www.seooutofthebox.com/public/editor/files/Uploads/other/main.jpg', 'SeoOutOfTheBox Blog Page'),
(4, '5', 'Contact SEOOutOfTheBox - Have Any Query for Web Development or Marketing', 'Contact Us', '', '', 'SEOOutOfTheBox Contact Us,Our Contact Us, seo out of the box project', 'If you have any query and would like suggestions on developing and seo marketing your website or app just contact our experts. Reach us to SEOOutOfTheBox and get the best quote from us.', 'Contact SEOOutOfTheBox - Have Any Query for Web Development or Marketing', '', '', 'If you have any query and would like suggestions on developing and seo marketing your website or app just contact our experts. Reach us to SEOOutOfTheBox and get the best quote from us.', '', 'seooutofthebox', 'https://www.seooutofthebox.com/public/editor/files/Uploads/other/main.jpg', 'Contact SEOOutOfTheBox'),
(5, '2', 'Custom Web Development & SEO Services Company - Seooutofthebox', 'Services', '', '', 'Our services, web development services, web development agency', 'Seooutofthebox offers digital marketing SEO and web development design services in Dubai UAE. We digital transformation solutions for startups and enterprises.', 'Custom Web Development & SEO Services Company - Seooutofthebox', '', '', 'Seooutofthebox offers digital marketing SEO and web development design services in Dubai UAE. We digital transformation solutions for startups and enterprises.', '', 'Seo Out Of The Box', 'https://www.seooutofthebox.com/public/editor/files/Uploads/other/main.jpg', 'Custom Web Development & SEO Services Company');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `service_title` varchar(60) NOT NULL,
  `service_slug` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_front` varchar(100) DEFAULT NULL,
  `front_text` text DEFAULT NULL,
  `icon` varchar(20) NOT NULL,
  `sub_text` varchar(100) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `og_title` varchar(100) DEFAULT NULL,
  `og_locale` varchar(100) DEFAULT NULL,
  `og_type` varchar(100) DEFAULT NULL,
  `og_description` varchar(250) DEFAULT NULL,
  `og_url` varchar(100) DEFAULT NULL,
  `og_site_name` varchar(20) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `og_image_alt` varchar(70) DEFAULT NULL,
  `text` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `service_title`, `service_slug`, `image`, `image_front`, `front_text`, `icon`, `sub_text`, `meta_title`, `meta_description`, `meta_keywords`, `og_title`, `og_locale`, `og_type`, `og_description`, `og_url`, `og_site_name`, `og_image`, `og_image_alt`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing', 'Digital<br> Marketing', 'digital-marketing', 'digital-marketing_8490689.webp', 'digital-marketing.webp', '<p>SEO Out The Box prides itself on consistently delivering exceptional results for our esteemed clientele. Our comprehensive suite of <strong>digital marketing services in Dubai UAE</strong> is designed to empower businesses, helping them create a formidable online branding presence, forge meaningful connections with their target audience, and ultimately drive remarkable sales growth.</p>\r\n<strong>Our Range of Digital Marketing Services Includes:</strong>\r\n\r\n<ul>\r\n	<li>Search Engine Optimization (SEO)</li>\r\n	<li>Social Media Optimization (SMO)</li>\r\n	<li>Pay-Per-Click Advertising (PPC)</li>\r\n	<li>Online Reputation Management</li>\r\n</ul>\r\n', 'digital-marketing', 'Unleash the Power of Digital Marketing with the Leading Agency', 'Best Digital Marketing Services in Dubai UAE - SeoOutOfTheBox', 'Are you looking to find digital marketing agencies in Dubai UAE? SeoOutOfTheBox is a leading Digital Marketing Service and we are offering SEO, SMO, PPC, ORM Services. Get in touch with us.', 'digital marketing company in dubai, digital marketing services dubai, marketing agency dubai, digital marketing services in uae, digital marketing dubai, digital marketing uae', 'Best Digital Marketing Services in Dubai UAE - SeoOutOfTheBox', '', 'Website', 'Are you looking to find digital marketing agencies in Dubai UAE? SeoOutOfTheBox is a leading Digital Marketing Service and we are offering SEO, SMO, PPC, ORM Services. Get in touch with us.', 'https://www.seooutof', 'Seo Out Of The Box', 'https://www.seooutofthebox.com/public/editor/files/Uploads/other/digital-marketing-og.jpg', 'Digital Marketing Services in Dubai UAE', '<h3>Website Development</h3>\r\n\r\n<p>In this modern era of digital dominance, establishing a robust online presence is paramount for businesses seeking exponential growth. We specialize in providing top-tier seo services in UAE that propel businesses toward unparalleled success.</p>\r\n\r\n<p>SEO Out The Box prides itself on consistently delivering exceptional results for our esteemed clientele. Our comprehensive suite of digital marketing services in Dubai UAE is designed to empower businesses, helping them create a formidable online branding presence, forge meaningful connections with their target audience, and ultimately drive remarkable sales growth.</p>\r\n\r\n<div class=\"featured\">\r\n<div class=\"row clearfix\">\r\n<div class=\"image-col col-md-6 col-sm-12\">\r\n<div class=\"image\"><img alt=\"\" src=\"/public/editor/files/Uploads/services/featured-image-15.jpg\" /></div>\r\n</div>\r\n\r\n<div class=\"text-col col-md-6 col-sm-12\">\r\n<div class=\"inner\">\r\n<h4>Our Range of Digital Marketing Services Includes:</h4>\r\n\r\n<ul>\r\n	<li>Search Engine Optimization (SEO)</li>\r\n	<li>Social Media Optimization (SMO)</li>\r\n	<li>Pay-Per-Click Advertising (PPC)</li>\r\n	<li>Email Marketing</li>\r\n	<li>Online Reputation Management</li>\r\n	<li>Content Marketing</li>\r\n	<li>Mobile App Marketing</li>\r\n	<li>App Store Optimization (ASO)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 0, '2023-07-14 07:33:52', '2023-08-03 16:24:23'),
(2, 'Web Development', 'Web<br> Devlopment', 'web-development', 'web-development_4554748.webp', 'web-development.webp', '<p>At SEO Out Of The Box, we specialize in crafting exceptional websites that elevate businesses, establish credibility, and effectively showcase their products or services. With our team of seasoned developers, we bring your vision to life with <strong>custom websites development services in Dubai</strong> that possess the following remarkable qualities.</p>\r\n\r\n<ul>\r\n	<li>Responsive and User-Friendly</li>\r\n	<li>Aesthetically Pleasing and Functionally Superior</li>\r\n	<li>Conversion Optimization</li>\r\n	<li>Tailored Solutions to Empower Your Brand</li>\r\n</ul>\r\n', 'responsive', 'Amplify Your Online Presence with Expert Development Services Dubai', 'Customized Development Company in Dubai UAE - SEOOutOfTheBox', 'SEO Out Of The Box is leading Customized Development Company in Dubai UAE. We are offering Web Design & PHP, Wordpress, Laravel Development services.', 'development company, development firm, development agency', 'Customized Development Company in Dubai UAE - SEOOutOfTheBox', '', 'website', 'SEO Out Of The Box is leading Customized Development Company in Dubai UAE. We are offering Web Design & PHP, Wordpress, Laravel Development services.', '', 'Seo Out Of The Box', 'https://www.seooutofthebox.com/public/editor/files/Uploads/other/web-development-og.jpg', 'website development company in dubai uae', '<h3>Website Development</h3>\r\nAt SEO Out of The Box a <strong>web development company in Dubai, UAE</strong>, we specialize in crafting exceptional websites that elevate businesses, establish credibility, and effectively showcase their products or services. With our team of seasoned developers, we bring your vision to life with custom websites development services in Dubai that possess the following remarkable qualities:<br />\r\n<br />\r\nResponsive and User-Friendly: Your website will seamlessly adapt to any device, ensuring an optimal user experience across desktop, mobile, and other devices. A website that fulfills the needs of your audience.<br />\r\n<br />\r\nAesthetically Pleasing and Functionally Superior: Leave a lasting impression on visitors with stunning visual design and flawless functionality. We design the website to keep visitors engaged and interested. We focus on easy-to-use navigation to quick page loading. If you are looking for a web design agency near me, you are at right destination.<br />\r\n<br />\r\n<strong>Conversion Optimization:</strong> Attract your target audience and transform them into loyal customers. Are you looking for a website developer Dubai? We design website to attract visitors, compelling them to take desired actions that align with your business goals. You will learn the art of turning visitors into devoted clients with our designed websites.<br />\r\nTailored Solutions to Empower Your Brand: We understand the importance of a well-defined website strategy. SEO Out of The Box is a website development company in Dubai, UAEto provide with the websites as per the company&#39;s need. Your website will help you create an understanding of your target audience and their need.<br />\r\n<br />\r\nExperience the Ultimate Website Development Solution!<br />\r\n<br />\r\nAt SEO Out Of The Box, we offer comprehensive <strong>website development services in Dubai UAE</strong> that cater to all your digital needs. Whether you require a brand-new website or a revamp of your existing online presence, our team is your one-stop destination for exceptional web development solutions.<br />\r\n<br />\r\n<strong>Niche Web Designs:</strong> The<strong> web development Dubai</strong> with us will help you create a websites that capture the uniqueness of your industry.<br />\r\n<strong>Highly Optimized Code:</strong> We prioritize simplicity, and highly optimized code, ensuring your web application remains agile and efficient.<br />\r\n<br />\r\n<strong>A True Tech Approach:</strong> Embracing the future with confidence with our cutting-edge technologies.<br />\r\n<br />\r\n<strong>5-Star Tech Support:</strong> SOB <strong>web design company UAE&nbsp;</strong>provides exceptional support for your business, addressing challenges head-on and ensuring your success in this new digital landscape.<br />\r\n<br />\r\nExperience the difference of Niche Web Designs and unlock unparalleled opportunities for your online ventures. Trust us to bring your unique industry to life in the digital realm. To begin a transforming path towards digital greatness, get in touch with us right away.<br />\r\n&nbsp;', 0, '2023-07-14 07:31:38', '2023-08-03 13:45:12'),
(3, 'Mobile App Development', 'App<br> Development', 'app-development', 'application-development_951161.webp', 'app-development.webp', '<p>Elevate Your Mobile Presence: Unleash the Power of Robust and Scalable Mobile Apps In today&#39;s mobile-first world, establishing a strong presence on smart phones is essential for businesses to thrive. We specialize in developing cutting-edge native and cross-platform <strong>mobile apps development services dubai</strong> that redefine industry standards, earn the trust of your target audience, and create lucrative revenue streams.</p>\r\n\r\n<ul>\r\n	<li>Robust and Scalable Solutions</li>\r\n	<li>Rich User Experiences</li>\r\n	<li>Setting New Standards</li>\r\n</ul>\r\n', 'app-development', 'Elevate Your Mobile Presence: Unleash the Power of Robust and Scalable Mobile Apps', 'Mobile App Development Companies in Dubai - SEO Out Of The Box ', 'SEO Out Of The Box is leading Customized Mobile App Development Company in Dubai UAE. We have expertise in offering iOS, Android, & flutter application development services across UAE.', 'app development companies in dubai, mobile app development dubai, mobile application development company dubai', 'Mobile App Development Companies in Dubai - SEO Out Of The Box ', '', 'website', 'SEO Out Of The Box is leading Customized Mobile App Development Company in Dubai UAE. We have expertise in offering iOS, Android, & flutter application development services across UAE.', '', 'SEO Out Of The Box', 'https://www.seooutofthebox.com/public/editor/files/Uploads/other/app-development-og.jpg', 'Mobile App Development Company in Dubai UAE', '<strong>Elevate Your Mobile Presence:</strong> Unleash the Power of Robust and Scalable Mobile Apps<br />\r\n&nbsp;<br />\r\nIn today&#39;s mobile-first world, establishing a strong presence on smart phones is essential for businesses to thrive. We specialize in developing cutting-edge native and cross-platform mobile apps development services dubai that redefine industry standards, earn the trust of your target audience, and create lucrative revenue streams.<br />\r\n&nbsp;<br />\r\n<strong>Robust and Scalable Solutions:</strong> Our mobile App expert team builds mobile apps that are not only visually stunning but also engineered to handle high performance and scalability.<br />\r\n&nbsp;<br />\r\n<strong>Rich User Experiences:</strong>&nbsp;We understand the importance of captivating your audience from the moment they engage with your app. Our focus is on creating immersive user experiences that leave a lasting impression, fostering loyalty and engagement.<br />\r\n&nbsp;<br />\r\n<strong>Setting New Standards:</strong>&nbsp;Our mobile apps are designed to set new benchmarks within your industry. By leveraging the latest technologies and trends, we empower your business to stay ahead of the competition.<br />\r\n&nbsp;<br />\r\nStep into the future of mobile technology with our exceptional mobile app development services in Dubai. Contact us today to unlock the potential of your business in the mobile-first world and make a lasting impact on your audience.<br />\r\n&nbsp;', 0, '2023-07-14 07:34:37', '2023-08-03 13:45:24'),
(4, 'Online Branding', 'Online<br> Branding', 'online-branding', 'online-baranding_1056464.webp', 'online-branding.webp', '<p>SOB offering top-tier online branding services are meticulously crafted to help businesses stand out, and flourish in a crowded marketplace.</p>\r\n\r\n<ul>\r\n	<li>Facebook</li>\r\n	<li>Twitter</li>\r\n	<li>Linkedin</li>\r\n	<li>Youtube</li>\r\n</ul>\r\n', 'computer', 'Ignite Your Brand\'s Online Presence', 'Advertising and Branding agency | Online Branding - SeoOutOfTheBox', 'Advertising and Creative Branding Agency Dubai UAE: SEOOutOfTheBox is a leading creative digital marketing agency and Marketing Agency Services in Dubai UAE.', 'Online Branding, Online Branding Services, Advertising and Branding agency', '', '', '', '', '', '', '', '', 'SOB offering top-tier online branding services are meticulously crafted to help businesses stand out, and flourish in a crowded marketplace.<br />\r\n&nbsp;<br />\r\n<strong>Unlock Your Potential:</strong>&nbsp;Our comprehensive range of online branding strategies is designed to enhance your brand&#39;s reputation, visibility, and overall online presence. From social media marketing to content marketing, search engine optimization (SEO), email marketing, and more, we have you covered.<br />\r\n&nbsp;<br />\r\n<strong>The Power of Strategy:&nbsp;</strong>A successful online branding journey begins with a deep understanding of your target audience and a clear identification of your unique value proposition. Through market research and competitor analysis, we gain valuable insights into your customer&#39;s needs, preferences, and behaviors, while uncovering the strengths and weaknesses of your competition.<br />\r\n&nbsp;<br />\r\n<strong>Craft Your Brand&#39;s Story:&nbsp;</strong>With our expert guidance, we help you articulate your brand&#39;s narrative and ensure it resonates with your audience. We understand the importance of creating an authentic and compelling brand story that captures attention, fosters connection, and drives engagement.<br />\r\n&nbsp;<br />\r\n<strong>Stay Ahead of the Curve:&nbsp;</strong>Our team of creative professionals stays at the forefront of industry trends and best practices, constantly evolving our strategies to keep your brand ahead of the competition. With our online branding services, you can rest assured that your brand will shine brightly in the digital realm.<br />\r\n&nbsp;<br />\r\n<strong>Don&#39;t blend in&mdash;stand out from the crowd:&nbsp;</strong>Elevate your brand with our exceptional online branding services. Contact us today to embark on a transformative journey toward a captivating online presence that leaves a lasting impression on your target audience.<br />\r\n&nbsp;<br />\r\n&nbsp;\r\n<h3><strong>Choose from Our Comprehensive Range of Services</strong></h3>\r\n&nbsp;<br />\r\n<strong>Brand Strategy:</strong>&nbsp;Crafting a clear and concise brand message that aligns with your business goals and values.<br />\r\n&nbsp;<br />\r\n<strong>Logo and Brand Identity:</strong>&nbsp;Your logo and visual identity are the face of your brand. A logo that represents your brand voice.<br />\r\n&nbsp;<br />\r\n<strong>A Stellar Website: </strong>Make a lasting impression with a visually appealing and user-friendly website.<br />\r\n&nbsp;<br />\r\n<strong>The Power of Social Media:</strong>&nbsp;Maximize brand awareness and engagement with a consistent social media presence.<br />\r\n&nbsp;<br />\r\n<strong>Create Compelling Content:</strong>&nbsp;Fuel your online branding strategy with high-quality content that engages and resonates with your audiences.<br />\r\n&nbsp;<br />\r\n<strong>Reputation Management:</strong>&nbsp;Maintain a positive online image by monitoring and responding to online feedback, and promptly addressing any concerns.<br />\r\n&nbsp;<br />\r\n<strong>Brand Message:</strong>&nbsp;Establish a strong brand identity with a consistent and compelling brand message while communicating your unique value proposition to your target audience.<br />\r\n&nbsp;<br />\r\n<strong>Strategic Competitive Analysis:</strong>&nbsp;Keep your competitors close and identify new opportunities with our thorough competitive analysis service.<br />\r\n&nbsp;<br />\r\n<strong>Track and Analyze Performance:</strong>&nbsp;Measure the effectiveness of your online branding strategy with our valuable insights into your brand&#39;s growth, engagement, and conversion rates, helping you make informed decisions.<br />\r\n&nbsp;<br />\r\nChoose our expert <strong>Online branding services in Dubai UAE</strong> to unlock the full potential of your brand. Contact us today to elevate your brand&#39;s presence, engage your audience, and drive remarkable results in the digital realm.<br />\r\n&nbsp;', 1, '2023-07-14 07:33:25', '2023-07-19 09:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `btn_title` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `title`, `sub_title`, `btn_title`, `link`, `image`, `status`) VALUES
(1, 'Slider-1', 'welcome to seo out of the box', '<h1>Serving Traffic</h1>\r\n', 'Discover More', '#', '1a.webp', 0),
(2, 'Slider-2', 'welcome to seo out of the box', '<h1>The company to rely upon</h1>\r\n', 'Discover More', '#', '2a.webp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `title`, `url`, `class`, `status`) VALUES
(1, 'Facebook', 'https://www.facebook.com/SEOOutOfTheBox/', 'facebook-square', 0),
(2, 'Twitter', 'https://twitter.com/seooutofthebox', 'twitter', 0),
(3, 'Linkedin', 'https://linkedin.com/', 'linkedin-in', 1),
(4, 'Instagram', 'https://www.instagram.com/seooutofthebox/', 'instagram', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `facebook` varchar(20) NOT NULL,
  `twiiter` varchar(20) NOT NULL,
  `instagram` varchar(20) NOT NULL,
  `youtube` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `sitename` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon_logo` varchar(255) NOT NULL,
  `site_map` varchar(100) NOT NULL,
  `robots` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `analytics` varchar(500) NOT NULL,
  `canonical` varchar(50) NOT NULL,
  `google_site_verification` varchar(255) NOT NULL,
  `og_title` varchar(100) NOT NULL,
  `og_locale` varchar(10) NOT NULL,
  `og_type` varchar(10) NOT NULL,
  `og_description` varchar(250) NOT NULL,
  `og_url` varchar(100) NOT NULL,
  `og_site_name` varchar(20) NOT NULL,
  `article_modified_time` varchar(25) NOT NULL,
  `og_image` varchar(100) NOT NULL,
  `og_image_alt` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `sitename`, `logo`, `favicon_logo`, `site_map`, `robots`, `email`, `meta_description`, `meta_keywords`, `analytics`, `canonical`, `google_site_verification`, `og_title`, `og_locale`, `og_type`, `og_description`, `og_url`, `og_site_name`, `article_modified_time`, `og_image`, `og_image_alt`) VALUES
(1, 'SEO Services Company Dubai UAE | Local SEO Dubai - Seooutofthebox', 'logo_1589235.png', 'fav_4956914.jpg', 'sitemap.xml', 'robots.txt', 'info@seooutofthebox.com', 'Leading SEO agency in Dubai UAE, SEOOutOfTheBox SEO Dubai works with SEO experts to bring top ranking to your website on Google SERPs and get quality SEO at affordable pricing.', 'seo services company in dubai, seo services in uae, search engine optimization dubai, seo expert dubai, SEO Dubai, local seo dubai', '<!-- Google tag (gtag.js) -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-J26SK23Z37\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'G-J26SK23Z37\');\r\n</script>\r\n', 'https://www.seooutofthebox.com', '<meta name=\"google-site-verification\" content=\"0mAcx7K0X9SVa5N-KwGLjSQfh3pcWw6V8e_3UPpiTlY\" />', 'SEO Services Company Dubai UAE | Local SEO Dubai - Seooutofthebox', '', 'website', 'Leading SEO agency in Dubai UAE, SEOOutOfTheBox SEO Dubai works with SEO experts to bring top ranking to your website on Google SERPs and get quality SEO at affordable pricing.', 'https://www.seooutofthebox.com', 'Seo Out Of The Box', '', 'https://www.seooutofthebox.com/public/editor/files/Uploads/other/main.jpg', 'SEO Services Company Dubai UAE');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `text` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `text`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Esam Mohammed Khoori', 'ICF Certified Coach', 'I couldn\'t be happier with the service provided by this company! Their attention to detail and commitment to excellence truly exceeded my expectations. Thanks to their hard work, my project was a huge success!', 'esam-mohammed-khoori.webp', 0, '2023-07-17 13:51:47', '2023-07-17 13:51:47'),
(2, 'Rakesh Khatri', 'Businessman', 'I\'ve worked with a lot of businesses over the years, but this one really stands out. From the very beginning, they listened carefully to my needs and provided exceptional customer service. I highly recommend them to anyone looking for quality work and a positive experience.', 'rakesh-khatri.webp', 0, '2023-07-17 13:52:33', '2023-07-17 13:52:33'),
(3, 'Haris Syed', 'CEO & Founder at CTA', 'I was blown away by the professionalism and expertise of this team. They really know their stuff, and they go above and beyond to ensure that their clients are happy. I couldn\'t have asked for a better experience!', 'haris-syed.webp', 0, '2023-07-17 13:52:47', '2023-07-17 13:52:47'),
(4, 'Soham Sitlani', 'Marketing Manager at DA', 'If you\'re looking for a reliable, talented, and friendly group of professionals to work with, look no further. These guys are top-notch, and they truly care about their clients. They made the entire process so easy and enjoyable!', 'soham-sitlani.webp', 0, '2023-07-17 13:53:11', '2023-07-17 13:53:11'),
(5, 'Franda Graves', 'ICF Certified Coach', 'I can\'t say enough good things about this company. They delivered exactly what they promised, on time and on budget. Their attention to detail and commitment to quality really set them apart. I would recommend them to anyone without hesitation!', 'franda-graves.webp', 0, '2023-07-17 13:53:31', '2023-07-17 13:53:31'),
(6, 'Zain Shah', 'Local Guide', 'This was an amazing experience working with the best SEO company in Dubai. Thanks to Neil Nabeel for being so supportive. His skills of understanding your business and sharing his ideas are to improve the business is mind blowing. I can say that SOB is also the best website development company in Dubai. Looking forward to working with SOB on a long term. I highly recommend this company.', 'zain-shah.webp', 1, '2023-08-03 15:28:53', '2023-08-03 15:28:53'),
(7, 'Henry Parker', 'Local Guide', 'i will rate the SEO OUT OF BOX, as the best seo company in dubai. with best price and excellent execution plan, after 4 months our website is standing on the first page of google for more than 7 keywords. and more than 25 long tail keywords. the dedicated manager provides the weekly reports along with there recommendations, which has been the game changer in this SEO process.', 'henry-parker.webp', 1, '2023-08-03 15:29:23', '2023-08-03 15:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `spass`, `email`, `full_name`, `avatar`, `userlevel`, `created_at`, `updated_at`, `lastip`, `status`) VALUES
(1, 'admin', '$2y$04$OiEscKm.ieKCPGs7QBprnujstnfvUrrUkrVbiTADvFtCi/6X/YzdC', '12345678', 'hajari@gmails.com', 'Hajari Patel', '6_2901216.jpg', 'admin', '2015-05-25 02:05:09', '2023-07-13 13:10:20', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerycat`
--
ALTER TABLE `gallerycat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_group`
--
ALTER TABLE `menu_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_type`
--
ALTER TABLE `menu_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gallerycat`
--
ALTER TABLE `gallerycat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menu_group`
--
ALTER TABLE `menu_group`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_type`
--
ALTER TABLE `menu_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
